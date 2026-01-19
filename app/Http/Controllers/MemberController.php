<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreMemberRequest;
use App\Http\Requests\UpdateMemberRequest;
use App\Models\Member;
use Illuminate\Support\Facades\Storage;

class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $members = Member::paginate(config('pagination.count'));
        return view('admin.members.index', get_defined_vars());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view('admin.members.create', get_defined_vars());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreMemberRequest $request)
    {

        $data= $request->validated();
        if ($request->hasFile('image'))
        {
        // 1. استخراج الملف
        $file = $request->file('image');
        // 2. إنشاء اسم فريد (عشان الصور متمسحش بعض لو ليها نفس الاسم)
        $data['image'] = $request->file('image')->store('member', 'public');
        }
        Member::create($data);
        return to_route('admin.members.index')->with('success' ,__('keywords.create_successfully') );
    }

    /**
     * Display the specified resource.
     */
    public function show(Member $member)
    {

       return view('admin.members.show', get_defined_vars());
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Member $member)
    {

        return view('admin.members.edit', get_defined_vars());

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateMemberRequest $request, Member $member)
    {
           $data= $request->validated();

        if ($request->hasFile('image')) {
        // 1. حذف الصورة القديمة من المجلد لكي لا تأخذ مساحة
        if ($member->image) {
            Storage::disk('public')->delete($member->image);
        }

        // 2. رفع الصورة الجديدة
        $data['image'] = $request->file('image')->store('members', 'public');
    }
        $member->update($data);
        return to_route('admin.members.index')->with('success' ,__('keywords.updated_successfully') );
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Member $member)
    {
      if ($member->image) {
        Storage::disk('public')->delete($member->image);
    }

        $member->delete();
         return to_route('admin.members.index')->with('success' ,__('keywords.deleted_successfully') );

    }
}
