<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PatientsController;

Route::get('/patients', function() {
    echo "Get All Resource";
});

Route::post('/patients', function() {
    echo "Add Resource";
});
Route::get('/patients/{id}', function($id) {
    echo "Get Detail Resource id $id";
});

Route::put('/patients/{id}', function($id) {
    echo "Edit Resource id $id";
});

Route::delete('/patients/{id}', function($id) {
    echo "Delete Resource id $id";
});

Route::get('/patients/search/{name}', function($name) {
    echo "Search Resource by name name $name";
});

Route::get('/patients/status/positive', function() {
    echo "Get Positive Resource";
});

Route::get('/patients/status/recovered', function() {
    echo "Get Recovered Resource";
});

Route::get('/patients/status/dead', function() {
    echo "Get Dead Resource";
});



Route::get('/patients', [PatientsController::class, 'index']);
Route::post('/patients', [PatientsController::class, 'store']);
Route::get('/patients/{id}', [PatientsController::class, 'show']);
Route::put('/patientss/{id}', [PatientsController::class, 'update']);
Route::delete('/patients/{id}', [PatientsController::class, 'destroy']);
Route::get('/patients/search/{name}', [PatientsController::class, 'search']);
Route::get('/patients/status/positive', [PatientsController::class, 'positive']);
Route::get('/patients/status/recovered', [PatientsController::class, 'recovered']);
Route::get('/patients/status/dead', [PatientsController::class, 'dead']);