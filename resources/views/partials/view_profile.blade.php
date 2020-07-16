<link rel="stylesheet" href=" {{asset('css/profile_view.css')}} ">
@php
function getAge($birthdate, $pattern = 'mysql')
{
    $patterns = array(
        'eu'    => 'd/m/Y',
        'mysql' => 'Y-m-d',
        'us'    => 'm/d/Y',
    );

    $now      = new DateTime();
    $in       = DateTime::createFromFormat($patterns[$pattern], $birthdate);
    $interval = $now->diff($in);
    return $interval->y;
}     
@endphp


<div class="container-fluid">
    <div class="row">
        <div class="col-lg-3">
            <div class="portlet light profile-sidebar-portlet bordered">
                <div class="profile-userpic">
                    <img src="https://bootdey.com/img/Content/avatar/avatar7.png" class="img-responsive"
                    alt="">
                </div>
                <div class="profile-usertitle">
                    <div class="profile-usertitle-name">{{$data->first_name.' '.$data->last_name}}</div>
                    <div class="profile-usertitle-job">{{$data->gender.' - '.getAge($data->dob)}}</div>
                </div>
                
            </div>
        </div>
        <div class="col-lg-9">
            <div class="portlet light bordered">
                <div class="portlet-body">
                    <div>
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs" role="tablist">
                            <li role="presentation" class="active nav-item"><a href="#home" aria-controls="home" role="tab" data-toggle="tab" class="nav-link">Personal Details</a>
                            </li>
                            <li role="presentation" class="nav-item"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab"
                                class="nav-link">Next of Kin</a>
                            </li>
                            <li role="presentation" class="nav-item"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab"
                                class="nav-link">Intervention</a>
                            </li>
                            <li role="presentation" class="nav-item"><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab"
                                class="nav-link">ID Types</a>
                            </li>
                        </ul>
                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane active" id="home">
                                Personal info
                            </div>
                            <div role="tabpanel" class="tab-pane" id="profile">Profile</div>
                            <div role="tabpanel" class="tab-pane" id="messages">Messages</div>
                            <div role="tabpanel" class="tab-pane" id="settings">Settings</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
