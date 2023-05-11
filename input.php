<!DOCTYPE html>
<html lang="en" data-bs-theme="auto">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pickup Student V.3</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-icons-1.10.5/font/bootstrap-icons.css">
    <script src="js/color-modes.js"></script>
    <style>
        .logo {
            width: 120px;
            height: auto;
            padding-top: 20px;
        }
    </style>
</head>

<svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
    <symbol id="check2" viewBox="0 0 16 16">
        <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z" />
    </symbol>
    <symbol id="circle-half" viewBox="0 0 16 16">
        <path d="M8 15A7 7 0 1 0 8 1v14zm0 1A8 8 0 1 1 8 0a8 8 0 0 1 0 16z" />
    </symbol>
    <symbol id="moon-stars-fill" viewBox="0 0 16 16">
        <path d="M6 .278a.768.768 0 0 1 .08.858 7.208 7.208 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277.527 0 1.04-.055 1.533-.16a.787.787 0 0 1 .81.316.733.733 0 0 1-.031.893A8.349 8.349 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.752.752 0 0 1 6 .278z" />
        <path d="M10.794 3.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387a1.734 1.734 0 0 0-1.097 1.097l-.387 1.162a.217.217 0 0 1-.412 0l-.387-1.162A1.734 1.734 0 0 0 9.31 6.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387a1.734 1.734 0 0 0 1.097-1.097l.387-1.162zM13.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.156 1.156 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.156 1.156 0 0 0-.732-.732l-.774-.258a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732L13.863.1z" />
    </symbol>
    <symbol id="sun-fill" viewBox="0 0 16 16">
        <path d="M8 12a4 4 0 1 0 0-8 4 4 0 0 0 0 8zM8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0zm0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13zm8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5zM3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8zm10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0zm-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0zm9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707zM4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708z" />
    </symbol>
</svg>

<body>
    <div class="dropdown position-fixed bottom-0 end-0 mb-3 me-3 bd-mode-toggle">
        <button class="btn btn-danger align-items-center" id="bd-theme" type="button" aria-expanded="false" data-bs-toggle="dropdown" aria-label="Toggle theme (auto)">
            <svg class="bi my-1 theme-icon-active" width="1em" height="1em" fill="currentcolor">
                <use href="#circle-half"></use>
            </svg>
            <span class="visually-hidden" id="bd-theme-text">Toggle theme</span>
        </button>
        <ul class="dropdown-menu dropdown-menu-end gap-1 p-2 rounded-3 mx-0 shadow w-220px" aria-labelledby="bd-theme-text">
            <li>
                <button type="button" class="dropdown-item d-flex align-items-center rounded-2" data-bs-theme-value="light" aria-pressed="false">
                    <svg class="bi me-2 opacity-50 theme-icon" width="1em" height="1em" fill="currentcolor">
                        <use href="#sun-fill"></use>
                    </svg>
                    Light
                    <svg class="bi ms-auto d-none" width="1em" height="1em">
                        <use href="#check2"></use>
                    </svg>
                </button>
            </li>
            <li>
                <button type="button" class="dropdown-item d-flex align-items-center rounded-2" data-bs-theme-value="dark" aria-pressed="false">
                    <svg class="bi me-2 opacity-50 theme-icon" width="1em" height="1em" fill="currentcolor">
                        <use href="#moon-stars-fill"></use>
                    </svg>
                    Dark
                    <svg class="bi ms-auto d-none" width="1em" height="1em">
                        <use href="#check2"></use>
                    </svg>
                </button>
            </li>
            <li>
                <button type="button" class="dropdown-item d-flex align-items-center rounded-2 active" data-bs-theme-value="auto" aria-pressed="true">
                    <svg class="bi me-2 opacity-50 theme-icon" width="1em" height="1em" fill="currentcolor">
                        <use href="#circle-half"></use>
                    </svg>
                    Auto
                    <svg class="bi ms-auto d-none" width="1em" height="1em">
                        <use href="#check2"></use>
                    </svg>
                </button>
            </li>
        </ul>
    </div>

    <div class="modal modal-sheet position-static d-block bg-body-secondary p-4 py-md-5" tabindex="-1" role="dialog" id="modalSignin">
        <div class="modal-dialog" role="document">
            <div class="modal-content p-3 rounded-4 shadow">
                <div class="modal-header pb-4 border-bottom-0">
                    <h2 class="fw-bold mb-0 fs-2">Pickup Student V.3</h2>
                </div>

                <form action="" name="formName" id="altForm" method="post">
                    <div class="modal-body p-3 pt-0">
                        <div class="input-group">
                            <input type="text" id="nis" name="nis" placeholder="Search..." aria-label="First name" class="form-control" autocomplete="off">
                            <span class="input-group-text"><i class="bi bi-person-vcard"></i></span>
                        </div>
                        <ol class="list-group list-group-numbered" id="resultlist"></ol>
                        <small><i>Silahkan ketik Nama Lengkap / Nama Panggilan / Kelas</i></small>
                    </div>
                    <div class="modal-body p-3 pt-0">
                        <ul class="list-group">
                            <li class="list-group-item list-group-item-action">
                                <input class="form-check-input me-1" type="checkbox" value="" id="orangtua" name="orangtua" onclick="if(this.checked) {document.formName.antarjemput.checked=false;document.formName.ojol.checked=false;myFunction();}">
                                <label class="form-check-label stretched-link" for="orangtua">Dijemput Orang Tua</label>
                            </li>
                            <li class="list-group-item list-group-item-action">
                                <input class="form-check-input me-1" type="checkbox" value="" id="antarjemput" name="antarjemput" onclick="if(this.checked) {document.formName.orangtua.checked=false;document.formName.ojol.checked=false;myFunction();}">
                                <label class="form-check-label stretched-link" for="antarjemput">Ditunggu Team Antar Jemput</label>
                            </li>
                            <li class="list-group-item list-group-item-action">
                                <input class="form-check-input me-1" type="checkbox" value="" id="ojol" name="ojol" onclick="if(this.checked) {document.formName.antarjemput.checked=false;document.formName.orangtua.checked=false;myFunction();}">
                                <label class="form-check-label stretched-link" for="ojol">Dijemput Ojek Online</label>
                            </li>
                        </ul>
                    </div>
                    <div class="modal-body p-3 pt-0" id="sharelink" style="display: none;">
                        <label for="basic-url" class="form-label">Link Bagikan Perjalanan</label>
                        <div class="input-group">
                            <span class="input-group-text" id="basic-addon3"><i class="bi bi-link"></i></span>
                            <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3 basic-addon4">
                        </div>
                        <small><i>Cara mendapatkan Link Bagikan Perjalanan</i></small>
                        <div class="form-text" id="basic-addon4">
                            <div class="row row-cols-1 row-cols-sm-1 row-cols-md-2 g-2">
                                <div class="col">
                                    <div class="card shadow-sm">
                                        <img src="img/2.png" class="logo rounded mx-auto d-block" alt="">
                                        <div class="card-body">
                                            <p class="card-text">Dengan fitur Bantuan Darurat atau Call Emergency Hotline, kamu akan terhubung dengan unit...</p>
                                            <div class="d-flex justify-content-between align-items-center">
                                                <div class="btn-group">
                                                    <a href="https://www.gojek.com/blog/gojek/fitur-bagikan-perjalanan/" target="_blank" type="button" class="btn btn-outline-info">Info</a>
                                                </div>
                                                <small class="text-body-secondary">@opsdanaksaleh</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card shadow-sm">
                                        <img src="img/1.png" class="logo rounded mx-auto d-block" alt="">
                                        <div class="card-body">
                                            <p class="card-text">Bagikan lokasi Anda kepada orang yang Anda cintai agar Anda dapat berkendaraan dengan aman dan nyaman...</p>
                                            <div class="d-flex justify-content-between align-items-center">
                                                <div class="btn-group">
                                                    <a href="https://help.grab.com/driver/id-id/360021411912" target="_blank" type="button" class="btn btn-outline-info">Info</a>
                                                </div>
                                                <small class="text-body-secondary">@opsdanaksaleh</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-body p-3 pt-0">
                        <button class="w-100 py-2 mb-2 btn btn-outline-info rounded-3" type="submit" id="btnSubmit" value="Submit">Submit</button>
                    </div>
                </form>


            </div>
        </div>

        <script src="js/bootstrap.bundle.min.js"></script>

</body>

</html>

<script src="js/jquery.min.js"></script>
<script>
    $(document).ready(function() {
        $.ajaxSetup({
            cache: false
        });
        $('#nis').keyup(function() {
            $('#resultlist').html('');
            $('#state').val('');
            var searchField = $('#nis').val();
            var expression = new RegExp(searchField, "i");

            $.getJSON('js/tbl_siswa.json', function(data) {
                $.each(data, function(key, value) {
                    if (value.NIS.search(expression) != -1 || value.KELAS.search(expression) != -1 || value.NAMA_LENGKAP.search(expression) != -1 || value.PANGGILAN.search(expression) != -1 || value.NAMA_KELAS.search(expression) != -1) {
                        $('#resultlist').append(`
                        <li class="list-group-item d-flex justify-content-between align-items-start list-group-item-action list-group-item-primary">
                            <div class="ms-2 me-auto">
                            <div class="fw-bold">` + value.PANGGILAN + `</div>
                            <small>` + value.NAMA_LENGKAP + `</small>
                            </div>
                            <span class="badge bg-info-subtle border border-info-subtle text-info-emphasis rounded-pill">` + value.KELAS + `-` + value.NAMA_KELAS + `</span>
                            <span class="nama" hidden>` + value.NIS + `</span>
                        </li>
                        `);
                    }
                });
            });
        });

        $('#resultlist').on('click', 'li', function() {
            let nis = $(this).children('.nama').text();

            $('#nis').val(nis);
            $("#resultlist").html('');
        });
    });
</script>

<script type="text/javascript">
    window.setTimeout(function() {
        $(".alert").fadeTo(500, 0).slideUp(200, function() {
            $(this).remove();
        });
    }, 2000);
</script>

<script>
    function myFunction() {
        var checkBox = document.getElementById("ojol");
        var text = document.getElementById("sharelink");
        if (checkBox.checked == true) {
            sharelink.style.display = "block";
        } else {
            sharelink.style.display = "none";
        }
    }
</script>