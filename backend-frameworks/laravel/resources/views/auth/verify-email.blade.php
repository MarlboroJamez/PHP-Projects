@extends ('templates.main')

@section ('content')
    <h1>Verify Email Address</h1>
    <p>You must verify your email to access the page.</p>

    <form method="POST" action="{{ route('verification.send') }}">
        @csrf
        <button type="submit" class="btn btn-primary">Resend Verification Email</button>
    </form>
@endsection
