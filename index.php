<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Official Docker Repositories</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">

    <!-- Custom styles for this template -->
    <link href="css/styles.css" rel="stylesheet">


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

<nav class="navbar navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Project name</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="#">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>

<div class="container">

    <div class="starter-template">
        <h1>Official Repositories</h1>
        <p class="lead">Use this document as a way to quickly start any new project.<br> All you get is this text and a mostly barebones HTML document.</p>
    </div>
    <div class="row select-blocks">
        <ul class="block-no-bulet col-md-12">

        </ul>
    </div>

</div><!-- /.container -->


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="js/jquery.min.js"><\/script>')</script>
<script src="js/bootstrap.min.js"></script>
<script>
    $(document).ready(function() {
        $('.block-no-bulet').html('');
        var text = '';
        $.getJSON( "listing.json", function( data ) {
           var repositories = data.repositories;
            for (i = 0; i < repositories.length; i++) {

            text += '<li class="block-main">' +
                        '<a class="block-flex" href="tags.php?repo='+repositories[i]+'">' +
                        '<div class="block-one block-general" >' +
                        '<div class="block-title" >' +
                        '<div class="block-labels" >' +
                        '<div class="block-title-one" >'+repositories[i]+'</div>' +
                        '<span class="block-title-two" >official</span>' +
                        '</div></div></div>' +
                        '<div class="block-two block-general" >' +
                        '<div class="" ><div class="" >2.7K</div><div class="" >STARS</div></div></div>' +
                        '<div class="block-three block-general" ><div class="" ><div class="" >10M+</div><div class="" >PULLS</div>' +
                        '</div></div>' +
                        '<div class="block-four block-general" ><i class="fa fa-chevron-right fa-lg" ></i><div class="text">DETAILS</div>' +
                        '</div>' +
                        '</a>' +
                        '</li>';
            }
        $('.block-no-bulet').append(text);
        });


    });

</script>
</body>
</html>
