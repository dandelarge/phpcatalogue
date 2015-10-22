<?php namespace App\Http\Controllers;

class HomeController extends Controller {
	/**
	 * @return Response
	 */

	private $mockData = [
		['id' => 123, 
		'name' => 'product',
		'description' => 'some nice product',
		'inStock' => true],
		['id' => 123, 
		'name' => 'product',
		'description' => 'some nice product',
		'inStock' => true],
		['id' => 123, 
		'name' => 'product',
		'description' => 'some nice product',
		'inStock' => true],
		['id' => 123, 
		'name' => 'product',
		'description' => 'some nice product',
		'inStock' => false],
		['id' => 123, 
		'name' => 'product',
		'description' => 'some nice product',
		'inStock' => false],
		['id' => 123, 
		'name' => 'product',
		'description' => 'some nice product',
		'inStock' => true],
		['id' => 123, 
		'name' => 'product',
		'description' => 'some nice product',
		'inStock' => true],
		['id' => 123, 
		'name' => 'product',
		'description' => 'some nice product',
		'inStock' => true],
		['id' => 123, 
		'name' => 'product',
		'description' => 'some nice product',
		'inStock' => true],
		['id' => 123, 
		'name' => 'product',
		'description' => 'some nice product',
		'inStock' => true],
		['id' => 123, 
		'name' => 'product',
		'description' => 'some nice product',
		'inStock' => true],
		['id' => 123, 
		'name' => 'product',
		'description' => 'some nice product',
		'inStock' => true],
		['id' => 123, 
		'name' => 'product',
		'description' => 'some nice product',
		'inStock' => true],
		['id' => 123, 
		'name' => 'product',
		'description' => 'some nice product',
		'inStock' => true],
	];

	public function index()
	{
		return view('home')->with('list',$this->mockData);
	}

}
