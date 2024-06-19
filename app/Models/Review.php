<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Vinkla\Hashids\Facades\Hashids;

class Review extends Model
{
    use HasFactory;

    protected $fillable = ['id_user', 'id_event', 'rating', 'comment'];

    public function getHashidAttribute()
    {
        return Hashids::encode($this->id);
    }

    public function eventData(): BelongsTo
    {
        return $this->belongsTo(Event::class, 'id_event');
    }

    public function userData(): BelongsTo
    {
        return $this->belongsTo(User::class, 'id_user');
    }
}
