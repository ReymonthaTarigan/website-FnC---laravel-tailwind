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
        'fname',
        'email',
        'phone',
        'instansi',
        'project_type',
        'other_project',
        'project_desc',
        'cost',
        'deadline',
        'project_status',
    ];
}
