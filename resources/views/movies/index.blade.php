@extends('layouts.app')

@section('title', 'lista film')

@section('main-content')
    <section>
        <div class="container py-4">
            <div class="row g-3">
                @forelse ($movies as $movie)
                    <div class="col-4">
                        <div class="card">
                            <div class="card-body">
                                <h5>{{ $movie->title }}</h5>
                                <p>{{ $movie->original_title }}</p>
                                <p>{{ $movie->nationality }}</p>
                                <p>{{ $movie->date }}</p>
                                <p>{{ $movie->vote }}</p>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col-12">
                        no movies
                    </div>
                @endforelse
            </div>
        </div>
    </section>
@endsection
