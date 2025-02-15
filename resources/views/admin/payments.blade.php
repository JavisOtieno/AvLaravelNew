
@extends('admin/layouts/layout')
@section('content') `

      <!-- Main Container -->
  
      <!-- END Main Container -->

      <main id="main-container">
        <!-- END Main Container -->
  
        <div class="content">
          <!-- Dynamic Table Full -->
          <div class="row">
            <div class="col-6 col-lg-3">
              <a class="block block-rounded block-link-shadow text-center" href="be_pages_ecom_orders.html">
                <div class="block-content block-content-full">
                  <div class="fs-2 fw-semibold text-primary">{{ $allpayments }}</div>
                </div>
                <div class="block-content py-2 bg-body-light">
                  <p class="fw-medium fs-sm text-muted mb-0">
                    All
                  </p>
                </div>
              </a>
            </div>
            <div class="col-6 col-lg-3">
              <a class="block block-rounded block-link-shadow text-center" href="javascript:void(0)">
                <div class="block-content block-content-full">
                  <div class="fs-2 fw-semibold text-dark">{{ $processingpayments }}</div>
                </div>
                <div class="block-content py-2 bg-body-light">
                  <p class="fw-medium fs-sm text-muted mb-0">
                    Processing
                  </p>
                </div>
              </a>
            </div>
            <div class="col-6 col-lg-3">
              <a class="block block-rounded block-link-shadow text-center" href="javascript:void(0)">
                <div class="block-content block-content-full">
                  <div class="fs-2 fw-semibold text-dark">{{ $completepayments }}</div>
                </div>
                <div class="block-content py-2 bg-body-light">
                  <p class="fw-medium fs-sm text-muted mb-0">
                    Complete
                  </p>
                </div>
              </a>
            </div>
            <div class="col-6 col-lg-3">
              <a class="block block-rounded block-link-shadow text-center" href="javascript:void(0)">
                <div class="block-content block-content-full">
                  <div class="fs-2 fw-semibold text-dark"> {{ $cancelledpayments }}</div>
                </div>
                <div class="block-content py-2 bg-body-light">
                  <p class="fw-medium fs-sm text-muted mb-0">
                    Cancelled
                  </p>
                </div>
              </a>
            </div>
          </div>
          <div class="block block-rounded">
            <div class="block-header block-header-default">
              <h3 class="block-title">All Payments
                 {{-- <small>Full</small> --}}
              </h3>
            </div>
            <div class="block-content block-content-full">
              <!-- DataTables init on table by adding .js-dataTable-full class, functionality is initialized in js/pages/be_tables_datatables.min.js which was auto compiled from _js/pages/be_tables_datatables.js -->
              <table class="table table-bordered table-striped table-vcenter js-dataTable-full">
                <thead>
                  <tr>
                    <th class="text-center" style="width: 80px;">ID</th>
                    <th>Amount</th>
                    {{-- <th class="d-none d-sm-table-cell" style="width: 30%;">Email</th> --}}
                    {{-- <th class="d-none d-sm-table-cell" style="width: 15%;">Status</th>--}}
                    <th >Created</th> 
                    <th >Status</th>
                    <th
                     style="width: 15%;"
                     >Actions</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($payments as $payment)
                  <tr>
                    <td class="text-center fs-sm">{{$payment['id']}}</td>
                    <td class="fw-semibold fs-sm">{{$payment['total']}}</td>
                    {{-- <td class="d-none d-sm-table-cell fs-sm">
                      {{$customer['email']}}</span>
                    </td> --}}
                    {{-- <td class="d-none d-sm-table-cell fs-sm">
                      {{$payment['status']}}</span>
                    </td> --}}
                    <td class="d-none d-sm-table-cell">
                      <span class="fs-xs fw-semibold d-inline-block py-1 px-3 
                      rounded-pill bg-success-light text-success">{{$payment['status']}}</span>
                    </td>
                    
                    <td>
                      <span class="text-muted fs-sm">{{$payment['created_at']}}</span>
                    </td>
                    <td class="text-center">
                      <a class="btn btn-sm btn-alt-secondary" href="be_pages_ecom_order.html" data-bs-toggle="tooltip" title="View">
                        <i class="fa fa-fw fa-eye"></i>
                      </a>
                      <a class="btn btn-sm btn-alt-secondary" href="javascript:void(0)" data-bs-toggle="tooltip" title="Delete">
                        <i class="fa fa-fw fa-times text-danger"></i>
                      </a>
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
