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
		<i class="la la-cube la-lg"></i>
	        <span class="text-capitalize">{!! $crud->getHeading() ?? $crud->entity_name !!}</span>
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
		<div id="basics" class="col-sm-12 col-md-12">
			<div class="card">
				<div class="card-header bg-primary bg-pink">
					<i class="la la-barcode"></i>
					<strong>ID:</strong> {{$entry->id}}
				</div>
				<div class="card-body">
					<ul class="list-group">
					  <li class="list-group-item">
					  	<i class="la la-cube la-lg"></i><strong>Name:</strong> {{$entry->name}}
					  </li>
	                  <li class="list-group-item">
	                  	<i class="la la-ellipsis-v la-lg"></i> <strong>Type:</strong>		{{$entry->type}}, <i class="la la-cubes la-lg"></i> <strong>Relation:</strong>		{{$entry->relation}}
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
		@isset($entry->address)
			<div class="card">
					<div class="card-header bg-teal text-white">
						<i class="la la-map la-lg"></i> <strong>Addresses:</strong>
					</div>
					<div class="card-body">
						<div id="addresses" class="row d-flex">
							@foreach ((array) $entry->address as $key => $instaddressarr)
							<div class=" col-sm-12 col-md-6">
								@php
								$insaddress = (object) $instaddressarr;
								@endphp
									<i class="la la-map-marker la-lg"></i>
								@if($insaddress->hq != 0 )
									<i class="la la-building la-lg"></i>
								@endif

								<br>
								@isset($insaddress->address1)
								{{$insaddress->address1}}, <br>
								{{$insaddress->address2}}, <br>
								{{$insaddress->neighbourhood}}, {{$insaddress->city}}, <br>
								{{$insaddress->state}}, {{$insaddress->country}}, <br>
								@endisset
							</div>
							@endforeach
						</div>			
						
					</div>
			</div>
		@endisset
		</div>
	</div>

	<div class="col-sm-12 col-md-4">
		@isset($entry->description)
		
			<div class=" col-sm-12 col-md-12">
				<div class="card">
					<div class="card-header bg-gray-300">
						<i class="la la-info la-lg"></i> <strong>Description</strong>
					</div>
					<div class="card-body">
							{{$entry->description}}
					</div>
		         </div>
	     	</div>
		
		@endisset	
	
	<div id="contacts" class=" col-sm-12 col-md-12">
			<div class="card">
				<div class="card-header bg-green text-white">
					<i class="la la-tty la-lg"></i>
					<strong>Contact Info:</strong>
				</div>
				<div class="card-body">
					<ul class="list-group">
						@isset($entry->email)
					 	<li class="list-group-item">
					 		<i class="la la-at la-lg"></i>  <strong>Email:</strong>  <a href="mailto:{{$entry->email}}">{{$entry->email}}</a>
					  	</li>
					  	@endisset
					  	@isset($entry->website)
					 	<li class="list-group-item">
					 		<i class="la la-link la-lg"></i>  <strong>website:</strong>  <a href="{$entry->website}}">{{$entry->website}}</a>
					  	</li>
					  	@endisset
					  	<li class="list-group-item">
					  		<i class="la la-phone la-lg">  </i> <strong>Primary:</strong>  <a href="tel:{{$entry->phone}}">{{$entry->phone}}</a>
					  	</li>

					  	@if($entry->phones !== null)
					  	@foreach ($entry->phones as $key => $instphonesarr)
						<li class="list-group-item">
							@php
							$instphones = (object) $instphonesarr;
							@endphp
							<i class="la la-ellipsis-v la-lg"></i>  <a href="tel:{{$instphones->pnumber}}">{{$instphones->pnumber}}</a>
							@if($instphones->pwhatsapp != 0 )
								<i class="la la-whatsapp la-lg"></i>
							@endif
							@if($instphones->pmobile != 0 )
								<i class="la la-mobile la-lg"></i>
							@endif
							@if($instphones->pwork != 0 )
								<i class="la la-building la-lg"></i>
							@endif
						</li>
						@endforeach
						@endif
					</ul>
				</div>
			</div>
	</div>
</div>
</div>
@if($entry->members()->exists())
<div id="members" class="row d-flex">
	<div class="col-sm-12 col-md-12">
		<div class="card">
		  <div class="card-header bg-blue text-white"><i class="la la-users la-lg"></i> <strong>Members</strong></div>
		  <div class="card-body">
			<table class="table table-responsive-sm table-sm table-hover table-striped">
			  <thead>
			    <tr>
			    	<th><strong>User ID</strong></th>
			    	<th><strong>Name</strong></th>
			    	<th><strong>Joined at</strong></th>
			    </tr>
			  </thead>
			  <tbody>
			    @foreach ($entry->members as $memberz)
			    <tr>
			      <td><i class="la la-barcode la-lg"></i> <a href="/lab/individual/{{$memberz->id}}/show">{{$memberz->id}}</a></td>
			      <td><i class="la la-user la-lg"> </i>{{$memberz->name}}</td>
			      <td><i class="la la-dashboard la-lg"> </i>{{$memberz->created_at}}</td>
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
			<div class="card-header bg-yellow"><i class="la la-exclamation-triangle la-lg"></i> <strong>Notes</strong></div>
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
