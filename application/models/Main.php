<?php

namespace Model;

use Db\Db;
use PDO;

class Main
{
    public function getNumbers(string $search_text = "")
    {
        $db = Db::getConnection();
        if ($search_text === "") {
            $sql = "SELECT numbers.id, numbers.number as phone, users.id as `user_id`, users.name FROM numbers RIGHT JOIN users ON numbers.user=users.id ORDER BY numbers.id ASC";
        } elseif (strlen($search_text) > 0) {
            $sql = "SELECT numbers.id, numbers.number as phone, users.id as `user_id`, users.name FROM numbers RIGHT JOIN users ON numbers.user=users.id WHERE numbers.number='{$search_text}' OR users.name='{$search_text}' ORDER BY numbers.id ASC";
        }
        $stmt = $db->query($sql);
        if (!$stmt) {
            return false;
        }
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        if ($result) {
            return $result;
        }

        return false;
    }

    public function deleteField(string $table, int $id) {
        $db = Db::getConnection();
        $sql = "DELETE FROM {$table} WHERE `id`={$id}";
        $stmt = $db->query($sql);
    }
}
