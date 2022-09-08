@extends ('layouts.main')

@section('main-content')
    <div class="container">
        <div class="row justify-content-between">
                @forelse ($movies as $movie)
                    <div class="card col-3 m-4">
                        <div class="card-body">
                            <h5 class="card-title">Titolo: {{ $movie->title }}</h5>
                            <h6 class="card-subtitle mb-2 text-muted">Titolo originale: {{ $movie->original_title }}</h6>
                            <p class="card-text">Data di uscita: {{ $movie->date }}</p>
                            <p class="card-text">Paese di produzione: {{ $movie->nationality }}</p>
                            <p class="card-text">Voto: {{ $movie->vote }}</p>
                        </div>
                    </div>
                @empty
                    <div>
                        <h3>Non ci sono film disponibili!</h3>
                    </div>
                @endforelse
        </div>
    </div>
@endsection
