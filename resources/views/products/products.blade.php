@extends('layouts.master')
@section('css')
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
									<h4 class="card-title mg-b-0"> <a class="btn btn-outline-primary " href="{{ route('productCreate') }}" style="font-size: 17px"><b>إضافة منتج</b></a>
                                        <a class="btn btn-outline-primary " href="{{ route('amountCreate') }}" style="font-size: 17px"><b>إضافة كمية</b></a>  </h4>
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
												<th class="th border-bottom-0">اسم المنتج</th>
												<th class="th border-bottom-0">اسم الشركة</th>
												<th class="th border-bottom-0">الكمية بالطرد</th>
												<th class="th border-bottom-0">الكمية بالواحدة</th>
												<th class="th border-bottom-0">سعر الشراء</th>
												<th class="th border-bottom-0"> سعر الشراء الكلي</th>
												<th class="th border-bottom-0">سعر المبيع</th>
												<th class="th border-bottom-0">سعر المبيع الكلي</th>
											</tr>
										</thead>
                                        <tbody>
                                            @foreach ($data as $info)
                                            <tr>
                                                <td>{{$info->productName}} </td>
                                                <td>{{$info->companyName}}</td>
                                                <td>{{$info->amount}}</td>
                                                <td>{{$info->amountOne}}</td>
                                                <td>{{$info->purchasingPrice}}</td>
                                                <td>{{$info->purchasingPrice*$info->amountOne}}</td>
                                                <td>{{$info->sellingPrice}}</td>
                                                <td>{{$info->sellingPrice*$info->amountOne}}</td>
                                                <td><a href="{{ route('productUpdate',$info->id) }}" class="btn btn-success"><i class="fa fa-pencil"></i></a>
                                                <a href="{{ route('productShow',$info->id) }}" class="btn btn-danger"> <i class="fa fa-trash"></i></a></td>
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
