<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Happy Birthday Suryansh!</title>
  <style>
    /* --- Core Styles & Transitions --- */
    * { box-sizing: border-box; margin: 0; padding: 0; }
    
    body {
      background-color: #ffffff;
      color: #333333;
      font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
      min-height: 100vh;
      overflow: hidden;
      display: flex;
      justify-content: center;
      align-items: center;
      position: relative;
      user-select: none;
      transition: background-color 2s ease, color 2s ease;
    }

    body.party-mode { 
      background-color: #0f0f13; 
      color: #ffffff;
    }

    /* --- Top Decorations --- */
    .decorations {
      position: absolute;
      top: 0;
      width: 100%;
      display: flex;
      justify-content: space-around;
      align-items: flex-start;
      padding: 0 2%;
      opacity: 1; 
      z-index: 2;
      pointer-events: none;
    }

    .bunting {
      width: 0; 
      height: 0; 
      border-left: 25px solid transparent;
      border-right: 25px solid transparent;
      border-top: 45px solid #ff4d4d;
    }
    .bunting:nth-child(2n) { border-top-color: #ffcc00; }
    .bunting:nth-child(3n) { border-top-color: #00e1ff; }

    .streamer {
      width: 6px;
      height: 80px;
      background: #32ff7e;
      border-radius: 0 0 10px 10px;
    }
    .streamer:nth-child(even) { height: 130px; background: #ffae00; }

    /* Twinkling Stars */
    .star {
      width: 20px; 
      height: 20px;
      margin-top: 15px;
      background: #ffcc00;
      clip-path: polygon(50% 0%, 61% 35%, 98% 35%, 68% 57%, 79% 91%, 50% 70%, 21% 91%, 32% 57%, 2% 35%, 39% 35%);
      animation: twinkle 1.5s infinite alternate ease-in-out;
    }
    .star:nth-child(odd) { animation-duration: 2s; background: #ffae00; }

    @keyframes twinkle {
      0% { transform: scale(0.8); opacity: 0.5; }
      100% { transform: scale(1.2); opacity: 1; box-shadow: 0 0 10px #ffcc00; }
    }

    /* --- Side Decorations --- */
    .side-decor {
      position: absolute;
      top: 10%;
      bottom: 10%;
      width: 50px;
      display: flex;
      flex-direction: column;
      justify-content: space-around;
      align-items: center;
      z-index: 2;
      pointer-events: none;
    }
    .side-decor.left { left: 10px; }
    .side-decor.right { right: 10px; }

    .side-ribbon {
      width: 15px;
      height: 60px;
      background: #ff4d4d;
      border-radius: 50px 0 50px 0;
      opacity: 0.8;
    }
    .side-ribbon:nth-child(2n) { background: #00e1ff; border-radius: 0 50px 0 50px; }
    .side-ribbon:nth-child(3n) { background: #9e00ff; border-radius: 50px 0 50px 0; height: 80px; }
    
    .side-decor .star { margin-top: 0; }

    /* --- Scene Layouts --- */
    .scene {
      position: absolute;
      display: flex;
      flex-direction: column;
      align-items: center;
      transition: opacity 1s ease, transform 1s ease;
      z-index: 50; 
    }
    
    .hidden-scene {
      opacity: 0;
      pointer-events: none;
      transform: scale(0.9);
    }

    /* --- Buttons --- */
    .action-btn {
      padding: 15px 30px;
      font-size: 1.2rem;
      border-radius: 50px;
      border: none;
      background: linear-gradient(45deg, #ff7b00, #ffae00);
      color: #fff;
      font-weight: bold;
      cursor: pointer;
      box-shadow: 0 4px 15px rgba(255, 123, 0, 0.4);
      transition: transform 0.2s ease, box-shadow 0.2s ease;
    }
    .action-btn:hover { 
      transform: translateY(-2px) scale(1.05);
      box-shadow: 0 6px 20px rgba(255, 123, 0, 0.6);
    }

    /* --- Balloons Container --- */
    #balloonsContainer {
      position: absolute;
      top: 0; left: 0; width: 100%; height: 100%;
      z-index: 1; 
      pointer-events: none;
    }
    
    .balloon {
      position: absolute;
      width: 45px;
      height: 55px;
      border-radius: 50% 50% 50% 50% / 40% 40% 60% 60%;
      opacity: 0.95;
      box-shadow: inset -5px -5px 15px rgba(0,0,0,0.2);
      will-change: transform;
    }
    .balloon::after {
      content: '';
      position: absolute;
      bottom: -30px;
      left: 50%;
      transform: translateX(-50%);
      width: 1px;
      height: 30px;
      background: rgba(0,0,0,0.3);
    }
    body.party-mode .balloon::after { background: rgba(255,255,255,0.4); }

    /* --- Cake & Realistic Candles --- */
    .cake {
      position: relative;
      width: 180px;
      height: 70px;
      background: linear-gradient(to bottom, #ff9a9e 0%, #fecfef 100%);
      border-radius: 10px 10px 0 0;
      margin-bottom: 40px;
      box-shadow: inset 0 -5px 10px rgba(0,0,0,0.2);
    }
    .cake::after {
      content: '';
      position: absolute;
      bottom: -15px; left: -15px;
      width: 210px; height: 25px;
      background: #e0e0e0;
      border-radius: 50%;
      z-index: -1;
    }
    body.party-mode .cake::after { background: #333; }

    .candle {
      position: absolute;
      top: -35px; 
      transform: translateX(-50%);
      width: 12px; height: 35px;
      background: repeating-linear-gradient(45deg, #fff, #fff 4px, #ff4d4d 4px, #ff4d4d 8px);
      border-radius: 3px;
    }

    .wick {
      position: absolute;
      top: -6px; left: 50%;
      transform: translateX(-50%);
      width: 2px; height: 8px;
      background: #2c2c2c;
      border-radius: 2px;
    }

    .flame {
      position: absolute;
      top: -24px; left: 50%;
      transform: translateX(-50%);
      width: 16px; height: 26px;
      background: radial-gradient(ellipse at bottom, #ffffff 10%, #fadb5f 40%, #f78d1d 80%, transparent 100%);
      border-radius: 50% 50% 20% 20%;
      box-shadow: 0 -2px 10px rgba(250, 219, 95, 0.8), 0 -6px 20px rgba(247, 141, 29, 0.6);
      animation: realisticFlicker 0.15s infinite alternate;
      transition: opacity 0.5s ease;
      transform-origin: bottom center;
    }
    .flame.extinguished { opacity: 0; }

    @keyframes realisticFlicker {
      0% { transform: translateX(-50%) scale(1) rotate(-1deg); opacity: 0.9; }
      50% { transform: translateX(-50%) scale(1.05) rotate(1deg); opacity: 1; }
      100% { transform: translateX(-50%) scale(0.95) rotate(-2deg); opacity: 0.85; }
    }

    /* --- Greeting & Particles --- */
    .greeting {
      font-size: 1.5rem; text-transform: uppercase; letter-spacing: 0.3em;
      color: #a1a1aa; margin-bottom: 15px; text-align: center;
    }
    .birthday-name {
      font-size: 5rem; font-weight: 900; text-align: center;
      background: linear-gradient(45deg, #ff7b00, #ffae00, #9e00ff, #00e1ff);
      background-size: 300% 300%; -webkit-background-clip: text; -webkit-text-fill-color: transparent;
      animation: gradientShift 8s ease infinite; 
    }
    @keyframes gradientShift { 0% { background-position: 0% 50%; } 50% { background-position: 100% 50%; } 100% { background-position: 0% 50%; } }
    body.fast-forward .birthday-name { animation-duration: 2s; }
    
    #animationContainer {
      position: absolute; top: 0; left: 0; width: 100%; height: 100%;
      z-index: 0; pointer-events: none;
    }
    .particle { 
      position: absolute; border-radius: 50%; mix-blend-mode: screen; opacity: 0.6; will-change: transform; 
    }
  </style>
</head>
<body>

  <!-- Top Wall Decorations -->
  <div class="decorations" id="decorations">
    <div class="bunting"></div>
    <div class="star"></div>
    <div class="streamer"></div>
    <div class="bunting"></div>
    <div class="star"></div>
    <div class="bunting"></div>
    <div class="streamer"></div>
    <div class="bunting"></div>
    <div class="star"></div>
    <div class="bunting"></div>
    <div class="streamer"></div>
    <div class="star"></div>
    <div class="bunting"></div>
  </div>

  <!-- Left Side Decorations -->
  <div class="side-decor left">
    <div class="side-ribbon"></div>
    <div class="star"></div>
    <div class="side-ribbon"></div>
    <div class="star"></div>
    <div class="side-ribbon"></div>
  </div>

  <!-- Right Side Decorations -->
  <div class="side-decor right">
    <div class="side-ribbon"></div>
    <div class="star"></div>
    <div class="side-ribbon"></div>
    <div class="star"></div>
    <div class="side-ribbon"></div>
  </div>

  <!-- Background Canvas Containers -->
  <div id="balloonsContainer"></div>
  <div id="animationContainer"></div>

  <!-- Scene 1: Start Button -->
  <div class="scene" id="sceneStart">
    <button class="action-btn" id="btnStart">Start Celebration 🎉</button>
  </div>

  <!-- Scene 2: Make Cake Button -->
  <div class="scene hidden-scene" id="sceneBalloons">
    <button class="action-btn" id="btnCake">Make a Delicious Cake 🎂</button>
  </div>

  <!-- Scene 3: Cake & Candles -->
  <div class="scene hidden-scene" id="sceneCake">
    <div class="cake">
      <div class="candle" style="left: 20%;"><div class="wick"></div><div class="flame"></div></div>
      <div class="candle" style="left: 35%;"><div class="wick"></div><div class="flame"></div></div>
      <div class="candle" style="left: 50%;"><div class="wick"></div><div class="flame"></div></div>
      <div class="candle" style="left: 65%;"><div class="wick"></div><div class="flame"></div></div>
      <div class="candle" style="left: 80%;"><div class="wick"></div><div class="flame"></div></div>
    </div>
    <button class="action-btn" id="btnBlow">Blow Candles 🌬️</button>
  </div>

  <!-- Scene 4: Final Greeting -->
  <div class="scene hidden-scene" id="sceneGreeting">
    <p class="greeting">Happy Birthday to you</p>
    <h1 class="birthday-name">Suryansh</h1>
  </div>

  <script>
    const activeAnimations = [];
    let isHolding = false;
    let balloonsInterval;

    const sceneStart = document.getElementById('sceneStart');
    const sceneBalloons = document.getElementById('sceneBalloons');
    const sceneCake = document.getElementById('sceneCake');
    const sceneGreeting = document.getElementById('sceneGreeting');
    
    const btnStart = document.getElementById('btnStart');
    const btnCake = document.getElementById('btnCake');
    const btnBlow = document.getElementById('btnBlow');
    const flames = document.querySelectorAll('.flame');
    const balloonsContainer = document.getElementById('balloonsContainer');

    function randomRange(min, max) { return Math.random() * (max - min) + min; }

    // --- Step 1: Start Celebration ---
    btnStart.addEventListener('click', () => {
      sceneStart.classList.add('hidden-scene'); 
      startBalloons();                          
      
      setTimeout(() => {
        sceneBalloons.classList.remove('hidden-scene');
      }, 1000);
    });

    // --- Step 2: Make the Cake ---
    btnCake.addEventListener('click', () => {
      sceneBalloons.classList.add('hidden-scene'); 
      
      // Stop new balloons from spawning
      clearInterval(balloonsInterval);
      
      // Instantly clear out any existing balloons on the screen
      balloonsContainer.innerHTML = '';
      
      setTimeout(() => {
        sceneCake.classList.remove('hidden-scene');
      }, 500);
    });

    // --- Step 3: Blow Candles & Reveal ---
    btnBlow.addEventListener('click', () => {
      flames.forEach(flame => flame.classList.add('extinguished'));
      btnBlow.style.opacity = '0'; 
      btnBlow.style.pointerEvents = 'none';
      
      setTimeout(() => {
        document.body.classList.add('party-mode'); 
        sceneCake.classList.add('hidden-scene');   
        sceneGreeting.classList.remove('hidden-scene'); 
        startParticles(); 
      }, 1200);
    });

    // --- Balloon Logic ---
    const balloonColors = ['#ff4d4d', '#ffae00', '#9e00ff', '#00e1ff', '#32ff7e', '#ff6b81'];

    function createBalloon() {
      const balloon = document.createElement('div');
      balloon.classList.add('balloon');
      balloon.style.backgroundColor = balloonColors[Math.floor(Math.random() * balloonColors.length)];
      balloon.style.left = `${randomRange(2, 98)}vw`; 
      
      const startY = window.innerHeight + 100;
      const endY = -200;
      const duration = randomRange(4500, 7500); 
      
      balloonsContainer.appendChild(balloon);

      const animation = balloon.animate([
        { transform: `translateY(${startY}px)` },
        { transform: `translateY(${endY}px)` }
      ], { duration: duration, easing: 'linear' });

      if (isHolding) animation.playbackRate = 2.0;
      activeAnimations.push(animation);

      animation.onfinish = () => {
        // Double check if balloon still exists in DOM before removing
        if (balloonContainer && balloon.parentNode) {
            balloon.remove();
        }
        const index = activeAnimations.indexOf(animation);
        if (index > -1) {
            activeAnimations.splice(index, 1);
        }
      };
    }

    function startBalloons() {
      for(let i = 0; i < 30; i++) { 
        setTimeout(createBalloon, randomRange(0, 1500)); 
      }
      balloonsInterval = setInterval(createBalloon, 150); 
    }

    // --- Particle Logic ---
    const particlesContainer = document.getElementById('animationContainer');
    const particleColors = ['rgba(255, 123, 0, 0.4)', 'rgba(255, 214, 0, 0.4)', 'rgba(158, 0, 255, 0.4)', 'rgba(0, 225, 255, 0.4)'];

    function createParticle() {
      const particle = document.createElement('div');
      const size = randomRange(40, 120);
      particle.classList.add('particle');
      particle.style.width = `${size}px`;
      particle.style.height = `${size}px`;
      particle.style.background = `radial-gradient(circle, ${particleColors[Math.floor(Math.random() * particleColors.length)]} 0%, rgba(0,0,0,0) 70%)`;
      
      const startX = randomRange(0, window.innerWidth);
      const startY = window.innerHeight + size;
      particlesContainer.appendChild(particle);

      const animation = particle.animate([
        { transform: `translate(${startX}px, ${startY}px)` },
        { transform: `translate(${startX + randomRange(-150, 150)}px, ${-size}px)` }
      ], { duration: randomRange(6000, 12000), easing: 'linear' });

      if (isHolding) animation.playbackRate = 2.0;
      activeAnimations.push(animation);
      
      animation.onfinish = () => {
        particle.remove();
        const index = activeAnimations.indexOf(animation);
        if (index > -1) {
            activeAnimations.splice(index, 1);
        }
        if (document.body.classList.contains('party-mode')) createParticle();
      };
    }

    function startParticles() {
      for (let i = 0; i < 25; i++) { setTimeout(createParticle, randomRange(0, 4000)); }
    }

    // --- Fast Forward Interactivity Engine (2x Speed) ---
    function startFastForward(e) {
      if (e.target.tagName === 'BUTTON') return; 
      if (!isHolding) {
        isHolding = true;
        document.body.classList.add('fast-forward');
        activeAnimations.forEach(anim => anim.playbackRate = 2.0);
      }
    }

    function stopFastForward() {
      if (isHolding) {
        isHolding = false;
        document.body.classList.remove('fast-forward');
        activeAnimations.forEach(anim => anim.playbackRate = 1.0);
      }
    }

    window.addEventListener('mousedown', startFastForward);
    window.addEventListener('mouseup', stopFastForward);
    window.addEventListener('mouseleave', stopFastForward);
    window.addEventListener('touchstart', startFastForward, { passive: true });
    window.addEventListener('touchend', stopFastForward, { passive: true });
  </script>
</body>
</html>