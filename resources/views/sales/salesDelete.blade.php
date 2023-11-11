@extends('layouts.master')
@section('css')
@endsection
@section('page-header')
				<!-- breadcrumb -->
				<div class="breadcrumb-header justify-content-between">
					<div class="my-auto">
						<div class="d-flex">
							<h4 class="content-title mb-0 my-auto">Products</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/ Delete</span>
						</div>
					</div>
					</div>
				</div>
				<!-- breadcrumb -->
@endsection
@section('content')
				<!-- row -->
				<div class="row">
                    <div class="card" style="width: 500px;margin:5% 25% 0 0  ">
                        <div class="card-body">
                          <h3> هل تريد حذف المنتج ؟</h3>
                          <p  style="font-size: 17px">في حال تمت عملية الحذف لن تستطيع استرجاع بياناتك</p>
                          <a href="{{ route('salesDelete',$data->id) }}" class="btn btn-primary card-link">تأكيد</a>
                          <a href="{{ route('sales') }}" class="btn btn-danger">رجوع</a>
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
@endsection
