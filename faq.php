<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

        <!-- jquery e jquery mobile -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.2.6/jquery.js"></script>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/latest/jquery.js"></script>
        <link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.0/jquery.mobile-1.4.0.min.css" />
        <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
        <script src="http://code.jquery.com/mobile/1.4.0/jquery.mobile-1.4.0.min.js"></script>
        <!--css -->
        <link rel="stylesheet" href="style.css" type="text/css" />
        <title>MetaGame: F.A.Q.</title>
    </head>
    <body>
        <div data-role="page" id="first_page">
            <?php
            include 'header.php';
            ?>
            <article>
                <p id="path"> Home > Supporto > F.A.Q. </p>
                <h1>
                    F.A.Q.
                </h1>
                <ul>
                    <li style="list-style: none;"> <h3> FAQ1 </h3> </li>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla ac euismod tellus. Praesent pellentesque vulputate metus sit amet interdum. Proin porta diam turpis, at rhoncus lectus lobortis nec. Pellentesque mattis lectus at nunc commodo porttitor. In egestas eget diam eget faucibus. Mauris vitae condimentum tellus, ut suscipit ante. Sed adipiscing sem felis, nec rutrum arcu venenatis non. <br /><br />
                    <li style="list-style: none;"> <h3> FAQ2 </h3> </li>
                    Etiam facilisis eu eros id facilisis. Cras in sodales lacus. Curabitur eu ligula ante. Quisque eget euismod lorem. Sed eget elementum nibh. <br /><br />
                    <li style="list-style: none;"> <h3> FAQ3 </h3> </li>
                    Quisque semper tristique rhoncus. Cras porttitor euismod arcu, nec elementum nisi porttitor a. Integer tortor ligula, pellentesque in pulvinar quis, tincidunt id magna. Donec et enim in velit blandit ullamcorper. Nam pretium urna eget blandit luctus. Vestibulum at cursus nisl. Sed rutrum, magna vel dictum porta, purus tortor pharetra ligula, et imperdiet tellus dui nec justo. <br />               
                </ul>
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