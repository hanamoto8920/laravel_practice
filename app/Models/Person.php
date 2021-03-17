<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class Person extends Model
{
    public $timestamps = false;

    protected $guarded = array('id');

    public static $rules = array(
        'name' => 'required',
        'mail' => 'email',
        'age' => 'integer|min:0|max:150'
    );
    public function getData() {
        return $this->id . ': ' . $this->name .' (' . $this->age .')';
    }

    // public function board() {
    //     return $this->hasOne('App\Models\Board');
    // }
    public function boards() {
        return $this->hasMany('App\Models\Board');
    }

    // use HasFactory;
    // public function getData() {
    //     return 'ID:'.$this -> id .' 名前:'. $this -> name. ' メールアドレス:'.$this -> mail.' 年齢:'. $this -> age.'歳';
    // }
}
