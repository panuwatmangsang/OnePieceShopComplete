<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\ModelProduct; 

class kaidoDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // return view('modelsDetail.kaido');
        // $models = ModelProduct::all();
        $model_Img1 = '/images/model/kaido/kaido.jpg';
        $model1 = 'Kaido';        
        $model_price1 = 650;
        $model = DB::table('model_products')
            ->where([
                ['model_imagePath','LIKE','%'.$model_Img1.'%'],
                ['model_title','LIKE','%'.$model1.'%'],
                ['model_price','LIKE','%'.$model_price1.'%']])
            ->get();
        
        return view('modelsDetail.kaido', ['model' => $model]);

    }
    public function addToCart(Request $request){
        // $data = $request->get('model_title');
        // echo "<pre>";print_r($data);die;
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
        //
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
