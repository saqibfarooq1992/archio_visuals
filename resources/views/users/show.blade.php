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
                    <strong>Email:</strong>
                    {{ $user->email }}
                    </div>
                    <div class="form-group">
                    <strong>Roles:</strong>
                    @if(!empty($user->getRoleNames()))
                        @foreach($user->getRoleNames() as $v)
                            <td>{{ $v }}</td>
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
