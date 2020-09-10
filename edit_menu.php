 <?php
  include 'koneksi.php';
  include 'header.php';
  
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Ajax Update</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body style="background-color: #804000;">
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<div class="container" style="background-color: white">
  <h2>Update Menu</h2>
        <div class="form-group">
                <label>Jadwal</label>
                <input type="text" id="Jadwal" class="form-control">
              </div>
              <div class="form-group">
                <label>Menu 1</label>
                <input type="text" id="menu_1" class="form-control">
              </div>

               <div class="form-group">
                <label>Menu 2</label>
                <input type="text" id="menu_2" class="form-control">
              </div>

              <div class="form-group">
                <label>Menu 3</label>
                <input type="text" id="menu_3" class="form-control">
              </div>

              <div class="form-group">
                <label>Menu 4</label>
                <input type="text" id="menu_4" class="form-control">
              </div>
                <input type="hidden" id="userId" class="form-control">


  

 
          <div class="modal-footer">
            <a href="#" id="save" class="btn btn-primary pull-right">Update</a>
            <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
          </div>
</div>
</body>
<?php
  include 'footer.php';
?>
</html>

