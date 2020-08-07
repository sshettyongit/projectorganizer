<?php



Route::get('/xyz', function(){
    return view('welcome');
});

Route::get('/landing', function(){
    return view('welcomepage');})->name('welcome.home');

Route::get('/home', 'HomeController@index')->name('home');
Auth::routes(['verify' => true]);

Route::group(['middleware' => 'isAdmin'],  function(){
    Route::get('/adminpanel', 'AdminController@adminpanel')->name('admin.panel');
    Route::get('/update/{id}' , 'AdminController@update')->name('update.user');
    Route::post('/edit/{id}', 'AdminController@edit')->name('edit.user');
    Route::get('/adminrights/{id}' , 'AdminController@adminrights')->name('make.admin');
    Route::post('/admin/{id}' , 'AdminController@adminupdate')->name('admin.update');
    Route::get('/remove/{id}', 'AdminController@userdelete' )->name('remove.user');
    //Route::get('/logout' , 'Auth\LoginController@logout')->name('logout');
    Route::get('/projects', 'AdminController@projectdetails')->name('project.details');
    Route::get('/projectrename/{pid}' , 'AdminController@renameproject')->name('rename.project');
    Route::post('/projectupdate/{pid}', 'AdminController@updateproject')->name('update.project');
    Route::get('/project/delete/{pid}', 'AdminController@deleteproject')->name('delete.project');
    Route::get('/project/create' , 'AdminController@createproject')->name('create.project');
    Route::post('/project/store' , 'AdminController@store')->name('new.project');
    Route::get('/project/detail/{pid}' , 'AdminController@data')->name('user.project');
    Route::get('/project/rel/{id}/{pid}' , 'AdminController@relationdelete')->name('delete.relation');
    Route::post('/project/add/{id}/{pid}' , 'AdminController@addnewmember')->name('add.details');
    
});

Route::get('/logout' , 'Auth\LoginController@logout')->name('logout');

Route::group(['middleware' => 'IsNotAdmin'] , function(){
    Route::get('/user/homepage/{id}', 'UserController@userpanel')->name('user.homepage');
    Route::get('/user/profile/{id}' , 'UserController@profileedit')->name('userprofile.edit');
    Route::post('/user/edit/{id}','UserController@profileupdate')->name('edit.profile');
    Route::get('user/project/{id}/{pid}' , 'UserController@projectsdetails')->name('userproject.details');
    Route::get('/user/project/add/{id}/{pid}', 'UserController@addTasks')->name('add.tasks');
    Route::post('/user/task/create/{id}/{pid}' , 'TasksController@createtask')->name('create.task');
});
