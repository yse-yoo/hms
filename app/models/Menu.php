<?php
class Menu extends DB
{
    public $table_name = "menus";

    public function findByID($id)
    {
        $posts['id'] = $id;
        $sql = "SELECT * FROM {$this->table_name} WHERE id = :id;";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute($posts);
        $this->value = $stmt->fetch();
        return $this->value;
    }

    public function get($limit = 20)
    {
        $sql = "SELECT * FROM {$this->table_name} LIMIT {$limit}";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();
        $this->values = $stmt->fetchAll();
        return $this->values;
    }

    public function insert($posts)
    {
        unset($posts['image']);
        $posts['image_name'] = "";
        if ($image_name = $this->uploadImage()) {
            $posts['image_name'] = $image_name;
        }

        $sql = "INSERT INTO {$this->table_name}
                    (
                    name, category_id, price,
                    stock, summary, description, image_name,
                    is_room_service, calorie
                    )
                VALUES
                    (
                    :name, :category_id, :price,
                    :stock, :summary, :description, :image_name,
                    :is_room_service, :calorie
                    );
               ";
        $stmt = $this->pdo->prepare($sql);
        $result = $stmt->execute($posts);
        return $result;
    }

    public function update($posts)
    {
        if (!$posts['id']) return;

        unset($posts['image']);
        if ($image_name = $this->uploadImage()) {
            $posts['image_name'] = $image_name;
        }

        $sql = "UPDATE {$this->table_name} SET
                    name = :name, 
                    category_id = :category_id, 
                    price = :price,
                    stock = :stock, 
                    summary = :summary, 
                    description = :description,
                    calorie = :calorie,
                    is_room_service = :is_room_service,
                    image_name = :image_name
                WHERE id = :id;";

        $stmt = $this->pdo->prepare($sql);
        $result = $stmt->execute($posts);
        return $result;
    }

    public function uploadImage()
    {
        if (!empty($_FILES['image']['name'])) {
            if (!is_dir(MENUS_IMAGE_DIR)) {
                mkdir(MENUS_IMAGE_DIR, 0777, true);
            }
    
            $uploadFile = MENUS_IMAGE_DIR . basename($_FILES['image']['name']);
            if (move_uploaded_file($_FILES['image']['tmp_name'], $uploadFile)) {
                return basename($_FILES['image']['name']);
            }
        }
    }
    
}
