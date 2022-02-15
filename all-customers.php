<!-- Connect Database -->
<?php require_once('includes/connect_db.php'); ?>
<!-- Include Basic Functions -->
<?php require_once('includes/functions.php'); ?>

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
    <title>Ed Bank | All Customers</title>
  </head>

  <body id="body-pd">
    <!-- SideBar starts -->
    <?php include('includes/sidebar.php') ?>

    <!--Container Main start-->
    <div class="height-100">
      <h4 class="pt-2">All Customers</h4>

      <!-- customers details section-->
      <section class="p-5">
        <!-- First customer -->
        <?php
          $customers_query = get_all_customers();
          while($all_customers = mysqli_fetch_array($customers_query)){
            ?>
          <div class="d-flex">
          <div class="customer_img">
            <img src="images/<?php echo $all_customers['image']; ?>" alt="" />
          </div>
          <div class="ms-3">
            <p><b>Name:</b> &nbsp; <?php echo $all_customers['name']; ?></p>
            <p><b>Account Type:</b> &nbsp; <?php echo $all_customers['account_type']; ?> </p>
            <p><b>USD Balance:</b> &nbsp; <?php echo $all_customers['usd_balance']; ?> </p>
            <p><b>Naira Balance:</b> &nbsp; <?php echo $all_customers['naira_balance']; ?> </p>
            <div>
              <a href="single-customer.php" class="btn btn-primary btn-sm"
                >View Customer</a
              >
              <a href="transfers.php" class="btn btn-primary btn-sm">Send Money</a>
            </div>
          </div>
        </div>
        <br />
        <hr style="width: 50vw" />
        <br />
            <?php
          }
        ?>
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
