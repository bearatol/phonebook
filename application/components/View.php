<?php


namespace View;


class View
{
    protected function render($file, $variables = [])
    {
        extract($variables, EXTR_OVERWRITE);

        ob_start();
        require_once(ROOT . '/templates/header.php');
        require_once(ROOT . '/application/views/' . $file . '.php');
        require_once(ROOT . '/templates/footer.php');
        $renderedView = ob_get_clean();

        echo $renderedView;

        return true;
    }
}