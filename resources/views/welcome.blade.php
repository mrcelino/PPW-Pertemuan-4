@extends('layouts.master')

@section('title', 'Halaman Utama')

@section('content')
    <div class="flex m-10 justify-center items-center ">
        @for ($i = 0; $i < 4; $i++)
        @include('components.card')
        @endfor    
    </div>
@endsection

