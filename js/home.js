var homeModule = {
    init:function(){
        this.loaderContainer = document.querySelector('.loader-container');
        this.fadeContainer = document.querySelector('.fade-out-container');
        this.fadeOutLink = document.querySelectorAll('.fade-out-link');
        this.unbinding();
        this.binding();
    },
    binding:function(){
        window.addEventListener('load',this.loader.bind(this));
        for(var i = 0, x = this.fadeOutLink.length; i < x; i++){
            this.fadeOutLink[i].addEventListener('click',this.fadeOutNavigation.bind(this));
        }
    },
    unbinding:function(){
        window.removeEventListener('load',this.loader.bind(this));
        for(var i = 0, x = this.fadeOutLink.length; i < x; i++){
            this.fadeOutLink[i].removeEventListener('click',this.fadeOutNavigation.bind(this));
        }
    },
    loader:function () {
        setTimeout(function(){
            removeClass(this.loaderContainer,'active');
        }.bind(this),500);

        setTimeout(function(){
            addClass(this.loaderContainer,'hidden');
        }.bind(this),1300)
    },
    fadeOutNavigation:function (e) {
        e.preventDefault();
        var element = e.currentTarget;
        removeClass(this.fadeContainer,'hidden');
        setTimeout(function(){
            addClass(this.fadeContainer,'active')
        }.bind(this),100);
        setTimeout(function(){
            window.location.href = element.dataset.link;
        }.bind(this),1300);

    }
};

homeModule.init();