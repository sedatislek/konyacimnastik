@extends('admin.layout.layout')

@section('content')
    <form method="POST" action="{{ route('admin.menus.store') }}">
        @csrf
        @include('admin.menus.form', ['menu' => null])
    </form>
@endsection
