@extends('layout')
@section('title', 'Places AutoComplete')
@section('header', 'Places AutoComplete')
@section('content')
<div class="pac-card grid-cols-12" id="pac-card">
    <div>
        <div id="title">Autocomplete search</div>
        <div id="type-selector" class="pac-controls">
            <input type="radio" name="type" id="changetype-all" checked="checked" />
            <label for="changetype-all">All</label>

            <input type="radio" name="type" id="changetype-establishment" />
            <label for="changetype-establishment">establishment</label>

            <input type="radio" name="type" id="changetype-address" />
            <label for="changetype-address">address</label>

            <input type="radio" name="type" id="changetype-geocode" />
            <label for="changetype-geocode">geocode</label>

            <input type="radio" name="type" id="changetype-cities" />
            <label for="changetype-cities">(cities)</label>

            <input type="radio" name="type" id="changetype-regions" />
            <label for="changetype-regions">(regions)</label>
        </div>
        <br />
        <div id="strict-bounds-selector" class="pac-controls">
            <input type="checkbox" id="use-location-bias" value="" checked />
            <label for="use-location-bias">Bias to map viewport</label>

            <input type="checkbox" id="use-strict-bounds" value="" />
            <label for="use-strict-bounds">Strict bounds</label>
        </div>
    </div>
    <div id="pac-container">
        <input id="pac-input" class='border border-black' type="text" placeholder="Enter a location" />
    </div>
</div>
<div id="map"></div>
<div id="infowindow-content">
    <span id="place-name" class="title"></span><br />
    <span id="place-address"></span>
</div>
@endsection
