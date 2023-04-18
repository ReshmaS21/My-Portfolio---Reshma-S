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
        /* about page  */
        .about{
            height:950px;
        }
.about .aboutcontent{
    max-width: 700px;
    position: relative;
    top:10px;
    left:700px;
}
.about .aboutcontent h2{
    font-size: 38px;
}
.about .aboutcontent h2 span{
    color: #537FE7;
}
.rightcontent{
    position: relative;
    top:-300px;
}
.wrapper{
    display:inline-flex;
}
.static-txt{
    font-size: 30px;
    font-weight:500;
    position: relative;
    top:-8px;
    }
    .wrapper .dynamic-txt{
        position: relative;
        top:-30px;
        height:90px;
        line-height:90px;
        overflow:hidden;
    }
.dynamic-txt li{
    position: relative;
    top:0px;
        font-size:30px;
        list-style: none;
        padding: 0 10px;
        animation: slide 12s steps(4) infinite;
    }
    @keyframes slide {
        100%{
            top: -360px;
        }
    }
    .dynamic-txt li span{
        color: #537FE7;
        position: relative;
    }
    .dynamic-txt li span::before{
        content: '';
        position: absolute;
        left:0;
        top:0px;
        width:300px;
        height:40px;
        background: rgb(21, 20, 20);
        border-left: 2px solid #537FE7;
        animation: typing 1.5s steps(18) infinite alternate;
    }
    /* decides what should happen at specific moments during the animation */
    /* the length of time it takes for an animation to complete one cycle  */
    /* animation direction: alternate means animation played forward and backwards  and it is norma by default */
    @keyframes typing {
        100%{
            left: 100%;
            margin: 0 -35px 0 35px;
        }
    }


    .slider{
    width:650px;
    height:410px;
    border-radius:10px;
    overflow:hidden;
    position:relative;
    left:-680px;
    top:200px;
}
.slides{
    width:500%;
    height:300px;
    display:flex;
}
.slides input{
    display:none;
}
.slide{
    width:20%;
    transition:1.5s;
}
.slide img{
    width:700px;
    height:410px;
    object-fit:cover;
}
.manual-btn{
    border:2px solid #537FE7;
    padding:5px;
    border-radius: 10px;
    cursor:pointer;
    transition:1s;
}
.manual-btn:not(:last-child){
    margin-right:40px;
}
.manual-btn:hover{
    background:#537FE7;
}
#radio1:checked ~ .first{
    margin-left: 0;
}
#radio2:checked ~ .first{
    margin-left: -20%;
}
#radio3:checked ~ .first{
    margin-left: -40%;
}
#radio4:checked ~ .first{
    margin-left: -60%;
}
#radio5:checked ~ .first{
    margin-left: -80%;
}
#radio6:checked ~ .first{
    margin-left: -100%;
}
#radio7:checked ~ .first{
    margin-left: -120%;
}
#radio8:checked ~ .first{
    margin-left: -140%;
}
#radio9:checked ~ .first{
    margin-left: -160%;
}
#radio10:checked ~ .first{
    margin-left: -180%;
}

.navigation-auto{
    position:absolute;
    width:800px;
    padding-top:5px;
    background:transparent;
    height:15px;
    margin-top:460px;
    display: flex;
    justify-content:center;
    top:-80px;
    left:-70px;
}
.navigation-auto label{
    border:2px solid #E9F8F9;
    padding:5px;
    border-radius: 10px;
    cursor:pointer;
    transition:1s;
}
.navigation-auto label:hover{
    background:#E9F8F9;
}
.navigation-auto label:not(:last-child){
    margin-right:40px;
}
#radio1:checked ~ .navigation-auto .auto-btn1{
    background:#E9F8F9;
}
#radio2:checked ~ .navigation-auto .auto-btn2{
    background:#E9F8F9;
}
#radio3:checked ~ .navigation-auto .auto-btn3{
    background:#E9F8F9;
}
#radio4:checked ~ .navigation-auto .auto-btn4{
    background:#E9F8F9;
}
#radio5:checked ~ .navigation-auto .auto-btn5{
    background:#E9F8F9;
}
#radio6:checked ~ .navigation-auto .auto-btn6{
    background:#E9F8F9;
}
#radio7:checked ~ .navigation-auto .auto-btn7{
    background:#E9F8F9;
}
#radio8:checked ~ .navigation-auto .auto-btn8{
    background:#E9F8F9;
}
#radio9:checked ~ .navigation-auto .auto-btn9{
    background:#E9F8F9;
}
#radio10:checked ~ .navigation-auto .auto-btn10{
    background:#E9F8F9;
}

.about .aboutcontent .personalinfo .col2{
    position:relative;
    left:320px;
}
.personalinfo .col1{
    position: relative;
    top:-25px;
}
.personalinfo .col1 td{
    padding-top:20px;
}
.personalinfo .col2 td{
    padding-top:20px;
    position: relative;
    top:-254px;
    left:60px;
}

/* education  */
.education{
    position:relative;
    top:-150px;
    height:650px;
}

.education .timeline1{
    width:40%;
}

.education .timeline1 .timecontainer{
    height:30%;
    width:100%;
    background:#E9F8F9;
    position:relative;
    top:146px;
    left:130px;
}
.education .timeline1 ul{
    list-style:none;
}
.education .timeline1 ul li .text-box{
    padding:15px 10px 15px 15px;
    background:#E9F8F9;
    border-radius:0px 10px 10px 10px;
    margin-bottom:40px;
    animation: movedown 1s linear forwards;
    opacity:0;
}
@keyframes movedown {
    0%{
        opacity:1;
        transform: translateY(-20px);
    }
    100%{
        opacity:1;
        transform: translateY(0px);
    }
}
.education .timeline1 ul li:last-child{
    margin-bottom:0;
}
.timeline1 ul li:hover{
    cursor:pointer;
}
@media only screen and (min-width: 786px){
    .timeline1::before{
        content:'';
        position:absolute;
        height:0%;
        width:2px;
        top:200px;
        left:100px;
        transform: translate(-50%);
        background-color:#E9F8F9;
        animation: moveline 6s linear forwards;
    }
    @keyframes moveline {
        0%{
            height:0;
        }
        100%{
            height:77%;
        }
    }
    .timeline1 ul li::after{
        content:'';
        position:absolute;
        height:20px;
        width:20px;
        background-color:#E9F8F9;
        border-radius:50%;
        left:-40px;
    }
    .timeline1 ul li:nth-child(1)::after{
        top:-15px;
    }
    .timeline1 ul li:nth-child(2)::after{
        top:165px;
    }
    .timeline1 ul li:nth-child(3)::after{
        top:340px;
    }
    .timeline1 ul li:hover::after{
        background:#537FE7;
        cursor:pointer;
    }
}
.education .timeline2{
    width:40%;
    height:40%;
}

.education .timeline2 .timecontainer2{
    height:30%;
    width:100%;
    background:#E9F8F9;
    position:relative;
    top:-390px;
    left:850px;
}
.education .timeline2 ul{
    list-style:none;
}
.education .timeline2 ul li .text-box2{
    padding:15px 10px 15px 15px;
    background:#E9F8F9;
    border-radius:0px 10px 10px 10px;
    margin-bottom:40px;
    animation: movedownward 1s linear forwards;
    opacity:0;
}
@keyframes movedownward {
    0%{
        opacity:1;
        transform: translateY(-20px);
    }
    100%{
        opacity:1;
        transform: translateY(0px);
    }
}
.education .timeline2 ul li:last-child{
    margin-bottom:0;
}
.timeline2 ul li:hover{
    cursor:pointer;
}
@media only screen and (min-width: 786px){
    .timeline2::before{
        content:'';
        position:absolute;
        width:2px;
        top:200px;
        left:820px;
        transform: translate(-50%);
        background-color:#E9F8F9;
        animation: movelinedown 6s linear forwards;
    }
    @keyframes movelinedown {
        0%{
            height:0;
        }
        100%{
            height:77%;
        }
    }
    .timeline2 ul li::after{
        content:'';
        position:absolute;
        height:20px;
        width:20px;
        background-color:#E9F8F9;
        border-radius:50%;
        left:-40px;
    }
    .timeline2 ul li:nth-child(1)::after{
        top:-15px;
    }
    .timeline2 ul li:nth-child(2)::after{
        top:165px;
    }
    .timeline2 ul li:nth-child(3)::after{
        top:340px;
    }
    .timeline2 ul li:hover::after{
        background:#537FE7;
        cursor:pointer;
    }
}
/* Portfolio */
.portfoliocontainer{
    position:relative;
    top:-60px;
    width:1200px;
    height:100px;
    margin: 240px auto;
    background:rgb(21, 20, 20);
}
.portfoliobox{
    position:relative;
    width:570px;
    height:370px;
    background:#E9F8F9;
    float:left;
    margin:15px;
    box-sizing: border-box;
    overflow:hidden;
    border-radius:10px;
}
.portfolioicon{
    position:absolute;
    top:0;
    left:0;
    width:100%;
    height:100%;
    background:#537FE7;
    transition:0.5s;
    z-index:1;
}
.portfoliocontainer .portfoliobox:hover .portfolioicon{
    top:20px;
    left: calc(50% - 40px);
    width:80px;
    height:80px;
    border-radius:50%;
}
.portfoliocontainer .portfoliobox .portfolioicon i{
position: absolute;
top:50%;
left:50%;
transform: translate(-50%,-50%);
font-size:100px;
transition:0.5s;
color:#E9F8F9;
background:transparent;
}
.portfoliocontainer .portfoliobox:hover .portfolioicon i{
    font-size:40px;
}
.portfoliocontent{
    position:absolute;
    top:100%;
    height:calc(100% * 100px);
    text-align:center;
    padding:20px;
    box-sizing: border-box;
    transition:0.5s;
    background:#E9F8F9;
    color:rgb(21, 20, 20);
    opacity:0;
}
.portfoliocontainer .portfoliobox:hover .portfoliocontent{
    top:100px;
    opacity:1;
}
.portfoliocontent h3{
    margin:0;
    padding:0;
    font-size:24px;
    background:#E9F8F9;
    color:rgb(21, 20, 20);
}
.portfoliocontent p{
    margin:0;
    padding:0;
    background:#E9F8F9;
    color:rgb(21, 20, 20);
}
/* gallery */
.container{
    position:relative;
    top:120px;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  text-align: center;
  margin: 40px 20px 0 20px;
  width:80%;
  left:150px;
}
.container .box{
 display: flex;
 flex-direction: row;
 justify-content: space-between;
}

.container .box .dream{
  display: flex;
  flex-direction: column;
  width: 32.5%;
}

.container .box .dream img{
  width: 100%;
  padding-bottom: 15px;
  border-radius: 5px;
}

@media only screen and (max-width: 769px){
    .container .box{
   flex-direction: column;
  }

.container .box .dream{
  width: 100%;
}
}

@media only screen and (max-width: 643px){
.container .heading{
  width: 100%;
}
.container .heading h3{
  font-size: 1em;

}
}

/* achievements */
.achievements .box-container{
    display: flex;
    align-items: center;
    justify-content: space-between;
    flex-wrap: wrap;
    padding: 1rem 0;
    padding-left: 3rem;
    position:relative;
    top:150px;
    left:-15px;
}
.achievements .box-container .box{
    width:27rem;
    margin:2.5rem 2rem;
    padding-left: 3rem;
    border-left: .2rem solid #E9F8F9;
    position:relative;
}
.achievements .box-container .box span{
    font-size:1.3rem;
    background:#222;
    color:#E9F8F9;
    border-radius:5rem;
    padding: 0.5rem 2.5rem;
}
.achievements .box-container .box h3{
    font-size:1.5rem;
    color:#E9F8F9;
    padding-top:2rem;
}
.achievements .box-container .box p{
    font-size:0.9rem;
    color:#E9F8F9;
    padding:1rem 0;
    text-align:justify;
}
.achievements .box-container .box i{
    position:absolute;
    top:-1rem;
    left:-2rem;
    height:4rem;
    width:4rem;
    border-radius:50%;
    line-height: 4rem;
    text-align:center;
    font-size:2rem;
    color:#E9F8F9;
    background:#537FE7;
}

/* contact */
.contact .row{
    position: relative;
    top:150px;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-wrap: wrap;
}
.contact .row .content{
    flex: 1 1 250px;
    padding: 10px;
}
.contact .row form{
    flex: 1 1 380px;
    padding-right: 60px;
    margin: 30px;
   margin-bottom:50px;
}
.contact .row form .box{
padding: 1rem;
margin: 1rem 0;
background:rgb(52, 51, 51);
color: #E9F8F9;
border-radius:10px;
border:0;
text-transform: none;
font-size:1rem;
width:100%;
}
.contact h2{
    font-size: 70px;
    position: relative;
    text-align: center;
    top:0px;
}
.contact h2 span{
    color: #537FE7;
}
.contact hr{
    position: relative;
    top:150px;
    color:rgb(52, 51, 51);
    width:90%;
    left:75px;
    align:center;
    size:1px;
}
.contact .btn-group {
    position: relative;
    bottom:-5px;
}
.contact .btn-group {
    color: #fff;
    font-size:20px;
    text-decoration: none;
    padding: 5px 20px;
    background: #537FE7;
    border-radius: 10px;
    border: 2px solid #537FE7;
    font-weight: 500;
    transition: .3s;
}
.contact .btn-group:hover{
    color: #537FE7;
    background: transparent;
}
.content .title{
    text-transform: uppercase;
    font-size:38px;
    padding-bottom:5px;
    width:50%;
    position:relative;
    top:-70px;
    left:80px;
}
.contact .info1 {
    position:relative;
    top:-60px;
    left:80px;
    width:80%;
}
.contact .info1 h3{
    display:flex;
    align-items:center;
    text-align: justify;
    font-size:18px;
    font-weight:300;
    padding:10px 0;
    width:68%;
}
/* .contact{
position:relative;
} */
.contact .info1 h3 i{
    padding-right:10px;
    color:#537FE7;
}
::-webkit-scrollbar{
    width: 0px;
}
</style>
<script src="js/jquery.js"></script>
        <script type="text/javascript">
    $(document).ready(function () {

        $("#contactsend").click(function () {

            name = $("#name").val();
            email = $("#email").val();
            message = $("#message").val();

            $.ajax({
                type: "POST",
                url: "sendmsg.php",
                data: "name=" + name + "&email=" + email + "&message=" + message,
                success: function (html) {
                    if (html == 'true') {

                        $("#add_err2").html('<div class="alert alert-success"> \
                                             <strong>Message Sent!</strong> \ \
                                             </div>');

                    } else if (html == 'name_long') {
                        $("#add_err2").html('<div class="alert alert-danger"> \
                                             <strong>Name</strong> must cannot exceed 50 characters. \ \
                                             </div>');

                    } else if (html == 'name_short') {
                        $("#add_err2").html('<div class="alert alert-danger"> \
                                             <strong>Name</strong> must exceed 2 characters. \ \
                                             </div>');

                    } else if (html == 'email_long') {
                        $("#add_err2").html('<div class="alert alert-danger"> \
                                             <strong>Email</strong> must cannot exceed 50 characters. \ \
                                             </div>');

                    } else if (html == 'email_short') {
                        $("#add_err2").html('<div class="alert alert-danger"> \
                                             <strong>Email</strong> must exceed 2 characters. \ \
                                             </div>');

                    } else if (html == 'eformat') {
                        $("#add_err2").html('<div class="alert alert-danger"> \
                                             <strong>Email</strong> format incorrect. \ \
                                             </div>');

                    } else if (html == 'message_long') {
                        $("#add_err2").html('<div class="alert alert-danger"> \
                                             <strong>Message</strong> must cannot exceed 50 characters. \ \
                                             </div>');

                    } else if (html == 'message_short') {
                        $("#add_err2").html('<div class="alert alert-danger"> \
                                             <strong>Message</strong> must exceed 2 characters. \ \
                                             </div>');


                    } else {

                        $("#add_err2").html('<div class="alert alert-danger"> \
                                             <strong>Error</strong> processing request. Please try again. \ \
                                             </div>');
                    }
                },
                beforeSend: function () {
                    $("#add_err2").html("loading...");
                }
            });
            return false;
        });
    });
</script>
</head>
<body>

    <header>
        <h2 class="logo"><span>R</span>esh.</h2>
        <nav class="navigation">
            <a href="#homep">Home</a>
            <a href="#aboutp">About</a>
            <a href="#educationp">Education</a>
            <a href="#portfoliop">Portfolio</a>
            <a href="#galleryp">Gallery</a>
            <a href="#achievementsp">Achievements</a>
            <a href="#contactp">Contact</a>
        </nav>
        <a href="mailto:sreshma2112@gmail.com" class="btn-talk">Let's Talk</a>
    </header>
    <section class="home" id="homep">
        <div class="content">
            <h2>Hi, I'm <span>Reshma</span></h2>
            <h4>Junior Software Developer</h4><br>
            <p style="text-align:justify;">Engineering graduand looking for an opportunity to work in a
                demanding atmosphere where I can demonstrate my abilities and use my knowledge and intelligence to help the organization
                expand so that I can deal with the newest and most cutting-edge technologies. I intend to be a part of an organization where I can constantly learn and develop my technical and managerial abilities.</p>
                <div class="btn-group">
                    <a href="https://drive.google.com/uc?export=download&id=1G5CVquH12bp6Lke7Q0v3s_8hhht8WPba">Download Resume</a>
                    <a href="#aboutp">Know More</a>
                </div>
                <div class="social-icons">
                    <div class="circle1"><a href="mailto:sreshma2112@gmail.com"><i class="fa-solid fa-envelope"></i></a></div>
                    <div class="circle2"><a href="https://github.com/ReshmaS21"><i class="fa-brands fa-github"></i></a></div>
                    <div class="circle3"><a href="https://www.linkedin.com/in/reshma-s-bb9184246/"><i class="fa-brands fa-linkedin"></i></a></div>
                </div>
        </div>
        <img style="position:relative;left:100px;height:620px;" src="Myimage.png"alt="Reshma">
    </section>



    <section class="about" id="aboutp">
    <div class="aboutcontent">
    <div class="slider">
        <div class="slides">
            <input type="radio" name="radio-btn" id="radio1" checked>
            <input type="radio" name="radio-btn" id="radio2">
            <input type="radio" name="radio-btn" id="radio3">
            <input type="radio" name="radio-btn" id="radio4">
            <input type="radio" name="radio-btn" id="radio5">
            <input type="radio" name="radio-btn" id="radio6">
            <input type="radio" name="radio-btn" id="radio7">
            <input type="radio" name="radio-btn" id="radio8">
            <input type="radio" name="radio-btn" id="radio9">
            <input type="radio" name="radio-btn" id="radio10">
            <div class="slide first">
            <img src="imgs/img1.jpeg" alt="img1">
            </div>
            <div class="slide">
            <img src="imgs/img2.jpeg" alt="img2">
            </div>
            <div class="slide">
            <img style=" width:650px;
    height:410px;" src="imgs/img11.jpeg" alt="img3">
            </div>
            <div class="slide">
            <img src="imgs/img4.jpeg" alt="img4">
            </div>
            <div class="slide">
            <img style=" width:650px;
    height:410px;
    object-fit:cover;" src="imgs/img12.jpeg" alt="img5">
            </div>
            <div class="slide">
            <img style=" width:650px;
    height:600px;
    object-fit:cover;"  src="imgs/img13.jpeg" alt="img6">
            </div>
            <div class="slide">
            <img src="imgs/img14.jpeg" alt="img7">
            </div>
            <div class="slide">
            <img src="imgs/img8.jpeg" alt="img8">
            </div>
            <div class="slide">
            <img src="imgs/img9.jpeg" alt="img9">
            </div>
            <div class="slide">
            <img src="imgs/img10.jpeg" alt="img10">
            </div>

            <div class="navigation-auto">
                <label for="radio1" class="manual-btn auto-btn1"></label>
                <label for="radio2" class="manual-btn auto-btn2"></label>
                <label for="radio3" class="manual-btn auto-btn3"></label>
                <label for="radio4" class="manual-btn auto-btn4"></label>
                <label for="radio5" class="manual-btn auto-btn5"></label>
                <label for="radio6" class="manual-btn auto-btn6"></label>
                <label for="radio7" class="manual-btn auto-btn7"></label>
                <label for="radio8" class="manual-btn auto-btn8"></label>
                <label for="radio9" class="manual-btn auto-btn9"></label>
                <label for="radio10" class="manual-btn auto-btn10"></label>
            </div>
        </div>
    </div>
    <div class="rightcontent">
    <h2>Hello! My name is <span>Reshma</span></h2><br>
    <div class="wrapper">
    <div class="static-txt">I'm </div>
    <ul class="dynamic-txt">
        <li><span> an UG Graduand</span></li>
        <li><span> a Junior Developer</span></li>
        <li><span> a Designer</span></li>
        <li><span> an Event Organizer</span></li>
        <li><span> a Sportsperson</span></li>
</ul></div>
<p style="text-align:justify; position:relative;top:-30px;">I am a passionate and energetic VCET engineering graduand .
    My objective is to have a prosperous profession as a software developer.
    I have knowledge of DBMS, OS, and CN from my undergraduate studies.
    Throughout many projects and events planning at the collegiate level, I have worked as both a team leader and team contributor.
    My strengths are analytical thinking, presentation, problem solving, and judgement.
    In my spare time, I enjoy designing and experimenting with different dishes.
    </p>
<div class="personalinfo">
    <table class="col1">
        <tr>
            <td>Degree</td>
            <td>: Bachelor of Engineering<td>
</tr>
<tr>
<td>Stream </td>
            <td>: Computer Science Engineering<td>
</tr><tr>
<td>CGPA </td>
            <td>: 9.20<td>
</tr><tr>
<td>Birthdate </td>
            <td>: 21/12/2001<td>
            </tr>
            <tr>
<td>Languages &nbsp</td>
            <td>: English | Hindi | Tamil <td>
            </tr>
</table>
<table class="col2">
        <tr>
            <td>Phone No &nbsp  </td>
            <td>: +91 6369589164<td>
</tr>
<tr>
<td>Email </td>
            <td>: sreshma2112@gmail.com<td>
</tr><tr>
<td>Location </td>
            <td>: Madurai, Tamil Nadu<td>
</tr><tr>
<td>Country </td>
            <td>: India<td>
            </tr>
            <tr>
<td>Hobbies </td>
            <td>: Designing | Cooking | Sports <td>
            </tr>
</table>
</div>
<div class="btn-group" style="position:relative; top:-218px;">
                    <a href="https://drive.google.com/uc?export=download&id=1G5CVquH12bp6Lke7Q0v3s_8hhht8WPba">Download Resume</a>
                    <a href="https://drive.google.com/uc?export=download&id=1zI9bBbOJNPYMqeZ3aJVJ50TaGGFLxX1s">Download Documents</a>
                </div>
</div>
</div>
    </section>

<section class="education" id="educationp">
<h2 style="font-size:38px; position:relative;top:110px;text-align:center;">My <span style="color:#537FE7;font-size:38px;">Education</span></h2>
<div class="timeline1">
        <div class="timecontainer">
            <ul>
                <li >
        <div class="text-box" style="animation-delay:0s;">
        <p style="background:#E9F8F9;color:#537FE7;font-weight:800;">2020 - 2024</p>
                <h2 style="background:#E9F8F9;color:#537FE7;"> Bachelor's Degree</h2>
                <small style="background:#E9F8F9;color:#000;">Computer Science and Engineering | Velammal College of Engineering and Technology | Madurai | CGPA: 9.2
            </small>
            </div>
</li>
<li >
            <div class="text-box" style="animation-delay:2.1s;">
            <p style="background:#E9F8F9;color:#537FE7;font-weight:800;" >2019 - 2020</p>
                <h2 style="background:#E9F8F9;color:#537FE7;"> Higher Secondary School Certificate</h2>
                <small style="background:#E9F8F9;color:#000;">Computer Science | Vikaasa School | Madurai | Board: Indian School Certificate (ISC) | Percentage: 85.0
            </small>
            </div>
</li>
<li >
      <div class="text-box" style="animation-delay:4.1s;">
      <p style="background:#E9F8F9;color:#537FE7;font-weight:800;">2018 - 2019</p>
                <h2 style="background:#E9F8F9;color:#537FE7;"> Secondary School Leaving Certificate</h2>
                <small style="background:#E9F8F9;color:#000;"> Vikaasa School | Madurai | Board: Indian Certificate of Secondary Education (ICSE) | Percentage: 92.3
            </small>

            </div>
</li>

</ul>
    </div>
</div>
<div class="timeline2">
        <div class="timecontainer2">
            <ul>
                <li >
        <div class="text-box2" style="animation-delay:0s;">
            <p style="background:#E9F8F9;color:#537FE7;font-weight:800;">2015 - 2016</p>
                <h2 style="background:#E9F8F9;color:#537FE7;"> Praveen Uttarardh - Equivalent to BA Hindi</h2>
                <small style="background:#E9F8F9;color:#000;"> Rashtrabhasha Praveen  - Equivalent to BA Hindi | Certified by Dakshina Bharat Hindi Prachar Sabha, Madras.
            </small>
            </div>
</li>
<li >
            <div class="text-box2" style="animation-delay:2.1s;">
            <p style="background:#E9F8F9;color:#537FE7;font-weight:800;" >2014 - 2015</p>
                <h2 style="background:#E9F8F9;color:#537FE7;"> Rashtrabhasha Visharad - Hindi</h2>
                <small style="background:#E9F8F9;color:#000;">Rashtrabhasha Visharad Examination | Certified by Dakshina Bharat Hindi Prachar Sabha, Madras.
            </small>
            </div>
</li>
<li >
      <div class="text-box2" style="animation-delay:4.1s;">
            <p style="background:#E9F8F9;color:#537FE7;font-weight:800;">2013 - 2014</p>
                <h2 style="background:#E9F8F9;color:#537FE7;"> Praveshika - Hindi</h2>
                <small style="background:#E9F8F9;color:#000;">Praveshika Examination | Certified by The Executive Committee of the Dakshina Bharat Hindi Prachar Sabha, Madras.
            </small>
            </div>
</li>

</ul>
    </div>
</div>
<i class="fa-solid fa-rotate-right fa-xl" onClick="window.location.reload();" style="color: #537FE7;
        width: 10px;
        height: 10px;
        position:relative;
        left:1400px;
        top:-724px;
        background: rgb(21, 20, 20);"></i>
</section>
<section class="portfolio" id="portfoliop">
<h2 style="font-size:38px;text-align:center;position:relative;top:120px;">My <span style="color:#537FE7;font-size:38px;">Portfolio</span></h2>
<div class="portfoliocontainer">
    <div class="portfoliobox">
        <div class="portfolioicon"><i class="fa-solid fa-p"></i></div>
        <div class="portfoliocontent">
            <h3>My Projects</h3>
            <p style="padding-top:10px;">I have experience working in projects related to different latest technology stacks like HTML, CSS, JavaScript, Angular JS, Internet of Things.
                I have served as both team leader and team contributor in the projects.
            </p>
            <div class="btn-group" style="position:relative; top:30px; background:transparent;">
                    <a href="projects.php">Read More</a>
                </div>
        </div>
    </div>
    <div class="portfoliobox">
    <div class="portfolioicon"><i class="fa-solid fa-c"></i></div>
    <div class="portfoliocontent">
            <h3>My Credentials</h3>
            <p style="padding-top:10px;">I have completed certification courses related to different latest technology like the Machine Learning, HTML, CSS, JavaScript, Bootstrap, Angular JS, Internet of Things and Data Analytics.
                These courses have helped me to contribute better on my projects.
            </p>
            <div class="btn-group" style="position:relative; top:30px; background:transparent;">
                    <a href="projects.php">Read More</a>
        </div>
    </div>
</div>
</section>
<section class="swiper mySwiper" id="galleryp">
<h2 style="font-size:38px;text-align:center;position:relative;top:120px;left:-960px;width:2130px;">My <span style="color:#537FE7;font-size:38px;">Designs</span></h2>
<div class="container">
    <div class="box">

      <div class="dream">
        <img src="design1.png">
         <img src="design2.png">
          <img src="design3.png">
           <img src="design4.png">

      </div>

        <div class="dream">
        <img src="design5.png">
        <img src="design6.jpeg">
         <img src="design7.png">
          <img src="design8.png">
          <div style="position:relative;top:80px;"class="btn-group">
                    <a href="http://vcet.ac.in/vcetit/pdfs/eMagazine/cse2021-2022.pdf">Magazine 1</a>
                    <a href="http://vcet.ac.in/vcetit/pdfs/eMagazine/CSE%20volume%204%20issue%202%20Nov%2021%20Feb%2022.pdf">Magazine 2</a>
                </div>

      </div>
        <div class="dream">
        <img src="design9.png">
            <img src="design10.png">
        <img src="design11.png">
         <img src="design12.png">

      </div>
    </div>
</section>
<br>
<br><br>
<br> <br>
<br>
<section class="achievements" id="achievementsp">
<h2 style="font-size:38px;text-align:center;position:relative;top:130px;left:230px;width:1130px;">My <span style="color:#537FE7;font-size:38px;">Achievements</span></h2>
<div class="box-container">
    <div class="box">
    <i class="fa-sharp fa-solid fa-shield"></i>
    <span>April - 2023</span>
    <h3>INNOFESTA'23</h3>
    <p>Our team 'Pico Pride' had participated in 3rd National Level Project Contest held on 13th April, 2023 at Velammal College of Engineering and Technology and demonstrated the project titled "Erect Assistant - The Posture Detector".</p>
    </div>
    <div class="box">
    <i class="fa-sharp fa-solid fa-shield"></i>
    <span>March - 2023</span>
    <h3>CAUSE 2023 </h3>
    <p>Our team 'Pico Pride' had participated and honoured with the "SPIRIT OF INNOVATION" Award in the National
        Level Project Contest CAUSE 2023 - A Global Open Innovation Challenge held on Design Thinking Day, 2023 at CMR University, Bengaluru.</p>
    </div>
    <div class="box">
    <i class="fa-sharp fa-solid fa-shield"></i>
    <span>February - 2023</span>
    <h3>ICRTCE - 2023</h3>
    <p>I have presented paper titled "A Systematic Review and Meta-Analysis of Digital Eye Strain" in 2nd International Conference on Revolutionary Technology
        in Civil Engineering organized by St.Martin's Engineering College, Secunderabad.</p>
    </div>
    <div class="box">
    <i class="fa-sharp fa-solid fa-shield"></i>
    <span>February - 2023</span>
    <h3>Engineering Equity Hackathon</h3>
    <p>I was issued Certficate for my ardent participation in Virtusa's global initiative "Engineering Equity Hackathon" held virtually.
        I have also learnt about the latest trends in the codind field through this hackathon for women.</p>
    </div>
    <div class="box">
    <i class="fa-sharp fa-solid fa-shield"></i>
    <span>December - 2022</span>
    <h3>3-IDIOTS</h3>
    <p>I have demonstrated my project in 3-IDIOTS which is an Interdisciplinary Project Presentation Competition organized by VCET in association with Institution's Innovation Council along with my team members from EEE and ECE Department.</p>
    </div>
    <div class="box">
    <i class="fa-sharp fa-solid fa-shield"></i>
    <span>November - 2022</span>
    <h3>NCIET'22 </h3>
    <p>I have presented paper titled "Detection and Prevention of Vision Syndrome" in National Conference on Innovation in Engineering and Technology
         organized by Velammal College of Engineering and Technology, Madurai.</p>
    </div>
    <div class="box">
    <i class="fa-sharp fa-solid fa-shield"></i>
    <span>March - 2022</span>
    <h3> Smart India Hackathon</h3>
    <p>Our team participated in the SIH Internal Hackathon 2022 organized by Velammal College of Engineering and Technology, Madurai. Our project had been shortlisted for submission in Smart India Hackathon 2022.</p>
    </div>
    <div class="box">
    <i class="fa-sharp fa-solid fa-shield"></i>
    <span>February - 2021</span>
    <h3>VISAI - 2021</h3>
    <p>I presented my project idea titled Pellucid-Pro Water Purifier under the theme Clean Water and Sanitation
in 11th International Project Competition (VISAI 2021) organized by Vel Tech Rangarajan Dr. Sagunthala R&D Institute of Science and Technology, Chennai.</p>
    </div>
    <div class="box">
    <i class="fa-sharp fa-solid fa-shield"></i>
    <span>October - 2019</span>
    <h3>Sports</h3>
    <p>I am a National Level Throwball Player and Anna University Zonal Level Basketball Player. Our team has backed the first and second positions in State Level Throwball match for consecutive two years - 2019 and 2020.</p>
    </div>
</div>
</section>
<br>
<br><br>
<br> <br>
<br>

<section class="contact" id="contactp">
<h2 class="heading" style="font-size:38px;position:relative; top:120px;"> Contact<span> Me </span> </h2>
<hr/>
    <div class="row">
            <div class="content">
                <h3 class="title">Contact <span style="color:#537FE7;"> Info</span></h3>
                <div class="info1">
                    <h3> <i class="fa-solid fa-envelope"></i> sreshma2112@gmail.com</h3>
                    <h3> <i class="fa-solid fa-phone"></i> +91 6369589164</h3>
                    <h3> <i class="fa-solid fa-phone"></i> +91 9345202692</h3>
                    <h3> <i class="fa-solid fa-location-dot"></i> D-2, Rams Apartment, Pillaiyar Kovil Street, S.S.Colony,
                    Madurai-625016, Tamil Nadu, India.</h3>
                </div>
                </div>
            <form method="post">
            <div id="add_err2"></div>
                                <input class="box"type="text" id="name" name="name" placeholder="Name">
                                <input class="box"type="email" id="email" name="email" placeholder="Email">
                                <textarea class="box message" cols="30" rows="7" id="message" name="message" placeholder="Message"></textarea>
                                <button class="btn-group" type="submit"  id="contactsend">Send</button>
                    </form>
        </div>

    </section>
    <a href="#homep" id="top"><i class="fa-solid fa-chevron-up" style=" background:transparent;color:#537FE7;position:fixed;top:700px; left:1500px; font-size:25px;
    z-index:100; "></i></a>
    <section class="footer">
        <hr style="color:rgb(52, 51, 51);
    width:100%;
    align:center;
    size:1px;position:relative;
    top:200px;">
    <div style="width:100%; padding: 20px 20px; text-align:center;position:relative;
    top:200px;">
                    <p style="color: #E9F8F9;background:transparent;">Reshma S &copy; 2023 | All Rights Reserved</p>
            </div>
</section>
<script type="text/javascript">
    var count = 1;
    setInterval(function() {
        document.getElementById('radio'+ count).checked = true;
        count++;
        if(count > 10){
            count = 1;
        }
    }, 5000);
    </script>
       <script type="text/javascript">
        mybutton= document.getElementById("top");
        window.onscroll= function(){
            scrollFunction();
        };
        function scrollFunction(){
            if(document.body.scrollTop >20 || document.documentElement.scrollTop > 20){
                mybutton.style.display="block";
            }
            else{
                mybutton.style.display="none";
            }
        }
        </script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>
