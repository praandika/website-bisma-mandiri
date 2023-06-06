@extends('layouts.admin')

@section('content')

@if(Route::is('header.*'))
    @if(Route::is('header.edit'))
        @include('section.admin.header-edit')
    @else
        @include('section.admin.header')
    @endif
@elseif(Route::is('banner.*'))
    @if(Route::is('banner.edit'))
        @include('section.admin.banner-edit')
    @else
        @include('section.admin.banner')
    @endif
@else
<h1>Welcome lads!</h1>
@endif

@endsection
