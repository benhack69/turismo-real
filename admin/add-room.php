<?php 
session_start();
if (empty($_SESSION['nombre_emp']) and empty($_SESSION['apellido_emp'])){
	header("location: login.php");
}
?>
<?php 
include "conexion.php";
$consulta = "SELECT * FROM comuna join region on region.id_Region = comuna.id_Region order by Descrip_comuna asc;";
$ejecutar = mysqli_query($conn,$consulta) or die(mysqli_error($conn));
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
	<title>Turismo Administrador</title>
	<link rel="shortcut icon" type="image/x-icon" href="">
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
	<link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">
	<link rel="stylesheet" href="assets/css/feathericon.min.css">
	<link rel="stylehseet" href="https://cdn.oesmith.co.uk/morris-0.5.1.css">
	<link rel="stylesheet" href="assets/plugins/morris/morris.css">
	<link rel="stylesheet" href="assets/css/style.css"> </head>

<body>
	<div class="main-wrapper">
		<div class="header">
			<div class="header-left">
				<a href="index.php" class="logo"> <span class="logoclass">Turismo Real</span> </a>
				<a href="index.php" class="logo logo-small">  <span class="logoclass">TR</span> </a>
			</div>
			<a href="javascript:void(0);" id="toggle_btn"> <i class="fe fe-text-align-left"></i> </a>
			<a class="mobile_btn" id="mobile_btn"> <i class="fas fa-bars"></i> </a>
			<ul class="nav user-menu">
				<!--
				<li class="nav-item dropdown noti-dropdown">
					<a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown"> <i class="fe fe-bell"></i> <span class="badge badge-pill">3</span> </a>
					<div class="dropdown-menu notifications">
						<div class="topnav-dropdown-header"> <span class="notification-title">Notifications</span> <a href="javascript:void(0)" class="clear-noti"> Clear All </a> </div>
						<div class="noti-content">
							<ul class="notification-list">
								<li class="notification-message">
									<a href="#">
										<div class="media"> <span class="avatar avatar-sm">
											<img class="avatar-img rounded-circle" alt="User Image" src="assets/img/profiles/avatar-02.jpg">
											</span>
											<div class="media-body">
												<p class="noti-details"><span class="noti-title">Carlson Tech</span> has approved <span class="noti-title">your estimate</span></p>
												<p class="noti-time"><span class="notification-time">4 mins ago</span> </p>
											</div>
										</div>
									</a>
								</li>
							</ul>
						</div>
						<div class="topnav-dropdown-footer"> <a href="#">View all Notifications</a> </div>
					</div>
				</li> -->
				<li class="nav-item dropdown has-arrow">
					<a href="" class="dropdown-toggle nav-link" data-toggle="dropdown">  </a>
					<div class="dropdown-menu">
						<div class="user-header">
							<div class="avatar avatar-sm"> <img src="" alt="User Image" class="avatar-img rounded-circle"> </div>
							<div class="user-text">
								<h6><?=$_SESSION["nombre_emp"]." ".$_SESSION["apellido_emp"]?></h6>
								<p class="text-muted mb-0">Administrator</p>
							</div>
						</div> <a class="dropdown-item" href="">Mi perfil</a> <a class="dropdown-item" href="">Configuración</a> <a class="dropdown-item" href="controlador/cerrar_sesion.php">Cerrar Sesión</a> </div>
				</li>
			</ul>
			<!--
			<div class="top-nav-search">
				<form>
					<input type="text" class="form-control" placeholder="Search here">
					<button class="btn" type="submit"><i class="fas fa-search"></i></button>
				</form>
			</div>
			-->
		</div>
		<div class="sidebar" id="sidebar">
			<div class="sidebar-inner slimscroll">
				<div id="sidebar-menu" class="sidebar-menu">
					<ul>
						<li> <a href="index.php"><i class="fas fa-tachometer-alt"></i> <span>Principal</span></a> </li>
						<li class="list-divider"></li>
						<!--
						<li class="submenu"> <a href="#"><i class="fas fa-suitcase"></i> <span> Booking </span> <span class="menu-arrow"></span></a>
							<ul class="submenu_class" style="display: none;">
								<li><a href="all-booking.html"> All Booking </a></li>
								<li><a href="edit-booking.html"> Edit Booking </a></li>
								<li><a href="add-booking.html"> Add Booking </a></li>
							</ul>
						</li> -->
						<!--
						<li class="submenu"> <a href="#"><i class="fas fa-user"></i> <span> Customers </span> <span class="menu-arrow"></span></a>
							<ul class="submenu_class" style="display: none;">
								<li><a href="all-customer.html"> All customers </a></li>
								<li><a href="edit-customer.html"> Edit Customer </a></li>
								<li><a href="add-customer.html"> Add Customer </a></li>
							</ul>
						</li>
						-->
						<li class="submenu" > <a href="all-rooms.php"><i class="fas fa-key"></i> <span> Habitaciones </span> <span class="menu-arrow"></span></a>
							<ul class="submenu_class" style="display: none;">
								<li><a href="all-rooms.php">Lista Habitaciones </a></li>
								<li><a class="active" href="add-room.php"> Agregar Habitaciones </a></li>
							</ul>
						</li>
						
						<li class="submenu"> <a href="#"><i class="fas fa-user"></i> <span> Empleados </span> <span class="menu-arrow"></span></a>
							<ul class="submenu_class" style="display: none;">
								<li><a href="all-staff.php">Lista de Empleados</a></li>
								<li><a href="add-staff.php">Agregar Empleado</a></li>
							</ul>
						</li> <!--
						<li> <a href="pricing.html"><i class="far fa-money-bill-alt"></i> <span>Pricing</span></a> </li>
						<li class="submenu"> <a href="#"><i class="fas fa-share-alt"></i> <span> Apps </span> <span class="menu-arrow"></span></a>
							<ul class="submenu_class" style="display: none;">
								<li><a href="chat.html"><i class="fas fa-comments"></i><span> Chat </span></a></li>
								<li class="submenu"> <a href="#"><i class="fas fa-video camera"></i> <span> Calls </span> <span class="menu-arrow"></span></a>
									<ul class="submenu_class" style="display: none;">
										<li><a href="voice-call.html"> Voice Call </a></li>
										<li><a href="video-call.html"> Video Call </a></li>
										<li><a href="incoming-call.html"> Incoming Call </a></li>
									</ul>
								</li>
								<li class="submenu"> <a href="#"><i class="fas fa-envelope"></i> <span> Email </span> <span class="menu-arrow"></span></a>
									<ul class="submenu_class" style="display: none;">
										<li><a href="compose.html">Compose Mail </a></li>
										<li><a href="inbox.html"> Inbox </a></li>
										<li><a href="mail-veiw.html"> Mail Veiw </a></li>
									</ul>
								</li>
							</ul>
						</li>
						<li class="submenu"> <a href="#"><i class="fas fa-user"></i> <span> Employees </span> <span class="menu-arrow"></span></a>
							<ul class="submenu_class" style="display: none;">
								<li><a href="employees.html">Employees List </a></li>
								<li><a href="leaves.html">Leaves </a></li>
								<li><a href="holidays.html">Holidays </a></li>
								<li><a href="attendance.html">Attendance </a></li>
							</ul>
						</li>
						<li class="submenu"> <a href="#"><i class="far fa-money-bill-alt"></i> <span> Accounts </span> <span class="menu-arrow"></span></a>
							<ul class="submenu_class" style="display: none;">
								<li><a href="invoices.html">Invoices </a></li>
								<li><a href="payments.html">Payments </a></li>
								<li><a href="expenses.html">Expenses </a></li>
								<li><a href="taxes.html">Taxes </a></li>
								<li><a href="provident-fund.html">Provident Fund </a></li>
							</ul>
						</li>
						<li class="submenu"> <a href="#"><i class="fas fa-book"></i> <span> Payroll </span> <span class="menu-arrow"></span></a>
							<ul class="submenu_class" style="display: none;">
								<li><a href="salary.html">Employee Salary </a></li>
								<li><a href="salary-veiw.html">Payslip </a></li>
							</ul>
						</li>
						<li> <a href="calendar.html"><i class="fas fa-calendar-alt"></i> <span>Calendar</span></a> </li>
						
						<li> <a href="assets.html"><i class="fas fa-cube"></i> <span>Assests</span></a> </li>
						<li> <a href="activities.html"><i class="far fa-bell"></i> <span>Activities</span></a> </li>
						<li class="submenu"> <a href="#"><i class="fe fe-table"></i> <span> Reports </span> <span class="menu-arrow"></span></a>
							<ul class="submenu_class" style="display: none;">
								<li><a href="expense-reports.html">Expense Report </a></li>
								<li><a href="invoice-reports.html">Invoice Report </a></li>
							</ul>
						</li>
						<li> <a href="settings.html"><i class="fas fa-cog"></i> <span>Settings</span></a> </li>
						<li class="list-divider"></li>
						<li class="menu-title mt-3"> <span>UI ELEMENTS</span> </li>
						<li class="submenu"> <a href="#"><i class="fas fa-laptop"></i> <span> Components </span> <span class="menu-arrow"></span></a>
							<ul class="submenu_class" style="display: none;">
								<li><a href="uikit.html">UI Kit </a></li>
								<li><a href="typography.html">Typography </a></li>
								<li><a href="tabs.html">Tabs </a></li>
							</ul>
						</li>
						<li class="submenu"> <a href="#"><i class="fas fa-edit"></i> <span> Forms </span> <span class="menu-arrow"></span></a>
							<ul class="submenu_class" style="display: none;">
								<li><a href="form-basic-inputs.html">Basic Input </a></li>
								<li><a href="form-input-groups.html">Input Groups </a></li>
								<li><a href="form-horizontal.html">Horizontal Form </a></li>
								<li><a href="form-vertical.html">Vertical Form </a></li>
							</ul>
						</li>
						<li class="submenu"> <a href="#"><i class="fas fa-table"></i> <span> Tables </span> <span class="menu-arrow"></span></a>
							<ul class="submenu_class" style="display: none;">
								<li><a href="tables-basic.html">Basic Table </a></li>
								<li><a href="tables-datatables.html">Data Table </a></li>
							</ul>
						</li>
						<li class="list-divider"></li>
						<li class="menu-title mt-3"> <span>EXTRAS</span> </li>
						<li class="submenu"> <a href="#"><i class="fas fa-columns"></i> <span> Pages </span> <span class="menu-arrow"></span></a>
							<ul class="submenu_class" style="display: none;">
								<li><a href="login.html">Login </a></li>
								<li><a href="register.html">Register </a></li>
								<li><a href="forgot-password.html">Forgot Password </a></li>
								<li><a href="change-password.html">Change Password </a></li>
								<li><a href="lock-screen.html">Lockscreen </a></li>
								<li><a href="profile.html">Profile </a></li>
								<li><a href="gallery.html">Gallery </a></li>
								<li><a href="error-404.html">404 Error </a></li>
								<li><a href="error-500.html">500 Error </a></li>
								<li><a href="blank-page.html">Blank Page </a></li>
							</ul>
						</li>
						<li class="submenu"> <a href="#"><i class="fas fa-share-alt"></i> <span> Multi Level </span> <span class="menu-arrow"></span></a>
							<ul class="submenu_class" style="display: none;">
								<li><a href="">Level 1 </a></li>
								<li><a href="">Level 2 </a></li>
							</ul>
						</li> 
							-->
					</ul>
				</div>
			</div>
		</div>


	<div class="page-wrapper">
	<div class="content container-fluid">
		<div class="row">
			<div class="col-lg-12">
				<form method="post" enctype="multipart/form-data">
					<div class="page-header">	
						<div class="row align-items-center">
							<div class="col">
								<h3 class="page-title mt-5">Agregar Habitación</h3> 
								<?php 
								include "conexion.php";
								include "controlador/registrar_habitacion.php";
								?>
									<div class="row formtype">
										<div class="col-md-4">
											<div class="form-group">
												<label>Nombre Departamento</label>
												<input class="form-control" type="text" name="desc_depto"> 
											</div>
										</div>
										<div class="col-md-4">
											<div class="form-group">
												<label>Nombre Habitación</label>
												<input class="form-control" type="text" name="nombre_hab"> 
											</div>
										</div>
										<div class="col-md-4">
											<div class="form-group">
												<label>Dirección</label>
												<input class="form-control" type="text" name="calle"> 
											</div>
										</div>
										<div class="col-md-4">
											<div class="form-group">
												<label>Comuna</label>
												<select class="form-control" name="id_comuna">
												<?php 
												while ($com = mysqli_fetch_array($ejecutar,MYSQLI_ASSOC)):; 
												?>
												<option value="<?php echo $com["id_comuna"];?>">
												<?php echo $com["Descrip_comuna"];
												?>
												</option>
												<?php 
												endwhile; 
												?>
												</select>
											</div>
										</div>
										<div class="col-md-4">
											<div class="form-group">
												<label>Piezas</label>
												<select class="form-control"  name="piezas">
													<option values="1">1</option>
													<option values="2">2</option>
													<option values="3">3</option>
												</select>
											</div>
										</div>
										<div class="col-md-4">
											<div class="form-group">
												<label>Baños</label>
												<select class="form-control" id="sel2" name="banos">
													<option values="1">1</option>
													<option values="2">2</option>
													<option values="3">3</option>
												</select>
											</div>
										</div>
										<div class="col-md-4">
											<div class="form-group">
												<label>Televisores</label>
												<select class="form-control" name="televisores">
													<option values="1">1</option>
													<option values="2">2</option>
													<option values="3">3</option>
												</select>
											</div>
										</div>

										<div class="col-md-4">
											<div class="form-group">
												<label>Ventanas</label>
												<select class="form-control" name="ventanas">
													<option values="1">1</option>
													<option values="2">2</option>
													<option values="3">3</option>
												</select>
											</div>
										</div>
									
										<div class="col-md-4">
											<div class="form-group">
												<label>Valor Habitación</label>
												<input type="text" class="form-control" name="valor_habitacion" > 
											</div>
										</div>

										<div class="col-md-4">
											<div class="form-group">
												<label>Disponible</label>
												<select class="form-control" name="disponibilidad">
													<option values="Disponible">Disponible</option>
													<option values="No Disponible">No Disponible</option>
												</select>
											</div>
										</div>
						
						
										<div class="col-md-4">
											<div class="form-group">
												<label>Descripción Habitación</label>
												<textarea class="form-control" rows="5" name="desc_habitacion" ></textarea>
											</div>
										</div>
										<!--			
										<div class="col-md-4">
											<div class="form-group">
											<label>Subir Imagen</label>
											<div class="custom-file mb-3">
											<input type="file" name="imagen">
											
										</div>
											-->
									</div>
							</div>
							
						<!--
						<div class="col-md-4">
							<div class="form-group">
								<label>Message</label>
								<textarea class="form-control" rows="5" id="comment" name="text"></textarea>
							</div>
						</div>
						-->
					</div>	
					<center>
						<input type="submit" value="Registrar"  name = "agregar" class="btn btn-pill text-white  btn-primary">
					</center>
				</form>
			</div>
		</div>		
	</div>
</div>

		
	</div>
	<script src="assets/js/jquery-3.5.1.min.js"></script>
	<script src="assets/js/popper.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/moment.min.js"></script>
	<script src="assets/js/select2.min.js"></script>
	<script src="assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>
	<script src="assets/plugins/raphael/raphael.min.js"></script>
	<script src="assets/js/bootstrap-datetimepicker.min.js"></script>
	<script src="assets/js/script.js"></script>
	<script>
	$(function() {
		$('#datetimepicker3').datetimepicker({
			format: 'LT'
		});
	});
	</script>
</body>

</html>