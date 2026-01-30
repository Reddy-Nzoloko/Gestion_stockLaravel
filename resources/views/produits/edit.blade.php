<form action="{{ route('produits.update', $product->id) }}" method="POST">
    @csrf
    @method('PUT')

    <input type="text" name="nom" value="{{ $product->nom }}">
    <input type="number" name="quantite" value="{{ $product->quantite }}">
    <input type="text" name="prix" value="{{ $product->prix }}">

    <button type="submit">Mettre à jour</button>
</form>
