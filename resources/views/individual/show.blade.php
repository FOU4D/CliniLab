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

<div class="row d-flex">

	<div class="col-sm-12 col-md-8">

		<div id="infobasic" class="row d-flex">
			<div class=" col-sm-12 col-md-12">
			<div class="card">
				<div class="card-header bg-primary">
					<i class="la la-align-justify"></i>
					<strong>ID:</strong> {{$entry->id}}
				</div>
				<div class="card-body">
					<ul class="list-group">
					  <li class="list-group-item">
					  	<i class="la la-user la-lg"></i><strong>Name:</strong>		{{$entry->salutation}} {{$entry->name}}
					  </li>
	                  @php
	                    $date = new DateTime($entry->dob);
	                    $now = new DateTime();
	                    $age = $now->diff($date);
	                    if($age->y < 1) {
	                        $agemonths = " < 1";
	                        $agef = $agemonths;
	                    }else{
	                        $agef = $age->y;
	                    }
	                  @endphp
	                  <li class="list-group-item">
	                  	<i class="la la-venus-mars la-lg"></i> <strong>Gender:</strong>		{{$entry->gender}}, <i class="la la-calendar la-lg"></i> <strong>Age:</strong>		{{$agef}} years
	                  </li>
	                  @if(count($entry->institutions) > 0)
	                  <li class="list-group-item">
	                  	<i class="la la-user la-lg"></i> <strong>Affiliation: </strong>
	                  	@foreach ($entry->institutions as $institutionsz)
						<a href="/lab/institution/{{$institutionsz->id}}/show">{{$institutionsz->name}}</a> - 
						@endforeach
	                  </li>
	                  @endif
					</ul>
				</div>
			</div>
			</div>
		</div>

		@if(count($entry->address) > 0)
		<div id="addresses" class="row d-flex">
			<div class=" col-sm-12 col-md-12">
				<div class="card">
					<div class="card-header bg-secondary">
						<i class="la la-thumb-tack la-lg"></i> <strong>Addresses:</strong>
					</div>
					<div class="card-body">
						<div id="addresses" class="row d-flex">
						@foreach ($entry->address as $key => $addressesarray)
						<div class=" col-sm-12 col-md-6">
							@php
							$addresses = (object) $addressesarray;
							@endphp

							@if($addresses->default != 0 )
								<i class="la la-star la-lg"></i>
							@endif
							@if($addresses->home != 0 )
								<i class="la la-home la-lg"></i>
							@endif
							@if($addresses->work != 0 )
								<i class="la la-building la-lg"></i>
							@endif
							@if($addresses->school != 0 )
								<i class="la la-university la-lg"></i>
							@endif
							@if($addresses->other != 0 )
								<i class="la la-thumb-tack la-lg"></i>
							@endif
							<br>
							{{$addresses->address1}}, <br>
							{{$addresses->address2}}, <br>
							{{$addresses->neighbourhood}}, {{$addresses->city}}, <br>
							{{$addresses->state}}, {{$addresses->country}}, <br>
						</div>
						@endforeach
						</div>			
						
					</div>
				</div>
			</div>
		</div>
		@endif

	</div>

	<div class="col-sm-12 col-md-4">

		@isset($entry->bio)
		<div id="bio" class="row d-flex">
			<div class=" col-sm-12 col-md-12">
				<div class="card">
					<div class="card-header bg-success"><i class="la la-info la-lg"></i> <strong>Biography</strong></div>
					<div class="card-body">
							{{$entry->bio}}
					</div>
		         </div>
	     	</div>
		</div>
		@endisset	

		<div id="contacts" class="row d-flex">
			<div class=" col-sm-12 col-md-12">
			<div class="card">
				<div class="card-header bg-secondary">
					<i class="la la-align-justify"></i>
					<strong>Contact Info:</strong>
				</div>
				<div class="card-body">
					<ul class="list-group">
						@isset($entry->email)
					 	<li class="list-group-item">
					 		<i class="la la-envelope la-lg"></i>  <strong>Email:</strong>  <a href="mailto:{{$entry->email}}">{{$entry->email}}</a>
					  	</li>
					  	@endisset
					  	<li class="list-group-item">
					  		<i class="la la-phone la-lg">  </i> <strong>Primary:</strong>  <a href="tel:{{$entry->phone}}">{{$entry->phone}}</a>
					  	</li>

					  	@isset($entry->phones)
					  	@foreach ($entry->phones as $key => $phonesarray)
						<li class="list-group-item">
							@php
							$iphones = (object) $phonesarray;
							@endphp
							<i class="la la-phone la-lg"></i>  <a href="tel:{{$iphones->pnumber}}">{{$iphones->pnumber}}</a>
							@if($iphones->phome != 0 )
								<i class="la la-home la-lg"></i>
							@endif
							@if($iphones->pwhatsapp != 0 )
								<i class="la la-whatsapp la-lg"></i>
							@endif
							@if($iphones->pmobile != 0 )
								<i class="la la-mobile la-lg"></i>
							@endif
							@if($iphones->pwork != 0 )
								<i class="la la-building la-lg"></i>
							@endif
						</li>
						@endforeach
						@endisset
					</ul>
				</div>
			</div>
			</div>
		</div>


	</div>

</div>


@if(count($entry->visits) > 0)
<div class="row d-flex">
	<div class="col-sm-12 col-md-12">
		<div class="card">
		  <div class="card-header bg-info"><i class="la la-area-chart la-lg"></i> <strong>Visits</strong></div>
		  <div class="card-body">
			<table class="table table-responsive-sm table-sm table-hover table-striped">
			  <thead>
			    <tr>
			    	<th>Visit ID</th>
			    	<th>Date & Time</th>
			    	<th>Ref. By</th>
			    </tr>
			  </thead>
			  <tbody>
			    <tr>
			      @foreach ($entry->visits as $visitz)
			      <td><a href="/lab/visit/{{$visitz->id}}/show">{{$visitz->id}}</a></td>
			      <td>{{$visitz->created_at}}</td>
			      <td>{{$visitz->referenced_by}}</td>
			      @endforeach
			    </tr>
			  </tbody>
			</table>
		  </div>
		</div>
	</div>
</div>
@endif


@isset($entry->notes)
<div id="notes" class="row d-flex">
	<div class=" col-sm-12 col-md-12">
		<div class="card">
			<div class="card-header bg-warning"><i class="la la-warning la-lg"></i> <strong>Notes</strong></div>
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
