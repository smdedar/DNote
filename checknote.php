<?php
 
  include_once'connect.php';
  $id="";
    if(isset($_POST['getnote'])){

        $id=$_POST['id'];
        
        $query=("SELECT * FROM `dnote` WHERE id='$id' ");
        $result= mysqli_query($connect,$query);

        while($row=mysqli_fetch_array($result)){
       
            $gnote= $row['note'];
        }
     
    }
    //error_reporting(0);
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
  <link rel="stylesheet" href="jquery.cleditor.css" />
  <script src="jquery.cleditor.js"></script>
  <script src="jquery.cleditor.min.js"></script>

  <script>
    $(document).ready(function () {
      $("#input").cleditor();
    });
  </script>


  <style>
    body {
      background-color: #ccf2ff;
    }

    .container {
      margin-top: 2%;
    }
  </style>
  <title>Check Note</title>
</head>

<body>

  <div class="container">
    <div class="card col-lg-10 mx-auto">
      <div class="card-body">
        <form action="" method="post">
          <div class="form-row">
            <div class="form-group col-md-3">
              <input type="noteid" name="id"  value="<?php echo $id;?>" class="form-control" id="inputEmail4" placeholder="Note ID">
            </div>
            <div class="form-group col-md-3">
              <button class="btn btn-success btn-block" name="getnote"   type="submit">Get Note</button>
            </div>
          </div>
       
          <div class="form-group">
            <textarea id="input" name="note"  class="form-control" placeholder="dedar">
              <?php 
            if(isset($_POST['getnote'])){      
             echo $gnote;
          }
    
            ?>
            </textarea>
          </div>
          <button class="btn btn-success btn-block" name="update" type="submit">Save</button>
        </form>
      </div>
    </div>
  </div>

</body>

</html>


<?php
    
    include_once'connect.php';
    if(isset($_POST['update'])){
        $note=$_POST['note'];
        $id=$_POST['id'];
        $query= (" UPDATE `dnote` SET `note`='$note' WHERE id='$id' ");
        mysqli_query($connect,$query);
        
    }
?>