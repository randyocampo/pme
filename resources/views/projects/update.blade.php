
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Update Project') }}
        </h2>
    </x-slot>

    <div class="py-5">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                   <div class="flex justify-center">
        <div class="w-8/12 bg-white p-6 rounded-lg">
		    <form id="registerindi" action="{{ route('createproject')}}" method="post">	
            @csrf
				<div class="form-row">
							

					<div class="form-group col-md-3">
						<label style="font-size:12px" for="region" class="label mt-1 sr-only">Region * </label>
						<select class="mb-2 border-2 rounded-lg w-full p-2 @error('region') border-red-500 @enderror" 
								name="region"
								id="region"
								>
								@if (count($regions) > 1) 
									@foreach($regions as $region => $value)
										<option value="{{ $value->region}}" 
										@if ($value->region===$mne->region )
										 selected 
										@endif
										>{{ $value->region}}</option>
									@endforeach
								@else
									<option value="{{ old('region') }}">Select Region *</option>
								@endif

							</select>
						@error('region')
							<div class="text-red-500 mt-2 text-sm">
								{{ $message }}
							</div>
						@enderror
					</div>

					<div class="form-group col-md">
						<label style="font-size:12px" for="province" class="label mt-1 sr-only">Province</label>
						<select class="mb-2 border-2 w-full p-2 rounded-lg @error('province') border-red-500 @enderror" 
								name="province" 
								id="province" >
								<option value="{{ old('region') }}">Select Province *</option>
						</select>
						@error('province')
								<div class="text-red-500 mt-2 text-sm">
									{{ $message }}
								</div>
						@enderror
						
					</div>

					<div class="form-group col-md">
						<label style="font-size:12px" for="municipality" class="label mt-1 sr-only">Municipality</label>
						<select class="mb-2 border-2 w-full p-2 rounded-lg @error('municipality') border-red-500 @enderror" 
							name="municipality" 
							id="municipality">
								<option value="{{ old('municipality') }}">Select Municipality *</option>
						</select>		
					@error('municipality')
							<div class="text-red-500 mt-2 text-sm">
								{{ $message }}
							</div>
					@enderror	
					</div>	

					<div class="form-group col-md-2">
					<label style="font-size:12px" class="label mt-1 sr-only" for="barangay">Barangay</label>
					<select class="mb-2 border-2 w-full p-2 rounded-lg @error('barangay') border-red-500 @enderror" 
							name="barangay" 
							id="barangay" >
							<option value="{{ old('barangay') }}">Select Barangay *</option>
					</select>
					@error('barangay')
							<div class="text-red-500 mt-2 text-sm">
								{{ $message }}
							</div>
					@enderror
					
					</div>	

					</div>
					<div class="form-row">	    
								
                            <div class="form-group col-md-2">
								<label style="font-size:12px" class="label mt-1 sr-only"  for="year_covered">Year Covered</label>
								<input type="number" class="mb-2 border-2 w-full p-2 rounded-lg @error('year_covered') border-red-500 @enderror" 
									value="{{ old('year_covered') }}{{$mne->year_covered}}" 
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
							<label style="font-size:12px" class="label mt-1 sr-only" for="project">Project<span class="text-danger font-weight-bold">*</span></label>
							<input type="text" class="mb-2 border-2 w-full p-2 rounded-lg @error('project') border-red-500 @enderror  rounded-lg" 
							 	value="{{ old('project') }}{{$mne->project}}" 
								name="project" 
								id="project" 
								placeholder="Enter Project *" 
									>
						@error('project')
                                        <div class="text-red-500 mt-2 text-sm">
                                            {{ $message }}
                                        </div>
                                @enderror	
						 
						</div>
					
							<div class="form-group col-md">
							 	<label style="font-size:12px" class="label mt-1 sr-only" for="association">Association</label>
								<input type="text" class="mb-2 border-2 w-full p-2 rounded-lg" 
								value="{{ old('association') }}{{$mne->association}}" 
								name="association"
								id="association" 
								placeholder="Enter Association" >
							</div>

				  </div>
				  
				  <div class="form-row">
					<div class="form-group col-md">
						<label style="font-size:12px" class="label mt-1 sr-only" for="individual">Number of Individuals </label>
						<input type="number" class="mb-2 border-2 w-full p-2 rounded-lg" 
						value="{{ old('individual') }}{{$mne->individual}}" 
						name="individual" 
						id="individual" 
						placeholder="Enter Number of Individuals" >
						

					</div>
					
							<div class="form-group col-md">
								<label style="font-size:12px" class="label mt-1 sr-only" for="individual_in_group">Number of Individual in Association</label>
								<input type="number" class="mb-2 border-2 w-full p-2 rounded-lg" 
								value="{{ old('individual_in_group') }}{{$mne->individual_in_group}}" 
								name="individual_in_group" 
								id="individual_in_group" 
								placeholder="Enter Number of Individuals in Association">
							</div>
					
						<div class="form-group col-md">
							<label style="font-size:12px" class="label mt-1 sr-only"  for="project_cost">Amount of Project</label>
							<input type="number" class="mb-2 border-2 w-full p-2 rounded-lg" 
								value="{{ old('project_cost') }}{{$mne->project_cost}}" 
								name="project_cost" 
								id="project_cost" 
								placeholder="Enter Amount of Project">
							
						</div>
					
							
				  	</div> 
                      <div class="form-row">
                            <div class="form-group col-md">
								<label style="font-size:12px" class="label mt-1 sr-only"  for="remarks">Remarks</label>
                                <textarea type="number" class="mb-2 border-2 w-full p-2 rounded-lg" 
								value="{{ old('remarks') }}{{$mne->remarks}}" 
								name="remarks" 
								id="remarks" 
								placeholder="Enter Remarks" ></textarea>
								
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

