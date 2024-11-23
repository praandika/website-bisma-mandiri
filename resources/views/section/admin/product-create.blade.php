<div class="modal fade" id="addProduct" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-md" role="document">
        <div class="modal-content">
            <div class="modal-body p-0">
                <div class="card card-plain">
                    <div class="card-header pb-0 text-left">
                        <h3 class="font-weight-bolder text-info text-gradient">Add Product</h3>
                        <p class="mb-0">Select your favorite image and create an amazing product</p>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('product.store') }}" method="post" enctype="multipart/form-data">
                            @csrf()
                            <div class="input-group mb-3">
                                <img src="{{ asset('img/noimage.png') }}" alt="Uploading Image" id="imgPreview" width="300px">
                            </div>
                            <label for="image">Select Image</label>
                            <div class="input-group mb-3">
                                <input type="file" name="image" class="form-control" accept="image/*" id="imgInput" placeholder="Select Image" aria-label="Image"
                                    aria-describedby="image-addon" required>
                            </div>
                            <label for="name">Product Name</label>
                            <div class="input-group mb-3">
                                <input type="text" name="name" class="form-control" placeholder="Product Name" aria-label="Name"
                                    aria-describedby="name-addon" required>
                            </div>
                            <label for="price">Price</label>
                            <div class="input-group mb-3">
                                <input type="number" name="price" class="form-control" placeholder="Price" aria-label="Price"
                                    aria-describedby="price-addon" required>
                            </div>
                            <fieldset class="border p-3">
                                <label class="w-auto">Transmition</label>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="transmition" id="at" value="at" checked>
                                    <label class="custom-control-label" for="at">AT (Automatic)</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="transmition" id="mt" value="mt">
                                    <label class="custom-control-label" for="mt">MT (Manual)</label>
                                </div>
                            </fieldset>
                            <div class="text-center">
                                <button type="submit" class="btn btn-round bg-gradient-info btn-lg w-100 mt-4 mb-0">Save Product</button>
                            </div>
                        </form>
                    </div>
                    <div class="card-footer text-center pt-0 px-lg-2 px-1">
                        <p class="mb-4 text-sm mx-auto">
                            Supported by
                            <a href="javascript:;" class="text-info text-gradient font-weight-bold">Andika Pranayoga</a>
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
@endpush
