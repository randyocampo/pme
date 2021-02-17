
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
			<form action="{{ route('projects.save') }}" method="POST" id="registerindi">
        	@csrf
			
				<div class="form-row">
							

					<div class="form-group col-md-2">
						<label style="font-size:12px" for="region" class="label mt-1">Region * </label>
						<select class="mb-2 border-2 rounded-lg w-full p-2 withdata dynamic" 
								data-dependent="province"
								name="region"
								id="region">
								<option value="{{ old('region') }}">@if (old('region') != null) {{ old('region') }} @else Select Region * @endif  </option>
								
									@foreach($region_list as $region)
										<option value="{{ $region->region}}">{{ $region->region}}</option>
									@endforeach
							</select>
							<span class="text-red-500 error-text region_error"></span>
				</div>

					<div class="form-group col-md">
						<label style="font-size:12px" for="province" class="label mt-1">Province</label>
						<select class="mb-2 border-2 w-full p-2 rounded-lg withdata dynamic" 
								data-dependent="municipality"
								name="province" 
								id="province" >
								<option value="{{ old('province') }}">@if (old('province') != null) {{ old('province') }} @else Select Province * @endif  </option>
						</select>
						<span class="text-red-500 error-text province_error"></span>
					
					</div>

					<div class="form-group col-md">
						<label style="font-size:12px" for="municipality" class="label mt-1">Municipality</label>
						<select class="mb-2 border-2 w-full p-2 rounded-lg withdata dynamic" 
							data-dependent="barangay"
							name="municipality" 
							id="municipality">
							<option value="{{ old('municipality') }}">@if (old('municipality') != null) {{ old('municipality') }} @else Select Municipality * @endif  </option>
						</select>	
						<span class="text-red-500 error-text municipality_error"></span>	

					</div>	

					<div class="form-group col-md-3">
					<label style="font-size:12px" class="label mt-1" for="barangay">Barangay</label>
					<select class="mb-2 border-2 w-full p-2 rounded-lg withdata" 
							name="barangay" 
							id="barangay" >
							<option value="{{ old('barangay') }}">@if (old('barangay') != null) {{ old('barangay') }} @else Select Barangay * @endif  </option>
					</select>
					<span class="text-red-500 error-text barangay_error"></span>	
					
					</div>	
					 

					</div>
					<div class="form-row">	    
								
                            

						<div class="form-group col-md-3">
							<label style="font-size:12px" class="label mt-1" for="projectid">Project ID<span class="text-danger font-weight-bold">*</span></label>
							<input type="text" class="mb-2 border-2 w-full p-2 rounded-lg withdata rounded-lg" value="{{ old('projectid') }}" 
								name="projectid" 
								id="projectid" 
								placeholder="Enter Project ID *" 
									>	
									<span class="text-red-500 error-text projectid_error"></span>		
						 
						</div>
					
						<div class="form-group col-md">
							<label style="font-size:12px" class="label mt-1" for="projecttitle">Project Title<span class="text-danger font-weight-bold">*</span></label>
							<input type="text" class="mb-2 border-2 w-full p-2 rounded-lg withdata  rounded-lg" value="{{ old('projecttitle') }}" 
								name="projecttitle" 
								id="projecttitle" 
								placeholder="Enter Project Title*" >
								<span class="text-red-500 error-text projecttitle_error" ></span>
							</div>
							

				  		</div>
				  
				  <div class="form-row">
					<div class="form-group col-md">
						<label style="font-size:12px" class="label mt-1"  for="year_covered">Year Covered</label>
						<input type="number" class="mb-2 border-2 w-full p-2 rounded-lg withdata" value="{{ old('year_covered') }}" 
							name="year_covered" 
							id="year_covered" 
							placeholder="Enter Year Covered *"  >
							<span class="text-red-500 error-text year_covered_error"></span>

					  </div>

					<div class="form-group col-md">
						<label style="font-size:12px" class="label mt-1" for="individual">No. of Individuals</label>
						<input type="number" class="mb-2 border-2 w-full p-2 rounded-lg withdata" value="{{ old('individual') }}" 
						name="individual" 
						id="individual" 
						placeholder="No. of Individuals" >
						<span class="text-red-500 error-text individual_error" ></span>	
				

					</div>

					<div class="form-group col-md">
						<label style="font-size:12px" class="label mt-1" for="association">No. of Association</label>
						<input type="number" class="mb-2 border-2 w-full p-2 rounded-lg withdata" value="{{ old('association') }}" 
						name="association" 
						id="association" 
						placeholder="No. of Association" >
						<span class="text-red-500 error-text association_error" ></span>
			

					</div>

					
							<div class="form-group col-md">
								<label style="font-size:12px" class="label mt-1" for="members">No. of Members</label>
								<input type="number" class="mb-2 border-2 w-full p-2 rounded-lg withdata" value="{{ old('members') }}" 
								name="members" 
								id="members" 
								placeholder="No. of Members">
						<span class="text-red-500 error-text members_error" ></span>		
							</div>

					
							
				  	</div> 
                      <div class="form-row">
                            <div class="form-group col-md">
								<label style="font-size:12px" class="label mt-1"  for="remarks">Remarks</label>
                                <textarea type="number" rows="3" class="mb-2 border-2 w-full p-2 rounded-lg withdata"
								name="remarks" 
								id="remarks" 
								placeholder="Enter Remarks" >{{ old('remarks') }}</textarea>
								<span class="text-red-500 error-text remarks_error"></span>
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

$(function(){
              
    $("#registerindi").on('submit', function(e){
        e.preventDefault();

        $.ajax({
            url:$(this).attr('action'),
            method:$(this).attr('method'),
            data:new FormData(this),
            processData:false,
            dataType:'json',
            contentType:false,
            beforeSend:function(){
                $(document).find('span.error-text').text('');
				$(document).find('.withdata').removeClass("border-red-500");
            },
            success:function(data){
                if(data.status == 0){
                    $.each(data.error, function(prefix, val){
                        $('span.'+prefix+'_error').text(val[0]);
						$('#'+prefix).addClass("border-red-500");
                    });
                }else{
                    //$('#registerindi')[0].reset();
					window.location.replace('/projects/edit' + '/' + data.id);
                }
            }
        });
    });
});

$(document).ready(function(){


	var loadz = '';
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
				beforeSend:function(){   
						loadz = '<option value=""><span class="spinner-border spinner-border-sm">Loading...</span></option>';
						$('#'+dependent).html(loadz);
            	},
				success:function(result){
					$('#'+dependent).html(result);

				}

			})
		}

	})

	

	


});
</script>

