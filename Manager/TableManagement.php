<?php
include "ManagerHeader.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manager's Service</title>
    
    <style>
    body{
    background-image: url();
    background-size: 100% 100%;
    background-repeat: no-repeat;
    background-color: #EDF6F9;
}

.img1{
    min-height: 45%;
}

.text{
    position:relative;
    top:30%;
    width:100%;
    text-align:center;
    color:#000;
    font-size:27px;
    letter-spacing:8px;
    text-transform: uppercase;
    font-family: 'Oleo Script';
    padding:50px;

}

.text .border{
    background-color:#EDF6F9;
    padding:20px;
    
}

.text .border.trans{
    background-color:  transparent;
}

.card-wrapper{
    display:flex;
    align-items: center;
    align-content: center;
    flex-direction: column;
}

.card{
    width: 25vw;
    background-color:#ebeef8;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    margin:2rem 0;
    box-shadow: .5rem .5rem 3rem rgba(0,0,0,0.2);
    font-family: 'Oleo Script';
}

.card .card-img{
    width:100%;
    height:26rem;
    object-fit: cover;
    -webkit-clip-path: polygon(0 0, 100% 0%, 100% 100%, 0% 100%);
    clip-path: polygon(0 0, 100% 0%, 100% 100%, 0% 100%);
}

.card h1{
    font-size:2.5rem;
    color: #333;
    margin:1.5rem 0;
}

.about{
    font-size: 1.5rem;
    margin:1.5rem 0;
    font-style: normal;
    text-align:center;
    color: #333;
    padding-right: 1vw;
    padding-left: 1vw;
}

.card .btn{
    padding: 1rem 2.5rem;
    background-color:#0B0742;
    border-radius: 2rem;
    margin: 1rem 0;
    text-transform:uppercase;
    color: #fdc094;
    font-size: 1.4rem;
}

.card .popuptext {
    visibility: hidden;
    width: 16vw;
    background-color: #0066ff;
    color: #fff;
    text-align: center;
    border-radius: 6px;
    padding: 8px 0;
    position: absolute;
    z-index: 1;
    bottom: 120%;
    left: 50%;
    margin-left: -8vw;
}

.card .show {
    visibility: visible;
  }

.card .btn:hover{
    transform: translateY(-2px);
    box-shadow:.5rem .5rem 2rem rgba(0,0,0,.2)
}

.card .btn:active{
    transform:translateY(0);
    box-shadow: none;
}

@media screen and (min-width:700px){
.card-wrapper{
    flex-direction: row;
    flex-wrap:wrap;
    justify-content: center;
    align-items: center;
}

.card{
    margin:2rem;
    transition: transform.5s;
}

@keyframes fadeIn{
    from{
        opacity:0;
    }
    to{
        opacity:1;
    }
}
    
.card:nth-child(1){
        animation:fadeIn .5s 0.5s backwards;
    }

    .card:nth-child(2){
        animation:fadeIn .5s 0.5s backwards;
    }

    .card:nth-child(3){
        animation:fadeIn .5s 0.5s backwards;
    }
    .card:nth-child(4){
        animation:fadeIn .5s 0.5s backwards;
    }
    .card:nth-child(5){
        animation:fadeIn .5s 0.5s backwards;
    }
    .card:nth-child(6){
        animation:fadeIn .5s 0.5s backwards;
    }

    .card:hover{
        transform: scale(0.9);
    }
}

a{
    text-decoration:none;
}

.container { 
  display: flex;
  margin-left: 5%;
  margin-right: 0%;
  }

.table {
  margin-left: 10%;
  display: flex;
  flex-direction: row;
  font-size: 15px;
}

.circle{
	padding:3vw 3vw;
	margin: 3.5vw 3.5vw;
	height: 100px;
  	width: 100px;
  	background-color: rgb(167, 180, 201);
	border-radius: 70%;
	display: inline-block;
	text-align:center;
	color: black;
	text-transform: uppercase;
	font-weight:1000;
}

/* .button{
    margin-left: 25px;
    margin-top: 80px;
    background-color: #4CAF50;
    border: none;
    color: white;
    padding: 15px 10px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    border-radius: 8px;

    height: 50px;
    width: 100px;
} */

.container {  
    width:20vw;
    font-family: 'Oleo Script';
    padding: 1.5rem 2.5rem;
    background-color:#0B0742;
    border-radius: 2rem;
    margin: 1rem 0;
    text-transform:uppercase;
    font-size: 1.5rem;
    align-items: center;
    align-content: center;
}  

button {  
    background-color: lightblue;  
    color: black;  
} 

.button1{
    margin-left: 25px;
    margin-top: 80px;
    background-color: red;
    border: none;
    color: white;
    padding: 15px 10px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    border-radius: 8px;

    height: 50px;
    width: 100px;
}



/* table 2 test  */

span.blue {
  /* background: #3366CC; */
  background: #0B0742;
  border-radius: 0.8em;
  -moz-border-radius: 0.8em;
  -webkit-border-radius: 0.8em;
  /* color: #ffffff; */
  color: #fdc094;
  display: inline-block;
  font-weight: bold;
  line-height: 1.6em;
  margin-right: 15px;
  text-align: center;
  width: 1.6em; 
  
}

.blue{
    font-size: 100px;
    margin:10px;

}
</style>
</head>
<body>

<div class="img1">
<div class="text">
        <span class="border">
            Table Management
        </span><br>

</div>
</div>

<center>
            <button class='button container' style='color:#fdc094; margin-bottom: 15px; width:63px; padding:10px; text-align:center;'><a style='color:#fdc094;' href='ManagerHome.php'>Back</a></button>
<?php

    include "connectdb.php";

    $sql = "SELECT * FROM tables WHERE Display = 'shown'";
    $show = mysqli_query($conn,$sql);

    if (mysqli_num_rows($show) == 12)
    {
    echo "<button disabled class='button container' style='color:black; margin-bottom: 15px; width:58px; background-color: lightgray; padding:10px; text-align:center;'>Add</button>";
    }
    else
    echo "<button class='button container' style='color:#fdc094; margin-bottom: 15px; width:58px; padding:10px; text-align:center;'><a style='color:#fdc094;' href='AddTable.php'>Add</a></button>";


?>

    <?php

    include "connectdb.php";

    $sql = "SELECT * FROM tables WHERE Display = 'hidden'";
    $show = mysqli_query($conn,$sql);

    if (mysqli_num_rows($show) == 4)
    {
    echo "<button disabled class='button container' style='color:black; margin-bottom: 15px; width:88px; background-color: lightgray; padding:10px; text-align:center;'>Remove</button>";
    }
    else
    echo "<button class='button container' style='color:#fdc094; margin-bottom: 15px; width:88px; padding:10px; text-align:center;'><a style='color:#fdc094;' href='RemoveTable.php'>Remove</a></button>";


?>

<table>
		<tr>
			<td><h1><span class="blue">1</span><span class="blue">2</span><span class="blue">3</span><span class="blue">4</span></h1></td>
		</tr>
		<tr>
			<td><h1><span class="blue">5</span><span class="blue">6</span><span class="blue">7</span><span class="blue">8</span></h1></td>
		</tr>
        
        <?php 
        include "connectdb.php";
				$sql = "SELECT * FROM tables WHERE Table_ID = '9' AND Display = 'shown'";
				$show = mysqli_query($conn,$sql);
				
				if (mysqli_num_rows($show) > 0)
				{
				echo "<tr><td><h1><span class='blue'>9</span><span class='blue'>10</span><span class='blue'>11</span><span class='blue'>12</span></h1></td></tr>";
				}
				else

			?>

</table>



</center>





</body>
</html>