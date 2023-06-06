@extends('layouts.admin')

@section('content')

@if(Route::is('header.*'))
    @if(Route::is('header.edit'))
        @include('section.admin.header-edit')
    @else
        @include('section.admin.header')
@endif

@endsection
