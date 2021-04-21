
<?php
         if(isset($_POST["submit"])){
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "jquery";

            // Create connection
            $conn = new mysqli($servername, $username, $password, $dbname);

            // Check connection
            if ($conn->connect_error) {
               die("Connection failed: " . $conn->connect_error);
            } 
       
     $sql = "INSERT INTO worknote(Title,Takeanote) VALUES ('".$_POST["title"]."','".$_POST["takeanote"]."')";

            if (mysqli_query($conn, $sql)) {
               echo "";
            } else {
               echo "Error: " . $sql . "" . mysqli_error($conn);
            }
            $conn->close();
         }

      ?>

<!DOCTYPE html>
<html>
<head>
	 <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
	 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
	 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
  $("button").click(function(){
    $("#panel").toggle();
  });
});
</script>
<style> 
	*{
		margin: 0px;
		padding: 0px;
		box-sizing: border-box;
	}

#panel {
	  background-color: #ffff;
  border: solid 1px #c3c3c3;
  border-radius: 10px;
  width: 250px;
  height:auto;
  margin: 5% 0px 5px 6px;
  padding: 15px;
  position: absolute;
    
}
#panel:hover{
	box-shadow: rgba(50, 50, 93, 0.25) 0px 50px 100px -20px, rgba(0, 0, 0, 0.3) 0px 30px 60px -30px, rgba(10, 37, 64, 0.35) 0px -2px 6px 0px inset;
}
.btn:hover{
	background-color: #f1f3f4;
}
.do{
	margin-left: 25%;
}
.do:hover{
  color: gray;
  
}
input {
    background-color:transparent;
    border: none;
    border: 0px solid;
    height:30px;
    width:260px;
}
input:focus {
    outline:none;
}

textarea {
    background-color:transparent;
    border: none;
    padding: 0;
    outline: none;
    overflow-y: scroll;
    resize: none;
      width: 100%;
    color: inherit;
    font-family: inherit;
    font-size: inherit;
    font-weight: inherit;
    line-height: inherit;
    text-decoration: inherit;
    white-space: pre-wrap;
    word-wrap: break-word;
}
textarea:focus {
    outline-offset: 0px;
}

.textto{
  background-color: #ffff;
  border: solid 1px #c3c3c3;
  border-radius: 10px;
  width: 320px;
  height:auto;
  margin: 1%;
  padding: 15px;
  word-break: break-word;
  float: right; 
  box-shadow: rgba(60, 64, 67, 0.3) 0px 1px 2px 0px, rgba(60, 64, 67, 0.15) 0px 2px 6px 2px;
}

.delete {
  display: none;
}

.wrapper {
  overflow-y: scroll;
}
  .btn-close{
  	float: right;
  	
  } 
   .btn-close:hover{
   	background-color: red;
   } 
   
</style>
</head>
<body>
	<div id=panel>
  <!--  <?php  print_r($_POST) ?> -->
	<form action="" method="post">
    <div class="wrapper">
   <button type="button" class="btn btn-light delete">Delete</button>
    </div>
   <input type="text" name="title" placeholder="Title"><br>
    <textarea  class="notranslate" name="takeanote"  rows="4" placeholder="Take a note..." ></textarea>
    ​    <input type="submit" value="Done" name="submit" class="do">
  </form>
  </div>	
<button type="button" class="btn btn-lg text-center">
	<i class="fa fa-plus" style="color:#ffc107"></i>Take a note..</button>
 <div>
  
    <?php 

            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "jquery";

            // Create connection
            $conn = new mysqli($servername, $username, $password, $dbname);
  $sql = 'SELECT  * FROM worknote ORDER BY id DESC;';
         $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
              $id= $row['id'];
                echo "<div class='textto'>";
             echo "<a href='delete.php?id=$id' class='close'>"; 
               echo "<button type='button' class='btn-close' aria-label='Close'></button>";
               echo "</a>";
               echo "<div class='textitle'>";
              echo "title: " . $row['Title']. "<br>" ;
              echo "</div>";
              echo "<div class='textnote'>";
              echo "takeanote: " . $row['Takeanote']. "<br>";
              echo "</div>";
             // echo "title: " . $row['Title']. "<br>" ;echo "takeanote: " . $row['Takeanote']. "<br>";
               echo "</div>";
              echo "</div>";
            }
            }
            ?>


          <!-- Option 1: Bootstrap Bundle with Popper -->
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

</body>
</html>