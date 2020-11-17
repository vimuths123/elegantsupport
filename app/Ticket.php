<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'customer_name','problem', 'email', 'phone', 'reference', 'status', 'user_id'
    ];
    
    /**
     * Get the phone record associated with the user.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get the phone record associated with the user.
     */
    public function ticket()
    {
        return $this->hasMany(Reply::class);
    }
}
