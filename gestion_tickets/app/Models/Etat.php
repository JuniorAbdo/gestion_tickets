<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Etat extends Model
{
    use HasFactory;
    protected $fillable=[
        'intitule_etat',
    ];
    public function getEtats(){
        $this->all()->value('intitule_etat');
    }
}
