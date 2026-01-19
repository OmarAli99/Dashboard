@extends('admin.master')
@section('title', __('keywords.settings'))
@section('content')
  <div class="container-fluid">
          <div class="row justify-content-center">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between mb-3">
              <h2 class="h5 page-title">{{ __('keywords.settings') }}</h2>
              <div class="page-title-right">

               
            <x-action-button href="{{ route('admin.settings.create') }}" type="create" ></x-action-button>
            </div>                        
                </div> 
                  <div class="card shadow">
                    <div class="card-body">
                      <x-success-alert></x-success-alert>
                      <table class="table table-hover">
                        <thead>
                          <tr>
                            <th width = "5%" >#</th>
                            <th>{{ __('keywords.address') }}</th>
                            <th >{{ __('keywords.phone') }}</th>
                            <th >{{ __('keywords.email') }}</th>
                            <th >{{ __('keywords.facebook') }}</th>
                            <th >{{ __('keywords.twitter') }}</th>
                            <th >{{ __('keywords.youtube') }}</th>
                            <th>{{ __('keywords.linkedin') }}</th>
                            <th >{{ __('keywords.instagram') }}</th>
                            <th width = "15%">{{ __('keywords.actions') }}</th>
                        
                           
                          </tr>
                        </thead>
                        <tbody>
                            @if(count($settings) > 0)
                            @foreach ($settings as $key => $setting)
                                
                            
                          <tr>
                            <td>{{ $settings->firstItem() + $loop->index }}</td>
                            <td>{{ $setting->address }}</td>
                            <td>{{ $setting->phone }}</td>
                            <td>{{ $setting->email }}</td>
                            <td>{{ $setting->facebook }}</td>
                            <td>{{ $setting->twitter }}</td>
                            <td>{{ $setting->youtube }}</td>
                            <td>{{ $setting->linkedin }}</td>
                            <td>{{ $setting->instagram }}</td>
                            
                            <td>

                               
                                <x-action-button href="{{ route('admin.settings.edit',['setting'=> $setting]) }}" type="edit" ></x-action-button>

                                <x-action-button href="{{ route('admin.settings.show',['setting'=> $setting]) }}" type="show" ></x-action-button>
                                
                                <x-delete-action href="{{ route('admin.settings.destroy',['setting'=> $setting]) }}" id="{{ $setting->id}}" ></x-delete-action>
                            
                            </td>
                           
                          </tr>
                          @endforeach
                          @else

                     <x-empty-alert></x-empty-alert>
                            @endif
                        </tbody>
                      </table>
                      {{ $settings->render('pagination::bootstrap-4') }}
                    </div>
                  </div>
                </div> 
            </div> 
          </div> 
        </div> 

       
@endsection