<?php

/* @var $this yii\web\View */

$this->title = 'Registrations';
?><div class="site-register">
    <div class="body-content text-center">
    <div class="jumbotron">
    <h2>Register different entities to the system.</h2>
    </div>
        <div class="row">
            <div class="col-lg-4 text-center">
                <h2><i class="fas fa-hospital-alt"></i></br>Hospital</h2>

                <p><a class="btn btn-default" href="/health/web/hospital/create">Register Hospital &raquo;</a></p>
            </div>
            <div class="col-lg-4 text-center">
                <h2><i class="fas fa-user-md"></i></br>Staff</h2>

                <p><a class="btn btn-default" href="/health/web/doctor/create">Register Doctor &raquo;</a></p></br>
                <p><a class="btn btn-default" href="/health/web/doctor/create">Register Clerk &raquo;</a></p>
            </div>
            <div class="col-lg-4 text-center">
                <h2><i class="fas fa-user"></i></br>User</h2>


                <p><a class="btn btn-default" href="http://www.yiiframework.com/extensions/">Create Staff Account &raquo;</a></p>
            </div> 
        </div></br>
        <div class="text-center">
                <h2><i class="fas fa-female"></i><i class="fas fa-male"></i></br>Patient</h2>


                <p><a class="btn btn-default" href="/health/web/patient/create">Register Patient &raquo;</a></p>
            
        </div>

    </div>
</div>
