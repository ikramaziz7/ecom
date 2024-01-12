const button =document.querySelector("#btnLogout");

button.addEventListener('click',e=>{

 button.innerHTML=button.innerHTML+'<?php session_destroy() ; header("Location: Login_form.php");?>'
})