<?php
header("Content-type: text/css; charset: UTF-8");
session_start();
switch ($_SESSION['titleFont']) {
  case "roboto":
   $font = "font-family: 'Roboto', sans-serif;";
   break;
   case "slabo":
   $font = "Slabo 27px', serif;";
   break;
   case "quicksand":
   $font = "'Quicksand', sans-serif;";
   break;
   case "lobster":
   $font = "'Lobster', cursive;";
   break;
}
for ($i=1; $i <7;$i++) {
    echo "h".$i." {";
    echo "color: rgba(".$_SESSION['titleColor'].");";
    echo "font-family: ".$font;
    echo "}";
}
 ?>


/* --------------------- Global --------------------- */

html, body {
    height: 100%;
}

body {
    padding-top: 50px;
}

a {
  color: rgba(<?php echo $_SESSION['linkColor'] ?>) !important;
}
.btn {
  background-color: rgba(<?php echo $_SESSION['buttonColor'] ?>) !important;
}
.navbar {
  background-color: rgba(<?php echo $_SESSION['navbarColor'] ?>) !important;
}
#login-dp{
    min-width: 250px;
    padding: 14px 14px 0;
    overflow:hidden;
    background-color:rgba(255,255,255,.8);
}
.row{
  margin: 0;
  padding: 0;
}
#nbNew{
  color: white;
  background-color: red;
}

/* --------------------- Home --------------------- */

header.carousel {
    height: 70%;
}

header.carousel .item, header.carousel .item.active, header.carousel .carousel-inner {
    height: 100%;
}

header.carousel .fill {
    width: 100%;
    height: 100%;
    background-position: center;
    background-size: cover;
}


/* --------------------- Repertory --------------------- */

.img-portfolio {
    margin-bottom: 30px;
}

.img-hover:hover {
    opacity: 0.8;
}

.portfolio-item {
    height: 250px;
    margin-bottom: 30px;
    overflow: hidden;
}
.img-responsive{
  height: 200px;
}

/* --------------------- Contact --------------------- */

form textarea {
    height: 200px;
}

thead {
    background: #333;
    color: #fff;
}

#contactTable th{
  border-right: 1px solid black;
  height: 15px;
  text-align:center;
  padding: 5px;
  color: white;
  background-color: black;
}
#contactTable td:not(.btnTd){
  border: 1px solid black;
  height: 15px;
  text-align:center;
  padding: 5px;
}
.btnTd button{
  margin-left: 5px;
}
.btnTd{
  text-align:center;
  padding: 5px;
}
#contactTable input{

  width: 100px;
}
/* --------------------- Footer --------------------- */

footer {
    margin: 50px 0;
}


/* --------------------- Responsive  --------------------- */

@media(max-width:991px) {
    .customer-img, .img-related {
        margin-bottom: 30px;
    }
}

@media(max-width:767px) {
    .img-portfolio {
        margin-bottom: 15px;
    }
    header.carousel .carousel {
        height: 70%;
    }
}


/* --------------------- login form  --------------------- */

.loginform {
    top: 200px;
}
/* --------------------- admin form  --------------------- */

input[type=range][orient=vertical] {
    writing-mode: bt-lr;
    /* IE */
    -webkit-appearance: slider-vertical;
    /* WebKit */
    width: 8px;
    height: 175px;
    padding: 0 5px;
    margin-left: 10px;
}

input[type=number]::-webkit-inner-spin-button,
input[type=number]::-webkit-outer-spin-button {
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
    margin: 0;
}

.littleBox {
    width: 50px;
}

legend{
  font-size: 1em;
}

#selectBox{
  height: 100px;
  padding-top: 30px;
}

#submitBox{
  padding-top: 20px;
  text-align : center;
}

#hideArrows {
  margin-bottom : 20px;
}

/* --------------------- contact form  --------------------- */

#profil_image{
  margin-top : 10px;
  width : 250px;
  height : 250px;
  border : 1px solid black;
  background-image: url("/challengePHP/img/defaultProfileImage.png");
  background-repeat: no-repeat;
  background-position: center;
  padding-top: 2px;
  padding-left: 2px;
}
#yourImage {
  width : 244px;
  height : 244px;
}
form p{
  font-size: 10px;
  color: red;
}

/* --------------------- snow container  --------------------- */
#snowflakeContainer {
    position: absolute;
    left: 0px;
    top: 0px;
}
.snowflake {
    padding-left: 15px;
    font-family: Cambria, Georgia, serif;
    font-size: 14px;
    line-height: 24px;
    position: fixed;
    color: #FFFFFF;
    user-select: none;
    z-index: 2000;
    text-shadow: 1px 1px 1px 1px lightblue;
}
.snowflake:hover {
    cursor: default;
}

/* --------------------- gestion contact  --------------------- */
.image img{
width : 100px;
height : 100px;
margin-top: 15px;
}

.id-card{
  border: 1px solid darkgrey;
  border-radius : 5px;
  margin-left:5px;
}

#confirm{
  position: absolute;
  width: 300px;
  heigth: 150px;
  background-color : white;
  z-index: 300;
  left : 50%;
  top : 50%;
  transform : translate(-50%, -50%);
  border : 1px solid gray;
  text-align: center;
}
#confirm button{
  margin-left: 10px;
  margin-bottom: 20px;
  margin-top: 10px;
}
