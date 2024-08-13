<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\HotelSetting;
use Illuminate\Http\Request;

class HotelSettingController extends Controller
{
    public function edit()
    {
        $settings = HotelSetting::first() ?? new HotelSetting();
        return view('admin.settings.edit', compact('settings'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'check_in_time' => 'required',
            'check_out_time' => 'required',
            'breakfast_included' => 'boolean',
            'free_wifi' => 'boolean',
            'cancellation_policy_hours' => 'required|integer|min:0',
        ]);

        $settings = HotelSetting::first() ?? new HotelSetting();
        $settings->fill($request->all());
        $settings->save();

        return redirect()->route('admin.settings.edit')->with('success', 'Settings updated successfully.');
    }
}
