@section('menu','edit product')
@section('title','Edit Product')

<div class="row">
    <div class="col-sm-12 col-md-6">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header pb-0">
                    <h6>Edit Product {{ ucwords($product->name) }}</h6>
                </div>
                <div class="card-body px-4 pt-0 pb-4">
                    <form action="{{ route('product.update',$product->id) }}" method="post"
                        enctype="multipart/form-data">
                        @csrf()
                        @method('PUT')
                        <input type="hidden" name="img_prev" value="{{ $product->image }}">
                        <label for="image">Select Image</label>
                        <div class="input-group mb-3">
                            <input type="file" name="image" class="form-control" accept="image/*" id="imgInput"
                                placeholder="Select Image" aria-label="Image" aria-describedby="image-addon"
                                value="{{ $product->image }}">
                        </div>
                        <label for="name">Product Name</label>
                        <div class="input-group mb-3">
                            <input type="text" name="name" class="form-control" placeholder="Product Title"
                                aria-label="Name" aria-describedby="name-addon" value="{{ $product->name }}" required>
                        </div>
                        <label for="price">Price</label>
                        <div class="input-group mb-3">
                            <input type="number" name="price" class="form-control" placeholder="Price"
                                aria-label="Price" aria-describedby="price-addon" value="{{ $product->price }}"
                                required>
                        </div>
                        <fieldset class="border p-3">
                            <label class="w-auto">Transmition</label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="transmition" id="at" value="at" {{ $product->transmition == 'at' ? 'checked' : '' }}>
                                <label class="custom-control-label" for="at">AT (Automatic)</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="transmition" id="mt" value="mt" {{ $product->transmition == 'mt' ? 'checked' : '' }}>
                                <label class="custom-control-label" for="mt">MT (Manual)</label>
                            </div>
                        </fieldset>
                        <div class="form-check form-switch">
                            <input class="form-check-input" name="status" type="checkbox" id="status"
                                {{ $product->status == 'show' ? 'checked' : '' }}>
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
                    <h6>Product Image</h6>
                </div>
                <div class="card-body px-4 pt-0 pb-4">
                    <div class="input-group mb-3">
                        <img src="{{ asset('img/'.$product->image) }}" alt="Uploading Image" id="imgPreview"
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
@endpush
