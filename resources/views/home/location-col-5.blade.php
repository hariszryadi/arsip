<div class="col-lg" style="padding-right: 14px !important; padding-left: 2px !important;">
    <div style="margin: 24px 0;">
        <div style="display: inline-block; padding: 0 7px;">
            <div style="display: flex;">
                @php
                    $rack = $rack->where('type', 'D')->where('no_rack', '021')->first();
                    $html = '<p class="spacer"><span>Kode Rak</span>: R.' . $rack->floor . '.' . $rack->type . '.' . $rack->no_rack .'</p>
                            <p class="spacer"><span>Terpakai</span>: ' . $rack->used . '</p>
                            <p class="spacer"><span>Kapasitas</span>: ' . $rack->capacity .'</p>';
                @endphp
                <div class="card card-box card-inline fourth-card" data-toggle="tooltip" data-html="true" title="{{ $html }}">
                    <div class="card-body align-items-center d-flex justify-content-center" style="height: 35px; line-height: 35px;">
                        21
                    </div>
                </div>
                @php
                    $rack = $rack->where('type', 'D')->where('no_rack', '020')->first();
                    $html = '<p class="spacer"><span>Kode Rak</span>: R.' . $rack->floor . '.' . $rack->type . '.' . $rack->no_rack .'</p>
                            <p class="spacer"><span>Terpakai</span>: ' . $rack->used . '</p>
                            <p class="spacer"><span>Kapasitas</span>: ' . $rack->capacity .'</p>';
                @endphp
                <div class="card card-box card-inline fourth-card" data-toggle="tooltip" data-html="true" title="{{ $html }}">
                    <div class="card-body align-items-center d-flex justify-content-center" style="height: 35px; line-height: 35px;">
                        20
                    </div>
                </div>
            </div>
            <div style="display: flex;">
                @php
                    $rack = $rack->where('type', 'D')->where('no_rack', '022')->first();
                    $html = '<p class="spacer"><span>Kode Rak</span>: R.' . $rack->floor . '.' . $rack->type . '.' . $rack->no_rack .'</p>
                            <p class="spacer"><span>Terpakai</span>: ' . $rack->used . '</p>
                            <p class="spacer"><span>Kapasitas</span>: ' . $rack->capacity .'</p>';
                @endphp
                <div class="card card-box card-inline fourth-card" data-toggle="tooltip" data-html="true" title="{{ $html }}">
                    <div class="card-body align-items-center d-flex justify-content-center" style="height: 35px; line-height: 35px;">
                        22
                    </div>
                </div>
                @php
                    $rack = $rack->where('type', 'D')->where('no_rack', '019')->first();
                    $html = '<p class="spacer"><span>Kode Rak</span>: R.' . $rack->floor . '.' . $rack->type . '.' . $rack->no_rack .'</p>
                            <p class="spacer"><span>Terpakai</span>: ' . $rack->used . '</p>
                            <p class="spacer"><span>Kapasitas</span>: ' . $rack->capacity .'</p>';
                @endphp
                <div class="card card-box card-inline fourth-card" data-toggle="tooltip" data-html="true" title="{{ $html }}">
                    <div class="card-body align-items-center d-flex justify-content-center" style="height: 35px; line-height: 35px;">
                        19
                    </div>
                </div>
            </div>
            <div style="display: flex;">
                @php
                    $rack = $rack->where('type', 'D')->where('no_rack', '023')->first();
                    $html = '<p class="spacer"><span>Kode Rak</span>: R.' . $rack->floor . '.' . $rack->type . '.' . $rack->no_rack .'</p>
                            <p class="spacer"><span>Terpakai</span>: ' . $rack->used . '</p>
                            <p class="spacer"><span>Kapasitas</span>: ' . $rack->capacity .'</p>';
                @endphp
                <div class="card card-box card-inline fourth-card" data-toggle="tooltip" data-html="true" title="{{ $html }}">
                    <div class="card-body align-items-center d-flex justify-content-center" style="height: 35px; line-height: 35px;">
                        23
                    </div>
                </div>
                @php
                    $rack = $rack->where('type', 'D')->where('no_rack', '018')->first();
                    $html = '<p class="spacer"><span>Kode Rak</span>: R.' . $rack->floor . '.' . $rack->type . '.' . $rack->no_rack .'</p>
                            <p class="spacer"><span>Terpakai</span>: ' . $rack->used . '</p>
                            <p class="spacer"><span>Kapasitas</span>: ' . $rack->capacity .'</p>';
                @endphp
                <div class="card card-box card-inline fourth-card" data-toggle="tooltip" data-html="true" title="{{ $html }}">
                    <div class="card-body align-items-center d-flex justify-content-center" style="height: 35px; line-height: 35px;">
                        18
                    </div>
                </div>
            </div>
            <div style="display: flex;">
                @php
                    $rack = $rack->where('type', 'D')->where('no_rack', '024')->first();
                    $html = '<p class="spacer"><span>Kode Rak</span>: R.' . $rack->floor . '.' . $rack->type . '.' . $rack->no_rack .'</p>
                            <p class="spacer"><span>Terpakai</span>: ' . $rack->used . '</p>
                            <p class="spacer"><span>Kapasitas</span>: ' . $rack->capacity .'</p>';
                @endphp
                <div class="card card-box card-inline fourth-card" data-toggle="tooltip" data-html="true" title="{{ $html }}">
                    <div class="card-body align-items-center d-flex justify-content-center" style="height: 35px; line-height: 35px;">
                        24
                    </div>
                </div>
                @php
                    $rack = $rack->where('type', 'D')->where('no_rack', '017')->first();
                    $html = '<p class="spacer"><span>Kode Rak</span>: R.' . $rack->floor . '.' . $rack->type . '.' . $rack->no_rack .'</p>
                            <p class="spacer"><span>Terpakai</span>: ' . $rack->used . '</p>
                            <p class="spacer"><span>Kapasitas</span>: ' . $rack->capacity .'</p>';
                @endphp
                <div class="card card-box card-inline fourth-card" data-toggle="tooltip" data-html="true" title="{{ $html }}">
                    <div class="card-body align-items-center d-flex justify-content-center" style="height: 35px; line-height: 35px;">
                        17
                    </div>
                </div>
            </div>
            <div style="display: flex;">
                @php
                    $rack = $rack->where('type', 'D')->where('no_rack', '025')->first();
                    $html = '<p class="spacer"><span>Kode Rak</span>: R.' . $rack->floor . '.' . $rack->type . '.' . $rack->no_rack .'</p>
                            <p class="spacer"><span>Terpakai</span>: ' . $rack->used . '</p>
                            <p class="spacer"><span>Kapasitas</span>: ' . $rack->capacity .'</p>';
                @endphp
                <div class="card card-box card-inline fiveth-card" data-toggle="tooltip" data-html="true" title="{{ $html }}">
                    <div class="card-body align-items-center d-flex justify-content-center" style="height: 35px; line-height: 35px;">
                        25
                    </div>
                </div>
                @php
                    $rack = $rack->where('type', 'D')->where('no_rack', '016')->first();
                    $html = '<p class="spacer"><span>Kode Rak</span>: R.' . $rack->floor . '.' . $rack->type . '.' . $rack->no_rack .'</p>
                            <p class="spacer"><span>Terpakai</span>: ' . $rack->used . '</p>
                            <p class="spacer"><span>Kapasitas</span>: ' . $rack->capacity .'</p>';
                @endphp
                <div class="card card-box card-inline fiveth-card" data-toggle="tooltip" data-html="true" title="{{ $html }}">
                    <div class="card-body align-items-center d-flex justify-content-center" style="height: 35px; line-height: 35px;">
                        16
                    </div>
                </div>
            </div>
        </div>
        <div style="display: inline-block; padding: 0 7px;">
            <div style="display: flex;">
                @php
                    $rack = $rack->where('type', 'D')->where('no_rack', '011')->first();
                    $html = '<p class="spacer"><span>Kode Rak</span>: R.' . $rack->floor . '.' . $rack->type . '.' . $rack->no_rack .'</p>
                            <p class="spacer"><span>Terpakai</span>: ' . $rack->used . '</p>
                            <p class="spacer"><span>Kapasitas</span>: ' . $rack->capacity .'</p>';
                @endphp
                <div class="card card-box card-inline fourth-card" data-toggle="tooltip" data-html="true" title="{{ $html }}">
                    <div class="card-body align-items-center d-flex justify-content-center" style="height: 35px; line-height: 35px;">
                        11
                    </div>
                </div>
                @php
                    $rack = $rack->where('type', 'D')->where('no_rack', '010')->first();
                    $html = '<p class="spacer"><span>Kode Rak</span>: R.' . $rack->floor . '.' . $rack->type . '.' . $rack->no_rack .'</p>
                            <p class="spacer"><span>Terpakai</span>: ' . $rack->used . '</p>
                            <p class="spacer"><span>Kapasitas</span>: ' . $rack->capacity .'</p>';
                @endphp
                <div class="card card-box card-inline fourth-card" data-toggle="tooltip" data-html="true" title="{{ $html }}">
                    <div class="card-body align-items-center d-flex justify-content-center" style="height: 35px; line-height: 35px;">
                        10
                    </div>
                </div>
            </div>
            <div style="display: flex;">
                @php
                    $rack = $rack->where('type', 'D')->where('no_rack', '012')->first();
                    $html = '<p class="spacer"><span>Kode Rak</span>: R.' . $rack->floor . '.' . $rack->type . '.' . $rack->no_rack .'</p>
                            <p class="spacer"><span>Terpakai</span>: ' . $rack->used . '</p>
                            <p class="spacer"><span>Kapasitas</span>: ' . $rack->capacity .'</p>';
                @endphp
                <div class="card card-box card-inline fourth-card" data-toggle="tooltip" data-html="true" title="{{ $html }}">
                    <div class="card-body align-items-center d-flex justify-content-center" style="height: 35px; line-height: 35px;">
                        12
                    </div>
                </div>
                @php
                    $rack = $rack->where('type', 'D')->where('no_rack', '009')->first();
                    $html = '<p class="spacer"><span>Kode Rak</span>: R.' . $rack->floor . '.' . $rack->type . '.' . $rack->no_rack .'</p>
                            <p class="spacer"><span>Terpakai</span>: ' . $rack->used . '</p>
                            <p class="spacer"><span>Kapasitas</span>: ' . $rack->capacity .'</p>';
                @endphp
                <div class="card card-box card-inline fourth-card" data-toggle="tooltip" data-html="true" title="{{ $html }}">
                    <div class="card-body align-items-center d-flex justify-content-center" style="height: 35px; line-height: 35px;">
                        9
                    </div>
                </div>
            </div>
            <div style="display: flex;">
                @php
                    $rack = $rack->where('type', 'D')->where('no_rack', '013')->first();
                    $html = '<p class="spacer"><span>Kode Rak</span>: R.' . $rack->floor . '.' . $rack->type . '.' . $rack->no_rack .'</p>
                            <p class="spacer"><span>Terpakai</span>: ' . $rack->used . '</p>
                            <p class="spacer"><span>Kapasitas</span>: ' . $rack->capacity .'</p>';
                @endphp
                <div class="card card-box card-inline fourth-card" data-toggle="tooltip" data-html="true" title="{{ $html }}">
                    <div class="card-body align-items-center d-flex justify-content-center" style="height: 35px; line-height: 35px;">
                        13
                    </div>
                </div>
                @php
                    $rack = $rack->where('type', 'D')->where('no_rack', '008')->first();
                    $html = '<p class="spacer"><span>Kode Rak</span>: R.' . $rack->floor . '.' . $rack->type . '.' . $rack->no_rack .'</p>
                            <p class="spacer"><span>Terpakai</span>: ' . $rack->used . '</p>
                            <p class="spacer"><span>Kapasitas</span>: ' . $rack->capacity .'</p>';
                @endphp
                <div class="card card-box card-inline fourth-card" data-toggle="tooltip" data-html="true" title="{{ $html }}">
                    <div class="card-body align-items-center d-flex justify-content-center" style="height: 35px; line-height: 35px;">
                        8
                    </div>
                </div>
            </div>
            <div style="display: flex;">
                @php
                    $rack = $rack->where('type', 'D')->where('no_rack', '014')->first();
                    $html = '<p class="spacer"><span>Kode Rak</span>: R.' . $rack->floor . '.' . $rack->type . '.' . $rack->no_rack .'</p>
                            <p class="spacer"><span>Terpakai</span>: ' . $rack->used . '</p>
                            <p class="spacer"><span>Kapasitas</span>: ' . $rack->capacity .'</p>';
                @endphp
                <div class="card card-box card-inline fourth-card" data-toggle="tooltip" data-html="true" title="{{ $html }}">
                    <div class="card-body align-items-center d-flex justify-content-center" style="height: 35px; line-height: 35px;">
                        14
                    </div>
                </div>
                @php
                    $rack = $rack->where('type', 'D')->where('no_rack', '007')->first();
                    $html = '<p class="spacer"><span>Kode Rak</span>: R.' . $rack->floor . '.' . $rack->type . '.' . $rack->no_rack .'</p>
                            <p class="spacer"><span>Terpakai</span>: ' . $rack->used . '</p>
                            <p class="spacer"><span>Kapasitas</span>: ' . $rack->capacity .'</p>';
                @endphp
                <div class="card card-box card-inline fourth-card" data-toggle="tooltip" data-html="true" title="{{ $html }}">
                    <div class="card-body align-items-center d-flex justify-content-center" style="height: 35px; line-height: 35px;">
                        7
                    </div>
                </div>
            </div>
            <div style="display: flex;">
                @php
                    $rack = $rack->where('type', 'D')->where('no_rack', '015')->first();
                    $html = '<p class="spacer"><span>Kode Rak</span>: R.' . $rack->floor . '.' . $rack->type . '.' . $rack->no_rack .'</p>
                            <p class="spacer"><span>Terpakai</span>: ' . $rack->used . '</p>
                            <p class="spacer"><span>Kapasitas</span>: ' . $rack->capacity .'</p>';
                @endphp
                <div class="card card-box card-inline fiveth-card" data-toggle="tooltip" data-html="true" title="{{ $html }}">
                    <div class="card-body align-items-center d-flex justify-content-center" style="height: 35px; line-height: 35px;">
                        15
                    </div>
                </div>
                @php
                    $rack = $rack->where('type', 'D')->where('no_rack', '006')->first();
                    $html = '<p class="spacer"><span>Kode Rak</span>: R.' . $rack->floor . '.' . $rack->type . '.' . $rack->no_rack .'</p>
                            <p class="spacer"><span>Terpakai</span>: ' . $rack->used . '</p>
                            <p class="spacer"><span>Kapasitas</span>: ' . $rack->capacity .'</p>';
                @endphp
                <div class="card card-box card-inline fiveth-card" data-toggle="tooltip" data-html="true" title="{{ $html }}">
                    <div class="card-body align-items-center d-flex justify-content-center" style="height: 35px; line-height: 35px;">
                        6
                    </div>
                </div>
            </div>
        </div>
        <div style="display: inline-block; padding: 0 7px;">
            <div style="display: flex;">
                @php
                    $rack = $rack->where('type', 'D')->where('no_rack', '001')->first();
                    $html = '<p class="spacer"><span>Kode Rak</span>: R.' . $rack->floor . '.' . $rack->type . '.' . $rack->no_rack .'</p>
                            <p class="spacer"><span>Terpakai</span>: ' . $rack->used . '</p>
                            <p class="spacer"><span>Kapasitas</span>: ' . $rack->capacity .'</p>';
                @endphp
                <div class="card card-box card-inline fourth-card" data-toggle="tooltip" data-html="true" title="{{ $html }}">
                    <div class="card-body align-items-center d-flex justify-content-center" style="height: 35px; line-height: 35px;">
                        1
                    </div>
                </div>
            </div>
            <div style="display: flex;">
                @php
                    $rack = $rack->where('type', 'D')->where('no_rack', '002')->first();
                    $html = '<p class="spacer"><span>Kode Rak</span>: R.' . $rack->floor . '.' . $rack->type . '.' . $rack->no_rack .'</p>
                            <p class="spacer"><span>Terpakai</span>: ' . $rack->used . '</p>
                            <p class="spacer"><span>Kapasitas</span>: ' . $rack->capacity .'</p>';
                @endphp
                <div class="card card-box card-inline fourth-card" data-toggle="tooltip" data-html="true" title="{{ $html }}">
                    <div class="card-body align-items-center d-flex justify-content-center" style="height: 35px; line-height: 35px;">
                        2
                    </div>
                </div>
            </div>
            <div style="display: flex;">
                @php
                    $rack = $rack->where('type', 'D')->where('no_rack', '003')->first();
                    $html = '<p class="spacer"><span>Kode Rak</span>: R.' . $rack->floor . '.' . $rack->type . '.' . $rack->no_rack .'</p>
                            <p class="spacer"><span>Terpakai</span>: ' . $rack->used . '</p>
                            <p class="spacer"><span>Kapasitas</span>: ' . $rack->capacity .'</p>';
                @endphp
                <div class="card card-box card-inline fourth-card" data-toggle="tooltip" data-html="true" title="{{ $html }}">
                    <div class="card-body align-items-center d-flex justify-content-center" style="height: 35px; line-height: 35px;">
                        3
                    </div>
                </div>
            </div>
            <div style="display: flex;">
                @php
                    $rack = $rack->where('type', 'D')->where('no_rack', '004')->first();
                    $html = '<p class="spacer"><span>Kode Rak</span>: R.' . $rack->floor . '.' . $rack->type . '.' . $rack->no_rack .'</p>
                            <p class="spacer"><span>Terpakai</span>: ' . $rack->used . '</p>
                            <p class="spacer"><span>Kapasitas</span>: ' . $rack->capacity .'</p>';
                @endphp
                <div class="card card-box card-inline fourth-card" data-toggle="tooltip" data-html="true" title="{{ $html }}">
                    <div class="card-body align-items-center d-flex justify-content-center" style="height: 35px; line-height: 35px;">
                        4
                    </div>
                </div>
            </div>
            <div style="display: flex;">
                @php
                    $rack = $rack->where('type', 'D')->where('no_rack', '005')->first();
                    $html = '<p class="spacer"><span>Kode Rak</span>: R.' . $rack->floor . '.' . $rack->type . '.' . $rack->no_rack .'</p>
                            <p class="spacer"><span>Terpakai</span>: ' . $rack->used . '</p>
                            <p class="spacer"><span>Kapasitas</span>: ' . $rack->capacity .'</p>';
                @endphp
                <div class="card card-box card-inline fiveth-card" data-toggle="tooltip" data-html="true" title="{{ $html }}">
                    <div class="card-body align-items-center d-flex justify-content-center" style="height: 35px; line-height: 35px;">
                        5
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div style="margin: 24px 0;">
        <div style="display: inline-block; padding: 0 7px;">
            <div style="display: flex;">
                @php
                    $rack = $rack->where('type', 'D')->where('no_rack', '050')->first();
                    $html = '<p class="spacer"><span>Kode Rak</span>: R.' . $rack->floor . '.' . $rack->type . '.' . $rack->no_rack .'</p>
                            <p class="spacer"><span>Terpakai</span>: ' . $rack->used . '</p>
                            <p class="spacer"><span>Kapasitas</span>: ' . $rack->capacity .'</p>';
                @endphp
                <div class="card card-box card-inline fiveth-card" data-toggle="tooltip" data-html="true" title="{{ $html }}">
                    <div class="card-body align-items-center d-flex justify-content-center" style="height: 35px; line-height: 35px;">
                        50
                    </div>
                </div>
                @php
                    $rack = $rack->where('type', 'D')->where('no_rack', '049')->first();
                    $html = '<p class="spacer"><span>Kode Rak</span>: R.' . $rack->floor . '.' . $rack->type . '.' . $rack->no_rack .'</p>
                            <p class="spacer"><span>Terpakai</span>: ' . $rack->used . '</p>
                            <p class="spacer"><span>Kapasitas</span>: ' . $rack->capacity .'</p>';
                @endphp
                <div class="card card-box card-inline fiveth-card" data-toggle="tooltip" data-html="true" title="{{ $html }}">
                    <div class="card-body align-items-center d-flex justify-content-center" style="height: 35px; line-height: 35px;">
                        49
                    </div>
                </div>
            </div>
            <div style="display: flex;">
                @php
                    $rack = $rack->where('type', 'D')->where('no_rack', '051')->first();
                    $html = '<p class="spacer"><span>Kode Rak</span>: R.' . $rack->floor . '.' . $rack->type . '.' . $rack->no_rack .'</p>
                            <p class="spacer"><span>Terpakai</span>: ' . $rack->used . '</p>
                            <p class="spacer"><span>Kapasitas</span>: ' . $rack->capacity .'</p>';
                @endphp
                <div class="card card-box card-inline fiveth-card" data-toggle="tooltip" data-html="true" title="{{ $html }}">
                    <div class="card-body align-items-center d-flex justify-content-center" style="height: 35px; line-height: 35px;">
                        51
                    </div>
                </div>
                @php
                    $rack = $rack->where('type', 'D')->where('no_rack', '048')->first();
                    $html = '<p class="spacer"><span>Kode Rak</span>: R.' . $rack->floor . '.' . $rack->type . '.' . $rack->no_rack .'</p>
                            <p class="spacer"><span>Terpakai</span>: ' . $rack->used . '</p>
                            <p class="spacer"><span>Kapasitas</span>: ' . $rack->capacity .'</p>';
                @endphp
                <div class="card card-box card-inline fiveth-card" data-toggle="tooltip" data-html="true" title="{{ $html }}">
                    <div class="card-body align-items-center d-flex justify-content-center" style="height: 35px; line-height: 35px;">
                        48
                    </div>
                </div>
            </div>
            <div style="display: flex;">
                @php
                    $rack = $rack->where('type', 'D')->where('no_rack', '052')->first();
                    $html = '<p class="spacer"><span>Kode Rak</span>: R.' . $rack->floor . '.' . $rack->type . '.' . $rack->no_rack .'</p>
                            <p class="spacer"><span>Terpakai</span>: ' . $rack->used . '</p>
                            <p class="spacer"><span>Kapasitas</span>: ' . $rack->capacity .'</p>';
                @endphp
                <div class="card card-box card-inline fiveth-card" data-toggle="tooltip" data-html="true" title="{{ $html }}">
                    <div class="card-body align-items-center d-flex justify-content-center" style="height: 35px; line-height: 35px;">
                        52
                    </div>
                </div>
                @php
                    $rack = $rack->where('type', 'D')->where('no_rack', '047')->first();
                    $html = '<p class="spacer"><span>Kode Rak</span>: R.' . $rack->floor . '.' . $rack->type . '.' . $rack->no_rack .'</p>
                            <p class="spacer"><span>Terpakai</span>: ' . $rack->used . '</p>
                            <p class="spacer"><span>Kapasitas</span>: ' . $rack->capacity .'</p>';
                @endphp
                <div class="card card-box card-inline fiveth-card" data-toggle="tooltip" data-html="true" title="{{ $html }}">
                    <div class="card-body align-items-center d-flex justify-content-center" style="height: 35px; line-height: 35px;">
                        47
                    </div>
                </div>
            </div>
            <div style="display: flex;">
                @php
                    $rack = $rack->where('type', 'D')->where('no_rack', '053')->first();
                    $html = '<p class="spacer"><span>Kode Rak</span>: R.' . $rack->floor . '.' . $rack->type . '.' . $rack->no_rack .'</p>
                            <p class="spacer"><span>Terpakai</span>: ' . $rack->used . '</p>
                            <p class="spacer"><span>Kapasitas</span>: ' . $rack->capacity .'</p>';
                @endphp
                <div class="card card-box card-inline fiveth-card" data-toggle="tooltip" data-html="true" title="{{ $html }}">
                    <div class="card-body align-items-center d-flex justify-content-center" style="height: 35px; line-height: 35px;">
                        53
                    </div>
                </div>
                @php
                    $rack = $rack->where('type', 'D')->where('no_rack', '046')->first();
                    $html = '<p class="spacer"><span>Kode Rak</span>: R.' . $rack->floor . '.' . $rack->type . '.' . $rack->no_rack .'</p>
                            <p class="spacer"><span>Terpakai</span>: ' . $rack->used . '</p>
                            <p class="spacer"><span>Kapasitas</span>: ' . $rack->capacity .'</p>';
                @endphp
                <div class="card card-box card-inline fiveth-card" data-toggle="tooltip" data-html="true" title="{{ $html }}">
                    <div class="card-body align-items-center d-flex justify-content-center" style="height: 35px; line-height: 35px;">
                        46
                    </div>
                </div>
            </div>
            <div style="display: flex;">
                @php
                    $rack = $rack->where('type', 'D')->where('no_rack', '054')->first();
                    $html = '<p class="spacer"><span>Kode Rak</span>: R.' . $rack->floor . '.' . $rack->type . '.' . $rack->no_rack .'</p>
                            <p class="spacer"><span>Terpakai</span>: ' . $rack->used . '</p>
                            <p class="spacer"><span>Kapasitas</span>: ' . $rack->capacity .'</p>';
                @endphp
                <div class="card card-box card-inline fiveth-card" data-toggle="tooltip" data-html="true" title="{{ $html }}">
                    <div class="card-body align-items-center d-flex justify-content-center" style="height: 35px; line-height: 35px;">
                        54
                    </div>
                </div>
                @php
                    $rack = $rack->where('type', 'D')->where('no_rack', '045')->first();
                    $html = '<p class="spacer"><span>Kode Rak</span>: R.' . $rack->floor . '.' . $rack->type . '.' . $rack->no_rack .'</p>
                            <p class="spacer"><span>Terpakai</span>: ' . $rack->used . '</p>
                            <p class="spacer"><span>Kapasitas</span>: ' . $rack->capacity .'</p>';
                @endphp
                <div class="card card-box card-inline fiveth-card" data-toggle="tooltip" data-html="true" title="{{ $html }}">
                    <div class="card-body align-items-center d-flex justify-content-center" style="height: 35px; line-height: 35px;">
                        45
                    </div>
                </div>
            </div>
            <div style="display: flex;">
                @php
                    $rack = $rack->where('type', 'D')->where('no_rack', '055')->first();
                    $html = '<p class="spacer"><span>Kode Rak</span>: R.' . $rack->floor . '.' . $rack->type . '.' . $rack->no_rack .'</p>
                            <p class="spacer"><span>Terpakai</span>: ' . $rack->used . '</p>
                            <p class="spacer"><span>Kapasitas</span>: ' . $rack->capacity .'</p>';
                @endphp
                <div class="card card-box card-inline fiveth-card" data-toggle="tooltip" data-html="true" title="{{ $html }}">
                    <div class="card-body align-items-center d-flex justify-content-center" style="height: 35px; line-height: 35px;">
                        55
                    </div>
                </div>
                @php
                    $rack = $rack->where('type', 'D')->where('no_rack', '044')->first();
                    $html = '<p class="spacer"><span>Kode Rak</span>: R.' . $rack->floor . '.' . $rack->type . '.' . $rack->no_rack .'</p>
                            <p class="spacer"><span>Terpakai</span>: ' . $rack->used . '</p>
                            <p class="spacer"><span>Kapasitas</span>: ' . $rack->capacity .'</p>';
                @endphp
                <div class="card card-box card-inline fiveth-card" data-toggle="tooltip" data-html="true" title="{{ $html }}">
                    <div class="card-body align-items-center d-flex justify-content-center" style="height: 35px; line-height: 35px;">
                        44
                    </div>
                </div>
            </div>
        </div>
        <div style="display: inline-block; padding: 0 7px;">
            <div style="display: flex;">
                @php
                    $rack = $rack->where('type', 'D')->where('no_rack', '038')->first();
                    $html = '<p class="spacer"><span>Kode Rak</span>: R.' . $rack->floor . '.' . $rack->type . '.' . $rack->no_rack .'</p>
                            <p class="spacer"><span>Terpakai</span>: ' . $rack->used . '</p>
                            <p class="spacer"><span>Kapasitas</span>: ' . $rack->capacity .'</p>';
                @endphp
                <div class="card card-box card-inline fiveth-card" data-toggle="tooltip" data-html="true" title="{{ $html }}">
                    <div class="card-body align-items-center d-flex justify-content-center" style="height: 35px; line-height: 35px;">
                        38
                    </div>
                </div>
                @php
                    $rack = $rack->where('type', 'D')->where('no_rack', '037')->first();
                    $html = '<p class="spacer"><span>Kode Rak</span>: R.' . $rack->floor . '.' . $rack->type . '.' . $rack->no_rack .'</p>
                            <p class="spacer"><span>Terpakai</span>: ' . $rack->used . '</p>
                            <p class="spacer"><span>Kapasitas</span>: ' . $rack->capacity .'</p>';
                @endphp
                <div class="card card-box card-inline fiveth-card" data-toggle="tooltip" data-html="true" title="{{ $html }}">
                    <div class="card-body align-items-center d-flex justify-content-center" style="height: 35px; line-height: 35px;">
                        37
                    </div>
                </div>
            </div>
            <div style="display: flex;">
                @php
                    $rack = $rack->where('type', 'D')->where('no_rack', '039')->first();
                    $html = '<p class="spacer"><span>Kode Rak</span>: R.' . $rack->floor . '.' . $rack->type . '.' . $rack->no_rack .'</p>
                            <p class="spacer"><span>Terpakai</span>: ' . $rack->used . '</p>
                            <p class="spacer"><span>Kapasitas</span>: ' . $rack->capacity .'</p>';
                @endphp
                <div class="card card-box card-inline fiveth-card" data-toggle="tooltip" data-html="true" title="{{ $html }}">
                    <div class="card-body align-items-center d-flex justify-content-center" style="height: 35px; line-height: 35px;">
                        39
                    </div>
                </div>
                @php
                    $rack = $rack->where('type', 'D')->where('no_rack', '036')->first();
                    $html = '<p class="spacer"><span>Kode Rak</span>: R.' . $rack->floor . '.' . $rack->type . '.' . $rack->no_rack .'</p>
                            <p class="spacer"><span>Terpakai</span>: ' . $rack->used . '</p>
                            <p class="spacer"><span>Kapasitas</span>: ' . $rack->capacity .'</p>';
                @endphp
                <div class="card card-box card-inline fiveth-card" data-toggle="tooltip" data-html="true" title="{{ $html }}">
                    <div class="card-body align-items-center d-flex justify-content-center" style="height: 35px; line-height: 35px;">
                        36
                    </div>
                </div>
            </div>
            <div style="display: flex;">
                @php
                    $rack = $rack->where('type', 'D')->where('no_rack', '040')->first();
                    $html = '<p class="spacer"><span>Kode Rak</span>: R.' . $rack->floor . '.' . $rack->type . '.' . $rack->no_rack .'</p>
                            <p class="spacer"><span>Terpakai</span>: ' . $rack->used . '</p>
                            <p class="spacer"><span>Kapasitas</span>: ' . $rack->capacity .'</p>';
                @endphp
                <div class="card card-box card-inline fiveth-card" data-toggle="tooltip" data-html="true" title="{{ $html }}">
                    <div class="card-body align-items-center d-flex justify-content-center" style="height: 35px; line-height: 35px;">
                        40
                    </div>
                </div>
                @php
                    $rack = $rack->where('type', 'D')->where('no_rack', '035')->first();
                    $html = '<p class="spacer"><span>Kode Rak</span>: R.' . $rack->floor . '.' . $rack->type . '.' . $rack->no_rack .'</p>
                            <p class="spacer"><span>Terpakai</span>: ' . $rack->used . '</p>
                            <p class="spacer"><span>Kapasitas</span>: ' . $rack->capacity .'</p>';
                @endphp
                <div class="card card-box card-inline fiveth-card" data-toggle="tooltip" data-html="true" title="{{ $html }}">
                    <div class="card-body align-items-center d-flex justify-content-center" style="height: 35px; line-height: 35px;">
                        35
                    </div>
                </div>
            </div>
            <div style="display: flex;">
                @php
                    $rack = $rack->where('type', 'D')->where('no_rack', '041')->first();
                    $html = '<p class="spacer"><span>Kode Rak</span>: R.' . $rack->floor . '.' . $rack->type . '.' . $rack->no_rack .'</p>
                            <p class="spacer"><span>Terpakai</span>: ' . $rack->used . '</p>
                            <p class="spacer"><span>Kapasitas</span>: ' . $rack->capacity .'</p>';
                @endphp
                <div class="card card-box card-inline fiveth-card" data-toggle="tooltip" data-html="true" title="{{ $html }}">
                    <div class="card-body align-items-center d-flex justify-content-center" style="height: 35px; line-height: 35px;">
                        41
                    </div>
                </div>
                @php
                    $rack = $rack->where('type', 'D')->where('no_rack', '034')->first();
                    $html = '<p class="spacer"><span>Kode Rak</span>: R.' . $rack->floor . '.' . $rack->type . '.' . $rack->no_rack .'</p>
                            <p class="spacer"><span>Terpakai</span>: ' . $rack->used . '</p>
                            <p class="spacer"><span>Kapasitas</span>: ' . $rack->capacity .'</p>';
                @endphp
                <div class="card card-box card-inline fiveth-card" data-toggle="tooltip" data-html="true" title="{{ $html }}">
                    <div class="card-body align-items-center d-flex justify-content-center" style="height: 35px; line-height: 35px;">
                        34
                    </div>
                </div>
            </div>
            <div style="display: flex;">
                @php
                    $rack = $rack->where('type', 'D')->where('no_rack', '042')->first();
                    $html = '<p class="spacer"><span>Kode Rak</span>: R.' . $rack->floor . '.' . $rack->type . '.' . $rack->no_rack .'</p>
                            <p class="spacer"><span>Terpakai</span>: ' . $rack->used . '</p>
                            <p class="spacer"><span>Kapasitas</span>: ' . $rack->capacity .'</p>';
                @endphp
                <div class="card card-box card-inline fiveth-card" data-toggle="tooltip" data-html="true" title="{{ $html }}">
                    <div class="card-body align-items-center d-flex justify-content-center" style="height: 35px; line-height: 35px;">
                        42
                    </div>
                </div>
                @php
                    $rack = $rack->where('type', 'D')->where('no_rack', '033')->first();
                    $html = '<p class="spacer"><span>Kode Rak</span>: R.' . $rack->floor . '.' . $rack->type . '.' . $rack->no_rack .'</p>
                            <p class="spacer"><span>Terpakai</span>: ' . $rack->used . '</p>
                            <p class="spacer"><span>Kapasitas</span>: ' . $rack->capacity .'</p>';
                @endphp
                <div class="card card-box card-inline fiveth-card" data-toggle="tooltip" data-html="true" title="{{ $html }}">
                    <div class="card-body align-items-center d-flex justify-content-center" style="height: 35px; line-height: 35px;">
                        33
                    </div>
                </div>
            </div>
            <div style="display: flex;">
                @php
                    $rack = $rack->where('type', 'D')->where('no_rack', '043')->first();
                    $html = '<p class="spacer"><span>Kode Rak</span>: R.' . $rack->floor . '.' . $rack->type . '.' . $rack->no_rack .'</p>
                            <p class="spacer"><span>Terpakai</span>: ' . $rack->used . '</p>
                            <p class="spacer"><span>Kapasitas</span>: ' . $rack->capacity .'</p>';
                @endphp
                <div class="card card-box card-inline fiveth-card" data-toggle="tooltip" data-html="true" title="{{ $html }}">
                    <div class="card-body align-items-center d-flex justify-content-center" style="height: 35px; line-height: 35px;">
                        43
                    </div>
                </div>
                @php
                    $rack = $rack->where('type', 'D')->where('no_rack', '032')->first();
                    $html = '<p class="spacer"><span>Kode Rak</span>: R.' . $rack->floor . '.' . $rack->type . '.' . $rack->no_rack .'</p>
                            <p class="spacer"><span>Terpakai</span>: ' . $rack->used . '</p>
                            <p class="spacer"><span>Kapasitas</span>: ' . $rack->capacity .'</p>';
                @endphp
                <div class="card card-box card-inline fiveth-card" data-toggle="tooltip" data-html="true" title="{{ $html }}">
                    <div class="card-body align-items-center d-flex justify-content-center" style="height: 35px; line-height: 35px;">
                        32
                    </div>
                </div>
            </div>
        </div>
        <div style="display: inline-block; padding: 0 7px;">
            <div style="display: flex;">
                @php
                    $rack = $rack->where('type', 'D')->where('no_rack', '026')->first();
                    $html = '<p class="spacer"><span>Kode Rak</span>: R.' . $rack->floor . '.' . $rack->type . '.' . $rack->no_rack .'</p>
                            <p class="spacer"><span>Terpakai</span>: ' . $rack->used . '</p>
                            <p class="spacer"><span>Kapasitas</span>: ' . $rack->capacity .'</p>';
                @endphp
                <div class="card card-box card-inline fiveth-card" data-toggle="tooltip" data-html="true" title="{{ $html }}">
                    <div class="card-body align-items-center d-flex justify-content-center" style="height: 35px; line-height: 35px;">
                        26
                    </div>
                </div>
            </div>
            <div style="display: flex;">
                @php
                    $rack = $rack->where('type', 'D')->where('no_rack', '027')->first();
                    $html = '<p class="spacer"><span>Kode Rak</span>: R.' . $rack->floor . '.' . $rack->type . '.' . $rack->no_rack .'</p>
                            <p class="spacer"><span>Terpakai</span>: ' . $rack->used . '</p>
                            <p class="spacer"><span>Kapasitas</span>: ' . $rack->capacity .'</p>';
                @endphp
                <div class="card card-box card-inline fiveth-card" data-toggle="tooltip" data-html="true" title="{{ $html }}">
                    <div class="card-body align-items-center d-flex justify-content-center" style="height: 35px; line-height: 35px;">
                        27
                    </div>
                </div>
            </div>
            <div style="display: flex;">
                @php
                    $rack = $rack->where('type', 'D')->where('no_rack', '028')->first();
                    $html = '<p class="spacer"><span>Kode Rak</span>: R.' . $rack->floor . '.' . $rack->type . '.' . $rack->no_rack .'</p>
                            <p class="spacer"><span>Terpakai</span>: ' . $rack->used . '</p>
                            <p class="spacer"><span>Kapasitas</span>: ' . $rack->capacity .'</p>';
                @endphp
                <div class="card card-box card-inline fiveth-card" data-toggle="tooltip" data-html="true" title="{{ $html }}">
                    <div class="card-body align-items-center d-flex justify-content-center" style="height: 35px; line-height: 35px;">
                        28
                    </div>
                </div>
            </div>
            <div style="display: flex;">
                @php
                    $rack = $rack->where('type', 'D')->where('no_rack', '029')->first();
                    $html = '<p class="spacer"><span>Kode Rak</span>: R.' . $rack->floor . '.' . $rack->type . '.' . $rack->no_rack .'</p>
                            <p class="spacer"><span>Terpakai</span>: ' . $rack->used . '</p>
                            <p class="spacer"><span>Kapasitas</span>: ' . $rack->capacity .'</p>';
                @endphp
                <div class="card card-box card-inline fiveth-card" data-toggle="tooltip" data-html="true" title="{{ $html }}">
                    <div class="card-body align-items-center d-flex justify-content-center" style="height: 35px; line-height: 35px;">
                        29
                    </div>
                </div>
            </div>
            <div style="display: flex;">
                @php
                    $rack = $rack->where('type', 'D')->where('no_rack', '030')->first();
                    $html = '<p class="spacer"><span>Kode Rak</span>: R.' . $rack->floor . '.' . $rack->type . '.' . $rack->no_rack .'</p>
                            <p class="spacer"><span>Terpakai</span>: ' . $rack->used . '</p>
                            <p class="spacer"><span>Kapasitas</span>: ' . $rack->capacity .'</p>';
                @endphp
                <div class="card card-box card-inline fiveth-card" data-toggle="tooltip" data-html="true" title="{{ $html }}">
                    <div class="card-body align-items-center d-flex justify-content-center" style="height: 35px; line-height: 35px;">
                        30
                    </div>
                </div>
            </div>
            <div style="display: flex;">
                @php
                    $rack = $rack->where('type', 'D')->where('no_rack', '031')->first();
                    $html = '<p class="spacer"><span>Kode Rak</span>: R.' . $rack->floor . '.' . $rack->type . '.' . $rack->no_rack .'</p>
                            <p class="spacer"><span>Terpakai</span>: ' . $rack->used . '</p>
                            <p class="spacer"><span>Kapasitas</span>: ' . $rack->capacity .'</p>';
                @endphp
                <div class="card card-box card-inline fiveth-card" data-toggle="tooltip" data-html="true" title="{{ $html }}">
                    <div class="card-body align-items-center d-flex justify-content-center" style="height: 35px; line-height: 35px;">
                        31
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div style="margin: 24px 0;">
        <div style="display: inline-block; padding: 0 7px;">
            <div style="display: flex;">
                @php
                    $rack = $rack->where('type', 'D')->where('no_rack', '072')->first();
                    $html = '<p class="spacer"><span>Kode Rak</span>: R.' . $rack->floor . '.' . $rack->type . '.' . $rack->no_rack .'</p>
                            <p class="spacer"><span>Terpakai</span>: ' . $rack->used . '</p>
                            <p class="spacer"><span>Kapasitas</span>: ' . $rack->capacity .'</p>';
                @endphp
                <div class="card card-box card-inline fiveth-card" data-toggle="tooltip" data-html="true" title="{{ $html }}">
                    <div class="card-body align-items-center d-flex justify-content-center" style="height: 35px; line-height: 35px;">
                        72
                    </div>
                </div>
                @php
                    $rack = $rack->where('type', 'D')->where('no_rack', '071')->first();
                    $html = '<p class="spacer"><span>Kode Rak</span>: R.' . $rack->floor . '.' . $rack->type . '.' . $rack->no_rack .'</p>
                            <p class="spacer"><span>Terpakai</span>: ' . $rack->used . '</p>
                            <p class="spacer"><span>Kapasitas</span>: ' . $rack->capacity .'</p>';
                @endphp
                <div class="card card-box card-inline fiveth-card" data-toggle="tooltip" data-html="true" title="{{ $html }}">
                    <div class="card-body align-items-center d-flex justify-content-center" style="height: 35px; line-height: 35px;">
                        71
                    </div>
                </div>
            </div>
            <div style="display: flex;">
                @php
                    $rack = $rack->where('type', 'D')->where('no_rack', '073')->first();
                    $html = '<p class="spacer"><span>Kode Rak</span>: R.' . $rack->floor . '.' . $rack->type . '.' . $rack->no_rack .'</p>
                            <p class="spacer"><span>Terpakai</span>: ' . $rack->used . '</p>
                            <p class="spacer"><span>Kapasitas</span>: ' . $rack->capacity .'</p>';
                @endphp
                <div class="card card-box card-inline fiveth-card" data-toggle="tooltip" data-html="true" title="{{ $html }}">
                    <div class="card-body align-items-center d-flex justify-content-center" style="height: 35px; line-height: 35px;">
                        73
                    </div>
                </div>
                @php
                    $rack = $rack->where('type', 'D')->where('no_rack', '070')->first();
                    $html = '<p class="spacer"><span>Kode Rak</span>: R.' . $rack->floor . '.' . $rack->type . '.' . $rack->no_rack .'</p>
                            <p class="spacer"><span>Terpakai</span>: ' . $rack->used . '</p>
                            <p class="spacer"><span>Kapasitas</span>: ' . $rack->capacity .'</p>';
                @endphp
                <div class="card card-box card-inline fiveth-card" data-toggle="tooltip" data-html="true" title="{{ $html }}">
                    <div class="card-body align-items-center d-flex justify-content-center" style="height: 35px; line-height: 35px;">
                        70
                    </div>
                </div>
            </div>
            <div style="display: flex;">
                @php
                    $rack = $rack->where('type', 'D')->where('no_rack', '074')->first();
                    $html = '<p class="spacer"><span>Kode Rak</span>: R.' . $rack->floor . '.' . $rack->type . '.' . $rack->no_rack .'</p>
                            <p class="spacer"><span>Terpakai</span>: ' . $rack->used . '</p>
                            <p class="spacer"><span>Kapasitas</span>: ' . $rack->capacity .'</p>';
                @endphp
                <div class="card card-box card-inline fiveth-card" data-toggle="tooltip" data-html="true" title="{{ $html }}">
                    <div class="card-body align-items-center d-flex justify-content-center" style="height: 35px; line-height: 35px;">
                        74
                    </div>
                </div>
                @php
                    $rack = $rack->where('type', 'D')->where('no_rack', '069')->first();
                    $html = '<p class="spacer"><span>Kode Rak</span>: R.' . $rack->floor . '.' . $rack->type . '.' . $rack->no_rack .'</p>
                            <p class="spacer"><span>Terpakai</span>: ' . $rack->used . '</p>
                            <p class="spacer"><span>Kapasitas</span>: ' . $rack->capacity .'</p>';
                @endphp
                <div class="card card-box card-inline fiveth-card" data-toggle="tooltip" data-html="true" title="{{ $html }}">
                    <div class="card-body align-items-center d-flex justify-content-center" style="height: 35px; line-height: 35px;">
                        69
                    </div>
                </div>
            </div>
            <div style="display: flex;">
                @php
                    $rack = $rack->where('type', 'D')->where('no_rack', '075')->first();
                    $html = '<p class="spacer"><span>Kode Rak</span>: R.' . $rack->floor . '.' . $rack->type . '.' . $rack->no_rack .'</p>
                            <p class="spacer"><span>Terpakai</span>: ' . $rack->used . '</p>
                            <p class="spacer"><span>Kapasitas</span>: ' . $rack->capacity .'</p>';
                @endphp
                <div class="card card-box card-inline fiveth-card" data-toggle="tooltip" data-html="true" title="{{ $html }}">
                    <div class="card-body align-items-center d-flex justify-content-center" style="height: 35px; line-height: 35px;">
                        75
                    </div>
                </div>
                @php
                    $rack = $rack->where('type', 'D')->where('no_rack', '068')->first();
                    $html = '<p class="spacer"><span>Kode Rak</span>: R.' . $rack->floor . '.' . $rack->type . '.' . $rack->no_rack .'</p>
                            <p class="spacer"><span>Terpakai</span>: ' . $rack->used . '</p>
                            <p class="spacer"><span>Kapasitas</span>: ' . $rack->capacity .'</p>';
                @endphp
                <div class="card card-box card-inline fiveth-card" data-toggle="tooltip" data-html="true" title="{{ $html }}">
                    <div class="card-body align-items-center d-flex justify-content-center" style="height: 35px; line-height: 35px;">
                        68
                    </div>
                </div>
            </div>
        </div>
        <div style="display: inline-block; padding: 0 7px;">
            <div style="display: flex;">
                @php
                    $rack = $rack->where('type', 'D')->where('no_rack', '064')->first();
                    $html = '<p class="spacer"><span>Kode Rak</span>: R.' . $rack->floor . '.' . $rack->type . '.' . $rack->no_rack .'</p>
                            <p class="spacer"><span>Terpakai</span>: ' . $rack->used . '</p>
                            <p class="spacer"><span>Kapasitas</span>: ' . $rack->capacity .'</p>';
                @endphp
                <div class="card card-box card-inline fiveth-card" data-toggle="tooltip" data-html="true" title="{{ $html }}">
                    <div class="card-body align-items-center d-flex justify-content-center" style="height: 35px; line-height: 35px;">
                        64
                    </div>
                </div>
                @php
                    $rack = $rack->where('type', 'D')->where('no_rack', '063')->first();
                    $html = '<p class="spacer"><span>Kode Rak</span>: R.' . $rack->floor . '.' . $rack->type . '.' . $rack->no_rack .'</p>
                            <p class="spacer"><span>Terpakai</span>: ' . $rack->used . '</p>
                            <p class="spacer"><span>Kapasitas</span>: ' . $rack->capacity .'</p>';
                @endphp
                <div class="card card-box card-inline fiveth-card" data-toggle="tooltip" data-html="true" title="{{ $html }}">
                    <div class="card-body align-items-center d-flex justify-content-center" style="height: 35px; line-height: 35px;">
                        63
                    </div>
                </div>
            </div>
            <div style="display: flex;">
                @php
                    $rack = $rack->where('type', 'D')->where('no_rack', '065')->first();
                    $html = '<p class="spacer"><span>Kode Rak</span>: R.' . $rack->floor . '.' . $rack->type . '.' . $rack->no_rack .'</p>
                            <p class="spacer"><span>Terpakai</span>: ' . $rack->used . '</p>
                            <p class="spacer"><span>Kapasitas</span>: ' . $rack->capacity .'</p>';
                @endphp
                <div class="card card-box card-inline fiveth-card" data-toggle="tooltip" data-html="true" title="{{ $html }}">
                    <div class="card-body align-items-center d-flex justify-content-center" style="height: 35px; line-height: 35px;">
                        65
                    </div>
                </div>
                @php
                    $rack = $rack->where('type', 'D')->where('no_rack', '062')->first();
                    $html = '<p class="spacer"><span>Kode Rak</span>: R.' . $rack->floor . '.' . $rack->type . '.' . $rack->no_rack .'</p>
                            <p class="spacer"><span>Terpakai</span>: ' . $rack->used . '</p>
                            <p class="spacer"><span>Kapasitas</span>: ' . $rack->capacity .'</p>';
                @endphp
                <div class="card card-box card-inline fiveth-card" data-toggle="tooltip" data-html="true" title="{{ $html }}">
                    <div class="card-body align-items-center d-flex justify-content-center" style="height: 35px; line-height: 35px;">
                        62
                    </div>
                </div>
            </div>
            <div style="display: flex;">
                @php
                    $rack = $rack->where('type', 'D')->where('no_rack', '066')->first();
                    $html = '<p class="spacer"><span>Kode Rak</span>: R.' . $rack->floor . '.' . $rack->type . '.' . $rack->no_rack .'</p>
                            <p class="spacer"><span>Terpakai</span>: ' . $rack->used . '</p>
                            <p class="spacer"><span>Kapasitas</span>: ' . $rack->capacity .'</p>';
                @endphp
                <div class="card card-box card-inline fiveth-card" data-toggle="tooltip" data-html="true" title="{{ $html }}">
                    <div class="card-body align-items-center d-flex justify-content-center" style="height: 35px; line-height: 35px;">
                        66
                    </div>
                </div>
                @php
                    $rack = $rack->where('type', 'D')->where('no_rack', '061')->first();
                    $html = '<p class="spacer"><span>Kode Rak</span>: R.' . $rack->floor . '.' . $rack->type . '.' . $rack->no_rack .'</p>
                            <p class="spacer"><span>Terpakai</span>: ' . $rack->used . '</p>
                            <p class="spacer"><span>Kapasitas</span>: ' . $rack->capacity .'</p>';
                @endphp
                <div class="card card-box card-inline fiveth-card" data-toggle="tooltip" data-html="true" title="{{ $html }}">
                    <div class="card-body align-items-center d-flex justify-content-center" style="height: 35px; line-height: 35px;">
                        61
                    </div>
                </div>
            </div>
            <div style="display: flex;">
                @php
                    $rack = $rack->where('type', 'D')->where('no_rack', '067')->first();
                    $html = '<p class="spacer"><span>Kode Rak</span>: R.' . $rack->floor . '.' . $rack->type . '.' . $rack->no_rack .'</p>
                            <p class="spacer"><span>Terpakai</span>: ' . $rack->used . '</p>
                            <p class="spacer"><span>Kapasitas</span>: ' . $rack->capacity .'</p>';
                @endphp
                <div class="card card-box card-inline fiveth-card" data-toggle="tooltip" data-html="true" title="{{ $html }}">
                    <div class="card-body align-items-center d-flex justify-content-center" style="height: 35px; line-height: 35px;">
                        67
                    </div>
                </div>
                @php
                    $rack = $rack->where('type', 'D')->where('no_rack', '060')->first();
                    $html = '<p class="spacer"><span>Kode Rak</span>: R.' . $rack->floor . '.' . $rack->type . '.' . $rack->no_rack .'</p>
                            <p class="spacer"><span>Terpakai</span>: ' . $rack->used . '</p>
                            <p class="spacer"><span>Kapasitas</span>: ' . $rack->capacity .'</p>';
                @endphp
                <div class="card card-box card-inline fiveth-card" data-toggle="tooltip" data-html="true" title="{{ $html }}">
                    <div class="card-body align-items-center d-flex justify-content-center" style="height: 35px; line-height: 35px;">
                        60
                    </div>
                </div>
            </div>
        </div>
        <div style="display: inline-block; padding: 0 7px;">
            <div style="display: flex;">
                @php
                    $rack = $rack->where('type', 'D')->where('no_rack', '056')->first();
                    $html = '<p class="spacer"><span>Kode Rak</span>: R.' . $rack->floor . '.' . $rack->type . '.' . $rack->no_rack .'</p>
                            <p class="spacer"><span>Terpakai</span>: ' . $rack->used . '</p>
                            <p class="spacer"><span>Kapasitas</span>: ' . $rack->capacity .'</p>';
                @endphp
                <div class="card card-box card-inline fiveth-card" data-toggle="tooltip" data-html="true" title="{{ $html }}">
                    <div class="card-body align-items-center d-flex justify-content-center" style="height: 35px; line-height: 35px;">
                        56
                    </div>
                </div>
            </div>
            <div style="display: flex;">
                @php
                    $rack = $rack->where('type', 'D')->where('no_rack', '057')->first();
                    $html = '<p class="spacer"><span>Kode Rak</span>: R.' . $rack->floor . '.' . $rack->type . '.' . $rack->no_rack .'</p>
                            <p class="spacer"><span>Terpakai</span>: ' . $rack->used . '</p>
                            <p class="spacer"><span>Kapasitas</span>: ' . $rack->capacity .'</p>';
                @endphp
                <div class="card card-box card-inline fiveth-card" data-toggle="tooltip" data-html="true" title="{{ $html }}">
                    <div class="card-body align-items-center d-flex justify-content-center" style="height: 35px; line-height: 35px;">
                        57
                    </div>
                </div>
            </div>
            <div style="display: flex;">
                @php
                    $rack = $rack->where('type', 'D')->where('no_rack', '058')->first();
                    $html = '<p class="spacer"><span>Kode Rak</span>: R.' . $rack->floor . '.' . $rack->type . '.' . $rack->no_rack .'</p>
                            <p class="spacer"><span>Terpakai</span>: ' . $rack->used . '</p>
                            <p class="spacer"><span>Kapasitas</span>: ' . $rack->capacity .'</p>';
                @endphp
                <div class="card card-box card-inline fiveth-card" data-toggle="tooltip" data-html="true" title="{{ $html }}">
                    <div class="card-body align-items-center d-flex justify-content-center" style="height: 35px; line-height: 35px;">
                        58
                    </div>
                </div>
            </div>
            <div style="display: flex;">
                @php
                    $rack = $rack->where('type', 'D')->where('no_rack', '059')->first();
                    $html = '<p class="spacer"><span>Kode Rak</span>: R.' . $rack->floor . '.' . $rack->type . '.' . $rack->no_rack .'</p>
                            <p class="spacer"><span>Terpakai</span>: ' . $rack->used . '</p>
                            <p class="spacer"><span>Kapasitas</span>: ' . $rack->capacity .'</p>';
                @endphp
                <div class="card card-box card-inline fiveth-card" data-toggle="tooltip" data-html="true" title="{{ $html }}">
                    <div class="card-body align-items-center d-flex justify-content-center" style="height: 35px; line-height: 35px;">
                        59
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div style="margin: 24px 0;">
        <div style="display: inline-block; padding: 0 7px;">
            <div style="display: flex;">
                @php
                    $rack = $rack->where('type', 'D')->where('no_rack', '092')->first();
                    $html = '<p class="spacer"><span>Kode Rak</span>: R.' . $rack->floor . '.' . $rack->type . '.' . $rack->no_rack .'</p>
                            <p class="spacer"><span>Terpakai</span>: ' . $rack->used . '</p>
                            <p class="spacer"><span>Kapasitas</span>: ' . $rack->capacity .'</p>';
                @endphp
                <div class="card card-box card-inline fiveth-card" data-toggle="tooltip" data-html="true" title="{{ $html }}">
                    <div class="card-body align-items-center d-flex justify-content-center" style="height: 35px; line-height: 35px;">
                        92
                    </div>
                </div>
                @php
                    $rack = $rack->where('type', 'D')->where('no_rack', '091')->first();
                    $html = '<p class="spacer"><span>Kode Rak</span>: R.' . $rack->floor . '.' . $rack->type . '.' . $rack->no_rack .'</p>
                            <p class="spacer"><span>Terpakai</span>: ' . $rack->used . '</p>
                            <p class="spacer"><span>Kapasitas</span>: ' . $rack->capacity .'</p>';
                @endphp
                <div class="card card-box card-inline fiveth-card" data-toggle="tooltip" data-html="true" title="{{ $html }}">
                    <div class="card-body align-items-center d-flex justify-content-center" style="height: 35px; line-height: 35px;">
                        91
                    </div>
                </div>
            </div>
            <div style="display: flex;">
                @php
                    $rack = $rack->where('type', 'D')->where('no_rack', '093')->first();
                    $html = '<p class="spacer"><span>Kode Rak</span>: R.' . $rack->floor . '.' . $rack->type . '.' . $rack->no_rack .'</p>
                            <p class="spacer"><span>Terpakai</span>: ' . $rack->used . '</p>
                            <p class="spacer"><span>Kapasitas</span>: ' . $rack->capacity .'</p>';
                @endphp
                <div class="card card-box card-inline fiveth-card" data-toggle="tooltip" data-html="true" title="{{ $html }}">
                    <div class="card-body align-items-center d-flex justify-content-center" style="height: 35px; line-height: 35px;">
                        93
                    </div>
                </div>
                @php
                    $rack = $rack->where('type', 'D')->where('no_rack', '090')->first();
                    $html = '<p class="spacer"><span>Kode Rak</span>: R.' . $rack->floor . '.' . $rack->type . '.' . $rack->no_rack .'</p>
                            <p class="spacer"><span>Terpakai</span>: ' . $rack->used . '</p>
                            <p class="spacer"><span>Kapasitas</span>: ' . $rack->capacity .'</p>';
                @endphp
                <div class="card card-box card-inline fiveth-card" data-toggle="tooltip" data-html="true" title="{{ $html }}">
                    <div class="card-body align-items-center d-flex justify-content-center" style="height: 35px; line-height: 35px;">
                        90
                    </div>
                </div>
            </div>
            <div style="display: flex;">
                @php
                    $rack = $rack->where('type', 'D')->where('no_rack', '094')->first();
                    $html = '<p class="spacer"><span>Kode Rak</span>: R.' . $rack->floor . '.' . $rack->type . '.' . $rack->no_rack .'</p>
                            <p class="spacer"><span>Terpakai</span>: ' . $rack->used . '</p>
                            <p class="spacer"><span>Kapasitas</span>: ' . $rack->capacity .'</p>';
                @endphp
                <div class="card card-box card-inline fiveth-card" data-toggle="tooltip" data-html="true" title="{{ $html }}">
                    <div class="card-body align-items-center d-flex justify-content-center" style="height: 35px; line-height: 35px;">
                        94
                    </div>
                </div>
                @php
                    $rack = $rack->where('type', 'D')->where('no_rack', '089')->first();
                    $html = '<p class="spacer"><span>Kode Rak</span>: R.' . $rack->floor . '.' . $rack->type . '.' . $rack->no_rack .'</p>
                            <p class="spacer"><span>Terpakai</span>: ' . $rack->used . '</p>
                            <p class="spacer"><span>Kapasitas</span>: ' . $rack->capacity .'</p>';
                @endphp
                <div class="card card-box card-inline fiveth-card" data-toggle="tooltip" data-html="true" title="{{ $html }}">
                    <div class="card-body align-items-center d-flex justify-content-center" style="height: 35px; line-height: 35px;">
                        89
                    </div>
                </div>
            </div>
            <div style="display: flex;">
                @php
                    $rack = $rack->where('type', 'D')->where('no_rack', '095')->first();
                    $html = '<p class="spacer"><span>Kode Rak</span>: R.' . $rack->floor . '.' . $rack->type . '.' . $rack->no_rack .'</p>
                            <p class="spacer"><span>Terpakai</span>: ' . $rack->used . '</p>
                            <p class="spacer"><span>Kapasitas</span>: ' . $rack->capacity .'</p>';
                @endphp
                <div class="card card-box card-inline fiveth-card" data-toggle="tooltip" data-html="true" title="{{ $html }}">
                    <div class="card-body align-items-center d-flex justify-content-center" style="height: 35px; line-height: 35px;">
                        95
                    </div>
                </div>
                @php
                    $rack = $rack->where('type', 'D')->where('no_rack', '088')->first();
                    $html = '<p class="spacer"><span>Kode Rak</span>: R.' . $rack->floor . '.' . $rack->type . '.' . $rack->no_rack .'</p>
                            <p class="spacer"><span>Terpakai</span>: ' . $rack->used . '</p>
                            <p class="spacer"><span>Kapasitas</span>: ' . $rack->capacity .'</p>';
                @endphp
                <div class="card card-box card-inline fiveth-card" data-toggle="tooltip" data-html="true" title="{{ $html }}">
                    <div class="card-body align-items-center d-flex justify-content-center" style="height: 35px; line-height: 35px;">
                        88
                    </div>
                </div>
            </div>
        </div>
        <div style="display: inline-block; padding: 0 7px;">
            <div style="display: flex;">
                @php
                    $rack = $rack->where('type', 'D')->where('no_rack', '084')->first();
                    $html = '<p class="spacer"><span>Kode Rak</span>: R.' . $rack->floor . '.' . $rack->type . '.' . $rack->no_rack .'</p>
                            <p class="spacer"><span>Terpakai</span>: ' . $rack->used . '</p>
                            <p class="spacer"><span>Kapasitas</span>: ' . $rack->capacity .'</p>';
                @endphp
                <div class="card card-box card-inline fiveth-card" data-toggle="tooltip" data-html="true" title="{{ $html }}">
                    <div class="card-body align-items-center d-flex justify-content-center" style="height: 35px; line-height: 35px;">
                        84
                    </div>
                </div>
                @php
                    $rack = $rack->where('type', 'D')->where('no_rack', '083')->first();
                    $html = '<p class="spacer"><span>Kode Rak</span>: R.' . $rack->floor . '.' . $rack->type . '.' . $rack->no_rack .'</p>
                            <p class="spacer"><span>Terpakai</span>: ' . $rack->used . '</p>
                            <p class="spacer"><span>Kapasitas</span>: ' . $rack->capacity .'</p>';
                @endphp
                <div class="card card-box card-inline fiveth-card" data-toggle="tooltip" data-html="true" title="{{ $html }}">
                    <div class="card-body align-items-center d-flex justify-content-center" style="height: 35px; line-height: 35px;">
                        83
                    </div>
                </div>
            </div>
            <div style="display: flex;">
                @php
                    $rack = $rack->where('type', 'D')->where('no_rack', '085')->first();
                    $html = '<p class="spacer"><span>Kode Rak</span>: R.' . $rack->floor . '.' . $rack->type . '.' . $rack->no_rack .'</p>
                            <p class="spacer"><span>Terpakai</span>: ' . $rack->used . '</p>
                            <p class="spacer"><span>Kapasitas</span>: ' . $rack->capacity .'</p>';
                @endphp
                <div class="card card-box card-inline fiveth-card" data-toggle="tooltip" data-html="true" title="{{ $html }}">
                    <div class="card-body align-items-center d-flex justify-content-center" style="height: 35px; line-height: 35px;">
                        85
                    </div>
                </div>
                @php
                    $rack = $rack->where('type', 'D')->where('no_rack', '082')->first();
                    $html = '<p class="spacer"><span>Kode Rak</span>: R.' . $rack->floor . '.' . $rack->type . '.' . $rack->no_rack .'</p>
                            <p class="spacer"><span>Terpakai</span>: ' . $rack->used . '</p>
                            <p class="spacer"><span>Kapasitas</span>: ' . $rack->capacity .'</p>';
                @endphp
                <div class="card card-box card-inline fiveth-card" data-toggle="tooltip" data-html="true" title="{{ $html }}">
                    <div class="card-body align-items-center d-flex justify-content-center" style="height: 35px; line-height: 35px;">
                        82
                    </div>
                </div>
            </div>
            <div style="display: flex;">
                @php
                    $rack = $rack->where('type', 'D')->where('no_rack', '086')->first();
                    $html = '<p class="spacer"><span>Kode Rak</span>: R.' . $rack->floor . '.' . $rack->type . '.' . $rack->no_rack .'</p>
                            <p class="spacer"><span>Terpakai</span>: ' . $rack->used . '</p>
                            <p class="spacer"><span>Kapasitas</span>: ' . $rack->capacity .'</p>';
                @endphp
                <div class="card card-box card-inline fiveth-card" data-toggle="tooltip" data-html="true" title="{{ $html }}">
                    <div class="card-body align-items-center d-flex justify-content-center" style="height: 35px; line-height: 35px;">
                        86
                    </div>
                </div>
                @php
                    $rack = $rack->where('type', 'D')->where('no_rack', '081')->first();
                    $html = '<p class="spacer"><span>Kode Rak</span>: R.' . $rack->floor . '.' . $rack->type . '.' . $rack->no_rack .'</p>
                            <p class="spacer"><span>Terpakai</span>: ' . $rack->used . '</p>
                            <p class="spacer"><span>Kapasitas</span>: ' . $rack->capacity .'</p>';
                @endphp
                <div class="card card-box card-inline fiveth-card" data-toggle="tooltip" data-html="true" title="{{ $html }}">
                    <div class="card-body align-items-center d-flex justify-content-center" style="height: 35px; line-height: 35px;">
                        81
                    </div>
                </div>
            </div>
            <div style="display: flex;">
                @php
                    $rack = $rack->where('type', 'D')->where('no_rack', '087')->first();
                    $html = '<p class="spacer"><span>Kode Rak</span>: R.' . $rack->floor . '.' . $rack->type . '.' . $rack->no_rack .'</p>
                            <p class="spacer"><span>Terpakai</span>: ' . $rack->used . '</p>
                            <p class="spacer"><span>Kapasitas</span>: ' . $rack->capacity .'</p>';
                @endphp
                <div class="card card-box card-inline fiveth-card" data-toggle="tooltip" data-html="true" title="{{ $html }}">
                    <div class="card-body align-items-center d-flex justify-content-center" style="height: 35px; line-height: 35px;">
                        87
                    </div>
                </div>
                @php
                    $rack = $rack->where('type', 'D')->where('no_rack', '080')->first();
                    $html = '<p class="spacer"><span>Kode Rak</span>: R.' . $rack->floor . '.' . $rack->type . '.' . $rack->no_rack .'</p>
                            <p class="spacer"><span>Terpakai</span>: ' . $rack->used . '</p>
                            <p class="spacer"><span>Kapasitas</span>: ' . $rack->capacity .'</p>';
                @endphp
                <div class="card card-box card-inline fiveth-card" data-toggle="tooltip" data-html="true" title="{{ $html }}">
                    <div class="card-body align-items-center d-flex justify-content-center" style="height: 35px; line-height: 35px;">
                        80
                    </div>
                </div>
            </div>
        </div>
        <div style="display: inline-block; padding: 0 7px;">
            <div style="display: flex;">
                @php
                    $rack = $rack->where('type', 'D')->where('no_rack', '076')->first();
                    $html = '<p class="spacer"><span>Kode Rak</span>: R.' . $rack->floor . '.' . $rack->type . '.' . $rack->no_rack .'</p>
                            <p class="spacer"><span>Terpakai</span>: ' . $rack->used . '</p>
                            <p class="spacer"><span>Kapasitas</span>: ' . $rack->capacity .'</p>';
                @endphp
                <div class="card card-box card-inline fiveth-card" data-toggle="tooltip" data-html="true" title="{{ $html }}">
                    <div class="card-body align-items-center d-flex justify-content-center" style="height: 35px; line-height: 35px;">
                        76
                    </div>
                </div>
            </div>
            <div style="display: flex;">
                @php
                    $rack = $rack->where('type', 'D')->where('no_rack', '077')->first();
                    $html = '<p class="spacer"><span>Kode Rak</span>: R.' . $rack->floor . '.' . $rack->type . '.' . $rack->no_rack .'</p>
                            <p class="spacer"><span>Terpakai</span>: ' . $rack->used . '</p>
                            <p class="spacer"><span>Kapasitas</span>: ' . $rack->capacity .'</p>';
                @endphp
                <div class="card card-box card-inline fiveth-card" data-toggle="tooltip" data-html="true" title="{{ $html }}">
                    <div class="card-body align-items-center d-flex justify-content-center" style="height: 35px; line-height: 35px;">
                        77
                    </div>
                </div>
            </div>
            <div style="display: flex;">
                @php
                    $rack = $rack->where('type', 'D')->where('no_rack', '078')->first();
                    $html = '<p class="spacer"><span>Kode Rak</span>: R.' . $rack->floor . '.' . $rack->type . '.' . $rack->no_rack .'</p>
                            <p class="spacer"><span>Terpakai</span>: ' . $rack->used . '</p>
                            <p class="spacer"><span>Kapasitas</span>: ' . $rack->capacity .'</p>';
                @endphp
                <div class="card card-box card-inline fiveth-card" data-toggle="tooltip" data-html="true" title="{{ $html }}">
                    <div class="card-body align-items-center d-flex justify-content-center" style="height: 35px; line-height: 35px;">
                        78
                    </div>
                </div>
            </div>
            <div style="display: flex;">
                @php
                    $rack = $rack->where('type', 'D')->where('no_rack', '079')->first();
                    $html = '<p class="spacer"><span>Kode Rak</span>: R.' . $rack->floor . '.' . $rack->type . '.' . $rack->no_rack .'</p>
                            <p class="spacer"><span>Terpakai</span>: ' . $rack->used . '</p>
                            <p class="spacer"><span>Kapasitas</span>: ' . $rack->capacity .'</p>';
                @endphp
                <div class="card card-box card-inline fiveth-card" data-toggle="tooltip" data-html="true" title="{{ $html }}">
                    <div class="card-body align-items-center d-flex justify-content-center" style="height: 35px; line-height: 35px;">
                        79
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>