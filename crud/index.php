<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ajax Jquery CRUD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  </head>

  <body>

<form method="post" action="simpan.php">
   <input type="text" name="nama" placeholder="nama" autocomplete="off" require/>
    <input type="text" name="alamat" placeholder="alamat" autocomplete="off" require/>
     <button type="submit" name="submit">Simpan</button>
</form>


    <div id="content"></div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
      $(document).ready(function(){
        loadData()

        $('form').on('submit', function(e){
          e.preventDefault()

          $.ajax({
            type:$(this).attr('method'),
            url:$(this).attr('action'),
            data:$(this).serialize(),
            success:function(){
              loadData()
              resetForm()
            }
          })
        })
      })

      function loadData(){
        $.ajax({
          url: 'data.php',
          type:'get',
          success:function(data){
            $('#content').html(data)
            $('.hapusData').click(function(e){
              e.preventDefault()

              $.ajax({
                type:'get',
                url:$(this).attr('href'),
                success:function(){
                  loadData()
               }
             })
            })

            $('.updateData').click(function(e){
              e.preventDefault()
              $('[name=nama]').val($(this).attr('nama'))
              $('[name=alamat]').val($(this).attr('alamat'))
              $('form').attr('action', $(this).attr('href'))


            })
          }
        })
      }

      function resetForm(){
        $('[type=text]').val('')
        $('form').attr('action', 'simpan.php')
      }

    </script>
  </body>
</html>