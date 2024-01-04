@extends('master')


@section('content')

<div class="row">
    <div class="d-flex justify-content-end my-4">
        <a class="btn btn-success" href="{{ route('sub-category.create') }}">Crate</a>
    </div>
    <div class="col-8 m-auto">
        <table class="table">
    <thead>
      <tr>
        <th scope="col">No.</th>
        <th scope="col">Category Name</th>
        <th scope="col">Subcategory Name</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($subcategories as $subcategory )
        <tr>
            <th scope="row">{{ $subcategory->id }}</th>
            <td>{{ $subcategory->category->name }}</td>
            <td>{{ $subcategory->name }}</td>
          </tr>
        @endforeach

    </tbody>
  </table>



    </div>
</div>
@endsection
