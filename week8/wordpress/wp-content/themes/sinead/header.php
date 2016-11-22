<html>
<head>
     <?php wp_head(); ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
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
    
     <div class="w3-panel w3-pink">
        <h2 class="w3-opacity">Hide Menu?</h2>
    </div> 
    <input type="radio" name="no" value="yes"> Yes 
    <input type="radio" name="yes" value="no"> No <br>
    <button class="w3-btn w3-white w3-border w3-border-red w3-round-xlarge">Update</button>
</body>
</html>
