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


<div class="row">
	<div class="col-lg-6">
		<div class="card">
			<div class="card-header">
				<i class="la la-align-justify"></i> <strong>ID:</strong> {{$entry->id}}
			</div>
			<div class="card-body">
				<ul class="list-group">
                      <li class="list-group-item"><strong>Name:</strong> {{$entry->salutation}} {{$entry->name}}</li>
                      <li class="list-group-item"><strong>Gender:</strong> {{$entry->gender}}, <strong>Date of Birth:</strong> {{$entry->dob}}</li>
                </ul>
			</div>
		</div>
	</div>

	<div class="col-lg-6">
		<div class="col-lg-12">
			<small><strong>Created: </strong>{{$entry->created_at}}  -  <strong>Updated: </strong>{{$entry->updated_at}}</small>
		</div>
		<div class="col-lg-12">
			<div class="card">
				<div class="card-header">
					<i class="la la-align-justify"></i> <strong>Contacts</strong>
				</div>
				<div class="card-body">
					<ul class="list-group">
	                      <li class="list-group-item"><strong>Primary Phone:</strong> <a href="tel:{{$entry->phone}}">{{$entry->phone}}</a> </li>
	                      @isset($entry->email)
	    					<li class="list-group-item"><strong>Email:</strong> {{$entry->email}}</li>
						  @endisset
	                </ul>
				</div>
			</div>
		</div>
	</div>
</div>

@foreach ($entry->phones as $firstt=>$second)
    @foreach ($second as $thirdd=>$forth)
        @isset($forth)
                    @if($thirdd ==  'pnumber')
                        {{$forth}}
                    @elseif ($forth ==  1)
                        @if($thirdd ==  'pwhatsapp')
                            <i class="la la-whatsapp la-lg mt-4"></i>
                        @elseif ($thirdd ==  'pwork')
                            <i class="la la-building la-lg mt-4"></i>
                        @elseif ($thirdd ==  'pmobile')
                            <i class="la la-mobile la-lg mt-4"></i>
                        @elseif ($thirdd ==  'phome')
                            <i class="la la-home la-lg mt-4"></i>
			@else
				out
                    @endif
        @endisset
    @endforeach
@endforeach
<hr>

    
@foreach ($entry->phones as $firstt=>$second)
    @foreach ($second as $thirdd=>$forth)
        @isset($forth)
   
{{$second['pnumber']}} 

                @if($forth ==  1)
                    @if($thirdd ==  'pwhatsapp')
                        <i class="la la-whatsapp la-lg mt-4"></i>
                    @endif
                    @if($thirdd ==  'pwork')
                        <i class="la la-building la-lg mt-4"></i>
                    @endif
                    @if($thirdd ==  'pmobile')
                        <i class="la la-mobile la-lg mt-4"></i>
                    @endif
                    @if($thirdd ==  'phome')
                        <i class="la la-home la-lg mt-4"></i>
                    @endif
                @endif
        @endisset
    @endforeach
@endforeach

<pre>




@foreach ($entry->phones as $firstt=>$second)
{{$firstt}}
    @foreach ($second as $thirdd=>$forth)
        @isset($forth)
            {{$thirdd}}: {{$forth}}
        @endisset
    @endforeach
@endforeach

<?php

print_r($entry->address);
?>
</pre>
<?php
foreach($entry->address as $key=>$value){


    echo $key . "<br>";
    if(is_object($value) || is_array($value)){
        foreach($value as $key2=>$value2){
             echo $key2 . "<br>";
             echo $value2 . "<br>";
        }
    }else{
        echo $value . "<br>";
    }

}
?>

<?php
print_r($entry->phones);

foreach($entry->phones as $key=>$value){
    echo $key . "<br>";
    if(is_object($value) || is_array($value)){
        foreach($value as $key2=>$value2){
             echo $key2 . "<br>";
             echo $value2 . "<br>";
        }
    }else{
        echo $value . "<br>";
    }

}
?>











<div class="row">
	<div class="{{ $crud->getShowContentClass() }}">

	<!-- Default box -->
	  <div class="">
	  	@if ($crud->model->translationEnabled())
	    <div class="row">
	    	<div class="col-md-12 mb-2">
				<!-- Change translation button group -->
				<div class="btn-group float-right">
				  <button type="button" class="btn btn-sm btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				    {{trans('backpack::crud.language')}}: {{ $crud->model->getAvailableLocales()[request()->input('locale')?request()->input('locale'):App::getLocale()] }} &nbsp; <span class="caret"></span>
				  </button>
				  <ul class="dropdown-menu">
				  	@foreach ($crud->model->getAvailableLocales() as $key => $locale)
					  	<a class="dropdown-item" href="{{ url($crud->route.'/'.$entry->getKey().'/show') }}?locale={{ $key }}">{{ $locale }}</a>
				  	@endforeach
				  </ul>
				</div>
			</div>
	    </div>
	    @else
	    @endif
	    <div class="card no-padding no-border">
			<table class="table table-striped mb-0">
		        <tbody>
		        @foreach ($crud->columns() as $column)
		            <tr>
		                <td>
		                    <strong>{!! $column['label'] !!}:</strong>
		                </td>
                        <td>
							@if (!isset($column['type']))
		                      @include('crud::columns.text')
		                    @else
		                      @if(view()->exists('vendor.backpack.crud.columns.'.$column['type']))
		                        @include('vendor.backpack.crud.columns.'.$column['type'])
		                      @else
		                        @if(view()->exists('crud::columns.'.$column['type']))
		                          @include('crud::columns.'.$column['type'])
		                        @else
		                          @include('crud::columns.text')
		                        @endif
		                      @endif
		                    @endif
                        </td>
		            </tr>
		        @endforeach
				@if ($crud->buttons()->where('stack', 'line')->count())
					<tr>
						<td><strong>{{ trans('backpack::crud.actions') }}</strong></td>
						<td>
							@include('crud::inc.button_stack', ['stack' => 'line'])
						</td>
					</tr>
				@endif
		        </tbody>
			</table>
	    </div><!-- /.box-body -->
	  </div><!-- /.box -->

	</div>
</div>
@endsection


@section('after_styles')
	<link rel="stylesheet" href="{{ asset('packages/backpack/crud/css/crud.css') }}">
	<link rel="stylesheet" href="{{ asset('packages/backpack/crud/css/show.css') }}">
@endsection

@section('after_scripts')
<script>

    var app = @json($entry->address);


    var app = @json($entry->address, JSON_PRETTY_PRINT);

</script>
	<script src="{{ asset('packages/backpack/crud/js/crud.js') }}"></script>
	<script src="{{ asset('packages/backpack/crud/js/show.js') }}"></script>
@endsection
