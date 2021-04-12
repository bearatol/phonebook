<?php

namespace Model;

use Db\Db;
use PDO;

class Createnumber
{
    private function setNumbers(string $phone, string $resultUser)
    {
        $db = Db::getConnection();
        $sql = "INSERT INTO `numbers`(`number`, `user`) VALUES ('{$phone}', '{$resultUser}')";
        $stmt = $db->query($sql);
        return $stmt ? true : false;
    }
    public function setNumber(string $name, string $phone)
    {
        if (!$name && !$phone) {
            return false;
        }

        $db = Db::getConnection();
        $sql = "SELECT `id` FROM `users` WHERE `name`='{$name}'";
        $stmt = $db->query($sql);
        $resultUser = $stmt->fetch(PDO::FETCH_ASSOC)["id"];

        if ($resultUser > 0) {
            $result = $this->setNumbers($phone, $resultUser);
        } else {
            $sql = "INSERT INTO `users`(`name`) VALUES ('{$name}')";
            $db->exec($sql);
            $resultUser = $db->lastInsertId();
            if ($resultUser > 0) {
                $result = $this->setNumbers($phone, $resultUser);
            }
        }
        if ($result) {
            return true;
        }

        return false;
    }
}
