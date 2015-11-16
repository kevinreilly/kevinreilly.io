<?php $page = 'contact'; ?>

<?php include('header.php'); ?>

<div class="container-fluid contact">
	<div class="jumbotron mobileHide">
		<div class="row">
			<div class="col-md-6 col-md-offset-1 col-sm-9">
		    	<h1>Contact HomeUnion</h1>
		    	<p><a class="btn btn-primary btn-lg" href="mailto:info@homeunion.com" role="button">Email HomeUnion</a></p>
		    </div>
		</div>
    </div>
    <div class="jumbotron mobileDisplay">
    	<div class="row">
    		<div class="col-md-12">
    			<img src="resources/img/contact-hero-mobile.jpg">
    		</div>
    	</div>
		<div class="row">
			<div class="col-sm-10 col-sm-offset-1">
				<div class="col-md-12">
		    		<h1>Contact HomeUnion</h1>
		    		<p><a class="btn btn-primary btn-lg" href="mailto:info@homeunion.com" role="button">Email HomeUnion</a></p>
		    	</div>
		    </div>
		</div>
    </div>
    <br><br>
	<div class="col-md-12">
    	<div class="row">
			<div class="col-md-10 col-md-offset-1 contact-info">
				<div class="row">
					<div class="col-sm-2">
						<img src="resources/img/building-icon.png">
					</div>
					<div class="col-sm-10">
						2010 Main Street, Suite 250<br>
						Irvine, CA 92614
					</div>
				</div>
				<div class="row">
					<div class="col-sm-2">
						<img src="resources/img/phone-icon.png">
					</div>
					<div class="col-sm-10">
						866-732-3220
					</div>
				</div>
				<div class="row">
					<div class="col-sm-2">
						<img src="resources/img/mail-icon.png">
					</div>
					<div class="col-sm-10">
						<a href="mailto:info@homeunionmd.com">info@homeunionmd.com</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<br>
	<?php include('optin-form.php'); ?>
</div>

<?php include('footer.php'); ?>