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
                    <a href="/" class="waves-effect">
                        <i class="mdi mdi-view-dashboard"></i><span> Dashboard </span>
                    </a>
                </li>
                <li>
                    <a href="/barang" class="waves-effect active"><i class="ion-android-archive"></i><span> Barang </span></a>
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
                                    <a href="{{ route('barang.create') }}">
                                        <button type="button" class="btn btn-success waves-effect">+ Tambah</button>
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
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($barangs as $barang)
                                    <tr>
                                        <td>{{ $barang->keterangan }}</td>
                                        <td>{{ $barang->nama_barang }}</td>
                                        <td>{{ $barang->ukuran }}</td>
                                        <td>{{ $barang->spesifikasi }}</td>
                                        <td>{{ $barang->jumlah_bal }}</td>
                                        <td>{{ $barang->jumlah_lbr }}</td>
                                        <td>{{ $barang->jumlah_total }}</td>
                                        <td>
                                            <div class="button-items">
                                                <div class="text-left">
                                                    <a class="btn btn-warning waves-effect" href="{{ route('barang.edit', $barang->id) }}">Edit</a> 
                                                    <button type="button" class="btn btn-danger waves-effect waves-light" data-toggle="modal" data-target="#delete">Hapus</button>
                                                </div>
                                            </div>

                                            <form  method="post" action="{{ route('barang.destroy', $barang->id) }}">

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

                                        </td>
                                    </tr>
                                    @empty
                                    <tr>
                                        <td colspan="8" class="text-center">
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