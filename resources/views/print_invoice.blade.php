<div id="div">

	<div>
		<h1>WEBWIDE IT SOLUTIONS</h1>
		Snehadeep Complex,101 <br>
		Above HDFC Bank,Pune <br>
		Tel:9822864888
	</div>
	<hr> <br>
	
	<div>
		
		@foreach($customerdata as $d)  

			 To :
				<h2>{{$d->name}} </h2>
				Email: {{$d->email}} <br>
				Address: {{$d->address}} <br>
				Contact No: {{$d->mobile}}
			

		@endforeach
	</div>
	<br><br>

	<div>
		<table id="customers">
		 	<tr>
		 		<th> Product Id </th>
		 		<th> Product Name </th>
		 		<th> Product Amount </th>
		 	</tr>

			@foreach($data as $d)
				<tr>
					<td> {{$d->id}} </td>
					<td> {{$d->name}} </td>
					<td> {{$d->amount}} </td>
				</tr>
			@endforeach
			<tr>
				<td></td>
				<th>Total Amount</th>
				<th> {{$total}} </th>
			</tr>

		</table> 

	</div>

	<div align="center" style="margin-top: 50">
		<h2><p>Thank you for shopping with us. Please come again</p> </h2>
	</div>

</div>


<style type="text/css">
	
	#div{
		margin-top: 50;
		margin-left: 30;
		margin-right: 50;
	}

	#customers {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 80%;
 
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