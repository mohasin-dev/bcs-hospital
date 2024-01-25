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
                            ALL sales
                            <span class="badge bg-blue">{{ $sales->count() }}</span>
                        </h2>
                    </div>
                    <div class="body">
                        <div class="table-responsive">
                            <table class="table table-bsaleed table-striped table-hover dataTable js-exportable">
                                <thead>
                                <tr>
                                    <th>Sl. No</th>
                                    <th>Order ID</th>
                                    <th>Orderer Name</th>
                                    <th>Total amount</th>
                                    <th>Coupon Discount</th>
                                    <th>After Coupon Discount</th>
                                    <th>Order Time</th>
                                    <th>Is Seen</th>
                                    <th>Is Complete</th>
                                    <th>Is Paid</th>
                                    <th>Order Details</th>
                                </tr>
                                </thead>
                                <tfoot>
                                <tr>
                                    <th>Sl. No</th>
                                    <th>Order ID</th>
                                    <th>Orderer Name</th>
                                    <th>Total amount</th>
                                    <th>Coupon Discount</th>
                                    <th>After Coupon Discount</th>
                                    <th>Order Time</th>
                                    <th>Is Seen</th>
                                    <th>Is Complete</th>
                                    <th>Is Paid</th>
                                    <th>Order Details</th>
                                </tr>
                                </tfoot>
                                <tbody>
                                    @foreach($sales as $key=>$sale)
                                        <tr>
                                            <td>{{ $key + 1 }}</td>
                                            <td>{{ $sale->id }}</td>
                                            <td>{{ $sale->user->first_name }}</td>

                                            <td>{{ $sale->cart_total }}</td>
                                            <td>
                                            @if ($sale->coupon_discount <= 0)
                                            0
                                            @else
                                            {{ $sale->coupon_discount }}
                                            @endif
                                            </td>
                                            <td>
                                            @if ($sale->after_coupon_discount <= 0)
                                            {{ $sale->cart_total }}
                                            @else
                                            {{ $sale->after_coupon_discount }}
                                            @endif
                                            </td>
                                            <td>{{ $sale->created_at->diffForHumans() }}</td>
                                            <td>
                                                @if ( $sale->is_seen == 0 )
                                                <button  class="btn btn-warning btn-lg waves-effect">
                                                    Unseen
                                                </button>
                                                @else
                                                <button class="btn btn-success btn-lg waves-effect">
                                                    Seen
                                                </button>
                                                @endif
                                            </td>
                                            <td>
                                                @if ( $sale->is_complete == 0 )
                                                <button class="btn btn-warning waves-effect" type="button" onclick="order_confirm({{ $sale->id }})">
                                                    Unconfirm
                                                </button>
                                                <form id="order-confirm-{{ $sale->id }}" action="{{ route('admin.order_confirm', $sale->id) }}" method="POST" style="display: none;">
                                                    @csrf

                                                </form>
                                                {{-- <button  onclick="order_confirm({{ $sale->id }})" class="btn btn-warning btn-lg waves-effect">
                                                    Unconfirm
                                                </button>
                                                <a hidden id="order-confirm-{{ $sale->id }}" href="{{ route('admin.order_confirm', $sale->id) }}" class="btn btn-warning btn-lg waves-effect"></a> --}}
                                                @else
                                                <button class="btn btn-success btn-lg waves-effect">
                                                    Confirm
                                                </button>
                                                @endif
                                            </td>
                                             <td>
                                                @if ( $sale->is_paid == 0 )
                                                <button class="btn btn-warning waves-effect" type="button" onclick="order_paid({{ $sale->id }})">
                                                   Unpaid
                                                </button>
                                                <form id="order-paid-{{ $sale->id }}" action="{{ route('admin.order_paid', $sale->id) }}" method="POST" style="display: none;">
                                                    @csrf

                                                </form>
                                                @else
                                                <button class="btn btn-success btn-lg waves-effect">
                                                    Paid
                                                </button>
                                                @endif
                                            </td>

                                            <td class="text-center">
                                                <a href="{{ route('admin.sale.details', $sale->id) }}" class="btn btn-info btn-lg waves-effect">
                                                    {{-- <i class="material-icons">edit</i> --}}Order Details
                                                </a>
                                                {{-- <button class="btn btn-danger waves-effect" type="button" onclick="deletesale({{ $sale->id }})">
                                                    <i class="material-icons">delete</i>
                                                </button>
                                                <form id="delete-form-{{ $sale->id }}" action="{{ route('admin.sale.destroy',$sale->id) }}" method="POST" style="display: none;">
                                                    @csrf
                                                    @method('DELETE')
                                                </form> --}}
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
             {{--<a class="btn btn-primary waves-effect" href="{{ route('admin.sale.create') }}">
                <i class="material-icons">add</i>
                <span>Add New sale</span>
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
        function order_confirm(id) {
            swal({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                type: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, Confirm it!',
                cancelButtonText: 'No, cancel!',
                confirmButtonClass: 'btn btn-success',
                cancelButtonClass: 'btn btn-danger',
                buttonsStyling: false,
                reverseButtons: true
            }).then((result) => {
                if (result.value) {
                    event.preventDefault();
                    document.getElementById('order-confirm-'+id).submit();
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
    function order_paid(id) {
        swal({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, Confirm it!',
            cancelButtonText: 'No, cancel!',
            confirmButtonClass: 'btn btn-success',
            cancelButtonClass: 'btn btn-danger',
            buttonsStyling: false,
            reverseButtons: true
        }).then((result) => {
            if (result.value) {
                event.preventDefault();
                document.getElementById('order-paid-'+id).submit();
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
