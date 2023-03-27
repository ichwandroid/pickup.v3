<?php
require_once 'koneksi.php';
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD Ajax Sederhana</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <style>
        .error {
            color: red;
        }
    </style>
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col">

                <!-- Main content -->
                <div id="mainContent"></div>

                <!-- Button trigger modal -->
                <button type="button" class="btn btn-success mt-5" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    Tambah Data
                </button>

                <!-- Modal tambah-->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Data</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">

                                <!-- Form tambah -->
                                <form method="post" action="insertData.php" id="formTambah">

                                    <!-- Pesan jika data berhasil di tambah -->
                                    <div class="alert alert-success text-center pesanTambah" role="alert" style="display:none;">
                                        Data berhasil di tambah.

                                    </div>

                                    <div class="mb-3">
                                        <label for="nama" class="form-label">Nama </label>
                                        <input type="text" class="form-control tambah-data" id="nama" name="nama" autocomplete='off' />
                                    </div>

                                    <div class="mb-3">
                                        <label for="umur" class="form-label">Umur</label>
                                        <input type="text" class="form-control tambah-data" id="umur" name="umur" autocomplete='off' />
                                    </div>


                                    <div class="mb-3">
                                        <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                                        <input type="text" class="form-control tambah-data" id="jenis_kelamin" name="jenis_kelamin" autocomplete='off' />
                                    </div>

                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary" name="submit">Tambah</button>
                                    </div>
                                </form>

                                <!-- Akhir form tambah -->
                            </div>

                        </div>
                    </div>
                </div>

                <!-- Akhir modal tambah -->

                <!-- Modal edit-->
                <div class="modal fade" id="editData" tabindex="-1" aria-labelledby="editData" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="editData">Edit Data</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>

                            <!-- Modal edit menggunakan jquery yang akan di tampilkan value per value pada form-->
                            <div class="modal-body" id="modal-edit">

                            </div>

                        </div>
                    </div>
                </div>
                <!-- Akhir modal edit -->


            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/jquery.validate.min.js" integrity="sha512-37T7leoNS06R80c8Ulq7cdCDU5MNQBwlYoy1TX/WUsLFC2eYNqtKlV0QjH7r8JpG/S0GUMZwebnVFLPd6SU5yg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/additional-methods.min.js" integrity="sha512-XZEy8UQ9rngkxQVugAdOuBRDmJ5N4vCuNXCh8KlniZgDKTvf7zl75QBtaVG1lEhMFe2a2DuA22nZYY+qsI2/xA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>


    <script>
        // load dokumen HTML
        $(document).ready(function() {

            // load data ajax
            loadData()

            function loadData() {

                $.ajax({
                    url: 'getData.php',
                    type: 'GET',
                    success: function(data) {
                        $("#mainContent").html(data);

                        //cek jika menekan tombol hapus
                        $('.hapusData').click(function(e) {

                            if (confirm('Apakah anda yakin untuk hapus data?') == true) {

                                //fungsi e.preventDefault() dalam studi kasus ini di gunakan agar tetap berada pada file pasien.php
                                e.preventDefault()

                                //lakukan ajax
                                $.ajax({

                                    //gunakan method GET
                                    type: 'GET',

                                    //ambil attribute pada href yang berada pada file getData.php pada variabel $link_delete
                                    url: $(this).attr('href'),

                                    //cek jika success
                                    success: function() {
                                        //load data menggunakan AJAX
                                        loadData()
                                    }
                                })

                                //cek jika data tidak jadi di hapus
                            } else {
                                //jangan hapus tetapkan di file pasien.php
                                e.preventDefault()

                            }

                        })
                    }
                })

            }

            // validasi form tambah
            $('#formTambah').validate({

                rules: {
                    nama: 'required',
                    umur: 'required',
                    jenis_kelamin: 'required'
                },

                messages: {
                    nama: 'Field nama jangan kosong',
                    umur: 'Field umur jangan kosong',
                    jenis_kelamin: 'Field jenis kelamin jangan kosong'
                },

                highlight: function(element) {
                    $(element).children().addClass('error')
                },
                unhighlight: function(element) {
                    $(element).children().removeClass('error')
                },

                // insert data
                submitHandler: function(form) {
                    $.ajax({
                        url: $(form).attr('action'),
                        type: $(form).attr('method'),
                        data: $(form).serialize(),
                        success: function(response) {
                            $('[type=text]').val('')
                            loadData();

                            //munculkan pesan jika data berhasil di tambah
                            document.querySelector(".pesanTambah").style.display = "block";

                            // hapus peringatan ketika setelah setengah detik
                            setTimeout(function() {
                                document.querySelector(".pesanTambah").style.display = "none";
                            }, 1500)

                        }
                    });
                }
            });

            //cek jika tombol editPasien di tekan
            $('#editData').modal({
                keyboard: true,
                backdrop: "static",
                show: false,

                //biar mudah, kode di bawah ini di gunakan untuk mempermudah pengambilan data form modal edit agar value muncul sesuai id yang ada pada tabel bernama pasien
            }).on("show.bs.modal", function(event) {
                var button = $(event.relatedTarget);
                var id = $(event.relatedTarget).closest("tr").find("td:eq(0)").text();
                var nama = $(event.relatedTarget).closest("tr").find("td:eq(2)").text();
                var umur = $(event.relatedTarget).closest("tr").find("td:eq(3)").text();
                var jenis_kelamin = $(event.relatedTarget).closest("tr").find("td:eq(4)").text();

                //muncul kan form modal edit
                $(this).find('#modal-edit').html($(
                    `
                <!-- Form edit -->
                    <form method="post" class="updateData" id="formEdit">
                    
                    <!-- Pesan jika data berhasil di ubah -->
                    <div class="alert alert-success text-center pesanUbah" role="alert" style="display:none;">
                       Data berhasil di ubah.                    
                        </div>

                    <div class="mb-3">
                        <label for="id" class="form-label d-none">Id</label>
                        <input type="text" class="form-control d-none" id="id" name="id" autocomplete='off' value="${id}" />
                    </div>
                    
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="nama" name="nama" autocomplete='off' value="${nama}" />
                    </div>

                    <div class="mb-3">
                        <label for="umur" class="form-label">Umur</label>
                        <input type="text" class="form-control" id="umur" name="umur" autocomplete='off' value="${umur}" />
                    </div>

                    <div class="mb-3">
                        <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                        <input type="text" class="form-control" id="jenis_kelamin" name="jenis_kelamin" autocomplete='off' value="${jenis_kelamin}" />
                    </div>
                  
                  
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary" name="edit" id="edit">Edit</button>
                    </div>
               
                    </form>
                    <!-- Akhir form edit -->
                    
               `

                ))


                // validasi form edit
                $('#formEdit').validate({

                    rules: {
                        nama: 'required',
                        umur: 'required',
                        jenis_kelamin: 'required'
                    },

                    messages: {
                        nama: "Field nama jangan kosong",
                        umur: 'Field umur jangan kosong',
                        jenis_kelamin: 'Field jenis kelamin jangan kosong'
                    },

                    highlight: function(element) {
                        $(element).children().addClass('error')
                    },
                    unhighlight: function(element) {
                        $(element).children().removeClass('error')
                    },

                    // update data
                    submitHandler: function(form) {
                        $.ajax({
                            url: 'updateData.php',
                            type: $(form).attr('method'),
                            data: $(form).serialize(),
                            success: function(response) {
                                $('[type=text]').val('')
                                loadData();

                                //munculkan pesan jika data berhasil di ubah
                                document.querySelector(".pesanUbah").style.display = "block";

                                // hapus peringatan ketika setelah setengah detik
                                setTimeout(function() {
                                    document.querySelector(".pesanUbah").style.display = "none";
                                }, 1500)

                            }
                        });
                    }
                });

                //akhiri modal
            }).on('hide.bs.modal', function(event) {
                $(this).find('#modal-edit').html("")
            })

        })
    </script>
</body>

</html>