<?php
abstract class Controller
{
    public function render(string $file, string $pageTitle, array $data = [])
    {
        if (count($data) > 1) {
            foreach ($data as $dataOne) {
                extract($dataOne);
            }
            unset($dataOne);
        } else
            extract($data);
        unset($data);
        ob_start();
        require_once(ROOT . 'views/' . (get_class($this)) . '/' . $file . '.php');
        $content = ob_get_clean();
        require_once(ROOT . 'views/layout/default.php');
    }
}