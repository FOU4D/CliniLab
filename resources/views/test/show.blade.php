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
          <div class="card-header bg-success"><strong>ID: {{$entry->id}}</strong></div>
          <div class="card-body">
          		<ul class="list-group">
                  <li class="list-group-item"><strong>NAME: </strong>{{$entry->name}}</li>
                  <li class="list-group-item"><strong>Turnaround Time: </strong>{{$entry->turnaround_time}} {{$entry->turnaround_interval}}</li> 
                  @if($entry->collections()->exists())
                   <li class="list-group-item">
	                  	<i class="la la-cubes la-lg"></i> <strong>Available on Collections: </strong>
	                  	@foreach ($entry->collections as $icollect)
						<i class="la la-cubes la-lg"></i><a href="/lab/collection/{{$icollect->id}}/show">{{$icollect->name}}</a> - 
						@endforeach
	               </li>
	               @endif

              	</ul>
          </div>
        </div>


	</div>
	<div id="visitinfo" class="col-sm-12 col-md-6">

		<div class="card">
          <div class="card-header bg-success"><i class=" la la-check"></i><strong>CODE: {{$entry->code}}</strong></div>
          <div class="card-body">
          		<ul class="list-group">
                  <li class="list-group-item"><i class="la la-info la-lg"></i> <strong>Specimen: </strong><a href="/lab/specimen/{{$entry->specimen_id}}/show">{{$entry->specimen['name']}}</a></li> 
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

<div id="footnotes" class="row d-flex">
	<div class="col-sm-12 col-md-6">
		<div class="card">
          <div class="card-header bg-success"><i class=" la la-check"></i><strong>Test Description</strong></div>
          <div class="card-body">
          		{{$entry->description}}
          </div>
        </div>

	</div>
	<div class="col-sm-12 col-md-6">
		<div class="card">
          <div class="card-header bg-success"><i class=" la la-check"></i><strong>Patient Preparation</strong></div>
          <div class="card-body">
          		{{$entry->preparation}}
          </div>
        </div>

	</div>
</div>
<div id="footnotes" class="row d-flex">
	<div class="col-sm-12 col-md-12">

		<div class="card">
          <div class="card-header bg-success"><i class=" la la-check"></i><strong>Normal Values</strong></div>
          <div class="card-body">

				<table class="table table-responsive-sm table-bordered table-striped table-hover table-sm">
                      <thead>
                        <tr>
                          <th>Identifier</th>
                          <th>Normal Value</th>
                          <th>Value Units</th>
                          <th>Interpretation</th>
                        </tr>
                      </thead>
                      <tbody>
                @foreach ((array) $entry->normal_values as $key => $nvalues)
          		@php
				$normalv = (object) $nvalues;
				@endphp
                        <tr>
                        	@isset($normalv->tidentifier)
                          <td>{{$normalv->tidentifier}}</td>
                          	@endisset
                          	@isset($normalv->tvalues)
                          <td>{{$normalv->tvalues}}</td>
                          	@endisset
                          	@isset($normalv->tunits)
                          <td>{{$normalv->tunits}}</td>
                          	@endisset
                          	@isset($normalv->tinterpretation)
                          <td>{{$normalv->tinterpretation}}</td>
                          	@endisset
                        </tr>
                      </tbody>
                    </table>
                @endforeach
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
