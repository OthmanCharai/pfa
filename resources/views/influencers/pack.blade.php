@extends('influencers.layouts.simple')
@section('afterCss')
    <!-- Core CSS -->
    <link rel="stylesheet" href="{{asset('vendor/css/rtl/core.css')}}" class="template-customizer-core-css" />
    <link rel="stylesheet" href="{{asset('vendor/css/rtl/theme-default.css')}}" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="{{asset('css/demo.css')}}" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="{{asset('vendor/libs/perfect-scrollbar/perfect-scrollbar.css')}}" />
    <link rel="stylesheet" href="{{asset('vendor/libs/typeahead-js/typeahead.css')}}" />

    <!-- Page CSS -->
    {{-- <link rel="stylesheet" href="{{asset('vendor/css/pages/page-pricing.css')}}" /> --}}
    <!-- Helpers -->
    <script src="{{asset('vendor/js/helpers.js')}}"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Template customizer: To hide customizer set displayCustomizer value false in config.js.  -->
    {{-- <script src="{{asset('vendor/js/template-customizer.js')}}"></script> --}}
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="{{asset('js/config.js')}}"></script>
@endsection
@section('coreJs')
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
    {{-- <script src="{{asset('/js/pages-pricing.js')}}"></script> --}}
    <script src="{{asset('js/modal-add-new-cc.js')}}"></script>

@endsection
@section('content')
    <!-- Pricing Plans -->
    <div class="pricing-plans rounded-top pb-2 pb-sm-5">
        <div class="container py-5">
          <h1 class="text-center mb-4">Find the right plan for your site</h1>
          <p class="text-center pb-3">
            Get started with us - it's perfect for individuals and teams. Choose a subscription plan that
            meets your needs.
        </p>
        <div class="text-center mb-3">
            <button
            class="btn btn-primary btn-sm"
            type="button"
            data-bs-toggle="modal"
            data-bs-target="#addNewCCModal"
          >
            <i class="bx bx-plus bx-xs me-1"></i>Add Card
          </button>
        </div>
                {{-- error session --}}
            @if(session()->has('card'))
                <div class="alert alert-danger text-center mb-3">
                    {{session()->get('card')}}
                </div>
            @endif


          <div class="row gy-3 mx-0">
            <!-- Starter -->
            <div class="col-lg mb-4 mb-md-0">
              <div class="card">
                <div class="card-body">
                  <h3 class="card-title text-center fw-bold text-uppercase mt-3">BASIC</h3>
                  <div class="text-center py-2 my-4">
                    <img src="{{asset('img/icons/unicons/bookmark.png')}}" alt="Starter Image" height="80" />
                  </div>

                  <div class="text-center mb-4">
                    <div class="d-flex justify-content-center mb-2">
                      <sup class="h5 pricing-currency mt-3 me-1 mb-0">$</sup>
                      <h1 class="h1 fw-bold mb-0">0</h1>
                      <sub class="h5 pricing-duration mt-auto mb-2">/month</sub>
                    </div>
                    <small class="price-yearly price-yearly-toggle text-muted">Free</small>
                  </div>

                  <ul class="list-unstyled pt-4 pb-2 ps-3">
                    <li class="mb-2">
                      <span class="badge badge-center w-px-20 h-px-20 rounded-pill bg-label-primary me-2"
                        ><i class="bx bx-check bx-xs"></i
                      ></span>
                      Rich landing pages
                    </li>
                    <li class="mb-2">
                      <span class="badge badge-center w-px-20 h-px-20 rounded-pill bg-label-primary me-2"
                        ><i class="bx bx-check bx-xs"></i
                      ></span>
                      100 proposals
                    </li>
                    <li class="mb-2">
                      <span class="badge badge-center w-px-20 h-px-20 rounded-pill bg-label-primary me-2"
                        ><i class="bx bx-check bx-xs"></i
                      ></span>
                      Basic support
                    </li>
                  </ul>
                  <form action="{{route('storePlan')}}" method="POST">
                      @csrf
                      <input type="hidden" name="proposals" value="100">
                      <input type="hidden" name="plan" value="free">
                      <input type="hidden" name="prix" value="0">
                      <input type="hidden" name="payement_date" value="{{now()->format('Y-m-d')}}">
                      <button  class="btn btn-label-primary d-grid w-100"
                      >Get started for free</button>
                    </form>

                </div>
              </div>
            </div>

            <!-- Exclusive -->
            <div class="col-lg mb-4 mb-md-0">
              <div class="card border-primary border">
                <div class="card-body">
                  <div class="pricing-exclusive">
                    <span class="badge bg-label-primary">Exclusive</span>
                  </div>
                  <h3 class="card-title text-center fw-bold text-uppercase mt-3">Standard</h3>
                  <div class="text-center py-2 my-4">
                    <img src="{{asset('img/icons/unicons/wallet-round.png')}}" alt="Standard Image" height="80" />
                  </div>
                  <div class="text-center mb-4">
                    <div class="d-flex justify-content-center mb-2">
                      <sup class="h5 pricing-currency mt-3 me-1 mb-0">$</sup>
                      <h1 class="price-toggle price-yearly h1 fw-bold mb-0">42</h1>
                      <h1 class="price-toggle price-monthly h1 d-none fw-bold mb-0">49</h1>
                      <sub class="h5 pricing-duration mt-auto mb-2">/month</sub>
                    </div>
                    <small class="price-yearly price-yearly-toggle text-muted">$ 499 / year</small>
                  </div>

                  <ul class="list-unstyled pt-4 pb-2 ps-3">

                    <li class="mb-2">
                      <span class="badge badge-center w-px-20 h-px-20 rounded-pill bg-label-primary me-2"
                        ><i class="bx bx-check bx-xs"></i
                      ></span>
                      500 proposals
                    </li>
                    <li class="mb-2">
                      <span class="badge badge-center w-px-20 h-px-20 rounded-pill bg-label-primary me-2"
                        ><i class="bx bx-check bx-xs"></i
                      ></span>
                      Basic support
                    </li>
                    <li class="mb-2">
                      <span class="badge badge-center w-px-20 h-px-20 rounded-pill bg-label-primary me-2"
                        ><i class="bx bx-check bx-xs"></i
                      ></span>
                      Monthly updates
                    </li>
                    <li class="mb-2">
                      <span class="badge badge-center w-px-20 h-px-20 rounded-pill bg-label-primary me-2"
                        ><i class="bx bx-check bx-xs"></i
                      ></span>
                      Integrations
                    </li>
                  </ul>

                  <form action="{{route('storePlan')}}" method="POST">
                    @csrf
                    <input type="hidden" name="proposals" value="500">
                    <input type="hidden" name="plan" value="standard">
                    <input type="hidden" name="prix" value="42">
                    <input type="hidden" name="payement_date" value="{{now()->format('Y-m-d')}}">
                    <button  class="btn btn-label-primary d-grid w-100"
                    >Get started for free</button>
                  </form>
                </div>
              </div>
            </div>

            <!-- Enterprise -->
            <div class="col-lg">
              <div class="card">
                <div class="card-body">
                  <h3 class="card-title text-center fw-bold text-uppercase mt-3">Premium</h3>

                  <div class="text-center py-2 my-4">
                    <img
                      src="{{asset('img/icons/unicons/briefcase-round.png')}}"
                      alt="Pro Image"
                      height="80"
                    />
                  </div>

                  <div class="text-center mb-4">
                    <div class="d-flex justify-content-center mb-2">
                      <sup class="h5 pricing-currency mt-3 me-1 mb-0">$</sup>
                      <h1 class="price-toggle price-yearly h1 fw-bold mb-0">84</h1>
                      <h1 class="price-toggle price-monthly h1 d-none fw-bold mb-0">99</h1>
                      <sub class="h5 pricing-duration mt-auto mb-2">/month</sub>
                    </div>
                    <small class="price-yearly price-yearly-toggle text-muted">$ 999 / year</small>
                  </div>

                  <ul class="list-unstyled pt-4 pb-2 ps-3">

                    <li class="mb-2">
                      <span class="badge badge-center w-px-20 h-px-20 rounded-pill bg-label-primary me-2"
                        ><i class="bx bx-check bx-xs"></i
                      ></span>
                      1000 proposals
                    </li>
                    <li class="mb-2">
                      <span class="badge badge-center w-px-20 h-px-20 rounded-pill bg-label-primary me-2"
                        ><i class="bx bx-check bx-xs"></i
                      ></span>
                      Basic support
                    </li>
                    <li class="mb-2">
                      <span class="badge badge-center w-px-20 h-px-20 rounded-pill bg-label-primary me-2"
                        ><i class="bx bx-check bx-xs"></i
                      ></span>
                      Monthly updates
                    </li>
                    <li class="mb-2">
                      <span class="badge badge-center w-px-20 h-px-20 rounded-pill bg-label-primary me-2"
                        ><i class="bx bx-check bx-xs"></i
                      ></span>
                      Integrations
                    </li>
                    <li class="mb-2">
                      <span class="badge badge-center w-px-20 h-px-20 rounded-pill bg-label-primary me-2"
                        ><i class="bx bx-check bx-xs"></i
                      ></span>
                      Product Support
                    </li>
                    <li class="mb-2">
                      <span class="badge badge-center w-px-20 h-px-20 rounded-pill bg-label-primary me-2"
                        ><i class="bx bx-check bx-xs"></i
                      ></span>
                      API access
                    </li>
                    <li class="mb-2">
                      <span class="badge badge-center w-px-20 h-px-20 rounded-pill bg-label-primary me-2"
                        ><i class="bx bx-check bx-xs"></i
                      ></span>
                      Speedy build tooling
                    </li>
                  </ul>
                  <form action="{{route('storePlan')}}" method="POST">
                    @csrf
                    <input type="hidden" name="proposals" value="1000">
                    <input type="hidden" name="plan" value="premium">
                    <input type="hidden" name="prix" value="84">
                    <input type="hidden" name="payement_date" value="{{now()->format('Y-m-d')}}">
                    <button  class="btn btn-label-primary d-grid w-100"
                    >Get started</button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--/ Pricing Plans -->
      <!-- Add New Credit Card Modal -->
      <div class="modal fade" id="addNewCCModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered1 modal-simple modal-add-new-cc">
          <div class="modal-content p-3 p-md-5">
            <div class="modal-body">
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              <div class="text-center mb-4">
                <h3>Add New Card</h3>
                <p>Add new card to complete payment</p>
              </div>
              <form action="{{route('storeCard')}}" id="addNewCCForm" class="row g-3" method="POST">
                @csrf
                <div class="col-12">
                  <label class="form-label w-100" for="modalAddCard">Card Number</label>
                  <div class="input-group input-group-merge">
                    <input
                      id="modalAddCard"
                      name="card_number"
                      class="form-control credit-card-mask"
                      type="text"
                      placeholder="1356 3215 6548 7898"
                      aria-describedby="modalAddCard2"
                    />
                    <span class="input-group-text p-1 cursor-pointer" id="modalAddCard2"
                      ><span class="card-type"></span
                    ></span>
                  </div>
                </div>
                <div class="col-12 col-md-6">
                  <label class="form-label" for="modalAddCardName">Name</label>
                  <input type="text" id="modalAddCardName" class="form-control" name="name" placeholder="John Doe" />
                </div>
                <div class="col-6 col-md-3">
                  <label class="form-label" for="modalAddCardExpiryDate">Exp. Date</label>
                  <input
                    type="text"
                    id="modalAddCardExpiryDate"
                    class="form-control expiry-date-mask"
                    placeholder="MM/YY"
                    name="exp_date"
                  />
                </div>
                <div class="col-6 col-md-3">
                  <label class="form-label" for="modalAddCardCvv">CVV Code</label>
                  <div class="input-group input-group-merge">
                    <input
                      type="text"
                      id="modalAddCardCvv"
                      class="form-control cvv-code-mask"
                      name="cvv"
                      maxlength="3"
                      placeholder="654"
                    />
                    <span class="input-group-text cursor-pointer" id="modalAddCardCvv2"
                      ><i
                        class="bx bx-help-circle text-muted"
                        data-bs-toggle="tooltip"
                        data-bs-placement="top"
                        title="Card Verification Value"
                      ></i
                    ></span>
                  </div>
                </div>

                <div class="col-12 text-center">
                  <button type="submit" class="btn btn-primary mt-3 me-1 me-sm-3">Submit</button>
                  <button
                    type="reset"
                    class="btn btn-label-secondary btn-reset mt-3"
                    data-bs-dismiss="modal"
                    aria-label="Close"
                  >
                    Cancel
                  </button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!--/ Add New Credit Card Modal -->
@endsection
