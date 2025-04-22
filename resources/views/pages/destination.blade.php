@extends('layouts.master_pages')

@section('content')
    <div class="mx-2 md:mx-5">
        @include('components.navbar')
        @include('components.destination.hero')
        <div class="md:mx-14 lg:mx-24 mx-5 my-10">
            @include('components.destination.description')
            @include('components.destination.wisata')
            @include('components.destination.penginapan')
            @include('components.destination.kuliner')
        </div>
    </div>
@endsection
