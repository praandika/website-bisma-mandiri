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
@elseif(Route::is('product.*'))
    @if(Route::is('product.edit'))
        @include('section.admin.product-edit')
    @else
        @include('section.admin.product')
    @endif
@elseif(Route::is('sales.*'))
    @if(Route::is('sales.edit'))
        @include('section.admin.sales-edit')
    @else
        @include('section.admin.sales')
    @endif
@else
<h1>Welcome lads!</h1>
@endif

@endsection
