<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTestimonialRequest;
use App\Http\Requests\UpdateTestimonialRequest;
use App\Models\Testimonial;
use Illuminate\Support\Facades\Storage;

class TestimonialController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $testimonials = Testimonial::paginate(config('pagination.count'));
        return view('admin.testimonials.index', get_defined_vars());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view('admin.testimonials.create', get_defined_vars());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTestimonialRequest $request)
    {

      $data= $request->validated();
      if ($request->hasFile('image')) {
        // 1. استخراج الملف
        $file = $request->file('image');
        // 2. إنشاء اسم فريد (عشان الصور متمسحش بعض لو ليها نفس الاسم)
        $data['image'] = $request->file('image')->store('testimonials', 'public');
    }
      Testimonial::create($data);
      return to_route('admin.testimonials.index')->with('success' ,__('keywords.create_successfully') );
    }

    /**
     * Display the specified resource.
     */
    public function show(Testimonial $testimonial)
    {

         return view('admin.testimonials.show', get_defined_vars());
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Testimonial $testimonial)
    {

        return view('admin.testimonials.edit', get_defined_vars());

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTestimonialRequest $request, Testimonial $testimonial)
    {

        $data= $request->validated();

        if ($request->hasFile('image')) {
        // 1. حذف الصورة القديمة من المجلد لكي لا تأخذ مساحة
        if ($testimonial->image) {
            Storage::disk('public')->delete($testimonial->image);
        }

        // 2. رفع الصورة الجديدة
        $data['image'] = $request->file('image')->store('testimonials', 'public');
    }

    $testimonial->update($data);
        return to_route('admin.testimonials.index')->with('success' ,__('keywords.updated_successfully') );
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Testimonial $testimonial)
    {
        if ($testimonial->image) {
        Storage::disk('public')->delete($testimonial->image);
    }

        $testimonial->delete();
         return to_route('admin.testimonials.index')->with('success' ,__('keywords.deleted_successfully') );

    }
}
