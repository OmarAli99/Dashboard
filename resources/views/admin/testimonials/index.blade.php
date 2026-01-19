@extends('admin.master')
@section('title', __('keywords.testimonials'))
@section('content')
  <div class="container-fluid">
          <div class="row justify-content-center">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between mb-3">
              <h2 class="h5 page-title">{{ __('keywords.testimonials') }}</h2>
              <div class="page-title-right">

               
              <x-action-button href="{{ route('admin.testimonials.create') }}" type="create" ></x-action-button>
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
                            <th  width = "15%">{{ __('keywords.position') }}</th>
                            <th  width = "15%">{{ __('keywords.description') }}</th>
                            <th  width = "15%">{{ __('keywords.image') }}</th>
                            <th width = "15%">{{ __('keywords.actions') }}</th>
                        
                           
                          </tr>
                        </thead>
                        <tbody>
                            @if(count($testimonials) > 0)
                            @foreach ($testimonials as $key => $testimonial)
                                
                            
                          <tr>
                            <td>{{ $testimonials->firstItem() + $loop->index }}</td>
                            <td>{{ $testimonial->name }}</td>
                            <td>{{ $testimonial->position }}</td>
                            <td>{{ $testimonial->description }}</td>
                            <td> <img src="{{ asset('storage/' . $testimonial->image) }}" width="50" height="50"
                              class="rounded-circle" alt="testimonial Image"></td>
                            
                            <td>

                               
                                <x-action-button href="{{ route('admin.testimonials.edit',['testimonial'=> $testimonial]) }}" type="edit" ></x-action-button>

                                <x-action-button href="{{ route('admin.testimonials.show',['testimonial'=> $testimonial]) }}" type="show" ></x-action-button>
                                
                                <x-delete-action href="{{ route('admin.testimonials.destroy',['testimonial'=> $testimonial]) }}" id="{{ $testimonial->id}}" ></x-delete-action>
                            
                            </td>
                           
                          </tr>
                          @endforeach
                          @else

                     <x-empty-alert></x-empty-alert>
                            @endif
                        </tbody>
                      </table>
                      {{ $testimonials->render('pagination::bootstrap-4') }}
                    </div>
                  </div>
                </div> 
            </div> 
          </div> 
        </div> 

       
@endsection