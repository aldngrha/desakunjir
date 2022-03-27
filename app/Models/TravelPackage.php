<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TravelPackage extends Model
{
    use SoftDeletes;

    protected $fillable = [
        "title",
        "slug",
        "location",
        "about",
        "hiburan",
        "language",
        "foods",
        "duration",
        "price",
        "map",
        "owner_name",
        "account_number",
        "bank",
        "whatsapp_number",
    ];

    protected $hidden = [];

    public function galleries()
    {
        return $this->hasMany(Gallery::class, "travel_packages_id", "id");
    }
}
