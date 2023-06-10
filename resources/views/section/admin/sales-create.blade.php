<div class="modal fade" id="addSales" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-md" role="document">
        <div class="modal-content">
            <div class="modal-body p-0">
                <div class="card card-plain">
                    <div class="card-header pb-0 text-left">
                        <h3 class="font-weight-bolder text-success text-gradient">Add Sales</h3>
                        <p class="mb-0">Select your favorite image and make sales!</p>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('sales.store') }}" method="post" enctype="multipart/form-data">
                            @csrf()
                            <div class="input-group mb-3">
                                <img src="{{ asset('img/noimage.png') }}" alt="Uploading Image" id="imgPreview" width="300px">
                            </div>
                            <label for="image">Select Image</label>
                            <div class="input-group mb-3">
                                <input type="file" name="image" class="form-control" accept="image/*" id="imgInput" placeholder="Select Image" aria-label="Image"
                                    aria-describedby="image-addon" required>
                            </div>
                            <label for="name">Sales Name</label>
                            <div class="input-group mb-3">
                                <input type="text" name="name" class="form-control" placeholder="Sales Name" aria-label="Name"
                                    aria-describedby="name-addon" required>
                            </div>
                            <label for="phone">Phone</label>
                            <div class="input-group mb-3">
                                <input type="number" name="phone" class="form-control" placeholder="Phone" aria-label="Phone"
                                    aria-describedby="phone-addon" required>
                            </div>
                            <label for="message">Message</label>
                            <div class="input-group mb-3">
                                <input type="text" name="message" class="form-control" placeholder="Message" aria-label="Message"
                                    aria-describedby="message-addon" required>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-round bg-gradient-success btn-lg w-100 mt-4 mb-0">Save Sales</button>
                            </div>
                        </form>
                    </div>
                    <div class="card-footer text-center pt-0 px-lg-2 px-1">
                        <p class="mb-4 text-sm mx-auto">
                            Supported by
                            <a href="javascript:;" class="text-success text-gradient font-weight-bold">Andika Pranayoga</a>
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
