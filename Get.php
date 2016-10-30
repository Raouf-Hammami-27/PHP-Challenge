<?php
// This class is in charge of every GET requests
// extends from page and implements get method
class Get extends Page
{
    public function get()
    {

        // TODO: Implement get() method.
        if(isset($_GET['title']) && !$_GET['title'] == null){
            $this->setTitle($_GET['title']);
        }
        if(isset($_GET['firstname']) && !$_GET['firstname'] == null){
            $this->setFirstName($_GET['firstname']);
        }
        if(isset($_GET['lastname']) && !$_GET['lastname'] == null){
            $this->setLastName($_GET['lastname']);
        }
        if(isset($_GET['email']) && !$_GET['email'] == null){
            $this->setEmail($_GET['email']);
        }

    }

}
?>