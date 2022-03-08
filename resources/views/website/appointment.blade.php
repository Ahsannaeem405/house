@extends('layouts.main')

@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="container">
                    <div class="row my-5">
                        <div class="col-md-12">
                            <!-- Calendly inline widget begin -->
                            <div class="calendly-inline-widget" data-url="https://calendly.com/irfanbhatti17" style="min-width:320px;height:630px;"></div>
                            <script type="text/javascript" src="https://assets.calendly.com/assets/external/widget.js" async></script>
                            <!-- Calendly inline widget end -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
