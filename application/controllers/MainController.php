<?php

use View\View;
use Model\Main;


class MainController extends View
{
    public function actionIndex()
    {
        $id = $_POST["ID"] ? trim($_POST["ID"]) : 0;
        $model = new Main;

        if (isset($_POST["ACTION_DELETE"])) {
            $model->deleteField("numbers", (int)$id);
        }

        if (isset($_POST["ACTION_DELETE_USER"])) {
            $model->deleteField("users", (int)$id);
        }

        if (isset($_POST["ACTION_MOD"])) {
            $user_id = trim($_POST["USER_ID"]);
            $phone_id = trim($_POST["PHONE_ID"]);
            $name = trim($_POST["NAME"]);
            $phone = trim($_POST["PHONE"]);

            $model->updateField("users", (int)$user_id, "name", $name);

            if ($user_id && $phone_id) {
                $model->updateField("numbers", (int)$phone_id, "number", $phone);
            } elseif ($user_id) {
                $model->setNumber($phone, (int)$user_id);
            }
        }

        if (trim($_GET["SEARCH_TEXT"])) {
            $numbers["list"] = $model->getNumbers($_GET["SEARCH_TEXT"]);
        } else {
            $numbers["list"] = $model->getNumbers();
        }


        $this->render('main/index', $numbers);
    }
}
