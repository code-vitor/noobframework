<?php
namespace App\Controllers;

use Core\Controller;
use App\Models\News;

class PortalController extends Controller {    
  public function index() {
    $nInstance = new News();
    $nData = $nInstance->findAll();

    $this->view('index', [ 'add-news' => $nData ]);
  }

  public function news($ttl) {
    $ttl = str_replace('-', ' ', $ttl);

    $nInstance = new News();
    $nData = $nInstance->findByTitle($ttl);

    $this->view('add-news', [ 'add-news' => $nData ]);
  }

  public function create($n) {
    $nInstance = new News();
    var_dump($n);
    $nData = $nInstance->create($n);

    $this->redirect('http://localhost/noobframework/portal');
  }

  public function add() {
    $this->view('add');
  }
}