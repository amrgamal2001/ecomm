<html>
    <head>
        <style>
            body{background-color:#f6f6f5}
        </style>
    </head>
    <body>
        <form action="{{route('payment-result')}}" method="get" class="paymentWidgets" data-brands="VISA MASTER MADA"></form>


        <script src="https://test.oppwa.com/v1/paymentWidgets.js?checkoutId={{$responseData['id']}}"></script>
        <script>
            var wpwlOptions = {style:"card"}
        </script>
    </body>
</html>
