
    <div class="container mt-5">
        <div class="row">
            @foreach($videwDataKey as $videwData)
                <div class="col-md-4 mb-2">
                        <div class="embed-responsive embed-responsive-16by9 mt-10">
                            <a href="{{url('/videoDetailsPage/'.$videwData->id."/".$videwData->videwName)}}">
                                <video class="embed-responsive-item"preload="auto"  controls
                                       src="{{$videwData->videwUrl}}" >
                                </video>
                            </a>
                        </div>
                        <h5>{{$videwData->videwName}}</h5>
                        <div id="description">

                        </div>
                </div>
            @endforeach
        </div>
    </div>
