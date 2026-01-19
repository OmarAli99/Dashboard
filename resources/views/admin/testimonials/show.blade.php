@extends('admin.master')
@section('title', __('keywords.show_testimonial'))
@section('content')
  <div class="container-fluid">
          <div class="row justify-content-center">
            <div class="col-12">
              <h2 class="h5 page-title">{{ __('keywords.show_testimonial') }}</h2>
         
              <div class="row">
                <!-- simple table -->
     <div class="col-md-12 my-4">
                  <div class="card shadow">
                    <div class="card-body">

                  <div class="row">
                    <div class="col-md-6">
                        
                        <label for="name">{{ __('keywords.name') }}</label>
                          <p class="form-control">{{ $testimonial->name }}</p>             
                    </div>
                    <div class="col-md-6">
                      
                    <label for="position">{{ __('keywords.position') }}</label>
                    <p class="form-control">{{ $testimonial->position }}</p>             
                    </div>
                    <div class="col-md-6 mt-2">
                    <label for="description">{{ __('keywords.description') }}</label>
                    <p class="form-control">{{ $testimonial->description }}</p>             
                    </div>
                       <div class="col-md-6 mt-2">
                     <label for="image">{{ __('keywords.image') }}</label>
                      <div class="mt-2">
                         {{-- هنا نستخدم وسم img لعرض الصورة فعلياً --}}
                      <img src="{{ asset('storage/' . $testimonial->image) }}" 
                              alt="Member Image" 
                            class="img-thumbnail" 
                           style="width: 50x; height: 50px; object-fit: cover;">
                            </div>
                         </div>
                    </div>  

           

                    </div>
                  </div>
                </div> 
            </div> 
          </div> 
        </div> 
@endsection