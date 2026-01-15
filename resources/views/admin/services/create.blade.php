@extends('admin.master')
@section('title', __('keywords.add_new_service'))
@section('content')
  <div class="container-fluid">
          <div class="row justify-content-center">
            <div class="col-12">
              <h2 class="h5 page-title">{{ __('keywords.add_new_service') }}</h2>
         
              <div class="row">
                <!-- simple table -->
     <div class="col-md-12 my-4">
                  <div class="card shadow">
                    <div class="card-body">

                      <form action="{{ route('admin.services.store') }}" method="post" enctype="multipart/form-data">
                      @csrf
                  <div class="row">
                    <div class="col-md-6">
                        
                        <label for="title">{{ __('keywords.title') }}</label>
                        <input type="text" name="title" id="simpleinput" class="form-control" 
                        placeholder="{{ __('keywords.title') }}">
                       @error('title')
                         <small class="text-danger">{{ $message }}</small>
                       @enderror
                    </div>
                    <div class="col-md-6">
                      
                        <label for="icon">{{ __('keywords.icon') }}</label>
                        <input type="text" name="icon" id="simpleinput" class="form-control" placeholder="{{ __('keywords.icon') }}">
                      @error('icon')
                         <small class="text-danger">{{ $message }}</small>
                       @enderror
                    </div>
                    <div class="col-md-12 mt-2">
                    
                        <label for="description">{{ __('keywords.description') }}</label>
                        <textarea  name="description" id="simpleinput" 
                        class="form-control" placeholder="{{ __('keywords.description') }}"></textarea>
                        @error('description')
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