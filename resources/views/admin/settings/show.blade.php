@extends('admin.master')
@section('title', __('keywords.show_setting'))
@section('content')
  <div class="container-fluid">
          <div class="row justify-content-center">
            <div class="col-12">
              <h2 class="h5 page-title">{{ __('keywords.show_setting') }}</h2>
         
              <div class="row">
                <!-- simple table -->
     <div class="col-md-12 my-4">
                  <div class="card shadow">
                    <div class="card-body">

                  <div class="row">
                    <div class="col-md-6">
                        
                        <label for="address">{{ __('keywords.address') }}</label>
                          <p class="form-control">{{ $setting->address }}</p>             
                    </div>
                    <div class="col-md-6">
                      
                    <label for="phone">{{ __('keywords.phone') }}</label>
                    <p class="form-control">{{ $setting->phone }}</p>             
                    </div>
                    <div class="col-md-6 mt-2">
                    
                    <label for="email">{{ __('keywords.email') }}</label>
                    <p class="form-control">{{ $setting->email }}</p>             
                    </div>
                    <div class="col-md-6 mt-2">
                    
                    <label for="facebook">{{ __('keywords.facebook') }}</label>
                    <p class="form-control">{{ $setting->facebook }}</p>             
                    </div>
                    <div class="col-md-6 mt-2">
                    
                    <label for="twitter">{{ __('keywords.twitter') }}</label>
                    <p class="form-control">{{ $setting->twitter }}</p>             
                    </div>
                    <div class="col-md-6 mt-2">
                    
                    <label for="youtube">{{ __('keywords.youtube') }}</label>
                    <p class="form-control">{{ $setting->youtube }}</p>             
                    </div>
                    <div class="col-md-6 mt-2">
                    
                    <label for="linkedin">{{ __('keywords.linkedin') }}</label>
                    <p class="form-control">{{ $setting->linkedin }}</p>             
                    </div>
                    <div class="col-md-6 mt-2">
                    
                    <label for="instagram">{{ __('keywords.instagram') }}</label>
                    <p class="form-control">{{ $setting->instagram }}</p>             
                    </div>
                    </div>  

           

                    </div>
                  </div>
                </div> 
            </div> 
          </div> 
        </div> 
@endsection