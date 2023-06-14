    <!-- ============================================================Contact Widget============================================================ -->
    <div class="contact-widget fadeInKiri">
        @foreach($contact_widget as $o)
        <a href="{{ $o->link }}" class="contact {{ strtolower($o->media_social) }}" @if($o->newtab == 1) target="_blank" @endif>
            <i class="fa-brands fa-{{ strtolower($o->media_social) }}" style="color: #ffffff;"></i>
        </a>
        @endforeach
    </div>

    <div class="contact-widget-mobile fadeInKanan display-widget-mobile">
        <div class="whatsapp-mobile" id="contact-widget-mobile" onclick="showBuble()">
            <i class="fa-brands fa-whatsapp fa-shake" style="color: #ffffff;"></i>
        </div>

        @foreach($contact_widget_mobile as $o)
        <div class="{{ strtolower($o->media_social) }}-mobile">
            <a href="{{ $o->link }}" @if($o->newtab == 1) target="_blank" @endif>
                <i class="fa-brands fa-{{ strtolower($o->media_social) }} fa-shake" style="color: #ffffff;"></i>
            </a>
        </div>
        @endforeach
    </div>

    <div class="sales-buble-wrap">
        @foreach($sales as $o)
        <div class="sales-buble fadeInBawah hide">
            <a href="https://wa.me/{{ $o->phone }}?text={{ $o->message }}" target="_blank">
                <img src="{{ asset('img/'.$o->image.'') }}" class="img-fluid mx-auto d-block rounded-circle">
            </a>
        </div>
        @endforeach
    </div>
    <!-- ============================================================END Contact Widget============================================================ -->