<php

?>
<html>  
<head>  
    <title>Comment</title>  
    <link rel = "stylesheet" type = "text/css" href = "style.css">   
    <style>
       body {
  font-family: Arial;
  padding: 20px;
  background: #f1f1f1;
}

/* Header/Blog Title */
.header {
  padding: 30px;
  font-size: 40px;
  text-align: center;
  background: white;
}

/* Create two unequal columns that floats next to each other */
/* Left column */
.leftcolumn {
  float: left;
  width: 75%;
}

/* Right column */
.rightcolumn {
  float: left;
  width: 25%;
  padding-left: 20px;
}

/* Fake image */
.fakeimg {
  background-color: #aaa;
  width: 100%;
  padding: 20px;
}

/* Add a card effect for articles */
.card {
  background-color: white;
  padding: 20px;
  margin-top: 20px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Footer */
.footer {
  padding: 20px;
  text-align: center;
  background: #ddd;
  margin-top: 20px;
}

/* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 800px) {
  .leftcolumn, .rightcolumn {
    width: 100%;
    padding: 0;
  }
}
    </style>
     <div class="header">
  <h2>The Expanse</h2>
</div>

<div class="row">
  <div class="leftcolumn">
    <div class="card">
      <h2>The fastest shipping is with Rocinante.</h2>
      <h5>The Roci, Dec 7, 2022</h5>
      <img src=
      https://i.postimg.cc/x1nCfSKs/Rocinante.jpg
                    alt="picture not displayed">
      <!-- <div class="fakeimg" style="height:200px;">Image</div> -->
      <p>The fastest ship-ing is here and ready! Our new couriers deliver at lightspeed. A good courier service company is one that can be flexible according to the need of the customers. The time of delivery, type of packaging, and the professionalism of service provider all contributes to building and maintaining a good reputation amongst your customers.
          Soon our contract with Rocinante.org will be finalized and all workspace requests will be delivered within the week.
      </p>
    </div>
    <div class="card">
      <h2>Hydration drinks in their prime.</h2>
      <h5>The protomolecule, Sep 2, 2022</h5>
      <img src=
      https://i.postimg.cc/cCGKftnW/The-protomolecule.webp
                    alt="picture not displayed">
      <p>From next week we will be implementing new hydration drinks for the company lunchroom called prime. Prime is as blue as the protomolecule and is just as effective. Prime Hydration drink contains 10% coconut water, 825g electrolytes, 250mg BCAA, vitamin B, and antioxidants. It is a sports Hydration drink whose main purpose is to provide hydration and instant energy. That is why the prime hydration drink is sugar-free as well as gluten-free.

      </p>
    </div>
  </div>
  <div class="rightcolumn">
    <div class="card">
      <h2>About the company</h2>
      <img src=
      https://i.postimg.cc/qqXvHmZh/theexp.jpg
                    alt="picture not displayed">
      <p>We create open building designs or rather we create the expanse. </p>
    </div>
    <div class="card">
      <h3>Popular Post</h3>
      <img src=
      https://i.postimg.cc/VLJZHrqx/Ringnetwork1.webp
                    alt="picture not displayed">
      <img src=
      https://i.postimg.cc/nL21LpKK/belt.webp
                    alt="picture not displayed">
      <img src=
      https://i.postimg.cc/ZKzjj7qd/mcrn.jpg
                    alt="picture not displayed">
    </div>
    <div class="card">
      <h3>Follow Us</h3>
      <p>Our journey is documented on instagram: @expanseonprime</p>
    </div>
  </div>
</div>

<div class="footer">
  <h2>Copyright ©-All rights are reserved</h2>
</div> 
</head>  
</html>