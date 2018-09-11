	
	<?php $__env->startSection('content'); ?>
	
	
	<div class="fullwidthbanner-container">
					<div class="fullwidthbanner">
						<div class="bannercontainer" >
					    <div class="banner" >
								<ul>
								
    								<?php $__currentLoopData = $slides; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $slide): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
    									<li data-transition="boxfade" data-slotamount="20" class="active-revslide" style="width: 100%; height: 100%; overflow: hidden; z-index: 18; visibility: hidden; opacity: 0;">
        						            <div class="slotholder" style="width:100%;height:100%;" data-duration="undefined" data-zoomstart="undefined" data-zoomend="undefined" data-rotationstart="undefined" data-rotationend="undefined" data-ease="undefined" data-bgpositionend="undefined" data-bgposition="undefined" data-kenburns="undefined" data-easeme="undefined" data-bgfit="undefined" data-bgfitend="undefined" data-owidth="undefined" data-oheight="undefined">
												<div class="tp-bgimg defaultimg" data-lazyload="undefined" data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat" data-lazydone="undefined" src="template/image/slide/<?php echo e($slide->image); ?>" data-src="template/image/slide/<?php echo e($slide->image); ?>" style="background-color: rgba(0, 0, 0, 0); background-repeat: no-repeat; background-image: url('template/image/slide/<?php echo e($slide->image); ?>'); background-size: cover; background-position: center center; width: 100%; height: 100%; opacity: 1; visibility: inherit;">
												</div>
											</div>
        						        </li>
    								<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
									
									
								
								</ul>
							</div>
						</div>

						<div class="tp-bannertimer"></div>
					</div>
				</div>
				<!--slider-->
	</div>
	<div class="container">
		<div id="content" class="space-top-none">
			<div class="main-content">
				<div class="space60">&nbsp;</div>
				<div class="row">
					<div class="col-sm-12">
						<div class="beta-products-list">
							<h4>Sản Phẩm Mới</h4>
							<div class="beta-products-details">
								<p class="pull-left">Tìm thấy <?php echo e(count($new_product)); ?> sản phẩm</p>
								<div class="clearfix"></div>
							</div>

							<div class="row">
								
								<?php $__currentLoopData = $new_product; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pro): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
									<div class="col-sm-3">
    									<div class="single-item">
        									<?php if( $pro->promotion_price > 0 ): ?>
        										<div class="ribbon-wrapper">
        											<div class="ribbon sale">Sale</div>
        										</div>
        									<?php endif; ?>
    										<div class="single-item-header">
    											<a href="<?php echo e(route('product-detail',$pro->id)); ?>"><img src="template/image/product/<?php echo e($pro->image); ?>" alt="" width="213px" height="172px"></a>
    										</div>
    										<div class="single-item-body">
    											<p class="single-item-title"><?php echo e($pro->name); ?></p>
    											<p class="single-item-price">
    												
    												<?php if($pro->promotion_price > 0 ): ?>
    													<span class="flash-del"><?php echo e(number_format($pro->unit_price)); ?> đồng</span>
    													<span class="flash-sale"><?php echo e(number_format($pro->promotion_price)); ?> đồng</span>
    												<?php else: ?> 
    													<span ><?php echo e(number_format($pro->unit_price)); ?> đồng</span>
    												<?php endif; ?>
    											</p>
    										</div>
    										<div class="single-item-caption">
    											<a class="add-to-cart pull-left" href="<?php echo e(route('addcart',$pro->id)); ?>"><i class="fa fa-shopping-cart"></i></a>
    											<a class="beta-btn primary" href="<?php echo e(route('product-detail',$pro->id)); ?>">Details <i class="fa fa-chevron-right"></i></a>
    											<div class="clearfix"></div>
    										</div>
    									</div>
    								</div>
								<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>	
							</div>
							<div class="row">
								<?php echo e($new_product->links()); ?>

							</div>
						</div> <!-- .beta-products-list -->

						<div class="space50">&nbsp;</div>

						<div class="beta-products-list">
							<h4>Sản Phẩm Khuyến Mãi</h4>
							<div class="beta-products-details">
								<p class="pull-left">Có <?php echo e(count($sale_product)); ?> Sản phẩm khuyến mãi</p>
								<div class="clearfix"></div>
							</div>
							<div class="row">
								
									<?php $__currentLoopData = $sale_product; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sale_p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
									<div class="col-sm-3">
    									<div class="single-item">
    										<?php if( $sale_p->promotion_price > 0 ): ?>
        										<div class="ribbon-wrapper">
        											<div class="ribbon sale">Sale</div>
        										</div>
        									<?php endif; ?>
        									
    										<div class="single-item-header">
    											<a href="<?php echo e(route('product-detail',$sale_p->id)); ?>"><img src="template/image/product/<?php echo e($sale_p->image); ?>" alt=""></a>
    										</div>
    										<div class="single-item-body">
    											<p class="single-item-title"><?php echo e($sale_p->name); ?></p>
    											<p class="single-item-price">
    												<?php if($sale_p->promotion_price > 0 ): ?>
    													<span class="flash-del"><?php echo e(number_format($sale_p->unit_price)); ?> đồng</span>
    													<span class="flash-sale"><?php echo e(number_format($sale_p->promotion_price)); ?> đồng</span>
<!--     												$else -->
<!--     													<span><?php echo e($sale_p->unit_price); ?></span> -->
    												<?php endif; ?>
    											</p>
    										</div>
    										<div class="single-item-caption">
    											<a class="add-to-cart pull-left" href="<?php echo e(route('addcart',$sale_p->id)); ?>"><i class="fa fa-shopping-cart"></i></a>
    											<a class="beta-btn primary" href="<?php echo e(route('product-detail',$sale_p->id)); ?>">Details <i class="fa fa-chevron-right"></i></a>
    											<div class="clearfix"></div>
    										</div>
    									</div>
    								</div>
									<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
							</div>
							
							<div class="row">
								<?php echo e($sale_product->links()); ?>

							</div>
    					</div>
    					
    					<div> <!-- beta-products-list -->
							
							<div class="space40">&nbsp;</div>
							
							<h4>Tất cả sản phẩm</h4>
							<div class="beta-products-details">
								<p class="pull-left">Có <?php echo e(count($all_product)); ?> Sản phẩm</p>
								<div class="clearfix"></div>
							</div>
							<div class="row">
								<?php $__currentLoopData = $all_product; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $a_p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
									<div class="col-sm-3">
    									<div class="single-item">
    										<?php if( $a_p->promotion_price > 0 ): ?>
        										<div class="ribbon-wrapper">
        											<div class="ribbon sale">Sale</div>
        										</div>
        									<?php endif; ?>
        									
    										<div class="single-item-header">
    											<a href="<?php echo e(route('product-detail',$a_p->id)); ?>"><img src="template/image/product/<?php echo e($a_p->image); ?>" alt=""></a>
    										</div>
    										<div class="single-item-body">
    											<p class="single-item-title"><?php echo e($a_p->name); ?></p>
    											<p class="single-item-price">
    												<?php if($a_p->promotion_price > 0 ): ?>
    													<span class="flash-del"><?php echo e(number_format($a_p->unit_price)); ?> đồng</span>
    													<span class="flash-sale"><?php echo e(number_format($a_p->promotion_price)); ?> đồng</span>
    												<?php else: ?>
    													<span><?php echo e(number_format($a_p->unit_price)); ?> đồng</span>
    												<?php endif; ?>
    											</p>
    										</div>
    										<div class="single-item-caption">
    											<a class="add-to-cart pull-left" href="<?php echo e(route('addcart',$a_p->id)); ?>"><i class="fa fa-shopping-cart"></i></a>
    											<a class="beta-btn primary" href="<?php echo e(route('product-detail',$a_p->id)); ?>">Chi Tiết <i class="fa fa-chevron-right"></i></a>
    											<div class="clearfix"></div>
    										</div>
    									</div>
    								</div>
									<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
							</div>
							
							<div class="row">
								<?php echo e($all_product->links()); ?>

							</div>
						</div> <!-- .beta-products-list -->
					</div>
				</div> <!-- end section with sidebar and main content -->


			</div> <!-- .main-content -->
		</div> <!-- #content -->

<?php $__env->stopSection(); ?>
<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>