<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Color extends Model
{
    use HasFactory;


    protected $fillable = [
          'dmc', 'hex', 'name'
      ];

      protected $table = 'colors';



    // public function colors()
    // {
    //     return $this->hasOne(Color::class);
    // }


}
