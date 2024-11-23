@section('menu','edit header')
@section('title','Edit Header')

<div class="row">
    <div class="col-sm-12 col-md-6">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header pb-0">
                    <h6>Edit Menu {{ ucwords($header->menu) }}</h6>
                </div>
                <div class="card-body px-4 pt-0 pb-4">
                    <form action="{{ route('header.update',$header->id) }}" method="post">
                        @csrf()
                        @method('PUT')
                        <label for="menu">Menu</label>
                        <div class="input-group mb-3">
                            <input type="text" name="menu" class="form-control" placeholder="Menu Title"
                                aria-label="menu" aria-describedby="menu-addon" value="{{ $header->menu }}">
                        </div>
                        <label for="link">Link</label>
                        <div class="input-group mb-3">
                            <input type="text" name="link" class="form-control" placeholder="Link" aria-label="Link"
                                aria-describedby="link-addon" value="{{ $header->link }}">
                        </div>
                        <label for="icon">Icon</label>
                        <div class="input-group mb-3">
                            <input type="text" name="icon" class="form-control" placeholder="Icon" aria-label="Icon"
                                aria-describedby="icon-addon" value="{{ $header->icon }}">
                        </div>
                        <div class="form-check form-switch">
                            <input class="form-check-input" name="newtab" type="checkbox" id="newtab" {{ $header->newtab == 1 ? 'checked' : '' }}>
                            <label class="form-check-label" for="newtab">Open in new tab</label>
                        </div>
                        <div class="form-check form-switch">
                            <input class="form-check-input" name="status" type="checkbox" id="status" {{ $header->status == 'show' ? 'checked' : '' }}>
                            <label class="form-check-label" for="status">Show Menu</label>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-round bg-gradient-primary btn-lg w-100 mt-4 mb-0">Update
                                Menu</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
