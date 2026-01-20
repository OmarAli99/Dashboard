@extends('admin.master')
@section('title', __('keywords.edit_company'))
@section('content')
  <div class="container-fluid">
          <div class="row justify-content-center">
            <div class="col-12">
              <h2 class="h5 page-title">{{ __('keywords.edit_company') }}</h2>
         
              <div class="row">
                <!-- simple table -->
     <div class="col-md-12 my-4">
                  <div class="card shadow">
                    <div class="card-body">

                      <form action="{{ route('admin.companys.update' ,['company'=> $company]) }}" method="post" enctype="multipart/form-data">
                      @csrf
                      @method('PUT')
                  <div class="row">
                    <div class="col-md-6">
                   <label>{{ __('keywords.current_image') }}</label>
                <div class="mb-2">
                    <img src="{{ asset('storage/' . $company->image) }}" 
                        alt="company Image" 
                        class="img-thumbnail" 
                        style="width: 100px; height: 100px; object-fit: cover;">
                </div>
                        <label for="image">{{ __('keywords.image') }}</label>
                        <input type="file" name="image" id="simpleinput" class="form-control" 
                        placeholder="{{ __('keywords.image') }}" value="{{ $company->image }}">
                        
                       @error('image')
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