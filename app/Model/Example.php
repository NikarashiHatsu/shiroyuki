<?php

namespace App\Model;

use Shiroyuki\Database\Model;

class Example extends Model {
  /**
   * The table used.
   * 
   * @var string
   */
  protected $table = 'table_name';

  /**
   * The primary key used in the table.
   * 
   * @var string
   */
  protected $primaryKey = 'id';
}