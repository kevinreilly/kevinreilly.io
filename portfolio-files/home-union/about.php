<?php $page = 'about'; ?>

<?php include('header.php'); ?>

<div class="container-fluid about">
	<div class="jumbotron mobileHide">
		<div class="row">
			<div class="col-md-8 col-md-offset-1 col-sm-9">
		    	<h1>About HomeUnionMD</h1>
		    	<p><a class="btn btn-primary btn-lg" href="register.php" role="button">Start Now</a></p>
		    </div>
		</div>
    </div>
    <div class="jumbotron mobileDisplay">
        <div class="row">
            <div class="col-md-12">
                <img src="resources/img/doctor-folder-hero-mobile.jpg">
            </div>
        </div>
        <div class="row">
            <div class="col-sm-10 col-sm-offset-1">
                <div class="col-md-12">
                    <h1>About HomeUnionMD</h1>
                <p><a class="btn btn-primary btn-lg" href="register.php" role="button">Start Now</a></p>
                <br>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-12 navy">
    	<div class="row">
			<div class="col-md-10 col-md-offset-1">
				<p>HomeUnion MD leads the online marketplace as the trusted facilitator of hands-free real estate investing. Investors gain access to fully managed properties—sourced through HomeUnion MD’s meticulous due diligence process and personalized to each investor’s financial requirements—from proven ‘cash flow locations’ around the country. The company is pioneering a ‘stock market-like,’ way to engage in remote real estate investing that offers security and flexibility. Investors seeking fixed income can diversify their exposure in the market by investing in HomeUnion MD-vetted and managed cash flow real estate.</p>
			</div>
		</div>
	</div>
	<br><br>
	<div class="col-md-12 faqs" ng-controller="customersCtrl">
    	<div class="row">
			<div class="col-md-10 col-md-offset-1">
				<h4>FAQs</h4>
				<h5>Get Answers on Common Real Estate Questions</h5>
				<p>Read through some questions we frequently get to learn about cash flow homes, secure cash flow locations, certified property partners, and the HomeUnion process.</p>
				<br><br>

                <div>

                    <h3>About HomeUnion</h3>
                    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                        <div class="panel panel-default" ng-repeat="x in about">
                            <div class="panel-heading" role="tab" id="heading{{x.Index}}">
                                <h4 class="panel-title">
                                    <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse-about-{{x.Index}}" aria-expanded="false" aria-controls="collapse-about-{{x.Index}}">
                                        {{x.Question}}
                                    </a>
                                </h4>
                            </div>
                            <div id="collapse-about-{{x.Index}}" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading{{x.Index}}">
                                <div class="panel-body" ng-bind-html="x.Answer | to_trusted">
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <h3>Real Estate Investing Questions</h3>
                    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                        <div class="panel panel-default" ng-repeat="x in investing">
                            <div class="panel-heading" role="tab" id="heading{{x.Index}}">
                                <h4 class="panel-title">
                                    <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse-investing-{{x.Index}}" aria-expanded="false" aria-controls="collapse-investing-{{x.Index}}">
                                        {{x.Question}}
                                    </a>
                                </h4>
                            </div>
                            <div id="collapse-investing-{{x.Index}}" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading{{x.Index}}">
                                <div class="panel-body" ng-bind-html="x.Answer | to_trusted">
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <h3>Identifying Good Investment Properties</h3>
                    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                        <div class="panel panel-default" ng-repeat="x in properties">
                            <div class="panel-heading" role="tab" id="heading{{x.Index}}">
                                <h4 class="panel-title">
                                    <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse-properties-{{x.Index}}" aria-expanded="false" aria-controls="collapse-properties-{{x.Index}}">
                                        {{x.Question}}
                                    </a>
                                </h4>
                            </div>
                            <div id="collapse-properties-{{x.Index}}" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading{{x.Index}}">
                                <div class="panel-body" ng-bind-html="x.Answer | to_trusted">
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <h3>Property Management Questions</h3>
                    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                        <div class="panel panel-default" ng-repeat="x in management">
                            <div class="panel-heading" role="tab" id="heading{{x.Index}}">
                                <h4 class="panel-title">
                                    <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse-management-{{x.Index}}" aria-expanded="false" aria-controls="collapse-management-{{x.Index}}">
                                        {{x.Question}}
                                    </a>
                                </h4>
                            </div>
                            <div id="collapse-management-{{x.Index}}" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading{{x.Index}}">
                                <div class="panel-body" ng-bind-html="x.Answer | to_trusted">
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <h3>Selling Your Investment Property</h3>
                    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                        <div class="panel panel-default" ng-repeat="x in selling">
                            <div class="panel-heading" role="tab" id="heading{{x.Index}}">
                                <h4 class="panel-title">
                                    <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse-selling-{{x.Index}}" aria-expanded="false" aria-controls="collapse-selling-{{x.Index}}">
                                        {{x.Question}}
                                    </a>
                                </h4>
                            </div>
                            <div id="collapse-selling-{{x.Index}}" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading{{x.Index}}">
                                <div class="panel-body" ng-bind-html="x.Answer | to_trusted">
                                    
                                </div>
                            </div>
                        </div>
                    </div>
    			</div>
    		</div>
    	</div>
    	<br><br>
        <div class="col-md-12 new-question">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <h4>Have a New Question?</h4>
                    Here are a couple ways to get in touch with us.
                </div>
            </div> 
        </div>
        <br><br>
        <div class="col-md-12 contact">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="row">
                        <div class="col-md-6 contact-box">
                            <div class="col-md-12">
                                <img src="resources/img/phone-icon.png">
                                <h4>Give us a Call</h4>
                                <p>We have certified and experienced real estate investment professionals standing by to answer any questions you many have and help you with your next steps.</p>
                                <a href="contact.php">Get in Touch</a>
                            </div>
                        </div>
                        <div class="col-md-6 contact-box">
                            <div class="col-md-12">
                                <img src="resources/img/mail-icon.png">
                                <h4>Send us an Email</h4>
                                <p>Drop us a line with your HomeUnion real estate investing questions and a member of our experienced and certified team will get in touch with you shortly.</p>
                                <a href="mailto:info@homeunion.com">Drop us a Line</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div> 
        </div>
        <br><br>
        <div class="col-md-12 bios">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <h4>Executive Bios</h4>
                    <div class="row">
                        <div class="col-lg-3 col-md-4 col-sm-6 bio" ng-repeat="x in bios">
                            <a href="{{x.Link}}">
                                <img src="resources/img/bios/{{x.Image}}.png">
                                <h5>{{x.Name}}</h5>
                                <p class="title">{{x.Title}}</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br><br>
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-10 col-md-offset-1 backers">
                    <h4>Our Backers</h4>
                    <div class="row">
                        <div class="col-md-6">
                            <a href="http://www.artiman.com/"><img src="resources/img/artiman-logo.png"></a>
                        </div>
                        <div class="col-md-6">
                            <a href="http://soma.co.in/"><img src="resources/img/soma-logo.png"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <?php include('optin-form.php'); ?>
    </div>

  <?php include('footer.php'); ?>
