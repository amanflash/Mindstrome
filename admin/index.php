<?php
session_start();
$conn = mysqli_connect('localhost', 'root', '', 'mindstrome') or die('connection failed');

if (!$_SESSION['admin']) {
  header('location:login.php');
}

if(isset($_GET['delete'])){
  $delete_id = $_GET['delete'];
  $delete_query = mysqli_query($conn, "DELETE FROM `contact` WHERE id = $delete_id ") or die('query failed');
  if($delete_query){
    //  header('location:admin.php');
     $message[] = 'product has been deleted';
  }else{
    //  header('location:admin.php');
     $message[] = 'product could not be deleted';
  };
};
 ?>





<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Mindglobe Admin</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="assets/vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="assets/vendors/jvectormap/jquery-jvectormap.css">
  <link rel="stylesheet" href="assets/vendors/flag-icon-css/css/flag-icon.min.css">
  <link rel="stylesheet" href="assets/vendors/owl-carousel-2/owl.carousel.min.css">
  <link rel="stylesheet" href="assets/vendors/owl-carousel-2/owl.theme.default.min.css">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <!-- endinject -->
  <!-- Layout styles -->
  <link rel="stylesheet" href="assets/css/style.css">
  <!-- End layout styles -->
  <link rel="shortcut icon" href="assets/images/favicon.png" />
</head>

<body>
  <div class="container-scroller">
    <?php include  'header.php' ?>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_navbar.html -->
      <nav class="navbar p-0 fixed-top d-flex flex-row">
        <div class="navbar-brand-wrapper d-flex d-lg-none align-items-center justify-content-center">
          <a class="navbar-brand brand-logo-mini" href="index.html"><img src="assets/images/logo-mini.svg" alt="logo" /></a>
        </div>
        <div class="navbar-menu-wrapper flex-grow d-flex align-items-stretch">
          <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
            <span class="mdi mdi-menu"></span>
          </button>
          <ul class="navbar-nav w-100">
            <li class="nav-item w-100">
              <form action="index.php" method="get" class="nav-link mt-2 mt-md-0 d-none d-lg-flex search">
                <input type="text" name="search" placeholder="Search by Name or Subject" class="form-control">
              </form>
              <!-- <form  class="search-form">
    <input type="text" name="search" placeholder="Search by Name or Subject">
    <button type="submit"><i class="fas fa-search"></i>Search</button>
</form> -->
            </li>
          </ul>
          <ul class="navbar-nav navbar-nav-right">
            
            

            <li class="nav-item dropdown">
              <a class="nav-link" id="profileDropdown" href="#" data-toggle="dropdown">
                <div class="navbar-profile">
                  <img class="img-xs rounded-circle" src="assets/images/faces/face15.jpg" alt="">
                  <p class="mb-0 d-none d-sm-block navbar-profile-name">Mind globe</p>
                  <i class="mdi mdi-menu-down d-none d-sm-block"></i>
                </div>
              </a>
              <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="profileDropdown">
                
                <div class="dropdown-divider"></div>
                <a class="dropdown-item preview-item" href="logout.php">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-dark rounded-circle">
                      <i class="mdi mdi-logout text-danger"></i>
                    </div>
                  </div>
                  <div class="preview-item-content">
                    <p class="preview-subject mb-1"> Log out</p>
                  </div>
                </a>
               
            </li>
          </ul>
          <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
            <span class="mdi mdi-format-line-spacing"></span>
          </button>
        </div>
      </nav>
      <!-- table data start -->
      <div class="col-lg-12 grid-margin stretch-card" style="margin-top:126px;">
        <div class="card">
          <div class="card-body">
            <!-- <h4 class="card-title">Inverse table</h4> -->
            <!-- <p class="card-description"> Add class <code>.table-dark</code> -->
            </p>
            
<div class="table-responsive">
  <table class="table table-dark">
    <thead>
      <tr>
        <th>Name</th>
        <th>Phone</th>
        <th>E-mail</th>
        <th>Subject</th>
        <th>Services</th>
        <th>Message</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
    <?php
$select_products = mysqli_query($conn, "SELECT * FROM `contact` ORDER BY `id` DESC");
if (mysqli_num_rows($select_products) > 0) {
    while ($row = mysqli_fetch_assoc($select_products)) {
        // Filtering/searching logic (example: search by name)
        $searchTerm = isset($_GET['search']) ? $_GET['search'] : '';
        if (!empty($searchTerm) && stripos($row['Name'], $searchTerm) === false) {
            continue; // Skip this row if not matching the search term
        }
        // Check if this data is new (you can define the criteria for "new" data)
        $isNew = false; // Initialize as not new
        // Add your logic to determine if the data is new
        // For example, you can compare the timestamp or date of the data with a certain threshold

        // Now, conditionally add the badge
        echo "<tr>";
        echo "<td>" . $row['Name'] . ($isNew ? '<span class="badge badge-primary">New</span>' : '') . "</td>";
        echo "<td>" . $row['Phone'] . "</td>";
        echo "<td>" . $row['E-mail'] . "</td>";
        echo "<td>" . $row['Subject'] . "</td>";
        echo "<td>" . $row['service'] . "</td>";
        echo "<td>" . $row['Message'] . "</td>";
        echo "<td><a href='index.php?delete=" . $row['id'] . "' class='btn btn-danger' onclick=\"return confirm('Are you sure you want to delete this?');\"> <i class='fas fa-trash'></i> Delete </a></td>";
        echo "</tr>";
    };
} else {
    echo "<div class='empty'>No one has posted any queries yet!!</div>";
};
?>

    </tbody>
  </table>
</div>

            </div>
          </div>
        </div>
      </div>
      <!-- table data end -->

      <!-- search -->
      <?php
// Assuming you have established the database connection already

// $search = "";
// if (isset($_GET['search'])) {
//     $search = mysqli_real_escape_string($conn, $_GET['search']);
// }

// $select_products = mysqli_query($conn, "SELECT * FROM `contact` WHERE 
//     `Name` LIKE '%$search%' OR
//     `Subject` LIKE '%$search%'");
    
//     if (mysqli_num_rows($select_products) > 0) {
//       while ($row = mysqli_fetch_assoc($select_products)) {
//           echo "<tr>";
//           echo "<td>" . $row['Name'] . "</td>";
//           echo "<td>" . $row['Phone'] . "</td>";
//           echo "<td>" . $row['E-mail'] . "</td>";
//           echo "<td>" . $row['Subject'] . "</td>";
//           echo "<td>" . $row['service'] . "</td>";
//           echo "<td>" . $row['Message'] . "</td>";
//           echo "<td><a href='index.php?delete=" . $row['id'] . "' class='btn btn-danger' onclick=\"return confirm('Are you sure you want to delete this?');\"> <i class='fas fa-trash'></i> Delete </a></td>";
//           echo "</tr>";
//       }
//   } else {
//       echo "<tr><td colspan='7'><div class='empty'>No results found.</div></td></tr>";
//   }
  
// ?>





    </div>
    <!-- main-panel ends -->
  </div>
  <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="assets/vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="assets/vendors/chart.js/Chart.min.js"></script>
  <script src="assets/vendors/progressbar.js/progressbar.min.js"></script>
  <script src="assets/vendors/jvectormap/jquery-jvectormap.min.js"></script>
  <script src="assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
  <script src="assets/vendors/owl-carousel-2/owl.carousel.min.js"></script>
  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="assets/js/off-canvas.js"></script>
  <script src="assets/js/hoverable-collapse.js"></script>
  <script src="assets/js/misc.js"></script>
  <script src="assets/js/settings.js"></script>
  <script src="assets/js/todolist.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page -->
  <script src="assets/js/dashboard.js"></script>
  <!-- End custom js for this page -->
</body>

</html>