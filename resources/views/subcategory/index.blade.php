@extends('master')


@section('content')

<div class="row">

        @if ('status')

        <div class="bg-successa text-white">
            {{ session('status') }}
        </div>
        @endif


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
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($subcategories as $subcategory )
        <tr>
            <th scope="row">{{ $subcategory->id }}</th>
            <td>{{ $subcategory->category->name }}</td>
            <td>{{ $subcategory->name }}</td>
            <td> <a href="{{ route('sub-category.edit',['sub_category' =>$subcategory->id]) }}" class="btn btn-info">Edit</a>


            <form action="{{ route('sub-category.destroy',['sub_category'=>$subcategory->id]) }}" method="post">
                @method('DELETE')
                @csrf
                <button href="" type="submit" class="btn btn-danger">Delete</button>

            </form>
            </td>

          </tr>
        @endforeach

    </tbody>
  </table>



    </div>
</div>
@endsection
