@extends('layouts.app')

@section('title', 'Lista dei film')

@section('main-content')
    <section>
        <div class="container py-4">
            @dump($movies)
        </div>
    </section>
@endsection
