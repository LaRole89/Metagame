<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <!--css -->
        <link rel="stylesheet" href="style.css" type="text/css" />
        
        
        <!-- jquery e jquery mobile -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.2.6/jquery.js"></script>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/latest/jquery.js"></script>
        <link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.0/jquery.mobile-1.4.0.min.css" />
        <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
        <script src="http://code.jquery.com/mobile/1.4.0/jquery.mobile-1.4.0.min.js"></script>
        
        <!--SCRIPT OFFERTE slideshow-->
        <link rel="stylesheet" href="inc/css/slideshows.css" />
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js"></script>
        <script src="inc/js/jquery.cycle.all.js"></script>
        <script src="inc/js/jquery.easing.1.3.js"></script>

        <script>
        $(function() {
        // ---------------------------------------------------
        // Slideshow 2

            $('#slideshow_2').cycle({
                fx: 'fade',		
                        speed:  900, 
                        timeout: 5000, 
                        pager: '.ss2_wrapper .slideshow_paging', 
                prev: '.ss2_wrapper .slideshow_prev',
                next: '.ss2_wrapper .slideshow_next',
                        before: function(currSlideElement, nextSlideElement) {

                                $('.ss2_wrapper .slideshow_box').delay(100).animate({ bottom:'0'}, 400);
                        }
            });

                $('.ss2_wrapper').mouseenter(function(){
                        $('#slideshow_2').cycle('pause');
                        $('.ss2_wrapper .slideshow_prev').stop(true, true).animate({ left:'20px'}, 200);
                        $('.ss2_wrapper .slideshow_next').stop(true, true).animate({ right:'20px'}, 200);
            }).mouseleave(function(){
                        $('#slideshow_2').cycle('resume');
                        $('.ss2_wrapper .slideshow_prev').stop(true, true).animate({ left:'-40px'}, 200);
                        $('.ss2_wrapper .slideshow_next').stop(true, true).animate({ right:'-40px'}, 200);
            });


        // ---------------------------------------------------



        });
        </script>
        <title></title>
    </head>
    <body>
        <div data-role="page" id="first_page">
        <?php
        include 'header.php';
        ?>
            <article>
<div id="promotion">
                <div id="promotionCont">
                            <div class="ss2_wrapper">

                                <a href="#" class="slideshow_prev"><span>Previous</span></a>
                                <a href="#" class="slideshow_next"><span>Next</span></a>

                                <div class="slideshow_paging"></div>

                                <div class="slideshow_box">

                                        <div class="data"></div>
                                </div>

                                <div id="slideshow_2" class="slideshow">

                                        <div class="slideshow_item">
                                                <div class="image"><a href="index.php?idgioco=17"><img src="img/photos/dmc4.jpg" alt="Devil may cry 4" width="900" height="400" /></a></div>
                                                <div class="data">
                                                        <h4><a href="#">Donec sollicitudin enim sit</a></h4>
                                                        <p>Sed mollis tristique lectus vitae aliquet. Quisque vitae metus ut velit varius feugiat. Maecenas luctus pulvinar elit et viverra. Aenean vel est nulla. </p>

                                                </div>
                                        </div>

                                        <div class="slideshow_item">
                                                <div class="image"><a href="index.php?idgioco=308"><img src="img/photos/ds2.jpg" alt="photo 3" width="900" height="400" /></a></div>
                                                <div class="data">
                                                        <h4><a href="#">Pellentesque lacinia metus</a></h4>
                                                        <p>Integer pretium volutpat ligula sit amet pretium. Morbi nisi dui, rutrum ut bibendum sit amet, gravida eget dui. </p>
                                                </div>

                                        </div>

                                        <div class="slideshow_item">
                                                <div class="image"><a href="index.php?idgioco=23"><img src="img/photos/gof.jpg" alt="photo 1" width="900" height="400" /></a></div>
                                                <div class="data">
                                                        <h4><a href="#">Lorem ipsum dolor sit amet</a></h4>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sollicitudin enim sit amet dolor posuere dictum. Pellentesque lacinia metus non erat auctor vehicula.</p>
                                                </div>
                                        </div>


                                        <div class="slideshow_item">
                                                <div class="image"><a href="index.php?idgioco=551"><img src="img/photos/mgr.jpg" alt="photo 4" width="900" height="400" /></a></div>
                                                <div class="data">
                                                        <h4><a href="#">Morbi nisi dui bibendum sit amet</a></h4>
                                                        <p>Aliquam feugiat lorem at massa pulvinar interdum. Ut nulla est, vulputate eget facilisis vel, cursus nec sapien. Quisque tincidunt adipiscing lorem, tincidunt sodales lorem imperdiet quis.</p>
                                                </div>
                                        </div>

                                </div>

                        </div><!-- .ss2_wrapper -->
                </div>
            </div> 
            </article>

        
        <?php
        include 'footer.php';
        ?>    
        </div>
  
        
        <?php
        include 'pagemobile.php';
        ?>
    </body>

</html>
