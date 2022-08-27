<?php
namespace MdTanvirHasanAnik\Chat\Models;

use Illuminate\Database\Eloquent\Model;

class Chat extends Model
{
    protected $fillable = [
        'sender_id' , 'receiver_id' , 'room_id' , 'type' , 'text'
    ];
}
