<?php

    $title = "Index";
    include 'includes/header.php';

?>

    <!-- Basic HTML -->
    <h1>Hello World - PHP Primer</h1>
    <br/>

<?php
    //Printing to HTML using echo
    echo 'Hello PHP!';
    echo '<br/>';
    echo 'Second Line';
    echo '<br/>';

     
    // Variables need a '$'. They are not strongly typed
     $name = 'Hamon Dobbs';
    $age = 44;
     // echo variable
    echo $name;
    echo '<h1>My Name Is: '.$name.' </h1>';
    echo '<h1>My Age Is: '.$age.' </h1>';
    // Echo using double quotes and interpolation
    echo "<h1>My Name Is: $name </h1>";

?>

    <button type="button" class="btn btn-dark" >Click Me!</button>
    <button type="button" class="btn btn-primary" >Click Me!</button>
    <button type="button" class="btn btn-success" >Click Me!</button>
    <a href="https://www.heroku.com" target="_blank" class="btn btn-danger">Heroku.com</a>

    <?php
    require 'includes/footer.php' 
    ?>

  