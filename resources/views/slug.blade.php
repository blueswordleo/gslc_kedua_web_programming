

@extends('template')

@section('container')
    
    <div class="container">
        <h2 class="mt-3 mb-2">{{ $posts["tittle"] }}</h2>
        <h5 class="text-secondary">by {{ $posts["penulis"] }}</h5>

        @if ( $posts["rating"]  === 5)
            <p class="badge bg-primary text-white">Artikel sangat bermanfaat</p>
        @elseif( $posts["rating"]>=3 && $posts["rating"] <5 )
            <p class="badge bg-primary text-white">Artikel cukup bermanfaat</p>
        @endif
            
        <img class="tampilan_awal"src="/{{ $posts["image"] }}" alt="" width="100%" height= "500px" object-fit="cover">
        <hr>
        <p class="text-justify">{{  $posts["isi"] }}</p>
        <hr>
    </div>

    <div class="container">

        <h2 class="pb-2">Choose other information</h2>
        @foreach ($post as $p)
            @if ( $p["slug"] !== $posts["slug"] )
            <div class="container d-flex flex-row">
                <img  src="/{{ $p["image"] }}" alt="" width="200 px" height="200 px">
                <div class="container d-flex flex-column justify-content-start">
                    <h3>{{  $p["tittle"] }}</h3> 
                    <h5 class="text-secondary">{{ $p["penulis"] }}</h5> 
                    <a href="/home/{{  $p["slug"]  }}">more..</a>
                </div>       
            </div>
            <hr>
        
            @endif
        @endforeach
    </div>
    
    
@endsection