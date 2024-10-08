<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Simple Sidebar</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Bootstrap Icons (optional) -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.3/font/bootstrap-icons.min.css" rel="stylesheet">
  
  <style>
    /* Custom sidebar styling */
    .sidebar {
      min-height: 100vh;
      width: 250px;
      background-color: #343a40;
      padding-top: 20px;
    }
    .sidebar a {
      color: #ddd;
      font-size: 1.1em;
      padding: 15px 20px;
      display: block;
      text-decoration: none;
      border-radius: 5px;
    }
    .sidebar a:hover {
      background-color: #495057;
      color: white;
    }
    .sidebar .active {
      background-color: #495057;
      color: white;
    }
  </style>
</head>
<body>
  <div class="d-flex">
    <!-- Sidebar -->
    <nav class="sidebar bg-dark">
      <ul class="list-unstyled">
        <li>
          <a href="#" class="active">
            <i class="bi bi-house-fill"></i> Home
          </a>
        </li>
        <li>
          <a href="#">
            <i class="bi bi-person-fill"></i> Profile
          </a>
        </li>
        <li>
          <a href="/membros">
            <i class="bi bi-gear-fill"></i> Settings
          </a>
        </li>
        <li>
          <a href="#">
            <i class="bi bi-envelope-fill"></i> Messages
          </a>
        </li>
        <li>
          <a href="#">
            <i class="bi bi-box-arrow-right"></i> Logout
          </a>
        </li>
      </ul>
    </nav>
    
    <!-- Page content -->
    <div class="content p-4">
      
    </div>
  </div>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
