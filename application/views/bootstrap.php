
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="zok">

    <title>CodeIgniter - Doctrine - Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <style type="text/css">
        body {
            padding-top: 30px;
        }
        .starter-template {
            padding: 40px 15px;
            /*text-align: center;*/
        }

        .starter-template ul{
            display: inline-block;
        }

        .starter-template ul li {
            text-align: left;
        }

        .version {
            text-align: left;

        }

        .bigger_text {
            font-size: 16px;
        }
    </style>

</head>

<body>

<div class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">

            <a class="navbar-brand" href="#">CodeIgniter - Doctrine - Bootstrap</a>
        </div>

    </div>
</div>

<div class="container">

    <div class="starter-template">

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">

        <h1><strong>Introduction</strong></h1>
        <p class="lead">
            CodeIgniter + Doctrine + Bootstrap kick starts the web development process by including both Doctine ORM and Twitter Bootstrap into Codeigniter.

        <strong><h3>Included:</h3></strong>
            <ul>
                <li class="bigger_text">Codeigniter 2.1.4</li>
                <li class="bigger_text">Doctrine 2.3.4</li>
                <li class="bigger_text">Twitter Bootstrap 3.0.3</li>
                <li class="bigger_text">jQuery 2.0.3</li>
                <li class="bigger_text">Added .htaccess and enabled mod_rewrite</li>
                <li class="bigger_text">Doctrine library autoloaded in Codeigniter confi.php</li>
            </ul>
        </p>

        <h1><strong>Instalation & Usage</strong></h1>
        <p class="lead">
            For instalation, deploy the entire project folder into your server root.<br><br>

            Change the base_url in /application/config/config.php to match your server settings.<br>
            <b>Example: for 'http://localhost/site/' change the base_url to 'localhost/site'.</b> <br><br>
            This project is bundled with apache2 mod_rewrite, check if your server has this module enabled or disable this feature.<br><br>

            The only controller included in this bundle is the <b>welcome</b> controller that loads the <b>bootstrap</b> view.<br>
            Deleting those files, the rest of the bundle is vanilla clean, only the necessary Libs have been included and nothing more has been added.<br><br>

            The folder <b>application/models/Entity</b> will store all the Entities/Classes created using <a href="http://docs.doctrine-project.org/projects/doctrine-common/en/latest/reference/annotations.html" target="_blank">Doctrine Annotation</a>, to reference these entities from your controllers use the namespace <b>'Entity\'</b> and the name of the Class next to the namespace.
            <br><b>Example: $user = new Entity\User;</b><br>
            If you want to change the Entity default folder and/or the Namespace change de settings in the file application/libraries/Doctrine.php.<br><br>

            For more info of usage please refer the the frameworks documentation:<br>
            <ul>
                    <li class="bigger_text"><a href="http://ellislab.com/codeigniter/user-guide" target="blank">http://ellislab.com/codeigniter/user-guide</a></li>
                    <li class="bigger_text"><a href="http://docs.doctrine-project.org/en/latest/tutorials/getting-started.html" target="blank">http://docs.doctrine-project.org/en/latest/tutorials/getting-started.html</a></li>
                    <li class="bigger_text"><a href="http://getbootstrap.com/getting-started" target="blank">http://getbootstrap.com/getting-started</a></li>
            </ul>
        </p>

        <h1><strong>License</h1>
        <p class="lead">
            Under the <a href="http://opensource.org/licenses/MIT" target="_blank">MIT</a> licence.
        </p>

        <h1><strong>Author</strong></h1>
        <p class="lead">
                <h3>Pedro Landeiroto</h3>
                <ul>
                    <li class="bigger_text"> <a href="https://twitter.com/pedro_zok" target="_blank">@pedro_zok</a></li>
                    <li class="bigger_text"><a href="mailto:zok@quobits.com">zok@quobits.com</a></li>
                </ul>
        </p>

    </div>

        </div>
    </div>

</div><!-- /.container -->


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="assets/js/jquery.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
</body>
</html>
