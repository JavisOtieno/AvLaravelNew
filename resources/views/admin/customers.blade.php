@extends('admin/layouts/layout')
@section('content') `



        
      <main id="main-container">
      <!-- END Main Container -->

      <div class="content">
        <!-- Dynamic Table Full -->
        <div class="block block-rounded">
          <div class="block-header block-header-default">
            <h3 class="block-title">All Customers
               {{-- <small>Full</small> --}}
            </h3>
          </div>
          <div class="block-content block-content-full">
            <!-- DataTables init on table by adding .js-dataTable-full class, functionality is initialized in js/pages/be_tables_datatables.min.js which was auto compiled from _js/pages/be_tables_datatables.js -->
            <table class="table table-bordered table-striped table-vcenter js-dataTable-full">
              <thead>
                <tr>
                  <th class="text-center" style="width: 80px;">ID</th>
                  <th>Name</th>
                  {{-- <th class="d-none d-sm-table-cell" style="width: 30%;">Email</th> --}}
                  <th class="d-none d-sm-table-cell" style="width: 15%;">Phone</th>
                  <th >Created</th>
                  <th
                   style="width: 15%;"
                   >Actions</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($customers as $customer)
                <tr>
                  <td class="text-center fs-sm">{{$customer['id']}}</td>
                  <td class="fw-semibold fs-sm">{{$customer['name']}}</td>
                  {{-- <td class="d-none d-sm-table-cell fs-sm">
                    {{$customer['email']}}</span>
                  </td> --}}
                  <td class="d-none d-sm-table-cell fs-sm">
                    {{$customer['phone']}}</span>
                  </td>
                  
                  <td>
                    <span class="text-muted fs-sm">{{$customer['created_at']}}</span>
                  </td>
                  <td class="text-center">
                    <a class="btn btn-sm btn-alt-secondary" href="/viewcustomer/{{$customer['id']}}" data-bs-toggle="tooltip" title="View">
                      <i class="fa fa-fw fa-eye"></i>
                    </a>
                    {{-- <a class="btn btn-sm btn-alt-secondary" href="javascript:void(0)" data-bs-toggle="tooltip" title="Delete">
                      <i class="fa fa-fw fa-times text-danger"></i>
                    </a> --}}
                  </td>
                </tr>
                @endforeach
              
   
                
              </tbody>
            </table>
          </div>
        </div>
        <!-- END Dynamic Table Full -->
      </main>

   
      

      
  

      @endsection
