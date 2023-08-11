@extends('layouts.main')

@section('title_content', 'Barang Masuk')

@section('page_title', 'Data Barang Masuk')

@section('content')
        <div class="container-fluid py-1 px-3">
            @section('breadcrumb')
                <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
                <li class="breadcrumb-item text-sm"><a class="opacity-5 text-white" href="javascript:;">Pages</a></li>
                <li class="breadcrumb-item text-sm text-white active" aria-current="page">Barang Masuk</li>
                </ol>
                <h6 class="font-weight-bolder text-white mb-0">Barang Masuk</h6>
            @endsection
            <div class="col-12 text-end justify-content-end mb-3">
                <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    <i class="fas fa-plus"></i>&nbsp;&nbsp;Tambah Barang Masuk
                </button>
            </div>
                <div class="container-fluid py-4">
                    <div class="row">
                    <div class="col-12">
                        <div class="card mb-4">
                        <div class="card-header pb-0">
                            <h6>Product</h6>
                        </div>
                        <div class="card-body px-0 pt-0 pb-2">
                            <div class="table-responsive p-0">
            
                            <table class="table align-items-center mb-0">
                                <thead>
                                <tr>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">No</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">ID Barang</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nama Barang</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Stok Barang Masuk</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Kode Barang</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Foto Barang</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>
                                    <div class="d-flex px-2 py-1">
                                        <div>
            
                                        </div>
                                        <div class="d-flex flex-column justify-content-center">
                                        <p class="text-xs text-secondary text-xs font-weight-bold">1</p>
                                        </div>
                                    </div>
                                    </td>
                                    <td>
                                    <p class="text-xs font-weight-bold mb-0">B0001</p>
                                </td>
                                <td class="align-middle text-center text-sm">
                                    <span class="text-secondary text-xs font-weight-bold">CPU</span>
                                </td>
                                <td class="align-middle text-center">
                                    <span class="text-secondary text-xs font-weight-bold">30</span>
                                </td>
                                <td class="align-middle text-center">
                                    <span class="text-secondary text-xs font-weight-bold">001</span>
                                </td>
                                <td class="align-middle text-center">
                                    <img src="" alt="Foto Barang" width="50" height="50">
                                    </td>
                                </tr>
            
                                <tr>
                                    <td>
                                    <div class="d-flex px-2 py-1">
                                        <div>
            
                                        </div>
                                        <div class="d-flex flex-column justify-content-center">
                                        <p class="text-xs text-secondary text-xs font-weight-bold">2</p>
                                        </div>
                                    </div>
                                    </td>
                                    <td>
                                    <p class="text-xs font-weight-bold mb-0">B0003</p>
                                </td>
                                <td class="align-middle text-center text-sm">
                                    <span class="text-secondary text-xs font-weight-bold">PC</span>
                                </td>
                                <td class="align-middle text-center">
                                    <span class="text-secondary text-xs font-weight-bold">20</span>
                                </td>
                                <td class="align-middle text-center">
                                    <span class="text-secondary text-xs font-weight-bold">003</span>
                                </td>
                                <td class="align-middle text-center">
                                    <img src="" alt="Foto Barang" width="50" height="50">
                                    </td>
                                </tr>
            
                                <tr>
                                    <td>
                                    <div class="d-flex px-2 py-1">
                                        <div>
            
                                        </div>
                                        <div class="d-flex flex-column justify-content-center">
                                        <p class="text-xs text-secondary text-xs font-weight-bold">3</p>
                                        </div>
                                    </div>
                                    </td>
                                    <td>
                                    <p class="text-xs font-weight-bold mb-0">B0002</p>
                                </td>
                                <td class="align-middle text-center text-sm">
                                    <span class="text-secondary text-xs font-weight-bold">LED</span>
                                </td>
                                <td class="align-middle text-center">
                                    <span class="text-secondary text-xs font-weight-bold">50</span>
                                </td>
                                <td class="align-middle text-center">
                                    <span class="text-secondary text-xs font-weight-bold">002</span>
                                </td>
                                <td class="align-middle text-center">
                                    <img src="" alt="Foto Barang" width="50" height="50">
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                            </div>
                        </div>
                        </div>
                    </div>
                    </div>
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Tambah Barang Masuk </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="mb-3 row">
                                <label for="nama_user" class="col-sm-3 col-form-label">Nama User</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="nama_user" name="nama_user" required>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Keluar</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </div>
            </div>
        </div>
        
@endsection