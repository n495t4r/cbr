@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 class="m-0 text-dark">Advanced Settings</h1>
@stop

@section('content')

<style>
    body{
        margin-top:20px;
        color: #1a202c;
        text-align: left;
        background-color: #e2e8f0;    
    }
    .main-body {
        padding: 15px;
    }

    .nav-link {
        color: #4a5568;
    }
    .card {
        box-shadow: 0 1px 3px 0 rgba(0,0,0,.1), 0 1px 2px 0 rgba(0,0,0,.06);
    }

    .card {
        position: relative;
        display: flex;
        flex-direction: column;
        min-width: 0;
        word-wrap: break-word;
        background-color: #fff;
        background-clip: border-box;
        border: 0 solid rgba(0,0,0,.125);
        border-radius: .25rem;
    }

    .card-body {
        flex: 1 1 auto;
        min-height: 1px;
        padding: 1rem;
    }

    .gutters-sm {
        margin-right: -8px;
        margin-left: -8px;
    }

    .gutters-sm>.col, .gutters-sm>[class*=col-] {
        padding-right: 8px;
        padding-left: 8px;
    }
    .mb-3, .my-3 {
        margin-bottom: 1rem!important;
    }

    .bg-gray-300 {
        background-color: #e2e8f0;
    }
    .h-100 {
        height: 100%!important;
    }
    .shadow-none {
        box-shadow: none!important;
    }
</style>

<div class="container">

      <!-- Breadcrumb -->
      {{-- <nav aria-label="breadcrumb" class="main-breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item"><a href="javascript:void(0)">User</a></li>
          <li class="breadcrumb-item active" aria-current="page">Settings</li>
        </ol>
      </nav> --}}
      <!-- /Breadcrumb -->

      <div class="row gutters-sm">
        <div class="col-md-3 d-none d-md-block">
          <div class="card">
            <div class="card-body">
              <nav class="nav flex-column nav-pills nav-gap-y-1">
                <a href="#profile" data-toggle="tab" class="nav-item nav-link has-icon nav-link-faded active">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user mr-2"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>Profile Information
                </a>
                <a href="#account" data-toggle="tab" class="nav-item nav-link has-icon nav-link-faded">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-settings mr-2"><circle cx="12" cy="12" r="3"></circle><path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z"></path></svg>Account Settings
                </a>
                <a href="#security" data-toggle="tab" class="nav-item nav-link has-icon nav-link-faded">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shield mr-2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path></svg>Security
                </a>
                <a href="#notification" data-toggle="tab" class="nav-item nav-link has-icon nav-link-faded">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-bell mr-2"><path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path><path d="M13.73 21a2 2 0 0 1-3.46 0"></path></svg>Notification
                </a>
                <a href="#billing" data-toggle="tab" class="nav-item nav-link has-icon nav-link-faded">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-credit-card mr-2"><rect x="1" y="4" width="22" height="16" rx="2" ry="2"></rect><line x1="1" y1="10" x2="23" y2="10"></line></svg>Billing
                </a>
              </nav>
            </div>
          </div>
        </div>
        <div class="col-md-9">
          <div class="card">
            <div class="card-header border-bottom mb-3 d-flex d-md-none">
              <ul class="nav nav-tabs card-header-tabs nav-gap-x-1" role="tablist">
                <li class="nav-item">
                  <a href="#profile" data-toggle="tab" class="nav-link has-icon active"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg></a>
                </li>
                <li class="nav-item">
                  <a href="#account" data-toggle="tab" class="nav-link has-icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-settings"><circle cx="12" cy="12" r="3"></circle><path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z"></path></svg></a>
                </li>
                <li class="nav-item">
                  <a href="#security" data-toggle="tab" class="nav-link has-icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shield"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path></svg></a>
                </li>
                <li class="nav-item">
                  <a href="#notification" data-toggle="tab" class="nav-link has-icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-bell"><path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path><path d="M13.73 21a2 2 0 0 1-3.46 0"></path></svg></a>
                </li>
                <li class="nav-item">
                  <a href="#billing" data-toggle="tab" class="nav-link has-icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-credit-card"><rect x="1" y="4" width="22" height="16" rx="2" ry="2"></rect><line x1="1" y1="10" x2="23" y2="10"></line></svg></a>
                </li>
              </ul>
            </div>
            <div class="card-body tab-content">
              <div class="tab-pane active" id="profile">
                <h6>YOUR PROFILE INFORMATION</h6>
                <hr>
                <form>
                  <div class="form-group">
                    <label for="fullName">Full Name</label>
                    <input type="text" class="form-control" id="fullName" aria-describedby="fullNameHelp" placeholder="Enter your fullname" value="Kenneth Valdez">
                    <small id="fullNameHelp" class="form-text text-muted">Your name may appear around here where you are mentioned. You can change or remove it at any time.</small>
                  </div>
                  <div class="form-group">
                    <label for="bio">Your Bio</label>
                    <textarea class="form-control autosize" id="bio" placeholder="Write something about you" style="overflow: hidden; overflow-wrap: break-word; resize: none; height: 62px;">A front-end developer that focus more on user interface design, a web interface wizard, a connector of awesomeness.</textarea>
                  </div>
                  <div class="form-group">
                    <label for="url">URL</label>
                    <input type="text" class="form-control" id="url" placeholder="Enter your website address" value="http://benije.ke/pozzivkij">
                  </div>
                  <div class="form-group">
                    <label for="location">Location</label>
                    <input type="text" class="form-control" id="location" placeholder="Enter your location" value="Bay Area, San Francisco, CA">
                  </div>
                  <div class="form-group small text-muted">
                    All of the fields on this page are optional and can be deleted at any time, and by filling them out, you're giving us consent to share this data wherever your user profile appears.
                  </div>
                  <button type="button" class="btn btn-primary">Update Profile</button>
                  <button type="reset" class="btn btn-light">Reset Changes</button>
                </form>
              </div>
              <div class="tab-pane" id="account">
                <h6>ACCOUNT SETTINGS</h6>
                <hr>
                <style>
                    .card {
                        position: relative;
                        display: flex;
                        flex-direction: column;
                        min-width: 0;
                        word-wrap: break-word;
                        background-color: #fff;
                        background-clip: border-box;
                        border: 0 solid transparent;
                        border-radius: 0;
                    }
                    .btn-circle.btn-lg, .btn-group-lg>.btn-circle.btn {
                        width: 50px;
                        height: 50px;
                        padding: 14px 15px;
                        font-size: 18px;
                        line-height: 23px;
                    }
                    .text-muted {
                        /* color: #8898aa!important; */
                    }
                    [type=button]:not(:disabled), [type=reset]:not(:disabled), [type=submit]:not(:disabled), button:not(:disabled) {
                        cursor: pointer;
                    }
                    .btn-circle {
                        border-radius: 100%;
                        width: 40px;
                        height: 40px;
                        padding: 10px;
                    }
                    .user-table tbody tr .category-select {
                        max-width: 150px;
                        border-radius: 20px;
                    }
                    </style>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                   
                                    <div class="table-responsive">
                                        <table class="table no-wrap user-table mb-0">
                                          <thead>
                                            <tr>
                                              <th scope="col" class="border-0 text-uppercase font-medium pl-4">#</th>
                                              <th scope="col" class="border-0 text-uppercase font-medium">State</th>
                                              <th scope="col" class="border-0 text-uppercase font-medium">LGA</th>
                                              <th scope="col" class="border-0 text-uppercase font-medium">Manage</th>
                                            </tr>
                                          </thead>
                                          <tbody>
                                            <tr>
                                              <td class="pl-4">1</td>
                                              <td>
                                                  <span class="text-muted">Cross River</span>
                                              </td>
                                              <td>
                                                  <span class="text-muted">Calabar</span><br>
                                              </td>
                                              <td>
                                                <button type="button" class="btn btn-outline-info btn-circle btn-sm btn-circle"><i class="fa fa-key"></i> </button>
                                                <button type="button" class="btn btn-outline-info btn-circle btn-sm btn-circle ml-2"><i class="fa fa-trash"></i> </button>
                                                <button type="button" class="btn btn-outline-info btn-circle btn-sm btn-circle ml-2"><i class="fa fa-edit"></i> </button>
                                                <button type="button" class="btn btn-outline-info btn-circle btn-sm btn-circle ml-2"><i class="fa fa-upload"></i> </button>
                                              </td>
                                            </tr>
                                          </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
              </div>
              <div class="tab-pane" id="security">
                <h6>SECURITY SETTINGS</h6>
                <hr>
                <form>
                  <div class="form-group">
                    <label class="d-block">Change Password</label>
                    <input type="text" class="form-control" placeholder="Enter your old password">
                    <input type="text" class="form-control mt-1" placeholder="New password">
                    <input type="text" class="form-control mt-1" placeholder="Confirm new password">
                  </div>
                </form>
                <hr>
                <form>
                  <div class="form-group">
                    <label class="d-block">Two Factor Authentication</label>
                    <button class="btn btn-info" type="button">Enable two-factor authentication</button>
                    <p class="small text-muted mt-2">Two-factor authentication adds an additional layer of security to your account by requiring more than just a password to log in.</p>
                  </div>
                </form>
                <hr>
                <form>
                  <div class="form-group mb-0">
                    <label class="d-block">Sessions</label>
                    <p class="font-size-sm text-secondary">This is a list of devices that have logged into your account. Revoke any sessions that you do not recognize.</p>
                    <ul class="list-group list-group-sm">
                      <li class="list-group-item has-icon">
                        <div>
                          <h6 class="mb-0">San Francisco City 190.24.335.55</h6>
                          <small class="text-muted">Your current session seen in United States</small>
                        </div>
                        <button class="btn btn-light btn-sm ml-auto" type="button">More info</button>
                      </li>
                    </ul>
                  </div>
                </form>
              </div>
              <div class="tab-pane" id="notification">
                <h6>NOTIFICATION SETTINGS</h6>
                <hr>
                <form>
                  <div class="form-group">
                    <label class="d-block mb-0">Security Alerts</label>
                    <div class="small text-muted mb-3">Receive security alert notifications via email</div>
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="customCheck1" checked="">
                      <label class="custom-control-label" for="customCheck1">Email each time a vulnerability is found</label>
                    </div>
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="customCheck2" checked="">
                      <label class="custom-control-label" for="customCheck2">Email a digest summary of vulnerability</label>
                    </div>
                  </div>
                  <div class="form-group mb-0">
                    <label class="d-block">SMS Notifications</label>
                    <ul class="list-group list-group-sm">
                      <li class="list-group-item has-icon">
                        Comments
                        <div class="custom-control custom-control-nolabel custom-switch ml-auto">
                          <input type="checkbox" class="custom-control-input" id="customSwitch1" checked="">
                          <label class="custom-control-label" for="customSwitch1"></label>
                        </div>
                      </li>
                      <li class="list-group-item has-icon">
                        Updates From People
                        <div class="custom-control custom-control-nolabel custom-switch ml-auto">
                          <input type="checkbox" class="custom-control-input" id="customSwitch2">
                          <label class="custom-control-label" for="customSwitch2"></label>
                        </div>
                      </li>
                      <li class="list-group-item has-icon">
                        Reminders
                        <div class="custom-control custom-control-nolabel custom-switch ml-auto">
                          <input type="checkbox" class="custom-control-input" id="customSwitch3" checked="">
                          <label class="custom-control-label" for="customSwitch3"></label>
                        </div>
                      </li>
                      <li class="list-group-item has-icon">
                        Events
                        <div class="custom-control custom-control-nolabel custom-switch ml-auto">
                          <input type="checkbox" class="custom-control-input" id="customSwitch4" checked="">
                          <label class="custom-control-label" for="customSwitch4"></label>
                        </div>
                      </li>
                      <li class="list-group-item has-icon">
                        Pages You Follow
                        <div class="custom-control custom-control-nolabel custom-switch ml-auto">
                          <input type="checkbox" class="custom-control-input" id="customSwitch5">
                          <label class="custom-control-label" for="customSwitch5"></label>
                        </div>
                      </li>
                    </ul>
                  </div>
                </form>
              </div>
              <div class="tab-pane" id="billing">
                <h6>BILLING SETTINGS</h6>
                <hr>
                <form>
                  <div class="form-group">
                    <label class="d-block mb-0">Payment Method</label>
                    <div class="small text-muted mb-3">You have not added a payment method</div>
                    <button class="btn btn-info" type="button">Add Payment Method</button>
                  </div>
                  <div class="form-group mb-0">
                    <label class="d-block">Payment History</label>
                    <div class="border border-gray-500 bg-gray-200 p-3 text-center font-size-sm">You have not made any payment.</div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
@stop
