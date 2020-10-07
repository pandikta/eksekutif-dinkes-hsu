<style>
    img {
        width: 3cm;
        height: 4cm;
        display: block;
        margin-left: auto;
        margin-right: auto;

    }

    .judul {
        text-align: center;
        font-family: 'monda';
        font-size: 45px;
        color: #e6f032;

    }

    .subjudul {
        text-align: center;
        font-family: 'Frank Ruhl Libre';
        color: #26fff3;
        font-size: 30px;
    }

    a {
        color: seashell;
        text-align: center;
        font-size: 13px;
        margin-left: 1.7cm;
    }
</style>

<div class="container">
    <br><br>
    <img src="<?= base_url('assets/img/logo.png'); ?>">
    <h1 class="judul">WEB EKSEKUTIF DINAS KESEHATAN</h1>
    <h3 class="subjudul">Kab. Hulu Sungai Utara</h3>
    <!-- Outer Row Backrount putih -->
    <div class="row justify-content-center">

        <div class="col-lg-5">

            <div class=" card o-hidden border-0 shadow-lg my-1">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">

                        <div class="col-lg">
                            <div class="p-4">
                                <!-- <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4">Login Page</h1>
                                </div> -->

                                <!-- menampilkan message yg terdapat di auth.php -->
                                <?= $this->session->flashdata('message'); ?>

                                <form class="user" method="post" action="<?= base_url('auth'); ?>">
                                    <div class="form-group">
                                        <input type="text" class="form-control form-control-user" id="username" name="username" placeholder="Username" value="">
                                        <?= form_error('username', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control form-control-user" id="password" name="password" placeholder="Password">
                                        <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
                                        <br>

                                        <button type="submit" class="btn btn-primary btn-user btn-block">
                                            Masuk
                                        </button>
                                </form>
                                <hr>
                                <p style="text-align: center; font-size:13px;">Lupa Password? Hubungi Admin</p>
                                <p style="text-align: center; font-size:13px;">Tamu Gunakan Username "guest" Password "123"</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <a href="http://dinkes.hulusungaiutarakab.go.id/">Website resmi : http://dinkes.hulusungaiutarakab.go.id/</a>
    </div>



</div>

<marquee style="color:seashell;" scrollamount="11">
    <span style="font-size: 12px;">Copyright &copy; 2020 Website Eksekutif Dinas Kesehatan Kabupaten Hulu Sungai Utara.</span>
</marquee>