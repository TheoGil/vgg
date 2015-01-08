<?php

class ProductController extends BaseController {

	protected function getProduct($id){
		$product = Product::find($id);
		return $product;
	}

	public function showProduct($id)
	{
		// $product = DB::table('products')->find($id);
		$product = $this->getProduct($id);
		return View::make('single_product', ['product'=>$product]);
	}

	public function editProduct($id){
		$product = $this->getProduct($id);
		return View::make('edit_product', ['product'=>$product]);
	}

}
