@extends('admin.master')
@section('title', __('keywords.add_new_member'))
@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-12">
            <h2 class="h5 page-title">{{ __('keywords.add_new_member') }}</h2>
            
            <div class="card shadow my-4">
                <div class="card-body">
                    <form action="{{ route('admin.members.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <x-form-label fill="name"></x-form-label>
                                <input type="text" name="name" class="form-control" placeholder="{{ __('keywords.name') }}" 
                                value="{{ old('name') }}">
                              
                                <x-message-error fill="title" />
                            </div>

                            <div class="col-md-3 mb-3">
                                <x-form-label fill="position"></x-form-label>

                                <input type="text" name="position" class="form-control" placeholder="{{ __('keywords.position') }}" 
                                value="{{ old('position') }}">
                                  <x-message-error fill="position" />

                            </div>

                           
                            <div class="col-md-3 mb-3">
                                <x-form-label fill="image"></x-form-label>

                                <input type="file" name="image" class="form-control" placeholder="{{ __('keywords.image') }}" 
                                value="{{'image' }}">
                                  <x-message-error fill="image" />

                            </div>
                             <div class="col-md-4 mb-3">
                                <x-form-label fill="facebook"></x-form-label>

                                <input type="text" name="facebook" class="form-control" placeholder="{{ __('keywords.facebook') }}" 
                                value="{{ old('facebook') }}">
                                  <x-message-error fill="facebook" />

                            </div>

                            <div class="col-md-4 mb-3">
                                <x-form-label fill="twitter"></x-form-label>

                                <textarea name="twitter" class="form-control" placeholder="{{ __('keywords.twitter') }}">{{ old('twitter') }}</textarea>
                                <x-message-error fill="twitter" />

                            </div>

                            <div class="col-md-4 mb-3">
                                <x-form-label fill="linkedin"></x-form-label>

                                <textarea name="linkedin" class="form-control" placeholder="{{ __('keywords.linkedin') }}">{{ old('linkedin') }}</textarea>
                                <x-message-error fill="linkedin" />

                            </div>
                        </div>
                        <x-submit-button></x-submit-button>
                       
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection