<?php

namespace App;

use App\Mjesto;
use Illuminate\Database\Eloquent\Model;

//php artisan make:model Zupanija --migration
class Zupanija extends Model
{

    public function mjesta()
    {
        return $this->hasMany('App\Mjesto');
    }

}
