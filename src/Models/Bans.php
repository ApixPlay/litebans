<?php

namespace Azuriom\Plugin\Litebans\Models;

use Azuriom\Models\Traits\HasTablePrefix;
use Illuminate\Database\Eloquent\Model;

class Bans extends Model
{
 use HasTablePrefix;

 /**
  * The table prefix associated with the model.
  *
  * @var string
  */
 protected $prefix = 'litebans_';

 protected $connection = 'litebans';

 public static function getBansList()
 {
  return self::select('*')
   ->orderByDesc('id')->paginate(setting('litebans.perpage'));
 }
}
