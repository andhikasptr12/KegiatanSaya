@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row mb-3" style="margin-top: -70px">
            <div class="col-md-12">
                <div class="card border-0">
                    <div class="card-body">
                        <div class="mb-3">
                            <a href="{{route('tambah-data.siswa')}}" class="btn btn-success">Tambah Siswa</a>
                        </div>
                        <form action="" method="post">
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="form-group">
                                        <input type="date" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <div class="form-group">
                                        <input type="date" class="form-control">
                                    </div>
                                </div>
                                <div>
                                    <button class="btn btn-primary" type="submit">Cari Data</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card border-0">
                        <div class="card-body">
                            <div class="mt-3">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>NISN</th>
                                            <th>Nama Siswa</th>
                                            <th>Kelas</th>
                                            <th>Jurusan</th>
                                            <th>Status</th>
                                            <th>Option</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach ($students as $student)
                                            
                                        <tr>
                                            <td>{{$student->students->first()->nisn ?? 'belum Tersedia'}}</td>
                                            <td>{{$student->name}}</td>
                                            <td>{{$student->students->first()->class ?? 'belum Tersedia'}}</td>
                                            <td>{{$student->students->first()->major ?? 'belum Tersedia'}}</td>
                                            <td>{{$student->students->first()->status ?? 'belum Tersedia'}}</td>
                                            <td>
                                                <form action="{{route('destroy.data.siswa', $student->id)}}" method="post">
                                                    @csrf
                                                    @method('DELETE')
                                                    <a href="{{route('edit-data.siswa', $student->id)}}" class="btn btn-primary btn-sm">Edit</a>
                                                    <button type="submit" class=" btn btn-danger btn-sm">Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    </tbody>
                                    @endforeach
                                </table>
                            </div>
                        </div>
                     </div>
                </div>
            </div>
        </div>
@endsection