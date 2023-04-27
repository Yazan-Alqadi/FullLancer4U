<form action="/payment" method="POST">
    <script src="https://checkout.stripe.com/checkout.js" class="stripe-button"
        data-key="{{ env('STRIPE_KEY') }}"
        data-amount="5000"
        data-name="Fullancer4U"
        data-description="Pay for your work"
        data-image="{{ asset('files/Freelancer-1-1.png') }}"
        data-locale="auto">
    </script>
    {{ csrf_field() }}
</form>
