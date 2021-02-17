<!-- Modal  CROPS RELATED -->
<div
  class="modal fade"
  id="cropsrelatedmodal"
  tabindex="-1"
  aria-hidden="true"
>
  <div class="modal-dialog modal-lg">
    <div class="modal-content ">
      <div class="modal-header ">
        <h5 class="modal-title" >Crops Related</h5>
        <button
          type="button"
          class="btn-close"
          data-mdb-dismiss="modal"
          aria-label="Close"
        ></button>
      </div>
      <div class="modal-body">
      <form id="addrelatedcrops" action="{{ route('projects.edit.addrelatedcrops',$mnes->id)}}" method="post">	
      @csrf
            <input type="hidden" value="@if($mnes !== null){{ $mnes->id }}@endif" name="projectid" id="projectid">

           <div class="form-row px-3">

              <div class="form-group col-md-3 mb-1">
                <label style="font-size:12px" for="nocycles" class="label mt-0">Number of Cycles</label>
                <select class="mb-1 border-2 w-full p-2 rounded-lg withdata dynamic" 
                    name="nocycles" 
                    id="nocycles" >
                    <option value="">Select Number of Cycles </option>
                    <option value="1st Cycle">1st Cycle</option>
                    <option value="2nd Cycle">2nd Cycle</option>
                    <option value="3rd Cycle">3rd Cycle</option>
                    <option value="4th Cycle">4th Cycle</option>
                    <option value="5th Cycle">5th Cycle</option>
                  </select>
                  <span class="text-red-500 error-text nocycles_error"></span>
                </div>

                <div class="form-group col-md mb-1">
                    <label style="font-size:12px" class="label mt-0" for="cropsprovided">Crops Provided</label>
                    <input type="text" class="mb-1 border-2 w-full p-2 rounded-lg withdata  rounded-lg" value="{{ old('cropsprovided') }}" 
                      name="cropsprovided" 
                      id="cropsprovided" 
                      placeholder="Enter Crops Provided *" 
                        >
                  <span class="text-red-500 error-text cropsprovided_error"></span>
                  
                </div>

              <div class="form-group col-md-3 mb-1">
							<label style="font-size:12px" class="label mt-0" for="noofcropspercycle">No. of Croppings per Cycle</label>
							<input type="number" class="mb-1 border-2 w-full p-2 rounded-lg withdata  rounded-lg" value="{{ old('noofcropspercycle') }}" 
								name="noofcropspercycle" 
								id="noofcropspercycle" 
								placeholder="Enter No. of Croppings per Cycle *" 
									>
						<span class="text-red-500 error-text noofcropspercycle_error"></span>
						 
					</div>
              </div>

          

          
          <div class="form-row px-3">
          TARGET
          </div>
          <div class="form-row px-3">
              <div class="form-group col-md mb-1">
                  <label style="font-size:12px" class="label mt-0" for="targetdateplanted">Date Planted</label>
                  <input type="date" class="mb-1 border-2 w-full p-2 rounded-lg withdata  rounded-lg" value="{{ old('targetdateplanted') }}" 
                    name="targetdateplanted" 
                    id="targetdateplanted" 
                    placeholder="Enter Target Date Planted *" 
                      >
                <span class="text-red-500 error-text targetdateplanted_error"></span>
                
              </div>

              <div class="form-group col-md mb-1">
                  <label style="font-size:12px" class="label mt-0" for="targettotalareaplanted">Total Area Planted</label>
                  <input type="number" class="mb-1 border-2 w-full p-2 rounded-lg withdata  rounded-lg" value="{{ old('targettotalareaplanted') }}" 
                    name="targettotalareaplanted" 
                    id="targettotalareaplanted" 
                    placeholder="Enter Target Area Planted *" 
                      >
                <span class="text-red-500 error-text targettotalareaplanted_error"></span>
                
              </div>

              <div class="form-group col-md mb-1">
                <label style="font-size:12px" class="label mt-0" for="targetdateharvested">Date Harvested</label>
                <input type="date" class="mb-1 border-2 w-full p-2 rounded-lg withdata  rounded-lg" value="{{ old('targetdateharvested') }}" 
                  name="targetdateharvested" 
                  id="targetdateharvested" 
                  placeholder="Enter Target Date Harvested *" 
                    >
              <span class="text-red-500 error-text targetdateharvested_error"></span>
              
            </div>

            <div class="form-group col-md mb-1">
                  <label style="font-size:12px" class="label mt-0" for="targettotalareaharvested">Total Area Harvested</label>
                  <input type="number" class="mb-1 border-2 w-full p-2 rounded-lg withdata  rounded-lg" value="{{ old('targettotalareaharvested') }}" 
                    name="targettotalareaharvested" 
                    id="targettotalareaharvested" 
                    placeholder="Enter Target Area Harvested *" 
                      >
                <span class="text-red-500 error-text targetdateharvested_error"></span>
              </div>



          </div>
          <div class="form-row px-3">
          ACTUAL
          </div>
          <div class="form-row px-3">

            <div class="form-group col-md mb-1">
                <label style="font-size:12px" class="label mt-0" for="actualdateplanted">Date Planted</label>
                <input type="date" class="mb-1 border-2 w-full p-2 rounded-lg withdata  rounded-lg" value="{{ old('actualdateplanted') }}" 
                  name="actualdateplanted" 
                  id="actualdateplanted" 
                  placeholder="Enter Actual Date Planted *" 
                    >
              <span class="text-red-500 error-text actualdateplanted_error"></span>
              
            </div>

            <div class="form-group col-md mb-1">
                  <label style="font-size:12px" class="label mt-0" for="actualtotalareaplanted">Total Area Planted</label>
                  <input type="number" class="mb-1 border-2 w-full p-2 rounded-lg withdata rounded-lg" value="{{ old('actualtotalareaplanted') }}" 
                    name="actualtotalareaplanted" 
                    id="actualtotalareaplanted" 
                    placeholder="Enter Actual Area Planted *" 
                      >
                <span class="text-red-500 error-text actualtotalareaplanted_error"></span>
                
              </div>

          

            <div class="form-group col-md mb-1">
                <label style="font-size:12px" class="label mt-0" for="actualdateharvested">Date Harvested</label>
                <input type="date" class="mb-1 border-2 w-full p-2 rounded-lg withdata rounded-lg" value="{{ old('actualdateharvested') }}" 
                  name="actualdateharvested" 
                  id="actualdateharvested" 
                  placeholder="Enter Actual Date Harvested *" 
                    >
              <span class="text-red-500 error-text actualdateharvested_error"></span>
              
            </div>

            

              <div class="form-group col-md mb-1">
                  <label style="font-size:12px" class="label mt-0" for="actualtotalareaharvested">Total Area Harvested</label>
                  <input type="number" class="mb-1 border-2 w-full p-2 rounded-lg withdata rounded-lg" value="{{ old('actualtotalareaharvested') }}" 
                    name="actualtotalareaharvested" 
                    id="actualtotalareaharvested" 
                    placeholder="Enter Actual Area Harvested *" 
                      >
                <span class="text-red-500 error-text actualtotalareaharvested_error"></span>
                
              </div>
              </div>

          <div class="form-row px-3 pt-1">
            <div class="form-group col-md mb-1">
                <label style="font-size:12px" class="label mt-0" for="totalproduced">Total Produced (kg)</label>
                <input type="number" class="mb-1 border-2 w-full p-2 rounded-lg withdata rounded-lg" value="{{ old('totalproduced') }}" 
                  name="totalproduced" 
                  id="totalproduced" 
                  placeholder="Enter Total Produced (kg)" 
                    >
                  <span class="text-red-500 error-text totalproduced_error"></span>	
              
              </div>
              <div class="form-group col-md mb-1">
                <label style="font-size:12px" class="label mt-0" for="totalsold">Total Sold (kg)</label>
                <input type="number" class="mb-1 border-2 w-full p-2 rounded-lg withdata  rounded-lg" value="{{ old('totalsold') }}" 
                  name="totalsold" 
                  id="totalsold" 
                  placeholder="Enter Total Sold (kg)" 
                    >
                  <span class="text-red-500 error-text totalsold_error"></span>	
              
              </div>
              <div class="form-group col-md mb-1">
                <label style="font-size:12px" class="label mt-0" for="priceperkg">Price per kg (Php)</label>
                <input type="number" class="mb-1 border-2 w-full p-2 rounded-lg withdata rounded-lg" value="{{ old('priceperkg') }}" 
                  name="priceperkg" 
                  id="priceperkg" 
                  placeholder="Enter Price per kg (Php)" 
                    >
                   <span class="text-red-500 error-text priceperkg_error"></span>
              
              </div>

              <div class="form-group col-md mb-1">
                <label style="font-size:12px" class="label mt-0" for="totalsales">Total Sales (Php)</label>
                <input type="number" class="mb-1 border-2 w-full p-2 rounded-lg withdata rounded-lg" value="{{ old('totalsales') }}" 
                  name="totalsales" 
                  id="totalsales" 
                  placeholder="Enter Total Sales (Php)" 
                    >
                  <span class="text-red-500 error-text totalsales_error"></span>
              
              </div>

          </div>
          <div class="form-group col-md mb-1">
                <label style="font-size:12px" class="label mt-0" for="crremarks">Remarks</label>
                <input type="text" class="mb-1 border-2 w-full p-2 rounded-lg row=3 withdata rounded-lg" value="{{ old('crremarks') }}" 
                  name="crremarks" 
                  id="crremarks" 
                  placeholder="Enter Remarks" 
                    >
                  <span class="text-red-500 error-text crremarks_error"></span>
              
              </div>



      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-danger" id="crops_submit" name="crops_submit">OK</button>
        <button type="button" class="btn btn-secondary" data-mdb-dismiss="modal">
          Close
        </button>
        
      </div>
      </form>
    </div>
  </div>
</div>