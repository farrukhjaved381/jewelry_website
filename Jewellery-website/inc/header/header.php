<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>HEALET</title>
  <!-- link to css -->
  <link rel="stylesheet" href="style.css" />
  <!-- link to responsive css -->
  <link rel="stylesheet" href="responsive.css">
  <!-- LINK TO FAV ICON -->
  <link rel="icon" type="image/png" href="assets/images/fav-icon/diamond-favicon.png">

  <!-- link to box icons -->
  <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />

  <!-- link to google fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@500&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
    rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@500&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
    rel="stylesheet">
  <!-- LINK TO FONT AWESOME -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
  <!-- <div class="main-container"> -->
  <!-- main-container -->
  <div class="container" id="container">
    <div class="nav">
      <?php include 'inc/header/logo.php'; ?>
      <?php include 'inc/header/nav.php'; ?>
      <!-- drop down button -->
      <style>
        /* Dropdown container */
.dropdown {
    position: relative;
    display: inline-block;
}

/* Dropdown button */
.dropbtn {
    font-size:30px;
    background: none;
    color: #fff;
    border: none;
    cursor: pointer;
    padding-left: 180px;
}

/* Dropdown content (hidden by default) */
.dropdown-content {
    display: none;
    border-radius: 5px;
    font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

/* Links inside the dropdown */
.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    border-radius: 5px;
}

/* Change color of dropdown links on hover */
.dropdown-content a:hover {
    background-color: #f1f1f1;
}

/* Show the dropdown menu on button click */
.show {
    display: block;
}

      </style>
      <div class="dropdown">
        <button onclick="toggleDropdown()" class="dropbtn"><i class="fa-solid fa-bars"></i></button>
        <div id="myDropdown" class="dropdown-content">
            <a href="#link1">Profile</a>
            <a href="#link2">Help</a>
            <a href="#link2">Settings</a>
            <a href="#link3">Sign in</a>
            <a href="#link2">Sign out</a>
        </div>
        <script>function toggleDropdown() {
          document.getElementById("myDropdown").classList.toggle("show");
      }
      
      // Close the dropdown if the user clicks outside of it
      window.onclick = function(event) {
          if (!event.target.matches('.dropbtn') && !event.target.matches('.dropbtn *')) {
              var dropdowns = document.getElementsByClassName("dropdown-content");
              for (var i = 0; i < dropdowns.length; i++) {
                  var openDropdown = dropdowns[i];
                  if (openDropdown.classList.contains('show')) {
                      openDropdown.classList.remove('show');
                  }
              }
          }
      }
      
      </script>
      
    </div>