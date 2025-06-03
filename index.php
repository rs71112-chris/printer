<?php
echo '
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Custom Single Page Site</title>
  <style>
    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
    }
    body {
      font-family: \'Segoe UI\', Tahoma, Geneva, Verdana, sans-serif;
      background-color: #f9f9f9;
      color: #333;
      line-height: 1.6;
    }
    header, footer {
      background: #111;
      color: white;
      padding: 1rem 2rem;
      text-align: center;
    }
    nav {
      background: #4a89c2;
      display: flex;
      justify-content: center;
      flex-wrap: wrap;
      padding: 0.75rem 0;
    }
    nav a {
      color: white;
      text-decoration: none;
      padding: 0.75rem 1.25rem;
      font-weight: bold;
    }
    nav a:hover {
      background-color: #333;
    }
    .product-grid {
      display: flex;
      flex-wrap: wrap;
      gap: 1.5rem;
      justify-content: center;
    }
    .product {
      border: 1px solid #ccc;
      padding: 1rem;
      text-align: center;
      width: 200px;
    }
    .product img {
      width: 100%;
      height: auto;
    }
    .add-to-cart {
      background-color: #7b1fa2;
      color: white;
      border: none;
      padding: 0.5rem;
      width: 100%;
      margin-top: 0.5rem;
      cursor: pointer;
    }
    .carousel {
      position: relative;
      max-width: 800px;
      margin: 3rem auto 1rem;
    }
    .carousel-track-container {
      overflow: hidden;
    }
    .carousel-track {
      display: flex;
      transition: transform 0.5s ease-in-out;
      padding: 0;
      margin: 0;
      list-style: none;
    }
    .carousel-track li {
      min-width: 100%;
      padding: 1rem;
      box-sizing: border-box;
      background: #fff;
      border: 1px solid #ddd;
      border-radius: 8px;
      text-align: center;
    }
    .prev, .next {
      position: absolute;
      top: 50%;
      transform: translateY(-50%);
      background-color: #333;
      color: #fff;
      border: none;
      padding: 0.5rem 1rem;
      cursor: pointer;
      z-index: 10;
    }
    .prev { left: 0; }
    .next { right: 0; }
  </style>
</head>
<body>
  <header style="display: flex; justify-content: space-between; align-items: center; background-color: #fff; border-bottom: 1px solid #ccc;">
    <div style="font-weight: bold; font-size: 1.2rem; color: black;">Printer Incorp INC</div>
    <div style="flex: 1; margin: 0 2rem;">
      <input type="text" placeholder="Search for Products" style="width: 80%; padding: 0.5rem;">
      <button style="padding: 0.5rem 1rem; background-color: #2196f3; color: #fff; border: none;">🔍</button>
    </div>
    <div style="display: flex; gap: 1.5rem; font-size: 0.95rem;">
      <span>👤 Log In</span>
      <span>🤍</span>
      <span>🛍️</span>
    </div>
  </header>

  <nav>
    <a href="#">Shop</a>
    <a href="#about">About Us</a>
    <a href="#products">All Products</a>
    <a href="#account">My Account</a>
    <a href="#contact">Contact Us</a>
    <a href="#shipping">Shipping & Returns</a>
    <a href="#privacy">Privacy Policy</a>
    <a href="#disclaimer">Disclaimer</a>
  </nav>

  <section class="hero" style="padding-top: 3rem;">
    <div>
      <img src="images/printers.jpg" alt="Main Printer Banner" style="width: 100vw; max-width: 100%; height: 50vh; object-fit: cover;">
    </div>
    <div style="text-align: center; padding: 1rem 2rem; font-size: 1.6rem; font-weight: bold;">
      Call Toll Free - +1 (888) 854 8033
    </div>
    <div style="text-align: center; padding-bottom: 1rem; font-size: 1.1rem; border-bottom: 1px solid black;">
      Easy to Scan, Print, Copy, Fax, Setup, and connect, with easy steps
    </div>
  </section>

  <section style="margin-top: 2rem;">
    <h2 style="text-align:center; margin-bottom:2rem;">Best Sellers</h2>
    <div class="product-grid">
      <div class="product">
        <img src="images/printer1.jpg" alt="Printer 1">
        <button class="add-to-cart">Add to Cart</button>
        <h3>WorkForce Pro WF-3733</h3>
        <p>$575.00</p>
      </div>
      <div class="product">
        <img src="images/printer2.jpg" alt="Printer 2">
        <button class="add-to-cart">Add to Cart</button>
        <h3>PIXMA TS702 Wireless</h3>
        <p>$399.00</p>
      </div>
      <div class="product">
        <img src="images/printer3.jpg" alt="Printer 3">
        <button class="add-to-cart">Add to Cart</button>
        <h3>PIXMA TR4520</h3>
        <p>$400.00</p>
      </div>
      <div class="product">
        <img src="images/printer4.jpg" alt="Printer 4">
        <button class="add-to-cart">Add to Cart</button>
        <h3>PIXMA MX922</h3>
        <p>$345.00</p>
      </div>
    </div>
  </section>

  <section class="carousel">
    <h2 style="text-align: center;">Customer Reviews</h2>
    <button class="prev">&#10094;</button>
    <div class="carousel-track-container">
      <ul class="carousel-track">
        <li>“Absolutely love their service — fast delivery and excellent support!”<br><strong>- Emily R.</strong></li>
        <li>“Very helpful in setting up my wireless printer. Thank you!”<br><strong>- Michael T.</strong></li>
        <li>“Great prices and super fast service. Highly recommended.”<br><strong>- Sarah K.</strong></li>
        <li>“Customer support was responsive and solved my issue in minutes.”<br><strong>- James W.</strong></li>
        <li>“The printer was easy to install and works perfectly with my devices.”<br><strong>- Olivia B.</strong></li>
        <li>“Fast shipping and helpful setup guide included in the box.”<br><strong>- Daniel S.</strong></li>
      </ul>
    </div>
    <button class="next">&#10095;</button>
  </section>

  <section id="about" style="margin-top: 6rem;">
    <h2 style="text-align: center;">About Us</h2>
    <p style="max-width: 900px; margin: auto; padding: 1rem; text-align: center;">
      We specialize in helping customers find the perfect printing solution. Whether you need reliable office printers, compact home devices, or multifunctional wireless printers — we’re here to support setup, maintenance, and optimal printing performance.
    </p>
  </section>

  <footer>
    <p>&copy; 2025 Printer Incorp INC. All rights reserved.</p>
  </footer>

  <script>
    const track = document.querySelector(\'.carousel-track\');
    const slides = Array.from(track.children);
    const nextButton = document.querySelector(\'.next\');
    const prevButton = document.querySelector(\'.prev\');
    let currentSlide = 0;

    function updateSlide(position) {
      track.style.transform = \'translateX(-\' + position * 100 + \'%)\';
    }

    nextButton.addEventListener(\'click\', () => {
      currentSlide = (currentSlide + 1) % slides.length;
      updateSlide(currentSlide);
    });

    prevButton.addEventListener(\'click\', () => {
      currentSlide = (currentSlide - 1 + slides.length) % slides.length;
      updateSlide(currentSlide);
    });
  </script>
<!-- Start of LiveChat (www.livechat.com) code -->
<script>
    window.__lc = window.__lc || {};
    window.__lc.license = 19185095;
    window.__lc.integration_name = "manual_onboarding";
    window.__lc.product_name = "livechat";
    ;(function(n,t,c){function i(n){return e._h?e._h.apply(null,n):e._q.push(n)}var e={_q:[],_h:null,_v:"2.0",on:function(){i(["on",c.call(arguments)])},once:function(){i(["once",c.call(arguments)])},off:function(){i(["off",c.call(arguments)])},get:function(){if(!e._h)throw new Error("[LiveChatWidget] You can\'t use getters before load.");return i(["get",c.call(arguments)])},call:function(){i(["call",c.call(arguments)])},init:function(){var n=t.createElement("script");n.async=!0,n.type="text/javascript",n.src="https://cdn.livechatinc.com/tracking.js",t.head.appendChild(n)}};!n.__lc.asyncInit&&e.init(),n.LiveChatWidget=n.LiveChatWidget||e}(window,document,[].slice))
</script>
<noscript><a href="https://www.livechat.com/chat-with/19185095/" rel="nofollow">Chat with us</a>, powered by <a href="https://www.livechat.com/?welcome" rel="noopener nofollow" target="_blank">LiveChat</a></noscript>
<!-- End of LiveChat code -->
</body>
</html>

';
?>
