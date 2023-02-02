<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tasks extends Model
{
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
