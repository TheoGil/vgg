<?php

class AdminController extends BaseController {

	public function retrieveAll($items)
	{
		$result = DB::table($items)->get();
		return $result;
	}

	public function showAdminPannel()
	{
		$products = $this->retrieveAll('products');
		$tags = $this->retrieveAll('tags');
		return View::make('adminPannel', ['products'=>$products, 'tags'=>$tags]);
	}

	public function showNewProductForm()
	{
		$tags = $this->retrieveAll('tags');
		return View::make('new_product', ['tags'=>$tags]);
	}

	public function SaveNewProduct()
	{
		$rules = [
			'name' 			=> 'required|unique',
			'description' 	=> 'required',
			'price'			=> 'required',
			'quantity'		=> 'required'
		];

		// FORM VALIDATION COMES HERE!
		$newProd 				= new Product;
		$newProd->name 			= Input::get('new_product_name');
		$newProd->description 	= Input::get('new_product_description');
		$newProd->price 		= Input::get('new_product_price');
		$newProd->quantity 		= Input::get('new_product_quantity');

		$newProd->save();

		dd($newProd->id);

		$tags = Input::get('tags');
		dd($tags);
		/*foreach ( as $tag => $value) {
			var_dump($tag);
			var_dump($value);
		}*/

		return Redirect::to('admin');
	}

	public function updateProduct($id)
	{
		$rules = [
			'name' 			=> 'required|unique',
			'description' 	=> 'required',
			'price'			=> 'required',
			'quantity'		=> 'required'
		];

		// FORM VALIDATION COMES HERE!

		$productDTO 			= Product::find($id);
		$productDTO->name 		= Input::get('product_name');
		$productDTO->description= Input::get('product_description');
		$productDTO->price 		= Input::get('product_price');
		$productDTO->quantity   = Input::get('product_quantity');

		$productDTO->save();

		return Redirect::to('admin');
	}

	public function deleteProduct($id)
	{
		$product = Product::find($id);
		$product->delete();
		return Redirect::to('admin');
	}

}
