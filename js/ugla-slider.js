(function( $ ) {

    $.fn.uglaSlide = function(opts) {
        var countContainer = 1;
        var rememberCountContainer = 1;
        var rememberPosition = 0;

        var $self = $(this);


        if ((typeof opts == "undefined" || typeof opts.right == "undefined") && !$(".slider.right").length)
            $($self[0]).parent().prepend($("<a class='slider right' href='#'>&gt;&gt;</a>"));

        if ((typeof opts == "undefined" || typeof opts.left == "undefined") && !$(".slider.left").length)
            $($self[0]).parent().prepend($("<a class='slider left' href='#'>&lt;&lt;</a>"));


        // default configuration
        var config = $.extend({}, {
            left: $(".slider.left"),
            right: $(".slider.right"),
            speed: "0.5s",
            touchable: true,
            menu: null
        }, opts);


        // Do your awesome plugin stuff here
        //First we do some CSS stuff to float the project containers
        $self.find('.container').css({'float':'left'});
        $self.css({'position':'absolute'});


        $self.each(function(){
            //and hide all but the first by overlapping an absolute positioned "mask" width the size of one .container
            $(this).css('width',eval($(this).find('.container').length * $(this).find('.container').outerWidth())+'px');
            $(this).parent().append($("<div class='mask'></div>").css({
                'background-color': 'transparent', //$self.parent().css('background-color'),
                'top' : $self.offset().top + 'px',
                'left' : $self.offset().left + 'px',
                'position' : 'relative',
                'z-index' : '100',
                'overflow' : 'hidden',
                'width' : $self.find('.container').outerWidth() + "px",
                'height' : $self.find('.container').outerHeight() + "px",
            }).append($(this)));

        });

        //adjusting the transition after appending, else the initialisation would be animated too
        $('.mask').css({
            '-webkit-transition': 'all '+config.speed+' ease-in-out',
            '-moz-transition': 'all '+config.speed+' ease-in-out',
            '-o-transition': 'all '+config.speed+' ease-in-out',
            '-ms-transition': 'all '+config.speed+' ease-in-out'
        });


        config.left.bind('click',function(){
            move('left');
            return false;
        });

        config.right.bind('click', function(){
            move('right');
            return false;
        });


        var touchable = function() {
            var startX,posX,absoluteX = null;
            var width = $self.find('.container').outerWidth();
            var halfWidth = width/3;
            $self[0].ontouchstart = function(e){

                //stops normal scrolling with touch
                e.preventDefault();

                startX = e.touches[0].clientX;

            };

            $self[0].ontouchmove = function(e){

                //stops normal scrolling with touch
                e.preventDefault();

                absoluteX = e.touches[0].clientX;

                if (absoluteX > startX) {//left

                    posX = startX + e.touches[0].clientX - ((rememberCountContainer-1) * width);
                    $self.each(function(){
                        $(this).css({
                            '-webkit-transition': 'all 0s ease-in-out',
                            '-moz-transition': 'all 0s ease-in-out',
                            '-o-transition': 'all 0s ease-in-out',
                            '-ms-transition': 'all 0s ease-in-out',
                            '-webkit-transform':'translateX('+posX+'px)',
                            '-moz-transform':'translateX('+posX+'px)',
                            '-ms-transform':'translateX('+posX+'px)',
                            '-o-transform':'translateX('+posX+'px)'
                        });
                    });

                }
                if (absoluteX < startX) {//right
                    posX = (-1)*(startX - e.touches[0].clientX + ((rememberCountContainer-1) * width));

                    $self.each(function(){
                        $(this).css({
                            '-webkit-transition': 'all 0s ease-in-out',
                            '-moz-transition': 'all 0s ease-in-out',
                            '-o-transition': 'all 0s ease-in-out',
                            '-ms-transition': 'all 0s ease-in-out',
                            '-webkit-transform':'translateX('+posX+'px)',
                            '-moz-transform':'translateX('+posX+'px)',
                            '-ms-transform':'translateX('+posX+'px)',
                            '-o-transform':'translateX('+posX+'px)'
                        });
                    });
                }

            };

            $self[0].ontouchend = function(e){

                //stops normal scrolling with touch
                e.preventDefault();
                if ((startX - absoluteX) > halfWidth){
                    move("right", false);
                }
                else if ((absoluteX - startX) > halfWidth){
                    move("left", false);
                }else {
                    move(null, false);
                }
            };
        };

        //check if touch is supported by device
        var isTouchDevice = function() {
            return "ontouchstart" in window;
        }

        if (config.touchable && isTouchDevice()){
            touchable();
        }

        var move = function(direction, getOffsetPosition) {

            //trigger event
            $.event.trigger({
                type: "uglaSlide",
                direction: direction,
                countContainer: countContainer
            });

            if (typeof getOffsetPosition == "undefined") getOffsetPosition = true;

            $self.each(function(){
                var pos = rememberPosition;

                if (direction == 'right'){

                    if (getOffsetPosition)
                        pos = $(this).position().left;
                    else
                        pos = rememberPosition;

                    pos = eval(pos - $(this).find('.container').outerWidth());
                    if (pos < eval(0-eval(eval($(this).find('.container').length - 1) * $(this).find('.container').outerWidth()))){
                        pos = 0;
                        countContainer = 1;
                    }else{
                        countContainer += 1;
                    }
                }
                else if (direction == 'left'){

                    if (getOffsetPosition)
                        pos = $(this).position().left;
                    else
                        pos = rememberPosition + 1;

                    pos = eval(pos + $(this).find('.container').outerWidth());
                    if (pos > 0) {
                        pos = eval(0-eval(eval($(this).find('.container').length - 1) *$(this).find('.container').outerWidth()));
                        countContainer = 5;
                    }else{
                        countContainer -= 1;
                    }

                }else{
                    pos = rememberPosition;
                    countContainer = rememberCountContainer;
                }

                rememberPosition = pos;
                rememberCountContainer = countContainer;

                resizeMask(countContainer);

                $(this).css({
                    '-webkit-transition': 'all '+config.speed+' ease-in-out',
                    '-moz-transition': 'all '+config.speed+' ease-in-out',
                    '-o-transition': 'all '+config.speed+' ease-in-out',
                    '-ms-transition': 'all '+config.speed+' ease-in-out',
                    '-webkit-transform':'translateX('+pos+'px)',
                    '-moz-transform':'translateX('+pos+'px)',
                    '-ms-transform':'translateX('+pos+'px)',
                    '-o-transform':'translateX('+pos+'px)'
                });
            })
        }

        var resizeMask = function (count){
            $(".mask").css({
                'height' : $self.find('.container:nth('+eval(count-1)+')').outerHeight()+"px"
            });
        }
    };

    return this;

})( jQuery );





