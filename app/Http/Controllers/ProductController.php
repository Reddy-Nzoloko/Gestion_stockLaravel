<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ProductController extends Controller
{
    /**
     * Affiche la liste du stock
     */
    public function index()
    {
        // On récupère les produits par ordre de création (le plus récent en premier)
        $produits = Product::latest()->get();
        return view('produits.index', compact('produits'));
    }

    /**
     * Affiche le formulaire de création
     */
    public function create()
    {
        return view('produits.create');
    }

    /**
     * Enregistre un nouveau produit avec sécurité
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nom'       => 'required|string|max:255',
            'reference' => 'required|string|unique:products,reference',
            'quantite'  => 'required|integer|min:0',
            'prix'      => 'required|numeric|min:0',
        ]);

        try {
            Product::create($validated);
            return redirect()->route('produits.index')->with('success', 'Produit ajouté avec succès !');
        } catch (\Exception $e) {
            return back()->withInput()->with('error', 'Erreur lors de l\'ajout : ' . $e->getMessage());
        }
    }

    /**
     * Supprime un produit du stock
     */
    // public function destroy(Product $product)
    // {
    //     $product->delete();
    //     return redirect()->route('produits.index')->with('success', 'Produit supprimé.');
    // }

    // Modification des nouveau produit
    // Affiche le formulaire de modification
public function edit(Product $product) {
    return view('produits.edit', compact('product'));
}

// Enregistre les modifications
public function update(Request $request, Product $product) {
    $validated = $request->validate([
        'nom' => 'required',
        'reference' => 'required|unique:products,reference,' . $product->id,
        'quantite' => 'required|integer',
        'prix' => 'required|numeric',
    ]);

    $product->update($validated);
    return redirect()->route('produits.index')->with('success', 'Produit mis à jour !');
}

// Supprime le produit
public function destroy(Product $product) {
    $product->delete();
    return redirect()->route('produits.index')->with('success', 'Produit supprimé !');
}
}
