<!doctype html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="My Site">
        <title><?php print($title); ?></title>
        <base href="<?php print($baseHref); ?>">
        <link href="style/style.css" rel="stylesheet">
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script src="bootstrap/dist/js/bootstrap.min.js"></script>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="header">
                    <?php print($menu); ?>
                </div>
            </div>

            <div class="content row">
                <div class="col-sm-8">
                    <?php print($content); ?>
                </div>

                <div class="col-sm-4">
                    <div class="well">
                        <h3>Kontakta mig</h3>
                        <ul class="nav nav-pills nav-stacked">
                            <?php getSidemenu1(); ?>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="footer">
                    <?php print($footer); ?>
                </div>
            </div>

        </div><!-- huvudinnehåll -->


          
    </body>
</html>
