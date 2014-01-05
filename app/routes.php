<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('hello');
});
Route::get('/template', function()
{
	return View::make('template');
});


Route::get('/create/groups', function()
{
	try {
		$group = Sentry::createGroup(array(
        'name'        => 'Admin',
        'permissions' => array(
            'mod.ban' => 1,
            'user.ban' => 1,
            'content.upload' => 1,
            'content.delete' => 1,
            'picture.upvote' => 1,
            'picture.downvote' => 1,
        ),
    ));
		$group = Sentry::createGroup(array(
        'name'        => 'Mod',
        'permissions' => array(
            'mod.ban' => 0,
            'user.ban' => 1,
            'content.upload' => 1,
            'content.delete' => 0,
            'picture.upvote' => 1,
            'picture.downvote' => 1,
        ),
    ));
		$group = Sentry::createGroup(array(
        'name'        => 'User',
        'permissions' => array(
            'mod.ban' => 0,
            'user.ban' => 0,
            'content.upload' => 1,
            'content.delete' => 0,
            'picture.upvote' => 1,
            'picture.downvote' => 0,
        ),
    ));
	}
	catch (Cartalyst\Sentry\Groups\NameRequiredException $e)
	{
    	echo 'Name field is required';
	}	
	catch (Cartalyst\Sentry\Groups\GroupExistsException $e)
	{
    	echo 'Group already exists';
	}
});
