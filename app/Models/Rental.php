<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Rental extends Model
{
    protected $fillable = [
        'user_id', 'car_id', 'driver_id', 'start_date', 'end_date', 'total_days',
        'total_price', 'status', 'payment_proof', 'denda',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function car()
    {
        return $this->belongsTo(Car::class);
    }

    public function driver()
    {
        return $this->belongsTo(Driver::class);
    }
}
