@extends('layouts.master')
@section('css')
@section('title')
المبيعات
@endsection
<style>
    .th,td{
        text-align: center;
    }
</style>
@endsection
@section('page-header')
				<!-- breadcrumb -->
				<div class="breadcrumb-header justify-content-between">
					<div class="my-auto">
						<div class="d-flex">
							<h4 class="content-title mb-0 my-auto">المـنـتجــات</h4>
						</div>
					</div>

				</div>
				<!-- breadcrumb -->
@endsection
@section('content')
				<!-- row -->
				<div class="row">
                    <div class="col-xl-12">
						<div class="card">
							<div class="card-header pb-0" style="margin:30px 50px 30px 0">
								<div class="d-flex justify-content-between">
									<h4 class="card-title mg-b-0"> <a class="btn btn-outline-primary " href="{{ route('salesCreate') }}" style="font-size: 17px"><b>إضافة عملية شراء</b></a></h4>
									<i class="mdi mdi-dots-horizontal text-gray"></i>
								</div>
							</div>
                            <div class="col-sm-6 col-md-4 col-xl-3 mg-t-20 mg-sm-t-0">



                            </div>
							<div class="card-body">
								<div class="table-responsive">
									<table class="table text-md-nowrap" id="example1">
										<thead>
											<tr>
												<th class="th border-bottom-0">الزبون</th>
												<th class="th border-bottom-0">المنتج</th>
												<th class="th border-bottom-0">الكمية</th>
												<th class="th border-bottom-0">المبلغ المستحق</th>
												<th class="th border-bottom-0">المبلغ المدفوع</th>
												<th class="th border-bottom-0">الباقي</th>
												<th class="th border-bottom-0">الباقي الكلي</th>
												<th class="th border-bottom-0">التاريخ</th>
											</tr>
										</thead>
                                        <tbody>
                                            @foreach ($data as $info)
                                            <tr>
                                                <td>{{$info->customers->customerName}} </td>
                                                <td>{{$info->products->productName}} -  {{$info->products->companyName}} </td>
                                                <td>{{$info->amount}}</td>
                                                <td>{{$info->amountDue}}</td>
                                                <td>{{$info->payment}}</td>
                                                <td>{{$info->amountDue-$info->payment}}</td>
                                                <td>{{$info->created_at}}</td>
                                                <td><a href="{{ route('salesShow',$info->id) }}" class="btn btn-danger"> <i class="fa fa-trash"></i></a></td>
                                            </tr>
                                            @endforeach
                                        </tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- row closed -->
			</div>
			<!-- Container closed -->
		</div>
		<!-- main-content closed -->
@endsection
@section('js')
<!-- Internal Data tables -->
<script src="{{URL::asset('assets/plugins/datatable/js/jquery.dataTables.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/dataTables.dataTables.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/dataTables.responsive.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/responsive.dataTables.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/jquery.dataTables.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/dataTables.bootstrap4.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/dataTables.buttons.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/buttons.bootstrap4.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/jszip.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/pdfmake.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/vfs_fonts.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/buttons.html5.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/buttons.print.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/buttons.colVis.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/dataTables.responsive.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/responsive.bootstrap4.min.js')}}"></script>
<!--Internal  Datatable js -->
@endsection
