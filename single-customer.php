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
    <link rel="stylesheet" href="css/single-customer.css" />

    <!-- Page Title -->
    <title>Ed Bank | All Customers</title>
  </head>

  <body id="body-pd">
   <!-- Sidebar starts -->
    <?php include('includes/sidebar.php'); ?>

    <!--Container Main start-->
    <div class="height-100">
      <h4 class="pt-2">View Customers</h4>

      <!-- customers details section-->
      <section class="my-5 p-5">
        <!-- First customer -->
        
        <?php
            $customers_query = get_all_customers();
            while($all_customers = mysqli_fetch_array($customers_query)){

              $OneCustomer_query = get_one_customer($all_customers['customers_id']);
              while($OneCustomer = mysqli_fetch_array($OneCustomer_query)){
                ?>
                <div class="d-gird mb-5 text-center">
                <div class="customer_img m-0 m-auto">
                <img src="images/<?php echo $OneCustomer['image']; ?>" alt="" />
              </div>
              <div class="m-3">
                <p>Name</p>
                <p>Email</p>
                <p>Account type</p>
                <p>Balance</p>
                <div>
                  <a href="#" class="btn btn-primary btn-sm"><span><i class="bx bx-send nav_icon"></i></span> Send Money</a>
                  <a href="#" class="btn btn-primary btn-sm"><span><i class="bx bx-eraser nav_icon"></i></span> Delete Customer</a>
                </div>
              </div>
            </div>
            <?php
              }
            }
          ?>
          

        <!-- Customer Transaction History -->
        <div class="text-center">
            <h5>Transaction History</h5> 
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Amount Received</th>
                    <th scope="col">Time Stamp</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                  </tr>
                  <tr>
                    <th scope="row">2</th>
                    <td>Jacob</td>
                    <td>Thornton</td>
                  </tr>
                </tbody>
              </table>
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
