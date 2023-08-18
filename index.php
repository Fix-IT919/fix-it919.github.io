
<!DOCTYPE html>
<html>
<head>
	<title>Iconnect Sasa.co.ke</title>
	
		<link rel="stylesheet" type="text/css" href="style.css">

</head>

<style>
body {
   background-image: url('images/eth.jpg');
   height: auto;
   width:100%;
   flex-direction: right;
  
     
  background-size: cover;
  background-repeat: no-repeat;;
}

        .header {
    width: 60%;
    margin: 50px auto 0px;
    color: white;
    background:   #165baa ;
    text-align: center;
    border: 1px solid #2B684F;
    border-bottom: none;
    border-radius: 200px 40px 0px 0px;
    padding: 20px;
    font-family: brush script MT;
}
    
form, .content {
    width: 60%;
    margin: 0px auto;
    padding: 20px;
    border: 1px solid #F4F4F4 ;
    background:  snow ;
    border-radius: 0px 0px 10px 10px;
    color: lightseagreen;
}
.btn {
    padding: 10px;
    font-size: 15px;
    color: green;
    background:  teal;
    border: none;
    border-radius: 5px;

}

</style>
</head>
<body >

	<div class="header">
		<h2 style="color: lightgreen;"> Welcome To: <span style='font-size:25px; font-family:sans-serif ;'>iConnect Sasa WI-FI  </span></h2>
		<span style="color: floralwhite; font-size: 25px;">"for Affordable Internet"</span>
	<hr></div>

	
	
	<form method="post" action="login.php">
     		<div class="content">
         <center><img src="icon.jpeg" width="80%" height="10%"> </center>
		<div class="input-group">
			<label>Phone Number<br>
			<input type="text" placeholder="07XX XXX XXX" name="email" required="" >
		</div>
		
		<div class="input-group">
			<label>M-Pesa Code</label>
			<input type="text"  placeholder="RGP0ES9K" name="password" required="" >
		</div>
	</br><hr>
	<strong>Packages Available</strong><hr>


<div class="container">
<table border="strong">
	<td><div style="background color: lightgreen;  column-width: 50%;"> 
		<label>Unlimited Power Hour <br>@10/=</label>
		<button  type="submit" name="btn" class="btn" ><a href="#" style="color: lightgreen;"><b>PAY NOW</b></a></button>
	</div> </td>
	<td>

	<div style="background color: lightgreen; column-width: 50%; "> 
		<label>Unlimited 8hours <br> @30/=</label>
		<button  type="submit" name="btn" class="btn" ><a href="#" style="color: lightgreen;"><b>PAY NOW</b> </button></a>
	</div> </td>
</table>
</div>

		
		
		<div><center><a href="" style="text-decoration: none;">Contact: 0790835290 / 0798097353</a></center></div>
		
</div>
</form>
</div>
</body>

</html>