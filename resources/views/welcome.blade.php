<!doctype html>
<html lang="en">
<head>
    <title>Synergi</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="{{asset('template/css/style.css')}}">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
</head>
<body>
<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="wrapper">
                    <div class="row no-gutters mb-5">
                        <div class="col-md-12">
                            <div class="contact-wrap w-100 p-md-5 p-4">
                                <h3 class="mb-4">Register User</h3>
                                @if(session()->has('success_message'))
                                    <div class="alert alert-success text-center">
                                        {{ session()->get('success_message') }}
                                    </div>
                                @endif
                                @if(Session()->has('error_message'))
                                    <div id="form-message-warning" class="mb-4">
                                        {{ session()->get('error_message') }}
                                    </div>
                                @endif
                                <form method="POST" name="contactForm" class="contactForm" action="{{route('users.create')}}">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="label" for="name">First Name</label>
                                                <input type="text" class="form-control" name="first_name" id="Fname" placeholder="First Name" value="{{ old('first_name') }}">
                                                @error('last_name')
                                                <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="label" for="email">Last Name</label>
                                                <input type="text" class="form-control" name="last_name" id="Lname" placeholder="Last Name" value="{{ old('last_name') }}">
                                                @error('last_name')
                                                <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label class="label" for="email">Email Address</label>
                                                <input type="email" class="form-control" name="email" id="email" placeholder="JonDoe@xyz.com" value="{{ old('email') }}">
                                                @error('last_name')
                                                <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label class="label" for="additional">Additional Information</label>
                                                <textarea name="additional_information" class="form-control" id="additional" cols="30" rows="4" placeholder="Write additional Infos"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <input type="submit" value="Send Message" class="btn btn-primary">
                                                <div class="submitting"></div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    @if($users_count >0)
                    <div class="row no-gutters mb-5">
                        <div class="col-md-12">
                            <div class="contact-wrap w-100 p-md-5 p-4">
                                <h3 class="mb-4">Listing User</h3>
                                <table class="table table-dark">
                                    <thead>
                                    <tr>
                                        <th scope="col">First Name</th>
                                        <th scope="col">Last Name</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Added date</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach ($users as $user)
                                        <tr>
                                            <td>{{ $user->first_name }}</td>
                                            <td>{{ $user->last_name }}</td>
                                            <td>{{ $user->email }}</td>
                                            <td>{{ $user->created_at }}</td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                                {{ !!$users->links() }}
                            </div>
                        </div>
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</section>

<script src="{{asset('template/js/jquery.min.js')}}"></script>
<script src="{{asset('template/js/popper.js')}}"></script>
<script src="{{asset('template/js/bootstrap.min.js')}}"></script>
<script src="{{asset('template/js/jquery.validate.min.js')}}"></script>
<script src="{{asset('template/js/main.js')}}"></script>

</body>
</html>

