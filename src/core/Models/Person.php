<?php

/**
 * Created by PhpStorm.
 * User: manel
 * Date: 20/09/16
 * Time: 18:19
 */
//Constructor, getters i setters generats automàticament. alt+insert.

//namespace afegit
namespace Manelgavalda\myframework\core\Models;

class Person
{
    public $name;
    public $midlename;
    public $lastname;

    /**
     * Person constructor.
     * @param $name
     * @param $midlename
     * @param $lastname
     */
    public function __construct($name, $midlename, $lastname)
    {
        $this->name = $name;
        $this->midlename = $midlename;
        $this->lastname = $lastname;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getMidlename()
    {
        return $this->midlename;
    }

    /**
     * @param mixed $midlename
     */
    public function setMidlename($midlename)
    {
        $this->midlename = $midlename;
    }

    /**
     * @return mixed
     */
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * @param mixed $lastname
     */
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;
    }

    /**
     * Person constructor.
     * @param $name
     */


}