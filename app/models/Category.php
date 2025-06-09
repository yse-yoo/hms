<?php
class Category extends DB
{
    public $table_name = "categories";

    // public $values = [
    //     ['id' => 1, 'name' => 'フード'],
    //     ['id' => 2, 'name' => 'ドリンク'],
    // ];

    public function pluck()
    {
        $this->get();
        return array_column($this->values, 'name', 'id');
    }

    public function findByID($id)
    {
        // $filtered = array_filter($this->values, function ($value) use ($id) {
        //     return $value['id'] == $id;
        // });
        // return $filtered;

        $posts['id'] = $id;
        $sql = "SELECT * FROM {$this->table_name} WHERE id = :id;";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute($posts);
        $this->value = $stmt->fetch();
        return $this->value;
    }

    public function get($limit = 20)
    {
        // return $this->values;
        $sql = "SELECT * FROM {$this->table_name} LIMIT {$limit}";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();
        $this->values = $stmt->fetchAll();
        return $this->values;
    }

    public function insert($posts)
    {
        $sql = "INSERT INTO {$this->table_name} (name) VALUES (:name);";
        $stmt = $this->pdo->prepare($sql);
        $result = $stmt->execute($posts);
        return $result;
    }

    public function update($posts)
    {
        $sql = "UPDATE {$this->table_name} SET name = :name WHERE id = :id;";
        $stmt = $this->pdo->prepare($sql);
        $result = $stmt->execute($posts);
        return $result;
    }
}
