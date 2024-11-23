@extends('layouts.admin')

@section('menu','mobile featured')
@section('title','Mobile Featured')

@section('content')
<div class="col-12">
    <div class="card mb-4">
        <div class="card-header pb-0 p-3">
            <h6 class="mb-1">Mobile Featured</h6>
            <p class="text-sm">You can add or change the mobile featured here</p>
        </div>
        <div class="card-body p-3">
            <div class="row">
                <div class="col-xl-3 col-md-6 mb-xl-0 mb-4">
                    <div class="card h-100 card-plain border">
                        <div class="card-body d-flex flex-column justify-content-center text-center">
                            <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#addFeatured">
                                <i class="fa fa-plus text-secondary mb-3"></i>
                                <h5 class=" text-secondary"> New Mobile Featured </h5>
                            </a>
                        </div>
                    </div>
                </div>
                @foreach($data as $o)
                <div class="col-xl-3 col-md-6 mb-xl-0 mb-4">
                    <div class="card card-blog card-plain">
                        <div class="position-relative">
                            <a class="d-block shadow-xl border-radius-xl">
                                <img src="{{ asset('img/'.$o->image.'') }}" alt="img-blur-shadow"
                                    class="img-fluid shadow border-radius-xl">
                            </a>
                        </div>
                        <div class="card-body px-1 pb-0">
                            <p class="text-gradient text-dark mb-2 text-sm">{{ ucwords($o->name) }}</p>
                            <a href="javascript:;">
                                <h5>
                                    {{ ucwords($o->status) }}
                                </h5>
                            </a>
                            <div class="d-flex align-items-center justify-content-between">
                                <a href="{{ route('featured.edit',$o->id) }}" class="btn btn-outline-primary btn-sm mb-0">View Mobile Featured</a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>

@include('section.admin.featured-create')
@endsection