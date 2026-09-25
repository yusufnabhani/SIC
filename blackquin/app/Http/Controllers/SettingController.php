<?php
namespace App\Http\Controllers;

use App\Models\Setting;
use App\Models\Photo;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Models\Language;

class SettingController extends Controller
{
    //

    public function edit(Request $request)
    {
        $langs = Language::all();
        if (empty($request->language)) {
            $data['lang_id'] = 0;
            $data['setting'] = Setting::firstOrFail();
        } else {
            $lang = Language::where('code', $request->language)->firstOrFail();
            $data['lang_id'] = $lang->id;
            $data['setting'] = Setting::findOrFail($lang->id);
        }


        return view('settings.edit', $data, compact('langs'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Setting $setting, $langid)
    {

        $setting = Setting::findOrFail($langid);

        $input = $request->all();

        // These columns are NOT NULL; Laravel's ConvertEmptyStringsToNull
        // middleware turns a blank input into null, so coerce back to ''.
        foreach (['favicon', 'keywords', 'facebook_pixel', 'analytics', 'SchmeaORG', 'OGgraph'] as $field) {
            $input[$field] = $input[$field] ?? '';
        }

        if ($request->hasFile('photo_id')) {
            $this->validate($request, [
                'photo_id' => 'mimes:jpg,jpeg,png,webp,gif,svg',
            ]);

            $file = $request->file('photo_id');
            $name = time() . $file->getClientOriginalName();
            $file->move('images/media/', $name);
            $photo = Photo::create(['file'=>$name]);
            $input['photo_id'] = $photo->id;
        } else {
            unset($input['photo_id']);
        }

        $setting->update($input);

        return back()->with('setting_success','Settings updated successfully!');
    }




}
