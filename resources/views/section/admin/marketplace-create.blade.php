<div class="modal fade" id="addMarketplace" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-md" role="document">
        <div class="modal-content">
            <div class="modal-body p-0">
                <div class="card card-plain">
                    <div class="card-header pb-0 text-left">
                        <h3 class="font-weight-bolder text-danger text-gradient">Add Marketplace</h3>
                        <p class="mb-0">Select your favorite image and create an amazing marketplace</p>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('marketplace.store') }}" method="post" enctype="multipart/form-data">
                            @csrf()
                            <div class="input-group mb-3">
                                <img src="{{ asset('img/noimage.png') }}" alt="Uploading Image" id="imgPreview" width="300px">
                            </div>
                            <label for="image">Select Image</label>
                            <div class="input-group mb-3">
                                <input type="file" name="image" class="form-control" accept="image/*" id="imgInput" placeholder="Select Image" aria-label="Image"
                                    aria-describedby="image-addon" required>
                            </div>
                            <div class="input-group mb-3">
                                <img src="{{ asset('img/noimage.png') }}" alt="Uploading Image" id="imgPreviewMobile" width="300px">
                            </div>
                            <label for="image_mobile">Select Mobile Image</label>
                            <div class="input-group mb-3">
                                <input type="file" name="image_mobile" class="form-control" accept="image/*" id="imgInputMobile" placeholder="Select Mobile Image" aria-label="Mobile Image"
                                    aria-describedby="image-addon" required>
                            </div>
                            <label for="marketplace">Marketplace Full Name</label>
                            <div class="input-group mb-3">
                                <input type="text" name="marketplace" class="form-control" placeholder="Marketplace Title" aria-label="marketplace"
                                    aria-describedby="marketplace-addon" required>
                            </div>
                            <label for="marketplace_abbr">Marketplace Abbreviation</label>
                            <div class="input-group mb-3">
                                <input type="text" name="marketplace_abbr" class="form-control" placeholder="Marketplace Abbr" aria-label="marketplace_abbr"
                                    aria-describedby="marketplace_abbr-addon" required>
                            </div>
                            <label for="link">Marketplace Link</label>
                            <div class="input-group mb-3">
                                <input type="text" name="link" class="form-control" placeholder="Marketplace Link" aria-label="link"
                                    aria-describedby="link-addon" required>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-round bg-gradient-danger btn-lg w-100 mt-4 mb-0">Save Marketplace</button>
                            </div>
                        </form>
                    </div>
                    <div class="card-footer text-center pt-0 px-lg-2 px-1">
                        <p class="mb-4 text-sm mx-auto">
                            Supported by
                            <a href="javascript:;" class="text-danger text-gradient font-weight-bold">Andika Pranayoga</a>
                        </p>
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
