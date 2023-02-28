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
        $disc = $this->Disc->getById($id);
        $this->render('id', compact('disc'));
    }
}
