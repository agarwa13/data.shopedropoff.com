<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SellForm extends Model
{
    /*
     * Cast Items into an Array on retrieval from Database
     * Cast into Text (JSON) on submission to Database
     */
    protected $casts = [
      'items' => 'array'
    ];

    /*
     * We allow the data_id to be fillable
     */
    protected $fillable = ['data_id'];
}
