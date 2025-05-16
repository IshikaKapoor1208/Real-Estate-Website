<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register form</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container row">
        <!-- Left Container -->
        <div class="col-4">
        <div class="d-flex flex-column flex-shrink-0 p-3 bg-body-secondary" style="width: 280px; height:100vh;">
    <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
      <img src="images/logo.png" class="bi pe-none me-2" width="100%"><use xlink:href="#bootstrap"></use></img>
      <span class="fs-4"></span>
    </a>
    <hr>
    <ul class="nav nav-pills flex-column mb-auto">
      <li class="nav-item">
        <!-- home link -->
        <a href="admin_dashboard.php" class="nav-link <?= ($currentPage == 'admin_dashboard.php') ? 'active' : '' ?>" aria-current="page">
          <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#home"></use></svg>
          home
        </a>
      </li>
      <!-- Registered users -->
      <li>
        <a href="registered_users.php" class="nav-link link-body-emphasis <?= ($currentPage == 'registered_users.php') ? 'active' : '' ?>">
          <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#users"></use></svg>
          Registered Users
        </a>
      </li>
      <!-- Properties -->
      <li>
        <a href="properties.php" class="nav-link link-body-emphasis <?= ($currentPage == 'properties.php') ? 'active' : '' ?>">
          <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#table"></use></svg>
          Properties
        </a>
      </li>
      <!-- Add Properties -->
      <li>
        <a href="addproperties.php" class="nav-link link-body-emphasis <?= ($currentPage == 'addproperties.php') ? 'active' : '' ?>">
          <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#table"></use></svg>
          Add Properties
        </a>
      </li>
      <!-- Commission -->
      <li>
        <a href="commission.php" class="nav-link link-body-emphasis <?= ($currentPage == 'commission.php') ? 'active' : '' ?>">
          <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#grid"></use></svg>
          Commission
        </a>
      </li>
        <!-- Profile  -->
      <li>
        <a href="#" class="nav-link link-body-emphasis">
          <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#people-circle"></use></svg>
        </a>
      </li>
    </ul>
    <hr>
    <div class="dropdown">
      <a href="#" class="d-flex align-items-center link-body-emphasis text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
        <img src="images/home.png" alt="" width="32" height="32" class="rounded-circle me-2">
        <strong>mdo</strong>
      </a>
      <ul class="dropdown-menu text-small shadow">
        <li><a class="dropdown-item" href="#">New project...</a></li>
        <li><a class="dropdown-item" href="#">Settings</a></li>
        <li><a class="dropdown-item" href="#">Profile</a></li>
        <li><hr class="dropdown-divider"></li>
        <li><a class="dropdown-item" href="#">Sign out</a></li>
      </ul>
    </div>
  </div>  
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>