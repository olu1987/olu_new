<?php $title = 'TVPlayer | NPVR frontend';
$spinnerLogo = 'img/tvp-logo-new-md.png';
$body = 'not-home tvp'
?>
<?php include 'header.php'; ?>

    <!-- Add your site or application content here -->
    <div class="container  tvp-red-bg">
        <div class="row pt-20">
            <div class="col-md-6 col-md-offset-3 tvp-header text-center">
                <img class="img-responsive" src="img/tvp-logo-new-md.png"/>
            </div>
        </div>
        <div class="row mb-50 text-center">
            <div class="col-md-8 col-md-offset-2">
                <h2 class="text-uppercase">the challenge</h2>
                <p>
                    TVPlayer required the building of a Network Personal Video Recording (NPVR), system on their online platform.
                    I was asked to build the front end for this project in August 2017. The project was delivered in November of the
                    same year and is currently in beta testing hence it is not viewable for the public. As soon as it is I will include a link
                    to my work.
                </p>
            </div>
        </div>
        <div class="row promo-tvp">
            <div class="col-md-8 col-md-offset-2">
                <img class="img-responsive center" src="img/recordings-page.jpg"/>
            </div>
        </div>
        <div class="row pt-30 promo-tvp">
            <div class="col-md-4 col-md-offset-2">
                <img class="img-responsive center" src="img/recordings-page-2.jpg"/>
            </div>
            <div class="col-md-4">
                <img class="img-responsive center lower-small-image" src="img/recordings-page-3.jpg"/>
            </div>
        </div>
    </div>
    <div class="container ">
        <div class="row pt-50 tvp-solid-bg">
            <div class="col-md-10 col-md-offset-1">
                <h2 class="text-uppercase">the approach</h2>
                <p>
                    There were major changes to be made on the web platform and new components to be built on the frontend.
                    Working with the design team and a group of experienced backend developers, I built a page where each user would manage their recordings. This page allowed users
                    to view all recorded episodes of a series, view scheduled episodes, delete episodes etc. Also the user would need to be able
                    to record content from the existing On Demand page. While adding this ability to the On Demand section I took the
                    opportunity to rebuild the UI organising the episodes properly by series. This was the first time TVPlayer have had
                    a UI as intuitive and modern as this for their On Demand content. Most of the functionality was built using good old vanilla javascript and
                    a sprinkling of JQuery for things like modals and carousels. There were also a couple of static pages that I built
                    explaining what the service was and how to use it.
                </p>
            </div>
        </div>
        <div class="row tvp-solid-bg promo-tvp">
            <div class="col-md-10 col-md-offset-1">
                <img class="img-responsive center  mt-30" src="img/how-to-record.jpg"/>
            </div>
        </div>
        <div class="row task-description tvp-solid-bg">
            <div class="col-md-10 col-md-offset-1">
                <h2 class="text-uppercase">the results</h2>
                <p>
                    As I have said, the results can't be viewed yet as the project is still in beta testing but feedback on the project
                    from the team at TVPlayer and beta users has been very good so far. I look forward to seeing my work out in the wild getting used
                    by thousands of people to record content online.
                </p>
            </div>
        </div>
        <div class="row portfolio">
            <div class="col-md-12">
                <div class="tile col-md-4 col-sm-12 tech text-uppercase tvp-solid-bg">
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
                        <li> - zend - </li>
                        <li> - laravel - </li>
                    </ul>
                </div>
                <a data-link="tvp-react-tvguide.php" class="tile col-md-4 col-sm-6 tvplayer four fade-out-link">
                    <img class="img-responsive" src="img/tvp-logo-new-md.png"/>
                    <div class="title-wrap">
                        <h3>
                            <small>
                                next project
                            </small><br>
                            Tvplayer<br>
                            <small>
                                react js tvguide
                            </small>
                        </h3>

                    </div>
                </a>
                <a data-link="simplestream-react-tvguide.php" class="tile col-md-4 col-sm-6 ss fade-out-link">
                    <img class="img-responsive" src="img/simplestream-logo.png"/>
                    <div class="title-wrap">
                        <h3>
                            <small>
                                previous project
                            </small><br>
                            simplestream<br>
                            <small>
                                react js tvguide and live page
                            </small>
                        </h3>

                    </div>
                </a>
            </div>
        </div>
    </div>
<?php include 'footer.php'; ?>