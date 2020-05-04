<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Saudara extends Model
{
    protected $guard = [];

    protected $table = 'saudaras';

    protected $fillable = ['namasaudara'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
