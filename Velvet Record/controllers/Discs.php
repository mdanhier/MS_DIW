<?php
class Discs extends Controller
{
    public function index()
    {
        $this->loadModel('Disc');
        $discs = $this->Disc->getAll();
        $this->render('index', compact('discs'));
    }
    public function id(int $id)
    {
        $this->loadModel('Disc');
        $this->loadModel('Artist');
        $disc = $this->Disc->getById($id);
        $artists = $this->Artist->getAll();
        $this->render('id', [compact('disc'), compact('artists')]);
    }
}
