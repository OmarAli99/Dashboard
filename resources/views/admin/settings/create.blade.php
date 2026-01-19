@extends('admin.master')
@section('title', __('keywords.add_new_setting'))
@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-12">
            <h2 class="h5 page-title">{{ __('keywords.add_new_setting') }}</h2>
            
            <div class="card shadow my-4">
                <div class="card-body">
                    <form action="{{ route('admin.settings.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <x-form-label fill="address"></x-form-label>
                                <input type="text" name="address" class="form-control" 
                                placeholder="{{ __('keywords.address') }}" value="{{ old('address') }}">
                              
                               
                               <x-message-error fill="address" />
                            </div>

                            <div class="col-md-6 mb-3">
                                <x-form-label fill="phone"></x-form-label>

                                <input type="text" name="phone" class="form-control" placeholder="{{ __('keywords.phone') }}" value="{{ old('phone') }}">
                                  <x-message-error fill="phone" />

                            </div>

                            <div class="col-md-12 mb-3">
                                <x-form-label fill="email"></x-form-label>

                                <textarea name="email" class="form-control" placeholder="{{ __('keywords.email') }}">{{ old('email') }}</textarea>
                                <x-message-error fill="email" />

                            </div>
                            <div class="col-md-12 mb-3">
                                <x-form-label fill="facebook"></x-form-label>

                                <textarea name="facebook" class="form-control" placeholder="{{ __('keywords.facebook') }}">{{ old('facebook') }}</textarea>
                                <x-message-error fill="facebook" />

                            </div>
                            <div class="col-md-12 mb-3">
                                <x-form-label fill="twitter"></x-form-label>

                                <textarea name="twitter" class="form-control" placeholder="{{ __('keywords.twitter') }}">{{ old('twitter') }}</textarea>
                                <x-message-error fill="twitter" />

                            </div>
                            <div class="col-md-12 mb-3">
                                <x-form-label fill="youtube"></x-form-label>

                                <textarea name="youtube" class="form-control" placeholder="{{ __('keywords.youtube') }}">{{ old('youtube') }}</textarea>
                                <x-message-error fill="youtube" />

                            </div>
                            <div class="col-md-12 mb-3">
                                <x-form-label fill="linkedin"></x-form-label>

                                <textarea name="linkedin" class="form-control" placeholder="{{ __('keywords.linkedin') }}">{{ old('linkedin') }}</textarea>
                                <x-message-error fill="linkedin" />

                            </div>
                            <div class="col-md-12 mb-3">
                                <x-form-label fill="instagram"></x-form-label>

                                <textarea name="instagram" class="form-control" placeholder="{{ __('keywords.instagram') }}">{{ old('instagram') }}</textarea>
                                <x-message-error fill="instagram" />

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