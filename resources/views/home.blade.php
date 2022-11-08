@extends('template')

@section('container')
    <div class="container">
        <h2 class="mb-2 mt-3">About Malang</h2>
        <img class="img-fluid tampilan_awal mb-3" src="/google.jpg" alt="foto gambar">
    </div>
    
    
    <hr>
    <div>
        <h2>Click for information</h2>
        <div class="d-flex justify-content-between mb-7">
            @foreach ($posts as $p)
                <div class="p-2">
                    <div class="card" height="600px">
                        <a href="/home/{{  $p["slug"]  }}">
                            <img class="img-fluid" src="/{{ $p["image"] }}" alt="" height="500 px" width="500 px"> 
                            <p class="text-decoration-none text-secondary d-flex justify-content-center">{{ $p["tittle"] }}</p>
                        </a>
                    </div>
                </div>   
            @endforeach
        </div>
    </div>
    <hr>
@endsection