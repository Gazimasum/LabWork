// Call the dataTables jQuery plugin
$(document).ready(function() {

	$('#dataTable tfoot th').each( function () {
        var title = $(this).text();
        if (title!='Edit' &&  title!='Delete') {
        	$(this).html( '<input type="text" placeholder="Search '+title+'" />' );
        }
    } );


    var table = $('#dataTable').DataTable({
  	    "columnDefs": [{
			"targets": [4,5],
			"orderable": false
			}]
	});

    table.columns().every( function () {
        var that = this;
        $( 'input', this.footer() ).on( 'keyup change clear', function () {
            if ( that.search() !== this.value ) {
                that
                    .search( this.value )
                    .draw();
            }
        } );
    } );
});
