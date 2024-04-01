<?php 
require "water.css.php";
require "water.css2.php";
$count = 0;


// - CUSTOMS PRICES PANNEL -
$design = 160; $user_sys = 100; $animation = 50; $dash = 50;
$CGI = 100; $fiv_ewebpage = 300;$M_VEr = 30;
$s_hop = 150;


// - TIME PANNEL -
$day = 0; 

/* Notes 
      systems de jours a continuer !
*/ 

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Alata&family=Bebas+Neue&family=Domine:wght@400..700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Alata&family=Bebas+Neue&family=Domine:wght@400..700&display=swap" rel="stylesheet">
    <title>water-menu</title>
</head>
<div class="naviguator">
<div class="nav"><h3 class="nav-portfolio">portfolio</h3><h3>/</h3><h3 class="nav-project">project</h3></div></div>
<img src="img/abstrait.png" alt="" class="abstrait-2">
<img src="img/abstrait.png" alt="" class="abstrait-3">
<img src="img/geo_donnuts.png" alt="" class="abstrait-4">
<img src="img/abstract-2.png" alt="" class="abstrait-5">
<body class="body"> <div id="cursor"></div><img src="img/K(7).png" alt="" class="logo">
 <button class="c-p-btn-2">CONTACT ME</button><div class="box-001"><div class="blue-bar"></div> 
<img src="img/abstrait.png" alt="" class="abstrait-1">
<img src="img/K(2).png" alt="" class="title-img-1">
<img src="img/K(5).png" alt="" class="t-arr-img">
<img src="img/K(5).png" alt="" class="t-arr-img-2">
<div class="img-logo-section">
<div class="circle-4"></div>
  <img class="react-logo" src="img/react.png" alt="">
  <img class="js-logo" src="img/js.png" alt="">
  <img class="css-logo" src="img/css.png" alt="">
  <img class="html-logo" src="img/html.png" alt="">
  <img class="php-logo" src="img/php.png" alt="">
  <img class="figma-logo" src="img/figma.png" alt="">
</div><h1 class="fast">SCROLL FASTER!!!</h1>
  <div class="about-me-section">
<h3 class="about-me-text">Hi, I am a small web developer but I am very competent 
  <br> I can create sites for you with your requirements 
  <br> I like teamwork and my work is always 
   <br> well done and sometimes I can 
  <br>take a little too much time on a project since I am a perfectionist</h3>
  <div class="circle-1"></div><div class="circle-2"></div><div class="circle-3"></div></div>
  <div class="circle-7"></div><div class="circle-8"></div><div class="circle-9"></div>
  <h1 class="skills-text">My skills and technology</h1><div class="circle-5"></div><div class="circle-6"></div>
    <div class="section-1">
    <div class="a-1">
 <img class="a" src="img/a.jpg" alt="">
        <h3 class="a-t">JUNIOR</h3>
        <h3 class="a-st">the junior rate is between $50 and $100 <br>
I make 3 web pages for <br> 1 week of work and <br> I don't do<br>
 design at  this price you must <br> send me your elements</h3></div>
        <div class="b-1">
      <h3 class="b-t">ORDINARY</h3> 
      <h3 class="b-st">the price of the ordinary
          The <br> is from 150$ to 225$
          <br> I design 3 pages with more complicated functions and
          <br> activities such as a forum, a podcast and others,
          <br> this kind of system takes me 1 month or 3 depending on lots of 
          <br> things outside and in the project </h3>
      <img class="b" src="img/b.jpg" alt="">
      <h5 class="b-st"></h5> </div>
      <div class="c-1">
 <h3 class="c-t">professional</h3>
 <h3 class="c-st">the professional rate
     <br> I design your website for 1 week I produce renderings
     <br> for you and offer you ideas after which
     <br> I code more complex features like
     <br> server renderings and a
     <br> starting the animation and much more <br>
      takes around 3 months to 6 months </h3>
      <img class="c" src="img/c.png" alt="">
      <h5 class="c-st"></h5>
      </div></div><div class="c-p-box">
      <button class="c-p-btn">SEE MORE</button><DIV class="text-box">
    <h1 class="c-p-tit">custom prices</h1> <div class="st-box" id="st-box">
       <h3 class="s-ptt-1">DESIGN YOUR WEBSITE</h3>
            <h3 class="s-ptt-2">USERS SYSTEMS</h3>
               <h3 class="s-ptt-3">ANIMATIONS AND EFFECTS</h3>
              <h3 class="s-ptt-4">DASHBOARD</h3>
         <h3 class="s-ptt-5">CREATE A GRAPHIC IDENTITY</h3>
            <h3 class="s-ptt-6">5 WEB PAGE</h3>
             <h3 class="s-ptt-7">MOBILE VERSION EDIT</h3>
            <h3 class="s-ptt-8">SHOP</h3></DIV class="t-counter">
            <h1 class="count"><?= $count; ?> $</h1>
            <h2 class="day"><?= $day . " " . "DAYs" ?></h2>
            </div><div class="check" id="check"> 
    <form method="POST">
        <input type="checkbox" name="check1" id="check-1" class="check-1" value="on"> <script>
        const checkbox1 = document.getElementById("check-1");
        let count = <?= $count; ?>;  let day = <?= $day; ?>; 
        let design = <?= $design; ?>; 
        checkbox1.addEventListener("change", function() {
          this.checked ? count += design : count -= design;
          this.checked ? day += 8 : day -= 8;
          if (count < 0) {count = 0; } if (day < 0) {day = 0; }
           document.querySelector('.day').textContent = day + " " + "DAYs";
           document.querySelector('.count').textContent = count + ' $';
            });</script>
      <input type="checkbox"class="check-2" id="check-2"><script>
        const checkbox2 = document.getElementById("check-2");
        let user = <?= $user_sys; ?>; 
        checkbox2.addEventListener("change", function() {
              this.checked ? count += user : count -= user;
              this.checked ? day += 21 : day -= 21;
          if (count < 0) {count = 0; } if (day < 0) {day = 0; }
           document.querySelector('.day').textContent = day + " " + "DAYs";
           document.querySelector('.count').textContent = count + ' $'; });
           </script>   <input type="checkbox"class="check-3" id="check-3">  
    <script> let anime = <?= $animation; ?>; 
        const checkbox3 = document.getElementById("check-3");
        checkbox3.addEventListener("change", function() {
              this.checked ? count += anime : count -= anime; this.checked ? day += 5 : day -= 5;
          if (count < 0) {count = 0; } if (day < 0) {day = 0; }
           document.querySelector('.day').textContent = day + " " + "DAYs";
           document.querySelector('.count').textContent = count + ' $';});</script>
              <input type="checkbox"class="check-4" id="check-4"><script>
        const checkbox4 = document.getElementById("check-4"); 
        let dash = <?= $dash; ?>; 
        checkbox4.addEventListener("change", function() {
              this.checked ? count += dash : count -= dash;
       this.checked ? day += 14 : day -= 14;
          if (count < 0) {count = 0; } if (day < 0) {day = 0; }
           document.querySelector('.day').textContent = day + " " + "DAYs";
           document.querySelector('.count').textContent = count + ' $';});</script>
              <input type="checkbox"class="check-5" id="check-5"><script>
        const checkbox5 = document.getElementById("check-5");
let cgi = <?= $CGI; ?>; checkbox5.addEventListener("change", function() {
              this.checked ? count += cgi : count -= cgi;
      this.checked ? day += 7 : day -= 7;
              if (count < 0) {  count = 0; } if (day < 0) {day = 0; }
              document.querySelector('.day').textContent = day + " " + "DAYs";
                document.querySelector('.count').textContent = count + ' $'; }); </script>
              <input type="checkbox"class="check-6" id="check-6"><script>
      let fivepage = <?= $fiv_ewebpage; ?>; 
        const checkbox6 = document.getElementById("check-6");
        checkbox6.addEventListener("change", function() {
              this.checked ? count += fivepage : count -= fivepage;
              this.checked ? day += 60 : day -= 60;
              if (count < 0) { count = 0; } if (day < 0) {day = 0; }
              document.querySelector('.day').textContent = day + " " + "DAYs";
                document.querySelector('.count').textContent = count + ' $';
        });</script> <input type="checkbox"class="check-7" id="check-7">  <script>
       let vermobile = <?= $M_VEr; ?>; 
        const checkbox7 = document.getElementById("check-7");
        checkbox7.addEventListener("change", function() {
              this.checked ? count += vermobile : count -= vermobile;
              this.checked ? day += 12 : day -= 12;
              if (count < 0) { count = 0; } 
              if (day < 0) {day = 0; }
              document.querySelector('.day').textContent = day + " " + "DAYs";
                document.querySelector('.count').textContent = count + ' $'; }); </script>
              <input type="checkbox"class="check-8" id="check-8"><script>
      let sh0p = <?= $s_hop; ?>; 
        const checkbox8 = document.getElementById("check-8");
        checkbox8.addEventListener("change", function() {
              this.checked ? count += sh0p : count -= sh0p;
              this.checked ? day += 30 : day -= 30;  if (count < 0) {count = 0; }
              if (day < 0) {day = 0; }
              document.querySelector('.day').textContent = day + " " + "DAYs";
                document.querySelector('.count').textContent = count + ' $';});
    </script> </form> </div>  </div> </div><div class="box-002">  <div class="all-project"> <div class="circle-01"></div> <div class="circle-02"></div> <h3 class="tt-project1">Here is a project where you can see my transitions and the colors <br>
       that I use I want you to analyze the way I <br>see things despite that it is usually more abstract <br> but its a more simplistic project <br>
        is possible that I add a function to see <br> a purchase panel in this project we <br> can change the flow of the shoe that we personally want its <br>
         a project 8% the style is beautiful but it <br> lacks functionality I will do my best on your website to reassure you </h3>
         <h3 class="tt-project2">Here is a project where it displays 
          <br> the time of Toronto in Canada when you 
           press  the bulb the <br> background turns yellow like a <br> light which turns on if you do not live 
          <br> in its time zone it is of no use to you but it remains a quick project 
          <br> with no real purpose apart from showing you some of the easy 
          <br> things I'll do in about thirty minutes</h3>
      <div class="box-1-2-project"> </div><div class="box-2-2-project"> </div>  </div><script>
     const a = document.querySelector(".a-1"); const b = document.querySelector(".b-1");
    const c = document.querySelector(".c-1"); const at = document.querySelector(".a-t");  const bt = document.querySelector(".b-t");
    const ct = document.querySelector(".c-t");const b_1_2_project = document.querySelector(".box-1-2-project");
    const ast = document.querySelector(".a-st"); const bst = document.querySelector(".b-st");
    const cst = document.querySelector(".c-st");const b_2_2_project = document.querySelector(".box-2-2-project");
    const aim = document.querySelector(".a");const bim = document.querySelector(".b");
 const cim = document.querySelector(".c"); const aimg = document.querySelector(".t-arr-img");
    const cpbtn = document.querySelector(".c-p-btn");const cpbtn02 = document.querySelector(".c-p-btn-2");
    const cptit = document.querySelector(".c-p-tit");
    const check1 = document.getElementById(".check-1");const box002 = document.querySelector(".box-002");
    const allcheck = document.querySelector(".check");
    const stbox = document.querySelector(".st-box");
    const count_text = document.querySelector(".count");const box001 = document.querySelector(".box-001");
    const day_text = document.querySelector(".day");const body = document.querySelector(".body");const navProject = document.querySelector(".nav-project");
    const navPortfolio = document.querySelector(".nav-portfolio");
  cpbtn.addEventListener("click", () => {
      cptit.style.opacity = "0%";
      cpbtn.style.opacity = "0%";
    allcheck.style.opacity = "100%";
    stbox.style.opacity = "100%";
    count_text.style.opacity = "100%";
    day_text.style.opacity = "100%";
    }); a.addEventListener("mouseenter", () => {
  a.style.filter = "grayscale(100%)";
  ast.style.visibility = "visible";
  b.style.filter = "grayscale(0%)";
  bst.style.visibility = "hidden";
  c.style.filter = "grayscale(0%)";
  cst.style.visibility = "hidden";
   aim.addEventListener("mouseenter", () => {
  a.style.filter = "grayscale(100%)";
  ast.style.visibility = "visible";
  });ast.addEventListener("mouseenter", () => {
  a.style.filter = "grayscale(100%)";
  ast.style.visibility = "visible";
});
});aim.addEventListener("mouseout", () => {
  a.style.filter = "grayscale(0)";
  ast.style.visibility = "hidden";
  at.style.visibility = "visible";
  
});b.addEventListener("mouseenter", () => {
  b.style.filter = "grayscale(100%)";
  bst.style.visibility = "visible";
  a.style.filter = "grayscale(0%)";
  ast.style.visibility = "hidden";
  c.style.filter = "grayscale(0%)";
  cst.style.visibility = "hidden";
  bim.addEventListener("mouseenter", () => {
  b.style.filter = "grayscale(100%)";
  bst.style.visibility = "visible";
  
});bst.addEventListener("mouseenter", () => {
  b.style.filter = "grayscale(100%)";
  bst.style.visibility = "visible";
  
});
});bim.addEventListener("mouseout", () => {
  b.style.filter = "grayscale(0)";
  bst.style.visibility = "hidden";
  bt.style.visibility = "visible";
});cim.addEventListener("mouseout", () => {
  c.style.filter = "grayscale(0)";
  cst.style.visibility = "hidden";
  ct.style.visibility = "visible";
  
});c.addEventListener("mouseenter", () => {
  c.style.filter = "grayscale(100%)";
  cst.style.visibility = "visible";
  a.style.filter = "grayscale(0%)";
  ast.style.visibility = "hidden";
  b.style.filter = "grayscale(0%)";
  bst.style.visibility = "hidden";
  cim.addEventListener("mouseenter", () => {
  c.style.filter = "grayscale(100%)";
  cst.style.visibility = "visible";
});cst.addEventListener("mouseenter", () => {
  c.style.filter = "grayscale(100%)";
  cst.style.visibility = "visible";
});
});cim.addEventListener("mouseout", () => {
  c.style.filter = "grayscale(0)";
  cst.style.visibility = "hidden";
  ct.style.visibility = "visible";
   });
const fast = document.querySelector(".fast");
aimg.addEventListener("click", () => {
   body.style.overflow = "visible";
   document.body.style.overflowX = "hidden";
   fast.style.visibility = "hidden";
  window.scrollTo({
    top: 7900, 
    behavior: 'smooth' 
  });
  setTimeout(function() {
    fast.style.visibility = "visible";
}, 10000);
});
const aimg2 = document.querySelector(".t-arr-img-2");
aimg2.addEventListener("click", () => {
  fast.style.visibility = "hidden";
   body.style.overflow = "hidden";
  window.scrollTo({
    top: 0, 
    behavior: 'smooth' 
  });
  setTimeout(function() {
    fast.style.visibility = "visible";
}, 10000);
});
const cpbtn2 = document.querySelector(".c-p-btn-2");
cpbtn2.addEventListener("click", () => {
  var myWindow;
setTimeout(() => {    
  var url = 'https://drive.google.com/file/d/1QX9aKZ8ukc8uEpMZybVDSMcOJf2Hi0Ts/view?usp=sharing';
var largeurFenetre = 600;
var hauteurFenetre = 500;
var leftPosition = (screen.width - largeurFenetre) / 2;
var topPosition = (screen.height - hauteurFenetre) / 2;
var options = 'width=' + largeurFenetre + ',height=' + hauteurFenetre + ',left=' + leftPosition + ',top=' + topPosition;
if (myWindow) {
    myWindow.close();
  }else {
    myWindow =  window.open(url, '_blank', options); }

   
  }, 10) 
});
function isMobileDevice() {
    return (typeof window.orientation !== "undefined") || (navigator.userAgent.indexOf('IEMobile') !== -1);
  }
  if (isMobileDevice()) {
    window.location.href = 'mobile-version.php';  }

  window.addEventListener('beforeunload', function() {
    window.scrollTo(0, 0); 
});
document.addEventListener('mousemove', function(e) {
    var cursor = document.getElementById('cursor');
    cursor.style.left = e.pageX + 'px';
    cursor.style.top = e.pageY + 'px';
});
navProject.addEventListener('click', () => {
   box001.style.display = "none";
   box002.style.display = "block";
    cpbtn02.style.display = "block";
    navProject.style.opacity = "1";
    navPortfolio.style.opacity = "30%";
  body.style.overflowY = "visible";});
  
navPortfolio.addEventListener('click', () => {
   box001.style.display = "block";
   box002.style.display = "none";
   navProject.style.opacity = "30%";
    navPortfolio.style.opacity = "1";
    body.style.overflow = "hidden";
    window.scrollTo({
    top: 0, 
    behavior: 'smooth' 
  });
});
b_1_2_project.addEventListener('click', () => {
  window.location.href = "projec-2/projet-2.php";
});
b_2_2_project.addEventListener('click', () => {
  window.location.href = "project/project-1.php";
});
</script>
<?php 
/*  01001110 01101111 01110100 01110010 01100101 00100000 01110000 01100101 01110010 01100101 
00100000 01110001 01110101 01101001 00100000 01100101 01110011 01110100 00100000 01100100 
01100001 01101110 01110011 00100000 01101100 01100101 01110011 00100000 01100011 01101001 
01100101 01110101 01111001 00101100 00100000 01110100 01101111 01101110 00100000 01101110 
01101111 01101101 00100000 01100101 01110011 01110100 00100000 01110011 01100001 01101001 
01101110 01110100 01001110 01101111 01110100 01110010 01100101 00100000 01110000 01100101 
01110010 01100101 00100000 01110001 01110101 01101001 00100000 01101100 01100101 01110101 
01110010 00101110 01000110 01100001 01101001 01110011 00100000 01110001 01110101 01100101 
00100000 01110100 01101111 01110101 01110100 00100000 01101100 01100101 00100000 01101101 
01101111 01101110 01100100 01100101 00100000 01110100 01101111 01101110 00100000 01110010 
01101111 01111001 01100001 01110101 01101101 01100101 00101110 01000110 01100001 01101001 
01110011 00100000 01110001 01110101 01100101 00100000 01110100 01100001 00100000 01110110 
01100101 01101100 01101111 01101110 01110100 01100101 01100101 00100000 01110011 01100101 
00100000 01110010 01100101 01100001 01101100 01101001 01110011 01100101 00100000 01110011 
01110101 01110010 00100000 01101100 01100001 00100000 01110100 01100101 01110010 01110010 
01100101 00100000 01100011 01101111 01101101 01101101 01100101 00100000 01100111 01100001 
01101101 01101101 01101001 01110011 00100000 00101101 01000001 01101101 01100101 01101110 
00100000 TpHOt8a1WrxtC
 */ ?>
</body>
</html>
