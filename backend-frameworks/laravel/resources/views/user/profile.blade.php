@extends ('templates.main')

@section ('content')
    <h1>Update Profile</h1>

    <form method="POST" action="{{ route('user-profile-information.update') }}">
        @csrf
        @method("PUT")
        <div class="row">
            <div class="mb-3 col">
                <label for="name" class="form-label">First Name</label>
                <input name="name" type="text" class="form-control @error('name') is-invalid @enderror" id="name" aria-describedby="name" value="{{ auth()->user()->name }}">
                @error('name')
                    <span class="invalid-feedback" role="alert">
                        {{$message}}
                    </span>
                @enderror
            </div>
            <div class="mb-3 col">
                <label for="last_name" class="form-label">Last Name</label>
                <input name="last_name" type="text" class="form-control @error('last_name') is-invalid @enderror" id="last_name" aria-describedby="last_name" value="{{ auth()->user()->last_name }}">
                @error('last_name')
                    <span class="invalid-feedback" role="alert">
                        {{$message}}
                    </span>
                @enderror
            </div>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email address</label>
            <input name="email" type="email" class="form-control @error('email') is-invalid @enderror" id="email" aria-describedby="email" value="{{ auth()->user()->email }}">
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            @error('email')
            <span class="invalid-feedback" role="alert">
                    {{$message}}
                </span>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
@endsection
