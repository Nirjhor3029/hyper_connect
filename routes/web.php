<?php

use App\Http\Controllers\Admin\AgentStudentController;
use App\Http\Controllers\Admin\ProfileController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::redirect('/', '/login');
Route::get('/home', function () {
    if (session('status')) {
        return redirect()->route('admin.home')->with('status', session('status'));
    }

    return redirect()->route('admin.home');
});

Auth::routes(['register' => false]);

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'namespace' => 'Admin', 'middleware' => ['auth']], function () {
    Route::get('/', 'HomeController@index')->name('home');
    // Permissions
    Route::delete('permissions/destroy', 'PermissionsController@massDestroy')->name('permissions.massDestroy');
    Route::resource('permissions', 'PermissionsController');

    // Roles
    Route::delete('roles/destroy', 'RolesController@massDestroy')->name('roles.massDestroy');
    Route::post('roles/media', 'RolesController@storeMedia')->name('roles.storeMedia');
    Route::post('roles/ckmedia', 'RolesController@storeCKEditorImages')->name('roles.storeCKEditorImages');
    Route::resource('roles', 'RolesController');

    // Users
    Route::delete('users/destroy', 'UsersController@massDestroy')->name('users.massDestroy');
    Route::resource('users', 'UsersController');

    // Countries
    Route::delete('countries/destroy', 'CountriesController@massDestroy')->name('countries.massDestroy');
    Route::resource('countries', 'CountriesController');

    // User Settings
    Route::delete('user-settings/destroy', 'UserSettingsController@massDestroy')->name('user-settings.massDestroy');
    Route::resource('user-settings', 'UserSettingsController');

    // Students
    Route::delete('students/destroy', 'StudentsController@massDestroy')->name('students.massDestroy');
    Route::post('students/media', 'StudentsController@storeMedia')->name('students.storeMedia');
    Route::post('students/ckmedia', 'StudentsController@storeCKEditorImages')->name('students.storeCKEditorImages');
    Route::resource('students', 'StudentsController');

    Route::get('new-students', [AgentStudentController::class, 'newStudents'])->name('students.new');
    Route::get('prospected-students', [AgentStudentController::class, 'prospectedStudents'])->name('students.prospected');
    Route::post('students/convert-to-prospective', [AgentStudentController::class, 'convertToProspective'])->name('students.convertToProspective');


    // Universities
    Route::delete('universities/destroy', 'UniversitiesController@massDestroy')->name('universities.massDestroy');
    Route::post('universities/media', 'UniversitiesController@storeMedia')->name('universities.storeMedia');
    Route::post('universities/ckmedia', 'UniversitiesController@storeCKEditorImages')->name('universities.storeCKEditorImages');
    Route::resource('universities', 'UniversitiesController');

    // University Partnerships
    Route::delete('university-partnerships/destroy', 'UniversityPartnershipsController@massDestroy')->name('university-partnerships.massDestroy');
    Route::post('university-partnerships/media', 'UniversityPartnershipsController@storeMedia')->name('university-partnerships.storeMedia');
    Route::post('university-partnerships/ckmedia', 'UniversityPartnershipsController@storeCKEditorImages')->name('university-partnerships.storeCKEditorImages');
    Route::resource('university-partnerships', 'UniversityPartnershipsController');

    // Programs
    Route::delete('programs/destroy', 'ProgramsController@massDestroy')->name('programs.massDestroy');
    Route::post('programs/media', 'ProgramsController@storeMedia')->name('programs.storeMedia');
    Route::post('programs/ckmedia', 'ProgramsController@storeCKEditorImages')->name('programs.storeCKEditorImages');
    Route::resource('programs', 'ProgramsController');

    // Tags
    Route::delete('tags/destroy', 'TagsController@massDestroy')->name('tags.massDestroy');
    Route::resource('tags', 'TagsController');

    // Applications
    Route::delete('applications/destroy', 'ApplicationsController@massDestroy')->name('applications.massDestroy');
    Route::post('applications/media', 'ApplicationsController@storeMedia')->name('applications.storeMedia');
    Route::post('applications/ckmedia', 'ApplicationsController@storeCKEditorImages')->name('applications.storeCKEditorImages');
    Route::resource('applications', 'ApplicationsController');

    // Agents
    Route::delete('agents/destroy', 'AgentsController@massDestroy')->name('agents.massDestroy');
    Route::post('agents/media', 'AgentsController@storeMedia')->name('agents.storeMedia');
    Route::post('agents/ckmedia', 'AgentsController@storeCKEditorImages')->name('agents.storeCKEditorImages');
    Route::resource('agents', 'AgentsController');

    // Documents
    Route::delete('documents/destroy', 'DocumentsController@massDestroy')->name('documents.massDestroy');
    Route::post('documents/media', 'DocumentsController@storeMedia')->name('documents.storeMedia');
    Route::post('documents/ckmedia', 'DocumentsController@storeCKEditorImages')->name('documents.storeCKEditorImages');
    Route::resource('documents', 'DocumentsController');

    // Document Types
    Route::delete('document-types/destroy', 'DocumentTypesController@massDestroy')->name('document-types.massDestroy');
    Route::resource('document-types', 'DocumentTypesController');

    // Payments
    Route::delete('payments/destroy', 'PaymentsController@massDestroy')->name('payments.massDestroy');
    Route::resource('payments', 'PaymentsController');

    // Agent Commissions
    Route::delete('agent-commissions/destroy', 'AgentCommissionsController@massDestroy')->name('agent-commissions.massDestroy');
    Route::resource('agent-commissions', 'AgentCommissionsController');

    // Visa Applications
    Route::delete('visa-applications/destroy', 'VisaApplicationsController@massDestroy')->name('visa-applications.massDestroy');
    Route::resource('visa-applications', 'VisaApplicationsController');

    // Offer Letters
    Route::delete('offer-letters/destroy', 'OfferLettersController@massDestroy')->name('offer-letters.massDestroy');
    Route::resource('offer-letters', 'OfferLettersController');

    // Status Logs
    Route::delete('status-logs/destroy', 'StatusLogsController@massDestroy')->name('status-logs.massDestroy');
    Route::post('status-logs/media', 'StatusLogsController@storeMedia')->name('status-logs.storeMedia');
    Route::post('status-logs/ckmedia', 'StatusLogsController@storeCKEditorImages')->name('status-logs.storeCKEditorImages');
    Route::resource('status-logs', 'StatusLogsController');

    // Courses
    Route::delete('courses/destroy', 'CoursesController@massDestroy')->name('courses.massDestroy');
    Route::resource('courses', 'CoursesController');

    // Commission From University
    Route::delete('commission-from-universities/destroy', 'CommissionFromUniversityController@massDestroy')->name('commission-from-universities.massDestroy');
    Route::resource('commission-from-universities', 'CommissionFromUniversityController');

    // Subject
    Route::delete('subjects/destroy', 'SubjectController@massDestroy')->name('subjects.massDestroy');
    Route::post('subjects/media', 'SubjectController@storeMedia')->name('subjects.storeMedia');
    Route::post('subjects/ckmedia', 'SubjectController@storeCKEditorImages')->name('subjects.storeCKEditorImages');
    Route::resource('subjects', 'SubjectController');

    // Commission Settings
    Route::delete('commission-settings/destroy', 'CommissionSettingsController@massDestroy')->name('commission-settings.massDestroy');
    Route::resource('commission-settings', 'CommissionSettingsController');

    // Commission Distribution
    Route::delete('commission-distributions/destroy', 'CommissionDistributionController@massDestroy')->name('commission-distributions.massDestroy');
    Route::resource('commission-distributions', 'CommissionDistributionController');

    // Nationality
    Route::delete('nationalities/destroy', 'NationalityController@massDestroy')->name('nationalities.massDestroy');
    Route::resource('nationalities', 'NationalityController');


    // State
    Route::delete('states/destroy', 'StateController@massDestroy')->name('states.massDestroy');
    Route::resource('states', 'StateController');

    // City
    Route::delete('cities/destroy', 'CityController@massDestroy')->name('cities.massDestroy');
    Route::resource('cities', 'CityController');


    // Admission Stage
    Route::delete('admission-stages/destroy', 'AdmissionStageController@massDestroy')->name('admission-stages.massDestroy');
    Route::resource('admission-stages', 'AdmissionStageController');

    // Admission Status
    Route::delete('admission-statuses/destroy', 'AdmissionStatusController@massDestroy')->name('admission-statuses.massDestroy');
    Route::post('admission-statuses/media', 'AdmissionStatusController@storeMedia')->name('admission-statuses.storeMedia');
    Route::post('admission-statuses/ckmedia', 'AdmissionStatusController@storeCKEditorImages')->name('admission-statuses.storeCKEditorImages');
    Route::resource('admission-statuses', 'AdmissionStatusController');


    Route::get('profile', [ProfileController::class, 'index'])->name('profile.index');
});
Route::group(['prefix' => 'profile', 'as' => 'profile.', 'namespace' => 'Auth', 'middleware' => ['auth']], function () {
    // Change password
    if (file_exists(app_path('Http/Controllers/Auth/ChangePasswordController.php'))) {
        Route::get('password', 'ChangePasswordController@edit')->name('password.edit');
        Route::post('password', 'ChangePasswordController@update')->name('password.update');
        Route::post('profile', 'ChangePasswordController@updateProfile')->name('password.updateProfile');
        Route::post('profile/destroy', 'ChangePasswordController@destroy')->name('password.destroyProfile');
    }
});
