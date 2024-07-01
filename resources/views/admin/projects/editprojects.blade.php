@extends('admin.layout.master')
@section('title')
    Colleges
@endsection
@section('content')
<form action="{{ route('admin.updateProjects', $projects->id) }}" method="POST" id="myForm" enctype="multipart/form-data">
    @csrf
        <div class='form-group row mb-4 align-middle'>
            <label class=" col-lg-3 required form-label">Name</label>
            <div class="col-lg-9">
                <input type="text" class="form-control" value="{{ $projects->name }}" placeholder="Name" name='name'
                    required />
            </div>
        </div>
        <div class='form-group row mb-4 align-middle'>
            <label class=" col-lg-3 required form-label">SEO</label>
            <div class="col-lg-9">
                <input type="text" class="form-control" value="{{ $projects->seo }}" placeholder="Duration...!" name='seo'
                    required />
            </div>
        </div>

        <div class='form-group row mb-4 align-middle'>
            <label class="col-lg-3 required form-label">Description</label>
            <div class="col-lg-9 mb-3">
                <textarea class="form-control" name="content" id="editor" cols="30" rows="10">{{ $projects->description }}</textarea>
            </div>
        </div>
        <div class='form-group row mb-4 align-middle'>
            <label class="col-lg-3 required form-label">Image</label>
            <div class="col-lg-9">
                <input type="file" class="form-control" placeholder="Browse image" name='images[]' multiple />
            </div>
            <div class="col-lg-3"></div>
            <div class="col-lg-9 mt-2">
                <div class="row">
                    @if ($projects->image)
                        @foreach (json_decode($projects->image) as $image)
                            <div class="col-md-4 mb-2">
                                <img src="{{ asset($image) }}" class="img-thumbnail" alt=""
                                    style="max-width: 100%; height: 100px; display: block; margin-left: auto; margin-right: auto;">
                            </div>
                        @endforeach
                    @endif
                </div>
            </div>
        </div>

    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Update</button>
    </div>
</form>
@endsection
