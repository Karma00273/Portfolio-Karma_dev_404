<style>

body {
  transform: rotate(90deg);
  background-color: rgba(249, 223, 137, 0.696);

 
}
    
.k {
  height: 500px;
  width: 500px;
  z-index: +10;
  position: absolute;
  top: -250px;
  left: 55%;
  transform: translate(-50%, -50%);
  transform: rotate(-90deg);
}
    
.circle {
  background-color: white;
  border-radius: 500px;
  height: 500px;
  width: 500px;
  z-index: +9;
  transform: scale(0.01);
  transition: 2s ease;
  position: fixed;
  top: -250px;
  left: 55%;
}


.img_select {
    visibility: hidden;
    height: -20%;
    width: -20%;
    transition: ease;
    transform: rotate(90deg);
    display: flex;
    position: absolute;
    right: -30%;
    top: -250px;
  
}

.item_a {
    transform: rotate(180deg);
    filter: grayscale(200%);
}

.item_b {
    transform: rotate(180deg);
    filter: grayscale(100%);
}

.item_c {
    transform: rotate(180deg);
    filter: grayscale(100%);
}


.range-container {
  text-align: center;
}

.custom-range {
  width: 100%;
  height: 10px;
  border-radius: 5px;
  background: #d3d3d3;
  outline: none;
  opacity: 0.7;
  transition: opacity .2s;
  margin-top: 10px;
}

.custom-range::-webkit-slider-thumb {
  width: 100px;
  height: 20px;
  border-radius: 50%;
  background: #3498db;
  cursor: pointer;
}

.custom-range::-moz-range-thumb {
  width: 20px;
  height: 20px;
  border: none;
  border-radius: 50%;
  background: #8ACDD7;
  cursor: pointer;
}

#rangeValue {
  display: block;
  margin-top: 10px;
  font-size: 18px;
  color: #3498db;
}

.custom-range {
    position: absolute;
    right: 0%;
    top: 70px;
}

.img-text {
    height: 600px;
    width: 600px;
    position: fixed;
    top: -300px;
    right: 20%;
    transform: rotate(-90deg);
    visibility: hidden;
}

.btn-1 {
    background-color: #3498db;
    
}

.btn_check {
    height: 100px;
    width: 100px;
    position: fixed;
    right: 2%;
    top: -50px;
    transform: rotate(-90deg);
    visibility: hidden;
    
}






</style>