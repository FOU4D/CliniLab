<?php

// --------------------------
// Custom Backpack Routes
// --------------------------
// This route file is loaded automatically by Backpack\Base.
// Routes you generate using Backpack\Generators will be placed here.

Route::group([
    'prefix'     => config('backpack.base.route_prefix', 'admin'),
    'middleware' => [
        config('backpack.base.web_middleware', 'web'),
        config('backpack.base.middleware_key', 'admin'),
    ],
    'namespace'  => 'App\Http\Controllers\Admin',
], function () { // custom admin routes
    Route::crud('specimen', 'SpecimenCrudController');
    Route::crud('test', 'TestCrudController');
    Route::crud('collection', 'CollectionCrudController');
    Route::crud('institution', 'InstitutionCrudController');
    Route::crud('individual', 'IndividualCrudController');
    Route::crud('visit', 'VisitCrudController');
    Route::crud('trequest', 'TrequestCrudController');
    Route::crud('report', 'ReportCrudController');
    Route::crud('visitrequest', 'VisitrequestCrudController');
}); // this should be the absolute last line of this file