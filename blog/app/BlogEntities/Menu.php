<?php
/**
 * Created by PhpStorm.
 * User: black
 * Date: 31.10.2019
 * Time: 16:30
 */

namespace App\BlogEntities;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Menu extends Model
{
    protected $table = 'menus';

    protected $entity;

    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);

    }

    public function getItems()
    {
        return $this->hasMany(MenuItems::class)->get();
    }
}
