<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $connection = 'mysql' ;
    protected $table = 'students' ;
    protected $primaryKey = 'id' ;
    protected $keyType = 'string' ;
    public $incrementing = false ;
    public $timestamps = false ;
    
    protected $fillable = ['name','email','city','marks'];

    use HasFactory;
}
