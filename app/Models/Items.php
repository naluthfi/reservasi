<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Items extends Model
{
    CONST TYPE_ITEM = 'item';
    CONST TYPE_CLASS = 'class';

    const ALL_TYPE = [
        Items::TYPE_ITEM,
        Items::TYPE_CLASS
    ];
    public $timestamps = true;
    protected $table = 'items';
    protected $primaryKey = 'id';

}
