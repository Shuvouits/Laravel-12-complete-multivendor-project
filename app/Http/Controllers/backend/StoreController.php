<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Store;
use App\Traits\FileUploadTrait;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    //
    use FileUploadTrait;

    public function index()
    {
        $store = auth('web')->user()?->store;

        return view('vendor.store-profile.index', compact('store'));
    }

    public function update(Request $request, string $id)
    {
        $request->validate([
            'logo' => ['nullable', 'image', 'max:2048'],
            'banner' => ['nullable', 'image', 'max:2048'],
            'name' => ['required', 'string', 'max:50'],
            'phone' => ['nullable', 'string', 'max:50'],
            'email' => ['nullable', 'email', 'max:50'],
            'address' => ['nullable', 'string', 'max:255'],
            'short_description' => ['required', 'string', 'max:255'],
            'long_description' => ['nullable', 'string', 'max: 2000'],
        ]);

        $data = [
            'name' => $request->name,
            'phone' => $request->phone,
            'email' => $request->email,
            'address' => $request->address,
            'short_description' => $request->short_description,
            'long_description' => $request->long_description,
        ];

        if ($request->hasFile('logo')) {
            $data['logo'] = $this->uploadFile($request->file('logo'), auth('web')->user()?->store?->logo);
        }

        if ($request->hasFile('banner')) {
            $data['banner'] = $this->uploadFile($request->file('banner'), auth('web')->user()?->store?->banner);
        }

        Store::updateOrCreate(
            ['seller_id' => auth('web')->user()->id],
            $data
        );

         return redirect()->back()->with('toast', [
            'type' => 'success',
            'title' => 'Success',
            'message' => 'Data updated successfully!',
        ]);
    }
}
