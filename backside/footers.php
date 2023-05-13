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

<script src="../../js/bootstrap.bundle.min.js"></script>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>
    $(document).ready(function() {
        setInterval(() => {
            $("#table").load("load.php")
        }, 900);
    })
</script>

</html>