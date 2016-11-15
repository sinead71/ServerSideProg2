<html>
<head>
     <?php wp_head(); ?>
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" 
     integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" 
     crossorigin="anonymous">
</head>
<body>
    <!---<ul class="nav nav-pills">
        <?php wp_nav_menu(array('theme_location'=> 'header-menu', 'menu' => 'Header Menu')); ?>
    </ul>    
    
    <div class="row">
        <div class="col-md-2">
        <h1>My Site</h1>
        </div> -->
    <?php       
    //adding plugins
    include('frontend.php');
    ?>
    
    <h3>Show all pages?</h3>
    <form method="POST">
        <input type="radio" name="yesNo" value="yes"> Yes 
        <input type="radio" name="yesNo" value="no"> No <br>
        <input type="button" name="update" value="update">
    </form>
</body>
</html>
