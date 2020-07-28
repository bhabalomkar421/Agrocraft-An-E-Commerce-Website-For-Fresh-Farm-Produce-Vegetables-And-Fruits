<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <a href="https://icons8.com/icon/83325/roman-soldier"></a> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <!-- <script src="jquery-3.5.1.min.js"></script> -->

    <script src="https://kit.fontawesome.com/c587fc1763.js" crossorigin="anonymous"></script>
</head>
<body>
<i class="fa fa-star" data-index="0"></i>

<i class="fa fa-star x" data-index="1"></i>
<i class="fa fa-star" data-index="2"></i>
<i class="fa fa-star" data-index="3"></i>
<i class="fa fa-star" data-index="4"></i>




<script>

$(document).ready(function () {
            var ratedIndex = -1;

    resetStarColors();

    if (localStorage.getItem('ratedIndex') != null) {
        setStars(parseInt(localStorage.getItem('ratedIndex')));
        // uID = localStorage.getItem('uID');
    }

    $('.fa-star').on('click', function () {
       ratedIndex = parseInt($(this).data('index'));
       localStorage.setItem('ratedIndex', ratedIndex);
       saveToTheDB(ratedIndex);
    });

    $('.fa-star').mouseover(function () {
        resetStarColors();
        var currentIndex = parseInt($(this).data('index'));
        setStars(currentIndex);
    });

    $('.fa-star').mouseleave(function () {
        resetStarColors();

        if (ratedIndex != -1)
            setStars(ratedIndex);
    });
});

function saveToTheDB(ratedIndex) {
   
    $.ajax({
        url:"newratings.php",
       method:"POST",
       dataType: 'json',
       data:{ratedIndex: ratedIndex
       },success: function (response) {
   $("#feedback").html(response);
}
    });
    console.log(ratedIndex)
}

function setStars(max) {
    for (var i=0; i <= max; i++)
        $('.fa-star:eq('+i+')').css('color', 'green');
}

function resetStarColors() {
    $('.fa-star').css('color', 'black');
}
</script>
<?php 
if(isset($_POST['ratedIndex']))
$ratings = $_POST["ratedIndex"];
echo $ratings;
?>
</body>
</html>