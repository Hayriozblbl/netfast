<?php

namespace App\Models\backend;

use Illuminate\Database\Eloquent\Model;

class Financetotals extends Model
{
    protected $fillable = ['date', 'financetotals', 'total', 'description', 'user_id'];


    public function financetotals_images()
    {
        return $this->hasMany('App\Models\frontend\financetotals_images');
    }
}

