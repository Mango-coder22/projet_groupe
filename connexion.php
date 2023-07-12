<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign in</title>
    <link rel="stylesheet" href="planning.css">

      <!-- bootstrap links -->
      <link rel="stylesheet" href="assets/bootstrap.min.css">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
                                                        <!-- Bootstrap links ends -->

                                                        <!-- <style>
 html,
body {
  height: 100%;
}

body {
  display: flex;
  align-items: center;
  padding-top: 40px;
  padding-bottom: 40px;
}
                                                        </style>
  -->
</head>
<body class="body-class">





<main class="form-signin w-100 m-auto">
    <form  action="login.php" method="post">
      <img class="mb-4 animage" src="imgs/logos.png" alt="" width="72" height="57">
      <h1 class="h3 mb-3 fw-normal">Please sign in</h1>

      <div class="form-floating">
        <!-- <input class="form-control" id="floatingInput" data-toggle="modal" data-target="#register"> -->
        <input type="email"  id="mail" name="mail" placeholder="votre-email" class="input6-5" <?php if(isset($emailMsgErreur) && !empty($emailMsgErreur)) echo 'is-invalid'; ?> aria-describedby="emailFeedback"  >
    <?php if(isset($emailMsgErreur)){      ?>
    <div class="invalid-feedback" id="emailFeedback">
        <?php echo $emailMsgErreur; ?> 
    </div>
    <?php } ?>
        <label for="floatingInput">Email address</label>
      </div>
      <div class="form-floating">
        <!-- <input placeholder="Password" class="form-control" id="floatingPassword" data-toggle="modal" data-target="#login"> -->
        <input type="password" id="pass1" name="pass" placeholder="votre-mot de passe" class="input6-5" <?php if(isset($passMsgErreur) && !empty($passMsgErreur)) echo 'is-invalid'; ?> aria-describedby="passFeedback" >
                     <?php if(isset($passMsgErreur)){                  ?>
                    <div class="invalid-feedback" id="passFeedback">
                        <?php echo $passMsgErreur; ?>
                    </div>
                    <?php } ?>
        <label for="floatingPassword">Password</label>
      </div>

      <div class="checkbox mb-3">
        <label>
          <input type="checkbox" value="remember-me"> Remember me
        </label>
      </div>
      <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
      <p class="mt-5 mb-3 text-body-secondary "><center>&copy; 2023</center></p>
    </form>
  </main>
</body>
</html>