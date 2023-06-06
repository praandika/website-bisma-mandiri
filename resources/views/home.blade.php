@extends('layouts.admin')

@section('content')

@if(Route::is('header.*'))
    @if(Route::is('header.edit'))
        @include('section.admin.header-edit')
    @else
        @include('section.admin.header')
    @endif
@else
    @if(Route::is('banner.edit'))
        @include('section.admin.banner-edit')
    @else
        @include('section.admin.banner')
    @endif
@endif

@endsection
