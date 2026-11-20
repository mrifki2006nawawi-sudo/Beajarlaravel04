@extends('layout.master')

@section('content')
<div class="row g-4">
    <!-- Card Banner / Welcome -->
    <div class="col-12">
        <div class="p-4 mb-2 bg-primary text-white rounded-3 shadow-sm">
            <h2 class="fw-bold">Halaman Latihan Blade & Bootstrap</h2>
            <p class="mb-0">Daftar Mata Kuliah Semester Ini.</p>
        </div>
    </div>

    <!-- Form Input Data -->
    <div class="col-md-5">
        <div class="card shadow-sm border-0">
            <div class="card-header bg-dark text-white fw-semibold">
                Tambah Mata Kuliah Baru
            </div>
            <div class="card-body">
                <form>
                    <div class="mb-3">
                        <label class="form-label">Kode Mata Kuliah</label>
                        <input type="text" class="form-control" placeholder="Contoh: D4SM-101">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Nama Mata Kuliah</label>
                        <input type="text" class="form-control" placeholder="Masukkan nama mata kuliah...">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">SKS</label>
                        <input type="number" class="form-control" placeholder="Contoh: 3">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Dosen Pengampu</label>
                        <input type="text" class="form-control" placeholder="Masukkan nama dosen...">
                    </div>
                    <button type="button" class="btn btn-primary w-100">Simpan Mata Kuliah</button>
                </form>
            </div>
        </div>
    </div>

    <!-- Tabel Data & Tombol Aksi -->
    <div class="col-md-7">
        <div class="card shadow-sm border-0">
            <div class="card-header bg-dark text-white fw-semibold d-flex justify-content-between align-items-center">
                <span>Daftar Mata Kuliah</span>
                <span class="badge bg-info text-dark">3 Data</span>
            </div>
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-hover align-middle mb-0">
                        <thead class="table-light">
                            <tr>
                                <th>No</th>
                                <th>Kode</th>
                                <th>Mata Kuliah</th>
                                <th>SKS</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>D4SM-401</td>
                                <td>Pemrograman Web Framework</td>
                                <td>3</td>
                                <td>
                                    <button type="button" class="btn btn-warning btn-sm">Edit</button>
                                    <button type="button" class="btn btn-danger btn-sm">Hapus</button>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>D4SM-402</td>
                                <td>Pengembangan Game & AR</td>
                                <td>3</td>
                                <td>
                                    <button type="button" class="btn btn-warning btn-sm">Edit</button>
                                    <button type="button" class="btn btn-danger btn-sm">Hapus</button>
                                </td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>D4SM-403</td>
                                <td>Desain Grafis & Multimedia</td>
                                <td>2</td>
                                <td>
                                    <button type="button" class="btn btn-warning btn-sm">Edit</button>
                                    <button type="button" class="btn btn-danger btn-sm">Hapus</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection