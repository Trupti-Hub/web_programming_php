<html>

<head>
  <style>
    html {
      height: 100%;
    }

    .login-box {
      position: absolute;
      top: 50%;
      left: 50%;
      width: 700px;
      height: 500px;
      padding: 60px;
      transform: translate(-50%, -50%);
      background: #09244f;
      box-sizing: border-box;
      box-shadow: 0 20px 25px rgba(55, 64, 77, 1);
      border-radius: 10px;
    }

    .login-box h2 {
      margin: 0 0 30px;
      padding: 0;
      color: #fff;
      text-align: center;
    }

    .login-box .user-box {
      position: relative;
    }

    .login-box .user-box input {
      width: 100%;
      padding: 20px 0;
      font-size: 16px;
      color: #fff;
      margin-bottom: 40px;
      border: none;
      border-bottom: 1px solid #fff;
      outline: none;
      background: transparent;
    }

    .login-box .user-box label {
      position: absolute;
      top: 0;
      left: 0;
      padding: 10px 0;
      font-size: 20px;
      color: #fff;
      pointer-events: none;
      transition: .5s;
    }

    .login-box .user-box input:focus~label,
    .login-box .user-box input:valid~label {
      top: -20px;
      left: 0;
      color: #03e9f4;
      font-size: 20px;
    }

    .login-box form a {
      position: relative;
      display: inline-block;
      padding: 10px 20px;
      color: #03e9f4;
      font-size: 24px;
      text-decoration: none;
      text-transform: uppercase;
      overflow: hidden;
      transition: .5s;
      margin-top: 40px;
      letter-spacing: 4px
    }

    .button-s {
      color: white;
      padding: 0px 10px;
      border: 2px;
      border-radius: 5px;
      cursor: pointer;
      margin-top: 10px;
      letter-spacing: 4px;
      transition: 0.5s;
    }
  </style>
</head>

<body>
  <div class="login-box">
    <!--<h2>Login</h2>-->
    <form action="DASHBOARED.php" method="POST">
      <div class="user-box">
        <input type="text" name="abt" required="">
        <label>About</label>
      </div>
      <div class="user-box">
        <input type="text" name="skill" required="">
        <label>Skillset</label>
      </div>
      <div>
        <div class="user-box">
          <input type="text" name="prj" required="">
          <label>Project Details</label>
        </div>
        <div class="button-s">
          <input type="submit" value="submit">
        </div>
    </form>
  </div>
</body>

</html>