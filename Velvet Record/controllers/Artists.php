<?php
class Artists extends Controller
{
    public function index()
    {
        $this->loadModel('Artist');
        $artists = $this->Artist->getAll();
        $this->render('index', compact('artists'));
    }
}
