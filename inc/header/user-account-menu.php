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