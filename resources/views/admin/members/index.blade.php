@extends('admin.master')
@section('title', __('keywords.members'))
@section('content')
  <div class="container-fluid">
          <div class="row justify-content-center">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between mb-3">
              <h2 class="h5 page-title">{{ __('keywords.members') }}</h2>
              <div class="page-title-right">

               
            <x-action-button href="{{ route('admin.members.create') }}" type="create" ></x-action-button>
            </div>                        
                </div> 
                  <div class="card shadow">
                    <div class="card-body">
                      <x-success-alert></x-success-alert>
                      <table class="table table-hover">
                        <thead>
                          <tr>
                            <th width = "5%" >#</th>
                            <th>{{ __('keywords.name') }}</th>
                            <th  width = "10%">{{ __('keywords.position') }}</th>
                            
                            <th  width = "10%">{{ __('keywords.image') }}</th>
                            <th  width = "10%">{{ __('keywords.facebook') }}</th>
                            <th  width = "10%">{{ __('keywords.twitter') }}</th>
                            <th  width = "10%">{{ __('keywords.linkedin') }}</th>
                            <th width = "10%">{{ __('keywords.actions') }}</th>
                        
                           
                          </tr>
                        </thead>
                        <tbody>
                            @if(count($members) > 0)
                            @foreach ($members as $key => $member)
                                
                            
                          <tr>
                            <td>{{ $members->firstItem() + $loop->index }}</td>
                            <td>{{ $member->name }}</td>
                            <td>{{ $member->position }}</td>
                           
                            <td> <img src="{{ asset('storage/' . $member->image) }}" width="50" height="50"
                              class="rounded-circle" alt="member Image"></td>
                            
                          
                            <td>{{ $member->facebook }}</td>
                            <td>{{ $member->twitter }}</td>
                            <td>{{ $member->linkedin }}</td>

                                 <td>
                                <x-action-button href="{{ route('admin.members.edit',['member'=> $member]) }}" type="edit" ></x-action-button>

                                <x-action-button href="{{ route('admin.members.show',['member'=> $member]) }}" type="show" ></x-action-button>
                                
                                <x-delete-action href="{{ route('admin.members.destroy',['member'=> $member]) }}" id="{{ $member->id}}" ></x-delete-action>
                            
                            </td>
                           
                          </tr>
                          @endforeach
                          @else

                     <x-empty-alert></x-empty-alert>
                            @endif
                        </tbody>
                      </table>
                      {{ $members->render('pagination::bootstrap-4') }}
                    </div>
                  </div>
                </div> 
            </div> 
          </div> 
        </div> 

       
@endsection