<!DOCTYPE html>
<html>
    <head>
        <title>
            User Home
        </title>
        <link rel="Stylesheet" href="../CSS/Usrhome.css">
        <link rel="Stylesheet" href="../CSS/courses.css">
        <script src="../JS/test.js" async></script>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300&display=swap" rel="stylesheet">
    </head>
    <body>
        <?php
            session_start();
            if(isset($_SESSION['User']))
            {
                $uname=$_SESSION['User'];
            extract($_POST);
            include("DB.php");
            $sql= "SELECT WC,CPM,WPM,ER FROM user_stats WHERE Username= '$uname'";
            $result= mysqli_query($con,$sql);
            $row = mysqli_fetch_assoc($result);
        ?>
        <div class="parentrec">
            <div id="one" class="childrec">     
                    <img src="../IMG/Logo.png" alt="logo" id="logoo">
                        <aside>
                                <ul>
                                        <li><a href="#">Home</a></li>
                                        <li><a href="#three">Quick Test</a></li>
                                        <li><a href="#two">Courses</a></li>
                                        <li><a href="#four">User Stats</a></li>
                                        <div class="dropdown">
                                                <li><img src="../IMG/Avatar.png"></li>
                                                <div class="dropdown-content">
                                                    <a href="#"><?php echo $uname;?></a>
                                                    <a href="Logout.php">Log Out</a>
                                                </div>
                                              </div>
                                    </ul>
                        </aside>
                <div class="intro">
                    <h1>Typing, made easy. </h1>
                    <h3>Introducing Keyboarding Skill Enhancer, the app for it all.</h2>
                </div>
            </div>
            <div id="two" class="childrec">
                            <h1>Courses</h1>
                            <div class="content">
                            <br><br>
                                <a href="BasicC.php">Basic Level</a><br><br><br>
                                <a href="VeteranC.php">Intermediate Level</a><br><br><br>
                                <a href="EliteC.php">Hardcore Level</a>
                            </div>
            </div>
            <div id="three" class="childrec">
                    <h1>Quick Test</h1>
                    <div class="content">
                        <p>Type in the sentence provided aside and boost up your confidence.</p>      
                    </div>
                    <section class="test-area">
                            <div id="origin-text">
                                <p>Keyboarding Skill Enhancer is a platform where you can enhance your typing skills.</p>
                            </div>
                            <div class="test-wrapper">
                                <textarea id="test-area" name="textarea" rows="6" cols="58" placeholder="The clock starts when you start typing the above text." ></textarea>
                            </div>
                            <div class="meta">
                                <section id="clock">
                                    <div class="timer">00:00:00</div>
                                </section>
                                <button id="reset">Start Over</button>
                            </div>
                        </section>
                        
            </div>    
            <div id="four" class="childrec">
                        <h1>User Stats</h1>
                    <div class="content">
                       <section class="stats">
                       <table align="center" Border="4" BgColor="cadetblue" height="100px" width="200px" >
                    <caption>Current Stats</caption>
                    <tr>
                        <td>Word Count</td>
                        <td><?php echo $row["WC"]; ?></td>
                    </tr>
                    <tr>
                        <td>Speed(CPM)</td>
                        <td><?php echo $row["CPM"]; ?></td>
                    </tr>
                    <tr>
                        <td>Speed(WPM)</td>
                        <td><?php echo $row["WPM"]; ?></td>
                    </tr>
                    <tr>
                        <td>Error Rate</td>
                        <td><?php echo $row["ER"]; ?></td>
                    </tr>
                </table>
                       </section> 
                    </div>

            </div>
        <!--<center>
            <h1>Keyboarding Skill Enhancer</h1>
        </center>
        <div class="Sector">
            <div class="Welcome">
                <h1>
                    ?php
                        echo "<br>Welcome <br><b>$uname</b>";
                    ?>
                </h1>
                <br>
                <a href="BasicC.php"><input type="button" name="Start" value="Start Course" ></a>
            
                <input type="button" name="Continue" value="Continue Course">
            </div>
            <div class="Stats">
                <center>
                    <H1 >Stats</H1>
                </center>
                <table align="center" Border="4" BgColor="white" height="100px" width="200px" >
                    <caption>Current Stats</caption>
                    <tr>
                        <td>Word Count</td>
                        <td>      ?php echo $row["Word Count"]; ?></td>
                    </tr>
                    <tr>
                        <td>Speed(CPM)</td>
                        <td>      ?php echo $row["CPM"]; ?></td>
                    </tr>
                    <tr>
                        <td>Speed(WPM)</td>
                        <td>      ?php echo $row["WPM"]; ?></td>
                    </tr>
                    <tr>
                        <td>Error Rate</td>
                        <td>       ?php echo $row["Error Rate"]; ?></td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="Sector">
            <div class="Courses">
                <ul>
                    <div >
                        <li>Basic</li>
                    </div>
                    <div>
                        <li>Intermediate</li>
                    </div>
                    <div>
                        <li>Hardcore</li>
                    </div>
                </ul>
            </div>
            <div>
            <section class="test-area">
                <div id="origin-text">
                    <p>Keyboarding Skill Enhancer is a platform where you can enhance your typing skills.</p>
                </div>
                <div class="test-wrapper">
                    <textarea id="test-area" name="textarea" rows="7" cols="59" placeholder="The clock starts when you start typing the above text." ></textarea>
                </div>
                <div class="meta">
                    <section id="clock">
                        <div class="timer">00:00:00</div>
                    </section>
                    <button id="reset">Start Over</button>
                </div>
            </section>
            </div>
        </div>
-->
        <?php
            }
            else
            {
                header("location:login.php");
            }	    
        ?>
    </body>
</html>