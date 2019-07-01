<?php

namespace App\Http\Controllers;

use App\Products;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
     /**
     * Display a listing of the prducts.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $request->session()->forget('product');
        $products = Products::all();

        //dd($products);

        return view('products.index',compact('products',$products));
    }

    /**
     * Show the step 1 Form for creating a new product.
     *
     * @return \Illuminate\Http\Response
     */
    public function step1(Request $request)
    {
        $product = $request->session()->get('product');
        //dd($product);
        return view('products.step1',compact('product', $product));
    }

    /**
     * Post Request to store step1 info in session
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function CreateStep1(Request $request)
    {

        $validatedData = $request->validate([
            'nombre' => 'required|unique:products',
        ]);

        if(empty($request->session()->get('product'))){
            $product = new Products();
            $product->fill($validatedData);
            $request->session()->put('product', $product);
            //dd($product);
        }else{
            $product = $request->session()->get('product');
            $product->fill($validatedData);
            $request->session()->put('product', $product);
        }

        return redirect('/products/create-step2');

    }

    /**
     * Show the step 2 Form for creating a new product.
     *
     * @return \Illuminate\Http\Response
     */
    public function Step2(Request $request)
    {
        $product = $request->session()->get('product');
        return view('products.step2',compact('product', $product));
    }

    /**
     * Post Request to store step1 info in session
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function CreateStep2(Request $request)
    {
        $validatedData = $request->validate([
            'ap' => 'required',
        ]);

        if(empty($request->session()->get('product'))){
            $product = new Products();
            $product->fill($validatedData);
            $request->session()->put('product', $product);
            //dd($product);
        }else{
            $product = $request->session()->get('product');
            $product->fill($validatedData);
            $request->session()->put('product', $product);
        }

        return redirect('/products/create-step3');

    }

    //paso tres

     /**
     * Show the step 2 Form for creating a new product.
     *
     * @return \Illuminate\Http\Response
     */
    public function Step3(Request $request)
    {
        $product = $request->session()->get('product');
        return view('products.step3',compact('product', $product));
    }

    /**
     * Post Request to store step1 info in session
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function CreateStep3(Request $request)
    {
        $validatedData = $request->validate([
            'am' => 'required',
        ]);

        if(empty($request->session()->get('product'))){
            $product = new Products();
            $product->fill($validatedData);
            $request->session()->put('product', $product);
            //dd($product);
        }else{
            $product = $request->session()->get('product');
            $product->fill($validatedData);
            $request->session()->put('product', $product);
        }

        return redirect('/products/create-step4');

    }



    /**
     * Show the Product Review page
     *
     * @return \Illuminate\Http\Response
     */
    public function createStep4(Request $request)
    {
        $product = $request->session()->get('product');
        //dd($product);
        return view('products.create-step4',compact('product',$product));
    }

    /**
     * Store product
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $product = $request->session()->get('product');
        //dd($product);
        $product->save();
        return redirect('/index');
    }

    public function edit1(Products $products, $id)
    {
        $products=Products::where('id','=',$id)->get();
        //dd($products);
       return view('products.edit1', compact('products'));
    }





}
