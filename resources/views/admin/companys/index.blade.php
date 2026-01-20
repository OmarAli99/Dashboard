@extends('admin.master')
@section('title', __('keywords.companys'))
@section('content')
  <div class="container-fluid">
          <div class="row justify-content-center">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between mb-3">
              <h2 class="h5 page-title">{{ __('keywords.companys') }}</h2>
              <div class="page-title-right">

               
              <x-action-button href="{{ route('admin.companys.create') }}" type="create" ></x-action-button>
            </div>                        
                </div> 
                  <div class="card shadow">
                    <div class="card-body">
                      <x-success-alert></x-success-alert>
                      <table class="table table-hover">
                        <thead>
                          <tr>
                            <th width = "5%" >#</th>
                            <th>{{ __('keywords.image') }}</th>
                            <th width = "15%">{{ __('keywords.actions') }}</th>
                        
                           
                          </tr>
                        </thead>
                        <tbody>
                            @if(count($companys) > 0)
                            @foreach ($companys as $key => $company)
                                
                            
                          <tr>
                            <td>{{ $companys->firstItem() + $loop->index }}</td>
                            <td>{{asset('storage/' . $company->image) }}</td>
                        
                            <td>

                               
                                <x-action-button href="{{ route('admin.companys.edit',['company'=> $company]) }}" type="edit" ></x-action-button>

                                <x-action-button href="{{ route('admin.companys.show',['company'=> $company]) }}" type="show" ></x-action-button>
                                
                                <x-delete-action href="{{ route('admin.companys.destroy',['company'=> $company]) }}" id="{{ $company->id}}" ></x-delete-action>
                            
                            </td>
                           
                          </tr>
                          @endforeach
                          @else

                     <x-empty-alert></x-empty-alert>
                            @endif
                        </tbody>
                      </table>
                      {{ $companys->render('pagination::bootstrap-4') }}
                    </div>
                  </div>
                </div> 
            </div> 
          </div> 
        </div> 

       
@endsection