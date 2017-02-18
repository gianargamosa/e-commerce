<?php

namespace App;

class Cart
{
  //
  public $items = null;
  public $total_quantity = 0;
  public $total_price = 0;

  public function __construct($old_cart)
  {
    if ($old_cart) {
      $this->items = $old_cart->items;
      $this->total_quantity = $old_cart->total_quantity;
      $this->total_price = $old_cart->total_price;
    }
  }

  public function add($item, $id)
  {
    $stored_item = ['quantity' => 0, 'amount' => $item->amount, 'products' => $item];
    
    if ($this->items) {
      if (array_key_exists($id, $this->items)) {
        $stored_item = $this->items[$id];
      }
    }
    $stored_item['quantity']++;
    $stored_item['amount'] = $item->price * $stored_item['quantity'];
    $this->items[$id] = $stored_item;
    $this->total_quantity++;
    $this->total_price += $item->amount;
  }
}
