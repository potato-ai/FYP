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

/* The switch - the box around the slider */
.switch {
  position: relative;
  display: inline-block;
  width: 60px;
  height: 34px;
}

/* Hide default HTML checkbox */
.switch input {
  opacity: 0;
  width: 0;
  height: 0;
}

/* The slider */
.slider {
  position: absolute;
  cursor: pointer;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: #ccc;
  -webkit-transition: .4s;
  transition: .4s;
}

.slider:before {
  position: absolute;
  content: "";
  height: 26px;
  width: 26px;
  left: 4px;
  bottom: 4px;
  background-color: white;
  -webkit-transition: .4s;
  transition: .4s;
}

input:checked + .slider {
  background-color: #2196F3;
}

input:focus + .slider {
  box-shadow: 0 0 1px #2196F3;
}

input:checked + .slider:before {
  -webkit-transform: translateX(26px);
  -ms-transform: translateX(26px);
  transform: translateX(26px);
}

/* Rounded sliders */
.slider.round {
  border-radius: 34px;
}

.slider.round:before {
  border-radius: 50%;
}



</style>
</head>
<body>
<div class="img1">
<div class="text">
        <span class="border">
            Edit Menu Availability
        </span>
</div>
</div>

<!-- <label class="switch">
  <input type="checkbox">
  <span class="slider round"></span>
</label> -->


<div class="img1">
<div class="text">
        <span class="border">
            Main Cousine
        </span>
</div>
</div>
<section>
    <div class="card-wrapper">
            <div class="card">
                <img src="../image/editmenu.jfif" alt="card backgroud" class="card-img">
                <h1>Chicken Rice</h1>
                <label class="switch" style="margin-bottom: 15px;">
                <input type="checkbox">
                <span class="slider round"></span>
                </label>
            </div>
            <div class="card">
                <img src="../image/editmenu.jfif" alt="card backgroud" class="card-img">
                <h1>Chicken Rice</h1>
                <label class="switch" style="margin-bottom: 15px;">
                <input type="checkbox">
                <span class="slider round"></span>
                </label>
            </div>
            <div class="card">
                <img src="../image/editmenu.jfif" alt="card backgroud" class="card-img">
                <h1>Chicken Rice</h1>
                <label class="switch" style="margin-bottom: 15px;">
                <input type="checkbox">
                <span class="slider round"></span>
                </label>
            </div>
            <div class="card">
                <img src="../image/editmenu.jfif" alt="card backgroud" class="card-img">
                <h1>Chicken Rice</h1>
                <label class="switch" style="margin-bottom: 15px;">
                <input type="checkbox">
                <span class="slider round"></span>
                </label>
            </div>
            <div class="card">
                <img src="../image/editmenu.jfif" alt="card backgroud" class="card-img">
                <h1>Chicken Rice</h1>
                <label class="switch" style="margin-bottom: 15px;">
                <input type="checkbox">
                <span class="slider round"></span>
                </label>
            </div>
            <div class="card">
                <img src="../image/editmenu.jfif" alt="card backgroud" class="card-img">
                <h1>Chicken Rice</h1>
                <label class="switch" style="margin-bottom: 15px;">
                <input type="checkbox">
                <span class="slider round"></span>
                </label>
            </div>

 

    </div>
    </section>
    

<div class="img1">
<div class="text">
        <span class="border">
            Dessert
        </span>
</div>
</div>

    <section>
    <div class="card-wrapper">
            <div class="card">
                <img src="../image/editmenu.jfif" alt="card backgroud" class="card-img">
                <h1>Chicken Rice</h1>
                <label class="switch" style="margin-bottom: 15px;">
                <input type="checkbox">
                <span class="slider round"></span>
                </label>
            </div>
            <div class="card">
                <img src="../image/editmenu.jfif" alt="card backgroud" class="card-img">
                <h1>Chicken Rice</h1>
                <label class="switch" style="margin-bottom: 15px;">
                <input type="checkbox">
                <span class="slider round"></span>
                </label>
            </div>
            <div class="card">
                <img src="../image/editmenu.jfif" alt="card backgroud" class="card-img">
                <h1>Chicken Rice</h1>
                <label class="switch" style="margin-bottom: 15px;">
                <input type="checkbox">
                <span class="slider round"></span>
                </label>
            </div>
            <div class="card">
                <img src="../image/editmenu.jfif" alt="card backgroud" class="card-img">
                <h1>Chicken Rice</h1>
                <label class="switch" style="margin-bottom: 15px;">
                <input type="checkbox">
                <span class="slider round"></span>
                </label>
            </div>
            <div class="card">
                <img src="../image/editmenu.jfif" alt="card backgroud" class="card-img">
                <h1>Chicken Rice</h1>
                <label class="switch" style="margin-bottom: 15px;">
                <input type="checkbox">
                <span class="slider round"></span>
                </label>
            </div>
            <div class="card">
                <img src="../image/editmenu.jfif" alt="card backgroud" class="card-img">
                <h1>Chicken Rice</h1>
                <label class="switch" style="margin-bottom: 15px;">
                <input type="checkbox">
                <span class="slider round"></span>
                </label>
            </div>

 

    </div>
    </section>


    <div class="img1">
<div class="text">
        <span class="border">
            Drinks
        </span>
</div>
</div>

    <section>
    <div class="card-wrapper">
            <div class="card">
                <img src="../image/editmenu.jfif" alt="card backgroud" class="card-img">
                <h1>Chicken Rice</h1>
                <label class="switch" style="margin-bottom: 15px;">
                <input type="checkbox">
                <span class="slider round"></span>
                </label>
            </div>
            <div class="card">
                <img src="../image/editmenu.jfif" alt="card backgroud" class="card-img">
                <h1>Chicken Rice</h1>
                <label class="switch" style="margin-bottom: 15px;">
                <input type="checkbox">
                <span class="slider round"></span>
                </label>
            </div>
            <div class="card">
                <img src="../image/editmenu.jfif" alt="card backgroud" class="card-img">
                <h1>Chicken Rice</h1>
                <label class="switch" style="margin-bottom: 15px;">
                <input type="checkbox">
                <span class="slider round"></span>
                </label>
            </div>
            <div class="card">
                <img src="../image/editmenu.jfif" alt="card backgroud" class="card-img">
                <h1>Chicken Rice</h1>
                <label class="switch" style="margin-bottom: 15px;">
                <input type="checkbox">
                <span class="slider round"></span>
                </label>
            </div>
            <div class="card">
                <img src="../image/editmenu.jfif" alt="card backgroud" class="card-img">
                <h1>Chicken Rice</h1>
                <label class="switch" style="margin-bottom: 15px;">
                <input type="checkbox">
                <span class="slider round"></span>
                </label>
            </div>
            <div class="card">
                <img src="../image/editmenu.jfif" alt="card backgroud" class="card-img">
                <h1>Chicken Rice</h1>
                <label class="switch" style="margin-bottom: 15px;">
                <input type="checkbox">
                <span class="slider round"></span>
                </label>
            </div>

 

    </div>
    </section>

    <center>
    <div class="container" style="margin-bottom: 15px; width:5vw;">
    <a href="#"><div class="button" style="color:#fdc094">Save</div></a>
    </center>

    <center>
    <div class="container" style="margin-bottom: 20px;">
    <a href="EditMenu.php"><div class="button" style="color:#fdc094">Return To The Previous Page</div></a>
    </center>

</body>
</html>