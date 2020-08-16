
    <div class="container mt-5">
        <div class="row">
            @foreach($videwDataKey as $videwData)
                <div class="col-md-4 mb-2">
                    <a href="{{url('/videoDetailsPage/'.$videwData->id."/".$videwData->videwName)}}">
                        <div class="embed-responsive embed-responsive-16by9 mt-10">
                            <iframe class="embed-responsive-item" src="{{$videwData->videwUrl}}" allowfullscreen></iframe>
                        </div>
                        <h5>{{$videwData->videwName}}</h5>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
