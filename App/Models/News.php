<?php

namespace App\Models;

use Core\Database;

class News {
  private $table = 'add-news';

  public function findAll($columns = '*', $cond = null) {
    $db = Database::getInstance();

    $data = $db->getList($this->table, $columns, $cond);

    return $data;
  }

  public function findByTitle($ttl) {

    $db = Database::getInstance();

    $data = $db->getList($this->table, "*", ["title" => "'" . $ttl . "'"]);

    return $data[0];
  }

  public function create($news) {
    $db = Database::getInstance();

    $created = $db->insert($this->table, $news);

    return $created;
  }
}