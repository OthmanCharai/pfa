@extends('entreprises.profile.profile')
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
    <script src="{{asset('vendor/libs/formvalidation/dist/js/FormValidation.min.js')}}"></script>
    <script src="{{asset('vendor/libs/formvalidation/dist/js/plugins/Bootstrap5.min.js')}}"></script>
    <script src="{{asset('vendor/libs/formvalidation/dist/js/plugins/AutoFocus.min.js')}}"></script>

    <!-- Main JS -->
    <script src="{{asset('js/main.js')}}"></script>

    <!-- Page JS -->
    <script src="{{asset('js/modal-edit-user.js')}}"></script>
    <script src="{{asset('js/app-user-view.js')}}"></script>
    {{-- <script src="{{asset('js/app-user-view-account.js')}}"></script> --}}
@endsection
@section('profileContent')
    <!-- Project table -->
    <div class="card mb-4">
        <h5 class="card-header">
            <button type="button" class="btn btn-success me-2" data-bs-toggle="modal" data-bs-target="#addProduct">Add Product</button>
        </h5>
      <h5 class="card-header">User's Projects List</h5>
      <div class="table-responsive mb-3">
        <table class="table datatable-project border-top">
          <thead>
            <tr>
              <th></th>
              <th>Product</th>
              <th class="text-nowrap">Category</th>
              <th>Price/Price Of publishing</th>
              <th>Link</th>
              <th>Actions</th>
            </tr>
          </thead>
          <tbody class="table-border-bottom-0">
            @foreach($products as $product)
              <tr>
                <td>
                  {{$product->id}}
                </td>
                <td>
                  <div class="d-flex align-items-center">
                    <img
                      src="{{asset("storage/".$product->image)}}"
                      alt=""
                      height="32"
                      width="32"
                      class="me-2"
                    />
                    <div class="d-flex flex-column">
                      <span class="lh-1 fw-semibold">{{$product->name}}</span>
                    </div>
                  </div>
                </td>
                <td>{{$product->category->name}}</td>
                <td>{{$product->price}}/{{$product->publishing_price}}</td>
                <td>{{$product->link}}</td>
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
                      <a class="dropdown-item" style="padding: 0.25rem 1.5rem;" href=""
                        ><i class='bx bxs-show' ></i>ViewDetails </a
                      >
                      <button class="dropdown-item" style="padding: 0.25rem 1.5rem;"  data-bs-toggle="modal" data-bs-target="#editProduct{{$product->id}}"
                      ><i class="bx bx-edit-alt me-1"></i>Edit</button>
                        <button class="dropdown-item" data-bs-toggle="modal" data-bs-target="#deleteProduct{{$product->id}}" style="padding: 0.25rem 1.5rem;"
                          ><i class="bx bx-trash me-1"></i>Delete </
                        >
                    </div>
                  </div>
                </td>

              </tr>



              <!-- delete Chapter modal -->
              <div class="modal fade" id="deleteProduct{{$product->id}}" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog  modal-simple ">
                  <div class="modal-content p-3 p-md-5">
                    <div class="modal-body">
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

                      <div class="text-center mb-4">
                        <h3>delete Product</h3>
                      </div>
                      <div class="swal2-icon swal2-error swal2-icon-show" style="display: flex;"><span class="swal2-x-mark">
                          <span class="swal2-x-mark-line-left"></span>
                          <span class="swal2-x-mark-line-right"></span>
                        </span>
                      </div>
                      <div class="text-center mb-4">
                        <h3>Are you sure you would like to delete this?</h3>
                      </div>
                    <form action="{{route('entreprises.profile.products.destroy',['product'=>$product->id])}}" method="POST">
                      @csrf
                      @method('DELETE')
                        <div class="col-12 text-center">
                          <button type="submit" class="btn btn-primary me-1 me-sm-3">Save</button>
                          <button type="reset" class="btn btn-label-secondary" data-bs-dismiss="modal" aria-label="Close">
                            Cancel
                          </button>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
              <!-- end Delete product modal -->
        <!-- edit quizz modal -->
        <div class="modal fade" id="editProduct{{$product->id}}" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog  modal-lg modal-simple ">
              <div class="modal-content row p-3 p-md-5">
                <div class="modal-body">
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

                  <div class="text-center mb-4">
                    <h3>Edit Product</h3>
                  </div>
                  <form id="editUserForm" class="row g-3" action="{{route('entreprises.profile.products.update',['product'=>$product->id])}}" method="POST"  enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="col-12 col-md-6">
                        <label class="form-label" for="modalEditUserName">Product Name</label>
                        <input
                          type="text"
                          id="modalEditUserName"
                          name="name"
                          class="form-control"
                          placeholder=""
                          value="{{old('name',isset( $product->name) ?  $product->name :'') ?? NULL}}"
                        />
                    </div>

                    <div class="col-12 col-md-6">
                        <label class="form-label" for="image">Image</label>
                        <input type="file" name="image" id="image" class="form-control" />

                    </div>
                    <div class="col-12">
                        <label class="form-label" >Desctiption</label>
                        <textarea
                          name="description"
                          class="form-control"
                          placeholder=""

                        >{{$product->description}}</textarea>
                      </div>
                      <div class="col-12 col-md-6">
                        <label class="form-label" >Category</label>
                        <select
                          name="category_id"
                          class="select2 form-select"
                        >
                          <option value="">Select</option>
                          <option value="{{$product->category->id}}" selected>{{$product->category->name}}</option>
                          @foreach ($categories as $category)
                            @if($category->id!=$product->category->id)
                                <option value="{{$category->id}}">{{$category->name}}</option>
                            @endif

                          @endforeach
                        </select>
                      </div>
                      <div class="col-12 col-md-6">
                        <label class="form-label" >Link</label>
                        <input
                          type="text"
                          name="link"
                          class="form-control"
                          placeholder=""
                          value="{{old('description',isset( $product->description) ?  $product->link :'') ?? NULL}}"
                        />
                    </div>
                      <div class="col-12 col-md-6">
                        <label class="form-label" >Price</label>
                        <input
                          type="text"
                          name="price"
                          class="form-control"
                          placeholder=""
                          value="{{old('price',isset( $product->price) ?  $product->price :'') ?? NULL}}"
                        />
                    </div>
                    <div class="col-12 col-md-6">
                        <label class="form-label" >Publishing Price</label>
                        <input
                          type="text"
                          name="publishing_price"
                          class="form-control"
                          placeholder=""
                          value="{{old('publishing_price',isset( $product->publishing_price) ?  $product->publishing_price :'') ?? NULL}}"
                        />
                    </div>
                    <div class="col-12 text-center mt-3">
                      <button type="submit" class="btn btn-primary me-1 me-sm-3">Save</button>
                      <button type="reset" class="btn btn-label-secondary" data-bs-dismiss="modal" aria-label="Close">
                        Cancel
                      </button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
          {{-- end edit --}}

          @endforeach



        </tbody>
        </table>
      </div>
    </div>
    <!-- /Project table -->


        <!-- add quizz modal -->
        <div class="modal fade" id="addProduct" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog  modal-lg modal-simple ">
              <div class="modal-content p-3 p-md-5">
                <div class="modal-body">
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

                  <div class="text-center mb-4">
                    <h3>Add Product</h3>
                  </div>
                  <form id="editUserForm" class="row g-3" action="{{route('entreprises.profile.products.store')}}" method="POST"  enctype="multipart/form-data">
                    @csrf
                    <div class="col-12 col-md-6">
                        <label class="form-label" for="modalEditUserName">Product Name</label>
                        <input
                          type="text"
                          id="modalEditUserName"
                          name="name"
                          class="form-control"
                          placeholder=""
                          value=""
                        />
                    </div>

                    <div class="col-12 col-md-6">
                        <label class="form-label" for="image">Image</label>
                        <input type="file" name="image" id="image" class="form-control" />

                    </div>
                    <div class="col-12">
                        <label class="form-label" >Desctiption</label>
                        <textarea
                          name="description"
                          class="form-control"
                          placeholder=""
                          value=""
                        ></textarea>
                      </div>
                      <div class="col-12 col-md-6">
                        <label class="form-label" >Category</label>
                        <select
                          name="category_id"
                          class="select2 form-select"
                        >
                          <option value="">Select</option>
                          @foreach ($categories as $category)
                            <option value="{{$category->id}}">{{$category->name}}</option>

                          @endforeach
                        </select>
                      </div>
                      <div class="col-12 col-md-6">
                        <label class="form-label" >Link</label>
                        <input
                          type="text"
                          name="link"
                          class="form-control"
                          placeholder=""
                          value=""
                        />
                    </div>
                      <div class="col-12 col-md-6">
                        <label class="form-label" >Price</label>
                        <input
                          type="text"
                          name="price"
                          class="form-control"
                          placeholder=""
                          value=""
                        />
                    </div>
                    <div class="col-12 col-md-6">
                        <label class="form-label" >Publishing Price</label>
                        <input
                          type="text"
                          name="publishing_price"
                          class="form-control"
                          placeholder=""
                          value=""
                        />
                    </div>




                    <div class="col-12 text-center">
                      <button type="submit" class="btn btn-primary me-1 me-sm-3">Save</button>
                      <button type="reset" class="btn btn-label-secondary" data-bs-dismiss="modal" aria-label="Close">
                        Cancel
                      </button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
@endsection
