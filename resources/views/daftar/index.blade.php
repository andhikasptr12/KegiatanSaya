@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                    <div class="card mb-3" style="width: 20rem; height: 12rem; border-radius: 8px;"></div>
                    <div class="row">
                        <div class="col-md-5">
                            <p class="text-muted">Kode Kegiatan</p>
                            <p class="text-muted">Nama Kegiatan</p>
                            <p class="text-muted">Tanggal</p>
                            <p class="text-muted">Peserta</p>
                            <p class="text-muted">Status Kegiatan</p> 
                        </div> 
                        <div class="row">
                            <div class="col">
                                <p class="text-muted">14124</p>
                                <p class="text-muted">Rapat osis</p>
                                <p class="text-muted">10-28-2021</p>
                                <p class="text-muted">AB</p>
                                <p class="text-muted">Tersedia</p>   
                           </div>
                        </div>
                    </div>
                    <p class=" text-muted">Hallo , Yuk datang dan ramaikan acara pensi tahunan Yang diselanggarakan untuk memperingati Ulang Tahun Sekolah kita dijamin seru loh..!</p   >
            </div>
            <div class="row">
                <div class="card ml-5" style="height: 19rem; width:46rem; border-radius: 8px;">
                    <div class="card-body">
                        <div class="row">
                           <div class="col-md-4 mr-3">
                               <div class="form-group">
                                   <label for="">Nisn</label>
                                   <input type="text" class="form-control" id="">
                               </div>
                           </div>
                        <div class="row">
                            <div class="col-md-11 mr-4 mb-4">
                                <div class="form-group">
                                    <label for="">Nama Lengkap</label>
                                    <input type="text" class="form-control" id="">
                                </div>
                            </div>
                      </div>
                         <div class="row">
                                <div class="col-md-11 ml-2">
                                    <div class="form-group">
                                        <label for="">Kelas</label>
                                        <input type="text" class="form-control" id="">
                                    </div>
                                </div>
                          </div>
                     </div>
                     <div class="row">
                        <div class="col-md-4 mr-3">
                            <div class="form-group">
                                <label for="">Jurusan</label>
                                <input type="text" class="form-control" id="">
                            </div>
                        </div>
                     <div class="row">
                         <div class="col-md-11 mr-4">
                             <div class="form-group">
                                 <label for="">Kode Kegiatan</label>
                                 <input type="text" class="form-control" id="">
                             </div>
                         </div>
                   </div>
                      <div class="row">
                             <div class="col-md-11 ml-2">
                                 <div class="form-group">
                                     <label for="">IDR</label>
                                     <input type="text" class="form-control" id="">
                                 </div>
                             </div>
                       </div>
                  </div>
                        <button class="btn btn-outline-success btn-md mt-4" style="padding: 5px; border-radius: 5px; width:11.5rem; border-width: thin;
                        cursor: pointer;">Simpan Perubahan</button>
                    </div>
                </div>
            </div>
        </div>
        </div> 
         </div>
     </div>
@endsection
