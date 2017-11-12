@if(count($errors) > 0)
    @foreach($errors->all() as $err)
        <div id="card-alert" class="card-alert card red lighten-5">
            <div class="alert-content card-content red-text">
                <p>{{$err}}</p>
            </div>            
        </div>
    @endforeach
@endif

@if(session('success'))
    <div id="card-alert" class="card-alert card green lighten-5">
        <div class="alert-content card-content green-text">
            <p>{{session('success')}}</p>
        </div>
    </div>
@endif

@if(session('error'))
    <div id="card-alert" class="card-alert card red lighten-5">
            <div class="alert-content card-content red-text">
                <p>{{session('error')}}</p>
            </div>
        </div>
@endif