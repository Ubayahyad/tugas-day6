<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dosen extends Model
{
  use HasFactory;

  /**
   * fillable
   * fill to collumn
   * @var array
   */
  protected $fillable = [
    'dosen_name'
  ];

  // jika dosen butuh data mahasiswa ini harus pake belongsTo
  // soalnya 1 dosen bisa banyak mahasiswa

  // public function student()
  // {
  //   return $this->belongsTo(Student::class);
  // }
}
