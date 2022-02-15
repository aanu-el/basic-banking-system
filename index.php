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
    <title>Ed Bank | Home</title>
  </head>

  <body id="body-pd">
    
  <!-- Sidebar starts -->
  <?php include('includes/sidebar.php'); ?>

    <!--Container Main start-->
    <div class="main height-100">
        <?php 
          $user_query = get_user(); //get the value from the include file
          while($user = mysqli_fetch_array($user_query)){
            ?>
            <h4 class="text-center p-5">Welcome <?php echo $user['username']; ?>!</h4>
        <?php
          }
        ?>
     

      <!-- Account Balance box -->
      <div class="text-center m-5">
        
        <h4 class="display-6">Account Balance:</h4>

        <div class="d-sm-flex d-grid gap-sm-4 my-4 justify-content-center">
          <div class="card text-white mb-3" style="width: 18rem">
            <div class="card-header bg-primary">USD</div>
            <div class="card-body">
              <?php
                $user_query = get_user();
                while($user = mysqli_fetch_array($user_query)){
                  ?>
                  <h3 class="card-title text-dark p-3">$<?php echo $user['usd_balance']; ?></h3>
                  <?php
                }
              ?>
              
            </div>
          </div>

          <div class="card text-white mb-3" style="width: 18rem">
            <div class="card-header bg-primary">Naira</div>
            <div class="card-body">
            <?php
                $user_query = get_user();
                while($user = mysqli_fetch_array($user_query)){
                  ?>
              <h3 class="card-title text-dark p-3">#<?php echo $user['naira_balance']; ?></h3>
                  <?php
                }
              ?>
            </div>
          </div>
        </div>
      </div>

      <!-- Buttons -->
      <div class="text-center gap-3">
        <a href="#" class="btn btn-primary btn-lg text-white">Top-up Balance</a>
        <a href="transfers.php" class="btn btn-primary btn-lg text-white"
          >Send Money</a
        >
      </div>
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
