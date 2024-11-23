    <!-- ============================================================Product List============================================================ -->
    <div class="product-list" id="product">
        <div class="container">
            <h2>Our Product</h2>
            <div class="owl-carousel">
                @forelse($product as $o)
                <div class="card">
                    <div class="card-content">
                        <img src="{{ asset('img/'.$o->image.'') }}" class="img-fluid">
                    </div>
                    <div class="card-title">
                        <span class="harga">
                            Rp. {{ number_format($o->price, 0, ',','.') }}
                        </span>
                        <span>
                            {{ ucwords($o->name) }} <br>
                            Transmisi : {{ strtoupper($o->transmition) }}
                        </span>
                    </div>
                </div>
                @empty
                <div class="card">
                    <div class="card-content">
                        <img src="{{ asset('img/product-profile.png') }}" class="img-fluid">
                    </div>
                    <div class="card-title">
                        <span class="harga">
                            Rp. 0
                        </span>
                        <span>
                            Product <br>
                            Transmisi : null
                        </span>
                    </div>
                </div>
                @endforelse
            </div>
        </div>
    </div>
    <!-- ============================================================END Product List============================================================ -->