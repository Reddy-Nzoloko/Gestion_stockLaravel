<form action="{{ route('produits.update', $product->id) }}" method="POST">
    @csrf
    @method('PUT')

    <label>Nom du produit :</label>
    <input type="text" name="nom" value="{{ $product->nom }}">

    <button type="submit">Mettre à jour</button>
</form>
