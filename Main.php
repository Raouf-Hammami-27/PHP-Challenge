<?php
//This file is in charge of instantiating PAGE/GET/POST/JSON classes and executing
// the proper functions depending of the choice of the Rendering method
error_reporting(E_ALL);
ini_set('display_errors', '1');

		// including Page/Get/Post/Json classes
		include('Page.php');
		include('Get.php');
		include('Post.php');
		include('Json.php');
// this part handles the treatment of the chosen method from the dropdown list
 (isset($_POST["dataType"])) ? $method = $_POST['dataType'] : $method = "get";
    $get  = new Get();
    $post = new Post();
    $json = new Json();
    switch ($method){
        case $method =="get":
            $get->get();
            $var = $get;
            break;
        case $method == "post":
            $post->post();
            $var = $post;
            break;
        case $method ==  "json":
            $json->getJson();
            $var = $json;
            break;
        default :
            $get->get();
            $var = $get;

    }
?>
    <!-- Defining doctype -->
    <!DOCTYPE html>
    <!-- HTML start tag -->
    <html lang="">
    <!-- head start tag -->

    <head>
        <!-- meta charset tag -->
        <meta charset="utf-8">
        <!-- meta defining which version of IE this HTML document should support -->
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <!-- meta defining viewpoint and which scalling -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- setting title of page -->
        <title>
            <?php echo $var->getTitle(); ?>
        </title>

        <!-- Bootstrap CSS -->
        <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" rel="stylesheet">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <!-- jQuery -->
        <script src="//code.jquery.com/jquery.js"></script>
        <!-- Bootstrap JavaScript -->
        <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>

			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>

		<![endif]-->
        <!-- closing head tag -->
    </head>
    <!-- starting body tag -->

    <body>
        <br>
        <div class="col-md-12">
            <ul class="nav nav-tabs">
                <li role="presentation"><a href="#post">Post Request</a></li>
                <li role="presentation" ><a href="#get">Get Requests</a></li>

            </ul>
            <br>
            <div class="col-md-4">
                <!-- Making the form -->
                <div id="post">
                <h2>Post Requests  </h2>
                <form action="" method="POST" class="form-inline" role="form">
                    <div class="form-group">
                        <label class="sr-only" for="">Page Title</label>
                        <input name="title" type="text" class="form-control" id="" placeholder="Page title">
                    </div>
                    <br>
                    <br>
                    <div class="form-group">
                        <label class="sr-only" for="">Firstname</label>
                        <input name="firstname" type="text" class="form-control" id="" placeholder="Firstname">
                    </div>
                    <br>
                    <br>
                    <div class="form-group">
                        <label class="sr-only" for="">Lastname</label>
                        <input name="lastname" type="text" class="form-control" id="" placeholder="Lastname">
                    </div>
                    <br>
                    <br>
                    <div class="form-group">
                        <label class="sr-only" for="">Email</label>
                        <input name="email" type="email" class="form-control" id="" placeholder="Email">
                    </div>
                    <br>
                    <br>
                    <hr>
                    <div class="form-group">
                        <label for="input" class="col-sm-2 control-label">Use: </label>
                        <div class="col-sm-2">
                            <select name="dataType" id="input" class="form-control" required="required">
                                <option selected="selected">Select option </option>
                                <option value="post">POST</option>
                                <option value="json">JSON</option>
                            </select>
                        </div>
                    </div>
                    <hr>
                    <center>
                        <button type="submit" class="btn btn-primary" id="submit">Submit</button>
                    </center>
                    <br>
                </form>
                </div>
                <br> <br>
                <div id="get">
                <h2>Get Requests  </h2>
                <form action="" method="GET" class="form-inline" role="form">
                    <div class="form-group">
                        <label class="sr-only" for="">Page Title</label>
                        <input name="title" type="text" class="form-control" id="" placeholder="Page title">
                    </div>
                    <br>
                    <br>
                    <div class="form-group">
                        <label class="sr-only" for="">Firstname</label>
                        <input name="firstname" type="text" class="form-control" id="" placeholder="Firstname">
                    </div>
                    <br>
                    <br>
                    <div class="form-group">
                        <label class="sr-only" for="">Lastname</label>
                        <input name="lastname" type="text" class="form-control" id="" placeholder="Lastname">
                    </div>
                    <br>
                    <br>
                    <div class="form-group">
                        <label class="sr-only" for="">Email</label>
                        <input name="email" type="email" class="form-control" id="" placeholder="Email">
                    </div>
                    <br>
                    <br>
                    <hr>
                    <div class="form-group">
                        <label for="input" class="col-sm-2 control-label">Use: </label>
                        <div class="col-sm-2">
                            <select name="dataType" id="input" class="form-control" required="required">
                                <option selected="selected">Select option </option>
                                <option value="get">GET</option>
                            </select>
                        </div>
                    </div>
                    <hr>
                    <center>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </center>
                    <br>
                </form>
                </div>
                    <br> <br>

            </div>
            <div class="col-md-8"  >
                <div class="jumbotron" id="display">
                    <h1>Hello, <?php echo $var->getFirstName(); ?> <?php echo $var->getLastName(); ?>  !</h1>
                    <h2>Your email is : <?php echo $var->getEmail(); ?></h2>
                     <p>If you choose json option , an object will appear here</p>
                    <p></p><?php ($method == "json") ?  print($var->getJson()) : "" ?></p>
                    <p><a class="btn btn-primary btn-lg" href="" role="button">Refresh</a></p>
                    <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#demo">Debugging info </button>
                    <div id="demo" class="collapse">
                        <?php
                        // Debugging info for $_GET
                        if(isset($_GET) && !$_GET == null){
                            echo "Vardump of <strong>GET</strong>:";
                            echo "<br>";
                            var_dump($_GET);
                            echo "<br>";
                            echo "Print_r of <strong>GET</strong>";
                            echo "<br>";
                            print_r($_GET);
                        }
                        // Debugging info for $_POST
                        if(isset($_POST) && !$_POST == null && $_POST['dataType'] == "post"){
                            echo "Vardump of <strong>POST</strong>:";
                            echo "<br>";
                            var_dump($_POST);
                            echo "<br>";
                            echo "Print_r of <strong>POST</strong>";
                            echo "<br>";
                            print_r($_POST);
                        }
                        // Debugging info for JSON object
                        if(isset($_POST) && !$_POST == null && $_POST['dataType'] == "json"){
                            echo "Vardump of <strong>JSON object</strong>:";
                            echo "<br>";
                            var_dump($var->getJson());
                            echo "<br>";
                            echo "Print_r of <strong>JSON object</strong>";
                            echo "<br>";
                            print_r($var->getJson());
                        }
                        // var dump of page object
                        echo "<br><b>Vardump of page object: </b><i style='word-wrap: break-word;'><br>";
                        var_dump($var->getJson());
                        echo "</i>";
                        ?>
                    </div>
                </div>

                <hr>
            </div>
        </div>
        <center><small>Made by Raouf Hammami</small></center>

        <!-- closing body tag -->
    </body>
    <!-- closing html tag -->

    </html>