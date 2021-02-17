
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create Projects') }}
        </h2>
    </x-slot>

    <div class="py-5">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                   <div class="flex justify-center">
				   <div class="panel panel-primary w-100">
        
		    <form id="registerindi" action="{{ route('createproject')}}" method="post">	
			
            @csrf
			<input id="regionselected"></input>
			<input id="provinceselected"></input>
			<input id="municipalityselected"></input>
			<input id="barangayselected"></input>
				<div class="form-row">
							

					<div class="form-group col-md-2">
						<label style="font-size:12px" for="region" class="label mt-1 sr-only">Region * </label>
						<select class="mb-2 border-2 rounded-lg w-full p-2 @error('region') border-red-500 @enderror dynamic" 
								data-dependent="province"
								name="region"
								id="region">
								<option value="{{ old('region') }}">@if (old('region') != null) {{ old('region') }} @else Select Region * @endif  </option>
								
									@foreach($region_list as $region)
										<option value="{{ $region->region}}">{{ $region->region}}</option>
									@endforeach
								
								
													   
							</select>
						@error('region')
							<div class="text-red-500 mt-2 text-sm">
								{{ $message }}
							</div>
						@enderror
					</div>

					<div class="form-group col-md">
						<label style="font-size:12px" for="province" class="label mt-1 sr-only">Province</label>
						<select class="mb-2 border-2 w-full p-2 rounded-lg @error('province') border-red-500 @enderror dynamic" 
								data-dependent="municipality"
								name="province" 
								id="province" >
								<option value="{{ old('province') }}">@if (old('province') != null) {{ old('province') }} @else Select Province * @endif  </option>
						</select>
						@error('province')
								<div class="text-red-500 mt-2 text-sm">
									{{ $message }}
								</div>
						@enderror
						
					</div>

					<div class="form-group col-md">
						<label style="font-size:12px" for="municipality" class="label mt-1 sr-only">Municipality</label>
						<select class="mb-2 border-2 w-full p-2 rounded-lg @error('municipality') border-red-500 @enderror dynamic" 
							data-dependent="barangay"
							name="municipality" 
							id="municipality">
							<option value="{{ old('municipality') }}">@if (old('municipality') != null) {{ old('municipality') }} @else Select Municipality * @endif  </option>
						</select>		
					@error('municipality')
							<div class="text-red-500 mt-2 text-sm">
								{{ $message }}
							</div>
					@enderror	
					</div>	

					<div class="form-group col-md-3">
					<label style="font-size:12px" class="label mt-1 sr-only" for="barangay">Barangay</label>
					<select class="mb-2 border-2 w-full p-2 rounded-lg @error('barangay') border-red-500 @enderror" 
							name="barangay" 
							id="barangay" >
							<option value="{{ old('barangay') }}">@if (old('barangay') != null) {{ old('barangay') }} @else Select Barangay * @endif  </option>
					</select>
					@error('barangay')
							<div class="text-red-500 mt-2 text-sm">
								{{ $message }}
							</div>
					@enderror
					
					</div>	
					 

					</div>
					<div class="form-row">	    
								
                            

						<div class="form-group col-md-3">
							<label style="font-size:12px" class="label mt-1 sr-only" for="projectid">Project ID<span class="text-danger font-weight-bold">*</span></label>
							<input type="text" class="mb-2 border-2 w-full p-2 rounded-lg @error('projectid') border-red-500 @enderror  rounded-lg" value="{{ old('projectid') }}" 
								name="projectid" 
								id="projectid" 
								placeholder="Enter Project ID *" 
									>
						@error('projectid')
                                        <div class="text-red-500 mt-2 text-sm">
                                            {{ $message }}
                                        </div>
                    	@enderror	
						 
						</div>
					
						<div class="form-group col-md">
							<label style="font-size:12px" class="label mt-1 sr-only" for="projecttitle">Project Title<span class="text-danger font-weight-bold">*</span></label>
							<input type="text" class="mb-2 border-2 w-full p-2 rounded-lg @error('projecttitle') border-red-500 @enderror  rounded-lg" value="{{ old('projecttitle') }}" 
								name="projecttitle" 
								id="projecttitle" 
								placeholder="Enter Project Title*" >

						@error('projecttitle')
								<div class="text-red-500 mt-0 text-sm">
									{{ $message }}
								</div>
						@enderror

							</div>
							

				  		</div>
				  
				  <div class="form-row">
					<div class="form-group col-md">
						<label style="font-size:12px" class="label mt-1 sr-only"  for="year_covered">Year Covered</label>
						<input type="number" class="mb-2 border-2 w-full p-2 rounded-lg @error('year_covered') border-red-500 @enderror" value="{{ old('year_covered') }}" 
							name="year_covered" 
							id="year_covered" 
							placeholder="Enter Year Covered *"  >
						
						@error('year_covered')
								<div class="text-red-500 mt-2 text-sm">
									{{ $message }}
								</div>
						@enderror

					  </div>

					<div class="form-group col-md">
						<label style="font-size:12px" class="label mt-1 sr-only" for="individual">No. of Individuals</label>
						<input type="number" class="mb-2 border-2 w-full p-2 rounded-lg" value="{{ old('individual') }}" 
						name="individual" 
						id="individual" 
						placeholder="No. of Individuals" >

						@error('individual')
							<div class="text-red-500 mt-2 text-sm">
								{{ $message }}
							</div>
						@enderror
						

					</div>

					<div class="form-group col-md">
						<label style="font-size:12px" class="label mt-1 sr-only" for="association">No. of Association</label>
						<input type="number" class="mb-2 border-2 w-full p-2 rounded-lg" value="{{ old('association') }}" 
						name="association" 
						id="association" 
						placeholder="No. of Association" >

						@error('association')
							<div class="text-red-500 mt-2 text-sm">
								{{ $message }}
							</div>
						@enderror
						

					</div>

					
							<div class="form-group col-md">
								<label style="font-size:12px" class="label mt-1 sr-only" for="members">No. of Members</label>
								<input type="number" class="mb-2 border-2 w-full p-2 rounded-lg" value="{{ old('members') }}" 
								name="members" 
								id="members" 
								placeholder="No. of Members">

						@error('members')
							<div class="text-red-500 mt-2 text-sm">
								{{ $message }}
							</div>
						@enderror

							</div>

					
							
				  	</div> 
                      <div class="form-row">
                            <div class="form-group col-md">
								<label style="font-size:12px" class="label mt-1 sr-only"  for="remarks">Remarks</label>
                                <textarea type="number" rows="3" class="mb-2 border-2 w-full p-2 rounded-lg"
								name="remarks" 
								id="remarks" 
								placeholder="Enter Remarks" >{{ old('remarks') }}</textarea>
						@error('remarks')
							<div class="text-red-500 mt-2 text-sm">
								{{ $message }}
							</div>
						@enderror
							</div>
                      </div>

                    <div class="form-row">
                            <div class="form-group col-md">
                                <button type="submit" class="bg-blue-500 text-white px-4 py-3 rounded font-medium w-full">Create</button>
							
								
							</div>
                      </div>

			    <footer>
		                <p><span class="text-danger font-weight-bold">*</span> Required Fields</p>
				    </footer>

                        
                        	
				</form>	

		        
		        </div>
		    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

<script type="text/javascript">
$(document).ready(function(){

	 $('.dynamic').change(function(){
		if($(this).val() != '')
		{
			var prov = '';
			if ($(this).attr("id") != 'region') {
				var prov = $('#province').val();
			}

				var select = $(this).attr("id");
				var value = $(this).val();
				var dependent = $(this).data('dependent'); 
				var _token = $('input[name="_token"]').val();
			$.ajax({
				url:"{{ route('CreateProjectController.fetch') }}",
				method: "POST",
				data: {select:select, value:value, _token:_token, dependent:dependent, prov: prov},
				success:function(result){
					// alert('waaaaaaaaaaaaaaa');
					$('#'+dependent).html(result);

				}

			})
		}

	})

	$('#region2').change(function(){
		if($(this).val() != '')
		{
			var prov = '';
				var select = $(this).attr("id");
				var value = $(this).val();
				var dependent = $(this).data('dependent'); 
				var _token = $('input[name="_token"]').val();
			$.ajax({
				url:"{{ route('CreateProjectController.fetch') }}",
				method: "POST",
				data: {select:select, value:value, _token:_token, dependent:dependent},
				success:function(result){
					// alert('waaaaaaaaaaaaaaa');
					$('#province').html(result);
					$('#municipality').html('<option value="">Select Municipality *</option>');
					$('#barangay').html('<option value="">Select Barangay *</option>');
				}

			})
		}

	})

	$('#province2').change(function(){
		if($(this).val() != '')
		{
			var prov = '';
				var select = $(this).attr("id");
				var value = $(this).val();
				var dependent = $(this).data('dependent'); 
				var _token = $('input[name="_token"]').val();
			$.ajax({
				url:"{{ route('CreateProjectController.fetch') }}",
				method: "POST",
				data: {select:select, value:value, _token:_token, dependent:dependent},
				success:function(result){
					// alert('waaaaaaaaaaaaaaa');
					$('#municipality').html(result);
					$('#barangay').html('<option value="">Select Barangay *</option>');
				}

			})
		}

	})


});
</script>

