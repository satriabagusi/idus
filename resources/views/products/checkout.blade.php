@extends('template.auth')
@section('title', 'Checkout')
@section('container')
<div class="row justify-content-center mt-5 mb-5">
    <div class="col-auto">
        <h1 class="display-3">Bayar Pesanan</h1>
    </div>
</div>

<div class="container">
        <div class="row ">
            <div class="col-auto">
                        
                    <div class="row">
                        <div class="col-md-4 order-md-2 mb-4">
                          <h4 class="d-flex justify-content-between align-items-center mb-3">
                            <span class="text-muted">Keranjang Kamu</span>
                            <span class="badge badge-secondary badge-pill">{{$count}}</span>
                          </h4>
                          <ul class="list-group mb-3">
                              @foreach ($carts as $cart)
                                <li class="list-group-item d-flex justify-content-between lh-condensed">
                                  <div>
                                  <h6 class="my-0">{{$cart->product->nama_produk}}</h6>
                                  Jumlah : <small class="text-muted">{{$cart->quantity}}</small>
                                </div>
                                <span class="text-muted">{{$cart->product->harga}}</span>
                            </li>
                            @endforeach
                            
                            <li class="list-group-item d-flex justify-content-between">
                              <span>Total (IDR)</span>
                              <strong>{{$cart->product->harga}}</strong>
                            </li>
                          </ul>
                        </div>
                        <div class="col-md-8 order-md-1">
                          <h4 class="mb-3">Billing address</h4>
                            <div class="row">
                              <div class="col-12 mb-3">
                                <label for="firstName">Nama</label>
                                <input type="text" class="form-control" id="firstName" placeholder="" value="{{$cart->user->nama}}" required>
                                <div class="invalid-feedback">
                                  Valid first name is required.
                                </div>
                              </div>
                            </div>
                    
                            <div class="mb-3">
                              <label for="email">Email <span class="text-muted">(Optional)</span></label>
                              <input type="email" class="form-control" id="email" value="{{$cart->user->email}}">
                              <div class="invalid-feedback">
                                Please enter a valid email address for shipping updates.
                              </div>
                            </div>
                    
                            <div class="mb-3">
                              <label for="address">Alamat</label>
                              <input type="text" class="form-control" id="address" value="{{$cart->user->alamat}}" required>
                              <div class="invalid-feedback">
                                Please enter your shipping address.
                              </div>
                            </div>
                    
                            <hr class="mb-4">
                            <div class="custom-control custom-checkbox">
                              <input type="checkbox" class="custom-control-input" id="same-address">
                              <label class="custom-control-label" for="same-address">Shipping address is the same as my billing address</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                              <input type="checkbox" class="custom-control-input" id="save-info">
                              <label class="custom-control-label" for="save-info">Save this information for next time</label>
                            </div>
                            <hr class="mb-4">
                    
                            <h4 class="mb-3">Payment</h4>
                    
                            <div class="d-block my-3">
                              <div class="custom-control custom-radio">
                                <input id="credit" name="paymentMethod" type="radio" class="custom-control-input" checked required>
                                <label class="custom-control-label" for="credit">Credit card</label>
                              </div>
                              <div class="custom-control custom-radio">
                                <input id="debit" name="paymentMethod" type="radio" class="custom-control-input" required>
                                <label class="custom-control-label" for="debit">Debit card</label>
                              </div>
                              <div class="custom-control custom-radio">
                                <input id="paypal" name="paymentMethod" type="radio" class="custom-control-input" required>
                                <label class="custom-control-label" for="paypal">PayPal</label>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-md-6 mb-3">
                                <label for="cc-name">Name on card</label>
                                <input type="text" class="form-control" id="cc-name" placeholder="" required>
                                <small class="text-muted">Full name as displayed on card</small>
                                <div class="invalid-feedback">
                                  Name on card is required
                                </div>
                              </div>
                              <div class="col-md-6 mb-3">
                                <label for="cc-number">Credit card number</label>
                                <input type="text" class="form-control" id="cc-number" placeholder="" required>
                                <div class="invalid-feedback">
                                  Credit card number is required
                                </div>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-md-3 mb-3">
                                <label for="cc-expiration">Expiration</label>
                                <input type="text" class="form-control" id="cc-expiration" placeholder="" required>
                                <div class="invalid-feedback">
                                  Expiration date required
                                </div>
                              </div>
                              <div class="col-md-3 mb-3">
                                <label for="cc-cvv">CVV</label>
                                <input type="text" class="form-control" id="cc-cvv" placeholder="" required>
                                <div class="invalid-feedback">
                                  Security code required
                                </div>
                              </div>
                            </div>
                            <hr class="mb-4">
                            <form action="/transaction/checkout/process/" method="POST">
                                @foreach ($carts as $cart)
                                @csrf
                                <input type="hidden" name="status_pembayaran" value="Dibayar">
                                <input type="hidden" name="cart_id" value="{{$cart->id}}">
                                <input type="hidden" name="user_id" value="{{$cart->user_id}}">
                                <input type="hidden" name="product_id" value="{{$cart->product->id}}">
                                @endforeach
                            <button class="btn btn-success btn-lg btn-block" type="submit">Bayar</button>
                          </form>
                        </div>
                      </div>
                    </div>
                </div>

    </div>
</div>
@endsection