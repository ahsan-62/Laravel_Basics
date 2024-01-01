@extends('master')

@section('content')

Create Form-Category

<div class="row">
    <div class="col-8 m-auto">
        <form action="{{ route('category.store') }}" method="POST">
            @csrf
            <div class="form-group mb-3">
                <label class="mb-3" for="name">Category Name</label>
                <input type="text" class="form-control" name="category_name" id="name" aria-describedby="emailHelp" placeholder="Enter Category Name">
            </div>
            <div class="form-group mb-3">
                <label class="mb-3" for="slug">Category Slug</label>
                <input type="text" class="form-control" id="slug" name="category_slug" aria-describedby="emailHelp" placeholder="Enter Category Slug">
            </div>

              <div class="form-check">
                <input type="checkbox" name="is_active" class="form-check-input" id="is_active">
                <label class="form-check-label"  for="exampleCheck1">Active/Inactive</label>
              </div>
              <button type="submit" class="btn btn-danger">Submit</button>
        </form>
    </div>
</div>

@endsection
