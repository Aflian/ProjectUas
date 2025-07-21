<?php
// app/Models/Car.php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    protected $fillable = [
        'name', 'brand', 'plate_number', 'year', 'status', 'price_per_day', 'denda_per_hari', 'image',
    ];

    public function rentals()
    {
        return $this->hasMany(Rental::class);
    }
}
