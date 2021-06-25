@extends('layouts.header')

@section('title', 'Barang')

@section('sidebar')

<div class="left side-menu">
    <div class="slimscroll-menu" id="remove-scroll">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu" id="side-menu">
                <li class="menu-title">Utama</li>
                <li>
                    <a href="/dashboard" class="waves-effect">
                        <i class="mdi mdi-view-dashboard"></i><span> Dashboard </span>
                    </a>
                </li>
                <li>
                    <a href="/barang" class="waves-effect active"><i class="mdi mdi-calendar-check"></i><span> Barang </span></a>
                </li>
                <li>
                    <a href="/penjualan" class="waves-effect"><i class="mdi mdi-calendar-check"></i><span> Penjualan </span></a>
                </li>
                <li>
                    <a href="#" class="waves-effect"><i class="mdi mdi-calendar-check"></i><span> Pembelian </span></a>
                </li>
                <li>
                    <a href="/operasional" class="waves-effect"><i class="mdi mdi-calendar-check"></i><span> Operasional </span></a>
                </li>

                <li class="menu-title">Laporan</>

                <li>
                    <a href="#" class="waves-effect"><i class="mdi mdi-calendar-check"></i><span> Laporan Bulanan </span></a>
                </li>

            </ul>

        </div>
        <!-- Sidebar -->
        <div class="clearfix"></div>

    </div>
    <!-- Sidebar -left -->

</div>
<!-- Left Sidebar End -->
@endsection

@section('content')

<div class="content-page">
    <!-- Start content -->
    <div class="content">
        <div class="container-fluid">

            <div class="row">
                <div class="col-sm-12">
                    <div class="page-title-box">
                        <h4 class="page-title">Data Barang</h4>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0);">Utama</a></li>
                            <li class="breadcrumb-item active">Barang</li>
                        </ol>
                    </div>
                </div>
            </div>
            <!-- end row -->

            <div class="row">
                <div class="col-12">
                    <div class="card m-b-20">
                        <div class="card-body">

                            <h4 class="mt-0 header-title">Stok Barang</h4>
                            <p class="text-muted m-b-30">
                                Update terakhir pada tanggal 13/02/2021
                                <div class="button-items">
                                    <a href="/barang/tambah-barang">
                                        <button type="button" class="btn btn-secondary waves-effect">+ Tambah</button>
                                    </a>
                                    <a href="#">
                                        <button type="button" class="btn btn-secondary waves-effect">Edit</button>
                                    </a>
                                </div>
                            </p>
                            
                            <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                <thead>
                                <tr>
                                    <th>Keterangan</th>
                                    <th>Nama Barang</th>
                                    <th>Ukuran</th>
                                    <th>Spesifikasi</th>
                                    <th>Jumlah (BAL)</th>
                                    <th>Jumlah (LBR)</th>
                                    <th>Jumlah Total</th>
                                </tr>
                                </thead>


                                <tbody>
                                <tr>
                                    <td>Print Anggrek Mas 10KG</td>
                                    <td>Semi Transparan</td>
                                    <td>35 x 55 cm</td>
                                    <td>750D 10 x 30</td>
                                    <td>190</td>
                                    <td>1000</td>
                                    <td>1900</td>
                                </tr>
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div> <!-- end col -->
            </div> <!-- end row -->

        </div> <!-- container-fluid -->

    </div> <!-- content -->
    
</div>

@endsection