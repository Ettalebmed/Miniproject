<!DOCTYPE html>
<html lang="en">
 <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script
   src="https://kit.fontawesome.com/64d58efce2.js"
   crossorigin="anonymous"
  >
    </script>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/login.css') }}" >
    
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-regular-rounded/css/uicons-regular-rounded.css'>
    <title>Sign in & Sign up Form</title>
  
 </head>

 <body>
  <div class="container">
   <div class="forms-container">
    <div class="signin-signup">
     <form action="#" class="sign-in-form">
      <h2 class="title">Sign in</h2>
      <div class="input-field">
       <i class="fas fa-user"></i>
       <input type="text" placeholder="Username" />
      </div>
      <div class="input-field">
       <i class="fas fa-lock"></i>
       <input type="password" placeholder="Password" />
      </div>
      <input class="btn solid" type="submit" value="Login" />
      <p class="social-text">Or Sign in with social platforms</p>
      <div class="social-media">
       <a href="#" class="social-icon">
        <i class="fab fa-facebook-f"></i>
       </a>
       <a href="#" class="social-icon">
        <i class="fab fa-twitter"></i>
       </a>
       <a href="#" class="social-icon">
        <i class="fab fa-google"></i>
       </a>
       <a href="#" class="social-icon">
        <i class="fab fa-linkedin-in"></i>
       </a>
      </div>
     </form>
     <form action="#" class="sign-up-form">
      <h2 class="title">Sign up</h2>
      <div class="input-field">
       <i class="fas fa-user"></i>
       <input type="text" placeholder="Username" />
      </div>
      <div class="input-field">
       <i class="fas fa-envelope"></i>
       <input type="email" placeholder="Email" />
      </div>
      <div class="input-field">
       <i class="fas fa-lock"></i>
       <input type="password" placeholder="Password" />
      </div>
      <input type="submit" class="btn" value="Sign up" />
      <p class="social-text">Or Sign up with social platforms</p>
      <div class="social-media">
       <a href="#" class="social-icon">
        <i class="fab fa-facebook-f"></i>
       </a>
       <a href="#" class="social-icon">
        <i class="fab fa-twitter"></i>
       </a>
       <a href="#" class="social-icon">
        <i class="fab fa-google"></i>
       </a>
       <a href="#" class="social-icon">
        <i class="fab fa-linkedin-in"></i>
       </a>
      </div>
     </form>
    </div>
   </div>

   <div class="panels-container">
    <div class="panel left-panel">
     <div class="content">
      <h3>New here ?</h3>
      <p>
        Online tutor Finder provides students the best way to reach out the best tutor for them. 
        Know more about us <a href="file:///G:/AGILE%20workshop/Website/Home%20Page/index.html">here</a>.
      </p>
      <button class="btn transparent" id="sign-up-btn">Sign up</button>
     </div>
     <img src="pictures/log.svg" class="image" alt="image here also" />
    </div>
    <div class="panel right-panel">
     <div class="content">
      <h3>One of us?</h3>
      <p>
        Online tutor Finder provides students the best way to reach out the best tutor for them. 
        Know more about us <a href="file:///D:/Agile%20Workshop/Reveal/index1.html">here</a>.
      </p>
      <button class="btn transparent" id="sign-in-btn">Sign in</button>
     </div>
     
     <img src="pictures/register.svg" class="image" alt="">
    </div>
   </div>
  </div>
  <script type="text/javascript" src="{{ URL::asset('js/login.js') }}"></script> 
 </body>
</html>