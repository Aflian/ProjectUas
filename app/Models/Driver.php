<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Driver extends Model
{
    protected $fillable = [
        'name', 'phone', 'license_number', 'status',
    ];

    public function rentals()
    {
        return $this->hasMany(Rental::class);
    }
}
