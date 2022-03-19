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
    ];

    protected $hidden = [];

    public function galleries()
    {
        return $this->hasMany(Gallery::class, "travel_packages_id", "id");
    }

    public function owners()
    {
        return $this->hasMany(Owner::class, "travel_packages_id", "id");
    }
}
