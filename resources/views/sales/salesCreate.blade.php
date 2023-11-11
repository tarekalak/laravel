@extends('layouts.master')
@section('css')
@endsection
@section('title')
إنشاء بيع جديد
@endsection
@section('page-header')
				<!-- breadcrumb -->
				<div class="breadcrumb-header justify-content-between">
					<div class="my-auto">
						<div class="d-flex">
							<h4 class="content-title mb-0 my-auto">بيع جديد</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/ المبيعات</span>
						</div>
					</div>
				</div>
				<!-- breadcrumb -->
@endsection
@section('content')
				<!-- row -->
				<div class="row">
<h3>إضافة منتج</h3>
<div class="container" style="margin: 30px">
    <form action="{{ route('salesStore') }}" method="post">
        @csrf

        <div class="row row-sm" style="margin-bottom: 10px">
            <div class="col-md-5 col-lg-4">
                <label for="productName" class="form-control-label">اسم الزبون: <span class="tx-danger">*</span></label>
                <select class="form-control" id="customerId" name="customerId"  >
                    @foreach ($cust as $info)
                    <option value="{{ $info->id }}">{{ $info->customerName }}</option>

                    @endforeach
                </select>
            </div>
            <div class="col-md-5 col-lg-4 mg-t-20 mg-md-t-0">
                <label for="companyName" class="form-control-label">اسم المنتج: <span class="tx-danger">*</span></label>
                <select class="form-control" id="productId" name="productId"  >
                    @foreach ($prod as $info)
                    <option value="{{ $info->id }}">{{$info->productName}} -  {{$info->companyName}} </option>

                    @endforeach
                </select>
            </div>
        </div>
        <div class="row row-sm" style="margin-bottom: 10px">
            <div class="col-md-5 col-lg-4">
                <label for="productName" class="form-control-label"> الكمية بالقطعة : <span class="tx-danger">*</span></label> <input class="form-control" id="amount" name="amount" placeholder="الكمية بالقطعة" required="" type="number">
            </div>
            <div class="col-md-5 col-lg-4 mg-t-20 mg-md-t-0">
                <label for="companyName" class="form-control-label">المبلغ المدفوع: <span class="tx-danger">*</span></label> <input class="form-control" id="payment" name="payment" placeholder="المبلغ المدفوع" required="" type="number">
            </div>
        </div>
            <div  style="margin-top:20px; margin-right: 20px; text-align: right ">
                <input type="submit" class="btn btn-primary m-1"  value="إضافة">
                <a href="{{ route('sales') }}" class="btn btn-danger">رجوع</a>
            </div>
        </div>
    </form>
</div>

				</div>
				<!-- row closed -->
			</div>
			<!-- Container closed -->
		</div>
		<!-- main-content closed -->
@endsection
@section('js')
@endsection
