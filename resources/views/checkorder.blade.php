@extends('master')
@section('content')
    <div class="cart-container">
        <div class="col-sm-10">
            <div class="order-table">
                <h2>Check your order</h2>
                <p>Please check your order.</p>
                <table class="table table-hover">
                    <tbody>
                    <tr>
                        <td>Amount</td>
                        <td>${{$total}}</td>
                    </tr>
                    <tr>
                        <td>Tax</td>
                        <td>${{$total * 0.1 }}</td>
                    </tr>
                    <tr>
                        <td>Delivery Fee</td>
                        <td>$10</td>
                    </tr>
                    <tr>
                        <td>Total Amount</td>
                        <td>${{$total + 10}}</td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div>
                <form action="/order" method="POST" id="order">
                    @csrf
                    <div class="form-group">
                        {{--                        <label>--}}
                        {{--                            <input type="text" class="form-control" placeholder="Enter your address" name="address" data-bv-notempty data-bv-notempty-message="please enter your address"></input>--}}
                        {{--                        </label>--}}
                        <label for="address">Address:</label>
                        <input type="text" class="form-control" id="address" placeholder="Enter your address"
                               name="address" required>
                    </div>
                    <div class="form-group">
                        <label>Payment Method
                            <br>
                            <input type="radio" name="payment" value="paypal" checked><span>Paypal</span>
                            <input type="radio" name="payment" value="mastercard"><span>Master Card</span>
                        </label>
                    </div>
                    <button type="submit" class="btn btn-primary">Place your order</button>
                </form>
            </div>
        </div>
    </div>
@endsection
