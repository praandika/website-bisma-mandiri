    <!-- ============================================================Header============================================================ -->
    <header class="header-desktop fadeIn">
        <!-- Desktop Nav -->
        <nav id="navigation">
            <div class="container">
                <div class="row text-center">
                    <div class="col-2 logo">
                        <img src="{{ asset('img/'.$logo.'') }}" class="img-fluid">
                    </div>
                    <div class="col-8 menu-wrap menu">
                        @foreach($header as $o)
                        <a class="menulist" href="{{ $o->link }}" @if($o->newtab == 1) target="_blank" @endif>{{ $o->menu }}</a>
                        @endforeach
                    </div>
                    <div class="col-2 menu-wrap">
                        <a href="#sales" class="button-order"><i class="fa-brands fa-whatsapp fa-shake"></i> Order
                            Now!</a>
                    </div>
                </div>
            </div>
        </nav>
        <!-- END Desktop Nav -->
    </header>

    <div class="header-mobile">
        <div id="mobileHeader">
            <!-- Mobile Header -->
            <img src="{{ asset('img/'.$logoMobile.'') }}" class="img-fluid">
            <!-- END Mobile Header -->
        </div>
    </div>

    <div class="menu-mobile fadeInBawah" id="navigation-mobile">
        <div class="row">
            @foreach($header as $o)
            <div class="col-3">
                <a class="menulist" href="{{ $o->link }}" @if($o->newtab == 1) target="_blank" @endif>
                    {!! $o->icon !!}
                    <span>{{ $o->menu }}</span>
                </a>
            </div>
            @endforeach
        </div>
    </div>
    <!-- ============================================================END Header============================================================ -->