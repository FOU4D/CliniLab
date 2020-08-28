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
          <div class="card-header bg-primary"><i class="la la-barcode la-lg"></i><strong> ID: {{$entry->id}}</strong></div>
          <div class="card-body">
          		<ul class="list-group">
                  <li class="list-group-item"><i class="la la-tag la-lg"></i><strong>NAME: </strong>{{$entry->name}}</li>
                  <li class="list-group-item"><i class="la la-check"></i><strong>CODE: </strong>{{$entry->code}}</li>

              	</ul>
          </div>
        </div>


	</div>
	<div id="visitinfo" class="col-sm-12 col-md-6">

		<div class="card">
          <div class="card-header bg-primary"><i class="la la-tag la-lg"></i> info</div>
          <div class="card-body">
          		<ul class="list-group">
          			@isset($entry->specimen)
                  <li class="list-group-item"><i class="la la-tag la-lg"></i> <strong>Specimen: </strong><a href="/lab/specimen/{{$entry->specimen_id}}/show">{{$entry->specimen['name']}}</a></li> 
                  @endisset
                  @isset($entry->turnaround_time)
                  <li class="list-group-item"><i class="la la-clock-o la-lg"></i><strong>Turnaround Time: </strong>{{$entry->turnaround_time}} {{$entry->turnaround_interval}}</li> 
                  @endisset
                  @if($entry->availability == 0)
                  <li class="list-group-item"><i class="la la-toggle-off la-lg"></i> <strong> Not Available</strong></li> 
                  @else
                  <li class="list-group-item"><i class="la la-toggle-on la-lg"></i> <strong> Available</strong></li> 
                  @endif

              	</ul>
          </div>
        </div>


	</div>


</div>
		
		

<div id="footnotes" class="row d-flex">
	<div class="col-sm-12 col-md-4">
		@isset($entry->description)
		<div class="card">
          <div class="card-header bg-secondary"><i class="la la-check"></i><strong>Test Description</strong></div>
          <div class="card-body">
          		{{$entry->description}}
          </div>
        </div>
        @endisset
	</div>
	<div class="col-sm-12 col-md-4">
		@isset($entry->preparation)
		<div class="card">
          <div class="card-header bg-secondary"><i class="la la-check"></i><strong>Patient Preparation</strong></div>
          <div class="card-body">
          		{{$entry->preparation}}
          </div>
        </div>
        @endisset
	</div>
	
	<div class="col-sm-12 col-md-4">
		@isset($entry->normal_values)
		<div class="card">
          <div class="card-header bg-secondary"><i class="la la-check"></i><strong>Normal Values</strong></div>
          <div class="card-body">
          		{{$entry->normal_values}}
          </div>
        </div>
        @endisset
	</div>
</div>


@if($entry->tests()->exists())
<div id="footnotes" class="row d-flex">
	<div class="col-sm-12 col-md-12">
		<div class="card">
          <div class="card-header bg-success"><i class="la la-terminal la-lg"></i><strong>Included Tests</strong></div>
          <div class="card-body">

			<table class="table table-responsive-sm table-bordered table-striped table-hover table-sm">
			  <thead>
			    <tr>
			      <th><i>ID</i></th>
			      <th><i>Test Name</i></th>
			      <th><i>Turnaround</i></th>
			    </tr>
			  </thead>
			  <tbody>
			  	@foreach ($entry->tests as $atest)
			    <tr>

			      <td><strong><a href="/lab/test/{{$atest->id}}/show">{{$atest->id}}</a></strong></td>
			      <td><a href="/lab/test/{{$atest->id}}/show">{{$atest->name}}</a></td>
			      <td>{{$atest->turnaround_time}} {{$atest->turnaround_interval}}</td>

			      
			    </tr>
			    @endforeach
			  </tbody>
			</table>

          </div>
		</div>

	</div>
</div>
@endif

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

