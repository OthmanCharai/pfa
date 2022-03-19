@extends('influencers.profile.profile')
@section('afterCss')
    <!-- Core CSS -->
    <link rel="stylesheet" href="{{asset('vendor/css/rtl/core.css')}}" class="template-customizer-core-css" />
    <link rel="stylesheet" href="{{asset('vendor/css/rtl/theme-default.css')}}" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="{{asset('css/demo.css')}}" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="{{asset('vendor/libs/perfect-scrollbar/perfect-scrollbar.css')}}" />
    <link rel="stylesheet" href="{{asset('vendor/libs/typeahead-js/typeahead.css')}}" />
    <link rel="stylesheet" href="{{asset('vendor/libs/sweetalert2/sweetalert2.css')}}" />
    <link rel="stylesheet" href="{{asset('vendor/libs/select2/select2.css')}}" />
    <link rel="stylesheet" href="{{asset('vendor/libs/formvalidation/dist/css/formValidation.min.css')}}" />

    <!-- Page CSS -->

    <!-- Helpers -->
    <script src="{{asset('vendor/js/helpers.js')}}"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Template customizer: To hide customizer set displayCustomizer value false in config.js.  -->
    {{-- <script src="{{asset('vendor/js/template-customizer.js')}}"></script> --}}
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="{{asset('js/config.js')}}"></script>
@endsection
@section('coreJs')
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
    <script src="{{asset('vendor/libs/formvalidation/dist/js/FormValidation.min.js')}}"></script>
    <script src="{{asset('vendor/libs/formvalidation/dist/js/plugins/Bootstrap5.min.js')}}"></script>
    <script src="{{asset('vendor/libs/formvalidation/dist/js/plugins/AutoFocus.min.js')}}"></script>

    <!-- Main JS -->
    <script src="{{asset('js/main.js')}}"></script>

    <!-- Page JS -->
    <script src="{{asset('js/modal-edit-user.js')}}"></script>
    <script src="{{asset('js/modal-edit-cc.js')}}"></script>
    <script src="{{asset('js/modal-add-new-cc.js')}}"></script>
    <script src="{{asset('js/modal-add-new-address.js')}}"></script>
    <script src="{{asset('js/app-user-view.js')}}"></script>
    <script src="{{asset('js/app-user-view-billing.js')}}"></script>
@endsection
@section('profileContent')
                  <!-- Current Plan -->
                  <div class="card mb-4">
                    <h5 class="card-header">Current Plan</h5>
                    <div class="card-body">
                      <div class="row">
                        <div class="col-xl-6 order-1 order-xl-0">
                          <div class="mb-4">
                            <h6 class="mb-1">Your Current Plan is Basic</h6>
                            <p>A simple start for everyone</p>
                          </div>
                          <div class="mb-4">
                            <h6 class="mb-1">Active until Dec 09, 2021</h6>
                            <p>We will send you a notification upon Subscription expiration</p>
                          </div>
                          <div class="mb-4">
                            <h6 class="mb-1">
                              <span class="me-2">$199 Per Month</span>
                              <span class="badge bg-label-primary">Popular</span>
                            </h6>
                            <p>Standard plan for small to medium businesses</p>
                          </div>
                        </div>
                        <div class="col-xl-6 order-0 order-xl-0">
                          <div class="alert alert-warning mb-4" role="alert">
                            <h6 class="alert-heading fw-bold mb-1">We need your attention!</h6>
                            <span>Your plan requires update</span>
                          </div>
                          <div class="plan-statistics">
                            <div class="d-flex justify-content-between">
                              <h6 class="mb-2">Days</h6>
                              <h6 class="mb-2">24 of 30 Days</h6>
                            </div>
                            <div class="progress mb-1">
                              <div
                                class="progress-bar w-75"
                                role="progressbar"
                                aria-valuenow="75"
                                aria-valuemin="0"
                                aria-valuemax="100"
                              ></div>
                            </div>
                            <p>6 days remaining until your plan requires update</p>
                          </div>
                        </div>
                        <div class="col-12 order-2 order-xl-0">
                          <button
                            class="btn btn-primary my-2 me-2"
                            data-bs-toggle="modal"
                            data-bs-target="#upgradePlanModal"
                          >
                            Upgrade Plan
                          </button>
                          <button class="btn btn-label-danger cancel-subscription">Cancel Subscription</button>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- /Current Plan -->

                  <!-- Payment Methods -->
                  <div class="card card-action mb-4">
                    <div class="card-header align-items-center">
                      <h5 class="card-action-title mb-0">Payment Methods</h5>
                      <div class="card-action-element">
                        <button
                          class="btn btn-primary btn-sm"
                          type="button"
                          data-bs-toggle="modal"
                          data-bs-target="#addNewCCModal"
                        >
                          <i class="bx bx-plus bx-xs me-1"></i>Add Card
                        </button>
                      </div>
                    </div>
                    <div class="card-body">
                      <div class="added-cards">
                        <div class="cardMaster border rounded p-3 mb-3">
                          <div class="d-flex flex-column flex-sm-row justify-content-between">
                            <div class="card-information">
                              <img
                                class="img-fluid mb-3"
                                src="{{asset('/img/icons/payments/mastercard.png')}}"
                                alt="Master Card"
                              />
                              <h6 class="mb-1">Kaith Morrison</h6>
                              <span class="card-number"
                                >&#8727;&#8727;&#8727;&#8727; &#8727;&#8727;&#8727;&#8727; &#8727;&#8727;&#8727;&#8727;
                                9856</span
                              >
                            </div>
                            <div class="d-flex flex-column text-start text-lg-end">
                              <div class="d-flex order-1 order-sm-0">
                                <button
                                  class="btn btn-label-primary me-3"
                                  data-bs-toggle="modal"
                                  data-bs-target="#editCCModal"
                                >
                                  Edit
                                </button>
                                <button class="btn btn-label-secondary">Delete</button>
                              </div>
                              <small class="order-0 order-sm-1 mt-2 mt-sm-auto">Card expires at 12/26</small>
                            </div>
                          </div>
                        </div>
                        <div class="cardMaster border rounded p-3 mb-3">
                          <div class="d-flex flex-column flex-sm-row justify-content-between">
                            <div class="card-information">
                              <img
                                class="img-fluid mb-3"
                                src="{{asset('/img/icons/payments/visa.png')}}"
                                alt="Master Card"
                              />
                              <div class="d-flex align-items-center mb-1">
                                <h6 class="me-3 mb-0">Tom McBride</h6>
                                <span class="badge bg-label-primary me-1">Primary</span>
                              </div>
                              <span class="card-number"
                                >&#8727;&#8727;&#8727;&#8727; &#8727;&#8727;&#8727;&#8727; &#8727;&#8727;&#8727;&#8727;
                                6542</span
                              >
                            </div>
                            <div class="d-flex flex-column text-start text-lg-end">
                              <div class="d-flex order-1 order-sm-0">
                                <button
                                  class="btn btn-label-primary me-3"
                                  data-bs-toggle="modal"
                                  data-bs-target="#editCCModal"
                                >
                                  Edit
                                </button>
                                <button class="btn btn-label-secondary">Delete</button>
                              </div>
                              <small class="order-0 order-sm-1 mt-2 mt-sm-auto">Card expires at 10/24</small>
                            </div>
                          </div>
                        </div>
                        <div class="cardMaster border rounded p-3">
                          <div class="d-flex flex-column flex-sm-row justify-content-between">
                            <div class="card-information">
                              <img
                                class="img-fluid mb-3"
                                src="{{asset('/img/icons/payments/american-ex.png')}}"
                                alt="Visa Card"
                              />
                              <h6 class="mb-1">Mildred Wagner</h6>
                              <span class="card-number"
                                >&#8727;&#8727;&#8727;&#8727; &#8727;&#8727;&#8727;&#8727; &#8727;&#8727;&#8727;&#8727;
                                5896</span
                              >
                            </div>
                            <div class="d-flex flex-column text-start text-lg-end">
                              <div class="d-flex order-1 order-sm-0">
                                <button
                                  class="btn btn-label-primary me-3"
                                  data-bs-toggle="modal"
                                  data-bs-target="#editCCModal"
                                >
                                  Edit
                                </button>
                                <button class="btn btn-label-secondary">Delete</button>
                              </div>
                              <small class="order-0 order-sm-1 mt-2 mt-sm-auto">Card expires at 10/27</small>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!--/ Payment Methods -->

                  <!-- Billing Address -->
                  <div class="card card-action mb-4">
                    <div class="card-header align-items-center">
                      <h5 class="card-action-title mb-0">Billing Address</h5>
                      <div class="card-action-element">
                        <button
                          class="btn btn-primary btn-sm edit-address"
                          type="button"
                          data-bs-toggle="modal"
                          data-bs-target="#addNewAddress"
                        >
                          Edit address
                        </button>
                      </div>
                    </div>
                    <div class="card-body">
                      <div class="row">
                        <div class="col-12 col-xl-7">
                          <dl class="row mb-0">
                            <dt class="col-sm-4 fw-semibold mb-3">Company Name:</dt>
                            <dd class="col-sm-8">Sneat</dd>

                            <dt class="col-sm-4 fw-semibold mb-3">Billing Email:</dt>
                            <dd class="col-sm-8">user@ex.com</dd>

                            <dt class="col-sm-4 fw-semibold mb-3">Tax ID:</dt>
                            <dd class="col-sm-8">TAX-357378</dd>

                            <dt class="col-sm-4 fw-semibold mb-3">VAT Number:</dt>
                            <dd class="col-sm-8">SDF754K77</dd>

                            <dt class="col-sm-4 fw-semibold mb-3">Billing Address:</dt>
                            <dd class="col-sm-8">
                              100 Water Plant <br />Avenue, Building 1303<br />
                              Wake Island
                            </dd>
                          </dl>
                        </div>
                        <div class="col-12 col-xl-5">
                          <dl class="row mb-0">
                            <dt class="col-sm-4 fw-semibold mb-3">Contact:</dt>
                            <dd class="col-sm-8">+1 (605) 977-32-65</dd>

                            <dt class="col-sm-4 fw-semibold mb-3">Country:</dt>
                            <dd class="col-sm-8">Wake Island</dd>

                            <dt class="col-sm-4 fw-semibold mb-3">State:</dt>
                            <dd class="col-sm-8">Capholim</dd>

                            <dt class="col-sm-4 fw-semibold mb-3">Zipcode:</dt>
                            <dd class="col-sm-8">403114</dd>
                          </dl>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!--/ Billing Address -->
@endsection
@section('modal')
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
                      <form id="addNewCCForm" class="row g-3" onsubmit="return false">
                        <div class="col-12">
                          <label class="form-label w-100" for="modalAddCard">Card Number</label>
                          <div class="input-group input-group-merge">
                            <input
                              id="modalAddCard"
                              name="modalAddCard"
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
                          <input type="text" id="modalAddCardName" class="form-control" placeholder="John Doe" />
                        </div>
                        <div class="col-6 col-md-3">
                          <label class="form-label" for="modalAddCardExpiryDate">Exp. Date</label>
                          <input
                            type="text"
                            id="modalAddCardExpiryDate"
                            class="form-control expiry-date-mask"
                            placeholder="MM/YY"
                          />
                        </div>
                        <div class="col-6 col-md-3">
                          <label class="form-label" for="modalAddCardCvv">CVV Code</label>
                          <div class="input-group input-group-merge">
                            <input
                              type="text"
                              id="modalAddCardCvv"
                              class="form-control cvv-code-mask"
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
                        <div class="col-12">
                          <label class="switch">
                            <input type="checkbox" class="switch-input" />
                            <span class="switch-toggle-slider">
                              <span class="switch-on"></span>
                              <span class="switch-off"></span>
                            </span>
                            <span class="switch-label">Save card for future billing?</span>
                          </label>
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
              <!-- upgrade plan modal -->
              <div class="modal fade" id="upgradePlanModal" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-simple modal-upgrade-plan">
                  <div class="modal-content p-3 p-md-5">
                    <div class="modal-body">
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      <div class="text-center mb-4">
                        <h3>Upgrade Plan</h3>
                        <p>Choose the best plan for user.</p>
                      </div>
                      <form id="upgradePlanForm" class="row g-3" onsubmit="return false">
                        <div class="col-sm-9">
                          <label class="form-label" for="choosePlan">Choose Plan</label>
                          <select id="choosePlan" name="choosePlan" class="form-select" aria-label="Choose Plan">
                            <option selected>Choose Plan</option>
                            <option value="standard">Standard - $99/month</option>
                            <option value="exclusive">Exclusive - $249/month</option>
                            <option value="Enterprise">Enterprise - $499/month</option>
                          </select>
                        </div>
                        <div class="d-flex col-sm-3 align-items-end">
                          <button type="submit" class="btn btn-primary">Upgrade</button>
                        </div>
                      </form>
                    </div>
                    <hr class="mx-md-n5 mx-n3" />
                    <div class="modal-body">
                      <h6 class="mb-0">User current plan is standard plan</h6>
                      <div class="d-flex flex-wrap justify-content-between align-items-center">
                        <div class="d-flex justify-content-center mt-3 me-2">
                          <sup class="h5 pricing-currency text-primary pt-1 mt-3 me-1 mb-0">$</sup>
                          <h1 class="display-3 text-primary mb-0">99</h1>
                          <sub class="h5 pricing-duration mt-auto mb-2">/month</sub>
                        </div>
                        <button class="btn btn-label-danger cancel-subscription mt-3">Cancel Subscription</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!--/ Add New Credit Card Modal -->
              <!-- Add New Address Modal -->
              <div class="modal fade" id="addNewAddress" tabindex="-1" aria-hidden="true">
                                <div class="modal-dialog modal-lg modal-simple modal-add-new-address">
                                  <div class="modal-content p-3 p-md-5">
                                    <div class="modal-body">
                                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                      <div class="text-center mb-4">
                                        <h3 class="address-title">Add New Address</h3>
                                        <p class="address-subtitle">Add new address for express delivery</p>
                                      </div>
                                      <form id="addNewAddressForm" class="row g-3" onsubmit="return false">
                                        <div class="col-12">
                                          <div class="row">
                                            <div class="col-md mb-3 mb-md-0">
                                              <div class="form-check custom-option custom-option-icon">
                                                <label class="form-check-label custom-option-content" for="customRadioHome">
                                                  <span class="custom-option-body">
                                                    <i class="bx bx-home"></i>
                                                    <span class="custom-option-title">Home</span>
                                                    <small> Delivery time (9am – 9pm) </small>
                                                  </span>
                                                  <input
                                                    name="customRadioIcon"
                                                    class="form-check-input"
                                                    type="radio"
                                                    value=""
                                                    id="customRadioHome"
                                                    checked
                                                  />
                                                </label>
                                              </div>
                                            </div>
                                            <div class="col-md mb-3 mb-md-0">
                                              <div class="form-check custom-option custom-option-icon">
                                                <label class="form-check-label custom-option-content" for="customRadioOffice">
                                                  <span class="custom-option-body">
                                                    <i class="bx bx-briefcase"></i>
                                                    <span class="custom-option-title"> Office </span>
                                                    <small> Delivery time (9am – 5pm) </small>
                                                  </span>
                                                  <input
                                                    name="customRadioIcon"
                                                    class="form-check-input"
                                                    type="radio"
                                                    value=""
                                                    id="customRadioOffice"
                                                  />
                                                </label>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="col-12 col-md-6">
                                          <label class="form-label" for="modalAddressFirstName">First Name</label>
                                          <input
                                            type="text"
                                            id="modalAddressFirstName"
                                            name="modalAddressFirstName"
                                            class="form-control"
                                            placeholder="John"
                                          />
                                        </div>
                                        <div class="col-12 col-md-6">
                                          <label class="form-label" for="modalAddressLastName">Last Name</label>
                                          <input
                                            type="text"
                                            id="modalAddressLastName"
                                            name="modalAddressLastName"
                                            class="form-control"
                                            placeholder="Doe"
                                          />
                                        </div>
                                        <div class="col-12">
                                          <label class="form-label" for="modalAddressCountry">Country</label>
                                          <select
                                            id="modalAddressCountry"
                                            name="modalAddressCountry"
                                            class="select2 form-select"
                                            data-allow-clear="true"
                                          >
                                            <option value="">Select</option>
                                            <option value="Australia">Australia</option>
                                            <option value="Bangladesh">Bangladesh</option>
                                            <option value="Belarus">Belarus</option>
                                            <option value="Brazil">Brazil</option>
                                            <option value="Canada">Canada</option>
                                            <option value="China">China</option>
                                            <option value="France">France</option>
                                            <option value="Germany">Germany</option>
                                            <option value="India">India</option>
                                            <option value="Indonesia">Indonesia</option>
                                            <option value="Israel">Israel</option>
                                            <option value="Italy">Italy</option>
                                            <option value="Japan">Japan</option>
                                            <option value="Korea">Korea, Republic of</option>
                                            <option value="Mexico">Mexico</option>
                                            <option value="Philippines">Philippines</option>
                                            <option value="Russia">Russian Federation</option>
                                            <option value="South Africa">South Africa</option>
                                            <option value="Thailand">Thailand</option>
                                            <option value="Turkey">Turkey</option>
                                            <option value="Ukraine">Ukraine</option>
                                            <option value="United Arab Emirates">United Arab Emirates</option>
                                            <option value="United Kingdom">United Kingdom</option>
                                            <option value="United States">United States</option>
                                          </select>
                                        </div>
                                        <div class="col-12">
                                          <label class="form-label" for="modalAddressAddress1">Address Line 1</label>
                                          <input
                                            type="text"
                                            id="modalAddressAddress1"
                                            name="modalAddressAddress1"
                                            class="form-control"
                                            placeholder="12, Business Park"
                                          />
                                        </div>
                                        <div class="col-12">
                                          <label class="form-label" for="modalAddressAddress2">Address Line 2</label>
                                          <input
                                            type="text"
                                            id="modalAddressAddress2"
                                            name="modalAddressAddress2"
                                            class="form-control"
                                            placeholder="Mall Road"
                                          />
                                        </div>
                                        <div class="col-12 col-md-6">
                                          <label class="form-label" for="modalAddressLandmark">Landmark</label>
                                          <input
                                            type="text"
                                            id="modalAddressLandmark"
                                            name="modalAddressLandmark"
                                            class="form-control"
                                            placeholder="Nr. Hard Rock Cafe"
                                          />
                                        </div>
                                        <div class="col-12 col-md-6">
                                          <label class="form-label" for="modalAddressCity">City</label>
                                          <input
                                            type="text"
                                            id="modalAddressCity"
                                            name="modalAddressCity"
                                            class="form-control"
                                            placeholder="Los Angeles"
                                          />
                                        </div>
                                        <div class="col-12 col-md-6">
                                          <label class="form-label" for="modalAddressLandmark">State</label>
                                          <input
                                            type="text"
                                            id="modalAddressState"
                                            name="modalAddressState"
                                            class="form-control"
                                            placeholder="California"
                                          />
                                        </div>
                                        <div class="col-12 col-md-6">
                                          <label class="form-label" for="modalAddressZipCode">Zip Code</label>
                                          <input
                                            type="text"
                                            id="modalAddressZipCode"
                                            name="modalAddressZipCode"
                                            class="form-control"
                                            placeholder="99950"
                                          />
                                        </div>
                                        <div class="col-12">
                                          <label class="switch">
                                            <input type="checkbox" class="switch-input" />
                                            <span class="switch-toggle-slider">
                                              <span class="switch-on"></span>
                                              <span class="switch-off"></span>
                                            </span>
                                            <span class="switch-label">Use as a billing address?</span>
                                          </label>
                                        </div>
                                        <div class="col-12 text-center">
                                          <button type="submit" class="btn btn-primary me-1 me-sm-3">Submit</button>
                                          <button
                                            type="reset"
                                            class="btn btn-label-secondary"
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
                              <!--/ Add New Address Modal -->
              <!-- Add New Credit Card Modal -->
              <div class="modal fade" id="editCCModal" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-simple modal-add-new-cc">
                  <div class="modal-content p-3 p-md-5">
                    <div class="modal-body">
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      <div class="text-center mb-4">
                        <h3>Edit Card</h3>
                        <p>Edit your saved card details</p>
                      </div>
                      <form id="editCCForm" class="row g-3" onsubmit="return false">
                        <div class="col-12">
                          <label class="form-label w-100" for="modalEditCard">Card Number</label>
                          <div class="input-group input-group-merge">
                            <input
                              id="modalEditCard"
                              name="modalEditCard"
                              class="form-control credit-card-mask-edit"
                              type="text"
                              placeholder="4356 3215 6548 7898"
                              value="4356 3215 6548 7898"
                              aria-describedby="modalEditCard2"
                            />
                            <span class="input-group-text p-1 cursor-pointer" id="modalEditCard2"
                              ><span class="card-type-edit"></span
                            ></span>
                          </div>
                        </div>
                        <div class="col-12 col-md-6">
                          <label class="form-label" for="modalEditName">Name</label>
                          <input
                            type="text"
                            id="modalEditName"
                            class="form-control"
                            placeholder="John Doe"
                            value="John Doe"
                          />
                        </div>
                        <div class="col-6 col-md-3">
                          <label class="form-label" for="modalEditExpiryDate">Exp. Date</label>
                          <input
                            type="text"
                            id="modalEditExpiryDate"
                            class="form-control expiry-date-mask-edit"
                            placeholder="MM/YY"
                            value="08/28"
                          />
                        </div>
                        <div class="col-6 col-md-3">
                          <label class="form-label" for="modalEditCvv">CVV Code</label>
                          <div class="input-group input-group-merge">
                            <input
                              type="text"
                              id="modalEditCvv"
                              class="form-control cvv-code-mask-edit"
                              maxlength="3"
                              placeholder="654"
                              value="XXX"
                            />
                            <span class="input-group-text cursor-pointer" id="modalEditCvv2"
                              ><i
                                class="bx bx-help-circle text-muted"
                                data-bs-toggle="tooltip"
                                data-bs-placement="top"
                                title="Card Verification Value"
                              ></i
                            ></span>
                          </div>
                        </div>
                        <div class="col-12">
                          <label class="switch">
                            <input type="checkbox" class="switch-input" />
                            <span class="switch-toggle-slider">
                              <span class="switch-on"></span>
                              <span class="switch-off"></span>
                            </span>
                            <span class="switch-label">Set as primary card</span>
                          </label>
                        </div>
                        <div class="col-12 text-center">
                          <button type="submit" class="btn btn-primary mt-3 me-1 me-sm-3">Submit</button>
                          <button
                            type="reset"
                            class="btn btn-label-secondary mt-3"
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
