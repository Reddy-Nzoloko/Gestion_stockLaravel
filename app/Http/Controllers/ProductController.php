<?php
namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    // 1. Afficher la liste des produits
    public function index() {
        $produits = Product::all();
        return view('produits.index', compact('produits'));
    }

    // 2. Afficher le formulaire de création
    public function create() {
        return view('produits.create');
    }

    // 3. Enregistrer le produit dans la base de données
    public function store(Request $request) {
        // Validation : on vérifie que les champs sont bien remplis
        $request->validate([
            'nom' => 'required',
            'reference' => 'required|unique:products',
            'quantite' => 'required|integer',
            'prix' => 'required|numeric',
        ]);

        // Création du produit
        Product::create($request->all());

        // Redirection vers la liste avec un message de succès
        return redirect()->route('produits.index')->with('success', 'Produit ajouté !');
    }
}
