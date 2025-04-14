<x-layout>
<div class="container vh-100">
    <div class="row justify-content-center 100-h100 align-items-center">
        <div class="col-12 col-md-6">
            <h2 class="display-4">Titolo: {{$anime['title']}}</h2>
            <h3>Genere: @foreach ($anime['genres'] as $genre )
                <a href="{{ route('anime.index', ['genre_id'=>$genre['mal_id'], 'genre_name'=>$genre['name']])}}">{{$genre['name'] }}</a>
                @endforeach</h3>
        </div>
        <div class="col-12 col-md-6 d-flex justify-content-center">
            <img src="{{$anime['images']['jpg']['image_url']}}" alt="Poster di {{$anime['title']}}">
        </div>
    </div>
</div>








</x-layout>