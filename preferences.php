<?php

  // Check if the form has been submitted

  if (isset($_POST['save_settings'])) {



    // 1. Get data from the form

    $name = $_POST['user_name'];

    $theme = $_POST['user_theme'];



    // 2. Calculate expiration time (Current time + 30 days)

    // 86400 seconds = 1 day

    $expire_time = time() + (86400 * 30);



    // 3. Set the cookies

    setcookie("saved_name", $name, $expire_time);

    setcookie("saved_theme", $theme, $expire_time);



    // 4. Give user feedback

    echo "<h3 style='text-align:center; color:green;'>Settings Saved Successfully!</h3>";

  }

  ?>



  <!DOCTYPE html>

  <html>

  <head>

    <title>Settings</title>

    <style>

      body { font-family: sans-serif; padding: 50px; background: #f4f4f4; }

      .card { background: white; padding: 20px; border-radius: 8px; width: 300px; margin: auto; border: 1px solid #ccc; }

      input, select { width: 100%; padding: 10px; margin-bottom: 10px; box-sizing: border-box; }

      button { width: 100%; padding: 10px; background: #007bff; color: white; border: none; cursor: pointer; }

      button:hover { background: #0056b3; }

    </style>

  </head>

  <body>



    <div class="card">

      <h2>User Preferences</h2>



      <!-- Form sends data to itself using POST -->

      <form method="POST" action="">

        <label>Enter your Name:</label>

        <input type="text" name="user_name" placeholder="e.g. SysAdmin Joe" required>



        <label>Choose Theme:</label>

        <select name="user_theme">

          <option value="light">Light Mode</option>

          <option value="dark">Dark Mode</option>

        </select>



        <button type="submit" name="save_settings">Save Cookies</button>

      </form>



      <br>

      <center><a href="index.php">Go to Dashboard &rarr;</a></center>

    </div>



  </body>

  </html>