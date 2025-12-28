<div class="card">
    <div class="card-body">

        <div class="mb-3">
            <label>Başlık</label>
            <input name="title" class="form-control"
                   value="{{ old('title', $menu->title ?? '') }}">
        </div>

        <div class="mb-3">
            <label>Üst Menü</label>
            <select name="parent_id" class="form-control">
                <option value="">Yok</option>
                @foreach ($parents as $parent)
                    <option value="{{ $parent->id }}"
                        @selected(old('parent_id', $menu->parent_id ?? '') == $parent->id)>
                        {{ $parent->title }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label>Route Name</label>
            <input name="route_name" class="form-control"
                   value="{{ old('route_name', $menu->route_name ?? '') }}">
        </div>

        <div class="mb-3">
            <label>Permission</label>
            <select name="permission_key" class="form-control">
                <option value="">Yok</option>
                @foreach ($permissions as $permission)
                    <option value="{{ $permission->key }}"
                        @selected(old('permission_key', $menu->permission_key ?? '') == $permission->key)>
                        {{ $permission->key }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label>Icon</label>
            <input name="icon" class="form-control"
                   value="{{ old('icon', $menu->icon ?? '') }}">
        </div>

        <div class="mb-3">
            <label>Sıra</label>
            <input name="sort_order" type="number" class="form-control"
                   value="{{ old('sort_order', $menu->sort_order ?? 0) }}">
        </div>

        <div class="form-check">
            <input type="checkbox" name="is_active" value="1" class="form-check-input"
                @checked(old('is_active', $menu->is_active ?? true))>
            <label class="form-check-label">Aktif</label>
        </div>

    </div>

    <div class="card-footer text-end">
        <button class="btn btn-success">Kaydet</button>
    </div>
</div>
