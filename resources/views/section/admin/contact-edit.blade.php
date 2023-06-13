@section('menu','edit contact')
@section('title','Edit Contact')

<div class="row">
    <div class="col-sm-12 col-md-6">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header pb-0">
                    <h6>Edit Contact {{ ucwords($contactWidget->menu) }}</h6>
                </div>
                <div class="card-body px-4 pt-0 pb-4">
                    <form action="{{ route('contact.update',$contactWidget->id) }}" method="post">
                        @csrf()
                        @method('PUT')
                        <label for="media_social">Media Social</label>
                        <div class="input-group mb-3">
                            <input type="text" name="media_social" class="form-control" placeholder="Media Social Title"
                                aria-label="media_social" aria-describedby="media_social-addon" value="{{ $contactWidget->media_social }}">
                        </div>
                        <label for="link">Link</label>
                        <div class="input-group mb-3">
                            <input type="text" name="link" class="form-control" placeholder="Link" aria-label="Link"
                                aria-describedby="link-addon" value="{{ $contactWidget->link }}">
                        </div>
                        <div class="text-center">
                            <button type="submit"
                                class="btn btn-round bg-gradient-primary btn-lg w-100 mt-4 mb-0">Update
                                Contact</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
