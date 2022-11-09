<div class="col-lg" style="display: flex; margin: 24px 0;">
    <div>
        <div style="display: flex;">
            @php
                $rack = $rack->where('type', 'S')->where('no_rack', '018')->first();
                $html = '<p class="spacer"><span>Kode Rak</span>: R.' . $rack->floor . '.' . $rack->type . '.' . $rack->no_rack .'</p>
                        <p class="spacer"><span>Terpakai</span>: ' . $rack->used . '</p>
                        <p class="spacer"><span>Kapasitas</span>: ' . $rack->capacity .'</p>';
            @endphp
            <div class="card card-box card-inline first-card" data-toggle="tooltip" data-html="true" title="{{ $html }}">
                <div class="card-body align-items-center d-flex justify-content-center" style="height: 100px; line-height: 100px;">
                    18
                </div>
            </div>
            @php
                $rack = $rack->where('type', 'S')->where('no_rack', '028')->first();
                $html = '<p class="spacer"><span>Kode Rak</span>: R.' . $rack->floor . '.' . $rack->type . '.' . $rack->no_rack .'</p>
                        <p class="spacer"><span>Terpakai</span>: ' . $rack->used . '</p>
                        <p class="spacer"><span>Kapasitas</span>: ' . $rack->capacity .'</p>';
            @endphp
            <div class="card card-box card-inline first-card" data-toggle="tooltip" data-html="true" title="{{ $html }}">
                <div class="card-body align-items-center d-flex justify-content-center" style="height: 100px; line-height: 100px;">
                    28
                </div>
            </div>
        </div>
        <br>
        <div class="mt-2" style="position: relative;">
            @php
                $rack = $rack->where('type', 'S')->where('no_rack', '019')->first();
                $html = '<p class="spacer"><span>Kode Rak</span>: R.' . $rack->floor . '.' . $rack->type . '.' . $rack->no_rack .'</p>
                        <p class="spacer"><span>Terpakai</span>: ' . $rack->used . '</p>
                        <p class="spacer"><span>Kapasitas</span>: ' . $rack->capacity .'</p>';
            @endphp
            <div class="card card-box first-card" style="position: absolute; left: 0; top: 110px;" data-toggle="tooltip" data-html="true" title="{{ $html }}">
                <div class="card-body align-items-center d-flex justify-content-center" style="height: 100px; line-height: 100px;">
                    19
                </div>
            </div>
        </div>
        <br>
        <div class="mt-2" style="position: relative;">
            @php
                $rack = $rack->where('type', 'S')->where('no_rack', '020')->first();
                $html = '<p class="spacer"><span>Kode Rak</span>: R.' . $rack->floor . '.' . $rack->type . '.' . $rack->no_rack .'</p>
                        <p class="spacer"><span>Terpakai</span>: ' . $rack->used . '</p>
                        <p class="spacer"><span>Kapasitas</span>: ' . $rack->capacity .'</p>';
            @endphp
            <div class="card card-box first-card" style="position: absolute; left: 0; top: 177px;" data-toggle="tooltip" data-html="true" title="{{ $html }}">
                <div class="card-body align-items-center d-flex justify-content-center" style="height: 100px; line-height: 100px;">
                    20
                </div>
            </div>
        </div>
        <br>
        <div class="mt-2" style="position: relative;">
            @php
                $rack = $rack->where('type', 'S')->where('no_rack', '021')->first();
                $html = '<p class="spacer"><span>Kode Rak</span>: R.' . $rack->floor . '.' . $rack->type . '.' . $rack->no_rack .'</p>
                        <p class="spacer"><span>Terpakai</span>: ' . $rack->used . '</p>
                        <p class="spacer"><span>Kapasitas</span>: ' . $rack->capacity .'</p>';
            @endphp
            <div class="card card-box first-card" style="position: absolute; left: 0; top: 244px;" data-toggle="tooltip" data-html="true" title="{{ $html }}">
                <div class="card-body align-items-center d-flex justify-content-center" style="height: 100px; line-height: 100px;">
                    21
                </div>
            </div>
        </div>
        <br>
        <div class="mt-2" style="display: flex; margin-left: -24px;">
            @php
                $rack = $rack->where('type', 'S')->where('no_rack', '022')->first();
                $html = '<p class="spacer"><span>Kode Rak</span>: R.' . $rack->floor . '.' . $rack->type . '.' . $rack->no_rack .'</p>
                        <p class="spacer"><span>Terpakai</span>: ' . $rack->used . '</p>
                        <p class="spacer"><span>Kapasitas</span>: ' . $rack->capacity .'</p>';
            @endphp
            <div class="card card-box card-inline first-card" style="positon: absolute; left: 0; top: 364px;" data-toggle="tooltip" data-html="true" title="{{ $html }}">
                <div class="card-body align-items-center d-flex justify-content-center" style="height: 100px; line-height:100px;">
                    22
                </div>
            </div>
            @php
                $rack = $rack->where('type', 'S')->where('no_rack', '023')->first();
                $html = '<p class="spacer"><span>Kode Rak</span>: R.' . $rack->floor . '.' . $rack->type . '.' . $rack->no_rack .'</p>
                        <p class="spacer"><span>Terpakai</span>: ' . $rack->used . '</p>
                        <p class="spacer"><span>Kapasitas</span>: ' . $rack->capacity .'</p>';
            @endphp
            <div class="card card-box card-inline first-card" style="positon: absolute; left: 0; top: 364px;" data-toggle="tooltip" data-html="true" title="{{ $html }}">
                <div class="card-body align-items-center d-flex justify-content-center" style="height: 100px; line-height:100px;">
                    23
                </div>
            </div>
        </div>
    </div>
    
    <div style="margin-left: 52px;">
        <div class="box-small-1"></div>
        <div class="box-small-2"></div>
        <div style="position: relative;">
            @php
                $rack = $rack->where('type', 'S')->where('no_rack', '029')->first();
                $html = '<p class="spacer"><span>Kode Rak</span>: R.' . $rack->floor . '.' . $rack->type . '.' . $rack->no_rack .'</p>
                        <p class="spacer"><span>Terpakai</span>: ' . $rack->used . '</p>
                        <p class="spacer"><span>Kapasitas</span>: ' . $rack->capacity .'</p>';
            @endphp
            <div class="card card-box first-card" style="position: absolute; left: 0; top: 60px;" data-toggle="tooltip" data-html="true" title="{{ $html }}">
                <div class="card-body align-items-center d-flex justify-content-center" style="height: 100px; line-height:100px;">
                    29
                </div>
            </div>
        </div>
        <br>
        <div style="position: relative;">
            @php
                $rack = $rack->where('type', 'S')->where('no_rack', '027')->first();
                $html = '<p class="spacer"><span>Kode Rak</span>: R.' . $rack->floor . '.' . $rack->type . '.' . $rack->no_rack .'</p>
                        <p class="spacer"><span>Terpakai</span>: ' . $rack->used . '</p>
                        <p class="spacer"><span>Kapasitas</span>: ' . $rack->capacity .'</p>';
            @endphp
            <div class="card card-box card-inline first-card" style="position: absolute; left: -35px; top: 238px;" data-toggle="tooltip" data-html="true" title="{{ $html }}">
                <div class="card-body align-items-center d-flex justify-content-center" style="height: 100px; line-height:100px;">
                    27
                </div>
            </div>
            @php
                $rack = $rack->where('type', 'S')->where('no_rack', '030')->first();
                $html = '<p class="spacer"><span>Kode Rak</span>: R.' . $rack->floor . '.' . $rack->type . '.' . $rack->no_rack .'</p>
                        <p class="spacer"><span>Terpakai</span>: ' . $rack->used . '</p>
                        <p class="spacer"><span>Kapasitas</span>: ' . $rack->capacity .'</p>';
            @endphp
            <div class="card card-box card-inline first-card" style="position: absolute; left: 0; top: 238px;" data-toggle="tooltip" data-html="true" title="{{ $html }}">
                <div class="card-body align-items-center d-flex justify-content-center" style="height: 100px; line-height:100px;">
                    30
                </div>
            </div>
        </div>
        <br>
        <div style="position: relative;">
            @php
                $rack = $rack->where('type', 'S')->where('no_rack', '026')->first();
                $html = '<p class="spacer"><span>Kode Rak</span>: R.' . $rack->floor . '.' . $rack->type . '.' . $rack->no_rack .'</p>
                        <p class="spacer"><span>Terpakai</span>: ' . $rack->used . '</p>
                        <p class="spacer"><span>Kapasitas</span>: ' . $rack->capacity .'</p>';
            @endphp
            <div class="card card-box card-inline first-card" style="position: absolute; left: -35px; top: 315px;" data-toggle="tooltip" data-html="true" title="{{ $html }}">
                <div class="card-body align-items-center d-flex justify-content-center" style="height: 100px; line-height:100px;">
                    26
                </div>
            </div>
            @php
                $rack = $rack->where('type', 'S')->where('no_rack', '031')->first();
                $html = '<p class="spacer"><span>Kode Rak</span>: R.' . $rack->floor . '.' . $rack->type . '.' . $rack->no_rack .'</p>
                        <p class="spacer"><span>Terpakai</span>: ' . $rack->used . '</p>
                        <p class="spacer"><span>Kapasitas</span>: ' . $rack->capacity .'</p>';
            @endphp
            <div class="card card-box card-inline first-card" style="position: absolute; left: 0; top: 315px;" data-toggle="tooltip" data-html="true" title="{{ $html }}">
                <div class="card-body align-items-center d-flex justify-content-center" style="height: 100px; line-height:100px;">
                    31
                </div>
            </div>
        </div>
        <br>
        <div style="position: relative;">
            @php
                $rack = $rack->where('type', 'S')->where('no_rack', '025')->first();
                $html = '<p class="spacer"><span>Kode Rak</span>: R.' . $rack->floor . '.' . $rack->type . '.' . $rack->no_rack .'</p>
                        <p class="spacer"><span>Terpakai</span>: ' . $rack->used . '</p>
                        <p class="spacer"><span>Kapasitas</span>: ' . $rack->capacity .'</p>';
            @endphp
            <div class="card card-box card-inline first-card" style="position: absolute; left: -35px; top: 392px;" data-toggle="tooltip" data-html="true" title="{{ $html }}">
                <div class="card-body align-items-center d-flex justify-content-center" style="height: 100px; line-height:100px;">
                    25
                </div>
            </div>
            @php
                $rack = $rack->where('type', 'S')->where('no_rack', '032')->first();
                $html = '<p class="spacer"><span>Kode Rak</span>: R.' . $rack->floor . '.' . $rack->type . '.' . $rack->no_rack .'</p>
                        <p class="spacer"><span>Terpakai</span>: ' . $rack->used . '</p>
                        <p class="spacer"><span>Kapasitas</span>: ' . $rack->capacity .'</p>';
            @endphp
            <div class="card card-box card-inline first-card" style="position: absolute; left: 0; top: 392px;" data-toggle="tooltip" data-html="true" title="{{ $html }}">
                <div class="card-body align-items-center d-flex justify-content-center" style="height: 100px; line-height:100px;">
                    32
                </div>
            </div>
        </div>
        <br>
        <div style="position: relative;">
            @php
                $rack = $rack->where('type', 'S')->where('no_rack', '024')->first();
                $html = '<p class="spacer"><span>Kode Rak</span>: R.' . $rack->floor . '.' . $rack->type . '.' . $rack->no_rack .'</p>
                        <p class="spacer"><span>Terpakai</span>: ' . $rack->used . '</p>
                        <p class="spacer"><span>Kapasitas</span>: ' . $rack->capacity .'</p>';
            @endphp
            <div class="card card-box card-inline first-card" style="position: absolute; left: -35px; top: 523px;" data-toggle="tooltip" data-html="true" title="{{ $html }}">
                <div class="card-body align-items-center d-flex justify-content-center" style="height: 100px; line-height:100px;">
                    24
                </div>
            </div>
            @php
                $rack = $rack->where('type', 'S')->where('no_rack', '033')->first();
                $html = '<p class="spacer"><span>Kode Rak</span>: R.' . $rack->floor . '.' . $rack->type . '.' . $rack->no_rack .'</p>
                        <p class="spacer"><span>Terpakai</span>: ' . $rack->used . '</p>
                        <p class="spacer"><span>Kapasitas</span>: ' . $rack->capacity .'</p>';
            @endphp
            <div class="card card-box card-inline first-card" style="position: absolute; left: 0; top: 523px;" data-toggle="tooltip" data-html="true" title="{{ $html }}">
                <div class="card-body align-items-center d-flex justify-content-center" style="height: 100px; line-height:100px;">
                    33
                </div>
            </div>
        </div>
    </div>
</div>