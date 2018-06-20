<!DOCTYPE html>
<html>
  <head>
    <title>Admin login</title>
  </head>

  <body style = "margin: auto; text-align: center;">
    <form method="POST">
      <div style="color: red;"> <?=(isset($error)) ? $error : "" ?> </div>
      <div><label>Username:</label></div>
      <div><input type="text" name="username"/></div>
      <div><label>Password:</label></div>
      <div><input type="password" name="password"/></div>
      <div><button type="submit">login</button></div>
    </form>
  </body>
</html>
