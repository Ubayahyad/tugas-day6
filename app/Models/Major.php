<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Major extends Model
{
  use HasFactory;

  /**
   * fillable
   * for add to collumn
   * @var array
   */
  protected $fillable = [
    'major_name',
  ];
}
