@extends('layouts.secondary-main')

@section('title', $advert->title)

@section('contentSecondary')

    <div>
        <h1>{{ $advert->title }}</h1>
    </div>

@endsection