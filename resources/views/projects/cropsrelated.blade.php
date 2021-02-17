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
                <select class="mb-1 border-2 w-full p-2 rounded-lg @error('nocycles') border-red-500 @enderror dynamic" 
                    name="nocycles" 
                    id="nocycles" >
                    <option value="">Select Number of Cycles </option>
                    <option value="1st Cycle">1st Cycle</option>
                    <option value="2nd Cycle">2nd Cycle</option>
                    <option value="3rd Cycle">3rd Cycle</option>
                    <option value="4th Cycle">4th Cycle</option>
                    <option value="5th Cycle">5th Cycle</option>
                  </select>
                  @error('nocycles')
                      <div class="text-red-500 mt-0 text-sm">
                        {{ $message }}
                      </div>
                  @enderror
                </div>

                <div class="form-group col-md mb-1">
                    <label style="font-size:12px" class="label mt-0" for="cropsprovided">Crops Provided</label>
                    <input type="text" class="mb-1 border-2 w-full p-2 rounded-lg @error('cropsprovided') border-red-500 @enderror  rounded-lg" value="{{ old('cropsprovided') }}" 
                      name="cropsprovided" 
                      id="cropsprovided" 
                      placeholder="Enter Crops Provided *" 
                        >
                  @error('cropsprovided')
                                              <div class="text-red-500 mt-0 text-sm">
                                                  {{ $message }}
                                              </div>
                            @enderror	
                  
                </div>

              <div class="form-group col-md-3 mb-1">
							<label style="font-size:12px" class="label mt-0" for="noofcropspercycle">No. of Croppings per Cycle</label>
							<input type="number" class="mb-1 border-2 w-full p-2 rounded-lg @error('noofcropspercycle') border-red-500 @enderror  rounded-lg" value="{{ old('noofcropspercycle') }}" 
								name="noofcropspercycle" 
								id="noofcropspercycle" 
								placeholder="Enter No. of Croppings per Cycle *" 
									>
						@error('noofcropspercycle')
                                        <div class="text-red-500 mt-0 text-sm">
                                            {{ $message }}
                                        </div>
                    	@enderror	
						 
					</div>
              </div>

          

          
          <div class="form-row px-3">
          TARGET
          </div>
          <div class="form-row px-3">
              <div class="form-group col-md mb-1">
                  <label style="font-size:12px" class="label mt-0" for="targetdateplanted">Date Planted</label>
                  <input type="date" class="mb-1 border-2 w-full p-2 rounded-lg @error('targetdateplanted') border-red-500 @enderror  rounded-lg" value="{{ old('targetdateplanted') }}" 
                    name="targetdateplanted" 
                    id="targetdateplanted" 
                    placeholder="Enter Target Date Planted *" 
                      >
                @error('targetdateplanted')
                                            <div class="text-red-500 mt-0 text-sm">
                                                {{ $message }}
                                            </div>
                          @enderror	
                
              </div>

              <div class="form-group col-md mb-1">
                  <label style="font-size:12px" class="label mt-0" for="targettotalareaplanted">Total Area Planted</label>
                  <input type="number" class="mb-1 border-2 w-full p-2 rounded-lg @error('targettotalareaplanted') border-red-500 @enderror  rounded-lg" value="{{ old('targettotalareaplanted') }}" 
                    name="targettotalareaplanted" 
                    id="targettotalareaplanted" 
                    placeholder="Enter Target Area Planted *" 
                      >
                @error('targettotalareaplanted')
                                            <div class="text-red-500 mt-0 text-sm">
                                                {{ $message }}
                                            </div>
                          @enderror	
                
              </div>

              <div class="form-group col-md mb-1">
                <label style="font-size:12px" class="label mt-0" for="targetdateharvested">Date Harvested</label>
                <input type="date" class="mb-1 border-2 w-full p-2 rounded-lg @error('targetdateharvested') border-red-500 @enderror  rounded-lg" value="{{ old('targetdateharvested') }}" 
                  name="targetdateharvested" 
                  id="targetdateharvested" 
                  placeholder="Enter Target Date Harvested *" 
                    >
              @error('targetdateharvested')
                                          <div class="text-red-500 mt-0 text-sm">
                                              {{ $message }}
                                          </div>
                        @enderror	
              
            </div>

            <div class="form-group col-md mb-1">
                  <label style="font-size:12px" class="label mt-0" for="targettotalareaharvested">Total Area Harvested</label>
                  <input type="number" class="mb-1 border-2 w-full p-2 rounded-lg @error('targettotalareaharvested') border-red-500 @enderror  rounded-lg" value="{{ old('targettotalareaharvested') }}" 
                    name="targettotalareaharvested" 
                    id="targettotalareaharvested" 
                    placeholder="Enter Target Area Harvested *" 
                      >
                @error('targettotalareaharvested')
                                            <div class="text-red-500 mt-0 text-sm">
                                                {{ $message }}
                                            </div>
                          @enderror	
                
              </div>



          </div>
          <div class="form-row px-3">
          ACTUAL
          </div>
          <div class="form-row px-3">

            <div class="form-group col-md mb-1">
                <label style="font-size:12px" class="label mt-0" for="actualdateplanted">Date Planted</label>
                <input type="date" class="mb-1 border-2 w-full p-2 rounded-lg @error('actualdateplanted') border-red-500 @enderror  rounded-lg" value="{{ old('actualdateplanted') }}" 
                  name="actualdateplanted" 
                  id="actualdateplanted" 
                  placeholder="Enter Actual Date Planted *" 
                    >
              @error('actualdateplanted')
                                          <div class="text-red-500 mt-0 text-sm">
                                              {{ $message }}
                                          </div>
                        @enderror	
              
            </div>

            <div class="form-group col-md mb-1">
                  <label style="font-size:12px" class="label mt-0" for="actualtotalareaplanted">Total Area Planted</label>
                  <input type="number" class="mb-1 border-2 w-full p-2 rounded-lg @error('actualtotalareaplanted') border-red-500 @enderror  rounded-lg" value="{{ old('actualtotalareaplanted') }}" 
                    name="actualtotalareaplanted" 
                    id="actualtotalareaplanted" 
                    placeholder="Enter Actual Area Planted *" 
                      >
                @error('actualtotalareaplanted')
                                            <div class="text-red-500 mt-0 text-sm">
                                                {{ $message }}
                                            </div>
                          @enderror	
                
              </div>

          

            <div class="form-group col-md mb-1">
                <label style="font-size:12px" class="label mt-0" for="actualdateharvested">Date Harvested</label>
                <input type="date" class="mb-1 border-2 w-full p-2 rounded-lg @error('actualdateharvested') border-red-500 @enderror  rounded-lg" value="{{ old('actualdateharvested') }}" 
                  name="actualdateharvested" 
                  id="actualdateharvested" 
                  placeholder="Enter Actual Date Harvested *" 
                    >
              @error('actualdateharvested')
                                          <div class="text-red-500 mt-0 text-sm">
                                              {{ $message }}
                                          </div>
                        @enderror	
              
            </div>

            

              <div class="form-group col-md mb-1">
                  <label style="font-size:12px" class="label mt-0" for="actualtotalareaharvested">Total Area Harvested</label>
                  <input type="number" class="mb-1 border-2 w-full p-2 rounded-lg @error('actualtotalareaharvested') border-red-500 @enderror  rounded-lg" value="{{ old('actualtotalareaharvested') }}" 
                    name="actualtotalareaharvested" 
                    id="actualtotalareaharvested" 
                    placeholder="Enter Actual Area Harvested *" 
                      >
                @error('actualtotalareaharvested')
                                            <div class="text-red-500 mt-0 text-sm">
                                                {{ $message }}
                                            </div>
                          @enderror	
                
              </div>
              </div>

          <div class="form-row px-3 pt-1">
            <div class="form-group col-md mb-1">
                <label style="font-size:12px" class="label mt-0" for="totalproduced">Total Produced (kg)</label>
                <input type="number" class="mb-1 border-2 w-full p-2 rounded-lg @error('totalproduced') border-red-500 @enderror  rounded-lg" value="{{ old('totalproduced') }}" 
                  name="totalproduced" 
                  id="totalproduced" 
                  placeholder="Enter Total Produced (kg)" 
                    >
                        @error('totalproduced')
                                          <div class="text-red-500 mt-0 text-sm">
                                              {{ $message }}
                                          </div>
                        @enderror	
              
              </div>
              <div class="form-group col-md mb-1">
                <label style="font-size:12px" class="label mt-0" for="totalsold">Total Sold (kg)</label>
                <input type="number" class="mb-1 border-2 w-full p-2 rounded-lg @error('totalsold') border-red-500 @enderror  rounded-lg" value="{{ old('totalsold') }}" 
                  name="totalsold" 
                  id="totalsold" 
                  placeholder="Enter Total Sold (kg)" 
                    >
                        @error('totalsold')
                                          <div class="text-red-500 mt-0 text-sm">
                                              {{ $message }}
                                          </div>
                        @enderror	
              
              </div>
              <div class="form-group col-md mb-1">
                <label style="font-size:12px" class="label mt-0" for="priceperkg">Price per kg (Php)</label>
                <input type="number" class="mb-1 border-2 w-full p-2 rounded-lg @error('priceperkg') border-red-500 @enderror  rounded-lg" value="{{ old('priceperkg') }}" 
                  name="priceperkg" 
                  id="priceperkg" 
                  placeholder="Enter Price per kg (Php)" 
                    >
                        @error('priceperkg')
                                          <div class="text-red-500 mt-0 text-sm">
                                              {{ $message }}
                                          </div>
                        @enderror	
              
              </div>

              <div class="form-group col-md mb-1">
                <label style="font-size:12px" class="label mt-0" for="totalsales">Total Sales (Php)</label>
                <input type="number" class="mb-1 border-2 w-full p-2 rounded-lg @error('totalsales') border-red-500 @enderror  rounded-lg" value="{{ old('totalsales') }}" 
                  name="totalsales" 
                  id="totalsales" 
                  placeholder="Enter Total Sales (Php)" 
                    >
                        @error('totalsales')
                                          <div class="text-red-500 mt-0 text-sm">
                                              {{ $message }}
                                          </div>
                        @enderror	
              
              </div>

          </div>
          <div class="form-group col-md mb-1">
                <label style="font-size:12px" class="label mt-0" for="crremarks">Remarks</label>
                <input type="text" class="mb-1 border-2 w-full p-2 rounded-lg row=3 @error('crremarks') border-red-500 @enderror  rounded-lg" value="{{ old('crremarks') }}" 
                  name="crremarks" 
                  id="crremarks" 
                  placeholder="Enter Remarks" 
                    >
                        @error('crremarks')
                                          <div class="text-red-500 mt-0 text-sm">
                                              {{ $message }}
                                          </div>
                        @enderror	
              
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