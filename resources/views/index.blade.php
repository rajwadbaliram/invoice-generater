<div align="center" style="margin-top: 50">
	<h1> !!!!!!!!!!!!!! Search Customer Name !!!!!!!!!!</h1>

	<form method="post" action="search">
		@csrf

		<input type="text" name="search" >
		<input type="submit" name="submit" value="Search">
	</form>
	
	{{session('found')}}

	<br>
	<br>
	<hr>
	<h2>!!!!!!!!!!!! Add New Customer !!!!!!!!!!!!!</h2>
	<a href="Add_customer">Add Customer</a>
</div>