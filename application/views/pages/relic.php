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
        <?php $page = "relic"; ?>
        <?php include 'components/header.php'; ?>
        <div class="jumbotron" style="margin-top: 0px; background:#F8F8F8;padding-bottom: 50px;">
            <div class="container">
                <div class="col-md-offset-1 col-md-7">
                    <h1 class="centered-title"><?= $this->lang->line('relic.title');?></h1>
                    <p class="standard-text">
                        <?= $this->lang->line('relic.text');?>
                    </p>
                    <ul class="jumbotron-ul">
                        <li>Can be personalized</li>
                        <li>Made of high quality and durable materials</li>
                        <li>Compartment for holding ashes</li>
                        <li>Extra flow of funds</li>
                        <li>Already thousands sold in Europe</li>
                    </ul>
                </div>
                <div class="col-md-4">
                        <div id="owl-images" class="col-md-12 owl-carousel" style="margin-top:150px;">
                            <div class="item"><img src="img/memorylightrelic.png" alt=""></div>
                            <div class="item"><img src="img/brandende kaars3.jpg" alt=""></div>
                            <div class="item"><img src="img/brandende kaars.jpg" alt=""></div>
                        </div>
                </div>
            </div>
        </div>
        <div class="jumbotron" style="margin-top: 0px; background:#FFF; margin-bottom: 0">
            <div class="container">
                <div class="col-md-offset-1 col-md-5">
                    <h1 class="standard-h2" style="margin-top: 0px; font-size: 45px;"><?= $this->lang->line('specs.label');?></h1>
                    <div class="col-md-offset-1 col-md-10">
                        <ul style="font-size: 21px; margin-top: 20px;">
                            <li style="padding-bottom: 5px;">Height 135 mm</li>
                            <li style="padding-bottom: 5px;">Diameter (outer) 69 mm</li>
                            <li style="padding-bottom: 5px;">Diameter (inner) 62 mm</li>
                            <li style="padding-bottom: 5px;">Compartment 55 cc</li>
                            <li style="padding-bottom: 5px;">Max candle height 95 mm, diameter 55 mm</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-5">
                    <img class="col-md-12" src="img/memorylightrelic.png" />
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
        <script src="js/vendor/slidersettingsimg.js"></script>
    </body>
</html>