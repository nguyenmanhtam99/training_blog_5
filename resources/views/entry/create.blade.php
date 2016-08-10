@extends($layout)

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2">
                @include('layouts.leftMenu')
            </div>

            <div class="col-md-8 col-md-offset-1">
                <div class="container-fluid">
                    <div class="row page-title-row">
                        <div class="col-md-12">
                            <h3> {{ trans('entry.entry') }} <small>&raquo; {{ trans('entry.create_entry') }}</small></h3>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-10 col-md-offset-0">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"> {{ trans('entry.create_new') }} </h3>
                            </div>
                            <div class="panel-body">

                                <div>
                                    @include('layouts.partials.error')
                                    @include('layouts.partials.success')
                                </div>

                                {!! Form::open(['method' => 'POST', 'route' => 'user.entry.store', 'class' => 'form-horizontal']) !!}
                                <div class="form-group">
                                    {!! Form::label('title', trans('entry.title'), ['class' => 'control-label']) !!}
                                    {!! Form::text('title', null, ['class' => 'form-control', 'autofocus']) !!}
                                </div>

                                <div class="form-group">
                                    {!! Form::label('body', trans('entry.body'), ['class' => 'control-label']) !!}
                                    {!! Form::textarea('body', null, ['class' => 'form-control', 'autofocus', 'rows' => '3']) !!}
                                </div>

                                <div class="form-group">
                                    {!! Form::button('<i class="fa fa-plus-circle"></i>&nbsp;' . trans('entry.add'), ['type' => 'submit', 'class' => 'btn btn-primary btn-md']) !!}
                                </div>
                                {!! Form::close() !!}

                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@stop
