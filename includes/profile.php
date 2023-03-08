<!-- Profile Section
================================================== -->
<div class="col-lg-3 col-md-4">
    <div class="profile">
        <div class="profile-name">
            <span class="name">IQBAL HARITH</span><br>
            <span class="job">Student IT-Software</span>
        </div>
        <figure class="profile-image">
            <img src="images/profile.png" alt="">
        </figure>
        <ul class="profile-information">
            <li></li>
            <li>
                <p><span>Name:</span> <br><br>IQBAL HARITH BIN LOKMAN</p>
            </li>
            <li>
                <p><span>Gender:</span> <br><br>Male</p>
            </li>
            <li>
                <p><span>Age:</span> <br><br>
                    <?php
                    $currentYear = date("Y");
                    $yearBorn = 2003;
                    $year = $currentYear - $yearBorn;
                    echo $year;
                    ?>
                </p>
            </li>
            <li>
                <p><span>Email:</span> <br><br>iqbaalrith@gmail.com</p>
            </li>
            <li>
                <p>
                    <span>Phone:</span> <br><br>
                    <a href="https://wa.me/60189754305" target="_blank" style="text-decoration: none; color: white;">
                        <button style="background-color: #25D366; color: white; font-size: 16px; border: none; border-radius: 8px; padding: 12px 24px; display: flex; align-items: center;">
                            <i class="fab fa-whatsapp" style="margin-right: 8px;"></i>
                            <span style="font-weight: bold; color: white;">Whatsapp Only</span>
                        </button>
                    </a>
                </p>
            </li>
            <li>
                <p><span>Address:</span> <br><br>Shah Alam, Selangor</p>
            </li>
        </ul>
        <div class=" col-md-12">
            <button class="site-btn icon hidden-xs" onclick="sendEmail()">Hire Me <i class="fa fa-paper-plane" aria-hidden="true"></i></button>
        </div>
    </div>
</div>