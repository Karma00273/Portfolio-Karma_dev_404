<?php require "1.css.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Karma_dev
    </title>
</head>
<body>

    <h1 class="title-1"><</h1>
    <h1 class="title-4">></h1>
    <h1 class="title-2">|</h1>
  
   <img src="img/feu.png" alt="fire" class="feu">
   <img src="img/eau.png" alt="wather" class="eau">

   <h3 class="h3-1">ORDER A WEBSITE QUICKLY  </h3>
   <h3 class="h3-2">TAKE THE TIME TO KNOW ME</h3>


  <script>
    let a = 0;
       const t1 = document.querySelector(".title-1");
       const t2 = document.querySelector(".title-2");
        const t4 = document.querySelector(".title-4");
        const eau = document.querySelector(".eau");
        const feu = document.querySelector(".feu");
        const st2 = document.querySelector(".h3-2");
        const st1 = document.querySelector(".h3-1");
        let ii = 0;
        let iii = 0;

          setTimeout(() => {
              t1.style.transform = "translateX(-265%) scale(0.20)";
              t1.style.color = "#f16896";
            }, 100);
            setTimeout(() => {
              t4.style.transform = "translateX(270%) scale(0.20)";
              t4.style.color = "#f16896";
            }, 100);
            setTimeout(() => {
          
              t2.style.background = "image(#f16896)";
            }, 100);
            setTimeout(() => {
                t2.style.transform = "rotate(-204deg) scale(0.05, 1.5)";
                
                setTimeout(() => {
                    t2.style.transition = "0.1s(ease)";
                    t2.style.top = "45%";
                    setTimeout(() => {
                    feu.style.opacity = "100%";
                    eau.style.opacity = "100%";
                    st2.style.opacity = "30%";
                    st1.style.opacity = "30%";


                    t4.addEventListener("mouseenter", () => {
        t4.style.transform = "translateX(270%) scale(0.30)";
       });
       t4.addEventListener("mouseout", () => {
        t4.style.transform = "translateX(270%) scale(0.20)";
       });
       t1.addEventListener("mouseenter", () => {
        t1.style.transform = "translateX(-265%) scale(0.30)";
       });
       t1.addEventListener("mouseout", () => {
        t1.style.transform = "translateX(-265%) scale(0.20)";
       });
       t4.addEventListener("click", () => {
        
       });
       t1.addEventListener("click", () => {
        window.location.href = "fire-menu.php";
        feu.style.opacity = "0%";
                    eau.style.opacity = "0%";
                    st2.style.opacity = "0%";
                    st1.style.opacity = "0%";
                    t1.style.opacity = "0%";
                    t2.style.opacity = "0%";
                    t4.style.opacity = "0%";
                  

    });
    t4.addEventListener("click", () => {
        window.location.href = "water..php";
        feu.style.opacity = "0%";
                    eau.style.opacity = "0%";
                    st2.style.opacity = "0%";
                    st1.style.opacity = "0%";
                    t1.style.opacity = "0%";
                    t2.style.opacity = "0%";
                    t4.style.opacity = "0%";
                  

    });
    feu.addEventListener("click", () => {
          
            window.location.href = "fire-menu.php";
          

    });
    eau.addEventListener("click", () => {
         
            window.location.href = "water..php";
        

    });
                
            }, 600);
            }, 1500);
            }, 1000);
           



  </script>

<style>
    body {
        overflow: hidden;
    }
</style>


</body>
</html>