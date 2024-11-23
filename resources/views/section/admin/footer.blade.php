@extends('layouts.admin')

@section('menu','footer')
@section('title','Footer')

@section('content')
<div class="row">
    <div class="col-sm-12 col-md-8">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header pb-0 p-3">
                    <h6 class="mb-1">Footer's Image</h6>
                    <p class="text-sm">You can add or change the footer's image here</p>
                </div>
                <div class="card-body p-3">
                    <div class="row">
                        <div class="col-xl-3 col-md-6 mb-xl-0 mb-4">
                            <div class="card h-100 card-plain border mb-4">
                                <div class="card-body d-flex flex-column justify-content-center text-center">
                                    <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#addFooter">
                                        <i class="fa fa-plus text-secondary mb-3"></i>
                                        <h5 class=" text-secondary"> New Footer Image </h5>
                                    </a>
                                </div>
                            </div>
                        </div>
                        @foreach($data as $o)
                        <div class="col-xl-3 col-md-6 mb-xl-0 mb-4">
                            <div class="card card-blog card-plain mb-4">
                                <div class="position-relative">
                                    <a class="d-block shadow-xl border-radius-xl">
                                        <img src="{{ asset('img/'.$o->image.'') }}" alt="img-blur-shadow"
                                            class="img-fluid shadow border-radius-xl">
                                    </a>
                                </div>
                                <div class="card-body px-1 pb-0">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <a href="{{ route('footer.edit',$o->id) }}"
                                            class="btn btn-outline-primary btn-sm mb-0">View Footer</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-12 col-md-4">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header pb-0 p-3">
                    <h6 class="mb-1">Footer's Maps</h6>
                    <p class="text-sm">You can add or change the footer's maps here</p>
                </div>
                <div class="card-body p-3">
                    <div class="row">
                        <div class="col-xl-12 col-md-12 mb-xl-0 mb-4">
                        @forelse($maps as $o)
                            <div class="card card-blog card-plain">
                                <div class="position-relative">
                                    <iframe src="{{ $o->link }}" width="100%" height="350px" style="border:0;" allowfullscreen=""
                        loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                </div>
                                <div class="card-body px-1 pb-0">
                                <form action="{{ route('map.change',$o->id) }}" method="post" enctype="multipart/form-data">
                                @csrf()
                                    <input type="text" name="link" class="form-control mb-3" placeholder="Insert maps link to change the current maps">
                                    <div class="d-flex align-items-center justify-content-between">
                                    <button type="submit" class="btn btn-outline-primary btn-sm mb-0">Change Maps</button>
                                    </div>
                                </form>
                                </div>
                            </div>
                        @empty
                            <div class="card card-blog card-plain">
                                <img src="{{ asset('img/google-maps-logo.png') }}" alt="Google Maps">
                                <div class="card-body px-1 pb-0">
                                <form action="{{ route('map.store') }}" method="post" enctype="multipart/form-data">
                                    @csrf()
                                    <p class="font-weight-bolder text-danger text-gradient">The maps isn't set</p>
                                    <input type="text" name="link" class="form-control mb-3" placeholder="Insert maps link to change the current maps">
                                    
                                    <div class="d-flex align-items-center justify-content-between">
                                        <button type="submit" class="btn btn-outline-primary btn-sm mb-0">Save Maps</button>
                                    </div>
                                </form>
                                </div>
                            </div>
                        @endforelse
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@include('section.admin.footer-create')
@endsection
