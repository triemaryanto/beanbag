<header>
    <div class="header-top pt-10 pb-10 d-none d-md-block">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-3">
                    <div class="header-top-left">
                        <p class="no-margin">Default Welcome Msg!</p>
                    </div>
                </div>
                <div class="col-lg-8 col-md-9">
                    <ul class="header-top-right text-right">
                        <li>
                            <select name="currency" id="currency">
                                <option value="GBP">GBP</option>
                                <option value="usd">USD</option>
                                <option value="euro">Euro</option>
                            </select>
                        </li>
                        <li>
                            <select name="lan" id="lan">
                                <option value="GBP">English</option>
                                <option value="1">Arabic</option>
                                <option value="2">Bangla</option>
                            </select>
                        </li>
                        <li><a href="my-account.html"><i class="fas fa-user"></i>My Account</a></li>
                        <li><a href="wishlist.html"><i class="fas fa-heart"></i>My Wishlist</a></li>
                        <li><a href="login_register.html"><i class="fas fa-unlock"></i>Sign In</a></li>
                        <li><a href="checkout.html"><i class="fas fa-share-square"></i>Check Out</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    @include('layouts.depan.menu')
</header>
