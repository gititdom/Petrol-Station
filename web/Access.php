<?php
session_start();
if(!isset($_SESSION["uid"])){
   header("location: Login.html");
}

