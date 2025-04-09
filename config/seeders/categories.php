<?php
/*
db()->query("CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `parent_id` int(10) UNSIGNED NOT NULL DEFAULT 0,
  PRIMARY KEY (`id`),
  UNIQUE KEY `slug` (`slug`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci");*/

db()->query("set foreign_key_checks = 0");
db()->query("truncate table categories");
$categories = [
    ['title' => 'Женская обувь', 'slug' => 'zhenskaya-obuv-1', 'parent_id' => 0],
    ['title' => 'Мужская обувь', 'slug' => 'muzhskaya-obuv-2', 'parent_id' => 0],
    ['title' => 'Женская одежда', 'slug' => 'zhenskaya-odezhda-3', 'parent_id' => 0],
    ['title' => 'Мужская одежда', 'slug' => 'muzhskaya-odezhda-4', 'parent_id' => 0],
    ['title' => 'Туфли', 'slug' => 'tufli-5', 'parent_id' => 1],
    ['title' => 'Сапоги', 'slug' => 'sapogi-6', 'parent_id' => 1],
    ['title' => 'Кроссовки', 'slug' => 'krossovki-7', 'parent_id' => 1],
    ['title' => 'Босоножки', 'slug' => 'bosonozhki-8', 'parent_id' => 1],
    ['title' => 'Туфли', 'slug' => 'tufli-9', 'parent_id' => 2],
    ['title' => 'Сапоги', 'slug' => 'sapogi-10', 'parent_id' => 2],
    ['title' => 'Кроссовки', 'slug' => 'krossovki-11', 'parent_id' => 2],
    ['title' => 'Куртки', 'slug' => 'kurtki-12', 'parent_id' => 3],
    ['title' => 'Шубы', 'slug' => 'shuby-13', 'parent_id' => 3],
    ['title' => 'Платья', 'slug' => 'platya-14', 'parent_id' => 3],
    ['title' => 'Спортивные костюмы', 'slug' => 'sportivnye-kostyumy-15', 'parent_id' => 3],
    ['title' => 'Джинсы', 'slug' => 'dzhinsy-16', 'parent_id' => 3],
    ['title' => 'Куртки', 'slug' => 'kurtki-17', 'parent_id' => 4],
    ['title' => 'Спортивные костюмы', 'slug' => 'sportivnye-kostyumy-18', 'parent_id' => 4],
    ['title' => 'Костюмы', 'slug' => 'kostyumy-19', 'parent_id' => 4],
    ['title' => 'Брюки', 'slug' => 'bryuki-20', 'parent_id' => 4],
    ['title' => 'Футболки', 'slug' => 'futbolki-21', 'parent_id' => 4],
];
foreach ($categories as $category) {
    db()->query("insert into `categories` (`title`, `slug`, `parent_id`) values (?,?,?)", [$category['title'], $category['slug'], $category['parent_id']]);
}
db()->query("set foreign_key_checks = 1");
