<?php
include "ChefHeader.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chef Orders</title>
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
    position:absolute;
    top:20%;
    width:100%;
    text-align:center;
    color:#000;
    font-size:27px;
    letter-spacing:8px;
    text-transform: uppercase;
    font-family: 'Oleo Script';
}

.text .border{
    background-color:#EDF6F9;
    color:#fffff;
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
    height:25vw;
    background-color:#ebeef8;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    margin:2rem 0;
    box-shadow: .5rem .5rem 3rem rgba(0,0,0,0.2);
    font-family: 'Oleo Script';
}

.card h1{
    font-size:2.5rem;
    color: #333;
    margin:1.5rem 0;
}

.card .btn{
    padding: 1rem 2.5rem;
    background-color:green;
    border-radius: 2rem;
    margin: 1rem 0;
    text-transform:uppercase;
    color: white;
    font-size: 1.4rem;
}

.card .btn2{
    padding: 1rem 2.5rem;
    background-color:red;
    border-radius: 2rem;
    margin: 1rem 0;
    text-transform:uppercase;
    color: white;
    font-size: 1.4rem;
}

.btn3{
    width:5vw;
    padding: 1rem 2.5rem;
    background-color:#0B0742;
    border-radius: 2rem;
    margin: 1rem 0;
    text-transform:uppercase;
    color: #fdc094;
    font-size: 1.4rem;
    align-items: center;
    align-content: center;
}

.btn3:hover{
    transform: translateY(-2px);
    box-shadow:.5rem .5rem 2rem rgba(0,0,0,.2)
}

.btn3:active{
    transform:translateY(0);
    box-shadow: none;
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

.card .btn:hover,.btn2:hover,.btn3:hover{
    transform: translateY(-2px);
    box-shadow:.5rem .5rem 2rem rgba(0,0,0,.2)
}

.card .btn:active,.btn2:active,.btn3:active{
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
    
    

    .card:hover{
        transform: scale(0.9);
    }
}

input[type = "submit"]{
    width:20vw;
    font-family: 'Oleo Script';
    padding: 1rem 2.5rem;
    background-color:#0B0742;
    border-radius: 2rem;
    margin: 1rem 0;
    text-transform:uppercase;
    color: #fdc094;
    font-size: 1.4rem;
    align-items: center;
    align-content: center;
}

input[type = "submit"]:hover{
    transform: translateY(-2px);
    box-shadow:.5rem .5rem 2rem rgba(0,0,0,.2)
}

input[type = "submit"]:active{
    transform:translateY(0);
    box-shadow: none;
}

.confirm{
    padding: 1rem 2.5rem;
    background-color:green;
    border-radius: 2rem;
    margin: 1rem 0;
    text-transform:uppercase;
    color: white;
    font-size: 1.4rem;
}

a{
    text-decoration: none;
}
</style>
</head>
<body>
<div class="img1">
<div class="text">
        <span class="border">
            Received Orders
        </span>
</div>
</div>

<?php
include "connectdb.php";
$sql="SELECT OrderItem_ID, Item_ID,  Order_ID, Item_Name, Comments, OrderedItem_Status, Quantity from order_item where OrderedItem_Status ='cooking'";
$result=mysqli_query($conn,$sql);

    if(mysqli_num_rows($result)<=0){
        echo "<script>alert('There are no Orders.');</script>";
        echo "<script>window.location.href='ChefHome.php';</script>";
    }
        
    else{
    echo"<div class='menu'>
        <section>
             <div class='card-wrapper'>";
                
    while($rows=mysqli_fetch_array($result)){
        if ($rows['Ordered_Item_Status']== 'Cooking'){
        echo"
                <div class='card'>
                <center>
                    <h1>Order ID: ".$rows['Order_ID']."</h1>
                    <h3>
                        <table>
                            <tr><td>Order_ItemID:</td><td>".$rows['Order_ItemID']."</td></tr>
                            <tr><td>Item Name:</td><td>".$rows['Item_Name']."</td></tr>
                            <tr><td>Quantity:</td><td>".$rows['Quantity']."</td></tr>
                            <tr><td>Remarks:</td><td>".$rows['Remarks']."</td></tr>
                        </table>
                    </h3>
                    

                    <a href='ChefOrdersConfirmation.php?Order_ItemId=".$rows['Order_ItemID']."' class='confirm'>Confirm</a>
                    </center>
                 </div>";
                }
                else
                {                    
                }
}
    echo"</div>
        </section>
    </div>";
}

?>

</body>
</html>