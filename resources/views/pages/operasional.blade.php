@extends('layouts.header')

@section('title', 'Operasional')

@section('sidebar')

<div class="left side-menu">
    <div class="slimscroll-menu" id="remove-scroll">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu" id="side-menu">
                <li class="menu-title">Utama</li>
                <li>
                    <a href="/" class="waves-effect">
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
                    <a href="/operasional" class="waves-effect active"><i class="mdi mdi-truck"></i><span> Operasional </span></a>
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
                                <div class="button-items">
                                    <a href="{{ route('operasional.create') }}">
                                        <button type="button" class="btn btn-success waves-effect">+ Tambah</button>
                                    </a>
                                </div>
                            </p>

                            <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                <thead>
                                    <tr>
                                        <th>Keterangan</th>
                                        <th>Biaya</th>
                                        <th>Tanggal</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($operasionals as $operasional)
                                    <tr>
                                        <td>{{ $operasional->keterangan }}</td>
                                        <td>{{ $operasional->biaya }}</td>
                                        <td>{{ $operasional->tanggal}}</td>
                                        <td>
                                            <div class="button-items">
                                                <div class="text-left">
                                                    <div class="text-left">
                                                        <a class="btn btn-warning waves-effect" href="{{ route('operasional.edit', $operasional->id) }}">Edit</a> 
                                                        <button type="button" class="btn btn-danger waves-effect waves-light" data-toggle="modal" data-target="#delete">Hapus</button>
                                                    </div>
                                                </div>

                                                <form method="post" action="{{ route('operasional.destroy', $operasional->id) }}">

                                                @csrf
                                                @method('DELETE')
                                                    {{-- Modal --}}
                                                    <div class="modal fade bs-example-modal-center" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true" id="delete">
                                                        <div class="modal-dialog modal-dialog-centered modal-sm">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title mt-0">DELETE</h5>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <p>Apakah Yakin Menghapus Data Ini ?</p>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="submit" class="btn btn-danger">Hapus</button>
                                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Kembali</button>
                                                                </div>
                                                            </div><!-- /.modal-content -->
                                                        </div><!-- /.modal-dialog -->
                                                    </div><!-- /.modal -->
                                                
                                                </form>

                                            </div>
                                        </td>
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