@extends('layouts.master')
@section('css')
@endsection
@section('page-header')
				<!-- breadcrumb -->
				<div class="breadcrumb-header justify-content-between">
					<div class="my-auto">
						<div class="d-flex">
							<h4 class="content-title mb-0 my-auto">إضافة منتج جديد</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/ المنتجات</span>
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
    <form action="{{ route('productStore') }}" method="post">
        @csrf

        <div class="row row-sm" style="margin-bottom: 10px">
            <div class="col-md-5 col-lg-4">
                <label for="productName" class="form-control-label">اسم المنتج: <span class="tx-danger">*</span></label> <input class="form-control" id="productName" name="productName" placeholder="ادخل اسم المنتج" required="" type="text">
            </div>
            <div class="col-md-5 col-lg-4 mg-t-20 mg-md-t-0">
                <label for="companyName" class="form-control-label">اسم الشركة: <span class="tx-danger">*</span></label> <input class="form-control" id="companyName" name="companyName" placeholder="ادخل اسم الشركة" required="" type="text">
            </div>
        </div>
        <div class="row row-sm" style="margin-bottom: 10px">
            <div class="col-md-5 col-lg-4">
                <label for="productName" class="form-control-label">الكمية بالصندوق: <span class="tx-danger">*</span></label> <input class="form-control" id="amount" name="amount" placeholder="الكمية بالصندوق" required="" type="text">
            </div>
            <div class="col-md-5 col-lg-4 mg-t-20 mg-md-t-0">
                <label for="companyName" class="form-control-label">عدد القطع في الصندوق: <span class="tx-danger">*</span></label> <input class="form-control" id="amountOne" name="amountOne" placeholder="عدد القطع في الصندوق" required="" type="text">
            </div>
        </div>
        <div class="row row-sm" style="margin-bottom: 10px">
            <div class="col-md-5 col-lg-4">
                <label for="productName" class="form-control-label">سعر الشراء: <span class="tx-danger">*</span></label> <input class="form-control" id="purchasingPrice" name="purchasingPrice" placeholder="سعر الشراء" required="" type="text">
            </div>
            <div class="col-md-5 col-lg-4 mg-t-20 mg-md-t-0">
                <label for="companyName" class="form-control-label">سعر المبيع: <span class="tx-danger">*</span></label> <input class="form-control" id="sellingPrice" name="sellingPrice" placeholder="سعر المبيع" required="" type="text">
            </div>
        </div>


            <div  style="margin-top:20px; margin-right: 20px; text-align: right ">
                <input type="submit" class="btn btn-primary m-1"  value="إضافة">
                <a href="{{ route('prodIndex') }}" class="btn btn-danger">رجوع</a>
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
