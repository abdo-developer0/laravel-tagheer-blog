<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateSettings;
use App\Setting;

class SettingsController extends Controller
{

    public function edit()
    {
        $this->authorize('admin');

        return View('settings.index');
    }

    public function update(UpdateSettings $settings)
    {
        Setting::first()->delete();

        Setting::create( $settings->validated() );

        return back();
    }
}
