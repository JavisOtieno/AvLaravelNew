@extends('admin/layouts/layout')
@section('content')

      <!-- Main Container -->
      <main id="main-container">
        <!-- Page Content -->
        <div class="content">
          <!-- Quick Overview -->
          <div class="row">
            <div class="col-6 col-lg-3">
              <a class="block block-rounded block-link-shadow text-center" href="javascript:void(0)">
                <div class="block-content block-content-full">
                  <div class="fs-2 fw-semibold text-primary">{{$processingorders}}</div>
                </div>
                <div class="block-content py-2 bg-body-light">
                  <p class="fw-medium fs-sm text-muted mb-0">
                     Orders Processing
                  </p>
                </div>
              </a>
            </div>
            <div class="col-6 col-lg-3">
              <a class="block block-rounded block-link-shadow text-center" href="javascript:void(0)">
                <div class="block-content block-content-full">
                  <div class="fs-2 fw-semibold text-success">{{ $processingpayments }}</div>
                </div>
                <div class="block-content py-2 bg-body-light">
                  <p class="fw-medium fs-sm text-muted mb-0">
                    Pending Payments
                  </p>
                </div>
              </a>
            </div>
            <div class="col-6 col-lg-3">
              <a class="block block-rounded block-link-shadow text-center" href="javascript:void(0)">
                <div class="block-content block-content-full">
                  <div class="fs-2 fw-semibold text-dark">{{ $allorders }}</div>
                </div>
                <div class="block-content py-2 bg-body-light">
                  <p class="fw-medium fs-sm text-muted mb-0">
                    Total Orders
                  </p>
                </div>
              </a>
            </div>
            <div class="col-6 col-lg-3">
              <a class="block block-rounded block-link-shadow text-center" href="javascript:void(0)">
                <div class="block-content block-content-full">
                  <div class="fs-2 fw-semibold text-dark">{{ $allpayments }}</div>
                </div>
                <div class="block-content py-2 bg-body-light">
                  <p class="fw-medium fs-sm text-muted mb-0">
                    All Payments 
                  </p>
                </div>
              </a>
            </div>
          </div>
          <!-- END Quick Overview -->



          <!-- Top Products and Latest Orders -->
          <div class="row items-push">
            <div class="col-xl-6">
              <!-- Top Products -->
              <div class="block block-rounded h-100 mb-0">
                <div class="block-header block-header-default">
                  <h3 class="block-title">Latest Products</h3>
                  <div class="block-options">
                    <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                      <i class="si si-refresh"></i>
                    </button>
                  </div>
                </div>
                <div class="block-content">
                  <table class="table table-borderless table-striped table-vcenter fs-sm">
                    <tbody>

                      @foreach ($products as $product)
                    
                     
                      <tr>
                        <td class="text-center" style="width: 100px;">
                          <a class="fw-semibold" href="be_pages_ecom_product_edit.html">{{$product['id']}}</a>
                        </td>
                        <td>
                          <a href="be_pages_ecom_product_edit.html">{{$product['name']}}</a>
                        </td>
                        <td class="d-none d-sm-table-cell text-center">
                          {{$product['price']}}
                        </td>
                      </tr>
                      @endforeach


                   
                   
                   
                    </tbody>
                  </table>
                </div>
              </div>
              <!-- END Top Products -->
            </div>
            <div class="col-xl-6">
              <!-- Latest Orders -->
              <div class="block block-rounded h-100 mb-0">
                <div class="block-header block-header-default">
                  <h3 class="block-title">Latest Orders</h3>
                  <div class="block-options">
                    <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                      <i class="si si-refresh"></i>
                    </button>
                  </div>
                </div>
                <div class="block-content">
                  <table class="table table-borderless table-striped table-vcenter">
                    <tbody>
                      @foreach ($orders as $order)
                    
                     
                      <tr>
                        <td class="text-center" style="width: 100px;">
                          <a class="fw-semibold" href="be_pages_ecom_product_edit.html">{{$order['id']}}</a>
                        </td>
                        <td>
                          <a href="be_pages_ecom_product_edit.html">{{$order['name']}}</a>
                        </td>
                        <td class="d-none d-sm-table-cell text-center">
                          {{$order['customer']['name']}}
                        </td>
                        <td class="d-none d-sm-table-cell text-center">
                          {{$order['value']}}
                        </td>
                      </tr>

                      @endforeach
  
                      
                    </tbody>
                  </table>
                </div>
              </div>
              <!-- END Latest Orders -->
            </div>
          </div>
          <!-- END Top Products and Latest Orders -->

                    <!-- Orders Overview -->
                    {{-- <div class="block block-rounded">
                      <div class="block-header block-header-default">
                        <h3 class="block-title">Orders Overview</h3>
                        <div class="block-options">
                          <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                            <i class="si si-refresh"></i>
                          </button>
                        </div>
                      </div>
                      <div class="block-content block-content-full">
                        <!-- Chart.js is initialized in js/pages/be_pages_ecom_dashboard.min.js which was auto compiled from _js/pages/be_pages_ecom_dashboard.js) -->
                        <!-- For more info and examples you can check out http://www.chartjs.org/docs/ -->
                        <div style="height: 400px;"><canvas id="js-chartjs-overview"></canvas></div>
                      </div>
                    </div> --}}
                    <!-- END Orders Overview -->
        </div>
        <!-- END Page Content -->
      </main>
      <!-- END Main Container -->
@endsection