@extends('layouts.master')

@section('title', 'Halaman Blog')

@section('content')
    <div class="flex m-10 justify-center items-center ">
      @include('components.blog')
    </div>
@endsection