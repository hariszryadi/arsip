<div class="col-lg" style="display: flex; margin: 24px 0;">
    <div>
        <div style="display: flex;">
            @php
                $rack = $rack->where('type', 'S')->where('no_rack', '007')->first();
                $html = '<p class="spacer"><span>Kode Rak</span>: R.' . $rack->floor . '.' . $rack->type . '.' . $rack->no_rack .'</p>
                        <p class="spacer"><span>Terpakai</span>: ' . $rack->used . '</p>
                        <p class="spacer"><span>Kapasitas</span>: ' . $rack->capacity .'</p>';
            @endphp
            <div class="card card-box card-inline first-card" data-toggle="tooltip" data-html="true" title="{{ $html }}">
                <div class="card-body align-items-center d-flex justify-content-center" style="height: 100px; line-height: 100px;">
                    7
                </div>
            </div>
            @php
                $rack = $rack->where('type', 'S')->where('no_rack', '008')->first();
                $html = '<p class="spacer"><span>Kode Rak</span>: R.' . $rack->floor . '.' . $rack->type . '.' . $rack->no_rack .'</p>
                        <p class="spacer"><span>Terpakai</span>: ' . $rack->used . '</p>
                        <p class="spacer"><span>Kapasitas</span>: ' . $rack->capacity .'</p>';
            @endphp
            <div class="card card-box card-inline first-card" data-toggle="tooltip" data-html="true" title="{{ $html }}">
                <div class="card-body align-items-center d-flex justify-content-center" style="height: 100px; line-height: 100px;">
                    8
                </div>
            </div>
        </div>
        <br>
        <div style="display: flex; margin-top: -12px;">
            @php
                $rack = $rack->where('type', 'S')->where('no_rack', '006')->first();
                $html = '<p class="spacer"><span>Kode Rak</span>: R.' . $rack->floor . '.' . $rack->type . '.' . $rack->no_rack .'</p>
                        <p class="spacer"><span>Terpakai</span>: ' . $rack->used . '</p>
                        <p class="spacer"><span>Kapasitas</span>: ' . $rack->capacity .'</p>';
            @endphp
            <div class="card card-box card-inline first-card" data-toggle="tooltip" data-html="true" title="{{ $html }}">
                <div class="card-body align-items-center d-flex justify-content-center" style="height: 100px; line-height: 100px;">
                    6
                </div>
            </div>
            @php
                $rack = $rack->where('type', 'S')->where('no_rack', '009')->first();
                $html = '<p class="spacer"><span>Kode Rak</span>: R.' . $rack->floor . '.' . $rack->type . '.' . $rack->no_rack .'</p>
                        <p class="spacer"><span>Terpakai</span>: ' . $rack->used . '</p>
                        <p class="spacer"><span>Kapasitas</span>: ' . $rack->capacity .'</p>';
            @endphp
            <div class="card card-box card-inline first-card" data-toggle="tooltip" data-html="true" title="{{ $html }}">
                <div class="card-body align-items-center d-flex justify-content-center" style="height: 100px; line-height: 100px;">
                    9
                </div>
            </div>
        </div>
        <br>
        <div style="display: flex; margin-top: -12px;">
            @php
                $rack = $rack->where('type', 'S')->where('no_rack', '005')->first();
                $html = '<p class="spacer"><span>Kode Rak</span>: R.' . $rack->floor . '.' . $rack->type . '.' . $rack->no_rack .'</p>
                        <p class="spacer"><span>Terpakai</span>: ' . $rack->used . '</p>
                        <p class="spacer"><span>Kapasitas</span>: ' . $rack->capacity .'</p>';
            @endphp
            <div class="card card-box card-inline first-card" data-toggle="tooltip" data-html="true" title="{{ $html }}">
                <div class="card-body align-items-center d-flex justify-content-center" style="height: 100px; line-height: 100px;">
                    5
                </div>
            </div>
            @php
                $rack = $rack->where('type', 'S')->where('no_rack', '010')->first();
                $html = '<p class="spacer"><span>Kode Rak</span>: R.' . $rack->floor . '.' . $rack->type . '.' . $rack->no_rack .'</p>
                        <p class="spacer"><span>Terpakai</span>: ' . $rack->used . '</p>
                        <p class="spacer"><span>Kapasitas</span>: ' . $rack->capacity .'</p>';
            @endphp
            <div class="card card-box card-inline first-card" data-toggle="tooltip" data-html="true" title="{{ $html }}">
                <div class="card-body align-items-center d-flex justify-content-center" style="height: 100px; line-height: 100px;">
                    10
                </div>
            </div>
        </div>
        <br>
        <div style="display: flex; margin-top: -12px;">
            @php
                $rack = $rack->where('type', 'S')->where('no_rack', '004')->first();
                $html = '<p class="spacer"><span>Kode Rak</span>: R.' . $rack->floor . '.' . $rack->type . '.' . $rack->no_rack .'</p>
                        <p class="spacer"><span>Terpakai</span>: ' . $rack->used . '</p>
                        <p class="spacer"><span>Kapasitas</span>: ' . $rack->capacity .'</p>';
            @endphp
            <div class="card card-box card-inline second-card" data-toggle="tooltip" data-html="true" title="{{ $html }}">
                <div class="card-body align-items-center d-flex justify-content-center" style="height: 150px; line-height: 150px;">
                    4
                </div>
            </div>
            @php
                $rack = $rack->where('type', 'S')->where('no_rack', '011')->first();
                $html = '<p class="spacer"><span>Kode Rak</span>: R.' . $rack->floor . '.' . $rack->type . '.' . $rack->no_rack .'</p>
                        <p class="spacer"><span>Terpakai</span>: ' . $rack->used . '</p>
                        <p class="spacer"><span>Kapasitas</span>: ' . $rack->capacity .'</p>';
            @endphp
            <div class="card card-box card-inline second-card" data-toggle="tooltip" data-html="true" title="{{ $html }}">
                <div class="card-body align-items-center d-flex justify-content-center" style="height: 150px; line-height: 150px;">
                    11
                </div>
            </div>
        </div>
        <br>
        <div style="display: flex; margin-top: -12px;">
            @php
                $rack = $rack->where('type', 'S')->where('no_rack', '003')->first();
                $html = '<p class="spacer"><span>Kode Rak</span>: R.' . $rack->floor . '.' . $rack->type . '.' . $rack->no_rack .'</p>
                        <p class="spacer"><span>Terpakai</span>: ' . $rack->used . '</p>
                        <p class="spacer"><span>Kapasitas</span>: ' . $rack->capacity .'</p>';
            @endphp
            <div class="card card-box card-inline second-card" data-toggle="tooltip" data-html="true" title="{{ $html }}">
                <div class="card-body align-items-center d-flex justify-content-center" style="height: 150px; line-height: 150px;">
                    3
                </div>
            </div>
            @php
                $rack = $rack->where('type', 'S')->where('no_rack', '012')->first();
                $html = '<p class="spacer"><span>Kode Rak</span>: R.' . $rack->floor . '.' . $rack->type . '.' . $rack->no_rack .'</p>
                        <p class="spacer"><span>Terpakai</span>: ' . $rack->used . '</p>
                        <p class="spacer"><span>Kapasitas</span>: ' . $rack->capacity .'</p>';
            @endphp
            <div class="card card-box card-inline second-card" data-toggle="tooltip" data-html="true" title="{{ $html }}">
                <div class="card-body align-items-center d-flex justify-content-center" style="height: 150px; line-height: 150px;">
                    12
                </div>
            </div>
        </div>
    </div>
    <div style="margin-left: 24px;">
        <div>
            @php
                $rack = $rack->where('type', 'S')->where('no_rack', '017')->first();
                $html = '<p class="spacer"><span>Kode Rak</span>: R.' . $rack->floor . '.' . $rack->type . '.' . $rack->no_rack .'</p>
                        <p class="spacer"><span>Terpakai</span>: ' . $rack->used . '</p>
                        <p class="spacer"><span>Kapasitas</span>: ' . $rack->capacity .'</p>';
            @endphp
            <div class="card card-box first-card" data-toggle="tooltip" data-html="true" title="{{ $html }}">
                <div class="card-body align-items-center d-flex justify-content-center" style="height: 100px; line-height: 100px;">
                    17
                </div>
            </div>
        </div>
        <br>
        <div style="margin-top: -12px;">
            @php
                $rack = $rack->where('type', 'S')->where('no_rack', '016')->first();
                $html = '<p class="spacer"><span>Kode Rak</span>: R.' . $rack->floor . '.' . $rack->type . '.' . $rack->no_rack .'</p>
                        <p class="spacer"><span>Terpakai</span>: ' . $rack->used . '</p>
                        <p class="spacer"><span>Kapasitas</span>: ' . $rack->capacity .'</p>';
            @endphp
            <div class="card card-box first-card" data-toggle="tooltip" data-html="true" title="{{ $html }}">
                <div class="card-body align-items-center d-flex justify-content-center" style="height: 100px; line-height: 100px;">
                    16
                </div>
            </div>
        </div>
        <br>
        <div style="margin-top: -12px;">
            @php
                $rack = $rack->where('type', 'S')->where('no_rack', '015')->first();
                $html = '<p class="spacer"><span>Kode Rak</span>: R.' . $rack->floor . '.' . $rack->type . '.' . $rack->no_rack .'</p>
                        <p class="spacer"><span>Terpakai</span>: ' . $rack->used . '</p>
                        <p class="spacer"><span>Kapasitas</span>: ' . $rack->capacity .'</p>';
            @endphp
            <div class="card card-box first-card" data-toggle="tooltip" data-html="true" title="{{ $html }}">
                <div class="card-body align-items-center d-flex justify-content-center" style="height: 100px; line-height: 100px;">
                    15
                </div>
            </div>
        </div>
        <br>
        <div style="margin-top: -12px;">
            @php
                $rack = $rack->where('type', 'S')->where('no_rack', '014')->first();
                $html = '<p class="spacer"><span>Kode Rak</span>: R.' . $rack->floor . '.' . $rack->type . '.' . $rack->no_rack .'</p>
                        <p class="spacer"><span>Terpakai</span>: ' . $rack->used . '</p>
                        <p class="spacer"><span>Kapasitas</span>: ' . $rack->capacity .'</p>';
            @endphp
            <div class="card card-box second-card" data-toggle="tooltip" data-html="true" title="{{ $html }}">
                <div class="card-body align-items-center d-flex justify-content-center" style="height: 150px; line-height: 150px;">
                    14
                </div>
            </div>
        </div>
        <br>
        <div class="mt-4">
            @php
                $rack = $rack->where('type', 'S')->where('no_rack', '013')->first();
                $html = '<p class="spacer"><span>Kode Rak</span>: R.' . $rack->floor . '.' . $rack->type . '.' . $rack->no_rack .'</p>
                        <p class="spacer"><span>Terpakai</span>: ' . $rack->used . '</p>
                        <p class="spacer"><span>Kapasitas</span>: ' . $rack->capacity .'</p>';
            @endphp
            <div class="card card-box first-card" data-toggle="tooltip" data-html="true" title="{{ $html }}">
                <div class="card-body align-items-center d-flex justify-content-center" style="height: 100px; line-height: 100px;">
                    13
                </div>
            </div>
        </div>
    </div>
</div>