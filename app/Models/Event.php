<?php

namespace App\Models;

use Vinkla\Hashids\Facades\Hashids;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Event extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description', 'id_category', 'image', 'schedule',  'quota', 'price', 'isActive'];

    public function getHashidAttribute()
    {
        return Hashids::encode($this->id);
    }

    public function eventCategory(): BelongsTo
    {
        return $this->belongsTo(Category::class, 'id_category');
    }

    public function eventTransaction(): HasMany
    {
        return $this->hasMany(Transaction::class, 'id_event');
    }

    public function eventReview(): HasMany
    {
        return $this->hasMany(Review::class, 'id_event');
    }

}
