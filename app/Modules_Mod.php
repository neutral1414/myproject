<?php

namespace App;

use DB;
use Illuminate\Database\Eloquent\Model;

class Modules_Mod extends Model
{
    
	public function setuser_func(){
		$query = DB::select('SELECT * FROM users');
		return $query;
	}

}
