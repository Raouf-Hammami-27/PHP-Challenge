<?php
// This class is in charge of every POST requests
// extends from page and implements post method
class Post extends Page
{
    public function post()
    {

        // TODO: Implement post() method.
        if(isset($_POST['title']) && !$_POST['title'] == null && $_POST['dataType'] == "post"){
            $this->setTitle($_POST['title']);
        }
        if(isset($_POST['firstname']) && !$_POST['firstname'] == null && $_POST['dataType'] == "post"){
            $this->setFirstName($_POST['firstname']);
        }
        if(isset($_POST['lastname']) && !$_POST['lastname'] == null && $_POST['dataType'] == "post"){
            $this->setLastName($_POST['lastname']);
        }
        if(isset($_POST['email']) && !$_POST['email'] == null && $_POST['dataType'] == "post"){
            $this->setEmail($_POST['email']);
        }

    }

}
?>