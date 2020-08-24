
<div class="container mt-5">
    <div class="row">
        <div class="col-md-8">
            <div class="embed-responsive embed-responsive-16by9 mt-10">
                    <video class="embed-responsive-item"preload="auto"  controls
                           src="{{$detailsKey->videwUrl}}">
                    </video>
                </a>
            </div>
            <h5>{{$detailsKey->videwName}}</h5>
        </div>

        @foreach($DetailsSideVideo as $ShowsideVideo)
        <div class="col-md-3">
            <div class="embed-responsive embed-responsive-16by9">
                <a href="{{url('/videoDetailsPage/'.$ShowsideVideo->id."/".$ShowsideVideo->videwName)}}">
                <video class="embed-responsive-item"preload="auto"  controls
                       src="{{$ShowsideVideo->videwUrl}}" >
                </video>
                </a>
            </div>
            <h6>{{$ShowsideVideo->videwName}}</h6>
        </div>
        @endforeach
    </div>
</div>
