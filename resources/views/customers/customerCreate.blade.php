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
    <form action="{{ route('customerStore') }}" method="post">
        @csrf
        <label for="customerName"> اسم الزبون</label>
        <input class="form-control" type="text" name="customerName" id="customerName" placeholder="اسم الزبون">

        <label for="customerNumber"> رقم الزبون</label>
        <input class="form-control" type="number" name="customerNumber" id="customerNumber" placeholder="رقم الزبون">

        <label for="customerLocation"> موقع الزبون</label>
        <input class="form-control" type="text" name="customerLocation" id="customerLocation" placeholder="موقع الزبون">


            <div  style="margin-top:20px; margin-right: 20px; text-align: right ">
                <input type="submit" class="btn btn-primary m-1"  value="إضافة">
                <a href="{{ route('custIndex') }}" class="btn btn-danger">رجوع</a>
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
