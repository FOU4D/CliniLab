@extends(backpack_view('blank'))

@php
  $defaultBreadcrumbs = [
    trans('backpack::crud.admin') => url(config('backpack.base.route_prefix'), 'dashboard'),
    $crud->entity_name_plural => url($crud->route),
    trans('backpack::crud.preview') => false,
  ];

  // if breadcrumbs aren't defined in the CrudController, use the default breadcrumbs
  $breadcrumbs = $breadcrumbs ?? $defaultBreadcrumbs;
@endphp

@section('header')
	<section class="container-fluid d-print-none">
    	<a href="javascript: window.print();" class="btn float-right"><i class="la la-print"></i></a>
		<h2>
			<i class="la la-flask la-lg"></i>
	        <span class="text-capitalize">{!! $crud->getHeading() ?? $crud->entity_name_plural !!}</span>
	        <small>{!! $crud->getSubheading() ?? mb_ucfirst(trans('backpack::crud.preview')).' '.$crud->entity_name !!}.</small>
	        @if ($crud->hasAccess('list'))
	          <small class=""><a href="{{ url($crud->route) }}" class="font-sm"><i class="la la-angle-double-left"></i> {{ trans('backpack::crud.back_to_all') }} <span>{{ $crud->entity_name_plural }}</span></a></small>
	        @endif
	    </h2>
    </section>
@endsection

@section('content')

<div id="headerfull" class="row d-flex">


	<div id="visitinfo" class="col-sm-12 col-md-6">

        <div class="card">
          <div class="card-header bg-red text-white"><i class="la la-barcode la-lg"></i><strong>ID: {{$entry->id}}</strong></div>
          <div class="card-body">
          		<ul class="list-group">
                  <li class="list-group-item"><i class="la la-flask la-lg"></i><strong>NAME: </strong>{{$entry->name}}</li>
                  <li class="list-group-item"><i class="la la-dashboard la-lg"></i><strong>Turnaround Time: </strong>{{$entry->turnaround_time}} {{$entry->turnaround_interval}}</li> 


              	</ul>
          </div>
        </div>


	</div>
	<div id="visitinfo" class="col-sm-12 col-md-6">

		<div class="card">
          <div class="card-header bg-red text-white"><i class="la la-ticket la-lg"></i><strong>CODE: {{$entry->code}}</strong></div>
          <div class="card-body">
          		<ul class="list-group">
                  <li class="list-group-item"><i class="la la-filter la-lg"></i> <strong>Specimen: </strong><a href="/lab/specimen/{{$entry->specimen_id}}/show">{{$entry->specimen['name']}}</a></li> 
                  @if($entry->isActive === 0)
                  <li class="list-group-item"><i class="la la-toggle-off la-lg"></i> Not Available</li> 
                  @endif
                  @if($entry->isActive === 1)
                  <li class="list-group-item"><i class="la la-toggle-on la-lg"></i> Test Available</li> 
                  @endif
              	</ul>
          </div>
        </div>


	</div>


</div>

@if($entry->collections()->exists())
<div id="footnotes" class="row d-flex">
	<div class="col-sm-12 col-md-12">
	<div class="card">
		<div class="card-body">
		  	<i class="la la-cubes la-lg"></i> <strong>Available on Collections: </strong>
		  	@foreach ($entry->collections as $icollect)
			<i class="la la-cube la-lg"></i><a href="/lab/collection/{{$icollect->id}}/show">{{$icollect->name}}</a>   
			@endforeach
		</div>
	</div>
	</div>
</div>
@endif
<div id="footnotes" class="row d-flex">
	<div class="col-sm-12 col-md-6">
		<div class="card">
          <div class="card-header bg-gray-300"><i class="la la-info la-lg"></i><strong>Test Description</strong></div>
          <div class="card-body">
          		{{$entry->description}}
          </div>
        </div>

	</div>
	<div class="col-sm-12 col-md-6">
		<div class="card">
          <div class="card-header bg-gray-400"><i class="la la-user la-lg"></i><strong>Patient Preparation</strong></div>
          <div class="card-body">
          		{{$entry->preparation}}
          </div>
        </div>

	</div>
</div>
<div id="footnotes" class="row d-flex">
	<div class="col-sm-12 col-md-12">

		<div class="card">
          <div class="card-header bg-purple text-white"><i class="la la-code la-lg"></i><strong>Normal Values</strong></div>
          <div class="card-body">

				<table class="table table-responsive-sm table-bordered table-striped table-hover table-sm">
                      <thead>
                        <tr>
                          <th>Identifier</th>
                          <th>Normal Value</th>
                          <th>Interpretation</th>
                        </tr>
                      </thead>
                      <tbody>
						@foreach ((array) $entry->normal_values as $testkey => $testvalu)
			          		@php
							$normalval = (object) $testvalu;
							@endphp
                        <tr>
                        	
                          <td>
                          	@isset($normalval->tidentifier)
                          	<strong>{{$normalval->tidentifier}}</strong>
                          	@endisset
                          	</td>
                          	
                          <td>
                          	@isset($normalval->tvalues)
                          	{{$normalval->tvalues}}
                          	@endisset  
                          	@isset($normalval->tunits)
                          	  {{$normalval->tunits}}
                          	@endisset
                          </td>
                          	
                          <td>
                          	@isset($normalval->tinterpretation)
                          	{{$normalval->tinterpretation}}
                          	@endisset
                          </td>
                          	
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                
          </div>
        </div>
	</div>
</div>

<div id="footnotes" class="row d-flex">
	<div class="col-sm-12 col-md-6">
	@if ($crud->buttons()->where('stack', 'line')->count())
		<tr>
			<td><strong>{{ trans('backpack::crud.actions') }}</strong></td>
			<td>
				@include('crud::inc.button_stack', ['stack' => 'line'])
			</td>
		</tr>
	@endif
	</div>
	<div class="col-sm-12 col-md-6">
		<small><strong>Created: </strong>{{$entry->created_at}}  -  <strong>Updated: </strong>{{$entry->updated_at}}</small>
	</div>
</div>



@endsection


@section('after_styles')
	<link rel="stylesheet" href="{{ asset('packages/backpack/crud/css/crud.css') }}">
	<link rel="stylesheet" href="{{ asset('packages/backpack/crud/css/show.css') }}">
@endsection

@section('after_scripts')
	<script src="{{ asset('packages/backpack/crud/js/crud.js') }}"></script>
	<script src="{{ asset('packages/backpack/crud/js/show.js') }}"></script>
@endsection

