// function ShowPassword()
// {
// 	if(document.getElementById("pass").value!="")
// 	{
// 		document.getElementById("pass").type="text";
// 		document.getElementById("show").style.display="none";
// 		document.getElementById("hide").style.display="block";
// 	}
// }

// function HidePassword()
// {
// 	if(document.getElementById("pass").type == "text")
// 	{
// 		document.getElementById("pass").type="password"
// 		document.getElementById("show").style.display="block";
// 		document.getElementById("hide").style.display="none";
// 	}
// }
function change() {
   var x = document.getElementById('user-password').type;

   if (x == 'password') {
      document.getElementById('user-password').type = 'text';
      document.getElementById('mybutton').innerHTML = '<img src="../assets/img/visible.png"/>';
   }
   else {
      document.getElementById('user-password').type = 'password';
      document.getElementById('mybutton').innerHTML = '<img src="../assets/img/hide.png"/>';
   }
}
function changeIcon() {
   var x = document.getElementById('user-repassword').type;

   if (x == 'password') {
      document.getElementById('user-repassword').type = 'text';
      document.getElementById('mybutton2').innerHTML = '<img src="../assets/img/visible.png"/>';
   }
   else {
      document.getElementById('user-repassword').type = 'password';
      document.getElementById('mybutton2').innerHTML = '<img src="../assets/img/hide.png"/>';
   }
}