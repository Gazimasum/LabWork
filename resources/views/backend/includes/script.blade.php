  <!-- Bootstrap core JavaScript-->
  <script src="{!! asset('backend/vendor/jquery/jquery.min.j') !!}s"></script>
  <script src="{!! asset('backend/vendor/bootstrap/js/bootst') !!}rap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="{!! asset('backend/vendor/jquery-easing/jquer') !!}y.easing.min.js"></script>

  <!-- Page level plugin JavaScript-->
<!--   <script src="backend/vendor/chart.js/Chart.min.js"></script>
-->  <script src="{!! asset('backend/vendor/datatables/jquery.d') !!}ataTables.js"></script>
  <script src="{!! asset('backend/vendor/datatables/dataTabl') !!}es.bootstrap4.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="{!! asset('backend/js/sb-admin.min.js') !!}"></script>

  <!-- Demo scripts for this page-->
  <script src="{!! asset('backend/js/demo/datatables-demo.js') !!}"></script>
  <script src="{!!asset('backend/js/demo/chart-area-demo.js') !!}"></script>
  <script src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
    <script>

      $("#division_id").change(function(){
          var division = $("#division_id").val();
          // Send an ajax request to server with this division
          $("#district-area").html("");
          var option = "";
          var url = "{{ url('/') }}";
          $.get( url+"/get-districts/"+division, function( data ) {

              data = JSON.parse(data);
              data.forEach( function(element) {
                option += "<option value='"+ element.id +"'>"+ element.name +"</option>";
              });

            $("#district-area").html(option);

          });
      })

    </script>
