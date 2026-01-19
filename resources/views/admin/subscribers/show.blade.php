@extends('admin.master')
@section('title', __('keywords.show_subscriber'))
@section('content')
  <div class="container-fluid">
          <div class="row justify-content-center">
            <div class="col-12">
              <h2 class="h5 page-title">{{ __('keywords.show_subscriber') }}</h2>
         
              <div class="row">
                <!-- simple table -->
     <div class="col-md-12 my-4">
                  <div class="card shadow">
                    <div class="card-body">

                  <div class="row">
                    <div class="col-md-12">
                        
                        <label for="name">{{ __('keywords.email') }}</label>
                          <p class="form-control">{{ $subscriber->email }}</p>             
                    </div>
                 
                  </div>  

           

                    </div>
                  </div>
                </div> 
            </div> 
          </div> 
        </div> 
@endsection