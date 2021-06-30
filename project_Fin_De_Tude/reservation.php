<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="./main.css">
    <title>Document</title>
</head>

<body>
    <div class="wrapper">

        <nav id="sidebar">
            <div class="sidebar-header">
                <h3>blblala</h3>
            </div>
            <ul class="lisst-unstyled components">
                <li>
                    <a href="index.php">Dashboard</a>
                </li>
                <li class="active">
                    <a href="reservation.php">Reservation</a>
                </li>
                <li>
                    <a href="#">Cars</a>
                </li>
                <li>
                    <a href="#">Client</a>
                </li>
            </ul>
        </nav>

        <div id="content">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">
                    <button type="button" id="sidebarCollapse" data-toggle="collapse" class="btn btn-info">
                    <span class="glyphicon glyphicon-arrow-left"></span>
                        <span class="toggele">toggle</span>
                        
                    </button>
                </div>
                <h3 class="text-info">Admin</h3>
            </nav>
            <table class="table table-gray table-hover">
    <thead>
      <tr>
        <th>Name</th>
        <th>Mark</th>
        <th>Color</th>
        <th>registration number</th>
        <th>Date Start</th>
        <th>Date End</th>
        <th>Price Total</th>
        <th>Image</th>
        
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>John</td>
        <td>Doe</td>
        <td>john@example.com</td>
      </tr>
      <tr>
        <td>Mary</td>
        <td>Moe</td>
        <td>mary@example.com</td>
      </tr>
      <tr>
        <td></td>
        <td>Dooley</td>
        <td>july@example.com</td>
      </tr>
    </tbody>
  </table>

  <div class="row">
  <div class="col-12 text-center"><a href="AddRes.php"><button class="btn btn-info"><span class="glyphicon glyphicon-plus-sign"></span>Add Reservation </button></a> </div>
  </div>



















            <script src="./bootstrap/js/popper.min.js"></script>
            <script src="./bootstrap/js/jquery-3.5.1.min.js"></script>
            <script src="./bootstrap/js/bootstrap.js"></script>
            <script src="./app.js"></script>
</body>

</html>