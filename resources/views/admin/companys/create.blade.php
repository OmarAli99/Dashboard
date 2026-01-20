@extends('admin.master')
@section('title', __('keywords.add_new_company'))
@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-12">
            <h2 class="h5 page-title">{{ __('keywords.add_new_company') }}</h2>
            
            <div class="card shadow my-4">
                <div class="card-body">
                    <form action="{{ route('admin.companys.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <x-form-label fill="image"></x-form-label>
                                <input type="file" name="image" class="form-control" placeholder="{{ __('keywords.image') }}" 
                                value="{{ 'image' }}">
                              
                               
                               <x-message-error fill="image" />
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