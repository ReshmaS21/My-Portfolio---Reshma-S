<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta charset="utf-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <meta name="description" content="">
     <meta name="author" content="Reshma">
     <title>Reshma S</title>
     <link rel="stylesheet"href="styles.css">
     <script src="https://kit.fontawesome.com/b32383443e.js" crossorigin="anonymous"></script>
     <style>
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap');

*{
    margin:0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins' , sans-serif;
    background-color: rgb(21, 20, 20);
    color: #E9F8F9;
    /* overflow-y: hidden; */

}
html{
    scroll-behavior:smooth;
}
header{
    position:fixed;
    top:0;
    left: 0;
    width: 100%;
    padding:30px 100px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    z-index: 100;
    overflow: hidden;
}

.logo{
    font-size:2em;
    color: #E9F8F9;
    cursor: default;
}

.logo span{
    color: #537FE7;
}
.navigation{
    position: relative;
    left: 130px;
    background:transparent;
}

.navigation a{
    font-size: 1.1em;
    text-decoration: none;
    margin-right:200px;
    font-weight:500px;

}
.navigation a:hover{
    color:#537FE7;
}
.btn-talk{
    color: #fff;
    text-decoration: none;
    padding: 8px 35px;
    background: #537FE7;
    border-radius: 10px;
    border: 2px solid #537FE7;
    font-weight: 500;
}
.btn-talk:hover{
    color:#537FE7;
    background: transparent;
}
::-webkit-scrollbar{
    width: 0px;
}
/* project */
.projectcontainer{
    position:relative;
    top:-110px;
    width:1200px;
    height:100px;
    margin: 225px auto;
    background:rgb(21, 20, 20);
}
.projectbox{
    position:relative;
    width:370px;
    height:244px;
    background:transparent;
    float:left;
    margin:15px;
    box-sizing: border-box;
    overflow:hidden;
    border-radius:10px;
    border: 2px solid #537FE7;
    transition:.5s;
}
.projectcontent{
    position:absolute;
    height:100%;
    width:100%;
    text-align:justify;
    padding:10px;
    box-sizing: border-box;
    transition:0.5s;
    background:transparent;
    color:#E9F8F9;
    border-radius:10px;
}
.projectcontainer .projectbox:hover{
    background:#537FE7;
    transform:translateY(-10px);
}
.projectcontainer .projectbox:hover .projectcontent{
    background:#537FE7;
}
.projectcontent h3{
    margin:0;
    text-align:center;
    padding:10px;
    font-size:24px;
    background:transparent;
    color:#E9F8F9;
}
.projectcontent p{
    margin:0;
    padding:0;
    background:transparent;
    color:#E9F8F9;
}
/* certificates */
.certi{
    position:relative;
top:150px;
}
.certi .projectcontainer{
    position:relative;
    top:-335px;
    width:1200px;
    height:100px;
    margin: 225px auto;
    background:rgb(21, 20, 20);
}
        </style>
        </head>
<body>
<header>
        <h2 class="logo"><span>R</span>esh.</h2>
        <nav class="navigation">
            <a href="index.php">Home</a>
            <a href="#">Projects</a>
            <a href="#certip">Credentials</a>
        </nav>
        <a href="mailto:sreshma2112@gmail.com" class="btn-talk">Let's Talk</a>
    </header>
    <section class="project" id="projectp">
<h2 style="font-size:38px;text-align:center;position:relative;top:100px;">My <span style="color:#537FE7;font-size:38px;">Projects</span></h2>
<div class="projectcontainer">
    <div class="projectbox">
    <div class="projectcontent">
            <a style="text-decoration:none;" href="https://github.com/ReshmaS21/Student-Information-Management-System.git"><h3>Student Result Management System</h3></a>
            <p>The Student Result Management System using Angular JS, Node JS, MongoDB is a web based application that stores,
                manages and displays the student details and their result.
            </p>
        </div>
    </div>
    <div class="projectbox">
    <div class="projectcontent">
            <a style="text-decoration:none;" href="https://github.com/ReshmaS21/Erect-Assistant--The-Posture-Detector.git"><h3>Erect Assistant - The Posture Detector </h3></a>
            <p>Erect Assistant is an IoT based System that uses Arduino UNO, Flex Sensor, Buzzer to detect and track changes in  human posture which includes a website that gives a report on the user's posture.
            </p>
        </div>
    </div>
    <div class="projectbox">
    <div class="projectcontent">
            <a style="text-decoration:none;" href="https://github.com/ReshmaS21/FireDetectionSystem.git"><h3>Fire Detection and Alarming System</h3></a>
            <p>The System is designed to identify and alert occupants about the presence of a fire. This system consists of a Flame sensor, Arduino Nano and Buzzer that work together to detect a fire emergency.
            </p>
        </div>
    </div>
    <div class="projectbox">
    <div class="projectcontent">
            <a style="text-decoration:none;" href="https://github.com/ReshmaS21/Hospital-Information-Management-System.git"><h3>Velammal HIMS</h3></a>
            <p style="padding-top:15px;">The HIMS is a software application that manages the overall functioning of Velammal Hospital. It is designed to streamline various process and make them more efficient. 
            </p>
        </div>
    </div>
    <div class="projectbox">
    <div class="projectcontent">
            <a style="text-decoration:none;" href="http://theperfectcup2023.infinityfreeapp.com/"><h3>The Perfect Cup </h3></a>
            <p style="padding-top:15px;">The Perfect Cup is website dedicated to providing information on a wide range of tea products to its visitors. This website also provides the contact details and facility to mail the shop manager.
            </p>
        </div>
    </div>
    <div class="projectbox">
    <div class="projectcontent">
            <a style="text-decoration:none;" href="https://stately-zuccutto-6baa0a.netlify.app/index.htm"><h3>Fun Zone </h3></a>
            <p style="padding-top:15px;">Fun Zone is a gaming website where players can access 3 games - Memory Card, Sudoku and Snake & Ladder. Fun Zone provides an immersive and enjoyable gaming experience.
            </p>
        </div>
    </div>
    </div>
</div>
</section>
<section class="certi" id="certip">
<h2 style="font-size:38px;background:transparent;text-align:center;position:relative;top:-120px;width:1100px;left:220px;">My <span style="color:#537FE7;font-size:38px;">Credentials</span></h2>
<div class="projectcontainer">
    <div class="projectbox">
    <div class="projectcontent">
            <h3 style="text-align:center;">Introduction to ML</h3><br>
            <p style="padding-left:20px;">Organization: NPTEL</p><br>
            <p style="padding-left:20px;">Course Duration: 8 weeks</p><br>
            <a href="https://github.com/ReshmaS21/Reshma.S_Certificates_VCET/blob/main/Reshma.S_Certificates/Reshma.S__Certificates/Introduction%20to%20Machine%20Learning__NPTEL.pdf">
                <p style="text-align: center;">Certificate Link</p></a>
        </div>
    </div>
    <div class="projectbox">
    <div class="projectcontent">
    <h3 style="text-align:center;">Full Stack - MEAN</h3><br>
            <p style="padding-left:20px;">Organization: Infosys Springboard</p><br>
            <p style="padding-left:20px;">Course Duration: 4 weeks</p><br>
            <a href="https://github.com/ReshmaS21/Reshma.S_Certificates_VCET/blob/main/Reshma.S_Certificates/Reshma.S__Certificates/Angular__Infosys.pdf">
                <p style="text-align: center;">Certificate Link</p></a>
        </div>
    </div>
    <div class="projectbox">
    <div class="projectcontent">
    <h3>HTML, CSS, Bootstrap</h3><br>
            <p style="padding-left:20px;">Organization: Udemy</p><br>
            <p style="padding-left:20px;">Course Duration: 7 hours</p><br>
            <a href="https://github.2com/ReshmaS21/Reshma.S_Certificates_VCET/blob/main/Reshma.S_Certificates/Reshma.S__Certificates/HTML%20CSS%20BootStrap__Udemy.pdf">
                <p style="text-align: center;">Certificate Link</p></a>
        </div>
    </div>
    <div class="projectbox">
    <div class="projectcontent">
    <h3>Introduction to IOT</h3><br>
            <p style="padding-left:20px;">Organization: Gyanamite</p><br>
            <p style="padding-left:20px;">Course Duration: 3 hours</p><br>
            <a href="https://github.com/ReshmaS21/Reshma.S_Certificates_VCET/blob/main/Reshma.S_Certificates/Reshma.S__Certificates/Intoduction%20to%20IOT__Gyanamite.pdf">
                <p style="text-align: center;">Certificate Link</p></a>
        </div>
    </div>
    <div class="projectbox">
    <div class="projectcontent">
    <h3>UI/UX Design</h3><br>
            <p style="padding-left:20px;">Organization: Google</p><br>
            <p style="padding-left:20px;">Course Duration: 8 weeks</p><br>
            <a href="https://github.com/ReshmaS21/Reshma.S_Certificates_VCET/tree/main/Reshma.S_Certificates/Reshma.S__Certificates/Google%20UX%20Design">
                <p style="text-align: center;">Certificate Link</p></a>
        </div>
    </div>
    <div class="projectbox">
    <div class="projectcontent">
    <h3>Introduction to HTML5</h3><br>
            <p style="padding-left:20px;">Organization: Udemy</p><br>
            <p style="padding-left:20px;">Course Duration: 3.5 hours</p><br>
            <a href="https://github.com/ReshmaS21/Reshma.S_Certificates_VCET/blob/main/Reshma.S_Certificates/Reshma.S__Certificates/HTML5__Udemy.pdf">
                <p style="text-align: center;">Certificate Link</p></a>
        </div>
    </div>
    </div>
</div>
</section>
<section class="footer">
        <hr style="color:rgb(52, 51, 51);
    width:100%;
    align:center;
    size:1px;">
    <div style="width:100%; padding: 20px 20px; text-align:center;">
                    <p style="color: #E9F8F9;background:transparent;">Reshma S &copy; 2023 | All Rights Reserved</p>
            </div>
</section>
</body>
</html>
