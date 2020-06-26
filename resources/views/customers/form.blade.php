<p>Name:</p>
	<div class="form-group">
		<input type="text" name="name" value="{{ old('name') ?? $customer->name }}">
		<div> {{ $errors->first('name') }} </div>
	</div>

	<p>Email:</p>
	<div class="form-group">
		<input type="text" name="email" value="{{ old('email') ?? $customer->email }}">
		<div> {{ $errors->first('email') }} </div>

	</div>

	<p>Status:</p>
	<div class="form-group">
		<select name="active" id="active">
			<option value="" disabled> Select Customer Status </option>
			<option value="1" {{ $customer->active == 'Active' ? 'selected' : '' }}>Active</option>
			<option value="0" {{ $customer->active == 'Inactive' ? 'selected' : '' }}>Inactive</option>
		</select>
	</div>

	<p>Company:</p>
	<div class="form-group">
		<select name="company_id" id="company_id">
			@foreach($companies as $company)
				<option value="{{ $company->id }}" {{ $company->id == $customer->company_id ? 'selected' : '' }}>
					{{ $company->name }}
				</option>
			@endforeach
		</select>
	</div>

	@csrf