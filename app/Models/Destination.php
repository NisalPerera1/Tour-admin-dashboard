<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Destination extends Model
{
    use HasFactory;


    protected $fillable = ['name', 'location', 'description'];


    public function tours() {
        return $this->belongsToMany(Tour::class);

    }

    protected $attributes = [
        'description' => '',
        'location' => '', 
    ];
    

}
