@extends('admin.master')
@section('title', __('keywords.show_member'))
@section('content')
  <div class="container-fluid">
          <div class="row justify-content-center">
            <div class="col-12">
              <h2 class="h5 page-title">{{ __('keywords.show_member') }}</h2>
         
              <div class="row">
                <!-- simple table -->
     <div class="col-md-12 my-4">
                  <div class="card shadow">
                    <div class="card-body">

                  <div class="row">
                    <div class="col-md-6">
                        
                        <label for="name">{{ __('keywords.name') }}</label>
                          <p class="form-control">{{ $member->name }}</p>             
                    </div>
                    <div class="col-md-6">
                      
                    <label for="position">{{ __('keywords.position') }}</label>
                    <p class="form-control">{{ $member->position }}</p>             
                    </div>
                    <div class="col-md-6 mt-2">
                     <label for="image">{{ __('keywords.image') }}</label>
                      <div class="mt-2">
                         {{-- هنا نستخدم وسم img لعرض الصورة فعلياً --}}
                      <img src="{{ asset('storage/' . $member->image) }}" 
                              alt="Member Image" 
                            class="img-thumbnail" 
                           style="width: 100x; height: 100px; object-fit: cover;">
                            </div>
                         </div>
                    <div class="col-md-6 mt-2">
                    <label for="facebook">{{ __('keywords.facebook') }}</label>
                    <p class="form-control">{{ $member->facebook }}</p>             
                    </div>
                    <div class="col-md-6 mt-2">
                    <label for="twitter">{{ __('keywords.twitter') }}</label>
                    <p class="form-control">{{ $member->twitter }}</p>             
                    </div>
                    <div class="col-md-6 mt-2">
                    <label for="linkedin">{{ __('keywords.linkedin') }}</label>
                    <p class="form-control">{{ $member->linkedin }}</p>             
                    </div>
                    </div>  

           

                    </div>
                  </div>
                </div> 
            </div> 
          </div> 
        </div> 
@endsection