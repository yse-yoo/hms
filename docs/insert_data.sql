-- ブレックファースト（category_id = 1）
INSERT INTO menus (name, category_id, price, stock, summary, description, image_name, is_room_service, calories)
VALUES
('クラシックブレックファスト', 1, 2400, 10, 'トースト・卵・ベーコンの王道セット', '焼きたてパンと地元産卵を使った朝食セット。フルーツとドリンク付き。', 'breakfast_classic.jpg', 1, 650),
('エッグベネディクト', 1, 2600, 10, '半熟ポーチドエッグとオランデーズソース', 'スモークサーモンまたはハムを選べる、朝の人気メニュー。', 'eggs_benedict.jpg', 1, 520);

-- ランチ（category_id = 2）
INSERT INTO menus (name, category_id, price, stock, summary, description, image_name, is_room_service, calories)
VALUES
('シェフ特製ハンバーグプレート', 2, 2800, 15, '肉汁あふれる特製ハンバーグ', '国産牛を使用した手ごねハンバーグに赤ワインソースを添えて。ライスまたはパン付き。', 'hamburg_steak.jpg', 1, 800),
('季節野菜のパスタ', 2, 2300, 15, '旬の野菜たっぷり', 'ホテル農園の有機野菜をふんだんに使用したトマトベースのヘルシーパスタ。', 'season_pasta.jpg', 0, 670);

-- ディナー（category_id = 3）
INSERT INTO menus (name, category_id, price, stock, summary, description, image_name, is_room_service, calories)
VALUES
('国産牛フィレステーキ', 3, 5200, 8, 'やわらかく芳醇な味わい', 'シェフ厳選の国産牛をミディアムレアで焼き上げ、トリュフソースで仕上げました。', 'filet_steak.jpg', 1, 950),
('オマール海老のグリル', 3, 4800, 5, '濃厚な海の旨み', 'カナダ産オマール海老を贅沢に使用したグリル料理。香草バターソースで。', 'lobster_grill.jpg', 0, 720);

-- ドリンク（category_id = 4）
INSERT INTO menus (name, category_id, price, stock, summary, description, image_name, is_room_service, calories)
VALUES
('アッサムティー', 4, 1200, 20, '芳醇なコクの紅茶', 'アッサム地方の茶葉を使用した濃厚な紅茶。ミルクとも相性抜群です。', 'assam_tea.jpg', 1, 2),
('カフェラテ', 4, 1000, 20, '香り豊かなエスプレッソとミルク', '濃密なエスプレッソにフォームミルクを注いだ一杯。お部屋でもカフェ気分を。', 'cafe_latte.jpg', 1, 130);