<?php

namespace App;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Task extends Model {

    /**
     * Массово присваиваемые атрибуты.
     *
     * @var array
     */
    protected $fillable = ['name'];
    
    /**
     * Get the user that owns the task.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
