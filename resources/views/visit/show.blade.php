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
			<div class="card-header bg-primary">
				<i class="la la-barcode"></i>
				<strong>The Visit:</strong> {{$entry->id}}
			</div>
			<div class="card-body">
				<ul class="list-group">
					@isset($entry->referenced_by)
					<li class="list-group-item">
						<strong>Referenced By: </strong>{{$entry->referenced_by}}
					</li>
					@endisset
					<li class="list-group-item">
						<strong>Time and Date: </strong>{{$entry->created_at}}
					</li>
				</ul>
			</div>
		</div>
	</div>
	<div id="visitorinfo" class="col-sm-12 col-md-6">
		<div class="card">
			<div class="card-header bg-success">
				<i class="la la-users"></i>
				<strong>The Visitor:</strong> {{$entry->individual_id}}
			</div>
			<div class="card-body">
				<ul class="list-group">
					<li class="list-group-item">
						<strong>Name: </strong> <a href="/lab/individual/{{$entry->individual['id']}}/show">{{$entry->individual['name']}}</a>
					</li>
			      @php
                    $datezx = new DateTime($entry->individual['dob']);
                    $nowzx = new DateTime();
                    $agezx = $nowzx->diff($datezx);
                    if($agezx->y < 1) {
                        $agemonthszx = " < 1";
                        $agefzx = $agemonthszx;
                    }else{
                        $agefzx = $agezx->y;
                    }
                  @endphp

					<li class="list-group-item">
						<strong>Gender: </strong>{{$entry->individual['gender']}}, <strong>Age: </strong>{{$agefzx}} years.
					</li>
				</ul>
			</div>
		</div>
	</div>

</div>
<div id="testsrequired" class="row d-flex">
	<div class="col-sm-12 col-md-12">
		<div class="card">
			<div class="card-header bg-warning">
				<i class="la la-users"></i>
				<strong>{{count($entry->request)}} Test Requested</strong>
			</div>
			<div class="card-body">
			<table class="table table-responsive-sm table-sm table-hover table-striped">
			  <thead>
			    <tr>
			    	<th>Req. ID</th>
			    	<th>Date & Time</th>
			    	<th>Req Test</th>
			    	<th>Sample Status</th>
			    </tr>
			  </thead>
			  <tbody>
			    @foreach ($entry->request as $requestzx)
			    <tr>
			      <td><a href="/lab/request/{{$requestzx->id}}/show">{{$requestzx->id}}</a></td>
			      <td>{{$requestzx->created_at}}</td>
			      <td><a href="/lab/test/{{$requestzx->test_id}}/show">{{$requestzx->test_id}}</a></td>
			      <td>{{$requestzx->sample_status}}</td>
			    </tr>
			    @endforeach
			  </tbody>
			</table>
<a class="card-header-action btn-setting" href="/lab/request/create?visit_id={{$entry->id}}">
				<i class="la la-plus-square la-lg"></i> Add Test Request</a>
			</div>
		</div>
	</div>
</div>
<div id="footnotes" class="row d-flex">
	<div class="col-sm-12 col-md-12">
		<div class="card">
			<div class="card-header bg-warning">
				<i class="la la-users"></i>
				<strong>Notes</strong>
			</div>
			<div class="card-body">
				{{$entry->notes}}
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
