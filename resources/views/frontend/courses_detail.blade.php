@include('frontend.head')

<body>
@include('frontend.header')

<!-- preloader start here -->
<div class="preloader">
    <div class="preloader-inner">
        <div class="preloader-icon">
            <span></span>
            <span></span>
        </div>
    </div>
</div>
<!-- preloader ending here -->


<!-- scrollToTop start here -->
<a href="#" class="scrollToTop"><i class="icofont-rounded-up"></i></a>
<!-- scrollToTop ending here -->

<!-- Page Header section start here -->
<div class="pageheader-section">
    <div class="blog-section blog-single padding-tb section-bg">
        <div class="container">
            <div class="row justify-content-center">

                <div class="col-lg-12 col-12">
                    <article>
                        <div class="section-wrapper">
                            <div class="content-paragraph">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="box-title">
                                            <h4>{{ ucwords($data->title) }}</h4>
                                        </div>
                                        <div class="box-content">
                                            {!! Str::words($data->description, 150, ' ...') !!}
                                        </div>
                                        <div class="clearfix"></div>
                                        <div id="smart-button-container">
                                            <div style="text-align: center;">
                                                <div id="paypal-button-container"></div>
                                            </div>
                                        </div>
                                        <script src="https://www.paypal.com/sdk/js?client-id=AeQRP3kK3ZrhzUojOWyWcZwJCVy8l2UBZsy9SdgyMmk5NZJA_Hytbgt6uf9YjSxwqKljq5oRMVKA3X2c&enable-funding=venmo&currency=USD" data-sdk-integration-source="button-factory"></script>
                                        <script>
                                            function initPayPalButton() {
                                                paypal.Buttons({
                                                    style: {
                                                        shape: 'rect',
                                                        color: 'gold',
                                                        layout: 'vertical',
                                                        label: 'paypal',
                                                    },
                                                    createOrder: function(data, actions) {
                                                        return actions.order.create({
                                                            purchase_units: [{
                                                                "amount":{
                                                                    "currency_code":"USD",
                                                                    "value" : {{ $data->price }}
                                                                }
                                                            }]
                                                        });
                                                    },
                                                    onApprove: function(data, actions) {
                                                        return actions.order.capture().then(function(orderData) {
                                                            $.ajax({
                                                                URL : "{{ url('/api/courses/purchaseHistory/') }}",
                                                                method : "post",
                                                                data : {
                                                                    course_id : {{ $data->id }}
                                                                },
                                                                success : function(data){
                                                                    // Full available details
                                                                    console.log('Capture result', orderData, JSON.stringify(orderData, null, 2));

                                                                    // Show a success message within this page, e.g.
                                                                    const element = document.getElementById('paypal-button-container');
                                                                    element.innerHTML = '';
                                                                    element.innerHTML = '<h3>Thank you for your payment!</h3>';

                                                                    // Or go to another URL:  actions.redirect('thank_you.html');
                                                                }
                                                            });
                                                        });
                                                    },
                                                    onError: function(err) {
                                                        console.log(err);
                                                    }
                                                }).render('#paypal-button-container');
                                            }
                                            initPayPalButton();
                                        </script>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </div>
</div>

@include('frontend.footer')