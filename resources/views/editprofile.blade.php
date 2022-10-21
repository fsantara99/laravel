@extends('layouts.main')

@section('container')

<link rel="stylesheet" type="text/css" href="{{url('css/profile.css')}} >
<div class="container rounded bg-white mt-5 mb-5">
  <div class="row">
      <div class="col-md-3 border-right">
          <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="" width="150px" src="https://krs.umm.ac.id/Poto/2017/201710370311227.JPG"><span class="font-weight-bold">*</span><span class="text-black-50">Foto harus berukuran 3x4 Memakai Almamater, Background Biru, Format JPG (Max 1 MB)</span><span> </span></div>
      </div>
      <div class="col-md-5 border-right">
          <div class="p-3 py-5">
              <div class="d-flex justify-content-between align-items-center mb-3">
                  <h4 class="text-right">Edit Profile</h4>
              </div>
              <div class="row mt-2">
                  <div class="col-md-12"><label class="labels">Faried Abimanyu</label><br><a></a></div>
                  <div class="col-md-12"><label class="labels">201710370311227</label><br><a></a></div>
                  <div class="col-md-12"><label class="labels">Informatika</label><br><a></a></div>
                  <div class="col-md-12"><label class="labels">Fakultas</label><br><a></a></div>
              </div>
              <div class="row mt-3">
                  <div class="col-md-12"><label class="labels">Nomer WA</label><input type="tel" id="phone" name="phone" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" required class="form-control" value=""></div>
                  <div class="col-md-12"><label class="labels">Tempat / Kota Kelahiran</label><input type="text" class="form-control" value=""></div>
                  <div class="col-md-12"><label class="labels">Tanggal Lahir</label><input type="date" class="form-control" value=""></div>
              </div>
              <div class="mt-5 text-center"><button class="btn btn-primary profile-button" onclick="location.href='/profile'" type="button">Save Profile</button></div>
          </div>
      </div>
      <div class="col-md-4">
          <div class="p-3 py-5">
              <div class="d-flex justify-content-between align-items-center experience"><span class="border px-3 p-1 add-experience"><i class="fa fa-plus"></i>&nbsp;Additional Info</span></div><br>
              <div class="col-md-12"><label class="labels">E-mail</label><input type="text" class="form-control" value=""></div> <br>
              <div class="col-md-12"><label class="labels">Additional Details</label><input type="text" class="form-control"    value=""></div>
          </div>
      </div>
  </div>
</div>
</div>
</div>
  

@endsection
