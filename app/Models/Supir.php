<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supir extends Model
{
    use HasFactory;
    public $fillable = ['nama','foto','status','notlp','alamat'];

    public $timestamps = true;
}
