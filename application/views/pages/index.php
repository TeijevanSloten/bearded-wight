<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="css/theme.css" rel="stylesheet">
        <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />

        <link rel="stylesheet" href="css/vendor/owl-carousel/owl.carousel.css">
        <title>Memory Light | Professionals in support bereavement care</title>
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <?php $page = "home"; ?>
        <?php include 'components/header.php'; ?>
        <div class="jumbotron" style="margin-top: 0px; background:#F8F8F8; margin-bottom: 0">
            <div class="container">
                <div class="col-md-3">
                    <img src="img/product1.png" style='margin-top: 95px;position: relative; right: 40px; height: 300px;'>
                </div>
                <div class="col-md-6">
                    <h1 class="centered-title" style="margin-top: 100px;"><?= $this->lang->line('intro.title');?></h1>
                    <div>
                        <p class="standard-text"><?= $this->lang->line('intro.text');?></p>
                    </div>
                    <div id="owl-quotes" class="owl-carousel">
                        <div><h3 style="font-weight: 200;"><i>“A valuable service. Visitors can buy a grave candle every day.”</i> - Martin</h3></div>
                        <div><h3 style="font-weight: 200;"><i>“For our cemetery a perfect complementary service.”</i> - Jorg</h3></div>
                        <div><h3 style="font-weight: 200;"><i>“We have Memory Light Relic in our program. Our customers are very satisfied.”</i> - Monica</h3></div>
                        <div><h3 style="font-weight: 200;"><i>“I have a little ash of my mother in the Memory Light Relic: light on my grief.”</i> - Natasha</h3></div>
                    </div>
                </div>
                <div>
                    <img src="img/product2.png" style='margin-top: 35px;position: relative; right: -50px; height: 400px;'>
                </div>
            </div>
        </div>

        <div class="jumbotron" style="margin-top: 0px; background:#FFFFFD; margin-bottom: 0">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h2 style="margin-left: 5px; font-family: 'ImperatorSmallCaps'; font-weight: bold"><?= $this->lang->line('main.relic.title');?></h2>
                        <p><?= $this->lang->line('main.relic.text');?></p>
                        <p><a class="btn btn-default" href="relic" role="button"><?= $this->lang->line('view.details');?></a></p>
                    </div>
                    <div class="col-md-6">
                        <h2 style="margin-left: 5px; font-family: 'ImperatorSmallCaps'; font-weight: bold;"><?= $this->lang->line('main.dispenser.title');?></h2>
                        <p><?= $this->lang->line('main.dispenser.text');?></p>
                        <p><a class="btn btn-default" href="dispenser" role="button"><?= $this->lang->line('view.details');?></a></p>
                    </div>
                </div>
            </div>
        </div>

        <div class="jumbotron" style="margin-top: 0px; background:#F8F8F8; margin-bottom: 0">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 col-md-offset-1">
                        <h1 class="standard-h1"> <?= $this->lang->line('join.partner');?> </h1>
                        <p class="text-center"> <?= $this->lang->line('join.partner.suitable');?> </p>
                        <p class="text-center"> <?= $this->lang->line('join.partner.reliable');?> </p>
                        <br>
                        <p class="text-center"><a class="btn btn-success btn-lg text-capitalize" href="contact" role="button"> <?= $this->lang->line('join.partner.now');?> </a></p>
                    </div>
                </div>
            </div>
        </div>
        <?php include 'components/footer.php'; ?>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script src="js/vendor/bootstrap/bootstrap.min.js"></script>
        <script src="js/vendor/owl-caroursel/owl.carousel.js"></script>
        <script src="js/vendor/slidersettings.js"></script>
    </body>
</html>
