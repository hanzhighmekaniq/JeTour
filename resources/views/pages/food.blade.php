@extends('layouts.master_pages')

@section('content')
    @include('components.navbar')
    <div class="mx-4 md:mx-5 pt-16 lg:pt-0">
        @include('components.hero_pages')
        <div class="flex justify-center">
            <div class="container">
                @include('components.food.culinary')
                @include('components.food.list_kuliner')
            </div>
        </div>
    </div>
@endsection
