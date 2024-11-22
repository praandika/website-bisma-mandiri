@section('menu','edit contact')
@section('title','Edit Contact')

<div class="row">
    <div class="col-sm-12 col-md-6">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header pb-0">
                    <h6>Edit Contact {{ ucwords($contact->menu) }}</h6>
                </div>
                <div class="card-body px-4 pt-0 pb-4">
                    <form action="{{ route('contact.update',$contact->id) }}" method="post">
                        @csrf()
                        @method('PUT')
                        <label for="media_social">Media Social</label>
                        <div class="input-group mb-3">
                            <input type="text" name="media_social" class="form-control" placeholder="Media Social Title"
                                aria-label="media_social" aria-describedby="media_social-addon" value="{{ $contact->media_social }}">
                        </div>
                        <label for="link">Link</label>
                        <div class="input-group mb-3">
                            <input type="text" name="link" class="form-control" placeholder="Link" aria-label="Link"
                                aria-describedby="link-addon" value="{{ $contact->link }}">
                        </div>
                        <div class="form-check form-switch">
                            <input class="form-check-input" name="newtab" type="checkbox" id="newtab" {{ $contact->newtab == 1 ? 'checked' : '' }}>
                            <label class="form-check-label" for="newtab">Open in new tab</label>
                        </div>
                        <div class="form-check form-switch">
                            <input class="form-check-input" name="status" type="checkbox" id="status" {{ $contact->status == 'show' ? 'checked' : '' }}>
                            <label class="form-check-label" for="status">Show Menu</label>
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
