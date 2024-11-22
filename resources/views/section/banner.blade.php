    <!-- ============================================================Banner============================================================ -->
    <div id="carouselExampleAutoplaying" class="carousel slide banner banner-primary" data-bs-ride="carousel">
        <div class="carousel-inner">
            @forelse($banner as $o)
            <div class="carousel-item {{ $o->id == $active[0] ? 'active' : '' }}">
                <abbr title="{{ ucwords($o->name) }}">
                    <img src="{{ asset('img/'.$o->image.'') }}" class="d-block w-100">
                </abbr>
            </div>
            @empty
            <div class="carousel-item active">
                <abbr title="Main Banner">
                    <img src="{{ asset('img/main-banner.png') }}" class="d-block w-100">
                </abbr>
            </div>
            @endforelse
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <!-- ============================================================END Banner============================================================ -->