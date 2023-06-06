@extends('layout.app') @section('content')
<div class="container mt-5">
    <h2>{{ $pageTitle }}</h2>

    <div class="row">
        <div class="col-lg-4">
            <div class="card mb-4">
                <div class="card-body text-center">
                    <img
                        src="{{ Vite::asset('resources/images/profil.png') }}"
                        alt="avatar"
                        class="rounded-circle img-fluid"
                        style="width: 150px"
                    />
                    <h5 class="my-3">Fariduta</h5>
                    <p class="text-muted mb-1">Mahasiswa Sistem Informasi</p>
                    <p class="text-muted mb-4">IT Telkom Surabaya</p>
                </div>
            </div>
        </div>

        <div class="col-lg-8">
            <div class="card mb-4">
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-3">
                            <p class="mb-0 text-start">Full Name</p>
                        </div>
                        <div class="col-sm-9">
                            <p class="text-muted mb-0 text-start">
                                Farid Duta Hadyanto
                            </p>
                        </div>
                    </div>
                    <hr />
                    <div class="row">
                        <div class="col-sm-3">
                            <p class="mb-0 text-start">Email</p>
                        </div>
                        <div class="col-sm-9">
                            <p class="text-muted mb-0 text-start">
                                dutahad@gmail.com
                            </p>
                        </div>
                    </div>
                    <hr />
                    <div class="row">
                        <div class="col-sm-3">
                            <p class="mb-0 text-start">NIM</p>
                        </div>
                        <div class="col-sm-9">
                            <p class="text-muted mb-0 text-start">
                                1204215118
                            </p>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-sm-3">
                            <p class="mb-0 text-start">Phone</p>
                        </div>
                        <div class="col-sm-9">
                            <p class="text-muted mb-0 text-start">
                                +6281 3318 90624
                            </p>
                        </div>
                    </div>
                    <hr />
                    <div class="row">
                        <div class="col-sm-3">
                            <p class="mb-0 text-start">Website</p>
                        </div>
                        <div class="col-sm-9">
                            <a  href="https://github.com/PaddlePOPA96"  target="_blank" class="text-muted mb-0 text-start">
                                https://github.com/PaddlePOPA96
                            </a>
                        </div>
                    </div>
                    <hr />
                    <div class="row">
                        <div class="col-sm-3">
                            <p class="mb-0 text-start">Address</p>
                        </div>
                        <div class="col-sm-9">
                            <p class="text-muted mb-0 text-start">
                                Surabaya, East Java
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
  <footer>

      
  </div>


    @endsection

