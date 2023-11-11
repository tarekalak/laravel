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
<h3>إضافة كمية</h3>
<div class="container" style="margin: 30px">
    <form action="{{ route('amountStore') }}" method="post">
        @csrf

                <label for="productName" class="form-control-label">اسم المنتح والشركة: <span class="tx-danger">*</span></label>
                 <select class="form-control" id="id" name="id" >
                    <option value="">اختر المنتج</option>
                    @foreach ($data as $info)
                        <option value="{{ $info->id }}">{{ $info->productName }} - {{ $info->companyName }}</option>
                    @endforeach
                </select>
                <label for="productName" class="form-control-label">الكمية بالصندوق: <span class="tx-danger">*</span></label> <input class="form-control" id="amount" name="amount" placeholder="الكمية بالصندوق" required="" type="text">

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
