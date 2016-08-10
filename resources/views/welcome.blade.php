@extends($layout)

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">{{ trans('common.welcome')}}</div>

                    <div class="panel-body">
                        {{ trans('common.body')}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
