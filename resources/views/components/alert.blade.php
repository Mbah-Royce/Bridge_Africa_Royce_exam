<div>
    {{$slot}}
    @if(session()->has('message'))
                    <div class="alert alert-success text-center"role="alert">{{session()->get('message')}}</div>
                    @elseif(session()->has('error'))
                    <div class="alert alert-danger text-center"role="alert">{{session()->get('error')}}</div>
                    @endif
    
                    @if ($errors->any())
        <div class="alert alert-danger text-center"role="alert">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    
    </div>