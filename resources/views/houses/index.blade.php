@extends('layouts.app')


@section('page-title', 'Houses')
@section('content')
    <h1>Our houses</h1>
    <div class="container">
        <section class="houses row d-flex">
            @forelse ($houses as $house)
                <div class="col-3">
                    <div class=" card house">
                        <div class="card-img">
                            <img src="{{$house->image}}" class="img-fluid">
                        </div>
                        <div class="card-body">
                            <h3 class="text-muted">{{$house->address}}</h3>
                            <a href="{{route('house', ['house' => $house->id])}}">Visit this place</a>
                        </div>
                    </div>
                </div>
                
            @empty
                <p>Nothing to see here sorry</p>
            @endforelse
        </section>
    </div>
@endsection