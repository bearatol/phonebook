<?php

use View\View;
use Model\Createnumber;

class CreatenumberController extends View
{

    public function actionIndex()
    {
        $request["message"] = "";
        $model = new Createnumber;
        $p_name = trim($_POST["NAME"]);
        $p_phone = trim($_POST["PHONE"]);
        if($p_name && $p_phone) {
            $message = $model->setNumber($p_name, $p_phone);
        }
        if($message){
            $request["message"] = "Phone added!";
        }else{
            $request["message"] = "Phone wasn't added.";
        }
        $this->render('createnumber/index', $request);
    }
}
