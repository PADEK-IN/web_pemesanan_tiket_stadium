<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Vinkla\Hashids\Facades\Hashids;

class Event extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'description', 'date', 'time', 'image'];

    public function getHashidAttribute()
    {
        return Hashids::encode($this->id);
    }

    public function eventTicket(): HasMany
    {
        return $this->hasMany(Ticket::class, 'id_event');
    }

    public function eventReview(): HasMany
    {
        return $this->hasMany(Review::class, 'id_event');
    }
}
