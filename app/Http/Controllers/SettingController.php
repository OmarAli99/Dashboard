<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use App\Http\Requests\StoreSettingRequest;
use App\Http\Requests\UpdateSettingRequest;

class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

         $settings = Setting::paginate(config('pagination.count'));
        return view('admin.settings.index', get_defined_vars());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view('admin.settings.create', get_defined_vars());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreSettingRequest $request)
    {

        $data= $request->validated();
        Setting::create($data);
        return to_route('admin.settings.index')->with('success' ,__('keywords.create_successfully') );
    }

    /**
     * Display the specified resource.
     */
    public function show(Setting $setting)
    {

         return view('admin.settings.show', get_defined_vars());
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Setting $setting)
    {

         return view('admin.settings.edit', get_defined_vars());

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSettingRequest $request, Setting $setting)
    {

        $data= $request->validated();
        $setting->update($data);
        return to_route('admin.settings.index')->with('success' ,__('keywords.updated_successfully') );
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Setting $setting)
    {

        $setting->delete();
         return to_route('admin.settings.index')->with('success' ,__('keywords.deleted_successfully') );

    }
}
