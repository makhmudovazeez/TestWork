<?php

namespace App\Models;

use App\Traits\AuthorRecord;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Blog extends Model
{
    use HasFactory, AuthorRecord;

    public function createdBy(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
