<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Tasks extends Model
{
    use HasFactory;

    protected $table = 'tasks';

    protected $casts = [
        'deadline'  => 'date:d/m/Y',
    ];
    /**
     * Get the artist record associated with the track.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
