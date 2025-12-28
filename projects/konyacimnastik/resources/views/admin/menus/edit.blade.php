@extends('admin.layout.layout')

@section('content')
    <form method="POST" action="{{ route('admin.menus.update', $menu) }}">
        @csrf
        @method('PUT')
        @include('admin.menus.form', ['menu' => $menu])
    </form>
@endsection
