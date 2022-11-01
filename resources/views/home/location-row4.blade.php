<div class="row">
    <div class="col square bottom left">
        <div class="row">
            <div class="col square top right">

            </div>
            <div class="col square left">
                @php
                    $rack = $rack->where('type', 'S')->where('no_rack', '001')->first();
                    $html = '<p class="spacer"><span>Kode Rak</span>: R.' . $rack->floor . '.' . $rack->type . '.' . $rack->no_rack .'</p>
                            <p class="spacer"><span>Terpakai</span>: ' . $rack->used . '</p>
                            <p class="spacer"><span>Kapasitas</span>: ' . $rack->capacity .'</p>';
                @endphp
                <div class="display-table mt-3" data-toggle="tooltip" data-html="true" title="{{ $html }}">
                    <div>
                        <div class="box3 top right bottom left">1</div>
                    </div>
                </div>
                @php
                    $rack = $rack->where('type', 'S')->where('no_rack', '002')->first();
                    $html = '<p class="spacer"><span>Kode Rak</span>: R.' . $rack->floor . '.' . $rack->type . '.' . $rack->no_rack .'</p>
                            <p class="spacer"><span>Terpakai</span>: ' . $rack->used . '</p>
                            <p class="spacer"><span>Kapasitas</span>: ' . $rack->capacity .'</p>';
                @endphp
                <div class="display-table" data-toggle="tooltip" data-html="true" title="{{ $html }}">
                    <div>
                        <div class="box3 right bottom left">2</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col square bottom">
        
    </div>
    <div class="col square right bottom">
        <div class="row">
            <div class="col">
                <div class="display-table mt-1" style="margin-left: -12px;">
                    <div>
                        <div class="box1 top right bottom left">22</div>
                        <div class="box1 top right bottom">23</div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="display-table mt-1">
                    <div>
                        <div class="box1 top right bottom left">24</div>
                        <div class="box1 top right bottom">33</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col square bottom">
        <div class="row">
            <div class="col">
                <div class="display-table mt-2">
                    <div>
                        <div class="box5 top right bottom left">1 1 7</div>
                        <div class="box5 top right bottom">1 1 6</div>
                    </div>
                </div>
                <div class="display-table">
                    <div>
                        <div class="box5 right bottom left">1 1 8</div>
                        <div class="box5 right bottom">1 1 5</div>
                    </div>
                </div>
                <div class="display-table">
                    <div>
                        <div class="box5 right bottom left">1 1 9</div>
                        <div class="box5 right bottom">1 1 4</div>
                    </div>
                </div>
                <div class="display-table">
                    <div>
                        <div class="box5 right bottom left">1 2 0</div>
                        <div class="box5 right bottom">1 1 3</div>
                    </div>
                </div>
            </div>
            <div class="col"></div>
            <div class="col">
                <div class="display-table mt-2">
                    <div>
                        <div class="box5 top right bottom left">1 0 9</div>
                        <div class="box5 top right bottom">1 0 8</div>
                    </div>
                </div>
                <div class="display-table">
                    <div>
                        <div class="box5 right bottom left">1 1 0</div>
                        <div class="box5 right bottom">1 0 7</div>
                    </div>
                </div>
                <div class="display-table">
                    <div>
                        <div class="box5 right bottom left">1 1 1</div>
                        <div class="box5 right bottom">1 0 6</div>
                    </div>
                </div>
                <div class="display-table">
                    <div>
                        <div class="box5 right bottom left">1 1 2</div>
                        <div class="box5 right bottom">1 0 5</div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="display-table mt-2">
                    <div>
                        <div class="box5 top right bottom left">1 0 0</div>
                        <div class="box5 top right bottom">9 9</div>
                    </div>
                </div>
                <div class="display-table">
                    <div>
                        <div class="box5 right bottom left">1 0 2</div>
                        <div class="box5 right bottom">9 8</div>
                    </div>
                </div>
                <div class="display-table">
                    <div>
                        <div class="box5 right bottom left">1 0 3</div>
                        <div class="box5 right bottom">9 7</div>
                    </div>
                </div>
                <div class="display-table">
                    <div>
                        <div class="box5 right bottom left">1 0 4</div>
                        <div class="box5 right bottom">9 6</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col square right bottom">
        <div class="row">
            <div class="col ml-3">
                <div class="display-table mt-3">
                    <div>
                        <div class="box5 top right bottom left">9 2</div>
                        <div class="box5 top right bottom">9 1</div>
                    </div>
                </div>
                <div class="display-table">
                    <div>
                        <div class="box5 right bottom left">9 3</div>
                        <div class="box5 right bottom">9 0</div>
                    </div>
                </div>
                <div class="display-table">
                    <div>
                        <div class="box5 right bottom left">9 4</div>
                        <div class="box5 right bottom">8 9</div>
                    </div>
                </div>
                <div class="display-table">
                    <div>
                        <div class="box5 right bottom left">9 5</div>
                        <div class="box5 right bottom">8 8</div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="display-table mt-3">
                    <div>
                        <div class="box5 top right bottom left">8 4</div>
                        <div class="box5 top right bottom">8 3</div>
                    </div>
                </div>
                <div class="display-table">
                    <div>
                        <div class="box5 right bottom left">8 5</div>
                        <div class="box5 right bottom">8 2</div>
                    </div>
                </div>
                <div class="display-table">
                    <div>
                        <div class="box5 right bottom left">8 6</div>
                        <div class="box5 right bottom">8 1</div>
                    </div>
                </div>
                <div class="display-table">
                    <div>
                        <div class="box5 right bottom left">8 7</div>
                        <div class="box5 right bottom">8 0</div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="display-table mt-3">
                    <div>
                        <div class="box5 top right bottom left">7 6</div>
                    </div>
                </div>
                <div class="display-table">
                    <div>
                        <div class="box5 right bottom left">7 7</div>
                    </div>
                </div>
                <div class="display-table">
                    <div>
                        <div class="box5 right bottom left">7 8</div>
                    </div>
                </div>
                <div class="display-table">
                    <div>
                        <div class="box5 right bottom left">7 9</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>