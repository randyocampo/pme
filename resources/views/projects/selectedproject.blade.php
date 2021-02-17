
{{-- @if ($mnes->$projecttitle != null) return redirect('projects.all'); @endif --}}

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Projects') }}
        </h2>
    </x-slot>

  


    <div class="py-2">
        <div class="max-w-22 mx-auto sm:px-2 lg:px-2">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-3 bg-white border-b border-gray-200">
                   <div class="flex justify-center">
				   <div class="panel panel-primary w-100">
           @if($mnes !== null)
                       <h5>{{$mnes->projectid}}</h5>
                       <h2>{{$mnes->projecttitle}}</h2>
                       <h6>{{$mnes->barangay}}, {{$mnes->municipality}}, {{$mnes->province}}, {{$mnes->region}}</h6>
            @endif
                       
                       <hr/>
<!-- Tabs navs -->
<ul class="nav nav-tabs mb-3 " id="ex1" role="tablist">
    <li class="nav-item " role="presentation">
      <a
        class="nav-link active font-weight-bold"
        id="ex1-tab-1"
        data-mdb-toggle="tab"
        href="#ex1-tabs-1"
        role="tab"
        aria-controls="ex1-tabs-1"
        aria-selected="true"
        >Crops Related</a
      >
    </li>
    <li class="nav-item" role="presentation">
      <a
        class="nav-link font-weight-bold"
        id="ex1-tab-2"
        data-mdb-toggle="tab"
        href="#ex1-tabs-2"
        role="tab"
        aria-controls="ex1-tabs-2"
        aria-selected="false"
        >Livestock</a
      >
    </li>
    <li class="nav-item" role="presentation">
      <a
        class="nav-link font-weight-bold"
        id="ex1-tab-3"
        data-mdb-toggle="tab"
        href="#ex1-tabs-3"
        role="tab"
        aria-controls="ex1-tabs-3"
        aria-selected="false"
        >Poultry</a
      >
    </li>
    <li class="nav-item" role="presentation">
        <a
          class="nav-link font-weight-bold"
          id="ex1-tab-4"
          data-mdb-toggle="tab"
          href="#ex1-tabs-4"
          role="tab"
          aria-controls="ex1-tabs-4"
          aria-selected="false"
          >Machineries & Equipment</a
        >
      </li>
    
  </ul>
  <!-- Tabs navs -->
  
  <!-- Tabs content -->
  <div class="tab-content" id="ex1-content">
    <div
      class="tab-pane fade show active"
      id="ex1-tabs-1"
      role="tabpanel"
      aria-labelledby="ex1-tab-1"
    >
    <button type="button" name="addcropsrelated"   id="addcropsrelated" class="add btn btn-info btn-sm my-2"><i class="fas fa-plus"></i> Add</button>

    <div class="container-fluid">
      <div class="row">
        <div class="col-md-10">
          <table id="cropsrelated-table" class="table table-striped table-bordered yajra-datatable dt-responsive wrap table-sm bg-green-600">
            
        <thead class=" bg-green-200">
                <tr>
                    <th rowspan="2" >Number of Cycles</th>
                    <th rowspan="2" >Crops Provided</th>
                    <th rowspan="2" >Number of Cropping Cycles Per Year</th>
                    <th colspan="2" >Date Planted (mm/yyyy)</th>
                    <th colspan="2" >Total Area Planted (ha)</th>
                    <th colspan="2" >Date Harvested (mm/yyyy)</th>
                    <th colspan="2" >Total Area Harvested (ha)</th>
                    <th rowspan="2" >Total Produce (kg)</th>
                    <th rowspan="2" >Total Sold (kg)</th>
                    <th rowspan="2" >Price per kg (Php)</th>
                    <th rowspan="2" >Total Sales (Php)</th>
                    <th rowspan="2" >Remarks</th>
                    <th rowspan="2" >Action</th> 
                </tr>
                <tr>
                        <th >Target</th>
                        <th >Actual</th>
                        <th >Target</th>
                        <th >Actual</th>
                        <th >Target</th>
                        <th >Actual</th>
                        <th >Target</th>
                        <th >Actual</th>
                        
                </tr>      
            
        </thead>
        <tbody>
        </tbody>
    </table>
        </div>
        <div class="col-md-2">
          <div class="container-fluid px-0 py-0">

          <table id="cropsrelated-total" class="border-0">
              <thead class=" bg-green-200">
                    <tr>
                        <th>#</th>
                        <th>Grand Total</th>
                        <th>#</th>
                    </tr>
              </thead>
          </table>
                
                
            

          </div> 
        </div>

        </div>  
      </div>
      </div>
            
            
        
    <div class="tab-pane fade" id="ex1-tabs-2" role="tabpanel" aria-labelledby="ex1-tab-2">
        <table  id="livestock-table" class="table yajra-datatable dt-responsive wrap table-sm bg-green-600">
            
            <thead class=" bg-green-200">
                    <tr>
                        <th rowspan="2" >Number of Cycles</th>
                        <th rowspan="2" >Crops Provided</th>
                        <th rowspan="2" >Number of Cropping Cycles Per Year</th>
                        <th colspan="2" >Date Planted (mm/yyyy)</th>
                        <th colspan="2" >Total Area Planted (ha)</th>
                        <th colspan="2" >Date Harvested (mm/yyyy)</th>
                        <th colspan="2" >Total Area Harvested (ha)</th>
                        <th rowspan="2" >Total Produce (kg)</th>
                        <th rowspan="2" >Total Sold (kg)</th>
                        <th rowspan="2" >Price per kg (Php)</th>
                        <th rowspan="2" >Total Sales (Php)</th>
                        <th rowspan="2" >Remarks</th>
                    </tr>
                    <tr>
                            <th >Target</th>
                            <th >Actual</th>
                            <th >Target</th>
                            <th >Actual</th>
                            <th >Target</th>
                            <th >Actual</th>
                            <th >Target</th>
                            <th >Actual</th>
                            
                    </tr>      
                
            </thead>
            <tbody>
            </tbody>
        </table>
    </div>
    <div class="tab-pane fade" id="ex1-tabs-3" role="tabpanel" aria-labelledby="ex1-tab-3">
      Tab 3 content
    </div>
    <div class="tab-pane fade" id="ex1-tabs-4" role="tabpanel" aria-labelledby="ex1-tab-4">
        Tab 4 content
      </div>
  </div>
  <!-- Tabs content -->
</div>
</div>
</div>
</div>
</div>
</div>
</x-app-layout>

<!-- Modal -->
<div
  class="modal fade"
  id="confirmModal"
  tabindex="-1"
  aria-hidden="true"
>
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" >Confirmation</h5>
        <button
          type="button"
          class="btn-close"
          data-mdb-dismiss="modal"
          aria-label="Close"
        ></button>
      </div>
      <div class="modal-body">
                <h4>Are you sure you want to remove this data?</h4>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" id="ok_button" name="ok_button">DELETE</button>
        <button type="button" class="btn btn-secondary" data-mdb-dismiss="modal">
          Close
        </button>
        
      </div>
    </div>
  </div>
</div>






@include('projects.cropsrelated')
@include('projects.cropsrelated_edit')



<script type="text/javascript">

$(function(){
              
    $("#addrelatedcrops").on('submit', function(e){
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
                $('#crops_submit').text('Adding...');
            },
            success:function(data){
                if(data.status == 0){
                    $.each(data.error, function(prefix, val){
                        $('span.'+prefix+'_error').text(val[0]);
                        $('#'+prefix).addClass("border-red-500");
                        $('#crops_submit').text('OK');
                    });
                }else{
                    $('#addrelatedcrops')[0].reset();
                    $('#crops_submit').text('OK');
                    $('#cropsrelated-table').DataTable().ajax.reload();
                    $('#cropsrelated-total').DataTable().ajax.reload();
                }
            }
        });
    });

    $("#editrelatedcrops").on('submit', function(e){
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
                $('#edit_crops_submit').text('Saving...');
            },
            success:function(data){
                if(data.status == 0){
                    $.each(data.error, function(prefix, val){
                        $('span.'+prefix+'_error').text(val[0]);
                        $('#'+prefix).addClass("border-red-500");
                    });
                    $('#edit_crops_submit').text('OK');
                }else{
                    $('#cropsrelated-table').DataTable().ajax.reload();
                    $('#cropsrelated-total').DataTable().ajax.reload();
                    $('#edit_crops_submit').text('OK');
                    alert(data.msg); 
                }
            }
        });
    });
});




$('#addcropsrelated').click(function(){
$('#cropsrelatedmodal').modal('show');
});

$(document).on('click', '.cropsrel_edit', function() {
    user_id = $(this).attr('id');

    $.ajax({
            url: "/projects/edit/editcropsrelated/" + user_id,
            processData:false,
            dataType:'json',
            contentType:false,
            beforeSend:function(){
                $('.withdata').prop("disabled", false);
                $('.withdata').removeClass("bg-gray-300");
            },
            success:function(data){
                   $('#editrelatedcrops').attr('action', '/projects/edit/editcropsrelated/'+ user_id);
                   $('#edit_nocycles').html(data.selectOption);
                   $('#edit_cropsprovided').val(data.crops);
                   $('#edit_noofcropspercycle').val(data.crops_per_cycle);
                   $('#edit_targetdateplanted').val(data.planted_target);
                   $('#edit_targettotalareaplanted').val(data.total_area_planted_target);
                   $('#edit_targetdateharvested').val(data.date_harvested_target);
                   $('#edit_targettotalareaharvested').val(data.total_area_harvested_target);
                   $('#edit_actualdateplanted').val(data.planted_actual);
                   $('#edit_actualtotalareaplanted').val(data.total_area_planted_actual);
                   $('#edit_actualdateharvested').val(data.date_harvested_actual);
                   $('#edit_actualtotalareaharvested').val(data.total_area_harvested_actual);
                   $('#edit_totalproduced').val(data.total_produce);
                   $('#edit_totalsold').val(data.total_sold);
                   $('#edit_priceperkg').val(data.priceperkg);
                   $('#edit_totalsales').val(data.totalsales);
                   $('#edit_remarks').val(data.remarks);

                   if(data.planted_target){
                      $('#edit_targetdateplanted').attr('disabled', true);
                      $('#edit_targetdateplanted').addClass("bg-gray-300");
                   }
                   if(data.date_harvested_target){
                      $('#edit_targetdateharvested').attr('disabled', true);
                      $('#edit_targetdateharvested').addClass("bg-gray-300");
                   }
                   if(data.total_area_planted_target){
                      $('#edit_targettotalareaplanted').attr('disabled', true);
                      $('#edit_targettotalareaplanted').addClass("bg-gray-300");
                   }
                   if(data.total_area_harvested_target){
                      $('#edit_targettotalareaharvested').attr('disabled', true);
                      $('#edit_targettotalareaharvested').addClass("bg-gray-300");
                   }
            
                  

                 
                 

                   
                
            }

        });
    
    $('#cropsrelatedmodal_edit').modal('show');
});






$(function () {
  
    //$('.yajra-datatable').DataTable({
    //        dom: 
    //             "<'row'<'col-sm-12'B>>" +
    //              "<'row'<'col-sm-12'tr>>" +
    //              "<'row'<'col-sm-4'i><'col-sm-4 text-center'l><'col-sm-4'p>>",
		//				lengthMenu: [[10, 50, 100, 200, 500, -1], [10, 50, 100, 200, 500, "All"]],
		//				iDisplayLength: 50,
    //        scrollY:        "38vh",
		//				scrollX:        true,
		//				scrollCollapse: false,
		//				paging:         true,
		//				processing: 	true,
     //   
    //});
  //});

  var parentid = '@if($mnes !== null){{$mnes->id}}@endif';

  $('#cropsrelated-table').DataTable({
        
        processing: true,
        serverSide: true,
        ajax:	'/projects/allcropsrelated' + '/' + parentid,
            scrollY:        "35vh",
						scrollX:        true,
						scrollCollapse: false,
						paging:         true,
						processing: 	true,
        columns: [
            {data: 'cycle', name: 'cycle'},
            {data: 'crops', name: 'crops'},
            {data: 'crops_per_cycle', name: 'crops_per_cycle'},
            {data: 'planted_target', name: 'planted_target'},
            {data: 'planted_actual', name: 'planted_actual'},
            {data: 'total_area_planted_target', name: 'total_area_planted_target'},
            {data: 'total_area_planted_actual', name: 'total_area_planted_actual'},
            {data: 'date_harvested_target', name: 'date_harvested_target'},
            {data: 'date_harvested_actual', name: 'date_harvested_actual'},
            {data: 'total_area_harvested_target', name: 'total_area_harvested_target'},
            {data: 'total_area_harvested_actual', name: 'total_area_harvested_actual'},
            {data: 'total_produce', name: 'total_produce'},
            {data: 'total_sold', name: 'total_sold'},
            {data: 'priceperkg', name: 'priceperkg'},
            {data: 'totalsales', name: 'totalsales'},
            {data: 'remarks', name: 'remarks'},
            {data: 'action', name: 'action', orderable: false, "width": "20%"}
        ]

    });

    $('#cropsrelated-total').DataTable({
        dom: 't',
        processing: true,
        serverSide: true,
        ajax:	'/projects/allcropsrelatedtotal' + '/' + parentid,
            scrollY:        "15vh",
        columns: [
            {data: 'no', orderable: false, name: 'no', visible:false},
            {data: 'Grand', orderable: false, name: 'Grand'},
            {data: 'Total', orderable: false, name: 'Total'}
          
        ],
         "order": [[ 0, "asc" ]],
      drawCallback: function( settings ) {
          $("#cropsrelated-total thead").remove();
      }  

    });

});

$('document').ready(function(){
var user_id;
var urlz = '';
var selectedOK = '';
var tblname = '';
  

$(document).on('click', '.cropsrel_delete', function() {
    
    user_id = $(this).attr('id');
    selectedOK = 'cropsrel';
    $('#confirmModal').modal('show');
    });
    
$(document).on('click', '#ok_button', function() {    
      switch(selectedOK) {
        case 'cropsrel':
          urlz = "/projects/cropsrelated/destroy/"+user_id;
          tblname = 'cropsrelated';
          break;
        case 'livestock':
          urlz = "/projects/livestock/destroy/"+user_id;
          break;
        default:
          // code block
      }
        $.ajax({
            url: urlz,
            beforeSend:function(){                
                $('#ok_button').text('Deleting...');
            },
            success:function(data)
            {
                setTimeout(function(){
                    $('#confirmModal').modal('hide');
                    $('#'+tblname+'-table').DataTable().ajax.reload();
                    $('#'+tblname+'-total').DataTable().ajax.reload();
                    $('#ok_button').text('DELETE');
                    alert('Data Deleted');
                }, 2000);
            }

        });
    });
  });
</script>
