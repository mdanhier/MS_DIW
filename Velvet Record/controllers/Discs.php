<?php
class Discs extends Controller
{
    public function index()
    {
        $this->loadModel('Disc');
        $discs = $this->Disc->getAll();
        $this->render('index', compact('discs'));
    }
}