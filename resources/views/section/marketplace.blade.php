    <!-- ============================================================Marketplace============================================================ -->
    <div class="marketplace fadeInKanan marketplace-desktop">
        <span>Kami ada di</span>
        @foreach($marketplace_widget as $o)
        <a href="{{ $o->link }}" class="{{ $o->marketplace }}" target="_blank">
            <img src="{{ asset('img/'.$o->image.'') }}" class="img-fluid"> {{ ucwords($o->marketplace) }}
        </a>
        @endforeach
    </div>

    @foreach($marketplace_widget as $o)
    <div class="{{ $o->marketplace }}-mobile marketplace-mobile fadeInKiri">
        <a href="{{ $o->link }}" target="_blank">
            <img src="{{ asset('img/'.$o->image.'') }}" class="img-fluid">
            <span>{{ ucwords($o->marketplace_abbr) }}</span>
        </a>
    </div>
    @endforeach
    <!-- ============================================================END Marketplace============================================================ -->