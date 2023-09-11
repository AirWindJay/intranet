<?php
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/linenslip', 'testCtr@linenslip');
Route::get('/test4', 'testCtr@test4');
Route::get('/test5', 'testCtr@test5');
Route::post('/test5save', 'testCtr@test5save');
Route::post('/test6save', 'testCtr@test6save');
Route::get('/test6', 'testCtr@test6');
Route::get('/test7', 'testCtr@test7');
Route::get('/test8', 'testCtr@test8');

Route::get('/', 'Auth\LoginCtr@index')->name('login');
Route::post('/login', 'Auth\LoginCtr@login');


Route::get('/ccrudetailsout/{id}', 'CcrupostsController@ccrudetailsout')->name('CCRU');

Route::get('/logout', 'Auth\LoginCtr@logout')->name("Logout");
Route::post('/logout', 'Auth\LoginCtr@logout')->name("Logout");

Route::get('/test2', 'DateController@test2');
Route::get('/test', 'DateController@test');
Route::get('/test3', 'DateController@test3');

Route::post('register/save', 'AnnouncementsController@regist');

Route::get('/servicerequest/home', 'ServiceRequestController@home');
Route::get('/getservicerequest', 'ServiceRequestController@getservicerequest');
Route::get('/getreminders', 'WebmasterCtr@getreminders');

Route::get('/servicerequest/index', 'ServiceRequestController@index');
Route::get('/playaudio', 'ServiceRequestController@playaudio');
Route::get('/stopaudio', 'ServiceRequestController@stopaudio');

Route::get('/bghmchistory', 'HomeController@history')->name('BGHMC HISTORY');
Route::get('/bghmcmvqp', 'HomeController@mvqp')->name('BGHMC M,V,QP');
Route::get('/bghmccoh', 'HomeController@coh')->name('BGHMC COH');
Route::get('/bghmcfunction', 'HomeController@function')->name('BGHMC FUNCTION');
Route::get('/bghmcorgchart', 'HomeController@orgchart')->name('BGHMC ORGANIZATIONAL CHART');


Route::group(['middleware' => 'auth'], function(){

    Route::get('/starting/{id}', 'HomeController@start');
    Route::get('/starting/save', 'HomeController@startsave');

    Route::get('/logout', 'Auth\LoginCtr@logout');

    // Document Tracking
    // Route::get('/document_tracking', 'DoctrackCtr@index');
    // Route::post('/document_tracking/get', 'DoctrackCtr@perdoc');
    // Route::post('/document_tracking/get/items', 'DoctrackCtr@perdocitems');
    
    // service request
    Route::get('/servicerequest/request', 'ServiceRequestController@request')->name('Service Request');
    Route::post('/servicerequest/request/save', 'ServiceRequestController@requestsave');
    Route::get('/myrequests', 'ServiceRequestController@myrequests')->name('My Requests');
    Route::get('/myrequests/acknowledge/{id}', 'ServiceRequestController@myrequestsack')->name('My Requests');
    Route::post('/myrequests/acknowledge/save', 'ServiceRequestController@myrequestsacksave');


    //user update
    Route::get('/update/account', 'HomeController@updateuser');
    Route::post('/update/account', 'HomeController@updateusersave');
    Route::get('/search/ward', 'FornursingController@action')->name('live_search.action');
    

    //user profile
    Route::get('/myprofile', 'ProfileCtr@index')->name('My Profile');
    Route::get('/myprofile/{id}', 'ProfileCtr@myprofileedit')->name('My Profile Edit');
    Route::post('/myprofile/save', 'ProfileCtr@myprofileeditsave');

        //social services
    Route::get('/socialservices', 'TunnelCtr@socialservices')->name('Social Services Apps');

        //Linen IS
    Route::get('linen/{id}', 'TunnelCtr@linenIS')->name('Linen IS');


    //messageme
    Route::get('/messageme', 'SuggestionsController@messageme')->name('ADD MESSAGE');
    Route::post('/messageme/save', 'SuggestionsController@messagemesave');

    //homecontroller confirmation
    Route::get('/home', 'HomeController@index');
    Route::get('/intranet', 'HomeController@intranet')->name('Intranet');
    Route::get('/messageconfirmation', 'HomeController@messageconfirmation')->name('Confirmation');


    //announcements
    Route::get('/omcc', 'AnnouncementsController@omccannouncements')->name('OMCC');
    Route::get('/medical', 'AnnouncementsController@medicalannouncements')->name('MEDICAL');
    Route::get('/nursing', 'AnnouncementsController@nursingannouncements')->name('NURSING');
    Route::get('/hopss', 'AnnouncementsController@hopssannouncements')->name('HOPSS');
    Route::get('/finance', 'AnnouncementsController@financeannouncements')->name('FINANCE');
    Route::get('/ccru', 'CcrupostsController@ccruannouncements')->name('CCRU');
    Route::post('/ccru/search', 'CcrupostsController@ccruannouncementssearch')->name('CCRU');
    Route::get('/ccrudetails/{id}', 'CcrupostsController@ccrudetails')->name('CCRU');
    Route::get('/viewdetails/{id}', 'AnnouncementsController@viewdetails')->name('View Details');
    Route::get('/viewdetails2/{id}', 'AnnouncementsController@viewdetails2')->name('View Details');


    
   

    //Watcher's ID module
    Route::group(['middleware' => 'watchid'], function () {
        Route::post('/watchid/ward', 'WatchCtr@perward');
        Route::post('/watchid/returned', 'WatchCtr@returned');
    });
    Route::get('/watchid/index', 'WatchCtr@index');
    Route::post('/watchid/generate', 'WatchCtr@generatereport');



        //webmaster
    Route::group(['middleware' => 'webmaster'], function () {
        Route::get('/monitoring', 'HomeController@monitoring')->name('MONITORING');
        Route::get('/adduser', 'HomeController@adduser')->name('ADD USER');
        Route::post('/adduser/save', 'HomeController@saveuser');
        Route::get('/mymessages', 'SuggestionsController@index')->name('My Messages');
        Route::get('/usermanagementwebmaster', 'AnnouncementsController@usersidex')->name('Client List');
        Route::get('/usermanagementwebmaster/edit/{id}', 'AnnouncementsController@editusersidex')->name('Client Edit');
        Route::post('/usermanagementwebmaster/edit/save', 'AnnouncementsController@updateusersidex');
        Route::post('/usermanagementwebmaster/delete', 'AnnouncementsController@deleteusersidex');
        Route::post('/update/date', 'DateController@updatedate');
        Route::get('/update/nursing', 'DateController@updatenursing')->name('Update Nursing');
        Route::get('/message/reply/{id}', 'SuggestionsController@reply')->name('Message Reply');
        Route::post('/reply/save', 'SuggestionsController@replysave');
        Route::get('/webmaster/addpost', 'AnnouncementsController@webmasterpostann')->name('Webmaster Post');
        Route::post('/webmaster/addpost/post', 'AnnouncementsController@webmasterpostannsave');
        Route::get('/activity_log', 'WebmasterCtr@actlog');
        Route::get('/servicerequest/reports', 'ServiceRequestController@servicereports')->name('Service Request Reports');
        Route::get('/webmaster/reminders', 'WebmasterCtr@reminders');
        Route::post('/webmaster/addreminders', 'WebmasterCtr@addreminders');
        Route::post('/webmaster/chagestat', 'WebmasterCtr@chagestat');
        Route::get('/webmaster/editreminders/{id}', 'WebmasterCtr@editreminders');
        Route::post('/webmaster/editreminders/save', 'WebmasterCtr@editreminderssave');

        Route::get('/webmaster/unichargechecker', 'WebmasterCtr@unichargechecker');
        Route::post('/webmaster/unichargechecker/check', 'WebmasterCtr@unichargecheckercheck');
        Route::post('/webmaster/unichargechecker/checksave', 'WebmasterCtr@unichargecheckerchecksave');
    });

        //MIS
    Route::group(['middleware' => 'mis'], function () {
        Route::get('/servicelist', 'ServiceRequestController@servicelist')->name('Service List');
        Route::post('/servicerequest/process', 'ServiceRequestController@serviceprocess');
        Route::post('/servicerequest/finish', 'ServiceRequestController@servicefinish');
        Route::post('/report/generate', 'ServiceRequestController@reportgenerate');
        Route::get('/servicerequest/print/{id}', 'ServiceRequestController@perservice')->name('PER SERVICE');
        Route::get('/generatereportservicerequest', 'ServiceRequestController@generatereportservicerequest');
    });

        //MISADMIN
    Route::group(['middleware' => 'mis_admin'], function () {
        Route::get('/admin/maintenance', 'ServiceRequestController@servicemaintenance')->name('Admin Maintenance');
        Route::get('/adminmyrequests/acknowledge/{id}', 'ServiceRequestController@adminmyrequestsack')->name('My Requests');
        Route::post('/adminmyrequests/acknowledge/save', 'ServiceRequestController@adminmyrequestsacksave');
        Route::get('/delete/service/{id}', 'ServiceRequestController@deleterequest')->name('Delete Service');
    }); 


        //HIMO ADMIN
    Route::group(['middleware' => 'himoadmin'], function () {
        Route::get('/himo/dashboard', 'HimoController@index')->name('Himo Dashboard');
    });

        //For Secretaries
    // Route::group(['middleware' => 'forsect'], function () {
    //     Route::get('/Consignment/dashboard', 'ForSectCtr@dashboard')->name('Secretary Dashboard');
    //     Route::post('/Consignment/updateaccount', 'ForSectCtr@updateaccount');
    //     Route::get('/Consignment/ENTdashboard', 'ForSectCtr@ENTdashboard');
    //     Route::get('/Consignment/ORTHOdashboard', 'ForSectCtr@ORTHOdashboard');
    //     Route::get('/Consignment/OPHTHAdashboard', 'ForSectCtr@OPHTHAdashboard');
    //     Route::post('/Consignment/patientlist', 'ForSectCtr@patientlist');
    //     Route::post('/Consignment/getencctrs', 'ForSectCtr@getencctrs');
    // });

        //For ISO
    Route::group(['middleware' => 'foriso'], function () {
        Route::get('/foriso/dashboard', 'ForIsoCtr@dashboard')->name('ISO Dashboard');
        Route::get('/foriso/form', 'ForIsoCtr@form')->name('CSATFORM');
        Route::post('/foriso/generatereport', 'ForIsoCtr@generatereport');
        Route::post('/foriso/save', 'ForIsoCtr@saveform');
        Route::post('/foriso/reports', 'ForIsoCtr@reports');
        Route::post('/foriso/ratings', 'ForIsoCtr@ratings');
    });

    //     //MMO
    // Route::group(['middleware' => 'mmo'], function () {
    //     Route::get('/mmo/dashboard', 'MmoController@index')->name('MMO Dashboard');
    //     Route::post('/mmo/additem/save', 'MmoController@additemssave');
    //     Route::post('/addget', 'MmoController@addget');
    //     Route::post('/addget/save', 'MmoController@addgetsave');
    // });


        //nursing
    Route::group(['middleware' => 'nursing'], function () {
        Route::get('/nurse/dashboard/{id}', 'FornursingController@dashboard')->name('Nurse Dashboard');
        Route::get('/ward/{id}', 'FornursingController@getward')->name('Ward');
        Route::get('/nurse/off', 'FornursingController@nurseoff')->name('Nurse Off');
        Route::post('nurse/off/save', 'FornursingController@nurseoffsave');
        Route::get('/nurse', 'FornursingController@mynurse')->name('Nurse Profile');
        Route::get('/select/ward', 'FornursingController@selectward')->name('Select Ward');
        Route::get('/selectward/{id}', 'FornursingController@selectwardsave')->name('Select Ward');
    });

        //nursinghead
    Route::group(['middleware' => 'nurseschedule'], function () {
        Route::get('/appendnurse/{id}', 'FornursingController@appendnurse')->name('Append Nurse');
        Route::post('/appendnurse/save', 'FornursingController@appendnursesave');
        Route::get('/noward', 'FornursingController@noward')->name('No Ward');
        Route::get('/nurseschedule/edit/{id}', 'FornursingController@editschedule')->name('Edit Schedule');
        Route::post('/nurseschedule/edit/save', 'FornursingController@saveschedule');
        Route::get('/nurse/list', 'FornursingController@nurselist')->name('Nurse List');
        Route::get('/print/list', 'FornursingController@printlist')->name('Print List');
        Route::get('/nurse/monitoring/{id}', 'FornursingController@monitoring')->name('Nurse Monitoring');
        Route::get('/nurse/remove/ward/{id}', 'FornursingController@removeward')->name('Remove Ward');
        Route::get('/nurse/replace/ward/{id}', 'FornursingController@replaceward')->name('Replace Ward');
        Route::post('/nurse/replace/ward/save', 'FornursingController@replacewardsave');
        Route::get('/report/generator/{id}', 'FornursingController@reportgenerator')->name('Report Generator');
        Route::post('/report/generator/save', 'FornursingController@reportgeneratorsave');
        Route::get('/reports', 'FornursingController@viewreport')->name('View Reports');
        Route::get('/printschedule/{id}', 'FornursingController@printschedule')->name('Print Schedule');
    });

        //Nurse Level 1
    Route::group(['middleware' => 'nurselevel1'], function () {
        Route::get('/nurse1/nurseschedule/edit/{id}', 'FornursingCtr2@editschedule')->name('Edit Schedule');
        Route::post('/nurse1/nurseschedule/edit/save', 'FornursingCtr2@saveschedule');
        Route::get('/nurse1/appendnurse/{id}', 'FornursingCtr2@appendnurse')->name('Append Nurse');
        Route::post('/nurse1/appendnurse/save', 'FornursingCtr2@appendnursesave');
        Route::get('/nurse1/noward', 'FornursingCtr2@level1noward')->name('No Wards');
        Route::get('/nurse1/list', 'FornursingCtr2@nurse1list')->name('Nurse 1 List');
        Route::get('/print1/list', 'FornursingCtr2@print1list')->name('Print List');
        Route::get('/nurse1/remove/ward/{id}', 'FornursingCtr2@removeward')->name('Remove Ward');
        Route::get('/nurse1/replace/ward/{id}', 'FornursingCtr2@replaceward')->name('Replace Ward');
        Route::post('/nurse1/replace/ward/save', 'FornursingCtr2@replacewardsave');
        Route::get('/nurse1/ward/{id}', 'FornursingCtr2@getward')->name('Ward');
        Route::get('/nurse1/report/generator/{id}', 'FornursingCtr2@reportgenerator')->name('Report Generator');
        Route::post('/nurse1/report/generator/save', 'FornursingCtr2@reportgeneratorsave');
        Route::get('/nurse1/printschedule/{id}', 'FornursingCtr2@printschedule1')->name('Print Schedule');
    });

        //Nurse Level 2
    Route::group(['middleware' => 'nurselevel2'], function () {
        Route::get('/nurse2/printschedule/{id}', 'FornursingCtr3@printschedule2')->name('Print Schedule');
        Route::get('/nurse2/ward/{id}', 'FornursingCtr3@getward')->name('Ward');
        Route::get('/nurse2/report/generator/{id}', 'FornursingCtr3@reportgenerator')->name('Report Generator');
        Route::post('/nurse2/report/generator/save', 'FornursingCtr3@reportgeneratorsave');
        Route::get('/nurse2/nurseschedule/edit/{id}', 'FornursingCtr3@editschedule')->name('Edit Schedule');
        Route::post('/nurse2/nurseschedule/edit/save', 'FornursingCtr3@saveschedule');
        Route::get('/nurse2/appendnurse/{id}', 'FornursingCtr3@appendnurse')->name('Append Nurse');
        Route::post('/nurse2/appendnurse/save', 'FornursingCtr3@appendnursesave');
        Route::get('/nurse2/noward', 'FornursingCtr3@level2noward')->name('No Wards');
        Route::get('/nurse2/list1', 'FornursingCtr3@nurse2list1')->name('Nurse 1 List');
        Route::get('/nurse2/list2', 'FornursingCtr3@nurse2list2')->name('Nurse 2 $ 3 List');
        Route::get('/print2/list1', 'FornursingCtr3@print2list1')->name('Print Nurse 1 List');
        Route::get('/print2/list2', 'FornursingCtr3@print2list2')->name('Print Nurse 2 $ 3 List');
        Route::get('/nurse2/remove/ward/{id}', 'FornursingCtr3@removeward')->name('Remove Ward');
        Route::get('/nurse2/replace/ward/{id}', 'FornursingCtr3@replaceward')->name('Replace Ward');
        Route::post('/nurse2/replace/ward/save', 'FornursingCtr3@replacewardsave');
    });



        //adminccru
    Route::group(['middleware' => 'adminccru'], function () {
        Route::get('/ccru/add', 'CcrupostsController@addccru')->name('POST CCRU');
        Route::post('/ccru/save', 'CcrupostsController@saveccru');

        Route::get('/ccru/edit/{id}', 'CcrupostsController@editccruannouncements')->name('Edit Announcement');
        Route::post('/ccru/edit/save', 'CcrupostsController@updateccruannouncements');

        Route::post('/ccru/delete', 'CcrupostsController@deleteccruannouncements');
    });

        //adminannouncements
    Route::group(['middleware' => 'adminannouncements'], function () {
        Route::get('/announcement/add', 'AnnouncementsController@addannouncement')->name('Add Announcement');
        Route::post('/announcement/add', 'AnnouncementsController@saveannouncement');
        Route::get('/announcement/edit/{id}', 'AnnouncementsController@editannouncement')->name('Edit Announcement');
        Route::post('/announcement/edit/save', 'AnnouncementsController@updateannouncement');
        Route::post('/announcement/delete', 'AnnouncementsController@deleteannouncement');
    });


    

        //BILLING
    // Route::group(['middleware' => 'billing'], function () {
    //     Route::get('/billing/dashboard', 'BillingCtr@index')->name('Billing Dashboard');
    //     Route::post('/billing/patients', 'BillingCtr@patlist');
    //     Route::post('/billing/allpatients', 'BillingCtr@allpatlist');
    //     Route::post('/billing/patients2', 'BillingCtr@patlist2');
        Route::post('/CF4Patient', 'BillingCtr@CF4Patient');
    // });


    // Route::group(['middleware' => 'ForDocsuanding'], function () {/Module/patientsforced
        Route::get('/Module/dashboard', 'ForDocSuandingCtr@dashboard');
        Route::get('/Module/dashboard2', 'ForDocSuandingCtr@dashboard2');
        Route::post('/Module/patients', 'ForDocSuandingCtr@generatelist');
        Route::post('/Module/patients2', 'ForDocSuandingCtr@generatelist2');
        Route::post('/Module/patients3_1', 'ForDocSuandingCtr@generatelist3_1');
        Route::post('/Module/patients3_2', 'ForDocSuandingCtr@generatelist3_2');
        Route::post('/Module/patients4', 'ForDocSuandingCtr@generatelist4');
        Route::post('/Module/patients4_5', 'ForDocSuandingCtr@generatelist4_5');
        Route::post('/Module/patients5', 'ForDocSuandingCtr@generatelist5');
        Route::post('/Module/patientsforced', 'ForDocSuandingCtr@patientsforced');
        Route::post('/Module/pastfrequency', 'ForDocSuandingCtr@frequencysave');
        Route::post('/Module/patientdetails', 'ForDocSuandingCtr@patientdetails');
        Route::post('/JSgetdataCC', 'ForDocSuandingCtr@JSgetdataCC');
        Route::post('/JSgetdataHPI', 'ForDocSuandingCtr@JSgetdataHPI');
        Route::post('/JSgetdataPPMH', 'ForDocSuandingCtr@JSgetdataPPMH');
        Route::post('/JSgetdataOBGYN', 'ForDocSuandingCtr@JSgetdataOBGYN');
        Route::post('/JSgetdataCIW', 'ForDocSuandingCtr@JSgetdataCIW');
        Route::post('/JSgetdataPSSA', 'ForDocSuandingCtr@JSgetdataPSSA');
        Route::post('/JSgetdataPEA', 'ForDocSuandingCtr@JSgetdataPEA');
    // });

        //Pharmacy Admin
    Route::group(['middleware' => 'pharmacyadmin'], function () {
    });

        //Pharmacy
    Route::group(['middleware' => 'pharmacy'], function () {
        Route::get('/pharmacy/index', 'PharmacyCtr@index');
        Route::post('/pharmacy/index/sorted', 'PharmacyCtr@indexsort');
        Route::get('/pharmacy/index2', 'PharmacyCtr@index2');
        Route::get('/pharmacy/index2/main', 'PharmacyCtr@index2main');
        Route::get('/pharmacy/index2/opd', 'PharmacyCtr@index2opd');
        Route::get('/pharmacy/index2/or', 'PharmacyCtr@index2or');
        Route::get('/pharmacy/search', 'PharmacyCtr@searchindex');
        Route::get('/pharmacy/backlog', 'PharmacyCtr@backlog');
        Route::get('/pharmacy/backlog/OPD', 'PharmacyCtr@backlogOPD');
        Route::get('/pharmacy/backlog/ER', 'PharmacyCtr@backlogER');
        Route::get('/pharmacy/backlog/ADM', 'PharmacyCtr@backlogADM');
        Route::post('/pharmacy/patient', 'PharmacyCtr@patientlist');
        Route::post('/pharmacy/patient1', 'PharmacyCtr@patientlist1');
        Route::post('/pharmacy/patient2', 'PharmacyCtr@patientlist2');
        Route::post('/pharmacy/enccode', 'PharmacyCtr@enccode');
        Route::post('/pharmacy/meds/save', 'PharmacyCtr@medssave');
        
        Route::post('/pharmacy/meds/save1', 'PharmacyCtr@medssave1');
        Route::post('/pharmacy/meds/save2', 'PharmacyCtr@medssave2');
    });


        //Patient Counter
    Route::get('/PatientCounter/index', 'PatcounterCtr@index');
    Route::post('/PatientCounter/index/generate', 'PatcounterCtr@generate');
    Route::post('/PatientCounter/index/generatedept', 'PatcounterCtr@generatedept');

        //Medical Records
    Route::group(['middleware' => 'medrecord'], function () {
        Route::get('/medicalcert/index', 'MedCertCtr@index');
        Route::post('/medicalcert/patient', 'MedCertCtr@patientsearch');
        Route::get('/medicalcert/generateenctr/{id}', 'MedCertCtr@generateenctr');
        Route::post('/medicalcert/print', 'MedCertCtr@print');
        Route::post('/medicalcert/fastprint', 'MedCertCtr@fastprint');

        Route::get('/medico_legal', 'MedCertCtr@medico_legal');

        // Route::get('/clinical_abstract', 'ClicAbsCtr@clinical_abstract');
        
        Route::get('/cert_confinement', 'CertConfCtr@cert_confinement');
    });


    // Route::group(['middleware' => 'medicalsupplies'], function (){
        Route::get('/medicalsupplies/index', 'MedSuppliesCtr@index');
        Route::post('/medicalsupplies/selectpatient', 'MedSuppliesCtr@selectpatient');
    // });

    Route::group(['middleware' => 'GL'], function ()
    {
        Route::get('/guaranteeletter/index', 'GuaranteeLetterCtr@index');
        Route::post('/guaranteeletter/selectpatient', 'GuaranteeLetterCtr@selectpatient');
        Route::post('/guaranteeletter/glsave', 'GuaranteeLetterCtr@glsave');
        Route::post('/AJAX/guaranteeletter/mapdetails', 'GuaranteeLetterCtr@mapdetails');

        Route::post('/guaranteeletter/savenewpcchrgcod', 'GuaranteeLetterCtr@savenewpcchrgcod');
    });



    Route::get('/PatChrgs/index' ,'PatChrgsCtr@index');
    Route::post('/JS/genpatientlist', 'PatChrgsCtr@JS_GenPatientList');
    Route::post('/JS/genenclist', 'PatChrgsCtr@JS_GenEncounterList');
    Route::post('/JS/submitenccode', 'PatChrgsCtr@JS_submitenccode');
});