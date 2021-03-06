<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
      crossorigin="anonymous"
    />

    <!-- Bootstrap icons -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css"
    />

    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/style.css" />

    <!-- Page Title -->
    <title>Ed Bank | Add New Customers</title>
  </head>

  <body id="body-pd">
    <!-- Sidebar starts -->
    <?php include('includes/sidebar.php'); ?>

    <!--Container Main start-->
    <div class="height-100">
      <h4 class="pt-2">Add New Customers</h4>

      <!-- Add Customer Form field -->
      <section class="text-center p-5 my-5">
        <div class="form">
          <form action="add-customers.php" method="post">
            <input
              class="mb-3"
              type="text"
              name="amount"
              id="amount"
              placeholder="Name of Customer"
            />

            <input
              class="mb-3"
              type="text"
              name="pin"
              id="pin"
              placeholder="Customer's Email"
            />

            <select class="form-select-sm mb-3">
              <option selected>Choose account type</option>
              <option value="1">Saving</option>
              <option value="2">Current</option>
            </select>

            <br />

            <button type="submit" class="btn btn-primary btn-sm">
              Add Customer
            </button>
          </form>
        </div>
      </section>

      <!-- Delete Customers section -->
      <section class="my-5 py-5">
        <h4>Delete Customers</h4>
        <br />

        <form action="" method="post" class="text-center">
          <select class="form-select-sm mb-3">
            <option selected>Select Customer to Delete</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="2">3</option>
            <option value="2">4</option>
            <option value="2">5</option>
            <option value="2">6</option>
            <option value="2">7</option>
            <option value="2">8</option>
          </select>

          <br />

          <button type="submit" class="btn btn-primary btn-sm">
            Delete Customer
          </button>
        </form>
      </section>
    </div>
    <!--Container Main end-->

    <!-- Bootstrap Bundle with Popper -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
      crossorigin="anonymous"
    ></script>

    <!-- Custom JS -->
    <script src="js/script.js"></script>
  </body>
</html>
