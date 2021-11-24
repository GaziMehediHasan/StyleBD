<?php

namespace App\Model\Admin;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';
    protected $primaryKey = 'Cat_ID';
    protected $fillable = [
        'Cat_ID', 'Name', 'Cat_Type','Logo'
  ];
}
