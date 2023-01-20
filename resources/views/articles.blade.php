@extends('layouts.app')

@section('content')
    {{-- <div class="row">
        <div class="card p-2" style="max-height: 15rem;">
            <img class="card-img " src="https://picsum.photos/200/300?random=2" alt="Card image cap">
            <div class="card-body">
                <h4 class="card-title">
                    {{ $articles->first()->title }}
                </h4>
                <p>
                    {{ $articles->first()->content }}
                </p>
            </div>
        </div>
    </div> --}}
    <div class="row">
        @foreach ($articles as $article)
            <div class="card m-3 p-2" style="width: 18rem;">
                <img class="card-img-top" src="https://picsum.photos/200/300?random=1" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">
                        {{ $article->title }}
                    </h5>
                    <p class="card-text">
                        {{ $article->content }}
                    </p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        @endforeach
    </div>
@endsection
