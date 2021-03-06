@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <h4 class="title">Create Project</h4>
        <div class="col-md-12">
            <form class="form-horizontal" role="form" method="POST" 
                  action="{{ url('/project') }}">
                {!! csrf_field() !!}

                @include('project._fields')

                <div class="form-group">
                    <div class="col-md-8 col-md-offset-2">
                        <button type="submit" class="btn btn-primary">
                            Create
                        </button>
                    </div>
                </div>
            </form>


        </div>
    </div>
</div>
@endsection
