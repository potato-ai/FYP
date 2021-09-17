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
</style>
</head>

<body>
<div class="img1">
<div class="text">
        <span class="border">
            Edit Menu Details
        </span>
</div>
</div>
<section class="section section-light">
<form action="EditMenu.php" method="post" class="search">
			<input type="text" name="search_key" placeholder="Enter Name Keyword!"/>
			<input type="submit" value="Search"/>
			<br />
		</form>

<?php

                    include "connectdb.php";
                    
                    $search_key = isset($_POST['search_key'])?
			$_POST['search_key']:'';
	
			$sql = "SELECT * FROM item WHERE Item_Name LIKE '%".
			$search_key. "%'";
			$result=mysqli_query($conn, $sql);
	
			if(mysqli_num_rows($result) <= 0)
			{
			echo "<script>alert('No Result!');</script>";
			}
			else
			{
			}
                            echo "<table class='table table-bordered table-striped'>";
                                echo "<thead>";
                                    echo "<tr>";
                                        echo "<th>ID</th>";
                                        echo "<th>Item Name</th>";
                                        echo "<th>Price</th>";
                                        echo "<th>Availability</th>";
                                        echo "<th>Image</th>";
                                        echo "<th>Edit</th>";
                                    echo "</tr>";
                                echo "</thead>";
                                echo "<tbody>";
                                while($row = mysqli_fetch_array($result)){
                                    echo "<tr>";
                                        echo "<td>" . $row['Item_ID'] . "</td>";
                                        echo "<td>" . $row['Item_Name'] . "</td>";
                                        echo "<td>" . $row['Price'] . "</td>";
                                        echo "<td>" . $row['Availability'] . "</td>";
                                        echo "<td id='photo'>
            <div class='image-preview' id='imagePreview'>
            <img src = '".$row['Image']."' width='100vw' height='80vw' alt = 'Image Preview' class='image-preview__image'/>
            <span class='image-preview__default-text'></span>
            </div></td>";
			echo "<td><a href='EditFood.php?id=".$row['Item_ID']."'<button>Edit</button></a></td>";
			echo "</tr>";
			}
			echo "</table>";
			echo "</center>";
		?>
		<br/>
		<a href='AddFood.php'><button class="insert">Add New Food</button></a><a href="Selection.php"><input type="button"value="Back to Previous Page" /></a>
</section>
<script>
const photo = document.getElementById("photo");
const previewContainer = document.getElementById("imagePreview");
const previewImage =  previewContainer.querySelector(".image-preview__image");
const previewDefaultText =  previewContainer.querySelector(".image-preview__default-text");

photo.addEventListener("change", function(){
    const file =  this.files[0];

    if(file){
        const reader = new FileReader();

        previewDefaultText.style.display="none";
        previewImage.style.display = "block";

        reader.addEventListener("load", function(){
           // console.log(this);
            previewImage.setAttribute("src", this.result);

        });
        reader.readAsDataURL(file);
    }else{
        previewDefaultText.style.display="null";
        previewImage.style.display = "null";
        previewImage.setAttribute("src", "");
    }

});

</script>	

</body>
</html>