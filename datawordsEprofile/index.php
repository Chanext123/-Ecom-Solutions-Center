


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee_page_dark/light_mode</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <nav class="navbar">
        <div class="navbar__left">
            <a href=""><img src="image/logo-final.png" alt=""></a>

            <div class="searchbox">
                <img src="./image/search.png" alt="">
                <input type="text" placeholder="search">
            </div>
        </div>

        <div class="navbar__center">
            <ul>
                <li>
                    <a href="">Home</a>
                </li>
                <li>
                    <a href="">Employee</a>
                </li>
                <li>
                    <a href="">Login</a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- ===== navbar close ===== -->




    <div class="container">
        <div class="toggle">
            <img src="image/night-mode.svg" alt="night-mode" id="dark" />
            <img class="light" src="image/brightness.svg" alt="light-mode" id="light" />
        </div>


        <!-- ------- profile page ------- -->
        <div class="container__main">
            <div class="container__profile">
                <img src="image/coverpic.png" alt="" width="100%">
                <div class="container__profile container__profile--inner">
                    <img onclick="openEditdetails()" src="image/edit-details.png" alt="" class="edit-details">
                    <img src="image/user1.png" alt="" class="profile-pic">
                    <img onclick="openEditprofile()" src="image/edit-pp.png" alt="" class="edit-pp">
                    <h1>Christin Misa</h1>
                    <b>Lorem ipsum, dolor sit amet | consectetur adipisicing elit. Accusamus, quas!</b>
                    <p>Cebu City, FLB Building &middot; <a href="">Contact Info</a> </p>

                    <!-- Modal for editing in details -->
                    <div id="myModal" class="modal">
                        <div class="modal-content">
                            <span class="close" onclick="closeEditdetails()">&times;</span>
                            <h2>Edit Profile</h2>

                            <!--Add your form elements here for editing details-->
                            <form method="post" action="update_profile.php">

                                <label for="profile-name">Profile name:</label>
                                <textarea id="profile-name" name="profile_name" rows="2" cols="40"></textarea><br>

                                <label for="position">Positon of the company:</label>
                                <textarea id="position" name="position" rows="2" cols="40"></textarea><br>

                                <label for="address">Address:</label>
                                <textarea id="address" name="address" rows="2" cols="40"></textarea><br>

                                <!-- <label for="cover-photo">Cover Photo:</label>
                                <input type="file" id="cover-photo" name="cover-photo"><br>

                                <label for="profile-pic">Profile Picture:</label>
                                <input type="file" id="profile-pic" name="profile-pic"><br><br> -->

                                <input type="submit" value="Save" class="save">
                            </form>


                        </div>
                    </div>

                    <!-- Modal for editing in Profile pic -->
                    <div id="editProfile" class="modal">
                        <div class="modal-content">
                            <span class="close" onclick="closeEditprofile()">&times;</span>
                            <h2>Edit Profile Picture</h2>

                            <!--Form for changing the Profile pic-->
                            <form>

                                <label for="profile-pic">Profile Picture:</label>
                                <input type="file" id="profile-pic" name="profile-pic"><br><br>

                                <input type="submit" value="Save" class="save">
                            </form>


                        </div>
                    </div>


                    <!-- btn for about, kpi and more and also for the badge -->

                    <div class="profile-btn">
                        <a onclick="toggleDescription()" class="primary-btn">About</a>
                        <a onclick="toggleDescription()" class="KPI">Key Performance Indicator (KPI)</a>
                        <a onclick="toggleDescription()" class="more">More</a>
                        <a href="#" class="badge">Associate - Level 1</a>
                    </div>


                    <div class="about" id="discription">
                        <span class="close" onclick="closeDetails()">&times;</span>

                        <span>

                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium sequi
                            accusantium beatae enim voluptas consequuntur. Numquam veniam laudantium iure,
                            natus quo hic libero distinctio ut voluptate, blanditiis, excepturi nisi suscipit
                            vero ipsum saepe quod porro voluptatibus.
                            Tempore blanditiis maiores sed!
                            ABOUT: &nbsp;
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium sequi
                            accusantium beatae enim voluptas consequuntur. Numquam veniam laudantium iure,
                            natus quo hic libero distinctio ut voluptate, blanditiis, excepturi nisi suscipit
                            vero ipsum saepe quod porro voluptatibus.
                            Tempore blanditiis maiores sed!
                        </span>

                    </div>

     
                </div>
            </div>


            <div class="container__description">
                <div class="container__description--certificate">
                    <img src="image/exper.png" alt="">
                    <h2>TRAININGS AND CERTIFICATIONS</h2>
                </div>

                <div class="profile-desc-row">
                    <img src="image/certificate.png" alt="">
                    <div>
                        <h3>Sample Traning: Catalog</h3>
                        <b>Feb 2023 - Present &middot; 1.5 years</b>
                        <b><a class="Download" id="download-btn">Download</a></b>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Laboriosam reprehenderit, facilis?</p><br>

                    </div>
                </div>

                <div class="profile-desc-row">
                    <img src="image/certificate.png" alt="">
                    <div>
                        <h3>Sample Traning: Catalog</h3>
                        <b>Feb 2023 - Present &middot; 1.5 years</b>
                        <b><a class="Download" id="download-btn1">Download</a></b>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Laboriosam reprehenderit,?</p><br>

                    </div>
                </div>

                <div class="profile-desc-row">
                    <img src="image/certificate.png" alt="">
                    <div>
                        <h3>Sample Traning: Catalog</h3>
                        <b>Feb 2023 - Present &middot; 1.5 years</b>
                        <b><a class="Download" id="download-btn2">Download</a></b>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Laboriosam reprehenderit, facilis?</p><br>

                    </div>
                </div>


                <!-- --------- show more in certificate --------- -->

                <div id="content-1" class="content">
                    <div class="profile-desc-row">
                        <img src="image/certificate.png" alt="">
                        <div>
                            <h3>Sample Traning: Catalog</h3>
                            <b>Feb 2023 - Present &middot; 1.5 years</b>
                            <b><a class="Download" id="download-btn3">Download</a></b>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                Laboriosam reprehenderit,?</p><br>
            
                        </div>
                    </div>
            
                    <div class="profile-desc-row">
                        <img src="image/certificate.png" alt="">
                        <div>
                            <h3>Sample Traning: Catalog</h3>
                            <b>Feb 2023 - Present &middot; 1.5 years</b>
                            <b><a class="Download" id="download-btn4">Download</a></b>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                Laboriosam reprehenderit, facilis?</p><br>
            
                        </div>
                    </div>

                    <div class="profile-desc-row">
                        <img src="image/certificate.png" alt="">
                        <div>
                            <h3>Sample Traning: Catalog</h3>
                            <b>Feb 2023 - Present &middot; 1.5 years</b>
                            <b><a class="Download" id="download-btn5">Download</a></b>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                Laboriosam reprehenderit, facilis?</p><br>
            
                        </div>
                    </div>
                </div>

                <hr>
               <center><button onclick="toggleContent(1)" class="show-link" id="toggle-btn-1"><a>SHOW MORE</a></button></center> 

            </div>



            <div class="container__description">
                <div class="container__supervisor">
                    <div>
                        <img src="image/supervisor.png">
                    </div>
                    <b>SUPERVISOR</b>
                </div>

                <div class="container__description--supervisor">
                    <a href=""><img src="image/user1.png" alt="">Lorem, ipsum.</a>
                    <a href=""><img src="image/user1.png" alt="">Lorem, ipsum. </a>

                </div>

                <!-- -------- show more in supervisor -------- -->

                <div id="content-2" class="supervisor_members">
        
                    <div class="container__description--supervisor">
                        <a href=""><img src="image/user1.png" alt="">Lorem, ipsum.</a>
                        <a href=""><img src="image/user1.png" alt="">Lorem, ipsum. </a>
            
                    </div>
            
                    <div class="container__description--supervisor">
                        <a href=""><img src="image/user1.png" alt="">Lorem, ipsum.
                        <a href=""><img src="image/user1.png" alt="">Lorem, ipsum. </a>
            
                    </div>
                </div>

                <div class="show-all-members">
                    <a onclick="toggleMembers(2)" id="toggle-btn-2">SHOW ALL MEMBERS </a>
                </div>


            </div>

        </div>

    </div>
    <script src="js.js"></script>
</body>

</html>