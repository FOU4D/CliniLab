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
<div id="basicinfo" class="row d-flex">



	<div class="col-sm-12 col-md-8">
		<div id="basics" class=" col-sm-12 col-md-12">
			<div class="card">
				<div class="card-header bg-primary">
					<i class="la la-barcode"></i>
					<strong>ID:</strong> {{$entry->id}}
				</div>
				<div class="card-body">
					<ul class="list-group">
					  <li class="list-group-item">
					  	<i class="la la-user la-lg"></i><strong>Name:</strong> {{$entry->name}}
					  </li>
	                  <li class="list-group-item">
	                  	<i class="la la-venus-mars la-lg"></i> <strong>Type:</strong>		{{$entry->type}}, <i class="la la-calendar la-lg"></i> <strong>Relation:</strong>		{{$entry->relation}}
	                  </li>
                      @isset($entry->key_contact)
                      <li class="list-group-item">
                            <i class="la la-user la-lg"></i> <strong>Key Contact: </strong>
                            <a href="/lab/individual/{{$entry->key_contact}}/show"> {{$entry->key_contact}}</a>
                      </li>
                      @endisset
					</ul>
				</div>
			</div>
		</div>
		<div id="addressesoffice" class=" col-sm-12 col-md-12">
		</div>
	</div>
	<div class="col-sm-12 col-md-4">
		@isset($entry->description)
		
			<div class=" col-sm-12 col-md-12">
				<div class="card">
					<div class="card-header bg-success">
						<i class="la la-info la-lg"></i> <strong>Description</strong>
					</div>
					<div class="card-body">
							{{$entry->description}}
					</div>
		         </div>
	     	</div>
		
		@endisset	
	</div>
	<div id="contacts" class=" col-sm-12 col-md-12">
	</div>

</div>
@if($entry->members()->exists())
<div id="members" class="row d-flex">
	<div class="col-sm-12 col-md-12">
		<div class="card">
		  <div class="card-header bg-info"><i class="la la-area-chart la-lg"></i> <strong>Members</strong></div>
		  <div class="card-body">
			<table class="table table-responsive-sm table-sm table-hover table-striped">
			  <thead>
			    <tr>
			    	<th>ID</th>
			    	<th>Name</th>
			    	<th>Joined at</th>
			    </tr>
			  </thead>
			  <tbody>
			    @foreach ($entry->members as $memberz)
			    <tr>
			      <td><a href="/lab/individual/{{$memberz->id}}/show">{{$memberz->id}}</a></td>
			      <td>{{$memberz->name}}</td>
			      <td>{{$memberz->created_at}}</td>
			    </tr>
			    @endforeach
			  </tbody>
			</table>
		  </div>
		</div>
	</div>
</div>
@endif
@isset($entry->notes)
<div id="notes" class="row d-flex">
	<div class=" col-sm-12 col-md-12 d-print-none">
		<div class="card">
			<div class="card-header bg-warning"><i class="la la-warning la-lg"></i> <strong>Notes</strong></div>
			<div class="card-body">
					{{$entry->notes}}
			</div>
        </div>
 	</div>
</div>
@endisset
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
