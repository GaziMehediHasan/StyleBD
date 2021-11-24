<?php

namespace App\Model\Admin;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
  protected $table = 'items';
  protected $fillable = [
            'Name', 'ItemsType','Price','Discount','Ratings','Cat_ID','Photo'
  ];
}
