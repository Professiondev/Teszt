<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Job extends Model {
    
    private static $statusStrings = array('','Friss','kész','Aktív');
    public $timestamps = false;
    
    public function __get($key) {
        if($key=='statusToString') {
            return static::$statusStrings[$this->attributes['status']];
        }
        return $this->attributes[$key];
    }

}
