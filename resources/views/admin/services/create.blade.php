@extends('admin.master')
@section('title', __('keywords.add_new_service'))
@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-12">
            <h2 class="h5 page-title">{{ __('keywords.add_new_service') }}</h2>
            
            <div class="card shadow my-4">
                <div class="card-body">
                    <form action="{{ route('admin.services.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <x-form-label fill="title"></x-form-label>
                                <input type="text" name="title" class="form-control" placeholder="{{ __('keywords.title') }}" value="{{ old('title') }}">
                              
                               
                               <x-message-error fill="title" />
                            </div>

                            <div class="col-md-6 mb-3">
                                <x-form-label fill="icon"></x-form-label>

                                <input type="text" name="icon" class="form-control" placeholder="{{ __('keywords.icon') }}" value="{{ old('icon') }}">
                                  <x-message-error fill="icon" />

                            </div>

                            <div class="col-md-12 mb-3">
                                <x-form-label fill="description"></x-form-label>

                                <textarea name="description" class="form-control" placeholder="{{ __('keywords.description') }}">{{ old('description') }}</textarea>
                                <x-message-error fill="description" />

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