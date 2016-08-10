@extends($layout)

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2">
                @include('layouts.leftMenu')
            </div>

            <div class="col-md-8 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">{{ trans('common.dashboard')}}</div>

                    <div class="panel-body">

                        @include('layouts.partials.error')
                        @include('layouts.partials.success')

                        {{ trans('common.logged')}}

                    </div>
                </div>
            </div>
        </div>
    </div>

@stop
