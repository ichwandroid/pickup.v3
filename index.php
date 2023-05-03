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
        body {
            min-height: 75rem;
            padding-top: 4.5rem;
        }

        .form-control-1:focus {
            border-color: #fff;
            box-shadow: 0px 0px 0px #fff inset, 0px 0px 0px #fff;
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
    <div id='msgReg' class="position-fixed bottom-0 end-0 mb-3 me-3"></div>
    <header class="p-3 text-bg-dark fixed-top">
        <div class="container">
            <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
                    <i class="bi bi-p-circle-fill" style="font-size: 25px;"></i>
                </a>

                <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                    <li><a href="#" class="nav-link px-2 text-secondary" style="font-weight: bold;">Pickup Student V.3</a></li>
                </ul>

                <form action="" id="regForm" method="post" class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3">
                    <div class="input-group">
                        <span class="input-group-text" id="basic-addon1"><i class="bi bi-qr-code-scan"></i></span>
                        <input type="text" id="nis" name="nis" class="form-control form-control-1" placeholder="Scan..." aria-label="scan" aria-describedby="basic-addon1" autocomplete="off" autofocus>
                        <input type="text" id="status" name="status" value='<span class="badge bg-danger-subtle border border-danger-subtle text-danger-emphasis rounded-pill">Ditunggu Orang Tua</span>' hidden>
                        <input type="submit" id="btnPost" value="Submit" class="btn btn-warning">
                    </div>
                </form>

                <div class="dropdown me-1">
                    <div class="text-end">
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
                </div>
                <a href="client.php" class="btn btn-info align-items-center"><i class="bi bi-funnel-fill"></i></a>
            </div>
        </div>
    </header>
    <main class="container my-3">
        <div class="col-sm-8 py-3 mx-auto">
            <p class="fs-5">Anak Saleh Elementary School</p>
            <p>This application is used to provide information to teachers and students that parents / shuttle students are already at school. give us a suggestion so that this facility can be of benefit to all members of the Anak Saleh Elementary School.</p>
            <p>
            <div class="input-group mb-3">
                <input type="text" id="q" name="q" class="form-control" placeholder="Search..." aria-label="search" aria-describedby="button-addon2" autocomplete="off">
                <button class="btn btn-outline-secondary" type="button" id="button-addon2">Button</button>
            </div>
            </p>
        </div>
        <div class="container-fluid pb-3">
            <div class="d-grid gap-3" style="grid-template-columns: 1fr 2fr;">
                <div class="bg-body-tertiary border rounded-3 p-3">
                    <h6 class='border-bottom pb-2 mb-0'>Notice !!!!</h6>
                </div>
                <div class="bg-body-tertiary border rounded-3 p-3">
                    <div id="msg" class='mx-auto'></div>
                    <div id="table"></div>
                </div>
            </div>
        </div>
    </main>
    <script src="js/bootstrap.bundle.min.js"></script>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="js/main.js"></script>

</html>