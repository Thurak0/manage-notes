<?php

namespace App\Models;

use Database\Factories\NoteFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    protected $fillable = [
        'title',
        'content',
        'important',
        'user_id',
    ];

    /** @use HasFactory<NoteFactory> */
    use HasFactory;

    protected static function booted(): void
    {
        static::creating(function ($model) {
            if (empty($model->user_id)) {
                $model->user_id = auth()->id();
            }
        });
    }
}
