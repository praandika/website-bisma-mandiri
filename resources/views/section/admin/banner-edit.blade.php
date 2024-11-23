@section('menu','edit banner')
@section('title','Edit Banner')

<div class="row">
    <div class="col-sm-12 col-md-6">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header pb-0">
                    <h6>Edit Banner {{ ucwords($banner->name) }}</h6>
                </div>
                <div class="card-body px-4 pt-0 pb-4">
                    <form action="{{ route('banner.update',$banner->id) }}" method="post" enctype="multipart/form-data">
                        @csrf()
                        @method('PUT')
                        <input type="hidden" name="img_prev" value="{{ $banner->image }}">
                        <label for="image">Select Image</label>
                        <div class="input-group mb-3">
                            <input type="file" name="image" class="form-control" accept="image/*" id="imgInput"
                                placeholder="Select Image" aria-label="Image" aria-describedby="image-addon"
                                value="{{ $banner->image }}">
                        </div>
                        <label for="name">Banner Title</label>
                        <div class="input-group mb-3">
                            <input type="text" name="name" class="form-control" placeholder="Banner Title"
                                aria-label="Name" aria-describedby="name-addon" value="{{ $banner->name }}" required>
                        </div>
                        <label for="description">Description</label>
                        <div class="input-group mb-3">
                            <input type="text" name="description" class="form-control" placeholder="Description"
                                aria-label="Description" aria-describedby="description-addon"
                                value="{{ $banner->description }}" required>
                        </div>
                        <div class="form-check form-switch">
                            <input class="form-check-input" name="status" type="checkbox" id="status"
                                {{ $banner->status == 'show' ? 'checked' : '' }}>
                            <label class="form-check-label" for="status">Show Menu</label>
                        </div>
                        <div class="text-center">
                            <button type="submit"
                                class="btn btn-round bg-gradient-primary btn-lg w-100 mt-4 mb-0">Update
                                Banner</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-12 col-md-6">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header pb-0">
                    <h6>Banner Image</h6>
                </div>
                <div class="card-body px-4 pt-0 pb-4">
                    <div class="input-group mb-3">
                        <img src="{{ asset('img/'.$banner->image) }}" alt="Uploading Image" id="imgPreview" width="700px">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

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
@endpush
