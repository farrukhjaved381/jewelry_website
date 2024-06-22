

<body>
  <div class="container" id="add_new">
    <div class="row justify-content-center">
      <div class="col-12 col-lg-12">
        <div class="bg-white border rounded shadow-sm p-5">

          <h5 class="mb-3 display-5 text-center">Add New Setting</h5>
          <form action="save.php" method="POST">
            <label for="setting_key">Setting Key:</label>
            <input type="text" id="setting_key" class="form-control" name="setting_key" required><br>
            <label for="setting_value">Setting Value:</label>
            <input type="text" id="setting_value" class="form-control" name="setting_value" required><br>
            <button type="submit" class="btn btn-primary" name="submit">Save</button>
          </form>
        </div>
      </div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXlHj1/4A+ui9wzXbFfRvH+8abtTE1pi6jizo/YdPwXQf0hyy5D4e4Te6fj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGqKtv3z8G8a37bR0eI5vs/9OQ4yLGVRhmebXYne8B/6KUUHBYQ4G1rN/3E" crossorigin="anonymous"></script>

</body>

</html>