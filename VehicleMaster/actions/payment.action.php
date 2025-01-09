<?php
$API_Key = "rzp_live_lH3U20Pgmcu4wU";

if (isset($_POST['book'])) {
    // Sanitize and validate user inputs
    $name = ($_POST['fullname']);
    $email = ($_POST['email']);
    $phone = ($_POST['contactnumber']);
    $car = ($_POST['Amount']);
    // $bookingdate = ($_POST['address']);
   

}
?>

<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

<form action="#" method="POST">
<script
   src="https://checkout.razorpay.com/v1/checkout.js"
    data-key="<?php echo $API_Key; ?>" 
    data-amount="<?php echo $_POST['Amount'] * 100; ?>" 
    data-currency="INR"
    data-id="<?php echo 'KGL' . rand(10, 100) . 'End'; ?>" 
    data-buttontext="Pay with Razorpay"
    data-name="Online Payment for vehicle Master"
    data-description="Online car Rental website platform"
    data-image="https://computerhindiacademy.com/kgl/uploads/logo.png"
    data-prefill.name="<?php echo $_POST['fullname']; ?>"
    data-prefill.email="<?php echo $_POST['email']; ?>"
    data-prefill.contact="<?php echo $_POST['contactNumber']; ?>"
    data-theme.color="#F37254"
></script>
<input type="hidden" custom="Hidden Element" name="hidden" />
</form>

<!-- Hiding the Payment Button -->
<script>
    // Ensuring that the payment button is hidden
    $(document).ready(function () {
        $('.razorpay-payment-button').css('display', 'none').click();
    });
</script>

