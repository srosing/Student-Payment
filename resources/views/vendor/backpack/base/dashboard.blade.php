@extends(backpack_view('blank'))

@php
    $widgets['before_content'][] = [
        'type'        => 'jumbotron',
        'heading'     => trans('backpack::base.welcome'),
        'content'     => trans('backpack::base.use_sidebar'),
        'button_link' => backpack_url('logout'),
        'button_text' => trans('backpack::base.logout'),
    ];
@endphp

@section('content')
    <ol class="breadcrumb">
        <li class="breadcrumb-item">Home</li>
        <li class="breadcrumb-item"><a href="#">Admin</a></li>
        <li class="breadcrumb-item active">FOOD</li>
        <!-- Breadcrumb Menu-->
        <li class="breadcrumb-menu d-md-down-none">
            <div class="btn-group" role="group" aria-label="Button group"><a class="btn" href="#"><i class="icon-speech"></i></a><a class="btn" href="./"><i class="icon-graph"></i> &nbsp;Dashboard</a><a class="btn" href="#"><i class="icon-settings"></i> &nbsp;Settings</a></div>
        </li>
    </ol>

    <div class="card">
        <div class="card-header"><strong>Standard Buttons</strong></div>
        <div class="card-body">
            <div class="row align-items-center">
                <div class="col-12 col-xl mb-3 mb-xl-0">Normal</div>
                <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                    <button class="btn btn-block btn-primary" type="button">Primary</button>
                </div>
                <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                    <button class="btn btn-block btn-secondary" type="button">Secondary</button>
                </div>
                <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                    <button class="btn btn-block btn-success" type="button">Success</button>
                </div>
                <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                    <button class="btn btn-block btn-warning" type="button">Warning</button>
                </div>
                <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                    <button class="btn btn-block btn-danger" type="button">Danger</button>
                </div>
                <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                    <button class="btn btn-block btn-info" type="button">Info</button>
                </div>
                <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                    <button class="btn btn-block btn-light" type="button">Light</button>
                </div>
                <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                    <button class="btn btn-block btn-dark" type="button">Dark</button>
                </div>
                <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                    <button class="btn btn-block btn-link" type="button">Link</button>
                </div>
            </div>
            <div class="row align-items-center mt-3">
                <div class="col-12 col-xl mb-3 mb-xl-0">Active State</div>
                <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                    <button class="btn btn-block btn-primary active" type="button" aria-pressed="true">Primary</button>
                </div>
                <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                    <button class="btn btn-block btn-secondary active" type="button" aria-pressed="true">Secondary</button>
                </div>
                <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                    <button class="btn btn-block btn-success active" type="button" aria-pressed="true">Success</button>
                </div>
                <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                    <button class="btn btn-block btn-warning active" type="button" aria-pressed="true">Warning</button>
                </div>
                <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                    <button class="btn btn-block btn-danger active" type="button" aria-pressed="true">Danger</button>
                </div>
                <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                    <button class="btn btn-block btn-info active" type="button" aria-pressed="true">Info</button>
                </div>
                <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                    <button class="btn btn-block btn-light active" type="button" aria-pressed="true">Light</button>
                </div>
                <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                    <button class="btn btn-block btn-dark active" type="button" aria-pressed="true">Dark</button>
                </div>
                <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                    <button class="btn btn-block btn-link active" type="button" aria-pressed="true">Link</button>
                </div>
            </div>
            <div class="row align-items-center mt-3">
                <div class="col-12 col-xl mb-3 mb-xl-0">Disabled</div>
                <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                    <button class="btn btn-block btn-primary" type="button" disabled="">Primary</button>
                </div>
                <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                    <button class="btn btn-block btn-secondary" type="button" disabled="">Secondary</button>
                </div>
                <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                    <button class="btn btn-block btn-success" type="button" disabled="">Success</button>
                </div>
                <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                    <button class="btn btn-block btn-warning" type="button" disabled="">Warning</button>
                </div>
                <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                    <button class="btn btn-block btn-danger" type="button" disabled="">Danger</button>
                </div>
                <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                    <button class="btn btn-block btn-info" type="button" disabled="">Info</button>
                </div>
                <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                    <button class="btn btn-block btn-light" type="button" disabled="">Light</button>
                </div>
                <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                    <button class="btn btn-block btn-dark" type="button" disabled="">Dark</button>
                </div>
                <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                    <button class="btn btn-block btn-link" type="button" disabled="">Link</button>
                </div>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-header"><strong>Outline Buttons</strong></div>
        <div class="card-body">
            <p>Use <code>.btn-outline-*</code> class for outline buttons.</p>
            <div class="row align-items-center">
                <div class="col-12 col-xl mb-3 mb-xl-0">Normal</div>
                <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                    <button class="btn btn-block btn-outline-primary" type="button">Primary</button>
                </div>
                <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                    <button class="btn btn-block btn-outline-secondary" type="button">Secondary</button>
                </div>
                <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                    <button class="btn btn-block btn-outline-success" type="button">Success</button>
                </div>
                <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                    <button class="btn btn-block btn-outline-warning" type="button">Warning</button>
                </div>
                <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                    <button class="btn btn-block btn-outline-danger" type="button">Danger</button>
                </div>
                <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                    <button class="btn btn-block btn-outline-info" type="button">Info</button>
                </div>
                <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                    <button class="btn btn-block btn-outline-light" type="button">Light</button>
                </div>
                <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                    <button class="btn btn-block btn-outline-dark" type="button">Dark</button>
                </div>
                <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0"></div>
            </div>
            <div class="row align-items-center mt-3">
                <div class="col-12 col-xl mb-3 mb-xl-0">Active State</div>
                <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                    <button class="btn btn-block btn-outline-primary active" type="button" aria-pressed="true">Primary</button>
                </div>
                <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                    <button class="btn btn-block btn-outline-secondary active" type="button" aria-pressed="true">Secondary</button>
                </div>
                <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                    <button class="btn btn-block btn-outline-success active" type="button" aria-pressed="true">Success</button>
                </div>
                <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                    <button class="btn btn-block btn-outline-warning active" type="button" aria-pressed="true">Warning</button>
                </div>
                <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                    <button class="btn btn-block btn-outline-danger active" type="button" aria-pressed="true">Danger</button>
                </div>
                <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                    <button class="btn btn-block btn-outline-info active" type="button" aria-pressed="true">Info</button>
                </div>
                <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                    <button class="btn btn-block btn-outline-light active" type="button" aria-pressed="true">Light</button>
                </div>
                <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                    <button class="btn btn-block btn-outline-dark active" type="button" aria-pressed="true">Dark</button>
                </div>
                <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0"></div>
            </div>
            <div class="row align-items-center mt-3">
                <div class="col-12 col-xl mb-3 mb-xl-0">Disabled</div>
                <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                    <button class="btn btn-block btn-outline-primary" type="button" disabled="">Primary</button>
                </div>
                <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                    <button class="btn btn-block btn-outline-secondary" type="button" disabled="">Secondary</button>
                </div>
                <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                    <button class="btn btn-block btn-outline-success" type="button" disabled="">Success</button>
                </div>
                <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                    <button class="btn btn-block btn-outline-warning" type="button" disabled="">Warning</button>
                </div>
                <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                    <button class="btn btn-block btn-outline-danger" type="button" disabled="">Danger</button>
                </div>
                <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                    <button class="btn btn-block btn-outline-info" type="button" disabled="">Info</button>
                </div>
                <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                    <button class="btn btn-block btn-outline-light" type="button" disabled="">Light</button>
                </div>
                <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                    <button class="btn btn-block btn-outline-dark" type="button" disabled="">Dark</button>
                </div>
                <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0"></div>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-header"><strong>Ghost Buttons</strong></div>
        <div class="card-body">
            <p>Use <code>.btn-ghost-*</code> class for ghost buttons.</p>
            <div class="row align-items-center">
                <div class="col-12 col-xl mb-3 mb-xl-0">Normal</div>
                <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                    <button class="btn btn-block btn-ghost-primary" type="button">Primary</button>
                </div>
                <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                    <button class="btn btn-block btn-ghost-secondary" type="button">Secondary</button>
                </div>
                <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                    <button class="btn btn-block btn-ghost-success" type="button">Success</button>
                </div>
                <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                    <button class="btn btn-block btn-ghost-warning" type="button">Warning</button>
                </div>
                <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                    <button class="btn btn-block btn-ghost-danger" type="button">Danger</button>
                </div>
                <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                    <button class="btn btn-block btn-ghost-info" type="button">Info</button>
                </div>
                <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                    <button class="btn btn-block btn-ghost-light" type="button">Light</button>
                </div>
                <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                    <button class="btn btn-block btn-ghost-dark" type="button">Dark</button>
                </div>
                <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0"></div>
            </div>
            <div class="row align-items-center mt-3">
                <div class="col-12 col-xl mb-3 mb-xl-0">Active State</div>
                <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                    <button class="btn btn-block btn-ghost-primary active" type="button" aria-pressed="true">Primary</button>
                </div>
                <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                    <button class="btn btn-block btn-ghost-secondary active" type="button" aria-pressed="true">Secondary</button>
                </div>
                <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                    <button class="btn btn-block btn-ghost-success active" type="button" aria-pressed="true">Success</button>
                </div>
                <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                    <button class="btn btn-block btn-ghost-warning active" type="button" aria-pressed="true">Warning</button>
                </div>
                <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                    <button class="btn btn-block btn-ghost-danger active" type="button" aria-pressed="true">Danger</button>
                </div>
                <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                    <button class="btn btn-block btn-ghost-info active" type="button" aria-pressed="true">Info</button>
                </div>
                <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                    <button class="btn btn-block btn-ghost-light active" type="button" aria-pressed="true">Light</button>
                </div>
                <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                    <button class="btn btn-block btn-ghost-dark active" type="button" aria-pressed="true">Dark</button>
                </div>
                <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0"></div>
            </div>
            <div class="row align-items-center mt-3">
                <div class="col-12 col-xl mb-3 mb-xl-0">Disabled</div>
                <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                    <button class="btn btn-block btn-ghost-primary" type="button" disabled="">Primary</button>
                </div>
                <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                    <button class="btn btn-block btn-ghost-secondary" type="button" disabled="">Secondary</button>
                </div>
                <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                    <button class="btn btn-block btn-ghost-success" type="button" disabled="">Success</button>
                </div>
                <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                    <button class="btn btn-block btn-ghost-warning" type="button" disabled="">Warning</button>
                </div>
                <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                    <button class="btn btn-block btn-ghost-danger" type="button" disabled="">Danger</button>
                </div>
                <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                    <button class="btn btn-block btn-ghost-info" type="button" disabled="">Info</button>
                </div>
                <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                    <button class="btn btn-block btn-ghost-light" type="button" disabled="">Light</button>
                </div>
                <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                    <button class="btn btn-block btn-ghost-dark" type="button" disabled="">Dark</button>
                </div>
                <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0"></div>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-header"><strong>With Icons</strong></div>
        <div class="card-body">
            <div class="row align-items-center mt-3">
                <div class="col-6 col-sm-4 col-md mb-3 mb-xl-0 text-center">
                    <button class="btn btn-primary" type="button"><i class="fa fa-lightbulb-o"></i>&nbsp;Standard Button</button>
                </div>
                <div class="col-6 col-sm-4 col-md mb-3 mb-xl-0 text-center">
                    <button class="btn btn-outline-secondary" type="button"><i class="fa fa-lightbulb-o"></i>&nbsp;Outline Button</button>
                </div>
                <div class="col-6 col-sm-4 col-md mb-3 mb-xl-0 text-center">
                    <button class="btn btn-ghost-success" type="button"><i class="fa fa-lightbulb-o"></i>&nbsp;Ghost Button</button>
                </div>
                <div class="col-6 col-sm-4 col-md mb-3 mb-xl-0 text-center">
                    <button class="btn btn-square btn-warning" type="button"><i class="fa fa-lightbulb-o"></i>&nbsp;Square Button</button>
                </div>
                <div class="col-6 col-sm-4 col-md mb-3 mb-xl-0 text-center">
                    <button class="btn btn-pill btn-danger" type="button"><i class="fa fa-lightbulb-o"></i>&nbsp;Pill Button</button>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header"><strong>Block Level Buttons</strong></div>
                <div class="card-body">
                    <p>Add this class<code>.btn-block</code></p>
                    <button class="btn btn-secondary btn-lg btn-block" type="button">Block level button</button>
                    <button class="btn btn-primary btn-lg btn-block" type="button">Block level button</button>
                    <button class="btn btn-success btn-lg btn-block" type="button">Block level button</button>
                    <button class="btn btn-info btn-lg btn-block" type="button">Block level button</button>
                    <button class="btn btn-warning btn-lg btn-block" type="button">Block level button</button>
                    <button class="btn btn-danger btn-lg btn-block" type="button">Block level button</button>
                    <button class="btn btn-link btn-lg btn-block" type="button">Block level button</button>
                </div>
            </div>
        </div>
        <!-- /.col-->
        <div class="col-md-6">
            <div class="card">
                <div class="card-header"><strong>Block Level Buttons</strong></div>
                <div class="card-body">
                    <p>Add this class<code>.btn-block</code></p>
                    <button class="btn btn-outline-secondary btn-lg btn-block" type="button">Block level button</button>
                    <button class="btn btn-outline-primary btn-lg btn-block" type="button">Block level button</button>
                    <button class="btn btn-outline-success btn-lg btn-block" type="button">Block level button</button>
                    <button class="btn btn-outline-info btn-lg btn-block" type="button">Block level button</button>
                    <button class="btn btn-outline-warning btn-lg btn-block" type="button">Block level button</button>
                    <button class="btn btn-outline-danger btn-lg btn-block" type="button">Block level button</button>
                </div>
            </div>
        </div>
        <!-- /.col-->
    </div>
@endsection
