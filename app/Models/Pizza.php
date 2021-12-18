<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pizza extends Model
{
	use HasFactory;

	//polja koja smiju da se unesu u bazu sa web stranice, suprotno $guarded
	protected $fillable = ['name'];

	public function chef()
	{
		//One to one relations 
		return $this->hasOne(Chef::class);
	}
}
