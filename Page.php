<?php
// I created this abstract class in order to gather all the common attributes that will be inherited by children classes ,
// also to set different methods that will be implemented in children classes respectively.
//  Actually i adapted the inheritance approach in order to encourage low coupling of the program but
// also to adapt the structure of the code to the Oriented object paradigm
//
abstract class Page{

    public $title;
    public $firstName;
    public $lastName;
    public $email;
    /**
     * Gets the value of pageTitle.
     *
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }
    /**
     * Sets the value of pageTitle.
     *
     * @param mixed $pageTitle the page title
     *
     * @return self
     */
    public function setTitle($title)
    {
        $this->title = $title;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * @param mixed $firstName
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
    }

    /**
     * @return mixed
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * @param mixed $lastName
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }
    //Every child class will inherit the proper method to its comportment
    public function Get (){}
    public function Post (){}
    public function getJson (){}
}
?>