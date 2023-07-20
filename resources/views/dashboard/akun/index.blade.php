@extends('layouts.dashboard')
@section('title', 'Admin | Setting Akun')
    
@section('content')
<div class="container mt-5">
    <div class="row mb-2">
        <div class="col-md-12">
            @if (session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>{{ session('success') }}</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
        </div>
    </div>
    <div class="row mb-2">
        <h1 class="mb-4">Settings</h1>
        <div class="col-12 mb-3">
            <div class="card shadow-sm">
                <div class="card-body">
                    <div class="d-flex">
                        <h5>Avatar</h5>
                        <div class="links ms-auto">
                            <button type="button" class="btn text-primary" data-bs-toggle="modal" data-bs-target="#exampleModalAvatar">
                                Change Avatar
                            </button>
                        </div>
                    </div>
                    <figure>
                        @empty(Auth::user()->avatar)
                        <img src="{{ url('assets/img/khairunnisa.jpeg') }}" alt="Profile Default" width="100px">
                        @else
                        <img src="{{ url('storage/avatars/'. Auth::user()->avatar) }}" alt="Profle New" width="100px">
                        @endempty
                    </figure>
                </div>
            </div>
        </div>
        <div class="col-12 mb-3">
            <div class="card shadow-sm">
                <div class="card-body">
                    <div class="d-flex mb-2">
                        <h5>Profile Settings</h5>
                        <div class="links ms-auto">
                            <!-- Button trigger modal Edit Profile -->
                            <button type="button" class="btn text-primary" data-bs-toggle="modal" data-bs-target="#exampleModall">
                                Edit Profile
                            </button>
                        </div>
                    </div>
                    <p style="margin-bottom: 0px;">Name : <span class="text-secondary">{{ Auth::user()->name }}</span></p>
                    <p>Email : <span class="text-secondary">{{ Auth::user()->email }}</span></p>
                </div>
            </div>
        </div>
        <div class="col-12 mb-3">
            <div class="card shadow-sm">
                <div class="card-body">
                    <div class="d-flex mb-2">
                        <h5>Security & Password</h5>
                        <div class="links ms-auto">
                            <!-- Button trigger modal Edit Profile -->
                            <button type="button" class="btn text-primary" data-bs-toggle="modal" data-bs-target="#exampleModalPassword">
                                Edit Password
                            </button>
                        </div>
                    </div>
                    <p style="margin-bottom: 0px;">Your Password : <span class="text-secondary">{{ Auth::user()->password }}</span></p>
                    <p>Last Changed : <span class="text-secondary">{{ Auth::user()->updated_at }}</span></p>
                </div>
            </div>
        </div>
    </div>
</div>
  
  <!-- Modal Edit Avatar-->
  <div class="modal fade" id="exampleModalAvatar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Avatar</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="{{ route('edit-avatar') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row mb-3">
                <div class="row mb-3">
                    <div class="col-md-12">
                        <label for="avatar" class="form-label">Avatar</label>
                        <input type="file" name="avatar" id="avatar" class="form-control" required>
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

  <!-- Modal Edit Profile-->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Profile</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="{{ route('edit-profile', Auth::user()->id) }}" method="POST">
            @csrf
            <div class="row mb-3">
                <div class="row mb-3">
                    <div class="col-md-12">
                        <label for="name" class="form-label">Nama</label>
                        <input type="text" name="name" value="{{ Auth::user()->name }}" id="name" class="form-control" required>
                    </div>
                </div>
                <div class="col-md-12">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" name="email" value="{{ Auth::user()->email }}" id="email" class="form-control" required>
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

  <!-- Modal Edit Password-->
  <div class="modal fade" id="exampleModalPassword" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Profile</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="{{ route('edit-password', Auth::user()->id) }}" method="POST">
            @csrf
            <div class="row mb-3">
                <div class="col-md-12">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" name="password" value="{{ Auth::user()->password }}" id="password" class="form-control" required>
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