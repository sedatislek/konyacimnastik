@extends('admin.layout.layout')

@php
    $title = 'Role & Access';
    $subTitle = 'Role & Access';
@endphp

@section('content')

    <div class="card h-100 p-0 radius-12">
        <div class="card-header border-bottom bg-base py-16 px-24 d-flex align-items-center flex-wrap gap-3 justify-content-between">
            <div class="d-flex align-items-center flex-wrap gap-3">
                <span class="text-md fw-medium text-secondary-light mb-0">Show</span>
                <select class="form-select form-select-sm w-auto ps-12 py-6 radius-12 h-40-px">
                    <option>10</option>
                    <option>25</option>
                    <option>50</option>
                </select>
                <form class="navbar-search">
                    <input type="text" class="bg-base h-40-px w-auto" placeholder="Search">
                    <iconify-icon icon="ion:search-outline" class="icon"></iconify-icon>
                </form>
            </div>
        </div>

        <div class="card-body p-24">
            <div class="table-responsive scroll-sm">
                <table class="table bordered-table sm-table mb-0">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Admin</th>
                        <th class="text-center">Current Role</th>
                        <th class="text-center">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($admins as $index => $admin)
                        @php
                            $currentRole = $admin->roles->first();
                        @endphp
                        <tr>
                            <td>{{ $index + 1 }}</td>

                            <td>
                                <div class="d-flex align-items-center">
                                    <img src="{{ asset('admin-assets/assets/images/user-list/user-list1.png') }}"
                                         class="w-40-px h-40-px rounded-circle me-12">
                                    <div>
                                        <div class="fw-medium">{{ $admin->name }}</div>
                                        <div class="text-xs text-muted">{{ $admin->email }}</div>
                                    </div>
                                </div>
                            </td>

                            <td class="text-center">
                                {{ $currentRole?->name ?? '—' }}
                            </td>

                            <td class="text-center">
                                <div class="dropdown">
                                    <button class="btn btn-outline-primary-600 dropdown-toggle"
                                            data-bs-toggle="dropdown">
                                        Assign Role
                                    </button>

                                    <ul class="dropdown-menu">
                                        @foreach($roles as $role)
                                            <li>
                                                <a href="#"
                                                   class="dropdown-item assign-role
                                               {{ $currentRole && $currentRole->id === $role->id ? 'active fw-bold text-primary' : '' }}"
                                                   data-admin="{{ $admin->id }}"
                                                   data-role="{{ $role->id }}">
                                                    {{ $role->name }}
                                                </a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection

@push('scripts')
    <script>
        document.querySelectorAll('.assign-role').forEach(el => {
            el.addEventListener('click', function (e) {
                e.preventDefault();

                fetch("{{ route('admin.assignRole.store') }}", {
                    method: "POST",
                    headers: {
                        "X-CSRF-TOKEN": "{{ csrf_token() }}",
                        "Content-Type": "application/json",
                        "Accept": "application/json"
                    },
                    body: JSON.stringify({
                        admin_id: this.dataset.admin,
                        role_id: this.dataset.role
                    })
                })
                    .then(r => {
                        if (!r.ok) throw new Error('Role assignment failed');
                        return r.json();
                    })
                    .then(() => location.reload())
                    .catch(err => alert(err.message));
            });
        });
    </script>
@endpush
