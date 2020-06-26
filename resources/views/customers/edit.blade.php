
<h1>Edit Details for {{$customer->name}}</h1>

<form action="/customers/{{ $customer->id }}" method="post">

	@method('PATCH')

	@include('customers.form')

	<button type="submit">Save customer</button>

	
</form>



