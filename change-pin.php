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
    <title>Ed Bank | Change Transaction Pin</title>
  </head>

  <body id="body-pd">
    <!-- Sidebar starts -->
    <?php include('includes/sidebar.php'); ?>

    <!--Container Main start-->
    <div class="height-100">
      <h4 class="pt-2">Change Transaction Pin</h4>

      <!-- Add Customer Form field -->
      <section class="text-center p-5 my-5">
        <div class="form">
          <form action="change-pin.php" method="post">
            <input
              class="mb-3"
              type="text"
              name="amount"
              id="amount"
              placeholder="Old Transaction Pin"
            />
            <br>
            <input
              class="mb-3"
              type="text"
              name="pin"
              id="pin"
              placeholder="New Transaction Pin"
            />

            <br />

            <button type="submit" class="btn btn-primary btn-sm">
              Add Customer
            </button>
          </form>
        </div>
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
