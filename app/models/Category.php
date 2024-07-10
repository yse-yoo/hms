<?php
class Category
{

    public $values = [
        ['id' => 1, 'name' => 'フード'],
        ['id' => 2, 'name' => 'ドリンク'],
    ];

    public function pluck()
    {
        return array_column($this->values, 'name', 'id');
    }

    public function findByID($id)
    {
        $filtered = array_filter($this->values, function ($value) use ($id) {
            return $value['id'] == $id;
        });
        return $filtered;
    }

    public function get()
    {
        return $this->values;
    }
}
