<?php
include("assets/config.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Simple Sidebar - Start Bootstrap Template</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/simple-sidebar.css" rel="stylesheet">

</head>

<body>

    <div id="wrapper">

        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                <div style="float:left;">    <a href="#">
                       <img src="IMG/Logo.png"/>
                    </a></div>
                </li>
                <li>
                    <a href="#" id="ventas">Ventas</a>
                </li>
                <li>
                    <a href="#">Shortcuts</a>
                </li>
                <li>
                    <a href="#">Overview</a>
                </li>
                <li>
                    <a href="#">Events</a>
                </li>
                <li>
                    <a href="#">About</a>
                </li>
                <li>
                    <a href="#">Services</a>
                </li>
                <li>
                    <a href="#">Contact</a>
                </li>
            </ul>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container-fluid">

<a href="#menu-toggle" class="btn btn-secondary" id="menu-toggle">M</a>

      <div class="row">
          <div class="col-md-1">
                   <h1>Ventas</h1>
                   <p>Resumen de ventas</p>
          </div>

         <div class="col-md-11 toggled " style="background:black;"> </div>

      </div>
                <!-- Contenido -->
              <div id="contenido">

              </div>
<!-- /Contenido -->
<div style="border:solid 1px; width:100%;"> </div>

            </div>
        </div>
        <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Menu Toggle Script -->
    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>

</body>

</html>
<script>
$('#ventas').on('click', function () {
	$.ajax({

			url:"assets/ventas.php",
			method:"GET",
			success: function(resultado)
			{
				$("#contenido").html(resultado);
			}


		});
  })
</script>
