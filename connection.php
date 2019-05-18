<?php

require 'vendor/autoload.php';
$db = new
\atk4\data\Persistence_SQL('mysql:dbname=heroku_deabe0130a943ba;host=eu-cdbr-west-02.cleardb.net','b118774f4919d0:','6f6bc49f');

class Da extends \atk4\data\Model {
 public $table = 'da';
 function init() {
   parent::init();
   $this->addField('name');
   $this->addField('price');

 }
}
