<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;
    protected $table='company';
    protected $fillable =['id','name','address_1','address_2','city','state','country','zip_code','primary_phone_no','primary_email_address','language_id','logo'];
}
