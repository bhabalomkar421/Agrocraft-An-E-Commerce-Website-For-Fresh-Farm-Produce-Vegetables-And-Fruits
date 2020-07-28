<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- <link rel="stylesheet" href="jquery.rateyo.css"/> -->
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.css">
<!-- Latest compiled and minified JavaScript -->

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>
<body>
<script ></script>
<div class="container">
  <div class="row">
      <form action="apirating.php" method="post">
  <div>
  <div>
    <label>REVIEWS</label>
    <input type="text" name="name">
  </div>

  <div class="rateyo" id="rating"
  data-rateyo-rating="4"
  data-rateyo-num-stars="5"
  data-rateyo-score="3"
  >

</div> 
  <span class="result">0</span>
  <input type="hidden" name="rating">
 
</div>
<div ><input type="submit" name="add"></div>
</form>
</div>
</div>
<script>
$(function(){
  $(".rateyo").rateYo().on("rateyo.change",function(e,data){
    var rating=data.rating;
    $(this).parent().find('.score').text('score:'+$(this).attr('data-rateyo-score'));
    $(this).parent().find('.result').text('rating:'+rating);
    $(this).parent().find('input[name=rating]').val(rating);

  });
});


</script>




<!-- <div id="rateYo"></div>


    <script> 
    $(function () {
 
 $("#rateYo").rateYo({
   rating: 3.6
 });
    });
    
    </script> -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.js"></script>
</body>
</html>
<?php
$con = mysqli_connect('localhost','root','','test');
      

if(isset($_POST['name']))
{
  echo 'I';
$name=$_POST["name"];
$rating=$_POST["rating"];
$sql="INSERT INTO newrate (name,rate) VALUES ('$name','$rating')";
if(mysqli_query($con,$sql)){
  echo "NEW RATE";

}
}
      
      ?>