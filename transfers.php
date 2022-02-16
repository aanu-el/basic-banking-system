<!-- Connect Database -->
<?php require_once('includes/connect_db.php'); ?>
<!-- Include Basic Functions -->
<?php require_once('includes/functions.php'); ?>`

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
    <title>Ed Bank | Send Money</title>
  </head>

  <body id="body-pd">
    <!-- Sidebar starts -->
    <?php include('includes/sidebar.php'); ?>

    <!--Container Main start-->
    <div class="height-100">
      <h4 class="pt-2">Send Money</h4>

      <!-- Transfer Money Form field -->
      <section class="text-center p-5 my-5">
        <!-- <span style="font-size: 100px">&#128515;</span> -->
        <div class="form">
          <form action="transfers.php" method="post">
            <select class="form-select-sm mb-3">
              <option selected>Open Customers List</option>
              <option value="1">One</option>
              <option value="2">Two</option>
              <option value="3">Three</option>
            </select>

            <input
              class="mb-3"
              type="number"
              name="amount"
              id="amount"
              placeholder="Amount"
            />

            <select class="form-select-sm mb-3">
              <option selected>From which Balance?</option>
              <option value="1">Naira</option>
              <option value="2">USD</option>
            </select>

            <input
              class="mb-3"
              type="number"
              name="pin"
              id="pin"
              placeholder="Your Transaction pin"
            />

            <br />

            <button type="submit" class="btn btn-primary btn-sm">
              Send Money
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
