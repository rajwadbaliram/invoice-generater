

<div id="customers">

		@csrf
		
	{{ session('delete')}}
	{{ session('product')}}

	<h1>!!!!!!!!!!!!!! Product List !!!!!!!!!!!!!</h1>

	<form>
		<table>
			<tr>
				<td>Innovoice Number</td>
				<td>Product Name</td>
				<td>Amount</td>
				<td>Action</td>
			</tr>

			@foreach($product_list as $list)
				 <tr>
				 	<td>{{ $list->id}}</td>
				 	<td>{{ $list->name}}</td>
				 	<td>{{ $list->amount}}</td>
				 	
				 	<td>
				 		<a href="delete_product/{{$list->id}}">Delete</a> | 
				 		<a href="print_invoice/{{$list->cus_id}}">Print Invoice</a>
				 	</td>
				 </tr>
			@endforeach
		</table>
<!-- 
		<br><br><br>
		<a href="create">Add Customer</a> <br><br><br> -->
	</form>
</div>

<style>
#customers {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 60%;
  margin-top: 70;
  margin-left: 30%;
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