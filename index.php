 <?php

  // 1. Set Default values (if no cookie exists)

  $current_name = "Guest";

  $current_theme = "light";



  // 2. Check if the 'saved_name' cookie exists

  if (isset($_COOKIE['saved_name'])) {

    $current_name = $_COOKIE['saved_name'];

  }



  // 3. Check if the 'saved_theme' cookie exists

  if (isset($_COOKIE['saved_theme'])) {

    $current_theme = $_COOKIE['saved_theme'];

  }

  ?>



  <!DOCTYPE html>

  <html>

  <head>

    <title>My Dashboard</title>

    <style>

      body { font-family: sans-serif; padding: 50px; transition: 0.3s; }



      /* Default Light Mode Styles */

      body.light { background-color: #ffffff; color: #333333; }



      /* Dark Mode Styles */

      body.dark { background-color: #222222; color: #e0e0e0; }



      .container { text-align: center; margin-top: 50px; }

      .btn { padding: 10px 20px; background: #28a745; color: white; text-decoration: none; border-radius: 5px;}

    </style>

  </head>



  <body class="<?php echo $current_theme; ?>">



    <div class="container">

<h1>Welcome back, <?php echo $current_name; ?>!</h1>



      <p>I have remembered your preferences using Cookies.</p>

      <p>Try closing this browser tab and opening it again—the settings will stick!</p>



      <br><br>

      <a href="preferences.php" class="btn">Update Settings</a>

    </div>



  </body>

  </html>