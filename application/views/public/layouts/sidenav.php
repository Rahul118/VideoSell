<div class="wrapper">
	<div class="sidebar bg-light">
		<div class="avatar">
			<a href="<?= base_url('dashboard/profile') ?>"><img src="<?= base_url('assets/imgs/avatar.png') ?>" /></a>
			<span class="avatar-title">Rahul Kumar</span>
			<div class="dropdown">
				<a class="dropdown-toggle text-decoration-none" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="true"><small>PROFILE</small></a>
				<div class="dropdown-menu" x-placement="bottom-start">
					<a class="dropdown-item" href="<?= base_url('dashboard/profile') ?>">Profile</a>
					<a class="dropdown-item" href="<?= base_url('dashboard/settings') ?>">Settings</a>
					<div class="dropdown-divider"></div>
					<a class="dropdown-item" href="auth/logout">Logout</a>
				</div>
			</div>
			<a href="<?= base_url('dashboard/upload') ?>" class="btn btn-success m-2">UPLOAD VIDEO</a>
		</div>
		<div class="list-group text-uppercase" id="sidenav">
			<a href="<?= base_url('dashboard') ?>" class="list-group-item list-group-item-action active">
				Dashboard
			</a>
			<a href="<?= base_url('dashboard/videos') ?>" class="list-group-item list-group-item-action">My Videos
			</a>
			<a href="<?= base_url('dashboard/mailbox') ?>" class="list-group-item list-group-item-action">MailBox
			</a>
			<a href="<?= base_url('dashboard/payments') ?>" class="list-group-item list-group-item-action">Payments
			</a>
			<a href="<?= base_url('home') ?>" class="list-group-item list-group-item-action">Home
			</a>
		</div>
	</div>
	<div class="wrapper-content">
		<?php
		$breadcrumbs = $this->uri->segment_array();
		?>
		<ol class="breadcrumb text-capitalize">
			<?php
			foreach ($breadcrumbs as $segment => $crumb) {
				if ($segment == 1) {
					$link = base_url($crumb);
				} else {
					$link .= "/" . $crumb;
				}
				if (next($breadcrumbs)) {
					echo "<li class='breadcrumb-item'><a href='$link'>$crumb</a></li>";
				} else {
					echo "<li class='breadcrumb-item active'>$crumb</li>";
				}
			}
			?>
		</ol>
		<div class="container">
