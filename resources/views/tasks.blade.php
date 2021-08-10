@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="col-sm-offset-2 col-sm-8">
            <!-- Bootstrap Boilerplate... -->
            <div class="panel panel-default">
                <div class="panel-heading">
                    {{ __('task.new_task') }}
                </div>
                <button><a href="{!! route('user.change-language', ['en']) !!}">{{ __('english') }}</a></button>
                <button><a href="{!! route('user.change-language', ['vi']) !!}">{{ __('vietnam') }}</a></button>
                <div class="panel-body">
                    <!-- Display Validation Errors -->
                    @include('common.errors')

                    <!-- New Task Form -->
                    <form action="" method="POST" class="form-horizontal">
                        {{ csrf_field() }}

                        <!-- Task Name -->
                        <div class="form-group">
                            <label for="task" class="col-sm-3 control-label">{{ __('task.task') }}</label>
                            <div class="col-sm-6">
                                <input type="text" name="name" id="task-name" class="form-control">
                            </div>
                        </div>

                        <!-- Add Task Button -->
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-6">
                                <button type="submit" class="btn btn-default">
                                    <i class="fa fa-plus"></i> {{ __('task.add_task') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- TODO: Current Tasks -->
    </div>
@endsection
