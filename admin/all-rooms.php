<?php 
session_start();
if (empty($_SESSION['nombre_emp']) and empty($_SESSION['apellido_emp'])){
	header("location: login.php");
}
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
								<li><a class="active" href="all-rooms.php">Lista Habitaciones </a></li>
								<li><a href="add-room.php"> Agregar Habitaciones </a></li>
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
				<div class="page-header">
					<div class="row align-items-center">
						<div class="col">
							<div class="mt-5">
								<h4 class="card-title float-left mt-2">Lista</h4> <a href="add-room.php" class="btn btn-primary float-right veiwbutton">Agregar Habitación</a> </div>
						</div>
					</div>
				</div>
				<?php 
				include "conexion.php";
				include "controlador/eliminar_habitacion.php";
				?>
<!--
				<div class="row">
					<div class="col-lg-12">
						<form>
							<div class="row formtype">
								<div class="col-md-3">
									<div class="form-group">
										<label>Nombre Departamento</label>
										<input class="form-control" type="text"> </div>
								</div>
								<div class="col-md-3">
									<div class="form-group">
										<label></label>
										<input class="form-control" type="text"> </div>
								</div>
								<div class="col-md-3">
									<div class="form-group">
										<label>Puesto</label>
										<select class="form-control" id="sel1" name="sellist1">
											<option>Select</option>
											<option>Staff</option>
										</select>
									</div>
								</div>
								<div class="col-md-3">
									<div class="form-group">
										<label>Buscar</label> <a href="#" class="btn btn-success btn-block mt-0 search_button"> Buscar </a> </div>
								</div>
							</div>
						</form>
					</div>
				</div> -->
				<div class="row">
					<div class="col-sm-12">
						<div class="card card-table">
							<div class="card-body booking_card">
								<div class="table-responsive">
									<table class="datatable table table-stripped table table-hover table-center mb-0">
										<thead>
											<tr>
												<th>ID Departamento</th>
												<th>Nombre Departamento</th>
												<th>Direccion Depto</th>
												<th>Comuna</th>
												<th>Región</th>
												<th>Nombre Habitación</th>
												<th>Descripción Habitación</th>
												<th>Piezas</th>
												<th>Baños</th>
												<th>Televisores</th>
												<th>Ventanas</th>
												<th>Valor Habitación</th>
												<th>Disponibilidad</th>
												<th class="text-right">Acciones</th>
											</tr>
										</thead>
										<tbody>
											<?php 
											include "conexion.php";
											$sql = $conn->query("SELECT * from departamento join comuna on comuna.id_comuna = departamento.id_comuna join region on region.id_Region = comuna.id_Region;");
											while ($datos= $sql->fetch_object()) { 
											?>
											<tr>
												<td><?= $datos->id_departamento?></td>
												<td><?= $datos->desc_depto?></td>
												<td><?= $datos->calle?></td>
												<td><?= $datos->Descrip_comuna?></td>
												<td><?= $datos->Descrip_region?></td>
												<td><?= $datos->nombre_hab?></td>
												<td><?= $datos->desc_habitacion?></td>
												<td><?= $datos->piezas?></td>
												<td><?= $datos->banos?></td>
												<td><?= $datos->televisores?></td>
												<td><?= $datos->ventanas?></td>
												<td>$<?= $datos->valor_habitacion?></td>
												<td>
												<?php
												if ($datos->disponibilidad == "Disponible") {
													echo '<div class="actions"> <a class="btn btn-sm bg-success-light mr-2">Disponible</a> </div>';
												} else {
													echo '<div class="actions"> <a class="btn btn-sm bg-danger-light mr-2">No Disponible</a> </div>';
												}												
												?>
													
												</td>
												<td class="text-right">
												<a class="dropdown-item" href="edit-room.php?id=<?=$datos->id_departamento ?>"><i class="fas fa-pencil-alt m-r-5"></i> Editar</a> 
												<a class="dropdown-item" href="all-rooms.php?id=<?=$datos->id_departamento ?>"><i class="fas fa-trash-alt m-r-5"></i> Deshabilitar</a>
												</td>
											</tr>
											<?php }
											?>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		
		</div>
	</div>
	<script data-cfasync="false" src="../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
	<script src="assets/js/jquery-3.5.1.min.js"></script>
	<script src="assets/js/popper.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>
	<script src="assets/plugins/raphael/raphael.min.js"></script>
	<script src="assets/plugins/datatables/jquery.dataTables.min.js"></script>
	<script src="assets/plugins/datatables/datatables.min.js"></script>
	<script src="assets/js/script.js"></script>
</body>

</html>