<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <title>Site Settings</title>
</head>

<body>
  <div class="container mt-5">
    <div class="row justify-content-center">
      <div class="col-9">
        <h2>Site Settings</h2>
        <table class="table table-striped">
          <thead>
            <tr>
              <th>Id</th>
              <th>Setting Key</th>
              <th>Setting Value</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <?php
            // Database configuration
            $host = 'localhost';
            $user = 'root';
            $password = '';
            $database = 'jewelry-website';

            // Create connection
            $mysqli = new mysqli($host, $user, $password, $database);

            // Check connection
            if ($mysqli->connect_error) {
                die("Connection failed: " . $mysqli->connect_error);
            }

            // Your query
            $query = "SELECT * FROM tbl_site_settings LIMIT " . get_setting('per_page_record');

            // Execute the query
            $result = $mysqli->query($query);

            if ($result) {
                // Fetch results and display them
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $row['id'] . "</td>";
                    echo "<td>" . $row['setting_key'] . "</td>";
                    echo "<td>" . $row['setting_value'] . "</td>";
                    echo "<td>
                          <a href='/Jewellery-website/Jewellery-website/admin/edit_new_setting.php?id=" . $row['id'] . "' class='btn btn-primary'><i class='fa-solid fa-pen-to-square'></i></a>
                          <form action='delete_setting.php' method='POST' style='display:inline;'>
                              <input type='hidden' name='id' value='" . $row['id'] . "'>
                              <button type='submit' class='btn btn-warning mx-1'><i class='fa-solid fa-trash'></i></button>
                          </form>
                          </td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='4'>Error: " . $mysqli->error . "</td></tr>";
            }

            // Close the connection
            $mysqli->close();
            ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXlHj1/4A+ui9wzXbFfRvH+8abtTE1pi6jizo/YdPwXQf0hyy5D4e4Te6fj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGqKtv3z8G8a37bR0eI5vs/9OQ4yLGVRhmebXYne8B/6KUUHBYQ4G1rN/3E" crossorigin="anonymous"></script>
</body>

</html>
