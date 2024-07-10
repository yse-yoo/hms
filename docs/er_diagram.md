```mermaid
erDiagram
    menus {
        bigint id PK "ID"
        string name "名称"
        bigint category_id "カテゴリID"
        int price "価格"
        int stock "在庫"
        text summary "サマリー"
        text description "説明"
        text image_name "画像名"
        datetime created_at "作成日"
        datetime updated_at "更新日"
    }

    categories {
        bigint id PK "ID"
        string name "名称"
        datetime created_at "作成日"
        datetime updated_at "更新日"
    }

    menus }o--|| categories : "category_id"
```