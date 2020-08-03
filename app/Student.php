<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = ['nama', 'nim', 'email', 'no_tlfn', 'alamat', 'jurusan', 'angkatan'];
}
