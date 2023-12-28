@extends('master')

@section('content')

<h1>

@for ($index=0;$index<3;$index++)

<h1>{{ $ahsan[$index] }}<h1>

@endfor


</h1>

@endsection
