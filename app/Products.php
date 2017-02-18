<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
  //
  protected $fillable=['product_name', 'product_image', 'product_description', 'amount', 'category'];
}
