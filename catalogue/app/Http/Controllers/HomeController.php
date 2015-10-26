<?php namespace App\Http\Controllers;

use App\Http\Controllers\Products;

class HomeController extends Controller {
	/**
	 * @return Response
	 */

	public function index()
	{
		$prod = new Products;
		$prodList = $prod->listProds();	

		return view('home')->with('list', $prodList);
	}

}
