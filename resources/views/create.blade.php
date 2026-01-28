<!DOCTYPE html>
<html>
<head>
    <title>Ajouter un produit</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="p-10 bg-gray-100">
    <div class="max-w-md mx-auto bg-white p-6 rounded shadow">
        <h1 class="text-xl font-bold mb-4">Nouveau Produit</h1>

        <form action="{{ route('produits.store') }}" method="POST">
            @csrf <div class="mb-3">
                <label>Nom du produit</label>
                <input type="text" name="nom" class="w-full border p-2" required>
            </div>
            <div class="mb-3">
                <label>Référence (SKU)</label>
                <input type="text" name="reference" class="w-full border p-2" required>
            </div>
            <div class="mb-3 flex gap-4">
                <div>
                    <label>Quantité</label>
                    <input type="number" name="quantite" class="w-full border p-2" required>
                </div>
                <div>
                    <label>Prix</label>
                    <input type="number" step="0.01" name="prix" class="w-full border p-2" required>
                </div>
            </div>
            <button type="submit" class="w-full bg-green-500 text-white py-2 rounded">Enregistrer</button>
        </form>
    </div>
</body>
</html>
