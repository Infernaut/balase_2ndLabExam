<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'is_completed',
    ];
    // Specify the custom primary key
    protected $primaryKey = 'task_id';

    // If the primary key is not an auto-incrementing integer, set this to false
    public $incrementing = true;

    // Specify the primary key type if it's not an integer
    protected $keyType = 'int';
}
