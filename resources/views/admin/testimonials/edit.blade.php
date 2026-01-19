@extends('admin.master')
@section('title', __('keywords.edit_testimonial'))
@section('content')
  <div class="container-fluid">
          <div class="row justify-content-center">
            <div class="col-12">
              <h2 class="h5 page-title">{{ __('keywords.edit_testimonial') }}</h2>
         
              <div class="row">
                <!-- simple table -->
     <div class="col-md-12 my-4">
                  <div class="card shadow">
                    <div class="card-body">

                      <form action="{{ route('admin.testimonials.update' ,['testimonial'=> $testimonial]) }}" method="post" enctype="multipart/form-data">
                      @csrf
                      @method('PUT')
                    <div class="row">
                    <div class="col-md-6">
                        
                        <label for="name">{{ __('keywords.name') }}</label>
                        <input type="text" name="name" id="simpleinput" class="form-control" 
                        placeholder="{{ __('keywords.name') }}" value="{{ $testimonial->name }}">
                       @error('name')
                         <small class="text-danger">{{ $message }}</small>
                       @enderror
                    </div>
                    <div class="col-md-6">
                      
                        <label for="position">{{ __('keywords.position') }}</label>
                        <input type="text" name="position" id="simpleinput" class="form-control" 
                        placeholder="{{ __('keywords.position') }}" value="{{ $testimonial->position }}">
                      @error('position')
                         <small class="text-danger">{{ $message }}</small>
                       @enderror
                    </div>
                    <div class="col-md-6 mt-2">
                    
                        <label for="description">{{ __('keywords.description') }}</label>
                        <textarea  name="description" id="simpleinput" 
                        class="form-control" placeholder="{{ __('keywords.description') }}">{{ $testimonial->description}}</textarea>
                        @error('description')
                         <small class="text-danger">{{ $message }}</small>
                       @enderror
                        
                    </div>
             <div class="col-md-6 mt-2">
                <label>{{ __('keywords.current_image') }}</label>
                <div class="mb-2">
                    <img src="{{ asset('storage/' . $testimonial->image) }}" 
                        alt="Testimonial Image" 
                        class="img-thumbnail" 
                        style="width: 150px; height: 100px; object-fit: cover;">
                </div>

                <label for="image">{{ __('keywords.image') }}</label>
                <input type="file" name="image" id="image" class="form-control">

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