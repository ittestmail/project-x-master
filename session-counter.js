function start_countdown()
{
 var counter=3600;
 sessionStorage.myVar= setInterval(function()
 { 
  if(counter>=0)
  {
   document.getElementById("countdown").innerHTML="You Will Be Logged Out In <br>"+counter+" Sec";
  }
  if(counter==0)
  {
   $.ajax
   ({
     type:'post',
     url:'login-logout.php',
     data:{
      logout:"logout"
     },
     success:function(response) 
     {
      window.location="index.php";
      
     }
   });
   }
   counter--;
 }, 1000)

 
}




