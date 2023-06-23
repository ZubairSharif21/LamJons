<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    use HasFactory;


    protected $appends = [
        'abc'
    ];
    public function getAbcAttribute(){
return $this->first_name.' '. $this->last_name;
    }
}
