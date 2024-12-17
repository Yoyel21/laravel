<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class task extends Model
{
    use SoftDeletes;
    
    protected $fillable = [
        'title',
        'description'
    ];

    /**
     * The roles that belong to the task
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function sharedWith(): BelongsToMany
    {
        return $this->belongsToMany(User::class, 'task_user')->withPivot('permission');
    }
}
