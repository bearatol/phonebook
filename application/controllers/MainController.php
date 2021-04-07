<?php
use View\View;
use Model\Main;


class MainController extends View
{
    public function actionIndex()
    {
        $model = new Main;
        if($_GET["SEARCH_TEXT"]){
            $numbers["list"] = $model->getNumbers($_GET["SEARCH_TEXT"]);
        }else{
            $numbers["list"] = $model->getNumbers();
        }        
        $this->render('main/index', $numbers);
    }
}
