<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Brand;

use App\Traits\FileUploadTrait;
use Illuminate\Contracts\View\View;

use Illuminate\Routing\Controllers\HasMiddleware;
use Illuminate\Routing\Controllers\Middleware;

class BrandController extends Controller implements HasMiddleware
{
    use FileUploadTrait;

    static function Middleware(): array
    {
        return [
            new Middleware('permission:Brand Management')
        ];
    }

    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $brands = Brand::paginate(20);
        return view('admin.brand.index', compact('brands'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('admin.brand.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'brand_logo' => ['required', 'image', 'max: 2048'],
            'name' => ['required', 'string', 'max:255'],
        ]);

        $logoPath = $this->uploadFile($request->file('brand_logo'));

        $brand = new Brand();
        $brand->name = $request->name;
        $brand->slug = \Str::slug($request->name);
        $brand->image = $logoPath;
        $brand->is_active = $request->has('status') ? 1 : 0;
        $brand->save();

         return redirect()->route('admin.brands.index')->with('toast', [
            'type' => 'success',
            'title' => 'Success',
            'message' => 'Data created successfully!',
        ]);


    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Brand $brand)
    {
        return view('admin.brand.edit', compact('brand'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Brand $brand)
    {
        $request->validate([
            'brand_logo' => ['nullable', 'image', 'max: 2048'],
            'name' => ['required', 'string', 'max:255'],
        ]);

        $brand->name = $request->name;
        if ($request->hasFile('brand_logo')) {
            $logoPath = $this->uploadFile($request->file('brand_logo'), $brand->image);
            $brand->image = $logoPath;
        }
        $brand->slug = \Str::slug($request->name);
        $brand->is_active = $request->has('status') ? 1 : 0;
        $brand->save();

         return redirect()->route('admin.brands.index')->with('toast', [
            'type' => 'success',
            'title' => 'Success',
            'message' => 'Data updated successfully!',
        ]);


    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Brand $brand)
    {
        $this->deleteFile($brand->image);

        $brand->delete();

         return response()->json([
            'toast' => [
                'type' => 'success',
                'title' => 'Success',
                'message' => 'Data deleted successfully!',
            ],
        ]);
    }


    
}
