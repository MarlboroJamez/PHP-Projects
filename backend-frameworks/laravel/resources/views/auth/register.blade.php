@extends ('templates.main')

@section ('content')
    <h1>Register Now</h1>

    <form method="POST" action="{{ route('register') }}">
        @csrf
        <div class="row">
            <div class="mb-3 col">
                <label for="name" class="form-label">First Name</label>
                <input name="name" type="text" class="form-control @error('name') is-invalid @enderror" id="name" aria-describedby="name" value="{{ old('name') }}">
                @error('name')
                    <span class="invalid-feedback" role="alert">
                        {{$message}}
                    </span>
                @enderror
            </div>
            <div class="mb-3 col">
                <label for="last_name" class="form-label">Last Name</label>
                <input name="last_name" type="text" class="form-control @error('last_name') is-invalid @enderror" id="last_name" aria-describedby="last_name" value="{{ old('last_name') }}">
                @error('last_name')
                    <span class="invalid-feedback" role="alert">
                        {{$message}}
                    </span>
                @enderror
            </div>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email address</label>
            <input name="email" type="email" class="form-control @error('email') is-invalid @enderror" id="email" aria-describedby="email" value="{{ old('email') }}">
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            @error('email')
            <span class="invalid-feedback" role="alert">
                    {{$message}}
                </span>
            @enderror
        </div>
        <div class="mb-3">
            <label for="password" class="form-label ">Password</label>
            <input name="password" type="password" class="form-control @error('password') is-invalid @enderror" id="password">
            @error('password')
            <span class="invalid-feedback" role="alert">
                    {{$message}}
                </span>
            @enderror
        </div>
        <div class="mb-3">
            <label for="password_confirmation" class="form-label">Confirm Password</label>
            <input name="password_confirmation" type="password" class="form-control" id="password_confirmation">
            @error('password_confirmation')
            <span class="invalid-feedback" role="alert">
                    {{$message}}
                </span>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
