<?php

use View\View;
use Model\Createnumber;

class CreatenumberController extends View
{

    public function actionIndex()
    {
        $request["message"] = "";
        if($_POST["NAME"] && $_POST["PHONE"]){
            $model = new Createnumber;
            $message = $model->setNumber($_POST["NAME"], $_POST["PHONE"]);
            if($message){
                $request["message"] = "Phone added!";
            }else{
                $request["message"] = "Phone wasn't added.";
            }
        }
        $this->render('createnumber/index', $request);
    }
}
