<!DOCTYPE html>
<html>
<head>
  <title>KEEP Notes</title>
   <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
  $(".child").mouseenter(function(){
    $("#panel").slideDown("slow");
    
      });
});
</script>
  <style>
    *{
      margin: 0px;
      padding: 0px;
      box-sizing: border-box;
      background-color: black;
    }
    .child{
      display: grid;
    place-items: center;
    }
    #panel{
  padding: 5px;
  text-align: center;
  background-color: #e5eecc;
  border: solid 1px #c3c3c3;
  width: 18vw;
  margin-left: 41%;
}

#panel {
  font-size: 25px;
  padding: 30px;
  display: none;
}
 
  </style>
</head>
<body>
  <div class="child">
    <a href="display.php">
   <img src="image/download.png" alt="sticky note image" class="img-responsive"></a>
   </div>
   <div id="panel">KEEP <span style="color: #e4a505">Notes</span></div>
</body>
</html>
  
 