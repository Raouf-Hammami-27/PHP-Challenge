<?php
// This class is in charge of parsing HTML placeholders to JSON placeholders and rendering JSON Objects to the HTML template
// extends from page and implements json method

class Json extends Page
{

    public function getJson()
{
        // TODO: Implement getJson() method.

    if(isset($_POST['dataType']) && $_POST['dataType'] == "json"){
        $pageArray 	=	array('title' => $_POST['title'],
                            'firstname' => $_POST['firstname'],
                            'lastname' => $_POST['lastname'],
                                'email' => $_POST['email']);
        $jsonObject = json_encode($pageArray);
    }
    if(isset($_GET['json'])){
        $jsonObject = $_GET['json'];

    }
    //Setting the placeholders to values of the object.
    if(isset($jsonObject) && !$jsonObject == null){
        $pageObject =	json_decode($jsonObject);
        $this->setTitle($pageObject->title);
        $this->setFirstName($pageObject->firstname);
        $this->setLastName($pageObject->lastname);
        $this->setEmail($pageObject->email);
    }
return $jsonObject;
}

}
?>