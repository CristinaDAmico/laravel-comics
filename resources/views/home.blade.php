@extends('layouts.main')

@section('content')
<section class="comics">
    <div class="container">
        <div class="cards d-flex">
            @foreach ($cards as $card)
                <div class="card">
                    <img src="{{ $card['image']}}" alt="">
                    <h3 class="card-title">{{ $card['title']}}</h3>
                </div>
            @endforeach
        </div>
    </div>
</section>
@endsection