<?php

namespace App\Models;

use Vinkla\Hashids\Facades\Hashids;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory;
    protected $fillable = ['name'];

    public function getHashidAttribute()
    {
        return Hashids::encode($this->id);
    }

    public function categoryEvent(): HasMany
    {
        return $this->hasMany(Event::class, 'id_category');
    }
}
