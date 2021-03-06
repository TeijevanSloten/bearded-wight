<div class="title-heading">
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <div class="header clearfix">
                    <h1 class="logo">
                        <?= $this->lang->line('header.title');?>
                    </h1>
                    <p class="logo-statement">
                        <?= $this->lang->line('header.subtitle');?>
                    </p>
                </div>
            </div>
            <div class="col-md-7" style="margin-top: 14px;">
                <div style="text-align: right;">
                    <ul class="list-unstyled">
                        <li class="flag-item"><a href="EN"><img src="img/flags/en.png" /></a></li>
                        <li class="flag-item"><a href="FR"><img src="img/flags/fr.png" /></a></li>
                        <li class="flag-item"><a href="ES"><img src="img/flags/es.png" /></a></li>
                        <li class="flag-item"><a href="NL"><img src="img/flags/nl.png" /></a></li>
                    </ul>
                </div>
                <div style="margin-top: 20px;">
                    <ul class="nav nav-tabs pull-right">
                        <li role="presentation"<?php echo ($page == "home" ? ' class="active"' : ''); ?>><a href="home">Home</a></li>
                        <li role="presentation"<?php echo ($page == "relic" ? ' class="active"' : ''); ?>><a href="relic">Memory Light Relic</a></li>
                        <li role="presentation"<?php echo ($page == "dispenser" ? ' class="active"' : ''); ?>><a href="dispenser">Memory Candle Dispenser</a></li>
                        <li role="presentation"<?php echo ($page == "contact" ? ' class="active"' : ''); ?>><a href="contact">Partner Program</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>