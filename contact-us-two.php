<?php include_once("templates/header.php"); ?>

<div class="title">
    <h3 class="text-center"> Contact Us</h3>
</div>

<div class="row center">
    <div class="col-md-6 offset-md-3">
        <form id="validateForm" action="actions/send_enquiry_ajax.php" method="POST">
            <div class="form-group">
                <label for="name">Full Name</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Enter your full name" required minlength="4" data-parsley-required-message="Name is required" data-parsley-minlength-message="Name should be more than 4 characters long" data-parsley-trigger="change">
            </div>
            <div class="form-group">
                <label for="email">Email Address</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email" required parsley-type="email" data-parsley-required-message="Email is required" data-parsley-type-message="Please enter a valid Email Address" data-parsley-trigger="change">
            </div>
            <div class="form-group">
                <label for="phone">Phone Number</label>
                <input type="tel" class="form-control" id="phone" name="phone" placeholder="Enter your phone number" required data-parsley-type="number" data-parsley-length="[10,10]" data-parsley-required-message="Phone Number is required" data-parsley-type-message="Please enter a valid Phone Number" data-parsley-length-message="Phone Number should be 10 digits only" data-parsley-trigger="change">
            </div>
            <div class="form-group">
                <label for="subject">Subject</label>
                <input type="text" class="form-control" id="subject" name="subject" placeholder="Enter your subject" required data-parsley-required-message="Subject is required" data-parsley-trigger="change">
            </div>
            <div class="form-group">
                <label for="message">Message</label>
                <textarea class="form-control" id="message" name="message" rows="2" placeholder="Enter your message" required data-parsley-required-message="Message is required" data-parsley-trigger="change"></textarea>
            </div>
            <div class="text-center" id="success">
            </div>
            <div class="text-center" id="failure">
            </div>
            <div class="text-center">
                <button type="submit" name="submit" id="submit" class="btn btn-primary">Submit</button>
                <button type="reset" name="reset-button" id="reset-button" class="btn btn-secondary">Reset</button>
            </div>

        </form>


    </div>
</div>

<br>
<br><br>



<?php include_once("templates/footer.php"); ?>