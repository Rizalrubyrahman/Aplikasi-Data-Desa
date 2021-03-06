@extends('layouts.app')
@section('title','Tambah Data Penduduk')
@section('content')
 <!-- DataTales Example -->
 <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Tambah Data Penduduk</h6>
    </div>
    <div class="card-body">
        <form action="{{route('penduduk.store')}}" method="post">
            {{ csrf_field() }}
            <div class="form-group">
                <label style="float: left;" for="kk">Kartu Keluarga</label>
                <select class="form-control{{ $errors->has('k_k_id') ? ' is-invalid' : '' }}" id="kk" name="k_k_id">
                    <option selected disabled>--Pilih--</option>
                    @foreach ($kk as $data)
                        <option value="{{$data->id}}" @if(old('k_k_id') == $data->id) selected @endif>{{$data->no_kk}} {{ $data->kepala_keluarga }}</option>
                    @endforeach
                  </select>
                  {!!$errors->first('k_k_id','<span class="invalid-feedback">:message</span>')!!}
            </div>
            <div class="form-group">
                <label>NIK</label>
                <input type="text" name="nik" class="form-control {{$errors->has('nik') ? 'is-invalid' : ''}}" value="{{old('nik')}}" placeholder="Masukan NIK">
                {!!$errors->first('nik','<span class="invalid-feedback">:message</span>')!!}
            </div>
            <div class="form-group">
                <label>Nama Penduduk</label>
                <input type="text" name="nama" class="form-control {{$errors->has('nama') ? 'is-invalid' : ''}}" value="{{old('nama')}}" placeholder="Masukan Nama">
                {!!$errors->first('nama','<span class="invalid-feedback">:message</span>')!!}
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Tempat Lahir</label>
                        <input type="text" name="tempat_lahir" class="form-control {{$errors->has('tempat_lahir') ? 'is-invalid' : ''}}" value="{{old('tempat_lahir')}}" placeholder="Masukan Tempat Lahir">
                        {!!$errors->first('tempat_lahir','<span class="invalid-feedback">:message</span>')!!}
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Tanggal Lahir</label>
                        <input type="date" name="tanggal_lahir" class="form-control {{$errors->has('tanggal_lahir') ? 'is-invalid' : ''}}" value="{{old('tanggal_lahir')}}">
                        {!!$errors->first('tanggal_lahir','<span class="invalid-feedback">:message</span>')!!}
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label>Pekerjaan</label>
                <input type="text" name="pekerjaan" class="form-control {{$errors->has('pekerjaan') ? 'is-invalid' : ''}}" value="{{old('pekerjaan')}}" placeholder="Masukan Pekerjaan">
                <small>*jika belum Ada mohon ketik -</small>
                {!!$errors->first('pekerjaan','<span class="invalid-feedback">:message</span>')!!}
            </div>
            <div class="form-group">
                <label style="float: left;" for="agama">Agama</label>
                <select class="form-control{{ $errors->has('agama_id') ? ' is-invalid' : '' }}" id="agama" name="agama_id">
                    <option  selected disabled>--Pilih--</option>
                    @foreach ($agama as $data)
                        <option value="{{$data->id}}" @if(old('agama_id') == $data->id) selected @endif>{{$data->nama_agama}}</option>
                    @endforeach
                  </select>
                  {!!$errors->first('agama_id','<span class="invalid-feedback">:message</span>')!!}
            </div>
            <div class="row">
                <div class="col-md-6">
                    <label style="float: left;">Jenis Kelamin</label><br><br>
                    <div class="form-check"  style="float: left;">
                        <input class="form-check-input" type="radio" name="jenis_kelamin" id="exampleRadios1" value="Laki-Laki" @if(old('jenis_kelamin') == 'Laki-Laki') checked @endif>
                        <label class="form-check-label" for="exampleRadios1">
                          Laki-Laki
                        </label>
                        <input class="form-check-input ml-2" type="radio" name="jenis_kelamin" id="exampleRadios1" value="Perempuan" @if(old('jenis_kelamin') == 'Perempuan') checked @endif>
                        <label class="form-check-label ml-4" for="exampleRadios1">
                          Perempuan
                        </label>
                      </div>
                      {!!$errors->first('jenis_kelamin','<span class="invalid-feedback">:message</span>')!!}
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label style="float: left;" for="klasifikasi_id">Klasifikasi</label>
                        <select class="form-control{{ $errors->has('klasifikasi_id') ? ' is-invalid' : '' }}" id="klasifikasi_id" name="klasifikasi_id">
                            <option selected disabled>--Pilih--</option>
                            @foreach ($klasifikasi as $data)
                                <option value="{{$data->id}}" @if(old('klasifikasi_id') == $data->id) selected @endif>{{$data->klasifikasi}}</option>
                            @endforeach
                          </select>
                          {!!$errors->first('klasifikasi_id','<span class="invalid-feedback">:message</span>')!!}
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label style="float: left;" for="status">Status Perkawinan</label>
                        <select class="form-control{{ $errors->has('status_perkawinan') ? ' is-invalid' : '' }}" id="status" name="status_perkawinan">
                            <option selected disabled>--Pilih--</option>
                            <option value="BELUM MENIKAH" @if(old('status_perkawinan') == 'BELUM MENIKAH') selected @endif>BELUM MENIKAH</option>
                            <option value="MENIKAH" @if(old('status_perkawinan') == 'MENIKAH') selected @endif>MENIKAH</option>
                          </select>
                          {!!$errors->first('status_perkawinan','<span class="invalid-feedback">:message</span>')!!}
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label style="float: left;" for="warga">Kewarganegaraan</label>
                        <select class="form-control{{ $errors->has('kewarganegaraan') ? ' is-invalid' : '' }}" id="warga" name="kewarganegaraan">
                            <option selected disabled>--Pilih--</option>
                            <option value="WNI" @if(old('kewarganegaraan') == 'WNI') selected @endif>WNI</option>
                            <option value="WNA" @if(old('kewarganegaraan') == 'WNA') selected @endif>WNA</option>
                          </select>
                          {!!$errors->first('kewarganegaraan','<span class="invalid-feedback">:message</span>')!!}
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label>Gololongan Darah</label>
                        <input type="text" name="gol_darah" class="form-control {{$errors->has('gol_darah') ? 'is-invalid' : ''}}" value="{{old('gol_darah')}}" placeholder="Masukan Golongan Darah">
                        <small>*jika tidak tahu mohon ketik -</small>
                        {!!$errors->first('gol_darah','<span class="invalid-feedback">:message</span>')!!}
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label>Pendidikan</label>
                <input type="text" name="pendidikan" class="form-control {{$errors->has('pendidikan') ? 'is-invalid' : ''}}" value="{{old('pendidikan')}}" placeholder="Masukan Pendidikan">
                {!!$errors->first('pendidikan','<span class="invalid-feedback">:message</span>')!!}
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
  </div>
@endsection