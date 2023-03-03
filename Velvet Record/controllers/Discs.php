<?php
class Discs extends Controller
{
    public function index()
    {
        $curlDiscsReadAll = curl_init();
        curl_setopt_array($curlDiscsReadAll, array(
            CURLOPT_URL => "http://127.0.0.1/API/Discs/readall.php",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_HTTPHEADER => array(
                "cache-control: no-cache"
            ),
        ));
        $responseDiscsReadAll = curl_exec($curlDiscsReadAll);
        curl_close($curlDiscsReadAll);
        $discs = json_decode($responseDiscsReadAll, true);
        $this->render('index', 'Disques', $discs);
    }
    public function onedisc(int $id)
    {
        if (isset($_POST['alterdisc'])) {
            if ($_POST['alterdisc'] == 'edit') {
                $data = json_encode($_POST);
                $curlDiscEdit = curl_init();
                curl_setopt_array($curlDiscEdit, array(
                    CURLOPT_URL => "http://127.0.0.1/API/Discs/edit.php",
                    CURLOPT_POST => true,
                    CURLOPT_RETURNTRANSFER => true,
                    CURLOPT_HTTPHEADER => array(
                        "Content-Type: application/json",
                    ),
                    CURLOPT_POSTFIELDS => $data,
                ));
                $responseDiscEdit = curl_exec($curlDiscEdit);
                curl_close($curlDiscEdit);
                print_r($responseDiscEdit);
                print_r(curl_error($curlDiscEdit));
                print_r($data);
            } elseif ($_POST['alterdisc'] == 'delete') {
                print_r($_POST);
            }
        }
        $curlDiscReadOne = curl_init();
        curl_setopt_array($curlDiscReadOne, array(
            CURLOPT_URL => "http://127.0.0.1/API/Discs/readone.php?id=" . $id,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_HTTPHEADER => array(
                "cache-control: no-cache"
            ),
        ));
        $responseDiscReadOne = curl_exec($curlDiscReadOne);
        curl_close($curlDiscReadOne);
        $disc = json_decode($responseDiscReadOne, true);
        $curlArtistsReadAll = curl_init();
        curl_setopt_array($curlArtistsReadAll, array(
            CURLOPT_URL => "http://127.0.0.1/API/Artists/readall.php",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_HTTPHEADER => array(
                "cache-control: no-cache"
            ),
        ));
        $responseArtistsReadAll = curl_exec($curlArtistsReadAll);
        curl_close($curlArtistsReadAll);
        $artists = json_decode($responseArtistsReadAll, true);
        $this->render('onedisc', ($disc['discs']['disc_title'] . ' - ' . $disc['discs']['artist']['artist_name']), [$disc, $artists]);
    }
}