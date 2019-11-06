<?php
/**
 * Created by PhpStorm.
 * User: black
 * Date: 28.10.2019
 * Time: 13:18
 */

namespace App\BlogEntities;

use Illuminate\Database\Eloquent\Model;

class Comments extends Model
{
    protected $createdDate;

    protected $publisherId;

    protected $commentText;
}
