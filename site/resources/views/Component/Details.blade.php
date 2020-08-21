
<div class="container mt-5">
    <div class="row">
        @foreach($videwDataKey as $videwData)
            <div class="col-md-7 mb-2">
                <div class="embed-responsive embed-responsive-16by9 mt-10">
                    <video class="embed-responsive-item"preload="auto" autoplay="true"  controls
                           src="{{$videwData->videwUrl}}" allowfullscreen>
                    </video>
                </div>
                <h5>{{$videwData->videwName}}</h5>
            </div>
        @endforeach
    </div>
</div>
