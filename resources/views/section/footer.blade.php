    <!-- ============================================================Footer============================================================ -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-6">
                    <iframe src="{{ $location }}" width="100%" height="350px" style="border:0;" allowfullscreen=""
                        loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <div class="col-sm-12 col-md-6 partner-desktop">
                    <div class="row">
                        @foreach($footer as $o)
                        <div class="col-sm-12 col-md-4 partner-wrap">
                            <img src="{{ asset('img/'.$o->image.'') }}" class="img-fluid">
                        </div>
                        @endforeach
                    </div>

                </div>

                <div class="col-12 partner-mobile">
                    <div class="row">
                        @foreach($footer as $o)
                        <div class="col-6 partner-wrap">
                            <img src="{{ asset('img/'.$o->image.'') }}" class="img-fluid">
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <div class="credit">
        <p>&copy; {{ $credit }}</p>
    </div>
    <!-- ============================================================END Footer============================================================ -->