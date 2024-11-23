<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Tag extends Model
{
    /** @use HasFactory<\Database\Factories\TagFactory> */
    use HasFactory;

    protected $fillable = ['name'];

    /**
     * @return BelongsToMany<Job,Tag>
     */
    public function jobs(): BelongsToMany
    {
        return $this->belongsToMany(Job::class);
    }
}
