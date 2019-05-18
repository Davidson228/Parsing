<?php

require 'vendor/autoload.php';
$db = new
\atk4\data\Persistence_SQL('mysql:dbname=vvv;host=localhost','root','');

class Da extends \atk4\data\Model {
 public $table = 'da';
 function init() {
   parent::init();
   $this->addField('name');
   $this->addField('price');

 }
}
