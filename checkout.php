<?php
    include ("header.php");
    
    // Update session variable only if the id parameter is passed thru url
    if ((isset($_GET['cost'])) && ($_GET['cost'] != '')) {
        $cost = $_GET['cost'];
    }
    else {
        $cost = '0 (No car selected!)';
    }
?>

<!-- Javascript for Form Validation-->
<script>

// https://html.form.guide/best-practices/validate-email-address-using-javascript.html
function validate() 
{
    var email = document.getElementById('email').value;
    var format = /^(?:[a-z0-9!#$%&amp;'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&amp;'*+/=?^_`{|}~-]+)*|"(?:[\x01-\x08\x0b\x0c\x0e-\x1f\x21\x23-\x5b\x5d-\x7f]|\\[\x01-\x09\x0b\x0c\x0e-\x7f])*")@(?:(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?|\[(?:(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.){3}(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?|[a-z0-9-]*[a-z0-9]:(?:[\x01-\x08\x0b\x0c\x0e-\x1f\x21-\x5a\x53-\x7f]|\\[\x01-\x09\x0b\x0c\x0e-\x7f])+)\])$/;
    var result = format.test(email);
    if(result === false) {
        alert('Please enter a valid email address.')
    }
    return result;
}
</script>

<section id="main">
    <h2>Checkout - Customer Details and Payment</h2>
    <p>Please fill in your details. <span class="required">*</span> indicates required field. </p>
    <div class="contact-form">
        <h2>Payment Due: <span class="required">$<?php echo $cost?></span></h2><br><br>
        <form name="book" method="post" action="booking_form_handler.php" onSubmit="return validate()">

            <!-- <label>NAME</label> -->
            <input class="form-control" name="firstName" type="text" id="fname" placeholder="Your First Name *" required><br>
            <input class="form-control" name="lastName" type="text" id="lname" placeholder="Your Last Name *" required><br>
            <!-- <label>E-MAIL</label> -->
            <input class="form-control" name="email" type="email" id="email" placeholder="Your Email *" required><br>
            <!-- <label>ADDRESS</label> -->
            <input class="form-control" name="address1" type="text" id="address1" placeholder="Your Address Line 1 *" required><br>
            <input class="form-control" name="address2" type="text" id="address2" placeholder="Your Address Line 2"><br>
            <input class="form-control" name="city" type="text" id="city" placeholder="Your City *" required><br>
            <select class="form-control" name="state" id="state" placeholder="Your State *" required>
                <option value="NSW">New South Wales</option>
                <option value="VIC">Victoria</option>
                <option value="ACT">Australian Capital Territory</option>
                <option value="QL">Queensland</option>
                <option value="NT">Northern Territory</option>
                <option value="WA">Western Australia</option>
                <option value="SA">South Australia</option>
                <option value="TAS">Tasmania</option>
            </select><br>
            <input class="form-control" name="postcode" type="number" id="postcode" placeholder="Your Postcode *" min="0000" max="9999" required><br>
            <!-- <label>PAYMENT METHOD</label> -->
            <select class="form-control" name="payment" id="payment" placeholder="Your Payment Method *" required>
                <option value="MASTER">MasterCard</option>
                <option value="VISA">Visa</option>          
                <option value="AMERICAN">American Express</option>
                <option value="UNION">Union Pay</option>
                <option value="CASH">Cash</option>
                <option value="BANK">Bank Transfer</option>
            </select><br>

            <input class="submitbutton" type="submit" name="Submit" value="BOOK NOW">
            <input class="submitbutton" type="reset" name="Reset" value="RESET">
        </form>

    </div>
</section>
</div>

<?php
	include ("footer.php");
?>