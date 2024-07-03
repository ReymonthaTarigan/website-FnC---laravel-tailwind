<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Form extends Model
{
    use HasFactory;
    protected $table = 'fnc_request';
    protected $primaryKey = 'id_request';
    public $timestamps = false;
    protected $fillable = [
        'nama',
        'email',
        'nomor_whatsapp',
        'jenis_proyek',
        'deskripsi_proyek',
        'deadline',
        'design_confirm'
    ];
}
