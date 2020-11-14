<?php

namespace App;

use PhpParser\Node\Expr\FuncCall;

class Cart
{
    public $items = null;
    public $totalQty = 0;
    public $totalPrice = 0;

    public Function __construct($oldCart){
        if($oldCart){
            $this->items = $oldCart->model_title;
            $this->totalQty = $oldCart->totalQty;
            $this->totalPrice = $oldCart->totalPrice;
        }
    }

    public function add($item , $model_id){
        $storedItem = [
            'qty' => 0,
            'model_price' => $item->model_price,
            'item' => $item
        ];
        if($this->items){
            if(array_key_exists($model_id, $this->items)){
                $storedItem = $this->items[$model_id];
            }
        }

        $storedItem['qty']++;
        $storedItem['model_price'] = $item->model_price * $storedItem['qty'];
        $this->items[$model_id] = $storedItem;
        $this->totalQty++;
        $this->totalPrice += $item->model_price;
    }
    
        
    


}
