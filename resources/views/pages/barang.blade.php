@extends('layouts.header')

@section('title', 'Barang')

@section('sidebar')

<div class="left side-menu">
    <div class="slimscroll-menu" id="remove-scroll">

        <!--- Sidemenu -->
        @include('layouts.sidebar')
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
                                    <a href="barang-tambah.html">
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
                                    <th>No</th>
                                    <th>Nama Barang</th>
                                    <th>Kode Barang</th>
                                    <th>Stock</th>
                                    <th>Satuan</th>
                                    <th>h_modal(Rp)</th>
                                    <th>h_jual(Rp)</th>
                                    <th>Action</th>
                                </tr>
                                </thead>


                                <tbody>
                                    <?php $no=1; ?>
                                    @foreach ($barang as $data)
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>{{ $data->nama_barang }}</td>
                                        <td>{{ $data->kode_barang }}</td>
                                        <td>{{ $data->stock }}</td>
                                        <td>{{ $data->satuan }}</td>
                                        <td>{{ $data->h_modal }}</td>
                                        <td>{{ $data->h_jual }}</td>
                                        <td>
                                            <a href="" class="btn btn-secondary waves-effect" >Hapus</a>
                                        </td>
                                    </tr>
                                    @endforeach
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