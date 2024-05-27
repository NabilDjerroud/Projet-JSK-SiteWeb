<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Joueur extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = array("nom", "prenom", "date_de_naissance", "poste", "numero", "image", 'condition_physique_id');

    public function imageFullPath(){
        return "/storage/$this->image";
    }

    public function condition_physique()
    {
        return $this->belongsTo(ConditionPhysique::class);
    }

}
