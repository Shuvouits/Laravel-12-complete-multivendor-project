<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class KYC extends Model
{
    //
    protected $fillable = ['status'];


    function user() : BelongsTo
    {
        return $this->belongsTo(User::class);
    }

}
