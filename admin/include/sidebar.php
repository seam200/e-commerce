<div class="span3">
<div class="sidebar">
		<ul class="widget widget-menu unstyled">
			<li>
				<a class="collapsed" data-toggle="collapse" href="#togglePages">
					<i class="menu-icon icon-cog"></i>
					<i class="icon-chevron-down pull-right"></i><i class="icon-chevron-up pull-right"></i>
					Order Management
				</a>
				<ul id="togglePages" class="collapse unstyled">
					<li>
						<a href="todays-orders.php">
							<i class="icon-tasks"></i>
							Today's Orders
							<?php
							$f1 = "00:00:00";
							$from = date('Y-m-d') . " " . $f1;
							$t1 = "23:59:59";
							$to = date('Y-m-d') . " " . $t1;
							$result = $con->query("SELECT * FROM orders WHERE orderDate BETWEEN '$from' AND '$to'");
							$num_rows1 = $result->num_rows ;
							if($num_rows1 > 0){
							?>
								<b class="label orange pull-right"><?php echo htmlentities($num_rows1) ?? "0" ?></b>
							<?php } ?>
						</a>
					</li>
					<li>
						<a href="pending-orders.php">
							<i class="icon-tasks"></i>
							Pending Orders
							<?php
							$status = 'Delivered';
							$ret = $con->query("SELECT * FROM orders where orderStatus!='$status' || orderStatus is null ");
							$num = $ret->num_rows;
							if($num > 0){ ?><b class="label orange pull-right"><?php echo htmlentities($num); ?></b>
							<?php } ?>
						</a>
					</li>
					<li>
						<a href="delivered-orders.php">
							<i class="icon-inbox"></i>
							Delivered Orders
							<?php
							$status = 'Delivered';
							$rt = $con->query("SELECT * FROM orders where orderStatus='$status'");
							$num1 = $rt->num_rows;
							if($num1 > 0){ ?><b class="label green pull-right"><?php echo htmlentities($num1); ?></b>
							<?php } ?>

						</a>
					</li>
				</ul>
			</li>

			<li>
				<a href="manage-users.php">
					<i class="menu-icon icon-group"></i>
					Manage users
				</a>
			</li>
		</ul>
		<ul class="widget widget-menu unstyled">
			<li><a href="category.php"><i class="menu-icon icon-tasks"></i> Create Category </a></li>
			<li><a href="subcategory.php"><i class="menu-icon icon-tasks"></i>Sub Category </a></li>
			<li><a href="insert-product.php"><i class="menu-icon icon-paste"></i>Insert Product </a></li>
			<li><a href="manage-products.php"><i class="menu-icon icon-table"></i>Manage Products </a></li>
		</ul><!--/.widget-nav-->
		<ul class="widget widget-menu unstyled">
			<li><a href="user-logs.php"><i class="menu-icon icon-tasks"></i>User Login Log </a></li>

			<li>
				<a href="logout.php">
					<i class="menu-icon icon-signout"></i>
					Logout
				</a>
			</li>
		</ul>
	</div><!--/.sidebar-->
</div><!--/.span3-->