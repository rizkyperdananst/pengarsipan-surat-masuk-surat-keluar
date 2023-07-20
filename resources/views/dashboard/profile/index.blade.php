@extends('layouts.dashboard')
@section('title', 'Admin | Profile')
    
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card shadow">
            <div class="card-header">
                <h4>My Profile</h4>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-4">
                        @empty($profile->profile)
                        <img src="{{ url('assets/img/khairunnisa.jpeg') }}" alt="Profile Default" class="img img-fluid">
                        @else
                        <img src="{{ url('storage/profile/'. $profile->profile) }}" alt="Profle New" class="img img-fluid">
                        @endempty
                    </div>
                    <div class="col-md-6 ms-5">
                        <h4 class="fw-bold">Full Name</h4>
                        <h5>{{ $profile->fullname }}</h5>
                        <hr>
                        <h4 class="fw-bold">Tanggal Lahir</h4>
                        <h5>{{ $profile->tanggal_lahir }}</h5>
                        <hr>
                        <h4 class="fw-bold">Status</h4>
                        <h5>{{ $profile->status }}</h5>
                        <button type="button" style="margin-top: 200px; margin-left:200px" class="btn btn-primary float-end" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            Edit
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


  <!-- Modal Edit Avatar-->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Avatar</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="{{ route('profile.update', $profile->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('put')
            <div class="row mb-3">
                <div class="row mb-3">
                    <div class="col-md-12">
                        <label for="fullname" class="form-label">Profile</label>
                        <input type="file" name="profile" value="{{ $profile->profile }}" id="fullname" class="form-control" required>
                    </div>
                    <div class="col-md-12">
                        <label for="fullname" class="form-label">Full Name</label>
                        <input type="text" name="fullname" value="{{ $profile->fullname }}" id="fullname" class="form-control" required>
                    </div>
                    <div class="col-md-12">
                        <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
                        <input type="date" name="tanggal_lahir" value="{{ $profile->tanggal_lahir }}" id="tanggal_lahir" class="form-control" required>
                    </div>
                    <div class="col-md-12">
                        <label for="status" class="form-label">Status</label>
                        <input type="text" name="status" value="{{ $profile->status }}" id="status" class="form-control" required>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Update</button>
        </div>
        </form>
      </div>
    </div>
  </div>
@endsection