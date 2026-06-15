<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mypegawai extends Model
{
    use HasFactory;

    protected $table = 'mypegawai';
    protected $primaryKey = 'kodepegawai';

    public $incrementing = false;
    protected $keyType = 'string';
    public $timestamps = false;

    protected $fillable = [
        'kodepegawai',
        'namalengkap',
        'divisi',
        'departemen'
    ];
}
