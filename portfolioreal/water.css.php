<style>
 body {
   background: #000204;
   filter:blur(100%);
   height: 100vh;
   scroll-behavior: smooth;
   overflow: hidden;
   overflow-x: hidden;
}
html {
    scroll-behavior: smooth;
}
.title-img-1 {
    height: 130%;
    width: 90%;
    transform: rotateY(30deg);
    filter: drop-shadow(0 0 25px blue);
    position: relative;
    top: -5600px;
    right: -50px;
    justify-content: center;
  margin: 0;
    padding: 0;
   transition: 1s ease;
   align-items: center;
   rotate: 90;
   visibility: visible;
  
}
.t-arr-img {
    height: 5%;
    width: 2.5%;
    position: relative;
    top: -5840px;
    right: 600px;
    transition: 0.3s ease;
    transform: scale(1); 
    z-index: 5;
    rotate: 90;
    
 }
 .t-arr-img:hover {
    transform: scale(2);
    border-radius: 250% ;
    box-shadow: 10px 25px 75px blue;
 } 
.logo {
   scale: 0.2;
   filter: drop-shadow(0 0 25px blue);
   position: fixed;
   top: -30%;
   right: 82%;
   transition: 1s ease;
}
.s-t-1 {
   color: white;
}


.a {
    opacity: 100%;
    height: 500px;
    width: 300px;
   background: white;
   position: relative;
   top: 115px;
   right: -50px;
   color: white;
   border-radius: 5%;
   z-index: -1;
  transition: 0.3s ease;
  filter: drop-shadow(0 0 500px blue);
  box-shadow: 0 0 10px turquoise;
   transition: 1s ease;

   margin: 0;
   padding: 0;
   outline: none;
   z-index: -1;
   
}
.b {
    opacity: 1; /* La valeur de l'opacité doit être entre 0 et 1 */
    width: 300px;
    height: 500px;
    background: white;
    position: relative;
    top: -200px;
    right: -50px;
    color: white;
    border-radius: 5%;
    z-index: -3;
    filter: drop-shadow(0 0 500px blue);
   box-shadow: 0 0 25px turquoise;
   transition: 1s ease;
   margin: 0;
   padding: 0;
   outline: none;
   z-index: -1;
   
}
.c {
    opacity: 100%;
    height: 500px;
    width: 300px;
   background: white;
   position: relative;
   top: -205px;
   right: -50px;
   color: white;
   border-radius: 5%;
   z-index: -1;
   filter: blur(50%);
   filter: drop-shadow(0 0 500px blue);
   box-shadow: 0 0 25px turquoise;
   transition: 1s ease;
   margin: 0;
   padding: 0;
   outline: none;
   z-index: -1;
   
}
.section-1 {
   position: relative;
   top: 500px;
   transition: 1s ease;
}
.a-t {
   color: azure;
   font-family: "Bebas Neue", sans-serif;
 position: relative;
 right: -150px;
 top: 100px;
 scale: 3;
 filter: drop-shadow(0 0 25px black);
 
 width: 3%;
 height: 2.5%;
 margin: 0%;
 padding: 0%;
 text-align: center;
 z-index: 11;
 transition: 0.5 ease;

 

} .b-t {
   color: azure;
   font-family: "Bebas Neue", sans-serif;
 position: relative;
 right: -140px;
 scale: 3;
 filter: drop-shadow(0 0 25px black);
 transition: 1s ease;
 width: 4%;
 height: 2.5%;
 margin: 0%;
 padding: 0%;
 text-align: center;

 z-index: 11;
 top: 600px;
 transition: 0.5 ease;
} .c-t {
   color: azure;
   font-family: "Bebas Neue", sans-serif;
 position: relative;
 right: -100px;
 top: 600px;
 scale: 2.9;
 filter: drop-shadow(0 0 25px black);
 transition: 1s ease;
 width: 6%;
 height: 2.5%;
 margin: 0%;
 padding: 0%;
 text-align: center;
 
 z-index: 11;
 transition: 0.5 ease;
 }
 
   
 .a-st {
   color: white;
   position: relative;
   right: -80px;
   top: -250px;
   visibility: hidden;
   background: rgba(0, 0, 0, 0.27);
   width: 250px;
   z-index: 12;
   text-shadow: 0 0 25px blue;
   filter: blur(10%);
   
  
 }
 .b-st {
  color: white;
   position: relative;
   right: -80px;
   top: 200px;
   visibility: hidden;
   background: blur(100%);
   width: 250px;
   z-index: 12;
   text-shadow: 0 0 25px blue;
   background: rgba(0, 0, 0, 0.27);
   filter: blur(10%);
 }
 .c-st {
  color: white;
   position: relative;
   right: -80px;
   top: 200px;
   visibility: hidden;
   background: blur(100%);
   width: 250px;
   z-index: 12;
   text-shadow: 0 0 25px blue;
   background: rgba(0, 0, 0, 0.27);
   filter: blur(10%);
 }
 .a-1 {
   transition: 1 ease;
   position: relative;
   top: 500px;

   width: 26%;
   height: 90%;
   right: -40px;
   z-index: 20;
  justify-content: center;
   font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
 }

 .b-1 {
  z-index: 20;
   transition: 1 ease;
   position: relative;
   top: -158px;

   width: 26%;
   height: 90%;
   right: -565px;
  justify-content: center;
   font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
 }
 .c-1 {
  z-index: 20;
   transition: 1 ease;
   position: relative;
  right: -1090px;

   width: 26%;
   height: 90%;
   top: -816px;
  justify-content: center;
   font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
 }

 .c-p-box {
     background: linear-gradient(black, darkblue);
     height: 500px;
     width: 1375px;
     position: relative;
     right: -75px;
     top: 0px;
     border-radius: 2.5%;
     z-index: 10;
      }
 .c-p-tit {
    color: white;
    text-align: center;
    margin: 0;
    position: relative;
    top: 100px;
    right: 100px;
    text-shadow: 0 0 25px rgba(0, 0, 0, 0.40);
    scale: 2;
    font-family: "Bebas Neue", sans-serif;
    transition: 0.2s ease;
 }
 
 
/* CSS */
.c-p-btn {
  background: #5E5DF0;
  border-radius: 5%;
  box-shadow: #5E5DF0 0 10px 20px -10px;
  box-sizing: border-box;
  color: #FFFFFF;
  cursor: pointer;
  font-family: Inter,Helvetica,"Apple Color Emoji","Segoe UI Emoji",NotoColorEmoji,"Noto Color Emoji","Segoe UI Symbol","Android Emoji",EmojiSymbols,-apple-system,system-ui,"Segoe UI",Roboto,"Helvetica Neue","Noto Sans",sans-serif;
  font-size: 16px;
  font-weight: 700;
  line-height: 24px;
  opacity: 1;
  outline: 0 solid transparent;
  padding: 8px 18px;
  user-select: none;
  -webkit-user-select: none;
  touch-action: manipulation;
  width: fit-content;
  word-break: break-word;
  border: 0;
  position: relative;
  right: -625px;
  top: 200px;
 transition: 0.2s ease;
 z-index: 200;
}
 .text-box {
  color: white;
  position: relative;
  right: -100px;
  z-index: -1;
  font-family: "Alata", sans-serif; }
 .check {
  rotate: 90deg;
  position: relative;
  right: 200px;
  top: 250;
  margin-bottom: 10px;
  font-family: "Alata", sans-serif;
 z-index: -1;
    opacity: 0%;
    transition: 0.1 ease;
 }
 .t-counter {
  position: relative;
  top: -100px;
  scale: 2;
 }
 .check-1 {
  rotate: -90deg;
 
 }
 .check-2 {
  rotate: -90deg;
 }
 .check-3 {
  rotate: -90deg;
 }
 .check-4 {
  rotate: -90deg;
 }
 .check-5 {
  rotate: -90deg;
 }
 .check-6 {
  rotate: -90deg;
 }
 .check-7 {
  rotate: -90deg;
 }
 .check-8 {
  rotate: -90deg;
 }

 .count {
  color: white;
  position: relative;
  right: -2925px;
  top: -270px;
  scale: 4;
opacity: 0;
z-index: 200;
font-family: "Bebas Neue", sans-serif;
 }
 .day {
  font-family: "Bebas Neue", sans-serif;
  position: relative;
  right: -1555px;
  top: -240px;
  scale: 2;
  opacity: 0;
 }
 
 .st-box {
    opacity: 0;
    transition: 0.1 ease;
    z-index: 10;
    position: relative;
    top: -25px;
 }
 @media screen and (max-width: 1400px ) {
    .title-img-1 {
    height: 80%;
     width: 60%; /* metre du scale*/
}
}

@media screen and (max-width: 900px ) {
    .title-img-1 {
    height: 60%;
     width: 120%;
     top: 10%;
     right: 10%;
      }.t-arr-img {
    height: 5%;
    width: 10%;
 } .logo {
   right: 40%;
   scale: 0.1;
 }
}

@font-face {
    font-family: 'Gill Sans';
    src: url('chemin/vers/gill-sans.woff2') format('woff2');
    /* Ajoutez plus de formats de police et de sources au besoin */
}
</style>
