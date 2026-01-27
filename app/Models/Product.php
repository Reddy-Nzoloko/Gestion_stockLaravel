<?php
// Model pour la table product
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    // On autorise Laravel à remplir ces champs via un formulaire
    protected $fillable = ['nom', 'description', 'reference', 'quantite', 'prix'];
}


