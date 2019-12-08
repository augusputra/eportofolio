<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up Form by Colorlib</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="{{asset('mahasiswa/fonts/material-icon/css/material-design-iconic-font.min.css')}}">
    <link rel="stylesheet" href="{{asset('mahasiswa/vendor/nouislider/nouislider.min.css')}}">

    <!-- Main css -->
    <link rel="stylesheet" href="{{asset('mahasiswa/css/style.css')}}">
</head>
<body>

    <div class="main">

        <div class="container">
            <div class="signup-content">
                <div class="signup-img">
                    <img src="{{URL::to('mahasiswa/images/form-img.jpg')}}" alt="">
                    <div class="signup-img-content">
                        <h2>Register now </h2>
                        <p>while seats are available !</p>
                    </div>
                </div>
                <div class="signup-form">
                    <form method="POST" action="{{url('/tambah-mahasiswa')}}" enctype="multipart/form-data" class="register-form" id="register-form">
                        {{ csrf_field() }}
                        <div class="form-row">
                            <div class="form-group">
                                <div class="form-input">
                                    <label for="first_name" class="required">Nama Lengkap</label>
                                    <input type="text" name="nama" id="first_name" />
                                </div>
                                <div class="form-input">
                                    <label for="last_name" class="required">NIM</label>
                                    <input type="text" name="nim" id="last_name" />
                                </div>
                                <div class="form-input">
                                    <label for="company" class="required">Angkatan</label>
                                    <input type="text" name="angkatan" id="company" />
                                </div>
                                <div class="form-input">
                                    <label for="email" class="required">Tahun Masuk</label>
                                    <input type="number" name="tahun_masuk" id="email" />
                                </div>
                                <div class="form-input">
                                    <label for="email" class="required">Tanggal Lahir</label>
                                    <input type="date" name="tanggal_lahir" id="email" />
                                </div>
                                <div class="form-input">
                                    <label for="email" class="required">Alamat</label>
                                    <textarea name="alamat" id="" cols="50"></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-input">
                                    <label for="email" class="required">IPK Terakhir (0.00)</label>
                                    <input type="number" name="ipk_terakhir" id="email" />
                                </div>
                                <div class="form-input">
                                    <label for="email">program keahlian</label>
                                    <select name="program_keahlian" class="select-p">
                                        <option value="Komunikasi">Komunikasi</option>
                                        <option value="Ekowisata">Ekowisata</option>
                                        <option value="Manajemen Informatika">Manajemen Informatika</option>
                                        <option value="Teknik Komputer">Teknik Komputer</option>
                                    </select>                    
                                </div>
                                <div class="form-input">
                                    <label for="phone_number" class="required">No HP</label>
                                    <input type="number" name="telp" id="phone_number" />
                                </div>
                                <div class="form-input">
                                    <label for="phone_number" class="required">Email</label>
                                    <input type="email" name="email" id="phone_number" />
                                </div>
                                <div class="form-input">
                                    <label for="phone_number" class="required">Password</label>
                                    <input type="password" name="password" id="phone_number" />
                                </div>
                                <div class="form-input">
                                    <label for="phone_number" class="required">Fakultas</label>
                                    <input type="text" placeholder="Sekolah Vokasi" disabled/>
                                    <input type="hidden" name="fakultas" value="Sekolah Vokasi IPB"/>
                                </div>
                                
                            </div>
                        </div>
                        <div class="form-group" style="margin-bottom: 50px;">
                            <div class="form-input">
                                <label for="email" >Foto</label>
                                <input type="file" name="foto" id="email" />
                            </div>
                        </div>
                        <div class="form-submit">
                            <input type="submit" value="Submit" class="submit" id="submit" name="submit" />
                            <input type="submit" value="Reset" class="submit" id="reset" name="reset" />
                        </div>
                    </form>
                    <center>
                        <a href="{{url('/')}}" class="signin">Sign In</a>
                    </center>
                        
                </div>
            </div>
        </div>

    </div>

    <!-- JS -->
    <script src="{{asset('mahasiswa/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('mahasiswa/vendor/nouislider/nouislider.min.js')}}"></script>
    <script src="{{asset('mahasiswa/vendor/wnumb/wNumb.js')}}"></script>
    <script src="{{asset('mahasiswa/vendor/jquery-validation/dist/jquery.validate.min.js')}}"></script>
    <script src="{{asset('mahasiswa/vendor/jquery-validation/dist/additional-methods.min.js')}}"></script>
    <script src="{{asset('mahasiswa/js/main.js')}}"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>