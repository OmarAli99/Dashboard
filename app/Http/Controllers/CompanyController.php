<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCompanyRequest;
use App\Http\Requests\UpdateCompanyRequest;
use App\Models\Company;
use Illuminate\Support\Facades\Storage;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $companys = Company::paginate(config('pagination.count'));
        return view('admin.companys.index', get_defined_vars());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view('admin.companys.create', get_defined_vars());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCompanyRequest $request)
    {

        $data= $request->validated();
        if ($request->hasFile('image'))
        {
        // 1. استخراج الملف
        $file = $request->file('image');
        // 2. إنشاء اسم فريد (عشان الصور متمسحش بعض لو ليها نفس الاسم)
        $data['image'] = $request->file('image')->store('company', 'public');
        }
        Company::create($data);
        return to_route('admin.companys.index')->with('success' ,__('keywords.create_successfully') );
    }

    /**
     * Display the specified resource.
     */
    public function show(Company $company)
    {

         return view('admin.companys.show', get_defined_vars());
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Company $company)
    {

                return view('admin.companys.edit', get_defined_vars());

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCompanyRequest $request, Company $company)
    {

  $data= $request->validated();

        if ($request->hasFile('image')) {
        // 1. حذف الصورة القديمة من المجلد لكي لا تأخذ مساحة
        if ($company->image) {
            Storage::disk('public')->delete($company->image);
        }

        // 2. رفع الصورة الجديدة
        $data['image'] = $request->file('image')->store('company', 'public');
    }
        $company->update($data);      
        return to_route('admin.companys.index')->with('success' ,__('keywords.updated_successfully') );
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Company $company)
    {

        $company->delete();
         return to_route('admin.companys.index')->with('success' ,__('keywords.deleted_successfully') );

    }
}
