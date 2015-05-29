<?php

class CmCategory extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var string
     */
    protected $category_id;

    /**
     *
     * @var string
     */
    protected $category_name;

    /**
     *
     * @var string
     */
    protected $parent_id;

    /**
     *
     * @var string
     */
    protected $is_active;

    /**
     *
     * @var string
     */
    protected $icon;

    /**
     *
     * @var integer
     */
    protected $order_view;

    /**
     *
     * @var string
     */
    protected $is_show_menu;

    /**
     * Method to set the value of field category_id
     *
     * @param string $category_id
     * @return $this
     */
    public function setCategoryId($category_id)
    {
        $this->category_id = $category_id;

        return $this;
    }

    /**
     * Method to set the value of field category_name
     *
     * @param string $category_name
     * @return $this
     */
    public function setCategoryName($category_name)
    {
        $this->category_name = $category_name;

        return $this;
    }

    /**
     * Method to set the value of field parent_id
     *
     * @param string $parent_id
     * @return $this
     */
    public function setParentId($parent_id)
    {
        $this->parent_id = $parent_id;

        return $this;
    }

    /**
     * Method to set the value of field is_active
     *
     * @param string $is_active
     * @return $this
     */
    public function setIsActive($is_active)
    {
        $this->is_active = $is_active;

        return $this;
    }

    /**
     * Method to set the value of field icon
     *
     * @param string $icon
     * @return $this
     */
    public function setIcon($icon)
    {
        $this->icon = $icon;

        return $this;
    }

    /**
     * Method to set the value of field order_view
     *
     * @param integer $order_view
     * @return $this
     */
    public function setOrderView($order_view)
    {
        $this->order_view = $order_view;

        return $this;
    }

    /**
     * Method to set the value of field is_show_menu
     *
     * @param string $is_show_menu
     * @return $this
     */
    public function setIsShowMenu($is_show_menu)
    {
        $this->is_show_menu = $is_show_menu;

        return $this;
    }

    /**
     * Returns the value of field category_id
     *
     * @return string
     */
    public function getCategoryId()
    {
        return $this->category_id;
    }

    /**
     * Returns the value of field category_name
     *
     * @return string
     */
    public function getCategoryName()
    {
        return $this->category_name;
    }

    /**
     * Returns the value of field parent_id
     *
     * @return string
     */
    public function getParentId()
    {
        return $this->parent_id;
    }

    /**
     * Returns the value of field is_active
     *
     * @return string
     */
    public function getIsActive()
    {
        return $this->is_active;
    }

    /**
     * Returns the value of field icon
     *
     * @return string
     */
    public function getIcon()
    {
        return $this->icon;
    }

    /**
     * Returns the value of field order_view
     *
     * @return integer
     */
    public function getOrderView()
    {
        return $this->order_view;
    }

    /**
     * Returns the value of field is_show_menu
     *
     * @return string
     */
    public function getIsShowMenu()
    {
        return $this->is_show_menu;
    }

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->setSchema("map");
        $this->belongsTo('parent_id', 'Cm_category', 'category_id', array('alias' => 'Cm_category'));
    }

    /**
     * Independent Column Mapping.
     * Keys are the real names in the table and the values their names in the application
     *
     * @return array
     */
    public function columnMap()
    {
        return array(
            'category_id' => 'category_id', 
            'category_name' => 'category_name', 
            'parent_id' => 'parent_id', 
            'is_active' => 'is_active', 
            'icon' => 'icon', 
            'order_view' => 'order_view', 
            'is_show_menu' => 'is_show_menu'
        );
    }

}
