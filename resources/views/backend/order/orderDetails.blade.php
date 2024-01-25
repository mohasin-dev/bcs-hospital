@extends('backend.layouts.app')

@section('title','sale')

@push('css')
    <!-- JQuery DataTable Css -->
    <link href="{{ asset('assets/backend/plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css') }}" rel="stylesheet">
@endpush

@section('content')
    <div class="container-fluid">
        <!-- Exportable Table -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            Total Items
                            <span class="badge bg-blue" style="margin-right: 20px;">{{ $order_details->count() }}</span>
                            Total Products
                            <span class="badge bg-blue">{{ $total_products }}</span>
                        </h2>
                    </div>
                    <div class="body">
                        <div class="table-responsive">
                            <table class="table table-bsaleed table-striped table-hover dataTable js-exportable">
                                <thead>
                                <tr>
                                    <th>Sl. No</th>
                                    <th>Order ID</th>
                                    <th>Product Name</th>
                                    <th>Product Price</th>
                                    <th>Product wight</th>
                                    <th>Product Quantity</th>
                                    <th>Product Subtotal</th>
                                </tr>
                                </thead>
                                <tfoot>
                                <tr>
                                    <th>Sl. No</th>
                                    <th>Order ID</th>
                                    <th>Product Name</th>
                                    <th>Product Price</th>
                                    <th>Product wight</th>
                                    <th>Product Quantity</th>
                                    <th>Product Subtotal</th>
                                </tr>
                                </tfoot>
                                <tbody>
                                    @foreach($order_details as $key=>$order_detail)
                                        <tr>
                                            <td>{{ $key + 1 }}</td>
                                            <td>{{ $order_detail->sale_id }}</td>
                                            <td>{{ App\Product::find($order_detail->product_id)->product_title }}</td>
                                            <td>{{ App\Product::find($order_detail->product_id)->sale_price }}</td>
                                           @php
                                              $size_id =  App\Product::find($order_detail->product_id)->size_id;

                                              $unit_id =  App\Product::find($order_detail->product_id)->unit_id;
                                              $size_type = App\Product::find($order_detail->product_id)->size_type;
                                           @endphp
                                           @if ($size_type == 1)
                                           <td>{{ App\Size::find($size_id)->size_name }} {{ App\Unit::find($unit_id)->unit_name }} (Fixed Size)</td>
                                           @else
                                           <td class="text-center">
                                                @if ($order_detail->created_at == $order_detail->updated_at )
                                               <form action="{{ route('admin.size_update') }}" method="POST">
                                                   @csrf
                                                   <input type="hidden" name="sale_id" value="{{ $order_detail->sale_id }}">
                                                   <input type="hidden" name="sale_details_id" value="{{ $order_detail->id }}">
                                                   <input type="hidden" name="product_id" value="{{ $order_detail->product_id }}">
                                                   <input type="hidden" name="product_qty" value="{{ $order_detail->product_quantity }}">

                                                    <input type="text" name="product_size" value="{{ $order_detail->size_id }}">
                                                    {{ App\Unit::find($unit_id)->unit_name }}

                                                    <input style="margin-top: 3px" type="submit" class="btn btn-success" value="Update">
                                                </form>
                                                @else
                                                {{ $order_detail->size_id }} {{ App\Unit::find($unit_id)->unit_name }}
                                                @endif
                                            </td>
                                           @endif


                                            <td>{{ $order_detail->product_quantity }}</td>

                                            <td>
                                                @php
                                                if(App\Product::find($order_detail->product_id)->size_type == 2 && $order_detail->created_at != $order_detail->updated_at){
                                                    $product_price = App\Product::find($order_detail->product_id)->sale_price;
                                                    $product_qty = $order_detail->product_quantity;
                                                    $product_size = $order_detail->size_id;
                                                    $product_subtotal = $product_price * $product_qty * $product_size;
                                                    echo round($product_subtotal);
                                                }else{
                                                    $product_price = App\Product::find($order_detail->product_id)->sale_price;
                                                    $product_qty = $order_detail->product_quantity;
                                                    $product_subtotal = $product_price * $product_qty;
                                                    echo round($product_subtotal);
                                                }

                                                @endphp
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Exportable Table -->
    </div>


    <div class="container-fluid">
        <div class="block-header">
             {{--<a class="btn btn-primary waves-effect" href="{{ route('admin.order_detail.create') }}">
                <i class="material-icons">add</i>
                <span>Add New order_detail</span>
            </a>--}}
        </div>
        <!-- Exportable Table -->

        <!-- #END# Exportable Table -->
    </div>
@endsection

@push('js')
    <!-- Jquery DataTable Plugin Js -->
    <script src="{{ asset('assets/backend/plugins/jquery-datatable/jquery.dataTables.js') }}"></script>
    <script src="{{ asset('assets/backend/plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js') }}"></script>
    <script src="{{ asset('assets/backend/plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('assets/backend/plugins/jquery-datatable/extensions/export/buttons.flash.min.js') }}"></script>
    <script src="{{ asset('assets/backend/plugins/jquery-datatable/extensions/export/jszip.min.js') }}"></script>
    <script src="{{ asset('assets/backend/plugins/jquery-datatable/extensions/export/pdfmake.min.js') }}"></script>
    <script src="{{ asset('assets/backend/plugins/jquery-datatable/extensions/export/vfs_fonts.js') }}"></script>
    <script src="{{ asset('assets/backend/plugins/jquery-datatable/extensions/export/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('assets/backend/plugins/jquery-datatable/extensions/export/buttons.print.min.js') }}"></script>

    <script src="{{ asset('assets/backend/js/pages/tables/jquery-datatable.js') }}"></script>
    <script src="https://unpkg.com/sweetalert2@7.19.1/dist/sweetalert2.all.js"></script>
    <script type="text/javascript">
        function deleteorder_detail(id) {
            swal({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                type: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!',
                cancelButtonText: 'No, cancel!',
                confirmButtonClass: 'btn btn-success',
                cancelButtonClass: 'btn btn-danger',
                buttonsStyling: false,
                reverseButtons: true
            }).then((result) => {
                if (result.value) {
                    event.preventDefault();
                    document.getElementById('delete-form-'+id).submit();
                } else if (
                    // Read more about handling dismissals
                    result.dismiss === swal.DismissReason.cancel
                ) {
                    swal(
                        'Cancelled',
                        'Your data is safe :)',
                        'error'
                    )
                }
            })
        }
    </script>

<script type="text/javascript">
    function order_confirm(id) {
        swal({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!',
            cancelButtonText: 'No, cancel!',
            confirmButtonClass: 'btn btn-success',
            cancelButtonClass: 'btn btn-danger',
            buttonsStyling: false,
            reverseButtons: true
        }).then((result) => {
            if (result.value) {
                event.preventDefault();
                document.getElementById('delete-form-'+id).submit();
            } else if (
                // Read more about handling dismissals
                result.dismiss === swal.DismissReason.cancel
            ) {
                swal(
                    'Cancelled',
                    'Your data is safe :)',
                    'error'
                )
            }
        })
    }
</script>
@endpush



