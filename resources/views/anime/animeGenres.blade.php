{{-- INIZIO LAYOUT --}}
<x-layout>
    {{-- INIZIO CARDS --}}
    <div class="conainer">
        <div class="row">
            {{-- TITOLO 1 --}}
            <h2 class="display-4 text-center my-5">Tutti i generi di Anime disponibili</h2>
            @foreach ($genres as $genre)
            <div class="col-12 col-md-4 mb-3">
                <div class="card" style="width: 18rem">
                    <div class="card-body">
                        {{-- TITOLO 2 --}}
                        <h5 class="card-title">{{$genre['name']}}</h5>
                        {{-- SOTTO-TITOLO --}}
                        <h6 class="card-subtitle mb-2 text-body-secondary">Anime disponibili: {{$genre['count']}}</h6>
                        <a href="{{route ('anime.index', ['genre_id'=>$genre['mal_id'], 'genre_name'=>$genre['name']])}}">Leggi di più</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    {{-- FINE CARDS --}}
    
    
    
    
    
    
    
    
    {{-- FINE LAYOUT --}}
</x-layout>