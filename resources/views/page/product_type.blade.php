	@extends('master')
	@section('content')
	<div class="inner-header">
		<div class="container">
			<div class="pull-left">
				<h6 class="inner-title">Sản phẩm</h6>
			</div>
			<div class="pull-right">
				<div class="beta-breadcrumb font-large">
					<a href="{{route('home')}}">Home</a> / <span>Sản phẩm</span>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
	<div class="container">
		<div id="content" class="space-top-none">
			<div class="main-content">
				<div class="space60">&nbsp;</div>
				<div class="row">
					<div class="col-sm-3">
						<ul class="aside-menu">
							@foreach ($p_loai as $loai)
								<li><a href="{{route('product-type',$loai->id)}}">{{$loai->name}}</a></li>
							@endforeach
						</ul>
					</div>
					<div class="col-sm-9">
						<div class="beta-products-list">
							<h4>{{$sp_loai->name}}</h4>
							<div class="beta-products-details">
								<p class="pull-left">Có {{count($p_type)}} sản phẩm mới</p>
								<div class="clearfix"></div>
							</div>

							<div class="row">
								@foreach ($p_type as $type)
    								<div class="col-sm-4">
    									<div class="single-item">
    										@if ( $type->promotion_price > 0 )
        										<div class="ribbon-wrapper">
        											<div class="ribbon sale">Sale</div>
        										</div>
        									@endif
        									
    										<div class="single-item-header">
    											<a href="{{route('product-detail',$type->id)}}"><img src="template/image/product/{{$type->image}}" width="213px" height="172px" alt=""></a>
    										</div>
    										<div class="single-item-body">
    											<p class="single-item-title">{{$type->name}}</p>
    											<p class="single-item-price">
    												
    												@if ($type->promotion_price > 0 )
    													<span class="flash-del">{{number_format($type->unit_price)}} đồng</span>
    													<span class="flash-sale">{{number_format($type->promotion_price)}} đồng</span>
    												@else 
    													<span >{{number_format($type->unit_price)}} đồng</span>
    												@endif
    											</p>
    										</div>
    										<div class="single-item-caption">
    											<a class="add-to-cart pull-left" href="{{route('addcart',$type->id)}}"><i class="fa fa-shopping-cart"></i></a>
    											<a class="beta-btn primary" href="{{route('product-detail',$type->id)}}">Chi Tiết <i class="fa fa-chevron-right"></i></a>
    											<div class="clearfix"></div>
    										</div>
    									</div>
    								</div>
								@endforeach
							
							</div>
						</div> <!-- .beta-products-list -->

						<div class="space50">&nbsp;</div>

						<div class="beta-products-list">
							<h4>Sản Phẩm Khác</h4>
							<div class="beta-products-details">
								<p class="pull-left">Có {{count($p_other)}} sản phẩm khác</p>
								<div class="clearfix"></div>
							</div>
							<div class="row">
								@foreach ($p_other as $sale_p)
									<div class="col-sm-4">
    									<div class="single-item">
    										@if ( $sale_p->promotion_price > 0 )
        										<div class="ribbon-wrapper">
        											<div class="ribbon sale">Sale</div>
        										</div>
        									@endif
        									
    										<div class="single-item-header">
    											<a href="{{route('product-detail',$sale_p->id)}}"><img src="template/image/product/{{$sale_p->image}}" alt="" width="213px" height="172px"></a>
    										</div>
    										<div class="single-item-body">
    											<p class="single-item-title">{{$sale_p->name}}</p>
    											<p class="single-item-price">
    												@if ($sale_p->promotion_price > 0 )
    													<span class="flash-del">{{number_format($sale_p->unit_price)}} đồng</span>
    													<span class="flash-sale">{{number_format($sale_p->promotion_price)}} đồng</span>
    												@else
    													<span >{{number_format($sale_p->unit_price)}} đồng</span>
    												@endif
    											</p>
    										</div>
    										<div class="single-item-caption">
    											<a class="add-to-cart pull-left" href="{{route('addcart',$sale_p->id)}}"><i class="fa fa-shopping-cart"></i></a>
    											<a class="beta-btn primary" href="{{route('product-detail',$sale_p->id)}}">Details <i class="fa fa-chevron-right"></i></a>
    											<div class="clearfix"></div>
    										</div>
    									</div>
    								</div>
									@endforeach
							</div>
							
							<div class="row">
								{{$p_other->links()}}
							</div>
							<div class="space40">&nbsp;</div>
							
						</div> <!-- .beta-products-list -->
					</div>
				</div> <!-- end section with sidebar and main content -->


			</div> <!-- .main-content -->
		</div> <!-- #content -->
	</div> <!-- .container -->

	@endsection