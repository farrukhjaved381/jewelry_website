<html>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Latest compiled and minified CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<!-- link to css -->
<link rel="stylesheet" href="../style.css">
  </head>
  <body>
    <!-- main-container -->
  <div class="container" id="container">
    <div class="nav">
      <h2 style="font-family: Arial, Helvetica, sans-serif; font-weight: 600">
        HEALET
      </h2>
      <div class="center-nav-bar">
        <a href=""><span>Home</span><div class="hover-line"></div></a>
        <a href=""><span>About</span><div class="hover-line"></div></a>
        <a href=""><span>Products</span><div class="hover-line"></div></a>
        <a href=""><span>Contact Us</span><div class="hover-line"></div></a>
      </div>
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
    </div>
    <div class="text">
      <h1>Best Jewellery<br />Collection</h1>
      <p>
        It is a long fact that a reader will be distracted by the readable
        content of the page when looking at its Lorem ipsum dolor sit amet,
        consectetur adipisicing elit. Beatae, eos?
      </p>
      <button>Shop Now</button>
    </div>
  </div>
  <!-- product details -->
    <div class=" bg-img max-w-4xl mx-auto p-4">
  <div class="flex flex-col md:flex-row">
    <div class="md:w-1/2">
      <img style="height: 800px;" src="../assets/images/latest-products/jwellery-img.jpg" alt="Product Image" class="w-full h-auto rounded-lg">
    </div>
    <div class="md:w-1/2 md:pl-8 mt-4 md:mt-0">
      <h1 class="text-2xl font-bold">Premium quality Noratan Necklace Set NJ-1027-G</h1>
      <div class="flex items-center mt-2">
        <span class="text-2xl font-semibold text-yellow-600">Rs.3,999.00 PKR</span>
        <span class="text-zinc-500 line-through ml-4">Rs.5,000.00 PKR</span>
        <span class="bg-yellow-500 text-white text-xs font-bold ml-2 px-2 py-1 rounded">SAVE 20%</span>
      </div>
      <div class="flex items-center mt-2">
        <div class="flex items-center">
          <svg aria-hidden="true" class="w-5 h-5 text-yellow-500" fill="currentColor" viewBox="0 0 20 20">
            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.286 3.97a1 1 0 00.95.69h4.18c.969 0 1.371 1.24.588 1.81l-3.392 2.46a1 1 0 00-.364 1.118l1.286 3.97c.3.921-.755 1.688-1.54 1.118l-3.392-2.46a1 1 0 00-1.176 0l-3.392 2.46c-.784.57-1.838-.197-1.54-1.118l1.286-3.97a1 1 0 00-.364-1.118L2.045 9.397c-.783-.57-.38-1.81.588-1.81h4.18a1 1 0 00.95-.69l1.286-3.97z"></path>
          </svg>
          <svg aria-hidden="true" class="w-5 h-5 text-yellow-500" fill="currentColor" viewBox="0 0 20 20">
            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.286 3.97a1 1 0 00.95.69h4.18c.969 0 1.371 1.24.588 1.81l-3.392 2.46a1 1 0 00-.364 1.118l1.286 3.97c.3.921-.755 1.688-1.54 1.118l-3.392-2.46a1 1 0 00-1.176 0l-3.392 2.46c-.784.57-1.838-.197-1.54-1.118l1.286-3.97a1 1 0 00-.364-1.118L2.045 9.397c-.783-.57-.38-1.81.588-1.81h4.18a1 1 0 00.95-.69l1.286-3.97z"></path>
          </svg>
          <svg aria-hidden="true" class="w-5 h-5 text-yellow-500" fill="currentColor" viewBox="0 0 20 20">
            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.286 3.97a1 1 0 00.95.69h4.18c.969 0 1.371 1.24.588 1.81l-3.392 2.46a1 1 0 00-.364 1.118l1.286 3.97c.3.921-.755 1.688-1.54 1.118l-3.392-2.46a1 1 0 00-1.176 0l-3.392 2.46c-.784.57-1.838-.197-1.54-1.118l1.286-3.97a1 1 0 00-.364-1.118L2.045 9.397c-.783-.57-.38-1.81.588-1.81h4.18a1 1 0 00.95-.69l1.286-3.97z"></path>
          </svg>
          <svg aria-hidden="true" class="w-5 h-5 text-yellow-500" fill="currentColor" viewBox="0 0 20 20">
            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.286 3.97a1 1 0 00.95.69h4.18c.969 0 1.371 1.24.588 1.81l-3.392 2.46a1 1 0 00-.364 1.118l1.286 3.97c.3.921-.755 1.688-1.54 1.118l-3.392-2.46a1 1 0 00-1.176 0l-3.392 2.46c-.784.57-1.838-.197-1.54-1.118l1.286-3.97a1 1 0 00-.364-1.118L2.045 9.397c-.783-.57-.38-1.81.588-1.81h4.18a1 1 0 00.95-.69l1.286-3.97z"></path>
          </svg>
          <svg aria-hidden="true" class="w-5 h-5 text-yellow-500" fill="currentColor" viewBox="0 0 20 20">
            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.286 3.97a1 1 0 00.95.69h4.18c.969 0 1.371 1.24.588 1.81l-3.392 2.46a1 1 0 00-.364 1.118l1.286 3.97c.3.921-.755 1.688-1.54 1.118l-3.392-2.46a1 1 0 00-1.176 0l-3.392 2.46c-.784.57-1.838-.197-1.54-1.118l1.286-3.97a1 1 0 00-.364-1.118L2.045 9.397c-.783-.57-.38-1.81.588-1.81h4.18a1 1 0 00.95-.69l1.286-3.97z"></path>
          </svg>
        </div>
        <span class="ml-2 text-zinc-600">(3 reviews)</span>
      </div>
      <div class="mt-4">
        <h2 class="text-lg font-semibold">Choose Your Color:</h2>
        <div class="flex mt-2">
          <button class="bg-black text-white px-4 py-2 rounded mr-2">Multi</button>
          <button class="bg-zinc-200 text-zinc-800 px-4 py-2 rounded mr-2">Champagne</button>
          <button class="bg-zinc-200 text-zinc-800 px-4 py-2 rounded mr-2">Maroon</button>
          <button class="bg-zinc-200 text-zinc-800 px-4 py-2 rounded">Green</button>
        </div>
      </div>
      <div class="mt-4">
        <h2 class="text-lg font-semibold">Quantity:</h2>
        <div class="flex items-center mt-2">
          <button class="bg-zinc-200 text-zinc-800 px-4 py-2 rounded-l">-</button>
          <input type="text" class="w-12 text-center border-t border-b border-zinc-200" value="1">
          <button class="bg-zinc-200 text-zinc-800 px-4 py-2 rounded-r">+</button>
        </div>
      </div>
      <button class="bg-black text-white px-8 py-3 mt-6 rounded w-full">ADD TO CART</button>
    </div>
  </div>
</div>
  </body>
</html>