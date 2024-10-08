<div class="container mt-5 pb-5">
    <div class="row justify-content-center">
        <div class="col-lg-10">
            <div class="pricing card-group flex-column flex-md-row mb-3">
                <div class="card card-pricing border-0 text-center mb-4">
                    <div class="card-header bg-transparent">
                        <h4 class="text-uppercase ls-1 text-primary py-3 mb-0">Options</h4>
                    </div>
                    <div class="card-body px-lg-7">
                        <div class="row">
                            <div class="col-6">
                                <a href="#">
                                    <button type="button" class="btn btn-primary mb-3" style="width: 150px;">Wifi Connect</button>
                                </a>
                            </div>
                            <div class="col-6">
                                <a href="#">
                                    <button type="button" class="btn btn-primary mb-3" style="width: 150px;">Agent Portal</button>
                                </a>
                            </div>
                            <div class="col-6">
                                <a href="{{route('register')}}">
                                    <button type="button" class="btn btn-primary mb-3" style="width: 150px;">Register</button>
                                </a>
                            </div>
                            <div class="col-6">
                                <a href="{{route('login')}}">
                                    <button type="button" class="btn btn-primary mb-3" style="width: 150px;">Login</button>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-lg-6 col-md-8">
                            <div class="card bg-secondary border-0">
                                <div class="card-body px-lg-5 py-lg-5">
                                    <div class="text-center text-muted mb-4">
                                        <small>Fill-up Form</small>
                                        @if(session('success'))
                                            <div class="alert alert-success">
                                                {{ session('success') }}
                                            </div>
                                        @endif
                                    </div>
                                    <form action="{{ route('users.store') }}" method="POST">@csrf
                                        <!--User Name-->
                                        <div class="form-group">
                                            <div class="input-group input-group-merge input-group-alternative mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="ni ni-hat-3"></i></span>
                                                </div>
                                                <input id="name" name="name"class="form-control" placeholder="Name" type="text" value="{{ old('name') }}" required>
                                                @error('name')
                                                    <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <!-- User Email-->
                                        <div class="form-group">
                                            <div class="input-group input-group-merge input-group-alternative mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                                                </div>
                                                <input id="email" name="email" class="form-control" placeholder="Email" type="email" value="{{ old('email') }}" required>
                                                @error('email')
                                                    <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <!-- User Mobile Phone-->
                                        <div class="form-group">
                                            <div class="input-group input-group-merge input-group-alternative">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="ni ni-mobile-button"></i></span>
                                                </div>
                                                <input id="phone" name="phone" class="form-control" placeholder="Mobile Phone" type="text" value="{{ old('phone') }}">
                                                @error('phone')
                                                    <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <!-- User Address-->
                                        <div class="form-group">
                                            <div class="input-group input-group-merge input-group-alternative">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="ni ni-building"></i></span>
                                            </div>
                                            
                                            <textarea name="address" placeholder="Address" class="form-control" id="address">{{ old('address') }}</textarea>
                                            @error('address')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                            </div>
                                        </div>
                                        <div class="row my-4">
                                            <div class="col-12">
                                                <div class="custom-control custom-control-alternative custom-checkbox">
                                                    <input class="custom-control-input" id="customCheckRegister" type="checkbox">
                                                    <label class="custom-control-label" for="customCheckRegister">
                                                        <span class="text-muted">I agree with the <a href="#!">Privacy Policy</a></span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="text-center">
                                            <button type="submit" class="btn btn-primary mt-4">Submit</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>  
</div>