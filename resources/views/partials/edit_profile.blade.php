<div class="container">
    <div class="row flex-lg-nowrap">
      
      <div class="col">
        <div class="row">
          <div class="col mb-3">
            <div class="card">
              <div class="card-body">
                <div class="e-profile">
                 
                  <div class="row">
                    <div class="col-12 col-sm-auto mb-3">
                      <div class="mx-auto" style="width: 140px;">
                        <div class="d-flex justify-content-center align-items-center rounded" style="height: 140px; background-color: rgb(233, 236, 239);">
                          <span style="color: rgb(166, 168, 170); font: bold 8pt Arial;">140x140</span>
                        </div>
                      </div>
                    </div>
                    <div class="col d-flex flex-column flex-sm-row justify-content-between mb-3">
                      <div class="text-center text-sm-left mb-2 mb-sm-0">
                        <h4 class="pt-sm-2 pb-1 mb-0 text-nowrap">John Smith</h4>
                        <p class="mb-0">@johnny.s</p>
                        <div class="text-muted"><small>Last seen 2 hours ago</small></div>
                        <div class="mt-2">
                          <button class="btn btn-primary" type="button">
                            <i class="fa fa-fw fa-camera"></i>
                            <span>Change Photo</span>
                          </button>
                        </div>
                      </div>
                      <div class="text-center text-sm-right">
                        <span class="badge badge-secondary">administrator</span>
                        <div class="text-muted"><small>Joined 09 Dec 2017</small></div>
                      </div>
                    </div>
                  </div>
                  
                  <div class="tab-content pt-3">
                    <div class="tab-pane active">
                      <form method="POST" action="{{ route('admin.beneficiaries.update', $data->id) }}" >
                        @method('PUT')
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <div class="row">
                          <div class="col">
                            <div class="row">
                              <div class="col-sm">
                                <div class="form-group">
                                  <label class="text-muted">First Name</label>
                                <input class="form-control" type="text" name="first_name" placeholder="First Name" value="{{$data->first_name}}">
                                </div>
                              </div>
                              <div class="col-sm">
                                <div class="form-group">
                                  <label class="text-muted">Middle Name</label>
                                  <input class="form-control" type="text" name="middle_name" placeholder="Middle Name" value="{{$data->middle_name}}">
                                </div>
                              </div>
                              <div class="col-sm">
                                <div class="form-group">
                                  <label class="text-muted">Last Name</label>
                                  <input class="form-control" type="text" name="last_name" placeholder="Last Name" value="{{$data->last_name}}">
                                </div>
                              </div>
                              <div class="col-sm">
                                <div class="form-group">
                                  <label class="text-muted">Date of Birth</label>
                                  <input class="form-control" type="date" name="dob" placeholder="DOB" value="{{$data->dob}}">
                                </div>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-sm">
                                <div class="form-group">
                                  <label class="text-muted">Email</label>
                                <input class="form-control" type="text" placeholder="user@example.com" name="email" value="{{$data->email}}">
                                </div>
                              </div>
                              <div class="col-sm">
                                <div class="form-group">
                                  <label class="text-muted">Mobile Number</label>
                                  <input class="form-control" type="phone" placeholder="Phone" name="phone" value="{{$data->phone}}">
                                </div>
                              </div>
                              <div class="col-sm">
                                <div class="form-group">
                                  <label class="text-muted">Alternative Mobile Number</label>
                                  <input class="form-control" type="phone" placeholder="Alternative Mobile Number" name="alt_phone" value="{{$data->alt_phone}}">
                                </div>
                              </div>
                              <div class="col-sm">
                                <div class="form-group">
                                  <label class="text-muted">Occupation</label>
                                  <input class="form-control" type="text" placeholder="Occupation" name="occupation" value="{{$data->occupation}}">
                                </div>
                              </div>
                              
                            </div>
                            <div class="row">
                              <div class="col sm-4">
                                <div class="form-group">
                                  <label class="text-muted">Address</label>
                                  <textarea class="form-control" rows="2" placeholder="Home Address">{{$data->address}}</textarea>
                                </div>
                              </div>
                              <div class="col-sm-2">
                                <div class="form-group">
                                  <label class="text-muted">State</label>
                                  <select name="state" class="form-control">
                                    <option value="{{$data->state}}" selected>{{$data->state}}</option>
                                  </select>
                                </div>
                              </div>
                              <div class="col-sm-2">
                                <div class="form-group">
                                  <label class="text-muted">LGA</label>
                                  <select name="lga" class="form-control">
                                    <option value="{{$data->lga}}" selected>{{$data->lga}}</option>
                                  </select>
                                </div>
                              </div>
                              <div class="col-md-2">
                                <div class="form-group">
                                  <label class="text-muted">Gender</label>
                                  <select name="gender" class="form-control">
                                    <option value="Male" @if ($data->gender == 'Male')
                                        selected
                                    @endif>Male</option>
                                    <option value="Female" @if ($data->gender == 'Female')
                                        selected
                                    @endif>Female</option>
                                  </select>
                                </div>
                              </div>
                              <div class="col-md-2">
                                <div class="form-group">
                                  <label class="text-muted">Marital Status</label>
                                  <select name="marital_status" class="form-control">
                                    <option value="Married" @if ($data->marital_status == 'Married')
                                        selected
                                    @endif>Married</option>
                                    <option value="Single" @if ($data->marital_status == 'Single')
                                        selected
                                    @endif>Single</option>
                                  </select>
                                </div>
                              </div>     
                            </div>
                            <div class="row">
                              <div class="col-sm">
                                <div class="form-group">
                                  <label class="text-muted">Third Party ID</label>
                                  <input class="form-control" type="text" placeholder="Third Party ID" name="tpid" value="{{$data->tpid}}">
                                </div>
                              </div>
                              <div class="col-sm">
                                <div class="form-group">
                                  <label class="text-muted">Bank Name</label>
                                  <input class="form-control" type="text" placeholder="Bank Name" name="bank_name" value="{{$data->bank_name}}">
                                </div>
                              </div>
                              <div class="col-sm">
                                <div class="form-group">
                                  <label class="text-muted">Account Number</label>
                                  <input class="form-control" type="text" placeholder="Account Number" name="acct_number" value="{{$data->acct_number}}">
                                </div>
                              </div>
                              <div class="col-sm">
                                <div class="form-group">
                                  <label class="text-muted">BVN</label>
                                  <input class="form-control" type="text" placeholder="BVN" name="bvn" value="{{$data->bvn}}">
                                </div>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-sm">
                                <div class="form-group">
                                  <label class="text-muted">Next of Kin Fullname</label>
                                  <input class="form-control" type="text" placeholder="Next of Kin Fullname" name="nok_fullname" value="{{$data->nok_fullname}}">
                                </div>
                              </div>
                              <div class="col-sm">
                                <div class="form-group">
                                  <label class="text-muted">Next of Kin Phone</label>
                                  <input class="form-control" type="text" placeholder="Next of Kin Phone" name="nok_phone" value="{{$data->nok_phone}}">
                                </div>
                              </div>
                              <div class="col-sm">
                                <div class="form-group">
                                  <label class="text-muted">Next of Relationship</label>
                                  <input class="form-control" type="text" placeholder="Next of Relationship" name="nok_relationship" value="{{$data->nok_relationship}}">
                                </div>
                              </div>
                              <div class="col-sm">
                                <div class="form-group">
                                  <label class="text-muted" >Next of Kin Address</label>
                                <textarea class="form-control" rows="2" placeholder="Home Address">{{$data->nok_address}}</textarea>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col d-flex justify-content-end">
                            <span>
                              <a class="btn btn-secondary" href="javascript:history.back()">Cancel</a>
                            </span>
                            <button type="submit" class="btn btn-primary">Update</button>
                          </div>
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
    </div>
