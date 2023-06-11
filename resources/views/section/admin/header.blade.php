@section('menu','header')
@section('title','Header')

<div class="row">
    <div class="col-12">
        <button type="button" class="btn btn-block bg-gradient-primary mb-3" data-bs-toggle="modal"
            data-bs-target="#addMenu">Add Menu</button>
    </div>
    <div class="col-sm-12 col-md-6">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header pb-0">
                    <h6>Menus</h6>
                </div>
                <div class="card-body px-0 pt-0 pb-2">
                    <div class="table-responsive p-0">
                        <table class="table align-items-center mb-0">
                            <thead>
                                <tr>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Menu
                                    </th>
                                    <th
                                        class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                        Icon</th>
                                    <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        New Tab</th>
                                    <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Status</th>
                                    <th class="text-secondary opacity-7"></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($data as $o)
                                <tr>
                                    <td>
                                        <div class="d-flex px-2 py-1">
                                            <div class="avatar avatar-sm me-3" style="color: black;">
                                                {!! $o->icon !!}
                                            </div>
                                            <div class="d-flex flex-column justify-content-center">
                                                <h6 class="mb-0 text-sm">{{ $o->menu }}</h6>
                                                <p class="text-xs text-secondary mb-0">{{ $o->link }}</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="align-middle text-center">
                                        <span class="text-secondary text-xs font-weight-bold">{{ $o->icon }}</span>
                                    </td>
                                    <td class="align-middle text-center">
                                        <span
                                            class="text-secondary text-xs {{ $o->newtab == 1 ? 'font-weight-bold' : '' }}">{{ $o->newtab == 1 ? 'Yes' : 'No' }}</span>
                                    </td>
                                    <td class="align-middle text-center text-sm">
                                        <span
                                            class="badge badge-sm bg-gradient-{{ $o->status == 'show' ? 'success' : 'secondary' }}">{{ ucwords($o->status) }}</span>
                                    </td>
                                    <td class="align-middle">
                                        <a href="{{ route('header.edit',$o->id) }}"
                                            class="text-primary font-weight-bold text-xs" data-toggle="tooltip"
                                            data-original-title="Edit header">
                                            <i class="fa-sharp fa-regular fa-pen-to-square"></i>&nbsp;
                                            Edit
                                        </a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-12 col-md-3">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header pb-0 p-3">
                    <h6 class="mb-1">Logo</h6>
                    <p class="text-sm">You can change the website's logo here</p>
                </div>
                <div class="card-body p-3">
                    <div class="row">
                        
                        <div class="col-xl-12 col-md-6 mb-xl-0 mb-4">
                        @forelse($logo as $o)
                            <div class="card card-blog card-plain">
                                <div class="position-relative">
                                    <a class="d-block shadow-xl border-radius-xl">
                                        <img src="{{ asset('img/'.$o->image.'') }}" alt="img-blur-shadow"
                                            class="img-fluid shadow border-radius-xl" id="imgPreview" width="300px">
                                        
                                    </a>
                                </div>
                                <div class="card-body px-1 pb-0">
                                    <p class="text-gradient text-dark mb-2 text-sm">Logo</p>
                                    <form action="{{ route('image.change',$o->id) }}" method="post" enctype="multipart/form-data">
                                    @csrf()
                                        <input type="hidden" name="img_prev" value="{{ $o->image }}">
                                        <input type="file" name="image" class="form-control mb-3" accept="image/*" id="imgInput" placeholder="Select Image" aria-label="Image"
                                    aria-describedby="image-addon" required>
                                        <input type="hidden" name="section" value="logo">
                                        <div class="d-flex align-items-center justify-content-between">
                                        <button type="submit" class="btn btn-outline-primary btn-sm mb-0">Change Logo</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        @empty
                            <div class="card card-blog card-plain">
                                <div class="position-relative">
                                    <a class="d-block shadow-xl border-radius-xl">
                                        <img src="{{ asset('img/noimage.png') }}" alt="img-blur-shadow"
                                            class="img-fluid shadow border-radius-xl" id="imgPreview" width="200px">
                                        
                                    </a>
                                </div>
                                <div class="card-body px-1 pb-0">
                                    <p class="text-gradient text-dark mb-2 text-sm">Logo</p>
                                    <form action="{{ route('image.store') }}" method="post" enctype="multipart/form-data">
                                    @csrf()
                                        <input type="file" name="image" class="form-control mb-3" accept="image/*" id="imgInput" placeholder="Select Image" aria-label="Image"
                                    aria-describedby="image-addon" required>
                                        <input type="hidden" name="section" value="logo">
                                        <div class="d-flex align-items-center justify-content-between">
                                        <button type="submit" class="btn btn-outline-primary btn-sm mb-0">Save Logo</button>
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
    <div class="col-sm-12 col-md-3">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header pb-0 p-3">
                    <h6 class="mb-1">Logo Mobile</h6>
                    <p class="text-sm">You can change the mobile's logo here</p>
                </div>
                <div class="card-body p-3">
                    <div class="row">
                        
                        <div class="col-xl-12 col-md-6 mb-xl-0 mb-4">
                        @forelse($logoMobile as $o)
                            <div class="card card-blog card-plain">
                                <div class="position-relative">
                                    <a class="d-block shadow-xl border-radius-xl">
                                        <img src="{{ asset('img/'.$o->image.'') }}" alt="img-blur-shadow"
                                            class="img-fluid shadow border-radius-xl" id="imgMobilePreview" width="300px">
                                        
                                    </a>
                                </div>
                                <div class="card-body px-1 pb-0">
                                    <p class="text-gradient text-dark mb-2 text-sm">Logo Mobile</p>
                                    <form action="{{ route('image.change',$o->id) }}" method="post" enctype="multipart/form-data">
                                    @csrf()
                                        <input type="hidden" name="img_prev" value="{{ $o->image }}">
                                        <input type="file" name="image" class="form-control mb-3" accept="image/*" id="imgMobileInput" placeholder="Select Image" aria-label="Image"
                                    aria-describedby="image-addon" required>
                                        <input type="hidden" name="section" value="logomobile">
                                        <div class="d-flex align-items-center justify-content-between">
                                        <button type="submit" class="btn btn-outline-primary btn-sm mb-0">Change Logo Mobile</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        @empty
                            <div class="card card-blog card-plain">
                                <div class="position-relative">
                                    <a class="d-block shadow-xl border-radius-xl">
                                        <img src="{{ asset('img/noimage.png') }}" alt="img-blur-shadow"
                                            class="img-fluid shadow border-radius-xl" id="imgMobilePreview" width="200px">
                                        
                                    </a>
                                </div>
                                <div class="card-body px-1 pb-0">
                                    <p class="text-gradient text-dark mb-2 text-sm">Logo Mobile</p>
                                    <form action="{{ route('image.store') }}" method="post" enctype="multipart/form-data">
                                    @csrf()
                                        <input type="file" name="image" class="form-control mb-3" accept="image/*" id="imgMobileInput" placeholder="Select Image" aria-label="Image"
                                    aria-describedby="image-addon" required>
                                        <input type="hidden" name="section" value="logomobile">
                                        <div class="d-flex align-items-center justify-content-between">
                                        <button type="submit" class="btn btn-outline-primary btn-sm mb-0">Save Logo Mobile</button>
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

@include('section.admin.header-create')

@push('after-script')
<script>
    let imgInput = document.getElementById("imgInput");
    let imgPreview = document.getElementById("imgPreview");
    imgInput.onchange = evt => {
        const [file] = imgInput.files
        if (file) {
            imgPreview.src = URL.createObjectURL(file)
        }
    }
</script>

<script>
    let imgMobileInput = document.getElementById("imgMobileInput");
    let imgMobilePreview = document.getElementById("imgMobilePreview");
    imgMobileInput.onchange = evt => {
        const [file] = imgMobileInput.files
        if (file) {
            imgMobilePreview.src = URL.createObjectURL(file)
        }
    }
</script>
@endpush
