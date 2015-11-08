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
        <div class="jumbotron" style="background:#FFFFFF; padding-top: 20px">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 col-md-offset-1">
                        <h2><?= $this->lang->line('privacy.title');?></h2>

                        <?= $this->lang->line('privacy.intro');?> <a href="index">http://www.memorylight.eu</a>

                        <h4>1. <?= $this->lang->line('privacy.subtitle.1');?></h4>

                        <?= $this->lang->line('privacy.subtext.1');?>

                        <h4>2. <?= $this->lang->line('privacy.subtitle.2');?></h4>

                        Wij zullen de verzameling en gebruik van gegevens beperken tot datgene wat noodzakelijk is om het gewenste niveau van dienstverlening aan onze cliënten te kunnen bieden of overeenkomsten voor te bereiden of uit te voeren. Uw gegevens worden uitsluitend door Memory Light gebruikt als u deze zelf opgeeft. Uw gegevens worden niet aan derden verstrekt.

                        <h4>3. <?= $this->lang->line('privacy.subtitle.3');?></h4>

                        <?= $this->lang->line('privacy.subtext.3');?>
                        : <a href="http://localhost/MemoryLight/privacy.php">http://www.cookielaw.org/the-cookie-law/</a>

                        <h4>4. <?= $this->lang->line('privacy.subtitle.4');?></h4>

                        <?= $this->lang->line('privacy.subtext.4');?>

                        <h4>5. <?= $this->lang->line('privacy.subtitle.5');?></h4>

                        <?= $this->lang->line('privacy.subtext.5');?>

                        <h4>6. <?= $this->lang->line('privacy.subtitle.6');?></h4>

                        <?= $this->lang->line('privacy.subtext.6');?>



                    </div>
                </div>
            </div>
        </div>
        <?php include 'components/footer.php'; ?>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script src="js/vendor/bootstrap/bootstrap.min.js"></script>
    </body>
</html>
