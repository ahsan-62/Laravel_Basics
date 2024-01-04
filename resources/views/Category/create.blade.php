@extends('master')

@section('content')

Create Form-Category

<div class="row">
    <div class="col-8 m-auto">

        @if (session('status'))

        <div class="bg-success text-white">

            {{ session('status') }}

        </div>

        @endif
        <form action="{{ route('category.store') }}" method="POST">
            @csrf
            <div class="form-group mb-3">
                <label class="mb-3" for="category_name">Category Name</label>
                <input type="text" class="form-control @error('category_name')
                is-invalid
                @enderror" name="category_name" id="category_name" placeholder="Enter category Name" value="{{ old('category_name') }}">

                @error('category_name')

                <span class="invalid-feedback" role="alert">

                    <strong>{{ $message }}</strong>

                </span>

                @enderror
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
