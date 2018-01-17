<?php 
    include('includes/landingpage.php');

        $errors = [];

    // check if form is submitted
    if(isset($_POST['submit']) && strtolower($_POST['submit']) === strtolower('ADD AUCTION')) {
        if(empty($_POST['company'])) {
            $errors['company'] = 'Please fill in the company name';
        }

        if(empty($_POST['email'])) {
            $errors['email'] = 'Please fill in an existing Email address';
        }

        if(empty($_POST['password'])) {
            $errors['password'] = 'Please fill in the password';
        }

        if(empty($_POST['password_confirmation'])) {
            $errors['password_confirmation'] = 'Please re-enter the password';
        }
        
        if(empty($_POST['country'])) {
            $errors['country'] = 'Please fill in the country';
        }

        if(empty($_POST['zipcode'])) {
            $errors['zipcode'] = 'Please fill in the zipcode';
        }

        if(empty($_POST['city'])) {
            $errors['city'] = 'Please fill in the city';
        }

        if(empty($_POST['address'])) {
            $errors['address'] = 'Please fill in the address';
        }

        if(empty($_POST['phone-code'])) {
            $errors['phone-code'] = 'Please fill in the country code';
        }

        if(empty($_POST['phone-number'])) {
            $errors['phone-number'] = 'Please fill in the phone number';
        }

        if(empty($_POST['account_number'])) {
            $errors['account_number'] = 'Please fill in the account number';
        }

        if(empty($_POST['vat-number'])) {
            $errors['vat-number'] = 'Please fill in the VAT number';
        }

        if(empty($_POST['payment'])) {
            $errors['payment'] = 'Please fill in the payment';
        }
    }
?>

<section id="register">
    <div class="container">
        <div class="breadcrumbs">
            <ul>
                <li><a href="index.php">Home &gt;</a></li>
                <li><a href="#">Auctions &gt;</a></li>
                <li><a href="#">Salvador Dali &gt;</a></li>
                <li><a href="#">Dance of Time III</a></li>
            </ul>
        </div>

        <h1>Register</h1>

        <?php if(!empty($errors)) { ?>
            <div class="errors alert alert-danger">
                <ul>
                    <?php foreach($errors as $error) { ?>
                        <li><?= $error ?></li>
                    <?php } ?>
                </ul>
            </div>
        <?php } ?>

        <form method="POST" action="index.php?page=register">
            <div class="row  margin-bottom">
                <div class="col-sm-6 form-group right-marg big-form">
                    <label for="company">Company or name</label>
                    <input type="text" class="form-control custom-input <?php echo ($errors['company']) ? 'error' : '' ?>" name="company" id="company" placeholder="Studio 6">
                </div>
                <div class="col-sm-6 form-group big-form">
                    <label for="email">Email</label>
                    <input type="text" class="form-control custom-input <?php echo ($errors['email']) ? 'error' : '' ?>" name="email" id="email" placeholder="name@provider.com">
                </div>
            </div>
            <div class="row margin-bottom">
                <div class="col-sm-6 form-group big-form right-marg">
                    <label for="password">Password</label>
                    <input type="password" class="form-control custom-input <?php echo ($errors['password']) ? 'error' : '' ?>" name="password" id="password" placeholder="Password">
                </div>
                <div class="col-sm-6 form-group big-form">
                    <label for="password_confirmation">Password confirmation</label>
                    <input type="password" class="form-control custom-input <?php echo ($errors['password_confirmation']) ? 'error' : '' ?>" name="password_confirmation" id="password_confirmation" placeholder="Password">
                </div>
            </div>
            <div class="row margin-bottom">
                <div class="col-sm-6 form-group big-form right-marg">
                    <label for="country">Country</label>
                    <input type="text" class="form-control custom-input <?php echo ($errors['country']) ? 'error' : '' ?>" name="country" id="country" placeholder="Password">
                </div>
                <div class="col-sm-3 form-group small-form right-marg">
                    <label for="zipcode">Zip code</label>
                    <input type="text" class="form-control custom-input <?php echo ($errors['zipcode']) ? 'error' : '' ?>" name="zipcode" id="zipcode" placeholder="8400">
                </div>
                <div class="col-sm-3 form-group small-form">
                    <label for="city">City</label>
                    <input type="text" class="form-control custom-input <?php echo ($errors['city']) ? 'error' : '' ?>" name="city" id="city" placeholder="Oostende">
                </div>
            </div>
            <div class="row margin-bottom">
                <div class="col-sm-6 form-group right-marg big-form">
                    <label for="address">Address</label>
                    <input type="text" class="form-control custom-input <?php echo ($errors['address']) ? 'error' : '' ?>" name="address" id="address" placeholder="Zuidstraat 15 C4">
                </div>
                <div class="col-sm-6 form-group special-input">
                    <label for="phone_number">Phone Number</label>
                    <div class="phone-code">
                        <input type="text" class="form-control custom-input <?php echo ($errors['phone-code']) ? 'error' : '' ?>" name="phone-code" id="phone-code" placeholder="+ 32">
                    </div>
                    <div class="phone-number">
                        <input type="text" class="form-control custom-input <?php echo ($errors['phone-number']) ? 'error' : '' ?>" name="phone-number" id="phone-number" placeholder="XX XXX XX XX">
                    </div>
                </div>
            </div>
            <div class="row margin-bottom">
                <div class="col-sm-6 form-group right-marg big-form">
                    <label for="account_number">Account number</label>
                    <input type="text" class="form-control custom-input <?php echo ($errors['account_number']) ? 'error' : '' ?>" name="account_number" id="account_number" placeholder="XX XXX XX XX">
                </div>
                <div class="col-sm-6 form-group big-form">
                    <label for="vat-number">VAT-number</label>
                    <input type="text" class="form-control custom-input <?php echo ($errors['vat-number']) ? 'error' : '' ?>" name="vat-number" id="vat-number" placeholder="XX XXX XX XX">
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 form-group">
                    <label for="payment">Alternative payment methods</label>
                    <input type="text" class="form-control custom-input <?php echo ($errors['payment']) ? 'error' : '' ?>" name="payment" id="payment" placeholder="Lorem ipsum, dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim">
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 check">
                    <input type="checkbox" name="check" id="check">
                    <p>I Agree to <span>The Terms & Conditions</span></p>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 submit">
                    <input type="submit" name="submit" value="ADD AUCTION">
                </div>
            </div>
        </form>
    </div>
</section>