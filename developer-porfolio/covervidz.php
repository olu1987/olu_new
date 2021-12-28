<?php $title = 'PHP Web Application';
      $spinnerLogo = 'img/covervidz-text-logo.png';
      $body = 'not-home covervidz'
?>
<?php include 'header.php'; ?>
    <!-- Add your site or application content here -->
<div class="container covervidz-bg">
    <div class="row pt-20">
        <div class="col-md-6 col-md-offset-3 tvp-header text-center">
            <img class="img-responsive" src="img/covervidz-text-logo.png"/>
            <a target="_blank" class="site-link" href="http://covervidz.com">www.covervidz.com</a>
        </div>
    </div>
    <div class="row mb-50 text-center">
        <div class="col-md-8 col-md-offset-2">
            <h2 class="text-uppercase">the challenge</h2>
            <p>Covervidz was an idea that I myself came up with. It in essence is a youtube but just for covers of
            popular artists songs. My idea was based on the fact that I often found myself wanting to see new covers of a certain
            song, but found looking through youtube results sometimes a bit tedious. I built Covervidz in the first 3 months of 2016
            and I'm still maintaining and improving the platform.
            </p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <img class="img-responsive center" src="img/covervidz-images-olu.jpg"/>
        </div>
    </div>
    </div>
    <div class="container ">
        <div class="row pt-50 covervidz-solid-bg">
            <div class="col-md-10 col-md-offset-1">
                <h2 class="text-uppercase">the approach</h2>
                <p>
                    Using the YouTube API and a mysql database I was able to build a web application that fulfilled all of the
                    specifications that I had for the project. The project actually went through multiple iterations with the first
                    version being built using Angular and the second version being built using a more simple, lightweight frontend and much of the functionality
                    abstracted into a more robust php backend. The current site includes a global search.
                </p>
            </div>
        </div>
        <div class="row task-description covervidz-solid-bg">
            <div class="col-md-10 col-md-offset-1">
                <h2 class="text-uppercase">the results</h2>
                <p>You can view Covervidz at <a class="gold-color" href="http://covervidz.com">www.covervidz.com</a>. I'm very pleased
                with the final results and the feedback from people who have used the site has been very good. The site continues to grow
                and I have plans to enhance the platform with more features.</p>
            </div>
        </div>
        <div class="row portfolio">
            <div class="col-md-12">
                <div class="tile col-md-4 col-sm-12 tech text-uppercase covervidz-solid-bg">
                    <h1>Technology</h1><br>
                    <ul class="list-inline">
                        <li> - htm5 -</li>
                        <li> - css3 -</li>
                        <li> - sass -</li>
                        <li> - bootstrap -</li>
                        <li> - javascript -</li>
                        <li> - jquery -</li>
                        <li> - node js -</li>
                        <li> - gulp -</li>
                        <li> - php - </li>
                        <li> - mysql - </li>
                        <li> - youtube api - </li>
                    </ul>
                </div>
                <a data-link="simplestream-react-tvguide.php" class="tile col-md-4 col-sm-6 ss fade-out-link">
                    <img class="img-responsive" src="img/simplestream-logo.png"/>
                    <div class="title-wrap">
                        <h3>
                            <small>
                                next project
                            </small><br>
                            simplestream<br>
                            <small>
                                react js tvguide and live page
                            </small>
                        </h3>

                    </div>
                </a>
                <a data-link="vantworks.php" class="tile col-md-4 col-sm-6 vantworks fade-out-link">
                    <div class="col-md-12 text-center vantworks-logo-grid">
                        <img class="img-responsive vantworks-logo" src="img/vantworks-logo.png">
                        <h5 class="task-main-header">Vantworks</h5>
                    </div>
                    <div class="title-wrap">
                        <h3>
                            <small>
                                previous project
                            </small><br>
                            Vantworks
                            <br>
                            <small>
                                Website upsell Landing pages
                            </small>
                        </h3>
                    </div>
                </a>
            </div>
        </div>
    </div>
<?php include 'footer.php'; ?>