    <!-- ============================================================Featured============================================================ -->
    <div class="featured" style="background-image: url('{{ asset('img/parallax4.png') }}');">
        <div class="featured-wrap featured-desktop">
            <img src="{{ asset('img/motor/filano-lux-white-pearl.png') }}" class="img-fluid">
            <div class="stage"></div>
            <div class="contentFeatured">
                <div class="pulse-btn pulse" id="smartKey" onmouseover="showSmartKey()" onmouseout="hideSmartKey()">
                </div>
                <div class="pulse-btn pulse" id="luggage" onmouseover="showLuggage()" onmouseout="hideLuggage()"></div>
                <div class="pulse-btn pulse" id="smartFrontRefuel" onmouseover="showFuel()" onmouseout="hideFuel()">
                </div>
                <div class="pulse-btn pulse" id="blueCore" onmouseover="showBlueCore()" onmouseout="hideBlueCore()">
                </div>
                <div class="pulse-btn pulse" id="seat" onmouseover="showSeat()" onmouseout="hideSeat()"></div>
                <div class="pulse-btn pulse" id="led" onmouseover="showLed()" onmouseout="hideLed()"></div>
                <div class="pulse-btn pulse" id="footstep" onmouseover="showFootStep()" onmouseout="hideFootStep()">
                </div>
                <div class="pulse-btn pulse" id="tire" onmouseover="showTire()" onmouseout="hideTire()"></div>
                <div class="pulse-btn pulse" id="speedo" onmouseover="showSpeedo()" onmouseout="hideSpeedo()"></div>

                <div class="popup hide" id="smartKeyContent">
                    <img src="{{ asset('img/motor/smart-key.jpg') }}" class="img-fluid">

                    <div class="description">
                        <span class="title">Smart Key System</span>
                        <p>
                            Berkendara semakin praktis dengan sistem kunci canggih tanpa anak kunci (keyless),
                            dilengkapi dengan fitur Answer Back System untuk memudahkan pengendara mencari lokasi parkir
                            motor.
                        </p>
                    </div>
                </div>

                <div class="popup hide" id="luggageContent">
                    <img src="{{ asset('img/motor/luggage.jpg') }}" class="img-fluid">

                    <div class="description">
                        <span class="title">Spacious Luggage 27L with LED Lamp</span>
                        <p>
                            Bagasi luas 27L yang dilengkapi dengan lampu LED untuk memuat berbagai perlengkapan
                            berkendara serta fashion item-mu!
                        </p>
                    </div>
                </div>

                <div class="popup hide" id="smartFrontRefuelContent">
                    <img src="{{ asset('img/motor/smart-front-refuel.jpg') }}" class="img-fluid">

                    <div class="description">
                        <span class="title">Smart Front Refuel</span>
                        <p>
                            Pengisian bensin lebih praktis tanpa membuka jok.
                        </p>
                    </div>
                </div>

                <div class="popup hide" id="blueCoreContent">
                    <img src="{{ asset('img/motor/blue-core.jpg') }}" class="img-fluid">

                    <div class="description">
                        <span class="title">Blue Core Hybrid 125cc</span>
                        <p>
                            Mesin Blue Core 125cc generasi terbaru yang memberikan pengalaman berkendara lebih
                            bertenaga, ramah lingkungan dan handal. Dilengkapi dengan Electric Power Assist Start yang
                            membuat akselerasi awal lebih bertenaga dan halus khususnya di tanjakan dan saat
                            berboncengan.
                        </p>
                    </div>
                </div>

                <div class="popup hide" id="seatContent">
                    <img src="{{ asset('img/motor/premium-seat.jpg') }}" class="img-fluid">

                    <div class="description">
                        <span class="title">Premium Seat with Embroidery Style</span>
                        <p>
                            Desain jok yang semakin berkelas dengan warna premium dan tekstur bordir yang unik.
                        </p>
                    </div>
                </div>

                <div class="popup hide" id="ledContent">
                    <img src="{{ asset('img/motor/led.jpg') }}" class="img-fluid">

                    <div class="description">
                        <span class="title">All New LED Lighting System</span>
                        <p>
                            Seluruh sistem pencahayaan sudah menggunakan LED seperti Diamond Shaped LED Headlight,
                            Unique LED Position Light, Front & Rear LED Turn Signals, LED Tailight & LED Lamp pada
                            bagasi.
                        </p>
                    </div>
                </div>

                <div class="popup hide" id="footstepContent">
                    <img src="{{ asset('img/motor/footstep.jpg') }}" class="img-fluid">

                    <div class="description">
                        <span class="title">Convenience Footstep</span>
                        <p>
                            Desain footstep yang lebih luas untuk kenyamanan saat berboncengan.
                        </p>
                    </div>
                </div>

                <div class="popup hide" id="tireContent">
                    <img src="{{ asset('img/motor/wide-tire.jpg') }}" class="img-fluid">

                    <div class="description">
                        <span class="title">Wide Tire & Tubeless</span>
                        <p>
                            Ukuran ban depan dan ban belakang 110/70 - 12" untuk memberikan kenyamanan berkendara.
                        </p>
                    </div>
                </div>

                <div class="popup hide" id="speedoContent">
                    <img src="{{ asset('img/motor/speedo.jpg') }}" class="img-fluid">

                    <div class="description">
                        <span class="title">Digital Speedometer with TFT Sub Display</span>
                        <p>
                            Pertama dikelasnya! Digital speedometer yang semakin informatif dengan tampilan berwarna dan
                            animasi seperti Welcome-Goodbye Message, Odometer, Fuel Consumption, & Power Assist
                            Indicator.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="featured-wrap featured-mobile">
            <div id="carouselAutoplaying" class="carousel slide banner" data-bs-ride="carousel">
                <div class="carousel-inner">
                    @foreach($featured as $o)
                    <div class="carousel-item {{ $o->id == $active[0] ? 'active' : '' }}">
                        <div class="featured-product">
                            <div class="title">{{ ucwords($o->name) }}</div>
                            <img src="{{ asset('img/'.$o->image) }}" class="img-fluid">
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <!-- ============================================================END Featured============================================================ -->