<x-app-layout>
    <div class="container mt-5">
        <h1 class="text-dark">Créer votre boutique</h1>
    
        <form method="POST" action="{{ route('shop.store') }}">
            @csrf
    
            <!-- Champ pour le nom de la boutique -->
            <div class="form-group">
                <label for="shop_name" class="text-dark">Nom de la boutique</label>
                <input type="text" name="shop_name" id="shop_name" class="form-control @error('shop_name') is-invalid @enderror" value="{{ old('shop_name') }}" required>
    
                <!-- Affichage de l'erreur de validation -->
                @error('shop_name')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
    
            <!-- Bouton de soumission -->
            <button type="submit" class="btn btn-primary">Créer la boutique</button>
        </form>
    </div>
</x-app-layout>
