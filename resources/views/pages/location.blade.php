@extends('layouts.master_pages')

@section('content')
    @include('components.navbar')
    <div class="mx-4 md:mx-5 pt-16 lg:pt-0">
        @include('components.hero_pages')
        <div class="flex justify-center">
            <div class="container">
                @include('components.location.description')
                @include('components.location.nearby_hotel')
            </div>
        </div>
    </div>
@endsection
@extends('layouts.master_pages')
