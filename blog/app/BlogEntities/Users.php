<?php
/**
 * Created by PhpStorm.
 * User: black
 * Date: 28.10.2019
 * Time: 13:46
 */

namespace App\BlogEntities;


use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    protected $primaryKey = 'user_id';

    protected $type;

    protected $password;

    protected $login;

    protected $mail;

    protected $phone;
}
