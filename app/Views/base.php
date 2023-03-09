<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Dlab.nl</title>
        <meta name="description" content="The small framework with powerful features">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" type="image/png" href="/favicon.ico"/>
        <link rel="stylesheet" href="./css/css.css">
        <link rel="stylesheet" href="./css/Header.css">
        <link rel="stylesheet" href="./css/Main.css">
        <link rel="stylesheet" href="./css/Footer.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <body>
        <header>
            <?= $this->renderSection('header') ?>
        </header>


        <main>
            <?= $this->renderSection('img') ?>

            <?= $this->renderSection('dlab-info') ?>

            <?= $this->renderSection('main') ?>

            <section class="diensten">
                <?= $this->renderSection('onesection') ?>
            </section>


            <div class="projecten"> 
                 <?= $this->renderSection('twosection') ?>
            </div>

            <section class="Ervaringen">
                 <?= $this->renderSection('threesection') ?>
            </section>

            <?= $this->renderSection('nieuws') ?>

            <?= $this->renderSection('footer-widget-area') ?>
        </main>
            
        <footer>
            <div class="footercontainer">
                <?= $this->renderSection('footer') ?>
            </div>
            <div class="bottomfooter">
                <p>Â© Copyright 2019 D'Lab. Made by Kristian and Liam</p>
            </div>
        </footer> 
        <?= $this->renderSection('script') ?>
</body>
</html>

