<!DOCTYPE html>
<html lang="en" data-bs-theme="auto">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pickup Student V.3</title>
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <link rel="stylesheet" href="../../css/bootstrap-icons-1.10.5/font/bootstrap-icons.css">
    <script src="../../js/color-modes.js"></script>
    <style>
        body {
            /* min-height: 75rem; */
            padding-top: 4.5rem;
        }

        .form-control-1:focus {
            border-color: #fff;
            box-shadow: 0px 0px 0px #fff inset, 0px 0px 0px #fff;
        }

        .navbar .megamenu {
            padding: 1rem;
        }

        /* ============ desktop view ============ */
        @media all and (min-width: 992px) {
            .navbar .has-megamenu {
                position: static !important;
            }

            .navbar .megamenu {
                left: auto;
                right: 18em;
                width: 40%;
                margin-top: 0;
            }
        }

        /* ============ desktop view .end// ============ */

        /* ============ mobile view ============ */
        @media(max-width: 991px) {

            .navbar.fixed-top .navbar-collapse,
            .navbar.sticky-top .navbar-collapse {
                overflow-y: auto;
                max-height: 90vh;
                margin-top: 10px;
            }
        }

        /* ============ mobile view .end// ============ */
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



    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" aria-label="Eighth navbar example">
        <div class="container">
            <a class="navbar-brand" href="#"><i class="bi bi-p-circle-fill" style="font-size: 25px;"></i></a>
            <a href="#" class="nav-link text-secondary" style="font-weight: bold;">Pickup Student V.3</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample07" aria-controls="navbarsExample07" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarsExample07">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                </ul>
                <ul class="navbar-nav">
                    <li class="nav-item dropdown has-megamenu">
                        <button class="nav-link dropdown-toggle btn btn-dark" href="#" data-bs-toggle="dropdown"><i class="bi bi-door-open"></i> Classroom </button>
                        <div class="dropdown-menu megamenu" role="menu">
                            <div class="row g-3">
                                <div class="col-lg-4 col-6">
                                    <div class="col-megamenu">
                                        <h6 class="title"><i class="bi bi-1-circle"></i> Study Group</h6>
                                        <ul class="list-unstyled">
                                            <li><a class="dropdown-item d-flex align-items-center rounded-2" href="../1A/">1A - Shiddiq</a></li>
                                            <li><a class="dropdown-item d-flex align-items-center rounded-2" href="../1B/">1B - Amanah</a></li>
                                            <li><a class="dropdown-item d-flex align-items-center rounded-2" href="../1C/">1C - Fathanah</a></li>
                                            <li><a class="dropdown-item d-flex align-items-center rounded-2" href="../1C/">1D - Tabligh</a></li>
                                        </ul>
                                    </div> <!-- col-megamenu.// -->
                                </div><!-- end col-3 -->
                                <div class="col-lg-4 col-6">
                                    <div class="col-megamenu">
                                        <h6 class="title"><i class="bi bi-2-circle"></i> Study Group</h6>
                                        <ul class="list-unstyled">
                                            <li><a class="dropdown-item d-flex align-items-center rounded-2" href="../2A/">2A - Nasionalis</a></li>
                                            <li><a class="dropdown-item d-flex align-items-center rounded-2" href="../2B/">2B - Demokratis</a></li>
                                            <li><a class="dropdown-item d-flex align-items-center rounded-2" href="../2C/">2C - Toleransi</a></li>
                                            <li><a class="dropdown-item d-flex align-items-center rounded-2" href="../2D/">2D - Patriotis</a></li>
                                        </ul>
                                    </div> <!-- col-megamenu.// -->
                                </div><!-- end col-3 -->
                                <div class="col-lg-4 col-6">
                                    <div class="col-megamenu">
                                        <h6 class="title"><i class="bi bi-3-circle"></i> Study Group</h6>
                                        <ul class="list-unstyled">
                                            <li><a class="dropdown-item d-flex align-items-center rounded-2" href="../3A/">3A - Simpati</a></li>
                                            <li><a class="dropdown-item d-flex align-items-center rounded-2" href="../3B/">3B - Empati</a></li>
                                            <li><a class="dropdown-item d-flex align-items-center rounded-2" href="../3C/">3C - Peduli</a></li>
                                            <li><a class="dropdown-item d-flex align-items-center rounded-2" href="../3D/">3D - Berbagi</a></li>
                                        </ul>
                                    </div> <!-- col-megamenu.// -->
                                </div>
                                <div class="col-lg-4 col-6">
                                    <div class="col-megamenu">
                                        <h6 class="title"><i class="bi bi-4-circle"></i> Study Group</h6>
                                        <ul class="list-unstyled">
                                            <li><a class="dropdown-item d-flex align-items-center rounded-2" href="../4A/">4A - Mandiri</a></li>
                                            <li><a class="dropdown-item d-flex align-items-center rounded-2" href="../4B/">4B - Teliti</a></li>
                                            <li><a class="dropdown-item d-flex align-items-center rounded-2" href="../4C/">4C - Berani</a></li>
                                            <li><a class="dropdown-item d-flex align-items-center rounded-2" href="../4D/">4D - Percaya Diri</a></li>
                                        </ul>
                                    </div> <!-- col-megamenu.// -->
                                </div><!-- end col-3 -->
                                <div class="col-lg-4 col-6">
                                    <div class="col-megamenu">
                                        <h6 class="title"><i class="bi bi-5-circle"></i> Study Group</h6>
                                        <ul class="list-unstyled">
                                            <li><a class="dropdown-item d-flex align-items-center rounded-2" href="../5A/">5A - Berpikir Kritis</a></li>
                                            <li><a class="dropdown-item d-flex align-items-center rounded-2" href="../5B/">5B - Kolaboratif</a></li>
                                            <li><a class="dropdown-item d-flex align-items-center rounded-2" href="../5C/">5C - Komunikatif</a></li>
                                            <li><a class="dropdown-item d-flex align-items-center rounded-2" href="../5D/">5D - Kreatif</a></li>
                                        </ul>
                                    </div> <!-- col-megamenu.// -->
                                </div>
                                <div class="col-lg-4 col-6">
                                    <div class="col-megamenu">
                                        <h6 class="title"><i class="bi bi-6-circle"></i> Study Group</h6>
                                        <ul class="list-unstyled">
                                            <li><a class="dropdown-item d-flex align-items-center rounded-2" href="../6A/">6A - Inovatif</a></li>
                                            <li><a class="dropdown-item d-flex align-items-center rounded-2" href="../6B/">6B - Infentif</a></li>
                                            <li><a class="dropdown-item d-flex align-items-center rounded-2" href="../6C/">6C - Inspiratif</a></li>
                                            <li><a class="dropdown-item d-flex align-items-center rounded-2" href="../6D/">6D - Inisiatif</a></li>
                                        </ul>
                                    </div> <!-- col-megamenu.// -->
                                </div><!-- end col-3 -->
                            </div><!-- end row -->
                        </div> <!-- dropdown-mega-menu.// -->
                    </li>
                </ul>
            </div>
        </div>
    </nav>