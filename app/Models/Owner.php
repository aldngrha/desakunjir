<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Owner extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        "travel_packages_id",
        "nama",
        "account_number",
        "bank",
        "whatsapp_number",
    ];

    protected $hidden = [];

    public function travel_package()
    {
        return $this->belongsTo(
            TravelPackage::class,
            "travel_packages_id",
            "id"
        );
    }
}
