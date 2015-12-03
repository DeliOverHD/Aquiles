<?php

use FStudio\fsController as controller;

class indexUsuario extends controller {

  public function execute() {
    $this->defineView('home/usuario', 'indexUsuario', 'html');
  }

}
