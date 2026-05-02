@extends('admin.master')

@section('content')
    <div class="container-xl mt-5">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Create Roles</h3>
                <div class="card-actions">
                    <a href="{{ route('admin.role.index') }}" class="btn btn-primary">Back</a>
                </div>
            </div>
            <div class="card-body">
                <form action="{{ route('admin.role.store') }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label class="form-label required">Role Name</label>
                                <input type="text" class="form-control" name="role" placeholder="" value="">
                                <x-input-error :messages="$errors->get('role')" class="mt-2" />
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        @foreach ($permissions as $groupName => $permission)
                            <div class="col-md-4 mb3">
                                <h3>{{ $groupName }}</h3>
                                @foreach ($permission as $item)
                                    <label for="" class="form-check">
                                        <input type="checkbox" class="form-check-input" value="{{ $item->name }}"
                                            name="permissions[]">
                                        <span class="form-check-label">{{ $item->name }}</span>
                                    </label>
                                @endforeach
                            </div>
                        @endforeach
                    </div>

                    <div class="card-footer text-end">
                        <button class="btn btn-primary mt-3" type="submit" id="createRoleBtn">Create</button>
                    </div>


                </form>
            </div>

        </div>
    </div>
@endsection

@push('scripts')
    <script>
        $(document).ready(function() {
            $('#createRoleBtn').click(function() {
                // Validate the form if needed before submission (optional)
                var role = $('input[name="role"]').val();
                if (role === '') {
                    alert('Role Name is required!');
                    return false;
                }

                // Trigger the form submission
                $('form').submit();
            });
        });
    </script>
@endpush
