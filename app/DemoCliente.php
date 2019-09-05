<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class DemoCliente extends Model
{
    protected $table = "cliente";

    public static function getDemoCliente(){
        try {
            return $queryBusqueda = DemoCliente::get();
        } catch (\Throwable $th) {
            return $th;
        }

    }
}
