@section('menu','edit marketplace')
@section('title','Edit Marketplace')

<div class="row">
    <div class="col-sm-12 col-md-6">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header pb-0">
                    <h6>Edit Marketplace {{ ucwords($marketplace->name) }}</h6>
                </div>
                <div class="card-body px-4 pt-0 pb-4">
                    <form action="{{ route('marketplace.update',$marketplace->id) }}" method="post"
                        enctype="multipart/form-data">
                        @csrf()
                        @method('PUT')
                        <input type="hidden" name="img_prev" value="{{ $marketplace->image }}">
                        <label for="image">Select Image</label>
                        <div class="input-group mb-3">
                            <input type="file" name="image" class="form-control" accept="image/*" id="imgInput"
                                placeholder="Select Image" aria-label="Image" aria-describedby="image-addon"
                                value="{{ $marketplace->image }}">
                        </div>
                        <input type="hidden" name="img_prev_mobile" value="{{ $marketplace->image_mobile }}">
                        <label for="image">Select Mobile Image</label>
                        <div class="input-group mb-3">
                            <input type="file" name="image_mobile" class="form-control" accept="image/*" id="imgInputMobile"
                                placeholder="Select Mobile Image" aria-label="Mobile Image" aria-describedby="image-addon"
                                value="{{ $marketplace->image_mobile }}">
                        </div>
                        <label for="marketplace">Marketplace Full Name</label>
                        <div class="input-group mb-3">
                            <input type="text" name="marketplace" class="form-control" placeholder="Marketplace Title"
                                aria-label="marketplace" aria-describedby="marketplace-addon" value="{{ $marketplace->marketplace }}">
                        </div>
                        <label for="marketplace_abbr">Marketplace Abbreviation</label>
                        <div class="input-group mb-3">
                            <input type="text" name="marketplace_abbr" class="form-control"
                                placeholder="Marketplace Abbr" aria-label="marketplace_abbr"
                                aria-describedby="marketplace_abbr-addon" value="{{ $marketplace->marketplace_abbr }}" required>
                        </div>
                        <label for="link">Marketplace Link</label>
                        <div class="input-group mb-3">
                            <input type="text" name="link" class="form-control" placeholder="Marketplace Link"
                                aria-label="link" aria-describedby="link-addon" value="{{ $marketplace->link }}" required>
                        </div>
                        <div class="form-check form-switch">
                            <input class="form-check-input" name="show_title" type="checkbox" id="show_title"
                                {{ $marketplace->show_title == 'show' ? 'checked' : '' }}>
                            <label class="form-check-label" for="show_title">Show Title</label>
                        </div>
                        <div class="form-check form-switch">
                            <input class="form-check-input" name="show_title_mobile" type="checkbox" id="show_title_mobile"
                                {{ $marketplace->show_title_mobile == 'show' ? 'checked' : '' }}>
                            <label class="form-check-label" for="show_title_mobile">Show Title Mobile</label>
                        </div>
                        <div class="form-check form-switch">
                            <input class="form-check-input" name="status" type="checkbox" id="status"
                                {{ $marketplace->status == 'show' ? 'checked' : '' }}>
                            <label class="form-check-label" for="status">Show Menu</label>
                        </div>
                        <div class="text-center">
                            <button type="submit"
                                class="btn btn-round bg-gradient-primary btn-lg w-100 mt-4 mb-0">Update
                                Marketplace</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-12 col-md-3">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header pb-0">
                    <h6>Marketplace Image</h6>
                </div>
                <div class="card-body px-4 pt-0 pb-4">
                    <div class="input-group mb-3">
                        <img src="{{ asset('img/'.$marketplace->image) }}" alt="Uploading Image" id="imgPreview"
                            width="700px">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-12 col-md-3">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header pb-0">
                    <h6>Marketplace Mobile Image</h6>
                </div>
                <div class="card-body px-4 pt-0 pb-4">
                    <div class="input-group mb-3">
                        <img src="{{ asset('img/'.$marketplace->image_mobile) }}" alt="Uploading Image" id="imgPreviewMobile"
                            width="700px">
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

<script>
    let imgInputMobile = document.getElementById("imgInputMobile");
    let imgPreviewMobile = document.getElementById("imgPreviewMobile");
    imgInputMobile.onchange = evt => {
        const [file] = imgInputMobile.files
        if (file) {
            imgPreviewMobile.src = URL.createObjectURL(file)
        }
    }
</script>
@endpush
