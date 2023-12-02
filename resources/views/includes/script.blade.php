<!-- jQuery -->
<script src="{{ url('/plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap 4 -->
<script src="{{ url('/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ url('/dist/js/adminlte.min.js') }}"></script>
<!-- DataTables  & Plugins -->
<script src="{{ url('/plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ url('/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ url('/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ url('/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
<script src="{{ url('/plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
<script src="{{ url('/plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
<script src="{{ url('/plugins/jszip/jszip.min.js') }}"></script>
<script src="{{ url('/plugins/pdfmake/pdfmake.min.js') }}"></script>
<script src="{{ url('/plugins/pdfmake/vfs_fonts.js') }}"></script>
<script src="{{ url('/plugins/datatables-buttons/js/buttons.html5.min.js') }}"></script>
<script src="{{ url('/plugins/datatables-buttons/js/buttons.print.min.js') }}"></script>
<script src="{{ url('/plugins/datatables-buttons/js/buttons.colVis.min.js') }}"></script>
<!-- SweetAlert2 -->
<script src="{{ url('/plugins/sweetalert2/sweetalert2.min.js') }}"></script>
<!-- /SweetAlert2 -->

<script>
    $(function() {
        $("#table-export")
            .DataTable({
                fixedColumns: {
                    left: 1,
                    right: 1
                },
                paging: false,
                scrollCollapse: true,
                scrollX: true,
                scrollY: 300,
                responsive: false,
                lengthChange: false,
                autoWidth: false,
                buttons: ["excel", "pdf", "print"],
            })
            .buttons()
            .container()
            .appendTo("#table-export_wrapper .col-md-6:eq(0)");
        $("#table-primary").DataTable({
            fixedColumns: {
                left: 1,
                right: 1
            },
            paging: false,
            scrollCollapse: true,
            scrollX: true,
            scrollY: 300,
            paging: true,
            lengthChange: false,
            searching: true,
            ordering: true,
            info: true,
            autoWidth: false,
            responsive: false,
        })
    });
</script>
