<html>
<head>
    <title>Basic Banking System</title>
	 <link rel="stylesheet" href="index_button.css">
	<style>
		/*<?php include "index_button.css" ?>*/
	
	body{
    text-align: center;
    list-style-type: none;
  }
	
		body{
		
		  /*background-image: url(hand.png);#2d2c3e;#2c3e50;*/
		/*background-position: center;
     background:#2F4F4F;*/
    background-image: url(15.png);
		background-repeat: no-repeat;
		background-size: cover;
    
   
	 
        
        background-size: 100% 100%;
	}

  .p{
    
     color: #f1c40f;
     font-size: 3rem;
  text-transform: uppercase;
  display: block;
  width: 100%;
  text-align: center;
  }
  .W{
    font-size: 54px;
  }
	

nav a:hover,
nav a:focus {
    outline: none;
}
  
   nav a {
    position: relative;
    display: inline-block;
    margin: 15px 15px;
    outline: none;
    color: #fff;
    text-decoration: none;
    text-transform: uppercase;
    letter-spacing: 1px;
    font-weight: 200;
    text-shadow: 0 0 1px rgba(255,255,255,0.3);
    font-size: 2em;
}

nav a:hover,
nav a:focus {
    outline: none;
}

/* Effect 1: Brackets */


/* Effect 5: same word slide in */
.cl-effect-5 a {
    overflow: hidden;
    padding: 0 4px;
    height: 1em;
}

.cl-effect-5 a span {
    position: relative;
    display: inline-block;
    -webkit-transition: -webkit-transform 0.3s;
    -moz-transition: -moz-transform 0.3s;
    transition: transform 0.3s;
}

.cl-effect-5 a span::before {
    position: absolute;
    top: 100%;
    content: attr(data-hover);
    font-weight: 700;
    -webkit-transform: translate3d(0,0,0);
    -moz-transform: translate3d(0,0,0);
    transform: translate3d(0,0,0);
}

.cl-effect-5 a:hover span,
.cl-effect-5 a:focus span {
    -webkit-transform: translateY(-100%);
    -moz-transform: translateY(-100%);
    transform: translateY(-100%);
}

/* Effect 5: same word slide in and border bottom */

h1{
      font-family: "Times New Roman", serif;
      font-size: 2rem;
  text-transform: uppercase;
  display: block;
  width: 100%;
  text-align: center;
    }


/*html {
  height: 100%;
  perspective: 1000px;
  transform-style: preserver-3d;
  font-family: lato, sans-serif;
}*/



ul {
  display: block;
  text-align: center;
  margin: 0 auto;
  padding: 0;
  width: 100%;
  min-width: 535px;
  background-color: #343e48;
  position: relative;
  box-shadow: 0 3px 8px rgba(0, 0, 0, 0.5);
}
ul:after {
  content: "";
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  opacity: .5;
 
}

li {
  margin: 0 auto;
  display: inline-block;
  list-style: none;
  padding: 0;
}

a {
  display: block;
  padding: 25px;
  text-transform: uppercase;
  position: relative;
  z-index: 2;
  text-shadow: 1px 0px rgba(0, 0, 0, 0.4);
  color: #686f77;
  letter-spacing: .2em;
  text-decoration: none;
  transition: color 200ms;
  transform-style: preserve-3d;
}
li a:hover {
  color: #343e48;
}
li a:after {
  content: attr(data-title);
  position: absolute;
  display: block;
  text-shadow: none;
  top: 29%;
  left: 18px;
  padding: 5px 7px;
  color: transparent;
  background: #4795c3;
  transform-origin: 50% 0%;
  backface-visibility: hidden;
  transform: translate3d(0px, 105%, 0px) rotateX(-112deg);
  transform-style: preserve-3d;
  transition: all 200ms ease;
  z-index: -1;
}
li:nth-child(2) a:after {
  background: #f26667;
}
li:nth-child(3) a:after {
  background: #0b9ea6;
}
li:nth-child(4) a:after {
  background: #f26667;
}
a:hover:after {
  transform: rotateX(0deg) translateZ(0px);
}
      .container {
        display: flex;
        align-items: center;
        justify-content: center
      }
      img {
        max-width: 100%
      }
      .image {
        flex-basis: 40%
      }
      .text {
        font-size: 20px;
        padding-left: 20px;
      }


@keyframes glowing {
    0% { background-position: 0 0; }
    50% { background-position: 400% 0; }
    100% { background-position: 0 0; }
}
.c{
  text-align: justify;
  text-align-last: center;
}
	</style>
</head>
<body >
	 <header style="list-style-type: none;">
        <ul >
           <li><a href="index.php" data-title="home" style="color: white;font-size: 20px">Home</a></li>
           <li><a href="getdetail.php" data-title="Costomer"style="color: white;font-size: 20px">Customer</a></li>
           <li><a href="transaction.php" data-title="History"style="color: white;font-size: 20px">History</a></li>
        </ul> 
      </header>
      <h1 style=" color: #4A148C;">Spark Bank</h1>
      <img src="16.png" align="left" style="margin-right: 10px; margin-bottom: 10px;">&nbsp;
      <p style="color:black" class="c" style="word-spacing: 30px;">
        Spark Bank  (SB) is an Indian multinational, public sector banking and financial services statutory body headquartered in Mumbai, Maharashtra. SB is the 43rd largest bank in the world and ranked 236th in the Fortune Global 500 list of the world's biggest corporations of 2019. A nationalised bank, it is the largest in India with a 23% market share by assets and a 25% share of the total loan and deposits market.

       The bank descends from the Bank of Calcutta, founded in 1806 via the Imperial Bank of India, making it the oldest commercial bank in the Indian subcontinent. The Bank of Madras merged into the other two presidency banks in British India, the Bank of Calcutta and the Bank of Bombay, to form the Imperial Bank of India, which in turn became the  in 1955. The Government of India took control of the Imperial Bank of India in 1955, with Reserve Bank of India (India's central bank) taking a 60% stake, renaming it State Bank of India.
      The first step towards unification occurred on 13 August 2008 when State Bank of Saurashtra merged with SB, reducing the number of associate state banks from seven to six. On 19 June 2009, the SB board approved the absorption of State Bank of Indore, in which SB held 98.3%. (Individuals who held the shares prior to its takeover by the government held the balance of 1.7%.)

      The acquisition of State Bank of Indore added 470 branches to SB's existing network of branches. Also, following the acquisition, SB's total assets approached ₹10 trillion. The total assets of SB and the State Bank of Indore were ₹9,981,190 million as of March 2009. The process of merging of State Bank of Indore was completed by April 2010, and the SBndore</p>
   
	      <h1 style=" color: #4A148C; float: left;">Employees</h1>
         <img src="5.png" align="right" style="margin-right: 10px; margin-bottom: 10px;">&nbsp;

        <p style="color: black" class="c">SB is one of the largest employers in the country with 209,567 employees as on 31 March 2017, out of which 23% were female employees and 3,179 (1.5%) were employees with disabilities. On the same date, SB had 37,875 Scheduled Castes (18%), 17,069 Scheduled Tribes (8.1%) and 39,709 Other .
        SB's Step Up program is designed to look after its employees in their initial years and ensure they settle well into the bank. We are the first bank to have a buzzing Facebook Group of nearly 1500 new recruits designed to help them interact with their peers across the country, and exchange ideas.

From your first week in the bank, you will be paired with a buddy in your branch or office who will help you settle in and understand the bank's culture and expectations.

As a probationary officer, you also have a personal mentor to provide you with career guidance and help in taking critical decisions like choosing the right career path or working on your development areas.</p>
  </body>
</html>