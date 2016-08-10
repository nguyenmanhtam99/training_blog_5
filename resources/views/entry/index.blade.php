@extends($layout)

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2">
                @include('layouts.leftMenu')
            </div>

            <div class="col-md-8 col-md-offset-1">
                <section>
                    <div class="row page-title-row">
                        <div class="col-md-8">
                            <h3> {{ trans('entry.entry') }} <small>&raquo; {{ trans('entry.list') }}</small></h3>
                            <p><a href="{{ route('user.entry.create') }}"
                                  class="btn btn-primary" role="button"><i class="fa fa-plus-circle"></i></a></p>
                        </div>
                    </div>

                        @foreach ($entries as $entry)
                            <div class="row">
                                <div class="col-sm-12 col-md-12">
                                    <div class="alert alert-danger">
                                    <div class="thumbnail">

                                        <div class="caption">
                                            <h3>{{ $entry->title }}</h3>
                                            <div class="clearfix">

                                            </div>
                                            <p><a href="{{ route('user.entry.show', $entry->id) }}">details</a></p>
                                        </div>
                                    </div>
                                     </div>
                                </div>
                            </div>
                        @endforeach
                    {{ $entries->render() }}
                </section>
            </div>
        </div>
    </div>

@stop
