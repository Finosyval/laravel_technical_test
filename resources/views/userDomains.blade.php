<x-app-layout>
    @section('title', 'Mes sous domaines')
    <h1>Vos domaines</h1>
    <ul>
        @foreach ($shops as $shop)
            <li>
                {{ $loop->iteration }}. 
                <a href="http://{{ $shop->domain_name }}" target="_blank">{{ $shop->domain_name }}</a>
            </li>
        @endforeach
    </ul> 
</x-app-layout>