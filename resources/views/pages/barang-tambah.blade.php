@extends('layouts.header')

@section('title', 'Tambah Barang')
    
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
                            <li class="breadcrumb-item"><a href="javascript:void(0);">Barang</a></li>
                            <li class="breadcrumb-item active">Tambah Barang</li>
                        </ol>
                    </div>
                </div>
            </div>
            <!-- end row -->

            <div class="row">
                <div class="col-lg-12">
                    <div class="card m-b-20">
                        <div class="card-body">

                            <h4 class="mt-0 header-title">Tambah Barang</h4>
                            <p class="text-muted m-b-30 ">Tambah barang baru.</p>

                            <form class="" action="#">
                                <div class="form-group">
                                    <label>Keterangan</label>
                                    <input type="text" class="form-control" required placeholder="Type something"/>
                                </div>

                                <div class="form-group">
                                    <label>Nama Barang</label>
                                    <input type="text" class="form-control" required placeholder="Type something"/>
                                </div>

                                <div class="form-group">
                                    <label>Ukuran</label>
                                    <input type="text" class="form-control" required placeholder="Type something"/>
                                </div>

                                <div class="form-group">
                                    <label>Spesifikasi</label>
                                    <input type="text" class="form-control" required placeholder="Type something"/>
                                </div>

                                <div class="form-group">
                                    <label>Jumlah (Bar)</label>
                                    <div>
                                        <input data-parsley-type="digits" type="text"
                                                class="form-control" required
                                                placeholder="Enter only numbers"/>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label>Jumlah (Lbr)</label>
                                    <div>
                                        <input data-parsley-type="number" type="text"
                                                class="form-control" required
                                                placeholder="Enter only numbers"/>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label>Jumlah (Total)</label>
                                    <div>
                                        <input data-parsley-type="number" type="text"
                                                class="form-control" required
                                                placeholder="Enter only numbers"/>
                                    </div>
                                </div>

                                <div class="form-group mb-0">
                                    <div>
                                        <button type="submit" class="btn btn-primary waves-effect waves-light mr-1">
                                            Submit
                                        </button>
                                        <button type="reset" class="btn btn-secondary waves-effect">
                                            Cancel
                                        </button>
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>
                </div> <!-- end col -->
            </div> <!-- end row -->

        </div> <!-- container-fluid -->

    </div> <!-- content -->

    <footer class="footer">
            © 2018 - 2019 Lexa - <span class="d-none d-sm-inline-block"> Crafted with <i class="mdi mdi-heart text-danger"></i> by Themesbrand</span>.
    </footer>
    
</div>

@endsection