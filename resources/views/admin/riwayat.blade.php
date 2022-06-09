@extends('admin.dashboard')

@section('container')   
    <table class="table table-light table-bordered mx-auto" style="width: 80rem; margin-top: 1.3rem;">
        <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">Nama</th>
            <th scope="col">No. Wa/Telp</th>
            <th scope="col">Layanan</th>
            <th scope="col">Merk</th>
            <th scope="col">Plat Nomor</th>
            <th scope="col">Tanggal</th>                       
          </tr>
        </thead>
        <tbody>
          @foreach($post as $posts)
          <tr>
            <th scope="row">{{$loop->iteration}}</th>
            <td>{{$posts->nama }}</td>
            <td>{{$posts->notelp }}</td>
            <td>{{$posts->layanan }}</td>
            <td>{{$posts->merk }}</td>
            <td>{{$posts->plat }}</td>
            <td>{{$posts->tanggal }}</td>
          </tr>
          @endforeach
        </tbody>
      </table>
  </div>
@endsection