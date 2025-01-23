@extends('layouts.app')

@section('content')
    <div class="page-content  pbmit-bg-color-light">
        <!-- Title Bar -->
        <div class="pbmit-title-bar-wrapper">
            <div class="container">
                <div class="pbmit-title-bar-content">
                    <div class="pbmit-title-bar-content-inner">
                        <div class="pbmit-tbar">
                            <div class="pbmit-tbar-inner container">
                                <h1 class="pbmit-tbar-title"> Book Appointment </h1>
                            </div>
                        </div>
                        <div class="pbmit-breadcrumb">
                            <div class="pbmit-breadcrumb-inner">
                                <span>
                                    <a title="" href="#" class="home"><span>BeautyByVickky</span></a>
                                </span>
                                <span class="sep">
                                    <i class="pbmit-base-icon-angle-right"></i>
                                </span>
                                <span><span class="post-root post post-post current-item"> Book Appointment </span></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Title Bar End-->
        <section class="section-lg contact-us-bg">
            <div class="container">
                <div class="row g-0">
                    <div class="col-md-12 col-xl-5">
                        <div class="contact-form-leftbox">
                            <div class="pbmit-heading-subheading animation-style2">
                                <h4 class="pbmit-subtitle">Book Appointment</h4>
                                <h2 class="pbmit-title">Welcome</h2>
                                <div class="pbmit-heading-desc">
                                    Thank you for choosing to book an appointment with BeautyByViccky. We charge a
                                    refundable upfront payment of <b>$100</b> to proceed with the booking.
                                </div>
                            </div>
                            <div class="pbmit-contact-social">
                                <div class="pbmit-heading animation-style4">
                                    <h2 class="pbmit-title">Follow us :</h2>
                                </div>
                                <ul class="pbmit-social-links">
                                    <li class="pbmit-social-li pbmit-social-facebook">
                                        <a title="Facebook" href="#" target="_blank">
                                            <span><i class="pbmit-base-icon-facebook-f"></i></span>
                                        </a>
                                    </li>
                                    <li class="pbmit-social-li pbmit-social-twitter">
                                        <a title="Twitter" href="#" target="_blank">
                                            <span><i class="pbmit-base-icon-twitter-2"></i></span>
                                        </a>
                                    </li>
                                    <li class="pbmit-social-li pbmit-social-linkedin">
                                        <a title="LinkedIn" href="#" target="_blank">
                                            <span><i class="pbmit-base-icon-linkedin-in"></i></span>
                                        </a>
                                    </li>
                                    <li class="pbmit-social-li pbmit-social-instagram">
                                        <a title="Instagram" href="#" target="_blank">
                                            <span><i class="pbmit-base-icon-instagram"></i></span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-xl-7">
                        <div class="contact-form-rightbox">
                            <h4 class="pbmit-subtitle">Basic Information</h4>
                            <form id="payment-form">
                                @csrf
                                <div class="row">
                                    <div class="col-sm-12 col-md-6">
                                        <input type="text" class="form-control" placeholder="Full Name *" name="name"
                                            required>
                                    </div>
                                    <div class="col-sm-12 col-md-6">
                                        <input type="email" class="form-control" placeholder="Email Address*"
                                            name="email" required>
                                    </div>
                                    <div class="col-sm-12 col-md-12">
                                        <select name="service">
                                            <option value="Available service" selected disabled>Available service</option>
                                            <option value="makeup">Make Up</option>
                                            <option value="eyebrow">Eye Brow</option>
                                            <option value="touchup">Touch Up</option>
                                            <option value="eyelash">Eye Lash</option>
                                            <option value="hairshop">Hair Shop</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-12 col-md-6">
                                        <input class="form-control" aria-required="true" aria-invalid="false" value=""
                                            type="tel" placeholder="Phone Number" name="phone" required>
                                    </div>
                                    <div class="col-sm-12 col-md-6">
                                        <input class="form-control" aria-required="true" aria-invalid="false" value=""
                                            type="date" name="date" required>
                                    </div>
                                    <div class="col-md-12">
                                        <textarea name="note" cols="40" rows="10" class="form-control" placeholder="Leave a note"></textarea>
                                    </div>
                                    <div class="col-md-12">
                                        <div id="card-container"></div>
                                        <button id="card-button" type="button" class="pbmit-btn pbmit-btn-blackish mt-2">
                                            <span class="pbmit-button-content-wrapper">
                                                <span class="pbmit-button-text">Book Now</span>
                                                <svg class="pbmit-svg-arrow" xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                    width="10" height="19" viewBox="0 0 19 19"
                                                    xml:space="preserve">
                                                    <line x1="1" y1="18" x2="17.8" y2="1.2">
                                                    </line>
                                                    <line x1="1.2" y1="1" x2="18" y2="1">
                                                    </line>
                                                    <line x1="18" y1="17.8" x2="18" y2="1">
                                                    </line>
                                                </svg>
                                            </span>
                                        </button>
                                        <div id="payment-status-container"></div>
                                    </div>
                                    <div class="col-md-12 mt-2">
                                        <hr>
                                        <i> Payments powered by <a href="https://squareup.com/" target="_blank"> Square
                                                Payments </a> </i>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection

@section('scripts')
    <script>
        const appId = "{{ config('app.square.id') }}";
        const locationId = "{{ config('app.square.location') }}";
        async function initializeCard(payments) {
            const card = await payments.card();
            await card.attach('#card-container');
            return card;
        }

        document.addEventListener('DOMContentLoaded', async function() {
            if (!window.Square) {
                throw new Error('Square.js failed to load properly');
            }

            const payments = window.Square.payments(appId, locationId);
            let card;
            try {
                card = await initializeCard(payments);
            } catch (e) {
                console.error('Initializing Card failed', e);
                return;
            }

            async function handlePaymentMethodSubmission(event, paymentMethod) {
                event.preventDefault();

                try {
                    // disable the submit button as we await tokenization and make a
                    // payment request.
                    cardButton.disabled = true;
                    const token = await tokenize(paymentMethod);
                    const paymentResults = await createPayment(token);
                    displayPaymentResults('SUCCESS');

                    console.debug('Payment Success', paymentResults);
                } catch (e) {
                    cardButton.disabled = false;
                    displayPaymentResults('FAILURE');
                    console.error(e.message);
                }
            }

            const cardButton = document.getElementById(
                'card-button'
            );
            cardButton.addEventListener('click', async function(event) {
                await handlePaymentMethodSubmission(event, card);
            });

            // Call this function to send a payment token, buyer name, and other details
            // to the project server code so that a payment can be created with 
            // Payments API
            async function createPayment(token) {
                const body = JSON.stringify({
                    locationId,
                    sourceId: token,
                    idempotencyKey: window.crypto.randomUUID(),
                    name,
                    email,
                    service,
                    phone,
                    date,
                    note
                });
                const paymentResponse = await fetch("{{ route('pay') }}", {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                    },
                    body,
                });
                if (paymentResponse.ok) {
                    return paymentResponse.json();
                }
                const errorBody = await paymentResponse.text();
                throw new Error(errorBody);
            }

            // This function tokenizes a payment method. 
            // The ‘error’ thrown from this async function denotes a failed tokenization,
            // which is due to buyer error (such as an expired card). It's up to the
            // developer to handle the error and provide the buyer the chance to fix
            // their mistakes.
            async function tokenize(paymentMethod) {
                const tokenResult = await paymentMethod.tokenize();
                if (tokenResult.status === 'OK') {
                    return tokenResult.token;
                } else {
                    let errorMessage = `Tokenization failed-status: ${tokenResult.status}`;
                    if (tokenResult.errors) {
                        errorMessage += ` and errors: ${JSON.stringify(tokenResult.errors)}`;
                    }
                    throw new Error(errorMessage);
                }
            }

            // Helper method for displaying the Payment Status on the screen.
            // status is either SUCCESS or FAILURE;
            function displayPaymentResults(status) {
                const statusContainer = document.getElementById(
                    'payment-status-container'
                );
                if (status === 'SUCCESS') {
                    statusContainer.classList.remove('is-failure');
                    statusContainer.classList.add('is-success');
                } else {
                    statusContainer.classList.remove('is-success');
                    statusContainer.classList.add('is-failure');
                }

                statusContainer.style.visibility = 'visible';
            }
        });
    </script>
    <script type="text/javascript" src="{{ config('app.square.js_script') }}"></script>
@endsection
