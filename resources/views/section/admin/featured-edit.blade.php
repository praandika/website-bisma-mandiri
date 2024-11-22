@section('menu','edit featured')
@section('title','Edit Featured')

<div class="row">
    <div class="col-sm-12 col-md-6">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header pb-0">
                    <h6>Edit Featured {{ ucwords($featured->name) }}</h6>
                </div>
                <div class="card-body px-4 pt-0 pb-4">
                    <form action="{{ route('featured.update',$featured->id) }}" method="post" enctype="multipart/form-data">
                        @csrf()
                        @method('PUT')
                        <input type="hidden" name="img_prev" value="{{ $featured->image }}">
                        <label for="image">Select Image</label>
                        <div class="input-group mb-3">
                            <input type="file" name="image" class="form-control" accept="image/*" id="imgInput"
                                placeholder="Select Image" aria-label="Image" aria-describedby="image-addon"
                                value="{{ $featured->image }}">
                        </div>
                        <label for="name">Featured Title</label>
                        <div class="input-group mb-3">
                            <input type="text" name="name" class="form-control" placeholder="Featured Title"
                                aria-label="Name" aria-describedby="name-addon" value="{{ $featured->name }}" required>
                        </div>
                        <div class="form-check form-switch">
                            <input class="form-check-input" name="status" type="checkbox" id="status"
                                {{ $featured->status == 'show' ? 'checked' : '' }}>
                            <label class="form-check-label" for="status">Show Menu</label>
                        </div>
                        <div class="text-center">
                            <button type="submit"
                                class="btn btn-round bg-gradient-primary btn-lg w-100 mt-4 mb-0">Update
                                Featured</button>
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
                    <h6>Featured Image</h6>
                </div>
                <div class="card-body px-4 pt-0 pb-4">
                    <div class="input-group mb-3">
                        <img src="{{ asset('img/'.$featured->image) }}" alt="Uploading Image" id="imgPreview" width="700px">
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
