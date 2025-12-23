@extends('admin.layout.layout')

@php
    $title = 'Role & Access';
    $subTitle = 'Role & Access';
@endphp

@section('content')

    <div class="card h-100 p-0 radius-12">

        <div class="card-header border-bottom bg-base py-16 px-24">
            <h6 class="mb-0">Role Permission Management</h6>
        </div>

        <div class="card-body p-24">

            @if(session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif

            <div class="row">
                @foreach($roles as $role)
                    <div class="col-xl-6 mb-24">
                        <form method="POST" action="{{ route('admin.roleAaccess.update', $role) }}">
                            @csrf

                            <div class="card radius-12">
                                <div class="card-header">
                                    <h6 class="mb-0">{{ $role->name }}</h6>
                                </div>

                                <div class="card-body">
                                    <div class="row">
                                        @foreach($permissions as $permission)
                                            <div class="col-md-6 mb-12">
                                                <label class="d-flex align-items-center gap-8">
                                                    <input
                                                        type="checkbox"
                                                        name="permissions[]"
                                                        value="{{ $permission->id }}"
                                                        {{ $role->permissions->contains($permission->id) ? 'checked' : '' }}
                                                    >
                                                    {{ $permission->name }}
                                                </label>
                                            </div>
                                        @endforeach
                                    </div>

                                    <div class="text-end mt-16">
                                        <button class="btn btn-primary btn-sm">
                                            Kaydet
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                @endforeach
            </div>

@endsection
