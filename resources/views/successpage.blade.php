<x-app-layout>
    @section('title', 'Succès')
    <div class="container mt-5">
        <h1>Félicitations, votre boutique a été créée !</h1>
        <p>Vous pouvez y accéder en cliquant sur :
            <span style="color:red;">
                <a href="http://{{ $domain }}" target="_blank">{{ $domain }}</a>
            </span>
        </p>
    </div>
</x-app-layout>
