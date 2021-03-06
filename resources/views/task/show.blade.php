@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <h4 class="title">Project View</h4>

        <div class="col-md-12">
            <div class="title">{{ $project->title }}</div>
            <p>{{ $project->description }}</p>

            <div>

                <!-- Nav tabs -->
                <ul class="nav nav-tabs" role="tablist">
                    <li role="presentation" >
                        <a href="#home" aria-controls="home" role="tab" data-toggle="tab">
                            Info
                        </a>
                    </li>
                    <li role="presentation">
                        <a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">
                            Task
                        </a>
                    </li>
                    <li role="presentation" >
                        <a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">
                            Stages
                        </a>
                    </li>
                    <li role="presentation" class="active">
                        <a href="#people" aria-controls="settings" role="tab" data-toggle="tab">
                            People
                        </a>
                    </li>
                </ul>

                <!-- Tab panes -->
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane" id="home">
                        <h5>Info</h5>
                        
                    </div>
                    <div role="tabpanel" class="tab-pane" id="profile">
                        <h5>Task</h5>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="messages">
                        <h5>Stages</h5>
                    </div>
                    <div role="tabpanel" class="tab-pane active" id="people">
                        <h5>People</h5>
                    </div>
                </div>

            </div>

        </div>

    </div>
</div>
@endsection
