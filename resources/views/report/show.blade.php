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
			<i class="la la-bar-chart la-lg"></i> 
	        <span class="text-capitalize">{!! $crud->getHeading() ?? $crud->entity_name !!}</span>
	        <small>{!! $crud->getSubheading() ?? mb_ucfirst(trans('backpack::crud.preview')).' '.$crud->entity_name !!}.</small>
	        @if ($crud->hasAccess('list'))
	          <small class=""><a href="{{ url($crud->route) }}" class="font-sm"><i class="la la-angle-double-left"></i> {{ trans('backpack::crud.back_to_all') }} <span>{{ $crud->entity_name_plural }}</span></a></small>
	        @endif
	    </h2>
    </section>
@endsection

@section('content')


<div id="notes" class="row d-flex">
	<div class=" col-sm-12 col-md-6">
		<div class="card">
			<div class="card-header bg-purple text-white"><i class="la la-barcode la-lg"></i>  <strong>Report ID:</strong>{{$entry->id}}</div>
			<div class="card-body">
				<ul class="list-group"> 
					
					<li class="list-group-item"><i class="la la-flask la-lg"></i><strong>Report Title: </strong>{{$entry->title}}</li>
					<li class="list-group-item"><i class="la la-th-list la-lg"></i><strong>Report Status: </strong>{{$entry->status}}</li>
					
				</ul>
			</div>
        </div>
 	</div>
 		<div class=" col-sm-12 col-md-6">
		<div class="card">
			<div class="card-header bg-red text-white "><i class="la la-eyedropper la-lg"></i> <strong></strong></div>
			<div class="card-body">
				<ul class="list-group"> 
				<li class="list-group-item"><i class="la la-flask la-lg"></i><strong>By Dr. </strong>{{$entry->user['name']}}</li>

				<li class="list-group-item"><i class="la la-flask la-lg"></i><strong>Requested ID: </strong><a href="/lab/visitrequest/{{$entry->request_id}}/show">{{$entry->request_id}}</a></li>
				</ul>
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
                          <th>Reference Values</th>
                          <th>Interpretation</th>
                        </tr>
                      </thead>
                      <tbody>
						@foreach ($entry->results as $resultkey => $resultvalue)
			          		@php
							$resultvalues = (object) $resultvalue;
							@endphp
                        <tr>
                        	
                          <td>
                          	<strong>
                          		@isset($resultvalues->rid)
                          		{{$resultvalues->rid}}</strong>
                          		@endisset
                          	</td>
                          	
                          <td>
                          	@isset($resultvalues->rvalues)
                          	{{$resultvalues->rvalues}}
                          	  {{$resultvalues->runits}}
                          	@endisset
                          </td>
                          	
                          <td>
                          	@isset($resultvalues->rreference)
                          	{{$resultvalues->rreference}}
                          	@endisset
                          </td>
                          <td>
                          	@isset($resultvalues->rinterpretation)
                          	{{$resultvalues->rinterpretation}}
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



@isset($entry->notes)
<div id="notes" class="row d-flex">
	<div class=" col-sm-12 col-md-12 d-print-none">
		<div class="card">
			<div class="card-header bg-yellow"><i class="la la-exclamation-triangle la-lg"></i> <strong>Notes</strong></div>
			<div class="card-body">
					{{$entry->notes}}
			</div>
        </div>
 	</div>
</div>
@endisset


<div class="row d-flex">
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
