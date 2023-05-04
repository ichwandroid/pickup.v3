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