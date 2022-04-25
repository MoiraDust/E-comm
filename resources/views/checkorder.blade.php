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
                <form action="/order" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="email"></label><textarea class="form-control" placeholder="Enter your address" name="address"></textarea>
                    </div>
                    <div class="form-group">
                        <label>Payment Method
                            <br>
                            <input type="radio" name="payment" value="paypal"><span>Paypal</span>
                            <input type="radio" name="payment" value="mastercard"><span>Master Card</span>
                        </label>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
