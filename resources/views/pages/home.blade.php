@extends('layouts.app')

@section('main-content')
<section class="container">
    <div class="row">
        <div class="col-12">
            <h1>
                Movies List
            </h1>
        </div>
    </div>
    @foreach ($movies as $movie)
        <article class="col-4 mb-3">
            <div class="card" style="width: 18rem;">
                <img src="{{ $movie->id }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">
                        {{ $movie->title }}
                    </h5>
                    <p class="card-text">
                        {{ $movie->original_title }}
                    </p>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                        {{ $movie->nationality }}
                    </li>
                    <li class="list-group-item">
                        {{ $movie->date }}
                    </li>
                    <li class="list-group-item">
                        {{ $movie->vote }}
                    </li>
                </ul>
            </div>
        </article>
    @endforeach

</section>



@endsection
