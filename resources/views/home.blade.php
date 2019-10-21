@extends('layouts.admin')
@section('content')
<div class="content">
    <div class="row">
        <div class="col-lg-12">
            <div class="row">
                <div class="{{ $settings1['column_class'] }}">
                    <div class="card text-white bg-primary">
                        <div class="card-body pb-0">
                            <div class="text-value">{{ number_format($settings1['total_number']) }}</div>
                            <div>{{ $settings1['chart_title'] }}</div>
                            <br />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('scripts')
@parent
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
@endsection