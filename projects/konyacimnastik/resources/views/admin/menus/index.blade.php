@extends('admin.layout.layout')

@section('content')
    <div class="card">
        <div class="card-header d-flex justify-content-between">
            <h5>Menüler</h5>
            <a href="{{ route('admin.menus.create') }}" class="btn btn-primary">Yeni Menü</a>
        </div>

        <div class="card-body">
            <table class="table">
                <thead>
                <tr>
                    <th>Başlık</th>
                    <th>Route</th>
                    <th>Permission</th>
                    <th>Durum</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                @foreach ($menus as $menu)
                    <tr>
                        <td><strong>{{ $menu->title }}</strong></td>
                        <td>{{ $menu->route_name }}</td>
                        <td>{{ $menu->permission_key }}</td>
                        <td>{{ $menu->is_active ? 'Aktif' : 'Pasif' }}</td>
                        <td class="text-end">
                            <a href="{{ route('admin.menus.edit', $menu) }}" class="btn btn-sm btn-warning">Düzenle</a>
                        </td>
                    </tr>

                    @foreach ($menu->children as $child)
                        <tr>
                            <td>— {{ $child->title }}</td>
                            <td>{{ $child->route_name }}</td>
                            <td>{{ $child->permission_key }}</td>
                            <td>{{ $child->is_active ? 'Aktif' : 'Pasif' }}</td>
                            <td class="text-end">
                                <a href="{{ route('admin.menus.edit', $child) }}" class="btn btn-sm btn-warning">Düzenle</a>
                            </td>
                        </tr>
                    @endforeach
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
