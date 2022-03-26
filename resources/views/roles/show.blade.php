<x-app-layout>
    <div class="row">
        <div class="col-md-12 mt-4">
            <div class="card">
            <div class="card-header pb-0 px-3">
                <h6 class="mb-0">Show Role</h6>
            </div>
            <div class="card-body pt-4 p-3">
                <ul class="list-group">
                <li class="list-group-item border-0 d-flex p-4 mb-2 bg-gray-100 border-radius-lg">
                    <div class="d-flex flex-column">
                    <div class="form-group">
                    <strong>Name:</strong>
                        {{ $role->name }}
                    </div>
                    <div class="form-group">
                        <strong>Permissions:</strong>
                        @if(!empty($rolePermissions))
                            @foreach($rolePermissions as $v)
                                <label class="label label-success">{{ $v->name }},</label>
                            @endforeach
                        @endif
                    </div>
                    </div>
                </li>
                </ul>
            </div>
            </div>
        </div>
    </div>
</x-app-layout>