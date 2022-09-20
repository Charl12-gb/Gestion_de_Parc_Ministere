<?php

namespace App\Models;

use App\Models\Assurance;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Voiture extends Model
{
    use HasFactory;

    protected $fillable = [
        'marque',
        'capacite',
        'immatriculation',
        'datdebservice',
        'dureeVie',
        'numchassis',
        'etat',
        'kilmax',
        'connsommation',
        'coutaquisition',
        'mouvement',
        'assurance_id'
    ];

    public function assurance(){
        return $this->belongsTo(Assurance::class);
    }
}