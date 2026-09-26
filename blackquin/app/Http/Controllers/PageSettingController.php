<?php

namespace App\Http\Controllers;

use App\Models\PageSetting;
use Illuminate\Http\Request;

class PageSettingController extends Controller
{
    public function edit()
    {
        $setting = PageSetting::firstOrFail();
        return view('settings.page.page-edit', compact('setting'));
    }

    public function update(Request $request, $id)
    {
        $setting = PageSetting::findOrFail($id);
        $setting->update($request->all());

        return back()->with('setting_success', 'Settings updated successfully!');
    }
}
