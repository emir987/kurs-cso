<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chef extends Model
{
    use HasFactory;

	public function pizza(){
		//One to one relacija 
		return $this->belongsTo(Chef::class);
	}
}
