@extends('layouts.header')

@section('title', 'Operasional')

@section('sidebar')

<div class="left side-menu">
    <div class="slimscroll-menu" id="remove-scroll">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu mt-5" id="side-menu">
                <li class="menu-title">Utama</li>
                <li>
                    <a href="/dashboard" class="waves-effect">
                        <i class="mdi mdi-view-dashboard"></i><span> Dashboard </span>
                    </a>
                </li>
                <li>
                    <a href="/barang" class="waves-effect"><i class="ion-android-archive"></i><span> Barang </span></a>
                </li>
                <li>
                    <a href="/penjualan" class="waves-effect"><i class="mdi mdi-cart"></i><span> Penjualan </span></a>
                </li>
                <li>
                    <a href="#" class="waves-effect"><i class="mdi mdi-cart"></i><span> Pembelian </span></a>
                </li>
                <li>
                    <a href="/operasional" class="waves-effect"><i class="mdi mdi-truck"></i><span> Operasional </span></a>
                </li>

                <li class="menu-title">Laporan</>

                <li>
                    <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-calendar-check"></i><span> Laporan <span class="float-right menu-arrow"><i class="mdi mdi-chevron-right"></i></span> </span></a>
                    <ul class="submenu">
                        <li><a href="/laporan-barang">Laporan Barang</a></li>
                        <li><a href="#">Laporan Penjualan</a></li>
                        <li><a href="#">Laporan Pembelian</a></li>
                        <li><a href="/laporan-operasional">Laporan Operasional</a></li>
                    </ul>
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
                        <h4 class="page-title">Operasional</h4>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0);">Utama</a></li>
                            <li class="breadcrumb-item active">Operasional</li>
                        </ol>
                    </div>
                </div>
            </div>
            <!-- end row -->

            <div class="row">
                <div class="col-12">
                    <div class="card m-b-20">
                        <div class="card-body">
                            
                            <h4 class="mt-0 header-title">Operasional</h4>
                            <p class="text-muted m-b-30">
                                Update terakhir pada tanggal
                            </p>

                            <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                <thead>
                                    <tr>
                                        <th><strong>Tanggal</strong></th>
                                        <th><strong>Keterangan</strong></th>
                                        <th><strong>Biaya</strong></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($reports as $report)
                                    <tr>
                                        <td>{{ $report->tanggal}}</td>
                                        <td>{{ $report->keterangan }}</td>
                                        <td>{{ $report->biaya }}</td>
                                    </tr>  
                                    @empty
                                    <tr>
                                        <td colspan="7" class="text-center">
                                            Data Kosong
                                        </td>
                                    </tr>
                                    @endforelse
                                    
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