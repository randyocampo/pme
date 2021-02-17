<!-- Modal  CROPS RELATED -->
<div
  class="modal fade"
  id="cropsrelatedmodal_edit"
  tabindex="-1"
  aria-hidden="true"
>
  <div class="modal-dialog modal-lg">
    <div class="modal-content ">
      <div class="modal-header ">
        <h5 class="modal-title" >Edit Crops Related</h5>
        <button
          type="button"
          class="btn-close"
          data-mdb-dismiss="modal"
          aria-label="Close"
        ></button>
      </div>
      <div class="modal-body">
      <form id="editrelatedcrops" action="" method="post">	
      @csrf
            <div class="form-row px-3">

              <div class="form-group col-md-3 mb-1">
                <label style="font-size:12px" for="edit_nocycles" class="label mt-0">Number of Cycles</label>
                <select class="mb-1 border-2 w-full p-2 rounded-lg withdata dynamic" 
                    name="edit_nocycles" 
                    id="edit_nocycles" >
                    <option value="">Select Number of Cycles </option>
                    <option value="1st Cycle">1st Cycle</option>
                    <option value="2nd Cycle">2nd Cycle</option>
                    <option value="3rd Cycle">3rd Cycle</option>
                    <option value="4th Cycle">4th Cycle</option>
                    <option value="5th Cycle">5th Cycle</option>
                  </select>
                  <span class="text-red-500 error-text edit_nocycles_error"></span>
                </div>

                <div class="form-group col-md mb-1">
                    <label style="font-size:12px" class="label mt-0" for="edit_cropsprovided">Crops Provided</label>
                    <input type="text" class="mb-1 border-2 w-full p-2 rounded-lg withdata  rounded-lg" value="{{ old('cropsprovided') }}" 
                      name="edit_cropsprovided" 
                      id="edit_cropsprovided" 
                      placeholder="Enter Crops Provided *" 
                        >
                  <span class="text-red-500 error-text edit_cropsprovided_error"></span>
                  
                </div>

              <div class="form-group col-md-3 mb-1">
							<label style="font-size:12px" class="label mt-0" for="edit_noofcropspercycle">No. of Croppings per Cycle</label>
							<input type="number" class="mb-1 border-2 w-full p-2 rounded-lg withdata  rounded-lg" value="{{ old('noofcropspercycle') }}" 
								name="edit_noofcropspercycle" 
								id="edit_noofcropspercycle" 
								placeholder="Enter No. of Croppings per Cycle *" 
									>
						<span class="text-red-500 error-text edit_noofcropspercycle_error"></span>
						 
					</div>
              </div>

          

          
          <div class="form-row px-3">
          TARGET
          </div>
          <div class="form-row px-3">
              <div class="form-group col-md mb-1">
                  <label style="font-size:12px" class="label mt-0" for="edit_targetdateplanted">Date Planted</label>
                  <input type="date" class="mb-1 border-2 w-full p-2 rounded-lg withdata  rounded-lg" value="{{ old('targetdateplanted') }}" 
                    name="edit_targetdateplanted" 
                    id="edit_targetdateplanted" 
                    placeholder="Enter Target Date Planted *" 
                      >
                <span class="text-red-500 error-text edit_targetdateplanted_error"></span>
                
              </div>

              <div class="form-group col-md mb-1">
                  <label style="font-size:12px" class="label mt-0" for="edit_targettotalareaplanted">Total Area Planted</label>
                  <input type="number" class="mb-1 border-2 w-full p-2 rounded-lg withdata  rounded-lg" value="{{ old('targettotalareaplanted') }}" 
                    name="edit_targettotalareaplanted" 
                    id="edit_targettotalareaplanted" 
                    placeholder="Enter Target Area Planted *" 
                      >
                <span class="text-red-500 error-text edit_targettotalareaplanted_error"></span>
                
              </div>

              <div class="form-group col-md mb-1">
                <label style="font-size:12px" class="label mt-0" for="edit_targetdateharvested">Date Harvested</label>
                <input type="date" class="mb-1 border-2 w-full p-2 rounded-lg withdata  rounded-lg" value="{{ old('targetdateharvested') }}" 
                  name="edit_targetdateharvested" 
                  id="edit_targetdateharvested" 
                  placeholder="Enter Target Date Harvested *" 
                    >
              <span class="text-red-500 error-text edit_targetdateharvested_error"></span>
              
            </div>

            <div class="form-group col-md mb-1">
                  <label style="font-size:12px" class="label mt-0" for="edit_targettotalareaharvested">Total Area Harvested</label>
                  <input type="number" class="mb-1 border-2 w-full p-2 rounded-lg withdata  rounded-lg" value="{{ old('targettotalareaharvested') }}" 
                    name="edit_targettotalareaharvested" 
                    id="edit_targettotalareaharvested" 
                    placeholder="Enter Target Area Harvested *" 
                      >
                <span class="text-red-500 error-text edit_targetdateharvested_error"></span>
              </div>



          </div>
          <div class="form-row px-3">
          ACTUAL
          </div>
          <div class="form-row px-3">

            <div class="form-group col-md mb-1">
                <label style="font-size:12px" class="label mt-0" for="edit_actualdateplanted">Date Planted</label>
                <input type="date" class="mb-1 border-2 w-full p-2 rounded-lg withdata  rounded-lg" value="{{ old('actualdateplanted') }}" 
                  name="edit_actualdateplanted" 
                  id="edit_actualdateplanted" 
                  placeholder="Enter Actual Date Planted *" 
                    >
              <span class="text-red-500 error-text edit_actualdateplanted_error"></span>
              
            </div>

            <div class="form-group col-md mb-1">
                  <label style="font-size:12px" class="label mt-0" for="edit_actualtotalareaplanted">Total Area Planted</label>
                  <input type="number" class="mb-1 border-2 w-full p-2 rounded-lg withdata rounded-lg" value="{{ old('actualtotalareaplanted') }}" 
                    name="edit_actualtotalareaplanted" 
                    id="edit_actualtotalareaplanted" 
                    placeholder="Enter Actual Area Planted *" 
                      >
                <span class="text-red-500 error-text edit_actualtotalareaplanted_error"></span>
                
              </div>

          

            <div class="form-group col-md mb-1">
                <label style="font-size:12px" class="label mt-0" for="edit_actualdateharvested">Date Harvested</label>
                <input type="date" class="mb-1 border-2 w-full p-2 rounded-lg withdata rounded-lg" value="{{ old('actualdateharvested') }}" 
                  name="edit_actualdateharvested" 
                  id="edit_actualdateharvested" 
                  placeholder="Enter Actual Date Harvested *" 
                    >
              <span class="text-red-500 error-text edit_actualdateharvested_error"></span>
              
            </div>

            

              <div class="form-group col-md mb-1">
                  <label style="font-size:12px" class="label mt-0" for="edit_actualtotalareaharvested">Total Area Harvested</label>
                  <input type="number" class="mb-1 border-2 w-full p-2 rounded-lg withdata rounded-lg" value="{{ old('actualtotalareaharvested') }}" 
                    name="edit_actualtotalareaharvested" 
                    id="edit_actualtotalareaharvested" 
                    placeholder="Enter Actual Area Harvested *" 
                      >
                <span class="text-red-500 error-text edit_actualtotalareaharvested_error"></span>
                
              </div>
              </div>

          <div class="form-row px-3 pt-1">
            <div class="form-group col-md mb-1">
                <label style="font-size:12px" class="label mt-0" for="edit_totalproduced">Total Produced (kg)</label>
                <input type="number" class="mb-1 border-2 w-full p-2 rounded-lg withdata rounded-lg" value="{{ old('totalproduced') }}" 
                  name="edit_totalproduced" 
                  id="edit_totalproduced" 
                  placeholder="Enter Total Produced (kg)" 
                    >
                  <span class="text-red-500 error-text edit_totalproduced_error"></span>	
              
              </div>
              <div class="form-group col-md mb-1">
                <label style="font-size:12px" class="label mt-0" for="edit_totalsold">Total Sold (kg)</label>
                <input type="number" class="mb-1 border-2 w-full p-2 rounded-lg withdata  rounded-lg" value="{{ old('totalsold') }}" 
                  name="edit_totalsold" 
                  id="edit_totalsold" 
                  placeholder="Enter Total Sold (kg)" 
                    >
                  <span class="text-red-500 error-text edit_totalsold_error"></span>	
              
              </div>
              <div class="form-group col-md mb-1">
                <label style="font-size:12px" class="label mt-0" for="edit_priceperkg">Price per kg (Php)</label>
                <input type="number" class="mb-1 border-2 w-full p-2 rounded-lg withdata rounded-lg" value="{{ old('priceperkg') }}" 
                  name="edit_priceperkg" 
                  id="edit_priceperkg" 
                  placeholder="Enter Price per kg (Php)" 
                    >
                   <span class="text-red-500 error-text edit_priceperkg_error"></span>
              
              </div>

              <div class="form-group col-md mb-1">
                <label style="font-size:12px" class="label mt-0" for="edit_totalsales">Total Sales (Php)</label>
                <input type="number" class="mb-1 border-2 w-full p-2 rounded-lg withdata rounded-lg" value="{{ old('totalsales') }}" 
                  name="edit_totalsales" 
                  id="edit_totalsales" 
                  placeholder="Enter Total Sales (Php)" 
                    >
                  <span class="text-red-500 error-text edit_totalsales_error"></span>
              
              </div>

          </div>
          <div class="form-group col-md mb-1">
                <label style="font-size:12px" class="label mt-0" for="edit_remarks">Remarks</label>
                <input type="text" class="mb-1 border-2 w-full p-2 rounded-lg row=3 withdata rounded-lg" value="{{ old('crremarks') }}" 
                  name="edit_remarks" 
                  id="edit_remarks" 
                  placeholder="Enter Remarks" 
                    >
                  <span class="text-red-500 error-text edit_crremarks_error"></span>
              
              </div>



      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-danger" id="edit_crops_submit" name="edit_crops_submit">OK</button>
        <button type="button" class="btn btn-secondary" data-mdb-dismiss="modal">
          Close
        </button>
        
      </div>
      </form>
    </div>
  </div>
</div>