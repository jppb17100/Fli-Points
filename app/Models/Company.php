<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Company extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'company';
    public $timestamps = true;


    protected $fillable = [
        'name',
        'email',
        'fantasy_name',
        'street',
        'neighborhood',
        'state',
        'country',
        'number',
        'postal_cod',
        'admin_email',
        'admin_telefone',
        'admin_name',
        'email',
        'telephone',
        'password'
    ];
}
