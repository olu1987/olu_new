<?php $title = 'TVPlayer | React js TV guide';
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
                    As part of TVPlayers Network Personal Video Recording (NPVR) project, I was tasked to enhance and rebuild the current TV guide using
                    <span class="gold-color text-uppercase">React js</span>. This would allow the guide to update its data in real time. Also I was asked to build into the TV guide functionality that
                    would allow a user to record, cancel and view recordings. The project started in August, and was delivered in November of the
                    same year. It is currently in beta testing hence it is not viewable for the public. As soon as it is I will include a link
                    to my work.
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <img class="img-responsive center" src="img/tvp-react-tvguide.jpg"/>
            </div>
        </div>
    </div>
    <div class="container ">
        <div class="row pt-50 tvp-solid-bg">
            <div class="col-md-10 col-md-offset-1">
                <h2 class="text-uppercase">the approach</h2>
                <p>
                    The recording service TV Guide was in my opinion a perfect use case for React. The component architecture of the javascript
                    framework made it easy to pass data down and render the channels and programs perfectly. Also Reacts life cycle methods really
                    made updating the DOM a lot faster, easier and more efficient than the traditional queries a library like JQuery would have to make
                    to carry out similar procedures. In addition to react I used Vanilla javascript, and JQuery to add the other features required for
                    the TV guide. I find React actually plays nicely with other libraries like JQuery since react mainly intends to be the V in MVC.
                    Also since I was using Browserify to bundle my code and browserify comes with babel compiler out of the box these days, I took the opportunity to utilise some
                    ES6 features of javascript i.e arrow functions, classes, let & const etc.
                </p>
            </div>
        </div>
        <div class="row tvp-solid-bg">
            <div class="col-md-10 col-md-offset-1">
                <img class="img-responsive center  mt-30" src="img/tvguide-modal.jpg"/>
            </div>
        </div>
        <div class="row task-description tvp-solid-bg">
            <div class="col-md-10 col-md-offset-1">
                <h2 class="text-uppercase">the results</h2>
                <p>
                    As I have said, the results can't be viewed yet as the project is still in beta testing but feedback on the project
                    from the team at TVPlayer and beta users has been very good so far. I really enjoyed using React for this project
                    and it delivered some great results allowing me to do things that would have been very difficult via Vanilla javascript or
                    JQuery. As soon as the project is open to the public I will include a link so you can check out my work for yourself.
                </p>
            </div>
        </div>
        <div class="row portfolio">
            <div class="col-md-12">
                <div class="tile col-md-4 col-sm-12 tech text-uppercase tvp-solid-bg">
                    <h1>Technology</h1><br>
                    <ul class="list-inline">
                        <li class="gold-color"> - React js -</li>
                        <li> - Browserify -</li>
                        <li> - Babel -</li>
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
                <a data-link="lnt.php" class="tile col-md-4 col-sm-6 lnt fade-out-link">
                    <img class="img-responsive" src="img/lnt-text.png"/>
                    <div class="title-wrap">
                        <h3>
                            <small>
                                next project
                            </small><br>
                            lnt london<br>
                            <small>
                                ecommerce fashion website build
                            </small>
                        </h3>

                    </div>
                </a>
                <a data-link="npvr.php" class="tile col-md-4 col-sm-6 tvplayer three fade-out-link">
                    <img class="img-responsive" src="img/tvp-logo-new-md.png"/>
                    <div class="title-wrap">
                        <h3>
                            <small>
                                previous project
                            </small><br>
                            Tvplayer<br>
                            <small>
                                npvr frontend
                            </small>
                        </h3>

                    </div>
                </a>
            </div>
        </div>
    </div>
<?php include 'footer.php'; ?>