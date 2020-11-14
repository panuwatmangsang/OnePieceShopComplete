<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ModelProduct;
use Illuminate\Support\Facades\DB;
use App\Cart;
use App\HttpRequests;
use Illuminate\Support\Facades\Session;
use Illuminate\Validation\Rules\DatabaseRule;

class ModelsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $modelProdects = ModelProduct::all();
        return view('pages.models', ['modelProdects' => $modelProdects]);

    }

    public function innerJoinClause(){
        $prod_type = DB::table('product_type')
        ->join('model_products','product_type.product_type_id','=','model_products.product_type_id')
        ->select('product_type.product_type_name','model_products.model_title','model_products.model_price')
        ->where('model_products.model_id' , '=', 2)
        ->get();
        return $prod_type;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $myModel = ModelProduct::where('id', $myModel->id )->get();
        // return view('pages.models', ['myModel' => $myModel]);

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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
