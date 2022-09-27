<?php 
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class City extends Model
{
    use SoftDeletes;

    protected $table = 'cities';
    protected $guarded = [];

    static function getValidationRules(){
    	$rules = [
		    'state_id' => 'required','name' => 'required'
		];
		return $rules;
    }

    public function hasCountry()
    {
        return $this->hasOne(Country::class, 'id', 'country_id');
    }

    public function hasState()
    {
        return $this->hasOne(State::class, 'id', 'state_id');
    }
}
