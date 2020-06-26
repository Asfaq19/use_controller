
<h1>Customer List</h1>
<p><a href="customers/create">Add new Customer</a></p>

<div class="col-6">

    <p>Active:</p>
	<ul>
		@foreach($activeCustomers as $activeCustomer)

			<li>
				{{ $activeCustomer->name }} 
				({{ $activeCustomer->email }}) 
				({{ $activeCustomer->active }})
				({{ $activeCustomer->company->name }})
				({{ $activeCustomer->company->phone }})
			</li>

		@endforeach
	</ul>

</div>

<div class="col-6">
	<p>Inactive:</p>
	<ul>
		@foreach($inactiveCustomers as $inactiveCustomer)

			<li>
				 {{ $inactiveCustomer->name }}
				 ({{ $inactiveCustomer->email }}) 
				 ({{ $inactiveCustomer->active }})
				 ({{ $inactiveCustomer->company->name }})
				 ({{ $inactiveCustomer->company->phone }})
			</li>

		@endforeach
	</ul>
	
</div>

<div class="col-12">
	
	@foreach($companies as $company)

		<h3>{{  $company->name }}</h3>

		@foreach($company->customers as $customer)

		 <li>{{ $customer->name }}</li>

		@endforeach

	@endforeach

</div>

<hr>

<div class="col-12">
	<h1>New Division</h1>

	@foreach($customers as $customer)

		<div class="col-2">{{ $customer->id }}</div>
		<div class="col-4">
			<a href="/customers/{{ $customer->id }}">{{ $customer->name }}</a>
		</div>
		<div class="col-4">{{ $customer->company->name }}</div>
		<div class="col-2">{{ $customer->active }}</div>

	@endforeach

</div>


