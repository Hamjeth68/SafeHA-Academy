<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use MongoDB\Driver\Session;

class Cart
{
    public $items = null;
    public $totalPrice = 0;

    public function __construct($oldCart) {

        if($oldCart) {
            $this->items = $oldCart->items;
            $this->totalPrice = (float)$oldCart->totalPrice;
        }
    }

    public function updateCurrency(Model $rate) {
        $this->totalPrice = 0;
        foreach($this->items as $key => $item) {
            $this->items[$key]['price'] = (float) $item['items']['p_amount'] * (float)$rate->exchange_rate;
            $this->totalPrice += (float) $this->items[$key]['price'];
        }
    }

    public function add($item, $id) {
        $storedItems = ['items' => $item, 'price' => (float) $item->p_amount];
        if($this->items) {
            if(array_key_exists($id, $this->items)){
                $storedItems = $this->items[$id];
                $this->totalPrice -= (float)$item->p_amount;
            }
        }
        $this->items[$id] = $storedItems;
        // $this->totalPrice += $item->p_amount;
    }

    public function remove($item, $id) {
        $storedItems = ['items' => $item, 'price' => (float)$item->p_amount];
        $this->items[$id] = $storedItems;
        $this->totalPrice -= (float)$item->p_amount;
    }
}
