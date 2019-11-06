<?php
/**
 * Created by PhpStorm.
 * User: black
 * Date: 06.11.2019
 * Time: 13:24
 */

namespace App\Listeners\Articles;

use \App\Events\Articles\AddArticle as AddArticleEvent;
use Illuminate\Support\Facades\Log;

class AddArticle
{
    /**
     * @param AddArticleEvent $event
     * @return void
     */
    public function handle(AddArticleEvent $event)
    {
        Log::notice($event->userID . " created" . " article id:" . $event->articleID);

    }
}
