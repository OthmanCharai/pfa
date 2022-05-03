@extends('influencers.profile.profile')
@section('afterCss')
    <!-- Core CSS -->
    <link rel="stylesheet" href="{{asset('vendor/css/rtl/core.css')}}" class="template-customizer-core-css" />
    <link rel="stylesheet" href="{{asset('vendor/css/rtl/theme-default.css')}}" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="{{asset('css/demo.css')}}" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="{{asset('vendor/libs/perfect-scrollbar/perfect-scrollbar.css')}}" />
    <link rel="stylesheet" href="{{asset('vendor/libs/typeahead-js/typeahead.css')}}" />
    <link rel="stylesheet" href="{{asset('vendor/libs/datatables-bs5/datatables.bootstrap5.css')}}" />
    <link rel="stylesheet" href="{{asset('vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.css')}}" />
    <link rel="stylesheet" href="{{asset('vendor/libs/datatables-buttons-bs5/buttons.bootstrap5.css')}}" />
    <link rel="stylesheet" href="{{asset('vendor/libs/animate-css/animate.css')}}" />
    <link rel="stylesheet" href="{{asset('vendor/libs/sweetalert2/sweetalert2.css')}}" />
    <link rel="stylesheet" href="{{asset('vendor/libs/select2/select2.css')}}" />
    <link rel="stylesheet" href="{{asset('vendor/libs/formvalidation/dist/css/formValidation.min.css')}}" />

    <!-- Page CSS -->

    <link rel="stylesheet" href="{{asset('vendor/css/pages/page-user-view.css')}}" />
    <!-- Helpers -->
    <script src="{{asset('vendor/js/helpers.js')}}"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Template customizer: To hide customizer set displayCustomizer value false in config.js.  -->
    {{-- <script src="{{asset('vendor/js/template-customizer.js')}}"></script> --}}
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="{{asset('js/config.js')}}"></script>


@endsection
@section('coreJs')
    {{-- <script async defer src="http://127.0.0.1:8000.twic.pics/?v1"></script> --}}
    {{-- <script src="https://ucarecdn.com/libs/widget/3.x/uploadcare.lang.en.min.js"></script> --}}
    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="{{asset('vendor/libs/jquery/jquery.js')}}"></script>
    <script src="{{asset('vendor/libs/popper/popper.js')}}"></script>
    <script src="{{asset('vendor/js/bootstrap.js')}}"></script>
    <script src="{{asset('vendor/libs/perfect-scrollbar/perfect-scrollbar.js')}}"></script>

    <script src="{{asset('vendor/libs/hammer/hammer.js')}}"></script>
    <script src="{{asset('vendor/libs/i18n/i18n.js')}}"></script>
    <script src="{{asset('vendor/libs/typeahead-js/typeahead.js')}}"></script>

    <script src="{{asset('vendor/js/menu.js')}}"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->
    <script src="{{asset('vendor/libs/moment/moment.js')}}"></script>
    <script src="{{asset('vendor/libs/datatables/jquery.dataTables.js')}}"></script>
    <script src="{{asset('vendor/libs/datatables-bs5/datatables-bootstrap5.js')}}"></script>
    <script src="{{asset('vendor/libs/datatables-responsive/datatables.responsive.js')}}"></script>
    <script src="{{asset('vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.js')}}"></script>
    <script src="{{asset('vendor/libs/datatables-buttons/datatables-buttons.js')}}"></script>
    <script src="{{asset('vendor/libs/datatables-buttons-bs5/buttons.bootstrap5.js')}}"></script>
    <script src="{{asset('vendor/libs/jszip/jszip.js')}}"></script>
    <script src="{{asset('vendor/libs/pdfmake/pdfmake.js')}}"></script>
    <script src="{{asset('vendor/libs/datatables-buttons/buttons.html5.js')}}"></script>
    <script src="{{asset('vendor/libs/datatables-buttons/buttons.print.js')}}"></script>
    <script src="{{asset('vendor/libs/sweetalert2/sweetalert2.js')}}"></script>
    <script src="{{asset('vendor/libs/cleavejs/cleave.js')}}"></script>
    <script src="{{asset('vendor/libs/cleavejs/cleave-phone.js')}}"></script>
    <script src="{{asset('vendor/libs/select2/select2.js')}}"></script>
    {{-- <script src="{{asset('vendor/libs/formvalidation/dist/js/FormValidation.min.js')}}"></script>
    <script src="{{asset('vendor/libs/formvalidation/dist/js/plugins/Bootstrap5.min.js')}}"></script>
    <script src="{{asset('vendor/libs/formvalidation/dist/js/plugins/AutoFocus.min.js')}}"></script> --}}

    <!-- Main JS -->
    <script src="{{asset('js/main.js')}}"></script>

    <!-- Page JS -->
    <script src="{{asset('js/modal-edit-user.js')}}"></script>
    <script src="{{asset('js/app-user-view.js')}}"></script>
    {{-- <script src="{{asset('js/app-user-view-account.js')}}"></script> --}}
@endsection
@section('profileContent')
<div class="row">
    <div class="col-md-12  mb-4 mb-md-0">
        <div class="card">
          <div class="table-responsive text-nowrap">
            <table class="table text-nowrap">
              <thead>
                <tr>
                  <th>Product</th>
                  <th>Category</th>
                  <th>Payment</th>
                  <th>Order Status</th>
                  <th>Actions</th>
                </tr>
              </thead>
              <tbody class="table-border-bottom-0">
                <tr>
                  <td>
                    <div class="d-flex align-items-center">
                      <img
                        src="{{asset('/img/icons/products/oneplus.png')}}"
                        alt="Oneplus"
                        height="32"
                        width="32"
                        class="me-2"
                      />
                      <div class="d-flex flex-column">
                        <span class="lh-1 fw-semibold">OnePlus 7Pro</span>
                        <small class="text-muted">OnePlus</small>
                      </div>
                    </div>
                  </td>
                  <td>
                    <span class="badge bg-label-primary rounded-pill badge-center p-3 me-2"
                      ><i class="bx bx-mobile-alt bx-xs"></i
                    ></span>
                    Smart Phone
                  </td>
                  <td>
                    <div class="lh-1 text-muted"><span class="text-primary fw-semibold">$120</span>/499</div>
                    <small class="text-muted">Partially Paid</small>
                  </td>
                  <td><span class="badge bg-label-primary">Confirmed</span></td>
                  <td>
                    <div class="dropdown">
                      <button
                        type="button"
                        class="btn dropdown-toggle hide-arrow p-0"
                        data-bs-toggle="dropdown"
                      >
                        <i class="bx bx-dots-vertical-rounded"></i>
                      </button>
                      <div class="dropdown-menu">
                        <a class="dropdown-item" href="javascript:void(0);"
                          ><i class="bx bx-edit-alt me-1"></i> View Details</a
                        >
                        <a class="dropdown-item" href="javascript:void(0);"
                          ><i class="bx bx-trash me-1"></i> Buy Again</a
                        >
                      </div>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>
                    <div class="d-flex align-items-center">
                      <img
                        src="{{asset('/img/icons/products/magic-mouse.png')}}"
                        alt="Apple"
                        height="32"
                        width="32"
                        class="me-2"
                      />
                      <div class="d-flex flex-column">
                        <span class="lh-1 fw-semibold">Magic Mouse</span>
                        <small class="text-muted">Apple</small>
                      </div>
                    </div>
                  </td>
                  <td>
                    <span class="badge bg-label-warning rounded-pill badge-center p-3 me-2"
                      ><i class="bx bx-mouse bx-xs"></i
                    ></span>
                    Mouse
                  </td>
                  <td>
                    <div class="lh-1"><span class="text-primary fw-semibold">$149</span></div>
                    <small class="text-muted">Fully Paid</small>
                  </td>
                  <td><span class="badge bg-label-success">Completed</span></td>
                  <td>
                    <div class="dropdown">
                      <button
                        type="button"
                        class="btn dropdown-toggle hide-arrow p-0"
                        data-bs-toggle="dropdown"
                      >
                        <i class="bx bx-dots-vertical-rounded"></i>
                      </button>
                      <div class="dropdown-menu">
                        <a class="dropdown-item" href="javascript:void(0);"
                          ><i class="bx bx-edit-alt me-1"></i> View Details</a
                        >
                        <a class="dropdown-item" href="javascript:void(0);"
                          ><i class="bx bx-trash me-1"></i> Buy Again</a
                        >
                      </div>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>
                    <div class="d-flex align-items-center">
                      <img
                        src="{{asset('/img/icons/products/imac-pro.png')}}"
                        alt="Apple"
                        height="32"
                        width="32"
                        class="me-2"
                      />
                      <div class="d-flex flex-column">
                        <span class="lh-1 fw-semibold">iMac Pro</span>
                        <small class="text-muted">Apple</small>
                      </div>
                    </div>
                  </td>
                  <td>
                    <span class="badge bg-label-info rounded-pill badge-center p-3 me-2"
                      ><i class="bx bx-desktop bx-xs"></i
                    ></span>
                    Computer
                  </td>
                  <td>
                    <div class="lh-1 text-muted"><span class="text-primary fw-semibold">$0</span>/899</div>
                    <small class="text-muted">Unpaid</small>
                  </td>
                  <td><span class="badge bg-label-danger">Cancelled</span></td>
                  <td>
                    <div class="dropdown">
                      <button
                        type="button"
                        class="btn dropdown-toggle hide-arrow p-0"
                        data-bs-toggle="dropdown"
                      >
                        <i class="bx bx-dots-vertical-rounded"></i>
                      </button>
                      <div class="dropdown-menu">
                        <a class="dropdown-item" href="javascript:void(0);"
                          ><i class="bx bx-edit-alt me-1"></i> View Details</a
                        >
                        <a class="dropdown-item" href="javascript:void(0);"
                          ><i class="bx bx-trash me-1"></i> Buy Again</a
                        >
                      </div>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>
                    <div class="d-flex align-items-center">
                      <img
                        src="{{asset('/img/icons/products/note10.png')}}"
                        alt="Samsung"
                        height="32"
                        width="32"
                        class="me-2"
                      />
                      <div class="d-flex flex-column">
                        <span class="lh-1 fw-semibold">Note 10</span>
                        <small class="text-muted">Samsung</small>
                      </div>
                    </div>
                  </td>
                  <td>
                    <span class="badge bg-label-primary rounded-pill badge-center p-3 me-2"
                      ><i class="bx bx-mobile-alt bx-xs"></i
                    ></span>
                    Smart Phone
                  </td>
                  <td>
                    <div class="lh-1"><span class="text-primary fw-semibold">$149</span></div>
                    <small class="text-muted">Fully Paid</small>
                  </td>
                  <td><span class="badge bg-label-success">Completed</span></td>
                  <td>
                    <div class="dropdown">
                      <button
                        type="button"
                        class="btn dropdown-toggle hide-arrow p-0"
                        data-bs-toggle="dropdown"
                      >
                        <i class="bx bx-dots-vertical-rounded"></i>
                      </button>
                      <div class="dropdown-menu">
                        <a class="dropdown-item" href="javascript:void(0);"
                          ><i class="bx bx-edit-alt me-1"></i> View Details</a
                        >
                        <a class="dropdown-item" href="javascript:void(0);"
                          ><i class="bx bx-trash me-1"></i> Buy Again</a
                        >
                      </div>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>
                    <div class="d-flex align-items-center">
                      <img
                        src="{{asset('/img/icons/products/iphone.png')}}"
                        alt="Apple"
                        height="32"
                        width="32"
                        class="me-2"
                      />
                      <div class="d-flex flex-column">
                        <span class="lh-1 fw-semibold">iPhone 11 Pro</span>
                        <small class="text-muted">Apple</small>
                      </div>
                    </div>
                  </td>
                  <td>
                    <span class="badge bg-label-primary rounded-pill badge-center p-3 me-2"
                      ><i class="bx bx-mobile-alt bx-xs"></i
                    ></span>
                    Smart Phone
                  </td>
                  <td>
                    <div class="lh-1"><span class="text-primary fw-semibold">$399</span></div>
                    <small class="text-muted">Fully Paid</small>
                  </td>
                  <td><span class="badge bg-label-success">Completed</span></td>
                  <td>
                    <div class="dropdown">
                      <button
                        type="button"
                        class="btn dropdown-toggle hide-arrow p-0"
                        data-bs-toggle="dropdown"
                      >
                        <i class="bx bx-dots-vertical-rounded"></i>
                      </button>
                      <div class="dropdown-menu">
                        <a class="dropdown-item" href="javascript:void(0);"
                          ><i class="bx bx-edit-alt me-1"></i> View Details</a
                        >
                        <a class="dropdown-item" href="javascript:void(0);"
                          ><i class="bx bx-trash me-1"></i> Buy Again</a
                        >
                      </div>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>
                    <div class="d-flex align-items-center">
                      <img
                        src="{{asset('/img/icons/products/mi-tv.png')}}"
                        alt="Xiaomi"
                        height="32"
                        width="32"
                        class="me-2"
                      />
                      <div class="d-flex flex-column">
                        <span class="lh-1 fw-semibold">Mi LED TV 4X</span>
                        <small class="text-muted">Xiaomi</small>
                      </div>
                    </div>
                  </td>
                  <td>
                    <span class="badge bg-label-danger rounded-pill badge-center p-3 me-2"
                      ><i class="bx bx-tv bx-xs"></i
                    ></span>
                    Smart TV
                  </td>
                  <td>
                    <div class="lh-1 text-muted"><span class="text-primary fw-semibold">$349</span>/2499</div>
                    <small class="text-muted">Partially Paid</small>
                  </td>
                  <td><span class="badge bg-label-primary">Confirmed</span></td>
                  <td>
                    <div class="dropdown">
                      <button
                        type="button"
                        class="btn dropdown-toggle hide-arrow p-0"
                        data-bs-toggle="dropdown"
                      >
                        <i class="bx bx-dots-vertical-rounded"></i>
                      </button>
                      <div class="dropdown-menu">
                        <a class="dropdown-item" href="javascript:void(0);"
                          ><i class="bx bx-edit-alt me-1"></i> View Details</a
                        >
                        <a class="dropdown-item" href="javascript:void(0);"
                          ><i class="bx bx-trash me-1"></i> Buy Again</a
                        >
                      </div>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>
                    <div class="d-flex align-items-center">
                      <img
                        src="{{asset('/img/icons/products/logitech-mx.png')}}"
                        alt="Logitech"
                        height="32"
                        width="32"
                        class="me-2"
                      />
                      <div class="d-flex flex-column">
                        <span class="lh-1 fw-semibold">Logitech MX</span>
                        <small class="text-muted">Logitech</small>
                      </div>
                    </div>
                  </td>
                  <td>
                    <span class="badge bg-label-warning rounded-pill badge-center p-3 me-2"
                      ><i class="bx bx-mouse bx-xs"></i
                    ></span>
                    Mouse
                  </td>
                  <td>
                    <div class="lh-1"><span class="text-primary fw-semibold">$89</span></div>
                    <small class="text-muted">Fully Paid</small>
                  </td>
                  <td><span class="badge bg-label-primary">Completed</span></td>
                  <td>
                    <div class="dropdown">
                      <button
                        type="button"
                        class="btn dropdown-toggle hide-arrow p-0"
                        data-bs-toggle="dropdown"
                      >
                        <i class="bx bx-dots-vertical-rounded"></i>
                      </button>
                      <div class="dropdown-menu">
                        <a class="dropdown-item" href="javascript:void(0);"
                          ><i class="bx bx-edit-alt me-1"></i> View Details</a
                        >
                        <a class="dropdown-item" href="javascript:void(0);"
                          ><i class="bx bx-trash me-1"></i> Buy Again</a
                        >
                      </div>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>






</div>
    <!-- Project table -->
    {{-- <div class="card mb-4">
      <h5 class="card-header">User's Projects List</h5>
      <div class="table-responsive mb-3">
        <table class="table datatable-project border-top">
          <thead>
            <tr>
              <th>#</th>
              <th>Product</th>
              <th class="text-nowrap"> Price</th>
              <th>Proposals</th>
              <th>status</th>
            </tr>
          </thead>
          <tbody>
              @for($i=0;$i<10;$i++)
              <tr>
              <td>{{$i}}</td>
              <td>Product {{$i}}</td>
              <td>5$</td>
              <td>1{{$i}}</td>
              <td >
                <span class="badge bg-label-success mt-2">
                    active
                </span>
                </td>
              </tr>
              @endfor
          </tbody>
        </table>
      </div>
    </div> --}}
    <!-- /Project table -->

    <!-- Activity Timeline -->
    {{-- <div class="card mb-4">
      <h5 class="card-header">User Activity Timeline</h5>
      <div class="card-body">
        <ul class="timeline">
          <li class="timeline-item timeline-item-transparent">
            <span class="timeline-point timeline-point-primary"></span>
            <div class="timeline-event">
              <div class="timeline-header mb-1">
                <h6 class="mb-0">12 Invoices have been paid</h6>
                <small class="text-muted">12 min ago</small>
              </div>
              <p class="mb-2">Invoices have been paid to the company</p>
              <div class="d-flex">
                <a href="javascript:void(0)" class="me-3">
                  <img
                    src="{{asset('img/icons/misc/pdf.png')}}"
                    alt="PDF image"
                    width="15"
                    class="me-2"
                  />
                  <span class="text-body fw-bold">invoices.pdf</span>
                </a>
              </div>
            </div>
          </li>
          <li class="timeline-item timeline-item-transparent">
            <span class="timeline-point timeline-point-warning"></span>
            <div class="timeline-event">
              <div class="timeline-header mb-1">
                <h6 class="mb-0">Client Meeting</h6>
                <small class="text-muted">45 min ago</small>
              </div>
              <p class="mb-2">Project meeting with john @10:15am</p>
              <div class="d-flex flex-wrap">
                <div class="avatar me-3">
                  <img data-twic-src="{{asset('img/avatars/3.png')}}" alt="Avatar" class="rounded-circle" />
                </div>
                <div>
                  <h6 class="mb-0">Lester McCarthy (Client)</h6>
                  <span class="text-muted">CEO of ThemeSelection</span>
                </div>
              </div>
            </div>
          </li>
          <li class="timeline-item timeline-item-transparent">
            <span class="timeline-point timeline-point-info"></span>
            <div class="timeline-event">
              <div class="timeline-header mb-1">
                <h6 class="mb-0">Create a new project for client</h6>
                <small class="text-muted">2 Day Ago</small>
              </div>
              <p class="mb-2">5 team members in a project</p>
              <div class="avatar-group d-flex align-items-center">
                <div
                  class="avatar pull-up"
                  data-bs-toggle="tooltip"
                  data-popup="tooltip-custom"
                  data-bs-placement="top"
                  title="Vinnie Mostowy"
                >
                  <img src="{{asset('img/avatars/5.png')}}" alt="Avatar" class="rounded-circle" />
                </div>
                <div
                  class="avatar pull-up"
                  data-bs-toggle="tooltip"
                  data-popup="tooltip-custom"
                  data-bs-placement="top"
                  title="Marrie Patty"
                >
                  <img src="{{asset('img/avatars/12.png')}}" alt="Avatar" class="rounded-circle" />
                </div>
                <div
                  class="avatar pull-up"
                  data-bs-toggle="tooltip"
                  data-popup="tooltip-custom"
                  data-bs-placement="top"
                  title="Jimmy Jackson"
                >
                  <img src="{{asset('img/avatars/9.png')}}" alt="Avatar" class="rounded-circle" />
                </div>
                <div
                  class="avatar pull-up"
                  data-bs-toggle="tooltip"
                  data-popup="tooltip-custom"
                  data-bs-placement="top"
                  title="Kristine Gill"
                >
                  <img src="{{asset('img/avatars/6.png')}}" alt="Avatar" class="rounded-circle" />
                </div>
                <div
                  class="avatar pull-up"
                  data-bs-toggle="tooltip"
                  data-popup="tooltip-custom"
                  data-bs-placement="top"
                  title="Nelson Wilson"
                >
                  <img src="{{asset('img/avatars/14.png')}}" alt="Avatar" class="rounded-circle" />
                </div>
              </div>
            </div>
          </li>
          <li class="timeline-item timeline-item-transparent">
            <span class="timeline-point timeline-point-success"></span>
            <div class="timeline-event">
              <div class="timeline-header mb-1">
                <h6 class="mb-0">Design Review</h6>
                <small class="text-muted">5 days Ago</small>
              </div>
              <p class="mb-0">Weekly review of freshly prepared design for our new app.</p>
            </div>
          </li>
          <li class="timeline-end-indicator">
            <i class="bx bx-check-circle"></i>
          </li>
        </ul>
      </div>
    </div> --}}
    <!-- /Activity Timeline -->
@endsection
