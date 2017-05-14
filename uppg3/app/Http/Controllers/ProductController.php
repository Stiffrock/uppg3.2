<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Product;
use App\Review;
use App\Store;


class ProductController extends Controller
{
  public function __construct()
    {
        $this->middleware('auth', ['except' => ['index','show']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $products = Product::all();
        return view("products/index", [
          "products" => $products], [
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("products/create_product");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
     //$product = Product::create($request->all());
      $product = new Product;
      $product->title = $request->get('title');
      $product->brand = $request->get('brand');
      $product->price = $request->get('price');
      $product->description = $request->get('description');
      $product->image = $request->get('image');
      $store = $request->get('store');
       if ($product->title == NULL or $product->brand == NULL or $product->price == NULL
            or $product->description == NULL or $product->image == NULL or $store == NULL) {
          return redirect()->back();
       }
       else {
         $product_id = DB::connection()->getPdo()->lastInsertId();      //Behöver hitta något i bootstrap som ger en lista så ja kan loopa igenom o lägga till flera stores samtidigt, men detta får duga sålänge
         $store = $request->get("store");
         DB::table('product_store')->insert(
           [
             "product_id" =>$product_id,
             "store_id" => $store
           ]
         );
        $product->save();
        return redirect()->back();
       }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $product = Product::find($id);
      $reviews = Review::all();
      return view("products/show", [
       "product" => $product,
       "reviews" => $reviews
     ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $product = Product::find($id);
        $product->title = $request->title;
        $product->title = $request->brand;
        $product->title = $request->price;
        $product->title = $request->description;
        $product->title = $request->image;
        $product->save();

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::find($id);
        $product->delete();
    }
}
