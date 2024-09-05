
@extends('admin/layouts/layout')
@section('content') `

      <!-- Main Container -->
      <main id="main-container">
        <!-- Page Content -->
        <div class="content">
          <!-- Quick Overview -->
          <div class="row">
            <div class="col-6 col-lg-3">
              <a class="block block-rounded block-link-shadow text-center" href="be_pages_ecom_orders.html">
                <div class="block-content block-content-full">
                  <div class="fs-2 fw-semibold text-primary">35</div>
                </div>
                <div class="block-content py-2 bg-body-light">
                  <p class="fw-medium fs-sm text-muted mb-0">
                    Pending
                  </p>
                </div>
              </a>
            </div>
            <div class="col-6 col-lg-3">
              <a class="block block-rounded block-link-shadow text-center" href="javascript:void(0)">
                <div class="block-content block-content-full">
                  <div class="fs-2 fw-semibold text-dark">120</div>
                </div>
                <div class="block-content py-2 bg-body-light">
                  <p class="fw-medium fs-sm text-muted mb-0">
                    Today
                  </p>
                </div>
              </a>
            </div>
            <div class="col-6 col-lg-3">
              <a class="block block-rounded block-link-shadow text-center" href="javascript:void(0)">
                <div class="block-content block-content-full">
                  <div class="fs-2 fw-semibold text-dark">260</div>
                </div>
                <div class="block-content py-2 bg-body-light">
                  <p class="fw-medium fs-sm text-muted mb-0">
                    Yesterday
                  </p>
                </div>
              </a>
            </div>
            <div class="col-6 col-lg-3">
              <a class="block block-rounded block-link-shadow text-center" href="javascript:void(0)">
                <div class="block-content block-content-full">
                  <div class="fs-2 fw-semibold text-dark">69,841</div>
                </div>
                <div class="block-content py-2 bg-body-light">
                  <p class="fw-medium fs-sm text-muted mb-0">
                    This Month
                  </p>
                </div>
              </a>
            </div>
          </div>
          <!-- END Quick Overview -->

          <!-- All Orders -->
          <div class="block block-rounded">
            <div class="block-header block-header-default">
              <h3 class="block-title">All Orders</h3>
              <div class="block-options">
                <div class="dropdown">
                  <button type="button" class="btn-block-option" id="dropdown-ecom-filters" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Filters <i class="fa fa-angle-down ms-1"></i>
                  </button>
                  <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdown-ecom-filters">
                    <a class="dropdown-item d-flex align-items-center justify-content-between" href="javascript:void(0)">
                      Pending..
                      <span class="badge bg-black-50 rounded-pill">35</span>
                    </a>
                    <a class="dropdown-item d-flex align-items-center justify-content-between" href="javascript:void(0)">
                      Processing
                      <span class="badge bg-warning rounded-pill">15</span>
                    </a>
                    <a class="dropdown-item d-flex align-items-center justify-content-between" href="javascript:void(0)">
                      For Delivery
                      <span class="badge bg-info rounded-pill">20</span>
                    </a>
                    <a class="dropdown-item d-flex align-items-center justify-content-between" href="javascript:void(0)">
                      Canceled
                      <span class="badge bg-danger rounded-pill">72</span>
                    </a>
                    <a class="dropdown-item d-flex align-items-center justify-content-between" href="javascript:void(0)">
                      Delivered
                      <span class="badge bg-success rounded-pill">890</span>
                    </a>
                    <a class="dropdown-item d-flex align-items-center justify-content-between" href="javascript:void(0)">
                      All
                      <span class="badge bg-primary rounded-pill">997</span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <div class="block-content">
              <!-- Search Form -->
              <form action="be_pages_ecom_orders.html" method="POST" onsubmit="return false;">
                <div class="mb-4">
                  <div class="input-group">
                    <input type="text" class="form-control form-control-alt" id="one-ecom-orders-search" name="one-ecom-orders-search" placeholder="Search all orders..">
                    <span class="input-group-text bg-body border-0">
                      <i class="fa fa-search"></i>
                    </span>
                  </div>
                </div>
              </form>
              <!-- END Search Form -->

              <!-- All Orders Table -->
              <div class="table-responsive">
                <table class="table table-borderless table-striped table-vcenter">
                  <thead>
                    <tr>
                      <th class="text-center" style="width: 100px;">ID</th>
                      <th class="d-none d-sm-table-cell text-center">Submitted</th>
                      <th>Status</th>
                      <th class="d-none d-xl-table-cell">Customer</th>
                      <th class="d-none d-xl-table-cell text-center">Products</th>
                      <th class="d-none d-sm-table-cell text-end">Value</th>
                      <th class="text-center">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($orders as $order)
                    
                    <tr>
                      <td class="text-center fs-sm">
                        <a class="fw-semibold" href="be_pages_ecom_order.html">
                          <strong>{{$order['id']}}</strong>
                        </a>
                      </td>
                      <td class="d-none d-sm-table-cell text-center fs-sm">{{$order['created_at']}}</td>
                      <td>
                        <span class="badge bg-danger">{{ucfirst($order['status'])}}</span>
                      </td>
                      <td class="d-none d-xl-table-cell fs-sm">
                        <a class="fw-semibold" href="be_pages_ecom_customer.html">{{$order['customer_id']}}</a>
                      </td>
                      <td class="d-none d-xl-table-cell text-center fs-sm">
                        <a class="fw-semibold" href="be_pages_ecom_order.html">{{$order['total']}}</a>
                      </td>
                      <td class="d-none d-sm-table-cell text-end fs-sm">
                        <strong>{{$order['total']}}</strong>
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
                    
                    <tr>
                      <td class="text-center fs-sm">
                        <a class="fw-semibold" href="be_pages_ecom_order.html">
                          <strong>ORD.00964</strong>
                        </a>
                      </td>
                      <td class="d-none d-sm-table-cell text-center fs-sm">20/05/2020</td>
                      <td>
                        <span class="badge bg-success">Delivered</span>
                      </td>
                      <td class="d-none d-xl-table-cell fs-sm">
                        <a class="fw-semibold" href="be_pages_ecom_customer.html">Jack Greene</a>
                      </td>
                      <td class="d-none d-xl-table-cell text-center fs-sm">
                        <a class="fw-semibold" href="be_pages_ecom_order.html">1</a>
                      </td>
                      <td class="d-none d-sm-table-cell text-end fs-sm">
                        <strong>$607,74</strong>
                      </td>
                      <td class="text-center">
                        <a class="btn btn-sm btn-alt-secondary" href="be_pages_ecom_order.html" data-bs-toggle="tooltip" title="View">
                          <i class="fa fa-fw fa-eye"></i>
                        </a>
                        <a class="btn btn-sm btn-alt-secondary" href="javascript:void(0)" data-bs-toggle="tooltip" title="Delete">
                          <i class="fa fa-fw fa-times"></i>
                        </a>
                      </td>
                    </tr>
                    <tr>
                      <td class="text-center fs-sm">
                        <a class="fw-semibold" href="be_pages_ecom_order.html">
                          <strong>ORD.00963</strong>
                        </a>
                      </td>
                      <td class="d-none d-sm-table-cell text-center fs-sm">15/08/2020</td>
                      <td>
                        <span class="badge bg-info">For delivery</span>
                      </td>
                      <td class="d-none d-xl-table-cell fs-sm">
                        <a class="fw-semibold" href="be_pages_ecom_customer.html">Ryan Flores</a>
                      </td>
                      <td class="d-none d-xl-table-cell text-center fs-sm">
                        <a class="fw-semibold" href="be_pages_ecom_order.html">9</a>
                      </td>
                      <td class="d-none d-sm-table-cell text-end fs-sm">
                        <strong>$1070,33</strong>
                      </td>
                      <td class="text-center">
                        <a class="btn btn-sm btn-alt-secondary" href="be_pages_ecom_order.html" data-bs-toggle="tooltip" title="View">
                          <i class="fa fa-fw fa-eye"></i>
                        </a>
                        <a class="btn btn-sm btn-alt-secondary" href="javascript:void(0)" data-bs-toggle="tooltip" title="Delete">
                          <i class="fa fa-fw fa-times"></i>
                        </a>
                      </td>
                    </tr>
                    <tr>
                      <td class="text-center fs-sm">
                        <a class="fw-semibold" href="be_pages_ecom_order.html">
                          <strong>ORD.00962</strong>
                        </a>
                      </td>
                      <td class="d-none d-sm-table-cell text-center fs-sm">23/03/2020</td>
                      <td>
                        <span class="badge bg-warning">Processing</span>
                      </td>
                      <td class="d-none d-xl-table-cell fs-sm">
                        <a class="fw-semibold" href="be_pages_ecom_customer.html">Jesse Fisher</a>
                      </td>
                      <td class="d-none d-xl-table-cell text-center fs-sm">
                        <a class="fw-semibold" href="be_pages_ecom_order.html">5</a>
                      </td>
                      <td class="d-none d-sm-table-cell text-end fs-sm">
                        <strong>$2178,65</strong>
                      </td>
                      <td class="text-center">
                        <a class="btn btn-sm btn-alt-secondary" href="be_pages_ecom_order.html" data-bs-toggle="tooltip" title="View">
                          <i class="fa fa-fw fa-eye"></i>
                        </a>
                        <a class="btn btn-sm btn-alt-secondary" href="javascript:void(0)" data-bs-toggle="tooltip" title="Delete">
                          <i class="fa fa-fw fa-times"></i>
                        </a>
                      </td>
                    </tr>
                    <tr>
                      <td class="text-center fs-sm">
                        <a class="fw-semibold" href="be_pages_ecom_order.html">
                          <strong>ORD.00961</strong>
                        </a>
                      </td>
                      <td class="d-none d-sm-table-cell text-center fs-sm">24/01/2020</td>
                      <td>
                        <span class="badge bg-danger">Canceled</span>
                      </td>
                      <td class="d-none d-xl-table-cell fs-sm">
                        <a class="fw-semibold" href="be_pages_ecom_customer.html">Amanda Powell</a>
                      </td>
                      <td class="d-none d-xl-table-cell text-center fs-sm">
                        <a class="fw-semibold" href="be_pages_ecom_order.html">7</a>
                      </td>
                      <td class="d-none d-sm-table-cell text-end fs-sm">
                        <strong>$1505,30</strong>
                      </td>
                      <td class="text-center">
                        <a class="btn btn-sm btn-alt-secondary" href="be_pages_ecom_order.html" data-bs-toggle="tooltip" title="View">
                          <i class="fa fa-fw fa-eye"></i>
                        </a>
                        <a class="btn btn-sm btn-alt-secondary" href="javascript:void(0)" data-bs-toggle="tooltip" title="Delete">
                          <i class="fa fa-fw fa-times"></i>
                        </a>
                      </td>
                    </tr>
                    <tr>
                      <td class="text-center fs-sm">
                        <a class="fw-semibold" href="be_pages_ecom_order.html">
                          <strong>ORD.00960</strong>
                        </a>
                      </td>
                      <td class="d-none d-sm-table-cell text-center fs-sm">13/06/2020</td>
                      <td>
                        <span class="badge bg-warning">Processing</span>
                      </td>
                      <td class="d-none d-xl-table-cell fs-sm">
                        <a class="fw-semibold" href="be_pages_ecom_customer.html">Albert Ray</a>
                      </td>
                      <td class="d-none d-xl-table-cell text-center fs-sm">
                        <a class="fw-semibold" href="be_pages_ecom_order.html">1</a>
                      </td>
                      <td class="d-none d-sm-table-cell text-end fs-sm">
                        <strong>$1278,65</strong>
                      </td>
                      <td class="text-center">
                        <a class="btn btn-sm btn-alt-secondary" href="be_pages_ecom_order.html" data-bs-toggle="tooltip" title="View">
                          <i class="fa fa-fw fa-eye"></i>
                        </a>
                        <a class="btn btn-sm btn-alt-secondary" href="javascript:void(0)" data-bs-toggle="tooltip" title="Delete">
                          <i class="fa fa-fw fa-times"></i>
                        </a>
                      </td>
                    </tr>
                    <tr>
                      <td class="text-center fs-sm">
                        <a class="fw-semibold" href="be_pages_ecom_order.html">
                          <strong>ORD.00959</strong>
                        </a>
                      </td>
                      <td class="d-none d-sm-table-cell text-center fs-sm">09/12/2020</td>
                      <td>
                        <span class="badge bg-info">For delivery</span>
                      </td>
                      <td class="d-none d-xl-table-cell fs-sm">
                        <a class="fw-semibold" href="be_pages_ecom_customer.html">Thomas Riley</a>
                      </td>
                      <td class="d-none d-xl-table-cell text-center fs-sm">
                        <a class="fw-semibold" href="be_pages_ecom_order.html">7</a>
                      </td>
                      <td class="d-none d-sm-table-cell text-end fs-sm">
                        <strong>$787,92</strong>
                      </td>
                      <td class="text-center">
                        <a class="btn btn-sm btn-alt-secondary" href="be_pages_ecom_order.html" data-bs-toggle="tooltip" title="View">
                          <i class="fa fa-fw fa-eye"></i>
                        </a>
                        <a class="btn btn-sm btn-alt-secondary" href="javascript:void(0)" data-bs-toggle="tooltip" title="Delete">
                          <i class="fa fa-fw fa-times"></i>
                        </a>
                      </td>
                    </tr>
                    <tr>
                      <td class="text-center fs-sm">
                        <a class="fw-semibold" href="be_pages_ecom_order.html">
                          <strong>ORD.00958</strong>
                        </a>
                      </td>
                      <td class="d-none d-sm-table-cell text-center fs-sm">10/06/2020</td>
                      <td>
                        <span class="badge bg-warning">Processing</span>
                      </td>
                      <td class="d-none d-xl-table-cell fs-sm">
                        <a class="fw-semibold" href="be_pages_ecom_customer.html">Danielle Jones</a>
                      </td>
                      <td class="d-none d-xl-table-cell text-center fs-sm">
                        <a class="fw-semibold" href="be_pages_ecom_order.html">5</a>
                      </td>
                      <td class="d-none d-sm-table-cell text-end fs-sm">
                        <strong>$821,26</strong>
                      </td>
                      <td class="text-center">
                        <a class="btn btn-sm btn-alt-secondary" href="be_pages_ecom_order.html" data-bs-toggle="tooltip" title="View">
                          <i class="fa fa-fw fa-eye"></i>
                        </a>
                        <a class="btn btn-sm btn-alt-secondary" href="javascript:void(0)" data-bs-toggle="tooltip" title="Delete">
                          <i class="fa fa-fw fa-times"></i>
                        </a>
                      </td>
                    </tr>
                    <tr>
                      <td class="text-center fs-sm">
                        <a class="fw-semibold" href="be_pages_ecom_order.html">
                          <strong>ORD.00957</strong>
                        </a>
                      </td>
                      <td class="d-none d-sm-table-cell text-center fs-sm">16/11/2020</td>
                      <td>
                        <span class="badge bg-success">Delivered</span>
                      </td>
                      <td class="d-none d-xl-table-cell fs-sm">
                        <a class="fw-semibold" href="be_pages_ecom_customer.html">David Fuller</a>
                      </td>
                      <td class="d-none d-xl-table-cell text-center fs-sm">
                        <a class="fw-semibold" href="be_pages_ecom_order.html">3</a>
                      </td>
                      <td class="d-none d-sm-table-cell text-end fs-sm">
                        <strong>$1732,54</strong>
                      </td>
                      <td class="text-center">
                        <a class="btn btn-sm btn-alt-secondary" href="be_pages_ecom_order.html" data-bs-toggle="tooltip" title="View">
                          <i class="fa fa-fw fa-eye"></i>
                        </a>
                        <a class="btn btn-sm btn-alt-secondary" href="javascript:void(0)" data-bs-toggle="tooltip" title="Delete">
                          <i class="fa fa-fw fa-times"></i>
                        </a>
                      </td>
                    </tr>
                    <tr>
                      <td class="text-center fs-sm">
                        <a class="fw-semibold" href="be_pages_ecom_order.html">
                          <strong>ORD.00956</strong>
                        </a>
                      </td>
                      <td class="d-none d-sm-table-cell text-center fs-sm">13/05/2020</td>
                      <td>
                        <span class="badge bg-danger">Canceled</span>
                      </td>
                      <td class="d-none d-xl-table-cell fs-sm">
                        <a class="fw-semibold" href="be_pages_ecom_customer.html">Danielle Jones</a>
                      </td>
                      <td class="d-none d-xl-table-cell text-center fs-sm">
                        <a class="fw-semibold" href="be_pages_ecom_order.html">4</a>
                      </td>
                      <td class="d-none d-sm-table-cell text-end fs-sm">
                        <strong>$1011,41</strong>
                      </td>
                      <td class="text-center">
                        <a class="btn btn-sm btn-alt-secondary" href="be_pages_ecom_order.html" data-bs-toggle="tooltip" title="View">
                          <i class="fa fa-fw fa-eye"></i>
                        </a>
                        <a class="btn btn-sm btn-alt-secondary" href="javascript:void(0)" data-bs-toggle="tooltip" title="Delete">
                          <i class="fa fa-fw fa-times"></i>
                        </a>
                      </td>
                    </tr>
                    <tr>
                      <td class="text-center fs-sm">
                        <a class="fw-semibold" href="be_pages_ecom_order.html">
                          <strong>ORD.00955</strong>
                        </a>
                      </td>
                      <td class="d-none d-sm-table-cell text-center fs-sm">12/07/2020</td>
                      <td>
                        <span class="badge bg-success">Delivered</span>
                      </td>
                      <td class="d-none d-xl-table-cell fs-sm">
                        <a class="fw-semibold" href="be_pages_ecom_customer.html">Alice Moore</a>
                      </td>
                      <td class="d-none d-xl-table-cell text-center fs-sm">
                        <a class="fw-semibold" href="be_pages_ecom_order.html">1</a>
                      </td>
                      <td class="d-none d-sm-table-cell text-end fs-sm">
                        <strong>$2145,83</strong>
                      </td>
                      <td class="text-center">
                        <a class="btn btn-sm btn-alt-secondary" href="be_pages_ecom_order.html" data-bs-toggle="tooltip" title="View">
                          <i class="fa fa-fw fa-eye"></i>
                        </a>
                        <a class="btn btn-sm btn-alt-secondary" href="javascript:void(0)" data-bs-toggle="tooltip" title="Delete">
                          <i class="fa fa-fw fa-times"></i>
                        </a>
                      </td>
                    </tr>
                    <tr>
                      <td class="text-center fs-sm">
                        <a class="fw-semibold" href="be_pages_ecom_order.html">
                          <strong>ORD.00954</strong>
                        </a>
                      </td>
                      <td class="d-none d-sm-table-cell text-center fs-sm">05/05/2020</td>
                      <td>
                        <span class="badge bg-success">Delivered</span>
                      </td>
                      <td class="d-none d-xl-table-cell fs-sm">
                        <a class="fw-semibold" href="be_pages_ecom_customer.html">Lori Grant</a>
                      </td>
                      <td class="d-none d-xl-table-cell text-center fs-sm">
                        <a class="fw-semibold" href="be_pages_ecom_order.html">3</a>
                      </td>
                      <td class="d-none d-sm-table-cell text-end fs-sm">
                        <strong>$795,65</strong>
                      </td>
                      <td class="text-center">
                        <a class="btn btn-sm btn-alt-secondary" href="be_pages_ecom_order.html" data-bs-toggle="tooltip" title="View">
                          <i class="fa fa-fw fa-eye"></i>
                        </a>
                        <a class="btn btn-sm btn-alt-secondary" href="javascript:void(0)" data-bs-toggle="tooltip" title="Delete">
                          <i class="fa fa-fw fa-times"></i>
                        </a>
                      </td>
                    </tr>
                    <tr>
                      <td class="text-center fs-sm">
                        <a class="fw-semibold" href="be_pages_ecom_order.html">
                          <strong>ORD.00953</strong>
                        </a>
                      </td>
                      <td class="d-none d-sm-table-cell text-center fs-sm">23/11/2020</td>
                      <td>
                        <span class="badge bg-success">Delivered</span>
                      </td>
                      <td class="d-none d-xl-table-cell fs-sm">
                        <a class="fw-semibold" href="be_pages_ecom_customer.html">Carol Ray</a>
                      </td>
                      <td class="d-none d-xl-table-cell text-center fs-sm">
                        <a class="fw-semibold" href="be_pages_ecom_order.html">5</a>
                      </td>
                      <td class="d-none d-sm-table-cell text-end fs-sm">
                        <strong>$2235,78</strong>
                      </td>
                      <td class="text-center">
                        <a class="btn btn-sm btn-alt-secondary" href="be_pages_ecom_order.html" data-bs-toggle="tooltip" title="View">
                          <i class="fa fa-fw fa-eye"></i>
                        </a>
                        <a class="btn btn-sm btn-alt-secondary" href="javascript:void(0)" data-bs-toggle="tooltip" title="Delete">
                          <i class="fa fa-fw fa-times"></i>
                        </a>
                      </td>
                    </tr>
                    <tr>
                      <td class="text-center fs-sm">
                        <a class="fw-semibold" href="be_pages_ecom_order.html">
                          <strong>ORD.00952</strong>
                        </a>
                      </td>
                      <td class="d-none d-sm-table-cell text-center fs-sm">13/12/2020</td>
                      <td>
                        <span class="badge bg-danger">Canceled</span>
                      </td>
                      <td class="d-none d-xl-table-cell fs-sm">
                        <a class="fw-semibold" href="be_pages_ecom_customer.html">Henry Harrison</a>
                      </td>
                      <td class="d-none d-xl-table-cell text-center fs-sm">
                        <a class="fw-semibold" href="be_pages_ecom_order.html">7</a>
                      </td>
                      <td class="d-none d-sm-table-cell text-end fs-sm">
                        <strong>$1912,30</strong>
                      </td>
                      <td class="text-center">
                        <a class="btn btn-sm btn-alt-secondary" href="be_pages_ecom_order.html" data-bs-toggle="tooltip" title="View">
                          <i class="fa fa-fw fa-eye"></i>
                        </a>
                        <a class="btn btn-sm btn-alt-secondary" href="javascript:void(0)" data-bs-toggle="tooltip" title="Delete">
                          <i class="fa fa-fw fa-times"></i>
                        </a>
                      </td>
                    </tr>
                    <tr>
                      <td class="text-center fs-sm">
                        <a class="fw-semibold" href="be_pages_ecom_order.html">
                          <strong>ORD.00951</strong>
                        </a>
                      </td>
                      <td class="d-none d-sm-table-cell text-center fs-sm">19/01/2020</td>
                      <td>
                        <span class="badge bg-success">Delivered</span>
                      </td>
                      <td class="d-none d-xl-table-cell fs-sm">
                        <a class="fw-semibold" href="be_pages_ecom_customer.html">Wayne Garcia</a>
                      </td>
                      <td class="d-none d-xl-table-cell text-center fs-sm">
                        <a class="fw-semibold" href="be_pages_ecom_order.html">5</a>
                      </td>
                      <td class="d-none d-sm-table-cell text-end fs-sm">
                        <strong>$178,27</strong>
                      </td>
                      <td class="text-center">
                        <a class="btn btn-sm btn-alt-secondary" href="be_pages_ecom_order.html" data-bs-toggle="tooltip" title="View">
                          <i class="fa fa-fw fa-eye"></i>
                        </a>
                        <a class="btn btn-sm btn-alt-secondary" href="javascript:void(0)" data-bs-toggle="tooltip" title="Delete">
                          <i class="fa fa-fw fa-times"></i>
                        </a>
                      </td>
                    </tr>
                    <tr>
                      <td class="text-center fs-sm">
                        <a class="fw-semibold" href="be_pages_ecom_order.html">
                          <strong>ORD.00950</strong>
                        </a>
                      </td>
                      <td class="d-none d-sm-table-cell text-center fs-sm">10/06/2020</td>
                      <td>
                        <span class="badge bg-success">Delivered</span>
                      </td>
                      <td class="d-none d-xl-table-cell fs-sm">
                        <a class="fw-semibold" href="be_pages_ecom_customer.html">Jose Mills</a>
                      </td>
                      <td class="d-none d-xl-table-cell text-center fs-sm">
                        <a class="fw-semibold" href="be_pages_ecom_order.html">9</a>
                      </td>
                      <td class="d-none d-sm-table-cell text-end fs-sm">
                        <strong>$499,14</strong>
                      </td>
                      <td class="text-center">
                        <a class="btn btn-sm btn-alt-secondary" href="be_pages_ecom_order.html" data-bs-toggle="tooltip" title="View">
                          <i class="fa fa-fw fa-eye"></i>
                        </a>
                        <a class="btn btn-sm btn-alt-secondary" href="javascript:void(0)" data-bs-toggle="tooltip" title="Delete">
                          <i class="fa fa-fw fa-times"></i>
                        </a>
                      </td>
                    </tr>
                    <tr>
                      <td class="text-center fs-sm">
                        <a class="fw-semibold" href="be_pages_ecom_order.html">
                          <strong>ORD.00949</strong>
                        </a>
                      </td>
                      <td class="d-none d-sm-table-cell text-center fs-sm">15/11/2020</td>
                      <td>
                        <span class="badge bg-danger">Canceled</span>
                      </td>
                      <td class="d-none d-xl-table-cell fs-sm">
                        <a class="fw-semibold" href="be_pages_ecom_customer.html">Brian Cruz</a>
                      </td>
                      <td class="d-none d-xl-table-cell text-center fs-sm">
                        <a class="fw-semibold" href="be_pages_ecom_order.html">9</a>
                      </td>
                      <td class="d-none d-sm-table-cell text-end fs-sm">
                        <strong>$1438,35</strong>
                      </td>
                      <td class="text-center">
                        <a class="btn btn-sm btn-alt-secondary" href="be_pages_ecom_order.html" data-bs-toggle="tooltip" title="View">
                          <i class="fa fa-fw fa-eye"></i>
                        </a>
                        <a class="btn btn-sm btn-alt-secondary" href="javascript:void(0)" data-bs-toggle="tooltip" title="Delete">
                          <i class="fa fa-fw fa-times"></i>
                        </a>
                      </td>
                    </tr>
                    <tr>
                      <td class="text-center fs-sm">
                        <a class="fw-semibold" href="be_pages_ecom_order.html">
                          <strong>ORD.00948</strong>
                        </a>
                      </td>
                      <td class="d-none d-sm-table-cell text-center fs-sm">06/04/2020</td>
                      <td>
                        <span class="badge bg-success">Delivered</span>
                      </td>
                      <td class="d-none d-xl-table-cell fs-sm">
                        <a class="fw-semibold" href="be_pages_ecom_customer.html">Jose Wagner</a>
                      </td>
                      <td class="d-none d-xl-table-cell text-center fs-sm">
                        <a class="fw-semibold" href="be_pages_ecom_order.html">2</a>
                      </td>
                      <td class="d-none d-sm-table-cell text-end fs-sm">
                        <strong>$1641,86</strong>
                      </td>
                      <td class="text-center">
                        <a class="btn btn-sm btn-alt-secondary" href="be_pages_ecom_order.html" data-bs-toggle="tooltip" title="View">
                          <i class="fa fa-fw fa-eye"></i>
                        </a>
                        <a class="btn btn-sm btn-alt-secondary" href="javascript:void(0)" data-bs-toggle="tooltip" title="Delete">
                          <i class="fa fa-fw fa-times"></i>
                        </a>
                      </td>
                    </tr>
                    <tr>
                      <td class="text-center fs-sm">
                        <a class="fw-semibold" href="be_pages_ecom_order.html">
                          <strong>ORD.00947</strong>
                        </a>
                      </td>
                      <td class="d-none d-sm-table-cell text-center fs-sm">28/12/2020</td>
                      <td>
                        <span class="badge bg-success">Delivered</span>
                      </td>
                      <td class="d-none d-xl-table-cell fs-sm">
                        <a class="fw-semibold" href="be_pages_ecom_customer.html">Carol Ray</a>
                      </td>
                      <td class="d-none d-xl-table-cell text-center fs-sm">
                        <a class="fw-semibold" href="be_pages_ecom_order.html">2</a>
                      </td>
                      <td class="d-none d-sm-table-cell text-end fs-sm">
                        <strong>$1206,48</strong>
                      </td>
                      <td class="text-center">
                        <a class="btn btn-sm btn-alt-secondary" href="be_pages_ecom_order.html" data-bs-toggle="tooltip" title="View">
                          <i class="fa fa-fw fa-eye"></i>
                        </a>
                        <a class="btn btn-sm btn-alt-secondary" href="javascript:void(0)" data-bs-toggle="tooltip" title="Delete">
                          <i class="fa fa-fw fa-times"></i>
                        </a>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <!-- END All Orders Table -->

              <!-- Pagination -->
              <nav aria-label="Photos Search Navigation">
                <ul class="pagination pagination-sm justify-content-end mt-2">
                  <li class="page-item">
                    <a class="page-link" href="javascript:void(0)" tabindex="-1" aria-label="Previous">
                      Prev
                    </a>
                  </li>
                  <li class="page-item active">
                    <a class="page-link" href="javascript:void(0)">1</a>
                  </li>
                  <li class="page-item">
                    <a class="page-link" href="javascript:void(0)">2</a>
                  </li>
                  <li class="page-item">
                    <a class="page-link" href="javascript:void(0)">3</a>
                  </li>
                  <li class="page-item">
                    <a class="page-link" href="javascript:void(0)">4</a>
                  </li>
                  <li class="page-item">
                    <a class="page-link" href="javascript:void(0)" aria-label="Next">
                      Next
                    </a>
                  </li>
                </ul>
              </nav>
              <!-- END Pagination -->
            </div>
          </div>
          <!-- END All Orders -->
        </div>
        <!-- END Page Content -->
      </main>
      <!-- END Main Container -->

      @endsection
