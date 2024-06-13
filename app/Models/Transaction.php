<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Vinkla\Hashids\Facades\Hashids;

class Transaction extends Model
{
    use HasFactory;

    public function getHashidAttribute()
    {
        return Hashids::encode($this->id);
    }

    public function userData(): BelongsTo
    {
        return $this->belongsTo(User::class, 'id_user');
    }

    public function ticketData(): BelongsTo
    {
        return $this->belongsTo(Ticket::class, 'id_ticket');
    }
}
