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
                            <h3>{{ trans('entry.detail') }}</h3>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-10 col-md-offset-1">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <div class="dataTable_wrapper">
                                    <table class="table table-striped table-bordered table-hover" id="dataTables">
                                        <tr>
                                            <td>{{ $entry->title }}</td>
                                        </tr>
                                        <tr>
                                            <td>{{ $entry->body }}</td>
                                        </tr>
                                    </table>
                                </div>

                            </div>

                        </div>
                        <a id="comment" class="btn btn-danger comment">
                            {{ trans('entry.comment') }}
                        </a>

                        <div class="panel-body" id="commentEntry">
                            <div class="box">
                                {!! Form::open(['method' => 'POST', 'route' =>['user.entry.comment.store', $entry->id], 'class' => 'form-horizontal']) !!}

                                <div class="form-group">
                                    {!! Form::label('comment', trans('entry.comment'), ['class' => 'control-label']) !!}
                                    {!! Form::textarea('comment', null, ['class' => 'form-control', 'autofocus', 'rows' => '3']) !!}
                                </div>

                                <div class="form-group">
                                    {!! Form::button(trans('entry.add'), ['type' => 'submit', 'class' => 'btn btn-success']) !!}
                                </div>
                            </div>
                        </div>
                        <div class="comments-block">
                            <div class="comments comments-list">
                                @foreach($comments as $comment)
                                    <div class="commentId">
                                        <div class="comment_content">
                                            <div class="comment_text">
                                                <p>{{ $comment->comment }}</p>
                                            </div>
                                            <div class="comment-info">
                                                <span class="comment-from">
                                                    {{ trans('entry.to') }}:
                                                    <span class="comment-author">
                                                        {{ $comment->user->name }}
                                                    </span>
                                                    <span class="comment-time">
                                                        {{ trans('entry.date') }}:{{ $comment->created_at }}
                                                    </span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
@stop
