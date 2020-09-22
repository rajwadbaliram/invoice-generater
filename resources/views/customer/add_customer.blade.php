

<div id="customers">
	<form method="post" action="store_customer">
		@csrf

		<h1>!!!!! Customer Details !!!!!!!!!</h1>

		<table>
			<tr>
				<td>Invoice Number :</td>
				<!-- //<td>:</td> -->
				<td>
					<input type="text" name="id" hidden>
				</td>
			</tr>
			<tr>
				<td>Customer Name :</td>
				<!-- //<td>:</td> -->
				<td>
					<input type="text" name="name" placeholder="Customer Name">
					<span id="span">
						@error('name')
							{{$message}}
						@enderror
					</span>
				</td>
			</tr>

			<tr>
				<td>Customer Email :</td>
				<!-- <td>:</td> -->
				<td>
					<input type="text" name="email" placeholder="Customer Email">
					<span id="span">
						@error('email')
							{{$message}}
						@enderror
					</span>
				</td>
			</tr>

			<tr>
				<td>Customer Address :</td>
				<!-- <td>:</td> -->
				<td>
					<input type="text" name="address" placeholder="Customer Address">
					<span id="span">
						@error('address')
							{{$message}}
						@enderror
					</span>
				</td>
			</tr>

			<tr>
				<td>Contact Number :</td>
				<!-- <td>:</td> -->
				<td>
					<input type="text" name="mobile" placeholder="Contact Number">
					<span id="span">
						@error('mobile')
							{{$message}}
						@enderror
					</span>
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

#span{
	color: red;
}
</style>