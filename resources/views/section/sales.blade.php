    <!-- ============================================================Sales============================================================ -->
    <div class="sales" id="sales">
        <div class="container">
            <div class="row">
                @foreach($sales as $o)
                <div class="col-sm-12 col-md-4" style="margin-bottom: 20px;">
                    <a href="https://wa.me/{{ $o->phone }}?text={{ $o->message }}" class="fadeInKiri" target="_blank">
                        <div class="sales-wrap">
                            <img src="{{ asset('img/'.$o->image.'') }}" class="img-fluid mx-auto d-block fadeInKiri">
                            <span class="nomor fadeIn"><i class="fa-sharp fa-solid fa-phone fa-shake"
                                    style="color: #ffffff;"></i>
                                {{ wordwrap($o->phone_format, 4, "-", true); }}
                            </span>
                        </div>
                        <div class="name fadeIn">
                            {{ ucfirst($o->name) }}
                        </div>
                    </a>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- ============================================================END Sales============================================================ -->