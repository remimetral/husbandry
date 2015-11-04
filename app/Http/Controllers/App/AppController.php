<?php namespace App\Http\Controllers\App;

use App\Http\Controllers\Base\Controller;

class AppController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Website Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders your application's "dashboard" for users that
	| are authenticated. Of course, you are free to change or remove the
	| controller as you wish. It is just here to get your app started!
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('lang');
	}

	/**
	 * Show the application home to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
		return view('app.pages.home', ['page_id' => 'home']);
	}

	/**
	 * Show the application about to the user.
	 *
	 * @return Response
	 */
	public function about()
	{
		return view('app.pages.about', ['page_id' => 'about']);
	}

	/**
	 * Show the application works to the user.
	 *
	 * @return Response
	 */
	public function works()
	{
		return view('app.pages.works', ['page_id' => 'works']);
	}

}
