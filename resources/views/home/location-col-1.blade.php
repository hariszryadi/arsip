<div class="col-lg" style="position: relative;">
    <div class="box"></div>
    <div class="box"></div>
    <div class="box-half">
        <div style="margin-top: 48px; margin-left: 120px;">
            @php
                $rack = $rack->where('type', 'S')->where('no_rack', '001')->first();
                $html = '<p class="spacer"><span>Kode Rak</span>: R.' . $rack->floor . '.' . $rack->type . '.' . $rack->no_rack .'</p>
                        <p class="spacer"><span>Terpakai</span>: ' . $rack->used . '</p>
                        <p class="spacer"><span>Kapasitas</span>: ' . $rack->capacity .'</p>';
            @endphp
            <div class="card card-box third-card" data-toggle="tooltip" data-html="true" title="{{ $html }}">
                <div class="card-body align-items-center d-flex justify-content-center" style="height: 50px; line-height: 50px;">
                    1
                </div>
            </div>
            @php
                $rack = $rack->where('type', 'S')->where('no_rack', '002')->first();
                $html = '<p class="spacer"><span>Kode Rak</span>: R.' . $rack->floor . '.' . $rack->type . '.' . $rack->no_rack .'</p>
                        <p class="spacer"><span>Terpakai</span>: ' . $rack->used . '</p>
                        <p class="spacer"><span>Kapasitas</span>: ' . $rack->capacity .'</p>';
            @endphp
            <div class="card card-box third-card" data-toggle="tooltip" data-html="true" title="{{ $html }}">
                <div class="card-body align-items-center d-flex justify-content-center" style="height: 50px; line-height: 50px;">
                    2
                </div>
            </div>
        </div>
    </div>
</div>