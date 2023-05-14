@extends('dashboard.teacher.layout')

@section('content')
<style>
    .StripeElement {
        background-color: white;
        padding: 10px 12px;
        border-radius: 4px;
        border: 1px solid #e5e7eb;
        width: 100%;
        height: 40px;
    }

    .StripeElement--focus {
        outline: none;
        border-color: #a1a1aa;
        box-shadow: 0 1px 3px 0 #a1a1aa;
    }

    .StripeElement--invalid {
        border-color: #e53e3e;
    }

    .StripeElement--webkit-autofill {
        background-color: #fefde5 !important;
    }
</style>
<div class="container mx-auto px-4 my-5">
    <div class="max-w-3xl mx-auto my-8">
        <div class="bg-white shadow rounded-lg p-10">
            <h2 class="text-2xl font-semibold mb-4">Payment Information</h2>
            <p class="text-lg mb-4">You will be charged <span class="font-bold">${{ number_format($plan->price, 2)
                    }}</span> for <span class="font-bold">{{ $plan->name }} Plan</span>.</p>

            <form id="payment-form" action="{{ route('teacher.subscription.create') }}" method="POST">
                @csrf
                <input type="hidden" name="plan" id="plan" value="{{ $plan->id }}">

                <div class="mb-4">
                    <label for="card-holder-name" class="block text-sm font-medium text-gray-700">Name</label>
                    <input type="text" name="name" id="card-holder-name"
                        class="form-control mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                        value="" placeholder="Name on the card">
                </div>

                <div class="mb-4">
                    <label for="" class="block text-sm font-medium text-gray-700">Card details</label>
                    <div id="card-element" class="StripeElement mt-1"></div>
                </div>

                <button type="submit"
                    class="btn btn-primary bg-indigo-600 text-white px-4 py-2 rounded-md shadow-sm hover:bg-indigo-700 focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                    id="card-button" data-secret="{{ $intent->client_secret }}">Purchase</button>
            </form>
        </div>
    </div>
</div>

<script src="https://js.stripe.com/v3/"></script>
<script>
    const stripe = Stripe('{{ env('STRIPE_KEY') }}')
        const elements = stripe.elements()
        const cardElement = elements.create('card')

        cardElement.mount('#card-element')

        const form = document.getElementById('payment-form')
        const cardBtn = document.getElementById('card-button')
        const cardHolderName = document.getElementById('card-holder-name')

        form.addEventListener('submit', async (e) => {
            e.preventDefault()

            cardBtn.disabled = true
            const {
                setupIntent,
                error
            } = await stripe.confirmCardSetup(
                cardBtn.dataset.secret, {
                    payment_method: {
                        card: cardElement,
                        billing_details: {
                            name: cardHolderName.value
                        }
                    }
                }
            )

            if (error) {
                cardBtn.disable = false
            } else {
                let token = document.createElement('input')
                token.setAttribute('type', 'hidden')
                token.setAttribute('name', 'token')
                token.setAttribute('value', setupIntent.payment_method)
                form.appendChild(token)
                form.submit();
            }
        })
</script>
@endsection