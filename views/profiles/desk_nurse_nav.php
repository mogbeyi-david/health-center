<div id="menu">

    <div class="primary-sidebar-background">
    </div>
    <div class="">
        <!--Main nav-->
        <br>
        <div style="text-align:center;">
            <a href="#">
                <a href="../../index.php" class="logo"><img src="../../images/avatar.jpg" alt="" style=" align: center; max-height: 100px; max-width: 100px;"></a>
            </a>
        </div>
        <br/>
        <ul class="list-group">
            <!--dashboard--->
            <li class="btn btn-primary" id="test">
                <span class="glow"></span>
                <a class="label label-text" onclick="new_patient();" rel="tooltip" data-placement="right"
                   data-original-title="Add A New Patient">
                    <img src=""/>
                    <span>ADD A NEW PATIENT</span>
                </a>
            </li>

            <!-- teacher--->
            <li class="btn btn-primary" id="test">
                <span class="glow"></span>
                <a class="label label-text" onclick="edit_patient_profile();"
                   rel="tooltip" data-placement="right" data-original-title="Edit Patient Profile">
                    <img src=""/>
                    <span>EDIT PATIENT PROFILE</span>
                </a>
            </li>
            <!------subject------>
            <li class="btn btn-primary" id="test">
                <span class="glow"></span>
                <a class="label label-text" onclick="view_all_patients();"
                   rel="tooltip" data-placement="right" data-original-title="View All Patients">
                    <img src=""/>
                    <span>VIEW ALL PATIENTS</span>
                </a>
            </li>
            <!------class routine------>
            <li class="btn btn-primary" id="test">
                <span class="glow"></span>
                <a class="label label-text" onclick="delete_a_patient();"
                   rel="tooltip" data-placement="right" data-original-title="Delete A Patient">
                    <img src=""/>
                    <span>DELETE A PATIENT</span>
                </a>
            </li>
            <!------manage own profile--->
            <li class="btn btn-primary" id="test">
                <span class="glow"></span>
                <a class="label label-text" onclick="manage_shifts();"
                   rel="tooltip" data-placement="right"
                   data-original-title="Manage Shifts">
                    <img src=""/>
                    <span>VIEW SHIFTS</span>
                </a>
            </li>
            <li class="btn btn-primary" id="test">
                <span class="glow"></span>
                <a class="label label-text" onclick="edit_profile();"
                   rel="tooltip" data-placement="right"
                   data-original-title="Edit Your Profile">
                    <img src=""/>
                    <span>EDIT PROFILE</span>
                </a>
            </li>
            <li class="btn btn-primary" id="test">
                <span class="glow"></span>
                <a class="label label-text" href="../../controller/actions/logout.php"
                   rel="tooltip" data-placement="right"
                   data-original-title="Log Out">
                    <img src=""/>
                    <span>LOG OUT</span>
                </a>
            </li>
        </ul>
    </div>
</div>
