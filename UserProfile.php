<?php

namespace pimax;

class UserProfile
{
    // profile keyword supported : first_name,last_name,profile_pic,locale,timezone,gender
    protected $data = [];

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function getFirstName()
    {
        return ( isset($this->data['first_name']) ? $this->data['first_name'] : '') ;
    }

    public function getLastName()
    {
        return ( isset($this->data['last_name']) ? $this->data['last_name'] : '') ;
    }

    public function getPicture()
    {
        return ( isset($this->data['profile_pic']) ? $this->data['profile_pic'] : '') ;
    }

    public function getLocale()
    {
        return ( isset($this->data['locale']) ? $this->data['locale'] : '') ;
    }

    public function getTimezone()
    {
        return ( isset($this->data['timezone']) ? $this->data['timezone'] : '') ;
    }

    public function getGender()
    {
        return ( isset($this->data['gender']) ? $this->data['gender'] : '') ;
    }
}
