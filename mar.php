<!DOCTYPE html>
<html>
    <head>
        <title>Marquee</title>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js" type="text/javascript"></script>
        <script src="//rawgithub.com/aamirafridi/jQuery.Marquee/master/jquery.marquee.min.js?v=4" type="text/javascript"></script>

        <style type="text/css">

            .marquee,
            .marquee-with-options,
            .marquee-vert-before,
            .marquee-vert {
              width: 100%;
              overflow: hidden;
              border:1px solid #ccc;
            }
        </style>
    </head>
    <body>


</pre>
        <div class='marquee-with-options'>Lorem ipsum dolor END.</div>





<script>
$(function(){
    var $mwo = $('.marquee-with-options');
    $('.marquee').marquee();
    $('.marquee-with-options').marquee({
        //speed in milliseconds of the marquee
        speed: 500,
        //gap in pixels between the tickers
        gap: 5,
        //gap in pixels between the tickers
        delayBeforeStart: 0,
        //'left' or 'right'
        direction: 'left',
        //true or false - should the marquee be duplicated to show an effect of continues flow
        duplicated: true,
        //on hover pause the marquee - using jQuery plugin https://github.com/tobia/Pause
        pauseOnHover: true
    });

    //Direction upward
    $('.marquee-vert').marquee({
        direction: "left",
        speed: 2500
    });

    //pause and resume links
    $('.pause').click(function(e){
        e.preventDefault();
        $mwo.trigger('pause');
    });
    $('.resume').click(function(e){
        e.preventDefault();
        $mwo.trigger('resume');
    });
    //toggle
    $('.toggle').hover(function(e){
        $mwo.trigger('pause');
    },function(){
        $mwo.trigger('resume');
    })
    .click(function(e){
        e.preventDefault();
    })
});
</script>

</body>
</html>