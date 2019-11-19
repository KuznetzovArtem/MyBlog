<?php
/**
 * Created by PhpStorm.
 * User: black
 * Date: 01.11.2019
 * Time: 12:21
 */

namespace App\BlogEntities;


use Illuminate\Database\Eloquent\Model;

class MenuItems extends Model
{
    protected $table = 'menu_items';

    /**
     * @var MenuItems[]
     */
    protected $subItems;

    /**
     * @return MenuItems[]
     */
    public function getSubItems()
    {
        return $this->subItems;
    }

    /**
     * This function init sub items for item
     * If it exist
     */
    public function initSubItems(): void
    {
        if ($this->parent_menu_id) {
            $subMenu = $this->hasOne(Menu::class, 'id', 'parent_menu_id')->get();
            $this->subItems = $subMenu->first()->getItems();
            foreach ($this->subItems as $subItem) {
                $subItem->initSubItems();
            }
        }
    }

    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);
    }
}
