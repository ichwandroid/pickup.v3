<?php include "../headers.php"; ?>

<main class="container">
    <div class="d-flex align-items-center p-3 my-3 text-white bg-info rounded shadow-sm">
        <!-- <img class="me-3" src="/docs/5.3/assets/brand/bootstrap-logo-white.svg" alt="" width="48" height="38"> -->
        <h1><i class="bi bi-clipboard-data"></i></h1>
        <div class="lh-1">
            <h1 class="h6 mb-0 text-white lh-1">Dashboard</h1>
            <small>Pickup Student Anak Saleh elementary School</small>
        </div>
    </div>

    <div class="row row-cols-1 row-cols-lg-2 align-items-stretch g-4 py-5">
        <div class="col">
            <div class="card card-cover h-100 overflow-hidden text-bg-dark rounded-4 shadow-lg" style="background-image: url('unsplash-photo-1.jpg');">
                <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
                    <h3 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Student Pickup</h3>
                    <ul class="d-flex list-unstyled mt-auto">
                        <li class="me-auto">
                            <!-- <img src="https://github.com/twbs.png" alt="Bootstrap" width="32" height="32" class="rounded-circle border border-white"> -->
                        </li>
                        <li class="d-flex align-items-center me-3">
                            <svg class="bi me-2" width="1em" height="1em">
                                <use xlink:href="#geo-fill" />
                            </svg>
                            <!-- <small>Earth</small> -->
                        </li>
                        <li class="d-flex align-items-center">
                            <svg class="bi me-2" width="1em" height="1em">
                                <use xlink:href="#calendar3" />
                            </svg>
                            <!-- <small>3d</small> -->
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card card-cover h-100 overflow-hidden text-bg-dark rounded-4 shadow-lg" style="background-image: url('unsplash-photo-2.jpg');">
                <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
                    <h3 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">All Students</h3>
                    <ul class="d-flex list-unstyled mt-auto">
                        <li class="me-auto">
                            <!-- <img src="https://github.com/twbs.png" alt="Bootstrap" width="32" height="32" class="rounded-circle border border-white"> -->
                        </li>
                        <li class="d-flex align-items-center me-3">
                            <svg class="bi me-2" width="1em" height="1em">
                                <use xlink:href="#geo-fill" />
                            </svg>
                            <!-- <small>Pakistan</small> -->
                        </li>
                        <li class="d-flex align-items-center">
                            <svg class="bi me-2" width="1em" height="1em">
                                <use xlink:href="#calendar3" />
                            </svg>
                            <!-- <small>4d</small> -->
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
        <div class="col-md-4 d-flex align-items-center">
            <a href="/" class="mb-3 me-2 mb-md-0 text-body-secondary text-decoration-none lh-1">
                <svg class="bi" width="30" height="24">
                    <use xlink:href="#bootstrap" />
                </svg>
            </a>
            <span class="mb-3 mb-md-0 text-body-secondary">&copy; 2023 Anak Saleh El-School</span>
        </div>

        <!-- <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
            <li class="ms-3"><a class="text-body-secondary" href="#"><svg class="bi" width="24" height="24">
                        <use xlink:href="#twitter" />
                    </svg></a></li>
            <li class="ms-3"><a class="text-body-secondary" href="#"><svg class="bi" width="24" height="24">
                        <use xlink:href="#instagram" />
                    </svg></a></li>
            <li class="ms-3"><a class="text-body-secondary" href="#"><svg class="bi" width="24" height="24">
                        <use xlink:href="#facebook" />
                    </svg></a></li>
        </ul> -->
    </footer>
</main>


<?php include "../footers.php"; ?>