<?php 
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class WhatLearn extends Model
{
    use SoftDeletes;

    protected $table = 'whatlearns';
    protected $guarded = [];

    static function getValidationRules(){
    	$rules = [
		    
		];
		return $rules;
    }
}
