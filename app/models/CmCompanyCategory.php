<?php

class CmCompanyCategory extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var string
     */
    protected $company_category_id;

    /**
     *
     * @var string
     */
    protected $category_id;

    /**
     *
     * @var string
     */
    protected $company_id;

    /**
     * Method to set the value of field company_category_id
     *
     * @param string $company_category_id
     * @return $this
     */
    public function setCompanyCategoryId($company_category_id)
    {
        $this->company_category_id = $company_category_id;

        return $this;
    }

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
     * Method to set the value of field company_id
     *
     * @param string $company_id
     * @return $this
     */
    public function setCompanyId($company_id)
    {
        $this->company_id = $company_id;

        return $this;
    }

    /**
     * Returns the value of field company_category_id
     *
     * @return string
     */
    public function getCompanyCategoryId()
    {
        return $this->company_category_id;
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
     * Returns the value of field company_id
     *
     * @return string
     */
    public function getCompanyId()
    {
        return $this->company_id;
    }

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->setSchema("map");
        $this->belongsTo('category_id', 'Cm_category', 'category_id', array('alias' => 'Cm_category'));
        $this->belongsTo('company_id', 'Cm_company', 'company_id', array('alias' => 'Cm_company'));
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
            'company_category_id' => 'company_category_id', 
            'category_id' => 'category_id', 
            'company_id' => 'company_id'
        );
    }

}
