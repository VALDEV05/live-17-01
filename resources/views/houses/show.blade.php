@extends('layouts.app')


@section('page-title', 'House')
@section('content')
    <section class="houses">
        <img src="{{$house->image}}" class="img-fluid">
        <h3 class="text-muted">{{$house->address}}</h3>

    </section>
@endsection