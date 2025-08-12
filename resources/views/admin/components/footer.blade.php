
      <!-- Footer -->
      <footer id="page-footer" class="bg-body-light">
        <div class="content py-3">
          <div class="row fs-sm">
            <div class="col-sm-6 order-sm-2 py-1 text-center text-sm-end">
              Crafted with <i class="fa fa-heart text-danger"></i> by <a class="fw-semibold" href="https://fave.av.ke" target="_blank">Fave</a>
            </div>
            <div class="col-sm-6 order-sm-1 py-1 text-center text-sm-start">
              <a class="fw-semibold" href="/" target="_blank">Fave</a> &copy; <span data-toggle="year-copy"></span>
            </div>
          </div>
        </div>
      </footer>
      <!-- END Footer -->
    </div>
    <!-- END Page Container -->

    <!--
        OneUI JS

        Core libraries and functionality
        webpack is putting everything together at {{asset('adminassets/_js/main/app.js')}}
    -->
    <script src="{{asset('adminassets/js/oneui.app.min.js')}}"></script>

    <!-- Page JS Plugins -->
    <script src="{{asset('adminassets/js/plugins/chart.js/chart.umd.js')}}"></script>

    <!-- Page JS Code -->
    <script src="{{asset('adminassets/js/pages/be_pages_ecom_dashboard.min.js')}}"></script>
    <script src="{{asset('adminassets/js/lib/jquery.min.js')}}"></script>

        <!-- Page JS Plugins -->
        <script src="{{asset('adminassets/js/plugins/datatables/jquery.dataTables.min.js')}}"></script>
        <script src="{{asset('adminassets/js/plugins/datatables-bs5/js/dataTables.bootstrap5.min.js')}}"></script>
        <script src="{{asset('adminassets/js/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
        <script src="{{asset('adminassets/js/plugins/datatables-responsive-bs5/js/responsive.bootstrap5.min.js')}}"></script>
        <script src="{{asset('adminassets/js/plugins/datatables-buttons/dataTables.buttons.min.js')}}"></script>
        <script src="{{asset('adminassets/js/plugins/datatables-buttons-bs5/js/buttons.bootstrap5.min.js')}}"></script>
        <script src="{{asset('adminassets/js/plugins/datatables-buttons-jszip/jszip.min.js')}}"></script>
        <script src="{{asset('adminassets/js/plugins/datatables-buttons-pdfmake/pdfmake.min.js')}}"></script>
        <script src="{{asset('adminassets/js/plugins/datatables-buttons-pdfmake/vfs_fonts.js')}}"></script>
        <script src="{{asset('adminassets/js/plugins/datatables-buttons/buttons.print.min.js')}}"></script>
        <script src="{{asset('adminassets/js/plugins/datatables-buttons/buttons.html5.min.js')}}"></script>
    
        <!-- Page JS Code -->
        <script src="{{asset('adminassets/js/pages/be_tables_datatables.min.js')}}"></script>
  </body>
</html>

