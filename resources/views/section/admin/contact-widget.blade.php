@extends('layouts.admin')

@section('menu','contact widget')
@section('title','Contact Widget')

@section('content')
<div class="col-12">
    <button type="button" class="btn btn-block bg-gradient-primary mb-3" data-bs-toggle="modal"
        data-bs-target="#addContact">Add Media Social</button>
</div>
<div class="col-sm-12 col-md-12">
    <div class="col-12">
        <div class="card mb-4">
            <div class="card-header pb-0">
                <h6>Media Social Links</h6>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
                <div class="table-responsive p-0">
                    <table class="table align-items-center mb-0">
                        <thead>
                            <tr>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Media
                                    Social
                                </th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                    Link</th>
                                <th
                                    class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                    Status</th>
                                <th class="text-secondary opacity-7"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($data as $o)
                            <tr>
                                <td>
                                    <span
                                        class="text-secondary text-xs font-weight-bold">{{ ucwords($o->media_social) }}</span>
                                </td>
                                <td>
                                    <span class="text-secondary text-xs font-weight-bold">{{ $o->link }}</span>
                                </td>
                                <td>
                                    <span
                                        class="badge badge-sm bg-gradient-{{ $o->status == 'show' ? 'success' : 'secondary' }}">{{ ucwords($o->status) }}</span>
                                </td>
                                <td class="align-middle">
                                    <a href="{{ route('contact.edit',$o->id) }}"
                                        class="text-primary font-weight-bold text-xs" data-toggle="tooltip"
                                        data-original-title="Edit Contact">
                                        <i class="fa-sharp fa-regular fa-pen-to-square"></i>&nbsp;
                                        Edit
                                    </a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@include('section.admin.contact-create')
@endsection

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
