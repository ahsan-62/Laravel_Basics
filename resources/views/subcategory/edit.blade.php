@extends('master')

@section('content')

<div class="row">
<div class="col-8 m-auto">

    @if ('status')

    <div class="bg-success text-white">

        {{ session('status') }}
    </div>

    @endif

    <form  action="{{ route('sub-category.update',['sub_category'=>$subcategories->id]) }}" method="POST">

        @method('PUT')
        @csrf

        <div class="mb-3">
        <label for="category_id" class="form-label">Category Name</label>
        <select class="form-select @error('category_id')
            is-invalid
        @enderror" name="category_id" aria-label="Select Category">
            <option >Select Category</option>
            @foreach ($categories as $category)
            <option value="{{ $category->id }}" @if ($category->id == $subcategories->category_id)
                selected
            @endif>{{ $category->name }}</option>
            @endforeach

        </select>

        @error('category_id')

        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>

        @enderror
        </div>

        <div class="mb-3">
            <label for="subcategory_name" class="form-label mb-3" >Subcategory Name</label>
            <input type="text" value="{{ $subcategories->name }}" class="form-control @error('subcategory_name')
            is-invalid
        @enderror" name="subcategory_name" value="" placeholder="Enter Subcategory Name">

        @error('subcategory_name')

        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>

        @enderror
        </div>
        <div class="form-check">
            <input type="checkbox" @if ($subcategories->is_active)
                checked
            @endif name="is_active" class="form-check-input" id="is_active">
            <label class="form-check-label"  for="exampleCheck1">Active/Inactive</label>
          </div>

        <button type="submit" class="btn btn-success">Create</button>



 </form>
</div>
</div>
@endsection
