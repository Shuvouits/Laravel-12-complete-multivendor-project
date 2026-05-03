@extends('admin.settings.index')

@section('settings_contents')
    <div class="card-body">
        <h2 class="mb-4">Logo Settings</h2>

        <form action="{{ route('admin.logo-settings.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="row g-3">
                <div class="col-md-6">
                    <div class="form-label">Site Logo</div>

                    @if(!empty($settings['site_logo']))
                        <div class="mb-3">
                            <img src="{{ asset($settings['site_logo']) }}"
                                 alt="Site Logo"
                                 style="max-width: 180px; height: auto; border: 1px solid #ddd; padding: 8px; border-radius: 6px;">
                        </div>
                    @else
                        <div class="mb-3 text-muted">
                            No logo uploaded yet.
                        </div>
                    @endif

                    <input type="file"
                           class="form-control"
                           name="site_logo"
                           accept="image/jpeg,image/png,image/jpg,image/gif,image/svg+xml">

                    <x-input-error :messages="$errors->get('site_logo')" class="mt-2" />
                </div>

                <div class="col-md-6">
                    <div class="form-label">Site Favicon</div>

                    @if(!empty($settings['site_favicon']))
                        <div class="mb-3">
                            <img src="{{ asset($settings['site_favicon']) }}"
                                 alt="Site Favicon"
                                 style="max-width: 80px; height: auto; border: 1px solid #ddd; padding: 8px; border-radius: 6px;">
                        </div>
                    @else
                        <div class="mb-3 text-muted">
                            No favicon uploaded yet.
                        </div>
                    @endif

                    <input type="file"
                           class="form-control"
                           name="site_favicon"
                           accept="image/jpeg,image/png,image/jpg,image/gif,image/svg+xml,image/x-icon">

                    <x-input-error :messages="$errors->get('site_favicon')" class="mt-2" />
                </div>
            </div>

            <div class="btn-list justify-content-end mt-5">
                <button type="submit" class="btn btn-primary btn-2">Submit</button>
            </div>
        </form>
    </div>
@endsection
