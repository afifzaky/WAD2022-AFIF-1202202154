@include('layouts.layout')
    <section id="login">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 min-vh-100 left">
                    <img src="https://c4.wallpaperflare.com/wallpaper/489/735/600/lamborghini-reventon-military-black-sports-coupe-wallpaper-preview.jpg" style="object-fit:fill; width:100%; height:100%; margin-top: 200px;">
                </div>
                <div class="col-md-6">
                    <div class="form-login m-auto ps-5">
                        <h2 class="fw-bold mb-4">Login</h2>
                        <form action="{{ route('login.post') }}" method="POST">
                            @csrf
                            <div class="form-outline mb-4">
                                <label class="form-label" for="email">Email</label>
                                <input type="email" id="email" class="form-control form-control-lg" name="email"
                                    placeholder="Masukkan Email"
                                    value="<?= isset($_COOKIE['email']) ? $_COOKIE['email'] : '' ?>" />
                            </div>
                            <div class="form-outline mb-4">
                                <label class="form-label
                                " for="password">Sandi</label>
                                <input type="password" id="password" class="form-control form-control-lg" name="password"
                                    placeholder="Masukkan Sandi"
                                    value="<?= isset($_COOKIE['password']) ? $_COOKIE['password'] : '' ?>" />
                            </div>
                            <div class="form-check mb-0">
                                <input class="form-check-input me-2" type="checkbox" value="" id="check"
                                    name="check" />
                                <label class="form-check-label" for="check">
                                    Ingat Saya
                                </label>
                            </div>
                    </div>
                    <div class="text-center text-lg-start mt-4 pt-2" style="margin-left: 50px;">
                        <button type="submit" class="btn btn-success btn-lg" name="login"
                            style="padding-left: 2.5rem; padding-right: 2.5rem;">Login</button>
                        <p class="small mt-4 pt-1 mb-0">Have Account ? <a href="{{'register'}}"
                                class="link-primary">Register</a></p>
                    </div>
                    </form>
                </div>
            </div>
        </div>
        </div>
    </section>
