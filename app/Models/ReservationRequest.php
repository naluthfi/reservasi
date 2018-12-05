<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ReservationRequest extends Model
{
    const STATUS_PENDING = 'pending';
    const STATUS_ACCEPTED = 'accepted';
    const STATUS_REJECTED = 'rejected';
    public $timestamps = true;
    protected $table = 'request';
    protected $primaryKey = 'id';

    public function items()
    {
        return $this->belongsToMany(Items::class, 'request_items', 'request_id', 'item_id')->withPivot('quantity');
    }
}
