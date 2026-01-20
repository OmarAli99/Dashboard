@extends('admin.master')
@section('title', __('keywords.show_service'))
@section('content')
  <div class="container-fluid">
          <div class="row justify-content-center">
            <div class="col-12">
              <h2 class="h5 page-title">{{ __('keywords.show_service') }}</h2>
         
              <div class="row">
                <!-- simple table -->
     <div class="col-md-12 my-4">
                  <div class="card shadow">
                    <div class="card-body">

                  <div class="row">
                    <div class="col-md-6">
                        
                        <label for="image">{{ __('keywords.image') }}</label>
                               <img src="{{ asset('storage/' . $company->image) }}" 
                              alt="company Image" 
                            class="img-thumbnail" 
                           style="width: 200x; height: 200px; object-fit: cover;">           
                    </div>
                  </div>  

           

                    </div>
                  </div>
                </div> 
            </div> 
          </div> 
        </div> 
@endsection