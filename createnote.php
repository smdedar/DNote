<?php
 
$chars = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';

$id = substr(str_shuffle($chars), 0,6);
?>
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <script src="jquery-1.6.3.js"></script>
  <link rel="stylesheet" href="jquery.cleditor.css"/>
  <script src="jquery.cleditor.js"></script>
  <script src="jquery.cleditor.min.js"></script>

  <script>
    $(document).ready(function () {
      $("#input").cleditor();
    });
  </script>


  <style>
  body{
    background-color: #ccf2ff;
  }

  .container{
    margin-top: 2%;
  }
  </style>

  <title>Create Note</title>
</head>

<body>

  <div class="container">
    <div class="card col-lg-10 mx-auto">
      <div class="card-body">
        <form action="" method="post">
            <div class="form-row">
                <div class="form-group col-md-3">
                  <input type="noteid" name="id" class="form-control" value="<?php echo $id;?>" id="inputEmail4" placeholder="Note ID">
                </div>
                <div class="form-group col-md-3">
                    
                </div>
                
              </div>
          
          <div class="form-group">
            <textarea id="input" name="note" class="form-control"></textarea>
          </div>
          <button class="btn btn-success btn-block" name="submit" type="submit">Save</button>
        </form>
      </div>
    </div>
  </div>

</body>

</html>

<?php
    include_once'connect.php';
    if(isset($_POST['submit'])){
        $id=$_POST['id'];
        $note=$_POST['note'];
        $query= (" INSERT INTO `dnote` (`id`, `note`) VALUES ('$id', '$note') ");
        mysqli_query($connect,$query);
    }
?>