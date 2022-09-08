@extends ('layouts.main')

@section('main-content')
    <div>
        <ul>
            @forelse ($movies as $movie)
                <li>
                    {{ $movie->id }} - {{ $movie->title }}
                </li>
            @empty
                <div>
                    <h3>Non ci sono film disponibili!</h3>
                </div>
            @endforelse
        </ul>
    </div>
@endsection
