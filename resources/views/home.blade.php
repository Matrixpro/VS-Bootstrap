@extends('layout')

@section('content')
    <div class="row">
        <div class="hero-shadow">
            <img src="{{ Vite::asset('resources/images/newyork1920.jpg') }}"  class="img-fluid hero-image">
        </div>
    </div>
    <div class="row mt-5 mb-3">
        <div class="col text-center">
            <h1 class="fw-semibold">New Homes For Sale in New York</h1>
            <h3 class="mb-4 text-secondary">Find Your Dream Home In Beautiful New York City</h3>
            <p class="text-muted">
                {{ $lipsum->words(64) }}
            </p>
        </div>
    </div>
    <div class="form">
        <div class="row mb-4">
            <div class="col-lg-6">
            </div>
            <div class="col-lg-3">
                <select class="form-select filter_select mb-2">
                    <option value="filter_location-reset">Location</option>
                    @foreach ($locations_select as $key => $location)
                    <option value="filter_location-{{ $key }}" {{ $key == cache('filter_location') ? 'selected' : '' }}>{{ $location }}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-lg-3">
                <select class="form-select filter_select mb-2">
                    <option value="sort_price-DESC" {{ 'DESC' == cache('sort_price') ? 'selected' : '' }}>Price: High to Low</option>
                    <option value="sort_price-ASC" {{ 'ASC' == cache('sort_price') ? 'selected' : '' }}>Price: Low to High</option>
                    <option value="sort_sqft-DESC" {{ 'DESC' == cache('sort_sqft') ? 'selected' : '' }}>Sq ft: High to Low</option>
                    <option value="sort_sqft-ASC" {{ 'ASC' == cache('sort_sqft') ? 'selected' : '' }}>Sq ft: Low to High</option>
                </select>
            </div>
        </div>
    </div>
    <div id="locations_grid_container">
        @include('locations_grid')
    </div>
@endsection
