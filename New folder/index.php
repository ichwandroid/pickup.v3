<!DOCTYPE html>
<html>
<head>
    <title>PHP CRUD Example with AJAX and Bootstrap Dashboard</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script>
        $(document).ready(function(){
            // Read records on page load
            readRecords();
        });

        function readRecords(){
            $.ajax({
                url: "read.php",
                type: "POST",
                success: function(response){
                    $("#records").html(response);
                }
            });
        }

        function addRecord(){
            var nis = $("#nis").val();
            var status = $("#status").val();

            $.ajax({
                url: "create.php",
                type: "POST",
                data: {NIS: nis, Status: status},
                success: function(response){
                    $("#add-modal").modal('hide');
                    $("#nis").val('');
                    $("#status").val('');
                    readRecords();
                }
            });
        }

        function deleteRecord(nis){
            var confirmation = confirm("Are you sure you want to delete this record?");

            if(confirmation){
                $.ajax({
                    url: "delete.php",
                    type: "POST",
                    data: {NIS: nis},
                    success: function(response){
                        readRecords();
                    }
                });
            }
        }

        // function showEditModal(nis){
        //     $.ajax({
        //         url: "get_record.php",
        //         type: "POST",
        //         data: {NIS: nis},
        //         success: function(response){
        //             var record = JSON.parse(response);

        //             $("#edit-nis").val(record.NIS);
        //             $("#edit-status").val(record.status);

        //             $("#edit-modal").modal('show');
        //         }
        //     });
        // }

        function showEditModal(nis) {
            $.ajax({
                type: "POST",
                url: "get_record.php",
                data: { NIS: nis },
                dataType: "json",
                success: function(data) {
                    // $('#edit-modal #id').val(data.ID);
                    $('#edit-modal #edit-nis').val(data.NIS);
                    $('#edit-modal #edit-status').val(data.Status);
                    $('#edit-modal').modal('show');
                }
            });
        }

        function updateRecord(){
            var nis = $("#edit-nis").val();
            var status = $("#edit-status").val();

            $.ajax({
                url: "update.php",
                type: "POST",
                data: {NIS: nis, Status: status},
                success: function(response){
                    $("#edit-modal").modal('hide');
                    readRecords();
                }
            });
        }
    </script>
</head>
<body>
    <div class="container-fluid">
        <h1 class="text-center">PHP CRUD Example with AJAX and Bootstrap Dashboard</h1>
        <hr>

        <div class="row">
            <div class="col-md-3">
                <button class="btn btn-primary btn-block" data-toggle="modal" data-target="#add-modal">Add Record</button>
            </div>
        </div>

        <hr>

        <div class="row">
            <div class="col-md-12">
                <div id="records"></div>
            </div>
        </div>
    </div>

    <!-- Add Record Modal -->
    <div id="add-modal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Add Record</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="nis">NIS:</label>
                        <input type="text" class="form-control" id="nis" name="nis">
                    </div>
                    <div class="form-group">
                        <label for="status">Status:</label>
                        <input type="text" class="form-control" id="status" name="status" values="ditunggu">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" onclick="addRecord()">Add Record</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Edit Record Modal -->
    <div id="edit-modal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Edit Record</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="edit-nis">NIS:</label>
                        <input type="text" class="form-control" id="edit-nis" name="nis">
                    </div>
                    <div class="form-group">
                        <label for="edit-status">Status:</label>
                        <input type="text" class="form-control" id="edit-status" name="status">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" onclick="updateRecord()">Save Changes</button>
                </div>
            </div>
        </div>
    </div>

</body>
</html>