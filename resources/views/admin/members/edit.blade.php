@extends('admin.master')
@section('title', __('keywords.edit_member'))
@section('content')
  <div class="container-fluid">
          <div class="row justify-content-center">
            <div class="col-12">
              <h2 class="h5 page-title">{{ __('keywords.edit_member') }}</h2>
         
              <div class="row">
                <!-- simple table -->
     <div class="col-md-12 my-4">
                  <div class="card shadow">
                    <div class="card-body">

                      <form action="{{ route('admin.members.update' ,['member'=> $member]) }}" method="post" enctype="multipart/form-data">
                      @csrf
                      @method('PUT')
                    <div class="row">
                    <div class="col-md-6">
                        
                        <label for="name">{{ __('keywords.name') }}</label>
                        <input type="text" name="name" id="simpleinput" class="form-control" 
                        placeholder="{{ __('keywords.name') }}" value="{{ $member->name }}">
                       @error('name')
                         <small class="text-danger">{{ $message }}</small>
                       @enderror
                    </div>
                    <div class="col-md-6">
                      
                        <label for="position">{{ __('keywords.position') }}</label>
                        <input type="text" name="position" id="simpleinput" class="form-control" 
                        placeholder="{{ __('keywords.position') }}" value="{{ $member->position }}">
                      @error('position')
                         <small class="text-danger">{{ $message }}</small>
                       @enderror
                    </div>
             
             <div class="col-md-6 mt-2">
                <label>{{ __('keywords.current_image') }}</label>
                <div class="mb-2">
                    <img src="{{ asset('storage/' . $member->image) }}" 
                        alt="member Image" 
                        class="img-thumbnail" 
                        style="width: 100px; height: 100px; object-fit: cover;">
                </div>

                <label for="image">{{ __('keywords.image') }}</label>
                <input type="file" name="image" id="image" class="form-control">

                @error('image')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
                </div>
                       <div class="col-md-6 mt-2">
                    
                        <label for="facebook">{{ __('keywords.facebook') }}</label>
                        <textarea  name="facebook" id="simpleinput" 
                        class="form-control" placeholder="{{ __('keywords.facebook') }}">{{ $member->facebook}}</textarea>
                        @error('facebook')
                         <small class="text-danger">{{ $message }}</small>
                       @enderror
                        
                    </div>
                           <div class="col-md-6 mt-2">
                    
                        <label for="twitter">{{ __('keywords.twitter') }}</label>
                        <textarea  name="twitter" id="simpleinput" 
                        class="form-control" placeholder="{{ __('keywords.twitter') }}">{{ $member->twitter}}</textarea>
                        @error('twitter')
                         <small class="text-danger">{{ $message }}</small>
                       @enderror
                        
                    </div>
                           <div class="col-md-6 mt-2">
                    
                        <label for="linkedin">{{ __('keywords.linkedin') }}</label>
                        <textarea  name="linkedin" id="simpleinput" 
                        class="form-control" placeholder="{{ __('keywords.linkedin') }}">{{ $member->linkedin}}</textarea>
                        @error('linkedin')
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