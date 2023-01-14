<?php

namespace App\Http\Controllers;

use App\Setting;
use Facade\FlareClient\View;
use Illuminate\Http\Request;

class SettingsController extends Controller
{

    public function edit()
    {
        $this->authorize('admin');

        return View('settings.index');
    }

    public function update(Request $request)
    {
        $this->authorize('admin');

        $credentials = $request->validate([
            'address' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'site_name' => 'required',
            'logo_path' => 'required',
            'about_content' => 'required',
            'is_open' => 'required'
        ]);

        Setting::first()->delete();

        Setting::create($credentials);

        return back();
    }
}
