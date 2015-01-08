<?php

class CatalogController extends BaseController {

	public function showAllProducts()
	{
		$products = DB::table('products')->get();
		return View::make('catalog', ['products'=>$products]);
		// return $products;
	}

	public function showProductsTaggedAs($tagId)
	{
		$tag = Tag::find($tagId);
		$products = $tag->products()->get();
		return View::make('catalog', ['products'=>$products]);
	}

}
