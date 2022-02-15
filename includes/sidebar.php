
<header class="header" id="header">
      <div class="header_toggle">
        <i class="bx bx-menu" id="header-toggle"></i>
      </div>
      <div class="header_img">
      <?php
        $sql = "SELECT * FROM user" ;
        $query = mysqli_query($conn, $sql);
        if(!$query){
          die('Database query failed' . mysqli_error());
        }
        while($row = mysqli_fetch_array($query)){
          ?>
            <img src="images/<?php echo $row['image']; ?>" alt="" />
        <?php
        }
?>
      </div>
    </header>
    <div class="l-navbar" id="nav-bar">
      <nav class="nav">
        <div>
          <a href="index.php" class="nav_logo">
            <i class="bx bx-layer nav_logo-icon"></i>
            <span class="nav_logo-name">Ed Bank</span>
          </a>
          <div class="nav_list">
            <a href="index.php" class="nav_link">
              <i class="bx bx-grid-alt nav_icon"></i>
              <span class="nav_name">Dashboard</span>
            </a>
            <a href="all-customers.php" class="nav_link">
              <i class="bx bx-user nav_icon"></i>
              <span class="nav_name">All Customers</span>
            </a>
            <a href="transfers.php" class="nav_link">
              <i class="bx bx-send nav_icon"></i>
              <span class="nav_name">Send Money</span>
            </a>
            <a href="add-customers.php" class="nav_link">
              <i class="bx bx-user-plus nav_icon"></i>
              <span class="nav_name">Update Customers List</span>
            </a>
            <a href="change-pin.php" class="nav_link">
              <i class="bx bx-key nav_icon"></i>
              <span class="nav_name">Change Transaction Pin</span>
            </a>
          </div>
        </div>
        <a href="" class="nav_link">
          <i class="bx bxs-copyright nav_icon"></i>
          <span class="nav_name">Eleos 2020</span>
        </a>
      </nav>
    </div>
