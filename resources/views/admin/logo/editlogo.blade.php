@extends('admin.layout.master')
@section('title')
Edit Logo
@endsection
@section('content')
<form action="{{ route('admin.updatelogo', $logo->id) }}" method="POST" id="myForm" enctype="multipart/form-data">
    
    @csrf
        <div class='form-group row mb-4 align-middle'>
            <label class=" col-lg-3 required form-label">Name</label>
            <div class="col-lg-9">
                <input type="text" class="form-control" value="{{ $logo->name }}" placeholder="Name" name='name'
                    required />
            </div>
        </div>
      

       

        <div class='form-group row mb-4 align-middle'>
            <label class="col-lg-3 required form-label">Image</label>
            <div class="col-lg-9">
                <input type="file" class="form-control" placeholder="Browse image" name='image' multiple />
            </div>
            <div class="col-lg-3"></div>
            <div class="col-lg-9 mt-2">
                <div class="col-lg-9 mt-2">
                    <img src="{{ asset('/' . $logo->image) }}" width="100" alt="image">
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
