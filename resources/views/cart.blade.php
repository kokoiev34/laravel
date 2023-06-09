@extends("app")
@section("content")
    <div class="cart">
        <div class="cart__wrapper">
            <h2 class="cart__wrapper-title">Cart</h2>
            <span class="cart__wrapper-quantity">2 items</span>
            <div class="cart__wrapper-card">
                <div class="cart__wrapper-card-image" style="background-image: url({{ asset("/css/cart_device.png") }})"></div>
                <div class="cart__wrapper-card-information">
                    <span class="cart__wrapper-card-information-weapon">P250</span>
                    <span class="cart__wrapper-card-information-model">Visions</span>
                    <span class="cart__wrapper-card-information-float">Minimal Wear Classified Pistol</span>
                </div>
                <div class="cart__wrapper-card-other">
                    <span class="cart__wrapper-card-other-price">€9,90</span>
                    <button class="cart__wrapper-card-other-delete">
                        <img src="{{ asset ("/css/cart-delete.png") }}" alt="delete">
                        <span class="cart__wrapper-card-other-delete-title">Remove</span>
                    </button>
                </div>

            </div>
            <div class="cart__wrapper-card">
                <div class="cart__wrapper-card-image" style="background-image: url({{ asset("/css/cart_device.png") }})"></div>
                <div class="cart__wrapper-card-information">
                    <span class="cart__wrapper-card-information-weapon">P250</span>
                    <span class="cart__wrapper-card-information-model">Visions</span>
                    <span class="cart__wrapper-card-information-float">Minimal Wear Classified Pistol</span>
                </div>
                <div class="cart__wrapper-card-other">
                    <span class="cart__wrapper-card-other-price">€9,90</span>
                    <button class="cart__wrapper-card-other-delete">
                        <img src="{{ asset ("/css/cart-delete.png") }}" alt="delete">
                        <span class="cart__wrapper-card-other-delete-title">Remove</span>
                    </button>
                </div>
            </div>
            <div class="cart__wrapper-card">
                <div class="cart__wrapper-card-image" style="background-image: url({{ asset("/css/cart_device.png") }})"></div>
                <div class="cart__wrapper-card-information">
                    <span class="cart__wrapper-card-information-weapon">P250</span>
                    <span class="cart__wrapper-card-information-model">Visions</span>
                    <span class="cart__wrapper-card-information-float">Minimal Wear Classified Pistol</span>
                </div>
                <div class="cart__wrapper-card-other">
                    <span class="cart__wrapper-card-other-price">€9,90</span>
                    <button class="cart__wrapper-card-other-delete">
                        <img src="{{ asset ("/css/cart-delete.png") }}" alt="delete">
                        <span class="cart__wrapper-card-other-delete-title">Remove</span>
                    </button>
                </div>
            </div>
            <div class="cart__wrapper-card">
                <div class="cart__wrapper-card-image" style="background-image: url({{ asset("/css/cart_device.png") }})"></div>
                <div class="cart__wrapper-card-information">
                    <span class="cart__wrapper-card-information-weapon">P250</span>
                    <span class="cart__wrapper-card-information-model">Visions</span>
                    <span class="cart__wrapper-card-information-float">Minimal Wear Classified Pistol</span>
                </div>
                <div class="cart__wrapper-card-other">
                    <span class="cart__wrapper-card-other-price">€9,90</span>
                    <button class="cart__wrapper-card-other-delete">
                        <img src="{{ asset ("/css/cart-delete.png") }}" alt="delete">
                        <span class="cart__wrapper-card-other-delete-title">Remove</span>
                    </button>
                </div>
            </div>
            <div class="cart__wrapper-clear">
                <button class="cart__wrapper-clear-button">Clear Cart</button>
            </div>
        </div>
        <div class="cart__order">
            <h3 class="cart__order-title">Confirm Order</h3>
            <p class="cart__order-quantity">2 items in Cart</p>
            <div class="cart__order-total">
                <p class="cart__order-total-title">Total</p>
                <p class="cart__order-total-price">€19,80</p>
            </div>
            <label class="sign-up__form-checkbox container"><p class="">I have read and agree to <a href="/" class="sign-up__form-policies-link">Terms & Conditions</a> and <a href="" class="sign-up__form-policies-link">Privacy Policy</a>.</p>
                <input type="checkbox">
                <span class="sign-up__form-checkmark checkmark"></span>
            </label>
            <button class="cart__order-button" id="subscribe">PROCEED TO CHECKOUT</button>
        </div>
    </div>
    <div class="modal-window" id="myModal">
        <div class="modal-window-content">
            <img class="modal__content-close" src="{{ asset('/css/close.png') }}" id="close">
            <h1 class="modal__content-title">Checkout</h1>
            <div class="modal__content-checkout">
                <form action="" class="modal__content-form">
                    <p class="modal__content-checkout-subtitle">Credit and debit cards details</p>
                    <input type="number" class="sign-up__form-input modal__content-input" placeholder="Card number">
                    <div class="modal__content-checkout-inputs">
                        <input type="number" class="sign-up__form-input modal__content-input" placeholder="Expiry date">
                        <input type="number" class="sign-up__form-input modal__content-input" placeholder="CVC/CVV">
                    </div>
                    <div class="modal__content-button-wrapper"><button class="modal__content-button">PAY €19,80</button></div>
                </form>
            </div>
        </div>
    </div>
    <div class="overlay" id="overlay"></div>
@endsection
