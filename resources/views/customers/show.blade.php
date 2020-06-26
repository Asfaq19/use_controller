
<h1> Details for {{ $customer->name }} </h1>
<p><a href="/customers/{{ $customer->id }}/edit">Edit</a></p>

<form action="/customers/{{ $customer->id }}" method="post">
		
		@method('DELETE')

		@csrf

		<button type="submit">Delete</button>

</form>

<div class="col-12">
	<p><strong>Name: </strong>{{ $customer->name }}</p>
	<p><strong>Email: </strong>{{ $customer->email }}</p>
	<p><strong>Company: </strong>{{ $customer->company->name }}</p>
	<p><strong>Active: </strong>{{ $customer->active }}</p>

</div>




