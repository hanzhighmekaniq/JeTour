@extends('layouts.master_pages')

@section('content')
    @include('components.hotel_details.gallery')
    <div class="md:mx-14 lg:mx-24 mx-5">
        @include('components.hotel_details.description')
        @include('components.hotel_details.rating')
        @include('components.hotel_details.pricing')
    </div>
@endsection
