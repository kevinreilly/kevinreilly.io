<?php $page = 'register'; ?>

<?php include('header.php'); ?>

<div class="container-fluid register">
	<div class="jumbotron">
        <form>
        	<div class="row">
    			<div class="col-md-8 col-md-offset-2">
                    <div class="row">
                        <div class="col-md-12">
        		    	 <h1>Register Today</h1>
                            <p>Fill out the form to register to view investment opportunities, property details, and additional information. We respect your privacy; we will not sell or share your information with anyone at any time.</p>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control" name="fname" placeholder="First Name">
                                <input type="tel" class="form-control" name="phone" placeholder="Phone Number">
                                <input type="text" class="form-control" name="pwd" placeholder="Create Password">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control" name="lname" placeholder="Last Name">
                                <input type="email" class="form-control" name="email" placeholder="Email">
                                <input type="text" class="form-control" name="pwd2" placeholder="Confirm Password">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-md-offset-2">
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" name="privacy" value="yes">
                            I agree to the Terms of Service and Privacy Policy
                        </label>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" name="optin" value="yes">
                            I would like to receive investment alerts and investment news via email.
                        </label>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
    		    	<p><a class="btn btn-primary btn-lg" href="#" role="button">Register</a></p>
                    <p>Already have an account? <a href="#" class="green">LOGIN</a></p>
                </div>
		    </div>
        </form>
    </div>
    <div class="col-md-12 intro">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <h1>HomeUnion MD offers physicians a simple, new way to confidently invest in residential real estate</h1>
                <p>We identify solid, cash producing properties; walk you through all phases of acquisition; manage all aspects of the property after your purchase; and help you sell the property when you’re ready. The process is transparent. You make informed decisions and collect targeted returns of up to 15 percent.</p>
            </div>
        </div>
    </div>
    <div class="col-md-12 black">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="row">
                    <div class="col-md-4">
                        <h2>1</h2>
                        <h3>Build Wealth</h3>
                        <p>Invest in a real asset that produces monthly cash flow, builds equity, and appreciates.</p>
                    </div>
                    <div class="col-md-4">
                        <h2>2</h2>
                        <h3>Invest Smarter</h3>
                        <p>Our algorithmic approach to market, neighborhood and property identifica-tion enables you to make smart buy/sell/hold decisions.</p>
                    </div>
                    <div class="col-md-4">
                        <h2>3</h2>
                        <h3>Invest Easier</h3>
                        <p>Gain the benefits of real estate investing while avoiding the day-to-day, hands-on interaction.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br><br>
    <div class="col-md-12 headline">
        <div class="row">
            <div class="col-md-1 bracket"></div>
            <div class="col-md-10">
                <h2>Questions? Please Contact Us</h2>
                <p>1-866-732-3220  &#8226;  <a href="mailto:info@homeunion.com">info@homeunion.com</a>  &#8226;  <a href="#">Live Chat</a></p>
            </div>
            <div class="col-md-1 bracket"></div>
        </div>
    </div>
</div>

  <?php include('footer.php'); ?>
