<?php
use View\View;
use Model\Main;


class MainController extends View
{
    public function actionIndex()
    {
        $id = $_POST["ID"] ? trim($_POST["ID"]) : 0;
        $model = new Main;

        if(isset($_POST["ACTION_DELETE"])) {
            $model->deleteField("numbers",(int)$id);
        }

        if(isset($_POST["ACTION_DELETE_USER"])) {
            $model->deleteField("users",(int)$id);
        }

        if(trim($_GET["SEARCH_TEXT"])){
            $numbers["list"] = $model->getNumbers($_GET["SEARCH_TEXT"]);
        }else{
            $numbers["list"] = $model->getNumbers();
        }
        
               
        $this->render('main/index', $numbers);
    }
}
