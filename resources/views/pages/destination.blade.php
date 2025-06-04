@extends('layouts.master_pages')

@section('content')
    <div class="px-2 md:px-5">
        @include('components.navbar')
        @include('components.destination.hero')
        <div class="flex justify-center">
            <div class="container py-10 px-2 lg:px-0 ">
                @include('components.destination.description')
                @include('components.destination.wisata')
                @include('components.destination.penginapan')
                @include('components.destination.kuliner')
            </div>
        </div>
    </div>
@endsection
