<!DOCTYPE html>
<html>
<head>
    <title>Gestion de Stock</title>
    <script src="https://cdn.tailwindcss.com"></script> </head>
<body class="p-10 bg-gray-100">
    <div class="max-w-4xl mx-auto bg-white p-6 rounded shadow">
        <div class="flex justify-between mb-4">
            <h1 class="text-2xl font-bold">Mon Stock</h1>
            <a href="{{ route('produits.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded">+ Ajouter un produit</a>
        </div>

        @if(session('success'))
            <div class="bg-green-100 text-green-700 p-2 mb-4">{{ session('success') }}</div>
        @endif

        <table class="w-full border-collapse border">
            <thead>
                <tr class="bg-gray-200">
                    <th class="border p-2">Nom</th>
                    <th class="border p-2">Référence</th>
                    <th class="border p-2">Quantité</th>
                    <th class="border p-2">Prix</th>
                </tr>
            </thead>
            <tbody>
                @foreach($produits as $p)
                <tr>
                    <td class="border p-2">{{ $p->nom }}</td>
                    <td class="border p-2 text-center">{{ $p->reference }}</td>
                    <td class="border p-2 text-center">{{ $p->quantite }}</td>
                    <td class="border p-2 text-right">{{ $p->prix }} €</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
