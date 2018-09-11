	
	<?php $__env->startSection('content'); ?>
	<div class="inner-header">
		<div class="container">
			<div class="pull-left">
				<h6 class="inner-title">Sản phẩm</h6>
			</div>
			<div class="pull-right">
				<div class="beta-breadcrumb font-large">
					<a href="<?php echo e(route('home')); ?>">Home</a> / <span>Sản phẩm</span>
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
							<?php $__currentLoopData = $p_loai; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $loai): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
								<li><a href="<?php echo e(route('product-type',$loai->id)); ?>"><?php echo e($loai->name); ?></a></li>
							<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
						</ul>
					</div>
					<div class="col-sm-9">
						<div class="beta-products-list">
							<h4><?php echo e($sp_loai->name); ?></h4>
							<div class="beta-products-details">
								<p class="pull-left">Có <?php echo e(count($p_type)); ?> sản phẩm mới</p>
								<div class="clearfix"></div>
							</div>

							<div class="row">
								<?php $__currentLoopData = $p_type; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $type): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    								<div class="col-sm-4">
    									<div class="single-item">
    										<?php if( $type->promotion_price > 0 ): ?>
        										<div class="ribbon-wrapper">
        											<div class="ribbon sale">Sale</div>
        										</div>
        									<?php endif; ?>
        									
    										<div class="single-item-header">
    											<a href="<?php echo e(route('product-detail',$type->id)); ?>"><img src="template/image/product/<?php echo e($type->image); ?>" width="213px" height="172px" alt=""></a>
    										</div>
    										<div class="single-item-body">
    											<p class="single-item-title"><?php echo e($type->name); ?></p>
    											<p class="single-item-price">
    												
    												<?php if($type->promotion_price > 0 ): ?>
    													<span class="flash-del"><?php echo e(number_format($type->unit_price)); ?> đồng</span>
    													<span class="flash-sale"><?php echo e(number_format($type->promotion_price)); ?> đồng</span>
    												<?php else: ?> 
    													<span ><?php echo e(number_format($type->unit_price)); ?> đồng</span>
    												<?php endif; ?>
    											</p>
    										</div>
    										<div class="single-item-caption">
    											<a class="add-to-cart pull-left" href="<?php echo e(route('addcart',$type->id)); ?>"><i class="fa fa-shopping-cart"></i></a>
    											<a class="beta-btn primary" href="<?php echo e(route('product-detail',$type->id)); ?>">Chi Tiết <i class="fa fa-chevron-right"></i></a>
    											<div class="clearfix"></div>
    										</div>
    									</div>
    								</div>
								<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
							
							</div>
						</div> <!-- .beta-products-list -->

						<div class="space50">&nbsp;</div>

						<div class="beta-products-list">
							<h4>Sản Phẩm Khác</h4>
							<div class="beta-products-details">
								<p class="pull-left">Có <?php echo e(count($p_other)); ?> sản phẩm khác</p>
								<div class="clearfix"></div>
							</div>
							<div class="row">
								<?php $__currentLoopData = $p_other; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sale_p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
									<div class="col-sm-4">
    									<div class="single-item">
    										<?php if( $sale_p->promotion_price > 0 ): ?>
        										<div class="ribbon-wrapper">
        											<div class="ribbon sale">Sale</div>
        										</div>
        									<?php endif; ?>
        									
    										<div class="single-item-header">
    											<a href="<?php echo e(route('product-detail',$sale_p->id)); ?>"><img src="template/image/product/<?php echo e($sale_p->image); ?>" alt="" width="213px" height="172px"></a>
    										</div>
    										<div class="single-item-body">
    											<p class="single-item-title"><?php echo e($sale_p->name); ?></p>
    											<p class="single-item-price">
    												<?php if($sale_p->promotion_price > 0 ): ?>
    													<span class="flash-del"><?php echo e(number_format($sale_p->unit_price)); ?> đồng</span>
    													<span class="flash-sale"><?php echo e(number_format($sale_p->promotion_price)); ?> đồng</span>
    												<?php else: ?>
    													<span ><?php echo e(number_format($sale_p->unit_price)); ?> đồng</span>
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
								<?php echo e($p_other->links()); ?>

							</div>
							<div class="space40">&nbsp;</div>
							
						</div> <!-- .beta-products-list -->
					</div>
				</div> <!-- end section with sidebar and main content -->


			</div> <!-- .main-content -->
		</div> <!-- #content -->
	</div> <!-- .container -->

	<?php $__env->stopSection(); ?>
<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>