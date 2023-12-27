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
                            <h4 class="card-title float-left mt-2"></h4>
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
                                            <th>ID RESERVASI</th>
                                            <th>ID USER</th>
                                            <th>USERNAME</th>
                                            <th>TANGGAL RESERVASI</th>
                                            <th>WAKTU RESERVASI</th>
                                            <th>JUMLAH ORANG</th>
                                            <th>ACTION</th>
                                            < </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($reservasis as $reservasi)
                                            {{-- <tr>
                                                <td>{{ $reservasi->id_reservasi }}</td>
                                                <td>{{ $reservasi->id_user }}</td>
                                                <td>{{ $reservasi->user->username }}</td>
                                                <td>{{ $reservasi->tanggal_reservasi }}</td>
                                                <td>{{ $reservasi->waktu_reservasi }}</td>
                                                <td>{{ $reservasi->jumlah_orang }}</td>
                                                <td>
                                                    <form
                                                        action="{{ route('reservasi.destroy', $reservasi->id_reservasi) }}"
                                                        method="POST" enctype="multipart/form-data">
                                                        @method('delete')
                                                        @csrf
                                                        <button class="btn btn-danger"
                                                            onclick="return confirm('Anda yakin?')"
                                                            type="submit">Clear</button>
                                                    </form>
                                                </td>
                                            </tr> --}}
                                            <tr>
                                                <td>{{ $reservasi->id_reservasi }}</td>
                                                <td>{{ $reservasi->id_user }}</td>
                                                <td>{{ $reservasi->username }}</td>
                                                <td>{{ $reservasi->tanggal_reservasi }}</td>
                                                <td>{{ $reservasi->waktu_reservasi }}</td>
                                                <td>{{ $reservasi->jumlah_orang }}</td>
                                                <td>
                                                    <form
                                                        action="{{ route('vendor.destroy', $reservasi->id_reservasi) }}"
                                                        method="POST" enctype="multipart/form-data">
                                                        @method('delete')
                                                        @csrf
                                                        <button class="btn btn-danger"
                                                            onclick="return confirm('Anda yakin?')"
                                                            type="submit">Clear</button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach

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
                    <div class="modal-body text-center"> <img src="assets/img/sent.png" alt="" width="50"
                            height="46">
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
