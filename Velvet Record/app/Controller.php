<?php
abstract class Controller
{
    public function render(string $file, string $pageTitle, array $datas = [])
    {
        if (count($datas) > 1) {
            foreach ($datas as $data) {
                extract($data);
            }
            unset($data);
        } else
            extract($datas);
        unset($datas);
        ob_start();
        require_once(ROOT . 'views/' . (get_class($this)) . '/' . $file . '.php');
        $content = ob_get_clean();
        require_once(ROOT . 'views/layout/default.php');
    }
}
