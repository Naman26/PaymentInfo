<footer>
</footer>

</body>
<script>
    function getCreditCardType(accountNumber) {

        //start without knowing the credit card type
        var result = "unknown";
        //first check for MasterCard
        if (/^5[1-5]/.test(accountNumber)) {
            result = "mastercard";
        }
        //then check for Visa
        else if (/^4/.test(accountNumber)) {
            result = "visa";
        }
        //then check for AmEx
        else if (/^3[47]/.test(accountNumber)) {
            result = "amex";
        }
        //then check for discover
        else if (/^6/.test(accountNumber)) {
            result = "discover";
        }
        return result;
    }

    var type;
    var cardIcon = document.getElementById("icon-container");

    switch (type) {
        case "mastercard":

            break;

        case "visa":

            break;

        case "amex":

            break;

        case "discover":

            break;

        default:
            //don't do anything
    }

    function handleEvent(event) {
        var value = event.target.value,
            type = getCreditCardType(value);

        switch (type) {
            case "mastercard":
                cardIcon.innerHTML = '<img class="card-icon" src="./images/mc.jpg">';
                break;

            case "visa":
                cardIcon.innerHTML = '<img class="card-icon" src="./images/visa.png">';
                break;

            case "amex":
                cardIcon.innerHTML = '<img class="card-icon" src="./images/amex.jpg">';
                break;

            case "discover":
                cardIcon.innerHTML = '<img class="card-icon" src="./images/discover.png">';
                break;

            default:
                //show error?
        }
    }

    // or window.onload
    document.addEventListener("DOMContentLoaded", function() {
        var textbox = document.getElementById("ccnum");
        textbox.addEventListener("keyup", handleEvent, false);
        textbox.addEventListener("blur", handleEvent, false);
    }, false);
</script>

</html>