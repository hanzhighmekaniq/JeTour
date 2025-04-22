@extends('layouts.master_pages')

@section('content')
    <div class="mx-2 md:mx-5">
        @include('components.navbar')
        @include('components.hero_pages')
        <div class="md:mx-14 lg:mx-24 mx-5">
            @include('components.food.culinary')
            @include('components.food.list_kuliner')
        </div>
    </div>
@endsection
