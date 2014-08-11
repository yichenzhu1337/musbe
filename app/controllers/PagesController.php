<?php

class PagesController extends BaseController {

	/**
	 * Manages all the static and most commonly used pages.
	 *
	 * @return view
	 */
	public function home()
	{
		return View::make('pages.home');
	}

	/**
	 * Manages all the static and most commonly used pages.
	 *
	 * @return view
	 */
	public function about()
	{
		return View::make('pages.about');
	}

	/**
	 * Manages all the static and most commonly used pages.
	 *
	 * @return view
	 */
	public function contact()
	{
		return View::make('pages.contact');
	}
	
}
