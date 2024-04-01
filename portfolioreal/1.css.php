<style>
    body{
        background: black;
    }

   

.title-2 {
    color: transparent;
    background-image: linear-gradient(red, pink, purple);
    background-clip: text;
    background-size: cover;
    -webkit-background-clip: text;
    text-align: center;
    position: fixed;
    top: 35%;
    right: 50%;
   scale: 15;
    background-position: -250px -150px;
    font-family: monospace;
    z-index: 5;
    transition: 1s ease;
    rotate: 25deg;

}
.title-1 {
    color: transparent;
    background-image: linear-gradient(red, pink, purple);
    background-clip: text;
    background-size: cover;
    -webkit-background-clip: text;
    text-align: center;
    position: fixed;
    top: 37%;
    right: 60%;
 scale: 15;
    background-position: -250px -150px;
    font-family: monospace;
    z-index: 5;
    transition: 1s ease;
    
  
}
.title-4 {
    color: transparent;
    background-image: linear-gradient(red, pink, purple);
    background-clip: text;
    background-size: cover;
    -webkit-background-clip: text;
    text-align: center;
    position: fixed;
    top: 35%;
    right: 40%;
   scale: 15;
    background-position: -250px -150px;
    font-family: monospace;
    z-index: 5;
    transition: 1s ease;
  
}
.title-3 {
    color: transparent;
    background-image: linear-gradient(red, pink, purple);
    background-clip: text;
    background-size: cover;
    -webkit-background-clip: text;
    text-align: center;
    position: fixed;
    top: 35%;
    right: 50%;
   scale: 15;
    background-position: -250px -150px;
    font-family: monospace;
    z-index: 5;
    transition: 1s ease;
    visibility: hidden;
 
}

.feu {
    position: fixed;
 top: 5%;
 right: 60%;
 scale: 0.95;
 opacity: 0%;
 transition: 1s ease;
}
.eau {
    position: fixed;
 top: 5%;
 right: 10%;
 opacity: 0%;
 transition: 1s ease;
}

.h3-1 {
    color: aliceblue;
    opacity: 0%;
    text-shadow: 25 25 red;
    font-family: fantasy ;
    position: fixed;
 top: 60%;
 right: 67%;
 transition: 1s ease;
}
.h3-2 {
    color: aliceblue;
    opacity: 0%;
    text-shadow: 25 25 red;
    font-family: fantasy ;
    position: fixed;
 top: 60%;
 right: 18%;
 transition: 1s ease;
}
@media screen and (max-width: 900px) {
    .eau {
      transform: scale(30%);
      right: -30%;
    }
    .feu {
        transform: scale(30%);
      right: 20%;
    }
    .h3-1 {
 top: 45%;
 right: 42%;
 transition: 1s ease;
 scale: 0.6;
}  .h3-2 {
 top: 45.5%;
 right: -5%;
 transition: 1s ease;
 scale: 0.6;
} .title-2 {
   right: 50%;

}

}
</style>