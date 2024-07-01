@extends('admin.layout.master')
@section('title')
    Reviews
@endsection
@section('content')
    <form action="{{ route('admin.updateReview', $review->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class='form-group row mb-4 align-middle'>
            <label class=" col-lg-3 required form-label">Name</label>
            <div class="col-lg-9">
                <input type="text" class="form-control" value="{{ $review->name }}" placeholder="Name" name='name'
                    required />
            </div>
        </div>
        <div class='form-group row mb-4 align-middle'>
            <label class=" col-lg-3 required form-label">Image</label>
            <div class="col-lg-9">
                <input type="file" class="form-control" placeholder="Browse image" name='image' required />
                <div class="col-lg-9 mt-2">
                    <img src="{{ asset('/' . $review->image) }}" width="100" alt="image">
                </div>
            </div>
        </div>
        <div class='form-group row mb-4 align-middle'>
            <label class=" col-lg-3 required form-label">Designation</label>
            <div class="col-lg-9">
                <input type="text" class="form-control" value="{{ $review->position }}" placeholder="Designation"
                    name='position' required />
            </div>
        </div>
        <div class='form-group row mb-4 align-middle'>
            <label class="col-lg-3 required form-label">Review</label>
            <div class="col-lg-9">
                <input type="text" class="form-control" value="{{ $review->review }}" placeholder="review here...!"
                    name='review' required />
            </div>
        </div>
        {{-- <div class="form-group">
            <label for="exampleInputPassword1">Status</label>
            <input type="radio" {{ $review->status == 1 ? 'checked' : '' }} name="status" value="1">Active
            <input type="radio" {{ $review->status == 0 ? 'checked' : '' }} name="status" value="0">Inactive
        </div> --}}
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Update</button>
        </div>
    </form>
@endsection
