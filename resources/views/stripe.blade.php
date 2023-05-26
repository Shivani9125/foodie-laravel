<!DOCTYPE html>
<html>
  <head>
    <title>Buy cool new product</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://js.stripe.com/v3/"></script>
  </head>
  <body>
    <section>
      <div class="product">
        <img src="https://i.imgur.com/EHyR2nP.png" alt="The cover of Stubborn Attachments" />
        <div class="description">
          <h3>Stubborn Attachments</h3>
          <h5>$20.00</h5>
        </div>
      </div>
      <form action="{{ route('checkout') }}" method="POST">
        @csrf
        <button type="submit" id="checkout-button">Checkout</button>
      </form>
    </section>
    <script>
      const stripe = Stripe('{{ env('STRIPE_PUBLIC_KEY') }}');
      const checkoutButton = document.getElementById('checkout-button');

      checkoutButton.addEventListener('click', function() {
        fetch('/checkout', {
          method: 'POST',
          headers: {
            'Content-Type': 'application/json',
            'X-CSRF-Token': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
          }
        })
        .then(function(response) {
          return response.json();
        })
        .then(function(session) {
          return stripe.redirectToCheckout({ sessionId: session.id });
        })
        .then(function(result) {
          // Handle any errors returned from Checkout
        });
      });
    </script>
  </body>
</html
