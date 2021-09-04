<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'Products';
    protected $primarykey = 'id';
    protected $fillable = ['name', 'description', 'price', 'image','company_id'];

    public function company()
    {
        return $this->belongsTo(Company::class,'company_id');
    }
}
