<?php namespace App\Http\Controllers;

use App\Product;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Request;
use Illuminate\Http\Response;

class products extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return response()->json(['response'=>'good to go']);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('addProduct');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$info = Request::all();
		$product = new Product();
		$product->name = $info['name'];
		$product->description = $info['description'];
		$product->in_stock = $info['in_stock'];
		$product->save();

		if(Request::isMethod('post')) {
			return view('success');
		} else {
			return response()->json(['response'=>'success']);
		}

	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
