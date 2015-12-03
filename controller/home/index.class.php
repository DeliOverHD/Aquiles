<?php

use FStudio\fsController as controller;

class index extends controller {

  public function execute() {
    $this->defineView('home', 'index', 'html');
  }

}
