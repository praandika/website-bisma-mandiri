<div class="modal fade" id="addContact" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-md" role="document">
        <div class="modal-content">
            <div class="modal-body p-0">
                <div class="card card-plain">
                    <div class="card-header pb-0 text-left">
                        <h3 class="font-weight-bolder text-primary text-gradient">Add Media Social</h3>
                        <p class="mb-0">Create media social link</p>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('contact.store') }}" method="post">
                        @csrf()
                            <label for="media_social">Media Social</label>
                            <div class="input-group mb-3">
                                <input type="text" name="media_social" class="form-control" placeholder="Media Social Title" aria-label="media_social"
                                    aria-describedby="media_social-addon">
                            </div>
                            <label for="link">Link</label>
                            <div class="input-group mb-3">
                                <input type="text" name="link" class="form-control" placeholder="Link" aria-label="Link"
                                    aria-describedby="link-addon">
                            </div>
                            <div class="form-check form-switch">
                                <input class="form-check-input" name="newtab" type="checkbox" id="newtab">
                                <label class="form-check-label" for="newtab">Open in new tab</label>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-round bg-gradient-primary btn-lg w-100 mt-4 mb-0">Save Media Social</button>
                            </div>
                        </form>
                    </div>
                    <div class="card-footer text-center pt-0 px-lg-2 px-1">
                        <p class="mb-4 text-sm mx-auto">
                            Supported by
                            <a href="javascript:;" class="text-primary text-gradient font-weight-bold">Andika Pranayoga</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
