<?php
abstract class Controller
{
    public function loadModel(string $model)
    {
        require_once(ROOT . 'models/' . $model . '.php');
        $this->$model = new $model();
    }
    public function render(string $file, array $datas = [])
    {
        if (count($datas) > 1) {
            foreach ($datas as $data) {
                extract($data);
            }
            unset($data);
        } else
            extract($datas);
        unset($datas);
        require_once(ROOT . 'views/' . (get_class($this)) . '/' . $file . '.php');
    }
}
