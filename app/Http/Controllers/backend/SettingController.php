<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use App\Services\SettingService;
use App\Traits\FileUploadTrait;
use Illuminate\Routing\Controllers\Middleware;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    //

    use FileUploadTrait;

    static function Middleware(): array
    {
        return [
            new Middleware('permission:Settings Management')
        ];
    }

    function index()
    {
          $settings = Setting::pluck('value', 'key')->toArray();
        return view('admin.settings.sections.general-settings', compact('settings'));
    }


    function generalSettings(Request $request)
    {
        $validatedData = $request->validate([
            'site_name' => ['required', 'string', 'max:255'],
            'site_email' => ['nullable', 'email', 'max:255'],
            'site_phone' => ['nullable', 'string', 'max:255'],
            'site_currency' => ['required', 'string', 'max:255'],
            'site_currency_icon' => ['required', 'string', 'max:255'],
        ]);

        foreach ($validatedData as $key => $value) {
            Setting::updateOrCreate(
                ['key' => $key],
                ['value' => $value]
            );
        }

        $settings = app()->make(SettingService::class);
        $settings->clearCashedSettings();

         return redirect()->back()->with('toast', [
            'type' => 'success',
            'title' => 'Success',
            'message' => 'Data updated successfully!',
        ]);


    }

    function commissionSettingsIndex()
    {
         $settings = Setting::pluck('value', 'key')->toArray();
        return view('admin.settings.sections.commission-settings', compact('settings'));
    }

    function commissionSettings(Request $request)
    {
        $validatedData = $request->validate([
            'admin_commission' => ['required', 'numeric', 'max:100'],
        ]);

        foreach ($validatedData as $key => $value) {
            Setting::updateOrCreate(
                ['key' => $key],
                ['value' => $value]
            );
        }

        $settings = app()->make(SettingService::class);
        $settings->clearCashedSettings();

         return redirect()->back()->with('toast', [
            'type' => 'success',
            'title' => 'Success',
            'message' => 'Data updated successfully!',
        ]);


    }

    function siteSettingsIndex()
    {
        return view('admin.settings.sections.site-settings');
    }

    function siteSettings(Request $request)
    {
        $validatedData = $request->validate([
            'site_short_description' => ['nullable', 'string', 'max:255'],
            'site_address' => ['nullable', 'string', 'max:255'],
            'site_copyright' => ['required', 'string', 'max:255'],
            'site_hours' => ['nullable', 'string', 'max:255'],
        ]);

        foreach ($validatedData as $key => $value) {
            Setting::updateOrCreate(
                ['key' => $key],
                ['value' => $value]
            );
        }

        $settings = app()->make(SettingService::class);
        $settings->clearCashedSettings();

         return redirect()->back()->with('toast', [
            'type' => 'success',
            'title' => 'Success',
            'message' => 'Data updated successfully!',
        ]);


    }

    function logoSettingsIndex()
    {
        $settings = Setting::pluck('value', 'key')->toArray();
        return view('admin.settings.sections.logo-settings', compact('settings'));
    }

    function logoSettings(Request $request)
    {
        $request->validate([
            'site_logo' => ['nullable', 'mimes:jpeg,png,jpg,gif,svg', 'max:2048'],
            'site_favicon' => ['nullable', 'mimes:jpeg,png,jpg,gif,svg,ico', 'max:2048'],
        ]);

        $validatedData = [];

        if($request->hasFile('site_logo')) {
            $validatedData['site_logo'] = $this->uploadFile($request->file('site_logo'));
        }
        if($request->hasFile('site_favicon')) {
            $validatedData['site_favicon'] = $this->uploadFile($request->file('site_favicon'));
        }

        foreach ($validatedData as $key => $value) {
            Setting::updateOrCreate(
                ['key' => $key],
                ['value' => $value]
            );
        }

        $settings = app()->make(SettingService::class);
        $settings->clearCashedSettings();

         return redirect()->back()->with('toast', [
            'type' => 'success',
            'title' => 'Success',
            'message' => 'Data updated successfully!',
        ]);


    }
}
