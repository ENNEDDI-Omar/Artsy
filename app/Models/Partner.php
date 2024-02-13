<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Partner extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
       'logo',
       'entreprise',
       'domaine',
    ];

    public function projects(): BelongsToMany
    {
        return $this->BelongsToMany(Project::class);
    }
}
