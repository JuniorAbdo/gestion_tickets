<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;
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
    ];
}
