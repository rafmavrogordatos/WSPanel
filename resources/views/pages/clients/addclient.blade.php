@extends('layout.master')

@push('plugin-styles')
@endpush

@section('content')

<div class="row">
    <div class="col-lg-6 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Add new Client</h4>
                <p class="card-description">Enter customer information</p>
                <form>
                        <div class="form-group">
                            <label for="firstName">First Name</label>
                            <input type="text" class="form-control" id="firstName" placeholder="John">
                          </div>
                          <div class="form-group">
                            <label for="lastName">Last Name</label>
                            <input type="text" class="form-control" id="lastName" placeholder="Doe">
                          </div>
                          <div class="form-group">
                            <label for="companyName">Company Name</label>
                            <input type="text" class="form-control" id="companyName" placeholder="WEBSUNRISE">
                          </div>
                          <div class="form-group">
                            <label for="phone">Phone</label>
                            <input type="text" class="form-control" id="phone" placeholder="+44.7545958574">
                          </div>
                          <div class="form-group">
                            <label for="email">Email address</label>
                            <input type="email" class="form-control" id="email" placeholder="name@example.com">
                          </div>
                          <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" id="password" placeholder="&bull;&bull;&bull;&bull;&bull;&bull;&bull;&bull;">
                        </div>
                        <div class="form-group">
                            <button class="btn btn-primary" type="submit">Submit</button>
                        </div>
            </div>
        </div>
    </div>
    <div class="col-lg-6 grid-margin stretch-card">
            <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">&nbsp;</h4>
                        <p class="card-description">Enter billing information</p>
                        <div class="form-group">
                            <label for="address1">Address 1</label>
                            <input type="text" class="form-control" id="address1" placeholder="FLAT 43">
                        </div>
                        <div class="form-group">
                            <label for="address2">Address 2</label>
                            <input type="text" class="form-control" id="address2" placeholder="Aubrey House">
                        </div>
                        <div class="form-group">
                            <label for="city">City</label>
                            <input type="text" class="form-control" id="city" placeholder="London">
                        </div>
                        <div class="form-group">
                            <label for="postcode">Postcode</label>
                            <input type="text" class="form-control" id="postcode" placeholder="E17 5QL">
                        </div>
                        <div class="form-group">
                            <label for="country">Country</label>
                            <input type="text" class="form-control" id="country" placeholder="United Kingdom">
                        </div>
                        <div class="form-group">
                            <label for="notes">Admin Notes</label>
                            <textarea type="text" class="form-control" id="country" placeholder="Enter notes here..."></textarea>
                        </div>
                    </div>
            </div>
        </form>
    </div>

</div>

@endsection