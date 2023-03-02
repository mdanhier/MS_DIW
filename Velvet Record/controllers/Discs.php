<?php
class Discs extends Controller
{
    public function index()
    {
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => "http://127.0.0.1:8080/API/Discs/readall.php",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_2,
            CURLOPT_HTTPHEADER => array(
                "cache-control: no-cache"
            ),
        ));
        $response = curl_exec($curl);
        curl_close($curl);
        $discs = json_decode($response, true);
        $this->render('index', 'Disques', $discs);
    }
    public function onedisc(int $id)
    {
        if (isset($_POST['alterdisc'])) {
            if ($_POST['alterdisc'] == 'edit') {
                var_dump($_POST);
            } elseif ($_POST['alterdisc'] == 'delete') {
                var_dump($_POST);
            }
        }
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => "http://127.0.0.1:8080/API/Discs/readone.php?id=" . $id,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_2,
            CURLOPT_HTTPHEADER => array(
                "cache-control: no-cache"
            ),
        ));
        $response = curl_exec($curl);
        curl_close($curl);
        $disc = json_decode($response, true);
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => "http://127.0.0.1:8080/API/Artists/readall.php",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_2,
            CURLOPT_HTTPHEADER => array(
                "cache-control: no-cache"
            ),
        ));
        $response = curl_exec($curl);
        curl_close($curl);
        $artists = json_decode($response, true);
        $this->render('onedisc', ($disc['discs']['disc_title'] . ' - ' . $disc['discs']['artist']['artist_name']), [$disc, $artists]);
    }
}
