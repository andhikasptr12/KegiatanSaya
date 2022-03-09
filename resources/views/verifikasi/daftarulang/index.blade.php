@extends('layouts.app')

@section('content')
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active" aria-current="page">Tambah Data Peserta</li> 
               </ol>
             </nav>

             <div class="card">
                 <div class="card-body">
                     <div class="alert alert-primary" role="alert">
                         <h3>Perhatian !!!</h3>
                            Silahkan isi dibawah ini dengan benar.
                     </div>

                     <form action="" method="post">
                         @csrf

                         <div class="row">
                             <div class="col-md-3">
                                 <div class="form-group">
                                     <label for="">Kode Kegiatan</label>
                                     <input type="text" name="kode kegiatan" class="form-control" id="" placeholder="Silahkan isi kode kegiatan">
                                 </div>
                             </div>
                             <div class="col-md-3">
                                <div class="form-group">
                                    <label for="">NISN</label>
                                    <input type="text" name="nisn" class="form-control" id="" placeholder="Silahkan isi NISN ">
                                </div>
                            </div>
                                <div class="col-md-3">
                                   <div class="form-group">
                                       <label for="">Nama</label>
                                        <input type="text" name="nama" class="form-control" id="" placeholder="Silahkan isi Nama">
                                   </div>
                                </div> 
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="">TGL Daftar</label>
                                        <input type="date" name="tgl_awal" class="form-control" id="" >
                                    </div>
                                </div>
                                <div class="col-md-3">
                                   <div class="form-group">
                                       <select name="daftar_ulang" id="daftar_ulang">
                                           <option value="">Silahkan Pilih Status</option>
                                           <option value="Aktif">Aktif</option>
                                           <option value="Tidak Aktif">Tidak Aktif</option>
                                    </select>
                                   </div>
                                </div>
                                <div class="col-md-12">
                                    <button type="submit" class="btn btn-info">Simpan</button>
                                </div>
                         </div>
                     </form>
                 </div>
             </div>
    </div>
@endsection