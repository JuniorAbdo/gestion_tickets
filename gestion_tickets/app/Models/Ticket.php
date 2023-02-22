<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Ticket extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable=[
        'number_ticket',
        'title',
        'descrptiopn',
        'pice',
        'user_id',
        'csc_id',
        'etat_id',
        'categorie_id',
        'sous_categorie_id',
        'created_at',
        'updated_at',
        'deleted_at',
    ];
}
