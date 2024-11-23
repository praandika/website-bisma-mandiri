    <!-- ============================================================Marketplace============================================================ -->
    <div class="marketplace fadeInKanan marketplace-desktop">
        <span>Kami ada di</span>
        @foreach($marketplace_widget as $o)
        <a href="{{ $o->link }}" class="{{ strtolower($o->marketplace) }}" target="_blank">
            <img src="{{ asset('img/'.$o->image.'') }}" class="img-fluid"> {{ $o->show_title == 'show' ? ucwords($o->marketplace) : '' }}
        </a>
        @endforeach
    </div>

    @foreach($marketplace_widget as $o)
    <div class="{{ strtolower($o->marketplace) }}-mobile marketplace-mobile fadeInKiri">
        <a href="{{ $o->link }}" target="_blank">
            <img src="{{ asset('img/'.$o->image_mobile.'') }}" class="img-fluid">
            <span>{{ $o->show_title_mobile == 'show' ? ucwords($o->marketplace_abbr) : '' }}</span>
        </a>
    </div>
    @endforeach
    <!-- ============================================================END Marketplace============================================================ -->