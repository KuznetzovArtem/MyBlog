<?php
/**
 * Created by PhpStorm.
 * User: black
 * Date: 06.11.2019
 * Time: 13:09
 */

namespace App\Events\Articles;


use App\User;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Event;

class AddArticle extends Event
{
    use SerializesModels;

    public $userID;
    public $articleID;

    public function __construct($article,User $user)
    {
        $user = Auth::user();
    }
}
