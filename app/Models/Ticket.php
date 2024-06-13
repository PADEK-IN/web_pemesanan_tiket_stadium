<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Ticket extends Model
{
    use HasFactory;

    public function eventData(): BelongsTo
    {
        return $this->belongsTo(Event::class, 'id_event');
    }

    public function ticketTransaction(): HasMany
    {
        return $this->hasMany(Ticket::class, 'id_ticket');
    }

}
