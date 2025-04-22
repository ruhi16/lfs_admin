<?php

use App\Http\Controllers\ExamController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\GoogleAuthController;
use App\Http\Controllers\StudentdbController;
use App\Http\Livewire\AdminCarouselComponent;
use App\Http\Livewire\AdminFacilityUpdateComponent;
use App\Http\Livewire\AdminPrincipalUpdateComponent;
use App\Http\Livewire\AdminSessionEventManagementComponent;
use App\Http\Livewire\AdminSessionFeesManagementComponent;
use App\Http\Livewire\AdminStudentcrRecordComponent;
use App\Http\Livewire\AdminStudentCurrentComponent;
use App\Http\Livewire\AdminStudentdbComponent;
use App\Http\Livewire\AdminStudentdbEntryComponent;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Artisan;
// use Illuminate\Support\Facades\File;
// use Illuminate\Support\Facades\DB;
// use Illuminate\Support\Facades\Schema;
// use Illuminate\Support\Facades\Hash;
// use Illuminate\Support\Facades\Http;
// use Illuminate\Support\Facades\Log;
// use Illuminate\Support\Facades\Mail;
// use Illuminate\Support\Facades\Session;
// use Illuminate\Support\Facades\URL;
// use Illuminate\Support\Facades\View;
// use Illuminate\Support\Facades\Request;
// use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\TeacherController;
use App\Http\Livewire\Contact;
use App\Http\Livewire\Home;
use App\Http\Livewire\About;
// use App\Http\Livewire\AdminAdmissionComponent;
// use App\Http\Livewire\AdminAnsscrDistributionComponent;
// use App\Http\Livewire\AdminAnsscrDistributioncwComponent;
// use App\Http\Livewire\AdminMyclassAnserScriptDistributionBaseComponent;
// use App\Http\Livewire\AdminMyclassSectionComponent;
// use App\Http\Livewire\AdminTeacherWiseMarksEntryLinksComponent;
// use App\Http\Livewire\AdminUserPreviledgeControlComponent;
use App\Http\Livewire\SubadminMarksEntryComponent;
use App\Http\Livewire\SubadminMarksEntryEntityComponent;
// use App\Http\Livewire\UserChangePasswordComponent;
use App\Http\Livewire\AdminNoticeComponent;
use App\Http\Livewire\AdminSt;

// use App\Http\Livewire\Admin;
// use App\View\Components\AdminDashboard;


Route::get('/link', function(){
    Artisan::call('storage:link');
    return '<h1>Storage link created</h1>';
});

Route::get('/idcard', function(){
    return view('idcard');
})->name('idcard');


Route::controller(App\Http\Controllers\NoticeController::class)->group(
    function () {
        Route::get('notices', 'index'); // all notices, in a tabluler form, add new notice, open create
        Route::get('notices/{id}', 'display'); //
        Route::get('notices/create', 'create'); // create a new notice, display form for data entry
        Route::post('notices/create', 'store'); // submit clicked from create, to save the notice, goto indexes
        Route::get('notices/{id}/edit', 'edit'); // edit any existing notice, display existing notice, goto update
        Route::put('notices/{id}/edit', 'update'); // save the edited notice, goto indexes
        Route::get('notices/{id}/delete', 'destroy'); // delete any existing notice, goto inexes
    }
);

// Route::get('/dashboard', [App\Http\Controllers\SuperAdminController::class, 'dashboard']);
Route::get('/studentcr-profile/{id}', [App\Http\Controllers\UserController::class, 'studentcrProfile'])->name('general.studentcr-profile');



Route::group(
    ['prefix' => 'sup-admin', 'middleware' => ['web', 'auth', 'isSuperAdmin']],
    function () {
        Route::get('/dashboard', [
            App\Http\Controllers\SuperAdminController::class,
            'dashboard',
        ])->name('supAdminDash');

      
    }
);

Route::group(
    ['prefix' => 'admin', 'middleware' => ['web', 'isAdmin']],
    function () {

        Route::get('/mydashboard', About::class)->name('admin.mydashboard');       

        Route::get('/dashboard', [ App\Http\Controllers\AdminController::class, 'dashboard'])
            ->name('adminDash');


        // Welcome Screens Routes
        Route::get('welcomescreens/notices-view', AdminNoticeComponent::class)->name('ws.notices-view');
        

        // Studentdb Routes
        Route::get('studentdb/admission/{studentdb_id}', AdminStudentdbEntryComponent::class)->name('admin.studentdb_admission');
        Route::get('studentdb/updation/{studentdb_id}', [AdminStudentdbEntryComponent::class, 'updation'])->name('admin.studentdb_updation');
        
        // Welcome Screens Routes
        Route::get('welcomescreens/carousel-crud', AdminCarouselComponent::class)->name('ws.carousel-crud');
        Route::get('welcomescreens/facility-crud', AdminFacilityUpdateComponent::class)->name('admin.facility-crud');
        Route::get('welcomescreens/principal-crud', AdminPrincipalUpdateComponent::class)->name('admin.principal-crud');


        Route::get('studentcr/details', AdminStudentCurrentComponent::class)->name('admin.studentcr-details');
        Route::get('studentcr/records', AdminStudentcrRecordComponent::class)->name('admin.studentcr-records');

        Route::get('studentcr/records/{uuid}', AdminStudentcrRecordComponent::class)->name('admin.studentcr-records-individual');
        Route::get('studentcr/records/{uuid}/qrcode', [AdminStudentcrRecordComponent::class, 'getQrcode'])->name('admin.studentcr-records-individual-qrcode');
        Route::get('studentcr/records/{uuid}/idcard', [AdminStudentcrRecordComponent::class, 'getIdcard'])->name('admin.studentcr-records-individual-idcard');
        

        Route::get('/studentcr-profile/{id}', [App\Http\Controllers\UserController::class, 'studentcrProfile'])->name('admin.studentcr-profile');

        // Session Management
        Route::get('session/event-management', AdminSessionEventManagementComponent::class)->name('admin.session-event-management');
        Route::get('session/fees-management', AdminSessionFeesManagementComponent::class)->name('admin.session-fees-management');













        Route::controller(App\Http\Controllers\UIWelcomeScreenController::class)->group(
            function () {
                Route::get('welcomescreens', 'index'); // all notices, in a tabluler form, add new notice, open create
                Route::get ('welcomescreens/caraosel-view', 'caraoselView')->name('ws.caraosel-view');
                Route::post('welcomescreens/caraosel-submit', 'caraoselSubmit')->name('ws.caraosel-submit');

                // Route::get ('welcomescreens/notices-view', 'noticesView')->name('ws.notices-view');
                
                Route::post('welcomescreens/notices-submit', 'noticesSubmit')->name('ws.notices-submit');

                
                // Route::get('notices/{id}', 'display'); //
                // Route::get('notices/create', 'create'); // create a new notice, display form for data entry
                // Route::post('notices/create', 'store'); // submit clicked from create, to save the notice, goto indexes
                // Route::get('notices/{id}/edit', 'edit'); // edit any existing notice, display existing notice, goto update
                // Route::put('notices/{id}/edit', 'update'); // save the edited notice, goto indexes
                // Route::get('notices/{id}/delete', 'destroy'); // delete any existing notice, goto inexes
            }
        );

            
        Route::get('/home', Home::class)->name('home');
        Route::get('/contact', Contact::class)->name('contact');
        Route::get('/about', About::class)->name('about');

        

    }
);



Route::group(
    ['prefix' => 'office', 'middleware' => ['web', 'isOffice']],
    function () {
        Route::get('/dashboard', [
            App\Http\Controllers\OfficeController::class,
            'dashboard',
        ])->name('officeDash');
    }
);



Route::group(
    ['prefix' => 'sub-admin', 'middleware' => ['web', 'isSubAdmin']],
    function () {
        Route::get('/dashboard', [App\Http\Controllers\SubAdminController::class, 'dashboard'])
            ->name('subAdminDash');
        
        Route::get('/admission/{myclassSection_id}', SubadminMarksEntryComponent::class)
            ->name('subadmin.marksEntry');

        Route::get('/marksentryentityclasswise/{myclassSection_id}/{myclassSubject_id}/{examdetail_id}', SubadminMarksEntryEntityComponent::class)
            ->name('subadmin.marksentryentity');
    
        
    
    }
);





Route::group(
    ['prefix' => 'user', 'middleware' => ['web', 'isUser']],
    function () {
        Route::get('/dashboard', [App\Http\Controllers\UserController::class,'dashboard'])->name('userDash');

        Route::get('/studentcr-profile/{id}', [App\Http\Controllers\UserController::class, 'studentcrProfile'])->name('user.studentcr-profile');
    }
);



// Route::resource('/teachers', [TeacherController::class, 'index']);
Route::resource('/teachers', TeacherController::class);
Route::resource('/exam', ExamController::class);
Route::resource('/students', StudentdbController::class);


Route::get('/dashboard', function () {
    // echo 'Hello from dashboard';
    // echo auth()->user()->name;
    // echo 'Auth:' . Auth::user();

    if (Auth::user() && Auth::user()->role_id == 5) {
        // Super Admin or owner
        return redirect(route('supAdminDash'));
    }

    if (Auth::user() && Auth::user()->role_id == 4) {
        // Admin or Headmaster
        return redirect(route('adminDash'));
    }

    if (Auth::user() && Auth::user()->role_id == 3) {
        // Admin or Clerk or Headmaster
        return redirect(route('officeDash'));
    }

    if (Auth::user() && Auth::user()->role_id == 2) {
        // Sub Admin or Teacher
        return redirect(route('subAdminDash'));
    }

    if (Auth::user() && Auth::user()->role_id == 1) {
        // User or Students
        return redirect(route('userDash'));
    }

    if (Auth::user()) {
        // Any other authenticated users
        return redirect(route('userDash'));
    }

    // return view('dashboard');
})->middleware(['auth'])
//   ->middleware(['auth', 'verified'])
    ->name('dashboard');

    

Route::get('/', function () {
    $uiscreendesigns = App\Models\UiScreenDesign::where('ui_screen_id', 1)->get();
    // $notices = App\Models\Notice::where('is_active', 1)->get();

    return view('welcome',[
        'uiscreendesigns' => $uiscreendesigns,
        // 'notices' => $notices
    ]);
});



Route::get('auth/google', [GoogleAuthController::class, 'redirect'])
    ->name('auth.google.login');

Route::get('auth/google/callback', [GoogleAuthController::class, 'callbackGoogle'])
    ->name('auth.google.callback');



require __DIR__ . '/auth.php';


// Route::any('{any}', [UserController::class,'index'])->where('any', '^(?!api).*$');