@section('menu','edit sales')
@section('title','Edit Sales')

<div class="row">
    <div class="col-sm-12 col-md-6">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header pb-0">
                    <h6>Edit Sales {{ ucwords($sale->name) }}</h6>
                </div>
                <div class="card-body px-4 pt-0 pb-4">
                    <form action="{{ route('sales.update',$sale->id) }}" method="post" enctype="multipart/form-data">
                        @csrf()
                        @method('PUT')
                        <input type="hidden" name="img_prev" value="{{ $sale->image }}">
                        <label for="image">Select Image</label>
                        <div class="input-group mb-3">
                            <input type="file" name="image" class="form-control" accept="image/*" id="imgInput"
                                placeholder="Select Image" aria-label="Image" aria-describedby="image-addon"
                                value="{{ $sale->image }}">
                        </div>
                        <label for="name">Sales Name</label>
                        <div class="input-group mb-3">
                            <input type="text" name="name" class="form-control" placeholder="Sales Title"
                                aria-label="Name" aria-describedby="name-addon" value="{{ $sale->name }}" required>
                        </div>
                        <label for="phone">Phone</label>
                        <div class="input-group mb-3">
                            <input type="number" name="phone" class="form-control" placeholder="Phone"
                                aria-label="Phone" aria-describedby="phone-addon" value="{{ $sale->phone }}" required>
                        </div>
                        <label for="message">Message</label>
                        <div class="input-group mb-3">
                            <input type="text" name="message" class="form-control" placeholder="Message"
                                aria-label="Message" aria-describedby="message-addon" value="{{ str_replace('%20', ' ', $sale->message) }}" required>
                        </div>
                        <div class="form-check form-switch">
                            <input class="form-check-input" name="status" type="checkbox" id="status"
                                {{ $sale->status == 'show' ? 'checked' : '' }}>
                            <label class="form-check-label" for="status">Show Menu</label>
                        </div>
                        <div class="text-center">
                            <button type="submit"
                                class="btn btn-round bg-gradient-primary btn-lg w-100 mt-4 mb-0">Update
                                Sales</button>
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
                    <h6>Sales Image</h6>
                </div>
                <div class="card-body px-4 pt-0 pb-4">
                    <div class="input-group mb-3">
                        <img src="{{ asset('img/'.$sale->image) }}" alt="Uploading Image" id="imgPreview" width="700px">
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
