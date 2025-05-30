<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = ['user_id', 'title', 'description', 'due_date', 'is_completed'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
