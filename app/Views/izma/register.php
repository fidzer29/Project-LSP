<html lang="en">

<head>
    <link rel="stylesheet" href="/assets/css/regis.css">
    <link rel="stylesheet" href="/assets/css/bootstrap.css">

    <!-- Favicons -->
    <link href="assets/img/gunung1.png" rel="icon">
    <link href="assets/img/apple-icon.png" rel="apple-icon">

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <!-- css font-awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">

    <title>Registrasi</title>
</head>

<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 col-sm-7">
                <?php if (!empty(session()->getFlashdata('success'))) { ?>

                    <div class="alert alert-success">
                        <?php echo session()->getFlashdata('success'); ?>
                    </div>
                <?php } ?>
                <?php if (!empty(session()->getFlashdata('info'))) { ?>

                    <div class="alert alert-primary">
                        <?php echo session()->getFlashdata('info'); ?>
                    </div>
                <?php } ?>
                <?php if (!empty(session()->getFlashdata('warning'))) { ?>

                    <div class="alert alert-danger">
                        <?php echo session()->getFlashdata('warning'); ?>
                    </div>
                <?php } ?>



                <div id="card">
                    <div id="card-content">
                        <div id="card-title">
                            <h2>Registrasi</h2>
                            <div class="underline-title"></div>
                        </div>
                        <form action="/auth/register" method="post" class="form">


                            <label for="user-name" style="padding-top:13px">
                                &nbsp;Nama Pengguna
                            </label>
                            <input id="user-name" class="form-content" type="text" name="Nama_Pelanggan" autocomplete="on" required />
                            <div class="form-border"></div>

                            <label for="user-password" style="padding-top:22px">&nbsp;Password
                            </label>
                            <input id="user-password" class="form-content" type="password" name="Password" minlength="8" required />
                            <div class="form-border">
                                <span id="mybutton" onclick="change()"><img src="../assets/img/hide.png" /></span>
                            </div>

                            <label for="user-email" style="padding-top:13px">
                                &nbsp;Email
                            </label>
                            <input id="user-email" class="form-content" type="email" name="Email" autocomplete="on" required />
                            <div class="form-border"></div>


                            <label for="user-name" style="padding-top:13px">
                                &nbsp;Alamat Lengkap
                            </label>
                            <input id="user-name" class="form-content" type="text" name="Alamat_Pelanggan" autocomplete="on" required />
                            <div class="form-border"></div>

                            <label for="user-name" style="padding-top:13px">
                                &nbsp;No Hanphone
                            </label>
                            <input id="user-name" class="form-content" type="number" name="No_Hp" autocomplete="on" required />
                            <div class="form-border"></div>

                            <div class="form-group">
                                <input class="form-control" type="hidden" name="Level" value="pelanggan" />
                            </div>


                            <input id="submit-btn" type="submit" name="submit" value="DAFTAR" />
                            <a href="<?= base_url('/login') ?>" id="signup">Sudah memiliki akun</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="../assets/js/show-hide.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>

</html>