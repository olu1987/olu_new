<?php $title = 'TVPlayer | React js tvguide';
      $spinnerLogo = 'img/tvp-logo-new-md.png';
       $body = 'not-home tvp'
?>
<?php include 'header.php'; ?>

    <!-- Add your site or application content here -->
    <div class="container  tvp-red-bg">
        <div class="row pt-20">
            <div class="col-md-6 col-md-offset-3 tvp-header text-center">
                <img class="img-responsive" src="img/tvp-logo-new-md.png"/>
                <a target="_blank" class="site-link" href="https://tvplayer.com/tvguide">www.tvplayer.com/tvguide</a>
            </div>
        </div>
        <div class="row mb-50 text-center">
            <div class="col-md-8 col-md-offset-2">
                <h2 class="text-uppercase">the challenge</h2>
                <p>
                    TVPlayer ltd, a growing company in the online TV streaming sector, required a new TV guide for their web platform due to their current guide being slow in terms of load time, and not
                    feature rich. I was approached by the the team at TVPlayer in March 2017 about this project and it was delivered in April of the same year.
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <img class="img-responsive center" src="img/tvp-tvguide-image.jpg"/>
            </div>
        </div>
    </div>
    <div class="container ">
        <div class="row pt-50 tvp-solid-bg">
            <div class="col-md-10 col-md-offset-1">
                <h2 class="text-uppercase">the approach</h2>
                <p>
                    The major issue with the old TV guide on the TVPlayer web platform was that all of the 100+ channels were being loaded immediately
                    to the page which was heavily affecting the load time. Also there wasn't any way of moving forward in days even though the EPG
                    (Electronic Program Guide) data for the guide included a weeks worth of programming. So using Ajax requests, I built a simple system that would load chunks of
                    channels into the page as a user scrolled. I also built the php - Zend framework  backend and ui for a day navigation that would allow the user
                    to skip to other days of the week, and I added a timeline to the scrolling section of the TV guide to improve usability.
                </p>
            </div>
        </div>
        <div class="row task-description tvp-solid-bg">
            <div class="col-md-10 col-md-offset-1">
                <h2 class="text-uppercase">the results</h2>
                <p>
                    You can review the results for yourself at <a class="gold-color" target="_blank" href="http://tvplayer.com/tvguide">www.tvplayer.com/tvguide</a>. The team at
                    TVPlayer were incredibly happy with the final results of the project, and it is widely regarded as not only
                    the best TV guide they have ever had on their web platform, but also potentially the best TV guide on any of their platforms
                    including their mobile and TV apps. I have a great relationship with the team at TVPlayer and I hope to work with
                    them again in the future.
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
                <a data-link="tvp.php" class="tile col-md-4 col-sm-6 tvplayer two fade-out-link">
                    <img class="img-responsive" src="img/tvp-logo-new-md.png"/>
                    <div class="title-wrap">
                        <h3>
                            <small>next project</small><br>
                            Tvplayer<br>
                            <small>website build and rebrand</small>
                        </h3>

                    </div>
                </a>
                <a data-link="leshiathomas.php" class="tile col-md-4 col-sm-6 leshia fade-out-link">
                    <img class="img-responsive" src="img/leshia-top-text.png"/>
                    <div class="title-wrap">
                        <h3>
                            <small>
                                previous project
                            </small><br>
                            leshia Thomas<br>
                            <small>
                                digital designer portfolio website
                            </small>
                        </h3>

                    </div>
                </a>
            </div>
        </div>
    </div>
<?php include 'footer.php'; ?>