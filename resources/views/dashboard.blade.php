@extends('layouts.sidenav')
@section('container')

<div class="container">
    <div class="row row-cols-1 row-cols-md-3">
        <div class="col pt-4">
            <div class="card h-100">
                <div class="card-body p-4" id="total">
                    <h5 class="card-title">Saldo : </h5>
                    <h5 class="card-title">Rp. @{{ csrf_token($total) }} ,-</h5>
                </div>
                <div class="card-footer">
                    <small>More Info</small>
                </div>
            </div>
        </div>
        <div class="col pt-4">
            <div class="card h-100">
                <div class="card-body p-4" id="hutang">
                    <h5 class="card-title">Hutang : </h5>
                    <h5 class="card-title">Rp. 0,-</h5>
                </div>
                <div class="card-footer">
                    <small>More Info</small>
                </div>
            </div>
        </div>
        <div class="col pt-4">
            <div class="card h-100">
                <div class="card-body p-4" id="piutang">
                    <h5 class="card-title">Piutang : </h5>
                    <h5 class="card-title">Rp 0,- </h5>
                </div>
                <div class="card-footer">
                    <small>More Info</small>
                </div>
            </div>
        </div>
    </div>

    <div class="row row-cols-1 row-cols-md-3 justify-content-center pt-4">
        <div class="col">
            <div class="card h-100 tambah" data-bs-toggle="modal" data-bs-target="#exampleModal"
                data-bs-whatever="@getbootstrap">
                <div class="card-body p-4 text-center">
                    <h5 class="card-title">Tambah Catatan</h5>
                    <i class="fs-3 bi-plus-circle-fill"></i>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable ">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Catatan</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{ url('add-mutation') }}" method="post">
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="nominal" class="col-form-label">Nominal</label>
                            <input type="number" class="form-control" id="nominal" min="0" name="total" required>
                        </div>
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Kategori</label>
                            <select name="category" id="" class="form-select" required>
                                @foreach($categories as $cat){
                                <option value="{{ $cat->category_id }}">{{ $cat->category_name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="tanggal" class="col-form-label">Tanggal</label>
                            <input type="date" class="form-control" id="tanggal" name="date" required>
                        </div>
                        <div class="mb-3">
                            <label for="waktu" class="col-form-label">Waktu</label>
                            <input type="time" class="form-control" id="waktu" name="time" required>
                        </div>
                        <div class="mb-3">
                            <label for="catatan" class="col-form-label">Catatan/Keterangan:</label>
                            <textarea class="form-control" id="catatan" required></textarea>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="mt-5">
        <h6><b>Riwayat Terakhir</b></h6>
    </div>
    <div class="table-responsive mt-2">
        <table id="example" class="display" style="width:100%">
            <thead>
                <tr>
                    <th>Keterangan</th>
                    <th>Waktu</th>
                    <th>Tanggal Transaksi</th>
                    <th>Jumlah</th>
                    <th>Kategori</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>menalangi kekurangan seminar</td>
                    <td>19.00</td>
                    <td>27 Februari 2021</td>
                    <td>250.000</td>
                    <td>Piutang</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>






@endsection
