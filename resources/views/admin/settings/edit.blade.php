@extends('admin.master')
@section('title', __('keywords.edit_setting'))
@section('content')
  <div class="container-fluid">
          <div class="row justify-content-center">
            <div class="col-12">
              <h2 class="h5 page-title">{{ __('keywords.edit_setting') }}</h2>
         
              <div class="row">
                <!-- simple table -->
     <div class="col-md-12 my-4">
                  <div class="card shadow">
                    <div class="card-body">

                      <form action="{{ route('admin.settings.update' ,['setting'=> $setting]) }}" method="post" enctype="multipart/form-data">
                      @csrf
                      @method('PUT')
                  <div class="row">
                    <div class="col-md-6">
                        
                        <label for="address">{{ __('keywords.address') }}</label>
                        <input type="text" name="address" id="simpleinput" class="form-control" 
                        placeholder="{{ __('keywords.address') }}" value="{{ $setting->address }}">
                       @error('address')
                         <small class="text-danger">{{ $message }}</small>
                       @enderror
                    </div>
                    <div class="col-md-6">
                      
                        <label for="phone">{{ __('keywords.phone') }}</label>
                        <input type="text" name="phone" id="simpleinput" class="form-control" 
                        placeholder="{{ __('keywords.phone') }}" value="{{ $setting->phone }}">
                      @error('phone')
                         <small class="text-danger">{{ $message }}</small>
                       @enderror
                    </div>
                    <div class="col-md-6 mt-2">
                    
                        <label for="email">{{ __('keywords.email') }}</label>
                        <textarea  name="email" id="simpleinput" 
                        class="form-control" placeholder="{{ __('keywords.email') }}">{{ $setting->email}}</textarea>
                        @error('email')
                         <small class="text-danger">{{ $message }}</small>
                       @enderror
                        
                    </div>
                    <div class="col-md-6 mt-2">
                    
                        <label for="facebook">{{ __('keywords.facebook') }}</label>
                        <textarea  name="facebook" id="simpleinput" 
                        class="form-control" placeholder="{{ __('keywords.facebook') }}">{{ $setting->facebook}}</textarea>
                        @error('facebook')
                         <small class="text-danger">{{ $message }}</small>
                       @enderror
                        
                    </div>
                    <div class="col-md-6 mt-2">
                    
                        <label for="twitter">{{ __('keywords.twitter') }}</label>
                        <textarea  name="twitter" id="simpleinput" 
                        class="form-control" placeholder="{{ __('keywords.twitter') }}">{{ $setting->youtube}}</textarea>
                        @error('youtube')
                         <small class="text-danger">{{ $message }}</small>
                       @enderror
                        
                    </div>
                    <div class="col-md-6 mt-2">
                    
                        <label for="youtube">{{ __('keywords.youtube') }}</label>
                        <textarea  name="youtube" id="simpleinput" 
                        class="form-control" placeholder="{{ __('keywords.youtube') }}">{{ $setting->youtube}}</textarea>
                        @error('youtube')
                         <small class="text-danger">{{ $message }}</small>
                       @enderror
                        
                    </div>
                    <div class="col-md-6 mt-2">
                    
                        <label for="linkedin">{{ __('keywords.linkedin') }}</label>
                        <textarea  name="linkedin" id="simpleinput" 
                        class="form-control" placeholder="{{ __('keywords.linkedin') }}">{{ $setting->linkedin}}</textarea>
                        @error('linkedin')
                         <small class="text-danger">{{ $message }}</small>
                       @enderror
                        
                    </div>
                    <div class="col-md-6 mt-2">
                    
                        <label for="instagram">{{ __('keywords.instagram') }}</label>
                        <textarea  name="instagram" id="simpleinput" 
                        class="form-control" placeholder="{{ __('keywords.instagram') }}">{{ $setting->instagram}}</textarea>
                        @error('instagram')
                         <small class="text-danger">{{ $message }}</small>
                       @enderror
                        
                    </div>
                    </div>  

                    
                      <button type="submit" class ="btn btn-primary btn-sm mt-3">{{ __('keywords.submit') }}</button>
              

                     </form>

                    </div>
                  </div>
                </div> 
            </div> 
          </div> 
        </div> 
@endsection