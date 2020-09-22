

<div id="customers">
	
	{{ session('insert')}}

	<form method="post" action="../store_product">
		@csrf
		<h1>!!!!!!!!! Please Enter Product Details !!!!!!!!!!</h1>
		<table>
			<tr>
				<td>product Id :</td>
				<td>
					<input type="text" name="id" hidden>
					
				</td>
			</tr>

			<tr>
				<td>Customer Id :</td>
				<td>
					<input type="text" name="cus_id" value="{{$result->id}}">	
				</td>
			</tr>

			<tr>
				<td>Product Name :</td>
				<td>
					<input type="text" name="name">
				</td>
			</tr>

			<tr>
				<td>Product Price :</td>
				<td>
					<input type="text" name="amount">
				</td>
			</tr>

			<tr>
				<td></td>
				<td>
					<input type="submit" name="submit" value="Submit">
				</td>
			</tr>
		</table>
	</form>
</div>


<style>
#customers {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 60%;
  margin-top: 50;
  margin-left: 35%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #4CAF50;
  color: white;
}

</style>