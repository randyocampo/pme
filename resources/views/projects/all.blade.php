
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Projects') }}
        </h2>
        
    </x-slot>
    

    <div class="py-3">
        <div class="max-w-12 mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">

            
                <div class="card-body">    
                        <button type="button" name="add"   id="add" class="add btn btn-info btn-sm my-2"><i class="fas fa-plus"></i> Add</button>

            <div class="table-responsive">    
            <table id="projects" class="table table-striped table-bordered nowrap">
                <thead>
                    <tr>        <th>#</th>
                                <th>Year Covered</th>
			                    <th>Municipality</th>
			                    <th>Barangay</th>
                                <th>Project ID</th>
                                <th>Projects Title</th>
                                <th>Action</th>                
                    </tr>      
                </thead>
          
            </table>
            </div>
        </div>
    </div>

    </div>
    </div>


<!-- Modal -->



</x-app-layout>

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
        <button type="button" class="btn btn-danger" id="ok_button" name="ok_button">OK</button>
        <button type="button" class="btn btn-secondary" data-mdb-dismiss="modal">
          Close
        </button>
        
      </div>
    </div>
  </div>
</div>





<script type="text/javascript">

$('document').ready(function(){
var user_id;



    $('.table').DataTable({
        
        processing: true,
        serverSide: true,
        ajax: '{{ route("projects.all") }}',
        scrollY:        "60vh",
						scrollX:        true,
						scrollCollapse: false,
						paging:         false,
						processing: 	true,
        columns: [
            {data: 'DT_RowIndex', name: 'DT_RowIndex', "width": "2%"},
            {data: 'year_covered', name: 'year_covered', "width": "5%"},
            {data: 'municipality', name: 'municipality', "width": "15%"},
            {data: 'barangay', name: 'barangay', "width": "15%"},
            {data: 'projectid', name: 'projectid', "width": "10%"},
            {data: 'projecttitle', name: 'projecttitle', "width": "50%"},
            {data: 'action', name: 'action', orderable: false, "width": "20%"}
            
           
        ]

    });

$(document).on('click', '.add', function() {
    window.location.replace("/projects/create/");
});

$(document).on('click', '.edit', function() {
    user_id = $(this).attr('id');
    //window.location.replace("/projects/edit/"+user_id);
    //window.location.href = ""; 
    window.location.href = "/projects/edit/" + user_id;
});
    

$(document).on('click', '.delete', function() {

    user_id = $(this).attr('id');
    $('#confirmModal').modal('show');

    });

    
    $('#ok_button').click(function(){
        $.ajax({
            url:"/projects/destroy/"+user_id,
            beforeSend:function(){
                $('#ok_button').text('Deleting...');
            },
            success:function(data)
            {
                setTimeout(function(){
                    $('#confirmModal').modal('hide');
                    $('#projects').DataTable().ajax.reload();
                    $('#ok_button').text('DELETE');
                    alert('Data Deleted');

                }, 2000);
            }

        });
    });

});



  


  


</script>



