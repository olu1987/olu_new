$( document ).ready(function() {
    function addClass(el, className){
        if (el.classList)
            el.classList.add(className);
        else
            el.className += ' ' + className;
    }

    function removeClass(el, className){
        if (el.classList)
            el.classList.remove(className);
        else
            el.className = el.className.replace(new RegExp('(^|\\b)' + className.split(' ').join('|') + '(\\b|$)', 'gi'), ' ');
    }

    function hasClass(el, selector) {
        var className = " " + selector + " ";

        if ((" " + el.className + " ").replace(/[\n\t]/g, " ").indexOf(className) > -1) {
            return true;
        }
        return false;
    }



    var graph = function(){

        if(! hasClass(document.body,'home')){
            return;
        }

        var skillRow = document.querySelector(".skills-wrap");

        window.addEventListener('scroll', function () {
            var distance = skillRow.getBoundingClientRect().top;
            console.log(distance);
            if(distance < 320){
                addClass(skillRow, 'active')
            }
            if(distance > 320) {
                removeClass(skillRow, 'active')
            }
        })

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

            function scrollToAnchor(aid){
                var aTag = $("#"+ aid);
                $('html,body').animate({scrollTop: aTag.offset().top},'slow');
                removeClass(sideBar,'active');
                removeClass(toggle,'active');
            }

            for(var i = 0, x = navButtons.length; i < x; i++){
                navButtons[i].addEventListener('click',function(){

                    var buttonId = this.dataset.anchor;

                    scrollToAnchor(buttonId);

                })
            }

    }());

    var header = $('.header');

    header.parallax(
        {imageSrc: 'img/olu-header.jpg', position:'right',
    });
    
    var tileModule = {
        init:function () {
            this.unbinding;
            this.binding;
        },
        binding:function () {

        },
        tiles:document.querySelectorAll('skill-list li'),
        unbinding:function () {
            
        },
        fadeInStars:function () {
           var stars = this.querySelectorAll('.fa-star');

        }
    }


});