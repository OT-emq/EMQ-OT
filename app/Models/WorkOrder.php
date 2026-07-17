<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class WorkOrder extends Model
{
    use HasFactory;

    protected $fillable = ['daily_plane_id'];

    public function dailyPlane(): BelongsTo
    {
        return $this->belongsTo(DailyPlane::class);
    }
}