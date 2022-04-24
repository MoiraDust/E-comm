<?php
use App\Http\Controllers\ProductController;
$total = 0;
//login check
if (Session::has('user')) {
    $total = ProductController::cartItem();
}
?>
<div class="nav-container">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="/">Moira Yang</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Orders</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/cart">Cart(<?=$total?>)</a>
                    </li>
                    @if(Session::has('user'))
                        {{--dropdown--}}
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                                {{Session::get('user')['name']}}
                            </a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="/logout">Log out</a>
                            </div>
                        </li>
                    @else
                        <li class="nav-item">
                            <a class="nav-link" href="/login">Login</a>
                        </li>
                    @endif
                </ul>
                <form class="d-flex" action="/search" method="POST">
                    @csrf
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"
                           name="query">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>
</div>
