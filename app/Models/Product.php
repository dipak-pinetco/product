<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Product extends Model
{
    use HasFactory;

    public function tags(): BelongsToMany
    {
        return $this->belongsToMany(Tag::class)->withTimestamps();
    }

    public function options(): BelongsToMany
    {
        return $this->belongsToMany(Option::class)->withTimestamps();
    }

    public function images(): HasMany
    {
        return $this->hasMany(Image::class);
    }

    public function variants(): HasMany
    {
        return $this->hasMany(Variant::class);
    }


}
