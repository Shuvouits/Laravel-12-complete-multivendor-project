@extends('admin.master')

@section('content')
    <div class="container-xl mt-5">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Product Brands</h3>
                <div class="card-actions">
                    <a href="{{ route('admin.brands.create') }}" class="btn btn-primary">Create Brand</a>
                </div>
            </div>
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-vcenter card-table">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Logo</th>
                                <th>Name</th>
                                <th>Status</th>
                                <th class="w-100px"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($brands as $brand)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>
                                        <img style="width: 50px" src="{{ asset($brand->image) }}" alt="">
                                    </td>
                                    <td>{{ $brand->name }}</td>
                                    <td>
                                        @if ($brand->is_active == 1)
                                            <span class="badge bg-primary-lt">Active</span>
                                    </td>
                                @else
                                    <span class="badge bg-danger-lt">Inactive</span></td>
                            @endif
                            <td>
                                <a href="{{ route('admin.brands.edit', $brand) }}">
                                    Edit
                                </a>


                                <a href="javascript:;" class="text-danger delete-item"
                                    data-url="{{ route('admin.brands.destroy', $brand) }}">
                                    Delete
                                </a>


                            </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="4" class="text-center">No Data Available</td>
                            </tr>
                            @endforelse

                        </tbody>
                    </table>
                </div>
                <div class="card-footer">
                    {{ $brands->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection



@push('scripts')
    <script>
        $(document).ready(function() {

            $('.delete-item').on('click', function() {

                let url = $(this).data('url');

                Swal.fire({
                    title: 'Are you sure?',
                    text: "You won't be able to revert this!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#206bc4',
                    cancelButtonColor: '#d63939',
                    confirmButtonText: 'Yes, delete it!'
                }).then((result) => {

                    if (result.isConfirmed) {

                        $.ajax({
                            type: "DELETE",
                            url: url,
                            data: {
                                _token: "{{ csrf_token() }}"
                            },

                            success: function(response) {

                                Swal.fire({
                                    toast: true,
                                    position: 'bottom-end',
                                    icon: 'success',
                                    showConfirmButton: false,
                                    title: response.toast.title,
                                    text: response.toast.message,
                                    timer: 3200,
                                    timerProgressBar: true,
                                    customClass: {
                                        popup: 'custom-toast'
                                    },
                                    didOpen: (toast) => {
                                        toast.addEventListener('mouseenter',
                                            Swal.stopTimer);
                                        toast.addEventListener('mouseleave',
                                            Swal.resumeTimer);
                                    }
                                });

                                location.reload();
                            },

                            error: function() {

                                Swal.fire({
                                    icon: 'error',
                                    title: 'Error',
                                    text: 'Something went wrong!'
                                });
                            }
                        });
                    }
                });
            });

        });
    </script>
@endpush
