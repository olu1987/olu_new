$( document ).ready(function() {
    var graph = function(){

        if(! hasClass(document.body,'home')){
            return;
        }

        var skillRow = document.querySelector(".skills-wrap");

        skillRow ? window.addEventListener('scroll', function () {
            var distance = skillRow.getBoundingClientRect().top;
            if(distance < 320){
                addClass(skillRow, 'active')
            }
            if(distance > 320) {
                removeClass(skillRow, 'active')
            }
        }):false;

    }();


    (function navSideBar() {

        var toggle = document.querySelector('.nav-toggle');

        var sideBar = document.getElementById('sidebar');

        var navButtons = document.querySelectorAll('.nav-sidebar .anchor-link');

        toggle.addEventListener('click',function () {

            if(! hasClass(this,'active')){

                addClass(this,'active');

                addClass(sideBar,'active')

            }else{

                removeClass(this,'active');

                removeClass(sideBar,'active')

            }
        });

    }());

    var header = $('.header');

    header.parallax(
        {imageSrc: 'img/olu-header.jpg', position:'right'
    });

    var about = $('#about');

    about.parallax(
        {imageSrc: 'img/sparks.jpg', position:'right'
        });

});