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
                    speed: 900,
                    timeout: 5000,
                    pager: '.ss2_wrapper .slideshow_paging',
                    prev: '.ss2_wrapper .slideshow_prev',
                    next: '.ss2_wrapper .slideshow_next',
                    before: function(currSlideElement, nextSlideElement) {

                        $('.ss2_wrapper .slideshow_box').delay(100).animate({bottom: '0'}, 400);
                    }
                });

                $('.ss2_wrapper').mouseenter(function() {
                    $('#slideshow_2').cycle('pause');
                    $('.ss2_wrapper .slideshow_prev').stop(true, true).animate({left: '20px'}, 200);
                    $('.ss2_wrapper .slideshow_next').stop(true, true).animate({right: '20px'}, 200);
                }).mouseleave(function() {
                    $('#slideshow_2').cycle('resume');
                    $('.ss2_wrapper .slideshow_prev').stop(true, true).animate({left: '-40px'}, 200);
                    $('.ss2_wrapper .slideshow_next').stop(true, true).animate({right: '-40px'}, 200);
                });


                // ---------------------------------------------------



            });
        </script>
        <title>MetaGame: Home</title>
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
                <div id="conteinerCenter">

                    <h2>Titolo</h2> <br />   <br />
                    <p style="text-align: justify"> 
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla ac euismod tellus. Praesent pellentesque vulputate metus sit amet interdum. Proin porta diam turpis, at rhoncus lectus lobortis nec. Pellentesque mattis lectus at nunc commodo porttitor. In egestas eget diam eget faucibus. Mauris vitae condimentum tellus, ut suscipit ante. Sed adipiscing sem felis, nec rutrum arcu venenatis non. Etiam facilisis eu eros id facilisis. Cras in sodales lacus. Curabitur eu ligula ante. Quisque eget euismod lorem. Sed eget elementum nibh.

                        Quisque semper tristique rhoncus. Cras porttitor euismod arcu, nec elementum nisi porttitor a. Integer tortor ligula, pellentesque in pulvinar quis, tincidunt id magna. Donec et enim in velit blandit ullamcorper. Nam pretium urna eget blandit luctus. Vestibulum at cursus nisl. Sed rutrum, magna vel dictum porta, purus tortor pharetra ligula, et imperdiet tellus dui nec justo. Nullam eget nulla tortor. Cras vitae massa ut nulla lacinia gravida at eget ligula. Nullam sodales felis turpis, nec accumsan enim eleifend in. Duis pulvinar risus eget urna pulvinar, vitae placerat enim auctor. Suspendisse aliquet libero eu lorem cursus vulputate. Integer elit erat, egestas eu varius ac, pretium eget nisl. Aenean at urna scelerisque, euismod risus at, sagittis ligula. Praesent bibendum felis ut suscipit mattis. Maecenas scelerisque fringilla arcu, vitae malesuada lectus malesuada quis.
                    </p>

                    <br /><br /><h2>Titolo</h2><br /><br />
                    <p style="text-align: justify"> 
                        Quisque commodo id orci elementum pretium. Phasellus orci leo, pulvinar nec lorem nec, venenatis accumsan urna. Curabitur viverra purus non venenatis condimentum. Donec semper augue at volutpat interdum. Quisque leo turpis, imperdiet sit amet vehicula sed, commodo blandit magna. Cras imperdiet, turpis in adipiscing tincidunt, risus ligula faucibus urna, ac tempor lacus lorem vitae turpis. Mauris ultricies nunc eget sodales dapibus. Integer et sapien neque.

                        Maecenas vitae velit ipsum. Phasellus fringilla quis lorem id volutpat. Suspendisse est metus, auctor vel adipiscing eget, faucibus vitae lectus. Donec eleifend, eros eget faucibus dignissim, orci mi sodales est, ut consequat velit augue et sapien. Curabitur sodales suscipit neque quis imperdiet. In id pellentesque sapien. Proin eget nisi sit amet nulla laoreet aliquam. Aliquam laoreet interdum magna, eget faucibus lorem ultricies sit amet.

                        Nullam sit amet tortor porta, pharetra purus at, luctus eros. Morbi viverra felis nisi, sed bibendum nunc adipiscing in. Nulla feugiat ligula dolor, eu faucibus metus eleifend in. Suspendisse eu odio augue. Nulla facilisi. Aenean eget metus quis enim blandit dapibus. Nullam purus nulla, consequat at diam sit amet, varius tincidunt velit. Suspendisse elementum nibh arcu, at placerat leo dignissim vitae. Sed id porttitor mi. Fusce ac volutpat elit.
                    </p>

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
