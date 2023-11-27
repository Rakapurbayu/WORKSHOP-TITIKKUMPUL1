@extends('layouts.appUser')

@section('content')
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
	<title>Pesanan saya</title>
	<link rel="shortcut icon" type="image/x-icon" href="assets_2/img/favicon.png">
	<link rel="stylesheet" href="assets_2/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets_2/plugins/fontawesome/css/all.min.css">
	<link rel="stylesheet" href="assets_2/plugins/fontawesome/css/fontawesome.min.css">
	<link rel="stylesheet" href="assets_2/plugins/datatables/datatables.min.css">
	<link rel="stylesheet" href="assets_2/css/feathericon.min.css">
	<link rel="stylesheet" href="assets_2/plugins/morris/morris.css">
	<link rel="stylesheet" href="assets_2/css/style.css"> 

</head>




@csrf

		<div class="page-wrapper">
			<div class="content container-fluid">
				<div class="page-header">
					<div class="row align-items-center">
						<div class="col">
							<div class="mt-5">
								<h4 class="card-title float-left mt-2">HMM</h4>
                                <a href="add-booking.html" class="btn btn-primary float-right veiwbutton ">Add Booking</a>
                            </div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-12">
						<div class="card card-table">
							<div class="card-body booking_card">
								<div class="table-responsive">
									<table class="datatable table table-stripped table table-hover table-center mb-0">
                                  <h2 style= "color:black;">PESANAN SAYA</h2>
										<thead>
											<tr>
												<th>Booking ID</th>
												<th>Vendor</th>
							
												<th>Total Person</th>
												<th>Date</th>
												<th>Time</th>
											
												<th>Status</th>
												<th class="text-right">Actions</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>BKG-0001</td>
												<td>
													<h2 class="table-avatar">
                                                    <a href="profile.html" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="images/img_2.jpeg" alt="User Image"></a>
                                                    <a href="profile.html">Jokopi <span>#0001</span></a>
                                                    </h2>
                                                </td>
											
												<td>10</td>
												<td>21-03-2020</td>
												<td>11.00 AM</td>
								
												
											
												<td>
													<div class="actions"> <a href="#" class="btn btn-sm bg-success-light mr-2">Active</a> </div>
												</td>
												<td class="text-right">
													<div class="dropdown dropdown-action"> <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fas fa-ellipsis-v ellipse_color"></i></a>
														<div class="dropdown-menu dropdown-menu-right"> <a class="dropdown-item" href="edit-booking.html"><i class="fas fa-pencil-alt m-r-5"></i> Edit</a> <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_asset"><i class="fas fa-trash-alt m-r-5"></i> Delete</a> </div>
													</div>
												</td>
											</tr>
											<tr>
												<td>BKG-0002</td>
												<td>
													<h2 class="table-avatar">
                                                        <a href="profile.html" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="images/img_9.jpg" alt="User Image"></a>
                                                        <a href="profile.html">Starbucks <span>#0002</span></a>
                                                    </h2>
                                                </td>
												
												<td>8</td>
												<td>21-03-2020</td>
												<td>09.00 AM</td>
												
												<td>
													<div class="actions"> <a href="#" class="btn btn-sm bg-success-light mr-2">Inactive</a> </div>
												</td>
												<td class="text-right">
													<div class="dropdown dropdown-action"> <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fas fa-ellipsis-v ellipse_color"></i></a>
														<div class="dropdown-menu dropdown-menu-right"> <a class="dropdown-item" href="edit-booking.html"><i class="fas fa-pencil-alt m-r-5"></i> Edit</a> <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_asset"><i class="fas fa-trash-alt m-r-5"></i> Delete</a> </div>
													</div>
												</td>
											</tr>
											<tr>
												<td>BKG-0003</td>
												<td>
													<h2 class="table-avatar">
                                                    <a href="profile.html" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="images/img_2.jpeg" alt="User Image"></a>
                                                    <a href="profile.html">Jokopi <span>#0003</span></a>
                                                    </h2> 
                                                </td>
												
												<td>10</td>
												<td>21-03-2020</td>
												<td>08.00 AM</td>
												
												<td>
													<div class="actions"> <a href="#" class="btn btn-sm bg-success-light mr-2">Active</a> </div>
												</td>
												<td class="text-right">
													<div class="dropdown dropdown-action"> <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fas fa-ellipsis-v ellipse_color"></i></a>
														<div class="dropdown-menu dropdown-menu-right"> <a class="dropdown-item" href="edit-booking.html"><i class="fas fa-pencil-alt m-r-5"></i> Edit</a> <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_asset"><i class="fas fa-trash-alt m-r-5"></i> Delete</a> </div>
													</div>
												</td>
											</tr>
											<tr>
												<td>BKG-0004</td>
												<td>
													<h2 class="table-avatar">
                                                    <a href="profile.html" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="images/img_9.jpg" alt="User Image"></a>
                                                    <a href="profile.html">Starbucks <span>#0004</span></a>
                                                    </h2>
                                                </td>

												<td>15</td>
												<td>21-03-2020</td>
												<td>12.00 AM</td>
												
												<td>
													<div class="actions"> <a href="#" class="btn btn-sm bg-success-light mr-2"> Active</a> </div>
												</td>
												<td class="text-right">
													<div class="dropdown dropdown-action"> <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fas fa-ellipsis-v ellipse_color"></i></a>
														<div class="dropdown-menu dropdown-menu-right"> <a class="dropdown-item" href="edit-booking.html"><i class="fas fa-pencil-alt m-r-5"></i> Edit</a> <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_asset"><i class="fas fa-trash-alt m-r-5"></i> Delete</a> </div>
													</div>
												</td>
											</tr>
											<tr>
												<td>BKG-0005</td>
												<td>
													<h2 class="table-avatar">
                                                    <a href="profile.html" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="images/img_2.jpeg" alt="User Image"></a>
                                                    <a href="profile.html">Jokopi <span>#0005</span></a>
                                                    </h2>
                                                </td>
										
												<td>12</td>
												<td>21-03-2020</td>
												<td>06.00 AM</td>
											
												<td>
													<div class="actions"> <a href="#" class="btn btn-sm bg-success-light mr-2">Active</a> </div>
												</td>
												<td class="text-right">
													<div class="dropdown dropdown-action"> <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fas fa-ellipsis-v ellipse_color"></i></a>
														<div class="dropdown-menu dropdown-menu-right"> <a class="dropdown-item" href="edit-booking.html"><i class="fas fa-pencil-alt m-r-5"></i> Edit</a> <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_asset"><i class="fas fa-trash-alt m-r-5"></i> Delete</a> </div>
													</div>
												</td>
											</tr>
											<tr>
												<td>BKG-0006</td>
												<td>
													<h2 class="table-avatar">
                                                        <a href="profile.html" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="images/img_9.jpg" alt="User Image"></a>
                                                        <a href="profile.html">Starbucks <span>#0006</span></a>
                                                    </h2>
                                                </td>
									
												<td>7</td>
												<td>21-03-2020</td>
												<td>10.00 AM</td>
												
												<td>
													<div class="actions"> <a href="#" class="btn btn-sm bg-success-light mr-2">Inactive </a> </div>
												</td>
												<td class="text-right">
													<div class="dropdown dropdown-action"> <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fas fa-ellipsis-v ellipse_color"></i></a>
														<div class="dropdown-menu dropdown-menu-right"> <a class="dropdown-item" href="edit-booking.html"><i class="fas fa-pencil-alt m-r-5"></i> Edit</a> <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_asset"><i class="fas fa-trash-alt m-r-5"></i> Delete</a> </div>
													</div>
												</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div id="delete_asset" class="modal fade delete-modal" role="dialog">
				<div class="modal-dialog modal-dialog-centered">
					<div class="modal-content">
						<div class="modal-body text-center"> <img src="assets/img/sent.png" alt="" width="50" height="46">
							<h3 class="delete_class">Are you sure want to delete this Asset?</h3>
							<div class="m-t-20"> <a href="#" class="btn btn-white" data-dismiss="modal">Close</a>
								<button type="submit" class="btn btn-danger">Delete</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

    











	<script data-cfasync="false" src="../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
	<script src="assets_2/js/jquery-3.5.1.min.js"></script>
	<script src="assets_2/js/popper.min.js"></script>
	<script src="assets_2/js/bootstrap.min.js"></script>
	<script src="assets_2/plugins/datatables/jquery.dataTables.min.js"></script>
	<script src="assets_2/plugins/datatables/datatables.min.js"></script>
	<script src="assets_2/plugins/slimscroll/jquery.slimscroll.min.js"></script>
	<script src="assets_2/plugins/raphael/raphael.min.js"></script>
	<script src="assets_2/js/script.js"></script>


</html>

@endsection