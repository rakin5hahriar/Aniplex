@extends('layouts.main')

@section('main')
<div class="container">
    <div class="row">
        @foreach ($anime as $item)
            <div class="col-md-4 mt-5">
            <div class="card">
                <img src="{{$item->image}}" class="card-img-top" alt="..." style="aspect-ratio: 4 / 3; object-fit: cover;">
                <div class="card-body">
                    <h5 class="card-title">{{$item->name}}</h5>
                    <p class="card-text"><span class="badge bg-success">{{ $item->genre }}</span></p>
                    <p class="card-text">{{ Str::limit($item->description, 60) }}</p>
                    <a href="#" class="btn btn-secondary disabled">Rating : {{$item->rating}}</a>
                </div>
            </div>
            </div>        
        @endforeach
    </div>
</div>
@endsection