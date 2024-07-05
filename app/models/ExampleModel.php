<?php

namespace App\Models;

use Core\Database;
use PDO;

class ExampleModel {
    private $db;

    public function __construct() {
        $this->db = Database::getInstance()->getConnection();
    }

    public function getAll() {
        $stmt = $this->db->query("SELECT * FROM example_table");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function create($data) {
        $stmt = $this->db->prepare("INSERT INTO example_table (column1, column2) VALUES (:column1, :column2)");
        return $stmt->execute($data);
    }

    public function update($id, $data) {
        $data['id'] = $id;
        $stmt = $this->db->prepare("UPDATE example_table SET column1 = :column1, column2 = :column2 WHERE id = :id");
        return $stmt->execute($data);
    }

    public function delete($id) {
        $stmt = $this->db->prepare("DELETE FROM example_table WHERE id = :id");
        return $stmt->execute(['id' => $id]);
    }
}
