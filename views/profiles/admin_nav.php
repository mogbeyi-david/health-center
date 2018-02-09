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
                <!-- teacher--->
                <li class="btn btn-primary" id="test">
                    <span class="glow"></span>
                    <a class="label label-text"
                       onclick="new_doctor();"
                       rel="tooltip" data-placement="right" data-original-title="Add a New Doctor">
                        <img src=""/>
                        <span>ADD A NEW DOCTOR</span>
                    </a>
                </li>

                <li class="btn btn-primary" id="test">
                    <span class="glow"></span>
                    <a class="label label-text"
                       onclick="new_nurse();"
                       rel="tooltip" data-placement="right" data-original-title="Add a New Nurse">
                        <img src=""/>
                        <span>ADD A NEW NURSE</span>
                    </a>
                </li>
                <!------subject------>
                <li class="btn btn-primary" id="test">
                    <span class="glow"></span>
                    <a class="label label-text" onclick="view_all_staff();"
                       rel="tooltip" data-placement="right" data-original-title="View All Staff">
                        <img src=""/>
                        <span>VIEW ALL STAFF</span>
                    </a>
                </li>

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
                    <a class="label label-text" onclick="view_all_messages();"
                       rel="tooltip" data-placement="right" data-original-title="View All Messages">
                        <img src=""/>
                        <span>VIEW ALL MESSAGES</span>
                    </a>
                </li>

                <li class="btn btn-primary" id="test">
                    <span class="glow"></span>
                    <a class="label label-text" onclick="delete_staff();"
                       rel="tooltip" data-placement="right" data-original-title="View All Patients">
                        <img src=""/>
                        <span>DELETE A STAFF</span>
                    </a>
                </li>

                <!------manage own profile--->
                <li class="btn btn-primary" id="test">
                    <span class="glow"></span>
                    <a class="label label-text" onclick="edit_profile();"
                       rel="tooltip" data-placement="right"
                       data-original-title="Edit Your Profile">
                        <img src=""/>
                        <span>EDIT YOUR PROFILE</span>
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
