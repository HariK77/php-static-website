<?php include_once("templates/header.php"); ?>

<div class="title" id="form">
    <h3 class="text-center"> Contact Us</h3>
</div>

<div class="row center">
    <div class="col-md-6 offset-md-3">

    <?php if (isset($_SESSION['success'])) : ?>
        <div class="alert alert-success" >
            <?php 
                echo $_SESSION['success']; 
                unset($_SESSION['success']);
            ?>
        </div>
    <?php endif ?>

    <?php if (isset($_SESSION['fail'])) : ?>
        <div class="alert alert-danger" >
            <?php 
                echo $_SESSION['fail']; 
                unset($_SESSION['fail']);
            ?>
        </div>
    <?php endif ?>

        <form action="actions/send_enquiry.php" method="POST" id="form">
            <div class="form-group">
                <label for="name">Full Name</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Enter your full name" required minlength="4" data-parsley-required-message="Name is required" data-parsley-minlength-message="Name should be more than 4 characters long">
            </div>
            <div class="form-group">
                <label for="email">Email Address</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email" required parsley-type="email" data-parsley-required-message="Email is required" data-parsley-type-message="Please enter a valid Email Address">
            </div>
            <div class="form-group">
                <label for="phone">Phone Number</label>
                <input type="tel" class="form-control" id="phone" name="phone" placeholder="Enter your phone number" required data-parsley-type="number" data-parsley-length="[10,10]" data-parsley-required-message="Phone Number is required" data-parsley-type-message="Please enter a valid Phone Number" data-parsley-length-message="Phone Number should be 10 digits only">
            </div>
            <div class="form-group">
                <label for="subject">Subject</label>
                <input type="text" class="form-control" id="subject" name="subject" placeholder="Enter your subject" required data-parsley-required-message="Subject is required">
            </div>
            <div class="form-group">
                <label for="message">Message</label>
                <textarea class="form-control" id="message" name="message" rows="2" placeholder="Enter your message" required data-parsley-required-message="Message is required"></textarea>
            </div>
            <div class="text-center">
                <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                <button type="reset" class="btn btn-secondary">Reset</button>
            </div>
        </form>
    </div>
</div>

<br>
<br><br>



<?php include_once("templates/footer.php"); ?>