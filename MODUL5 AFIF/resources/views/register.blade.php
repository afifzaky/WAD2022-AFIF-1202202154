@include('layouts.layout')

<section id="register">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6 min-vh-100 left">
                <img src="https://assets.reedpopcdn.com/cod_sezon_2.jpg/BROK/resize/1200x1200%3E/format/jpg/quality/70/cod_sezon_2.jpg" style="object-fit:fill; width:100%; height:100%; margin-top: 200px;">
            </div>
            <div class="col-md-6">
                <div class="form-login m-auto ps-5">
                    <h2 class="fw-bold mb-4">Register</h2>
                    <form action="{{ url('/register')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <!-- Email input -->
                        <div class="mb-3 position-relative">
                            <label class="form-label " for="email">Email</label>
                            <span class="required" style="top: 0px; left: 41px;">*</span>
                            <input type="email" id="email" class="form-control form-control-lg" name="email"
                                placeholder="Masukkan Email" required />
                        </div>
                        <!-- nama input -->
                        <div class="form-outline mb-4">
                            <label class="form-label" for="name">Nama</label>
                            <span class="required" style="top: 0px; left: 41px;">*</span>
                            <input type="name" id="name" class="form-control form-control-lg" name="name"
                                placeholder="Masukkan Nama" required />
                        </div>
                        <!-- no hp input -->
                        <div class="form-outline mb-4">
                            <label class="form-label" for="no_hp">Nomor Handphone</label>
                            <span class="required" style="top: 0px; left: 41px;">*</span>
                            <input type="no_hp" id="no_hp" class="form-control form-control-lg" name="no_hp"
                                placeholder="Masukan Nomor Handphone" required />
                        </div>
                        <!-- Password input -->
                        <div class="form-outline mb-4">
                            <label class="form-label" for="password">Sandi</label>
                            <span class="required" style="top: 0px; left: 41px;">*</span>
                            <input type="password" id="password" class="form-control form-control-lg" name="password"
                                placeholder="Masukkan Sandi" required />
                        </div>
                        <div class="form-outline mb-4">
                            <!-- Password input -->
                            <div class="form-outline mb-3">
                                <label class="form-label" for="password2">Konfirmasi Sandi</label>
                                <span class="required" style="top: 0px; left: 41px;">*</span>
                                <input type="password" id="password2" class="form-control form-control-lg"
                                    name="password2" placeholder="Masukkan Kembali Sandi" required />
                            </div>
                            <div class="text-center text-lg-start mt-4 pt-2">
                                <button type="submit" name="daftar" class="btn btn-success btn-lg"
                                    style="padding-left: 2.5rem; padding-right: 2.5rem;">Daftar</button>
                                <p class="small mt-4 pt-1 mb-0">Already Have Account ? <a
                                        href="{{ 'login' }}" class="link-primary">Login</a></p>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
