<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="css/theme.css" rel="stylesheet">
        <link href="css/contact.css" rel="stylesheet">
        <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />

        <link rel="stylesheet" href="css/vendor/owl-carousel/owl.carousel.css">
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <?php $page = "contact"; ?>
        <?php include 'components/header.php'; ?>
        <div class="container">
            <h1 class="standard-h1">Partner Program</h1>
            <br>
            <p class="standard-text">
                Join our partner program and start your own business.
                You can offer a service which is highly appreciated at every cemetery and crematory.
                We give full technical support and have an 'on site' information program.
                Memory Light shares her knowledge and offers you extra earnings.
            </p>
            <p class="standard-text">Respond by the attached form and we will contact you personally.</p>
            <div class="row" style="margin-top: 50px;">
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-5 jumbotron text-center contactjumbotron">
                            <h3 class="contacttitle">E-mail</h3>
                            <p>
                                <span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>
                                <a href="#">&nbsp;info@memorylight.eu</a>
                            </p>
                        </div>
                        <div class="col-md-5 jumbotron text-center contactjumbotron" style="margin-left: 20px;">
                            <h3 class="contacttitle">Telephone:</h3>
                            <p>
                                <span class="glyphicon glyphicon-phone-alt" aria-hidden="true"></span>
                                <a href="#">&nbsp;06-12345678</a>
                            </p>
                        </div>
                        <div class="col-md-5 jumbotron text-center contactjumbotron">
                            <h3 class="contacttitle">Online</h3>
                            <p>
                                <span class="glyphicon glyphicon-home" aria-hidden="true"></span>
                                <a href="#">&nbsp;memorylight.eu</a>
                            </p>
                        </div>
                        <div class="col-md-5 jumbotron text-center contactjumbotron" style="margin-left: 20px;">
                            <h3 class="contacttitle">Address</h3>
                            <p>
                                <span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>
                                <a href="#">&nbsp;1234 AB Delft<br>The Netherlands</a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <form class="form-horizontal" method="post">
                        <div class="alert alert-success alert-dismissible col-md-12" role="alert" style="position: absolute; top: -70px; display: none;">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <strong>Message received!</strong> We will be contacting you as soon as possible!
                        </div>
                        <div class="form-group">
                            <label for="name" class="col-sm-2 control-label">Name</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="name" name="name">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="company" class="col-sm-2 control-label">Company</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="company" name="company">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="telephone" class="col-sm-2 control-label">Telephone</label>
                            <div class="col-sm-10">
                                <input type="phone" class="form-control" id="telephone" name="telephone">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="email" class="col-sm-2 control-label">Email</label>
                            <div class="col-sm-10">
                                <input type="email" class="form-control" id="email" name="email">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="message" class="col-sm-2 control-label">Message</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" id="message" style="height: 150px;" required="true" name="message"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-9 col-sm-3">
                                <button type="submit" class="btn btn-lg pull-right btn-warning">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <?php include 'components/footer.php'; ?>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script src="js/vendor/bootstrap/bootstrap.min.js"></script>
        <script src="js/submitForm.js"></script>
    </body>
</html>