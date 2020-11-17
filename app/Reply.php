<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reply extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'reply', 'ticket_id'
    ];
    
    
    
    /**
     * Get the phone record associated with the user.
     */
    public function ticket()
    {
        return $this->belongsTo(Ticket::class);
    }

}
