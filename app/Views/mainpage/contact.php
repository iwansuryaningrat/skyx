<?= $this->extend('mainpage/template/layout'); ?>

<?= $this->section('mainpage'); ?>

<!-- header -->
<header>
	<div class="container">
		<div class="head__other d-flex justify-content-center align-items-center">
			<div class="header__main">
				<h1>Contact Us</h1>
				<p class="txt__second">Contact us immediately if you are interested in us, we are ready to help you.</p>
			</div>
		</div>
	</div>
</header>
<!-- end header -->

<!-- contact card -->
<div class="sec__x sec__y">
	<div class="container">
		<div class="contact__flex">
			<div class="contact__card m-sm-4 my-sm-0 my-3">
				<div class="d-flex align-items-center">
					<div class="m__icon">
						<i class="fi fi-br-envelope"></i>
					</div>
				</div>
				<p class="cc__title">Contact Information</p>
				<p class="txt__desc">For general queries, including partnership opportunities, please email.</p>
				<a href="mailto:info@skyx.fund" target="_blank">info@skyx.fund</a>
			</div> <!-- contact card -->

			<div class="contact__card m-sm-4 my-sm-0 my-3">
				<div class="d-flex align-items-center">
					<div class="m__icon">
						<i class="fi fi-br-smartphone"></i>
					</div>
				</div>
				<p class="cc__title">Social Media</p>
				<p class="txt__desc">Stay connected with all our social media to get interesting news and information.</p>
				<div class="contact__icon">
					<a href="https://www.instagram.com/skyx.fund/" target="_blank"><i class="fab fa-instagram"></i></a>
					<a href="https://twitter.com/skyx_fund" target="_blank"><i class="fab fa-twitter"></i></a>
					<a href="https://t.me/skyx_community" target="_blank"><i class="fab fa-telegram-plane"></i></a>
					<a href="https://t.me/skyx_announcement" target="_blank"><i class="fab fa-telegram-plane"></i></a>
					<a href="https://www.linkedin.com/company/skyxfund" target="_blank"><i class="fab fa-linkedin-in"></i></a>
				</div>
			</div> <!-- contact card -->
		</div> <!-- end contact flex -->
	</div> <!-- end container -->
</div>
<!-- end contact card -->

<!-- form contact -->
<div class="sec__x sec__y">
	<div class="container">
		<div class="head__section">
			<h2>Partnership</h2>
			<p class="txt__second">Feel free to drop us a line below.</p>
		</div>

		<div class="row">
			<div class="col-12">
				<div class="skyx__form">
					<form class="row g-5" action="/add/users" enctype="multipart/form-data" method="POST" id="form_contact">
						<div class="col-sm-6 col-12">
							<input type="text" class="skyx__fcontrol" id="firstName" name="firstName" placeholder="First Name" required>
						</div>
						<div class="col-sm-6 col-12">
							<input type="text" class="skyx__fcontrol" id="lastName" name="lastName" placeholder="Last Name" required>
						</div>

						<div class="col-12">
							<input type="text" class="skyx__fcontrol" id="userName" name="userName" placeholder="Username" required>
						</div>
						<div class="col-12">
							<input type="email" class="skyx__fcontrol" id="email" name="email" placeholder="Email" required>
						</div>
						<div class="col-12">
							<input type="text" class="skyx__fcontrol" id="phoneNumber" name="phoneNumber" placeholder="Phone Number" required>
						</div>
						<div class="col-12">
							<input type="text" class="skyx__fcontrol" id="tujuan" name="tujuan" placeholder="Objectives and Purpose" required>
						</div>

						<div class="col-sm-6 col-12">
							<input type="text" class="skyx__fcontrol" id="project" name="project" placeholder="Project" required>
						</div>
						<div class="col-sm-6 col-12">
							<input type="text" class="skyx__fcontrol" id="chain" name="chain" placeholder="Chain" required>
						</div>

						<div class="col-6">
							<label class="skyx__file" style="text-align: center;">
								<i class="far fa-file-pdf"></i>
								<span id="pitchdeckname" style="font-size: 18px;"> Upload Pitchdeck</span>
								<input type="file" accept="pdf/*" style="display: none;" class="skyx__fcontrol" id="pitchdeck" name="pitchdeck" required>
							</label>
						</div>
						<div class="col-6">
							<label class="skyx__file" style="text-align: center;">
								<i class="far fa-file-pdf"></i>
								<span id="whitepapername" style="font-size: 18px;"> Upload Whitepaper</span>
								<input type="file" accept="pdf/*" style="display: none;" class="skyx__fcontrol" id="whitepaper" name="whitepaper" required>
							</label>
						</div>
						<div class="col-12">
							<input class="skyx__submit" type="submit" value="Subscribe">
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- end form contact -->

<!-- new modal -->
<?php if (session()->getFlashdata('pesan')) : ?>
	<?php if (session()->getFlashdata('pesan') != 'error') : ?>
		<div class="modal__section " id="new_modal">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content modal__content">
					<div class="modal-body">
						<p class="text-center"><?= session()->getFlashdata('pesan'); ?></p>
						<div class="modal__icon">
							<a href="https://www.instagram.com/skyx.fund/" target="_blank"><i class="fab fa-instagram"></i></a>
							<a href="https://twitter.com/skyx_fund" target="_blank"><i class="fab fa-twitter"></i></a>
							<a href="https://t.me/skyx_community" target="_blank"><i class="fab fa-telegram-plane"></i></a>
							<a href="https://t.me/skyx_announcement" target="_blank"><i class="fab fa-telegram-plane"></i></a>
							<a href="https://www.linkedin.com/company/skyxfund" target="_blank"><i class="fab fa-linkedin-in"></i></a>
						</div>
					</div>
					<div class="d-flex justify-content-center align-items-center" onclick="none()">
						<a href="https://t.me/skyx_community" target="_blank" class="modal__btn">OK</a>
					</div>
				</div>
			</div>
		</div>
	<?php else : ?>
		<div class="modal__section " id="new_modal">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content modal__content">
					<div class="modal-body">
						<p class="text-center">Please Upload Pitchdeck & Whitepaper as pdf</p>
					</div>
					<div class="d-flex justify-content-center align-items-center" onclick="none()">
						<a href="#form_contact" class="modal__btn">OK</a>
					</div>
				</div>
			</div>
		</div>
	<?php endif; ?>
<?php endif; ?>


<?= $this->endSection(); ?>