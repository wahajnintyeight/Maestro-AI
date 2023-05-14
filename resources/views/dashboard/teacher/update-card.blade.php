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
        <div id="error-alert" class="alert alert-danger alert-dismissible show mb-2" role="alert" style="display: none;">
            <div class="flex items-center">
                <div id="error-alert-title" class="font-medium text-lg"></div>
                <div class="text-xs bg-white px-1 rounded-md text-slate-700 ml-auto">New</div>
            </div>
            <div id="error-alert-message" class="mt-3"></div>

            <button type="button" class="btn-close" data-tw-dismiss="alert" aria-label="Close"> <i data-lucide="x"
                    class="w-4 h-4"></i> </button>
        </div>


        <div class="max-w-3xl mx-auto my-8">
            <div class="bg-white shadow rounded-lg p-10">
                <h2 class="text-2xl font-semibold mb-4">Updating Payment Method</h2>
                {{-- <p class="text-lg mb-4">You will be charged <span
                        class="font-bold">${{ number_format($plan->price, 2) }}</span> for <span
                        class="font-bold">{{ $plan->name }} Plan</span>.</p> --}}

                <form action="{{ route('teacher.updateCard-save') }}" method="POST" id="payment-form">
                    @csrf
                    <div class="mb-4">
                        <label for="" class="block text-sm font-medium text-gray-700">Card details</label>
                        <div id="card-element" class="StripeElement mt-1">
                            <!--Stripe.js injects the Card Element-->
                        </div>
                    </div>
                    <button id="card-button" class="btn btn-primary m-2">
                        <div class="spinner hidden" id="spinner"></div>
                        <span id="button-text">Update Card</span>
                    </button>
                    <p id="card-error" role="alert"></p>
                    <p class="result-message hidden">
                        Card updated successfully!
                    </p>
                    <input type="hidden" id="payment_method" name="payment_method">
                </form>
            </div>
        </div>
    </div>

    <script src="https://js.stripe.com/v3/"></script>
    <script>
        const stripe = Stripe('{{ env('STRIPE_KEY') }}');
        const elements = stripe.elements();
        const cardElement = elements.create('card');
        const form = document.getElementById('payment-form');
        const cardBtn = document.getElementById('card-button');

        cardElement.mount('#card-element');

        form.addEventListener('submit', async (e) => {
            e.preventDefault();
            cardBtn.disabled = true;

            const {
                paymentMethod,
                error
            } = await stripe.createPaymentMethod({
                type: 'card',
                card: cardElement,
            });

            if (error) {
                console.log(error);
                cardBtn.disabled = false;
                document.getElementById('card-error').textContent = error.message;
            } else {
                document.getElementById('payment_method').value = paymentMethod.id;
                submitFormWithAjax();
            }
        });

        function submitFormWithAjax() {
            const data = new FormData(form);
            const url = form.action;

            fetch(url, {
                    method: 'POST',
                    headers: {
                        'X-Requested-With': 'XMLHttpRequest',
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    },
                    body: data
                })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        console.log(data.success);
                        window.location.href = '{{ route('teacher.teacherAccountInfo') }}';
                        // handle success here, like showing a success message
                    } else {
                        console.log('Something went wrong');
                        document.getElementById('error-alert').style.display = 'block';
                        document.getElementById('error-alert-title').innerText = 'Something Went Wrong!';
                        document.getElementById('error-alert-message').innerText = error.message;
                    }
                })
                .catch((error) => {
                    console.error('Error:', error);
                })
                .finally(() => {
                    cardBtn.disabled = false;
                });
        }
    </script>
@endsection
