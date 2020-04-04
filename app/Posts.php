<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Posts extends Model
{
    use Notifiable;

//    protected $fillable = [
//        'title', 'body'
//    ];

    protected $guarded = [];

}
