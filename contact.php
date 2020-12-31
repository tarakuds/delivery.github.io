<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <script src="js/new2.js"></script>
  </head>
  <body>
    <h1>Confirmation Page</h1>

    <form action="contact_process.php" method="post">
      <br />
      <label>Name</label><input type="text" name="name" id="name" />
      <br />
      <label>Your address</label
      ><input type="text" name="pick-up_address" id="requestadd" />
      <br />

      <label>Email address</label
      ><input
        type="email"
        name="email"
        id="email"
        placeholder="Your email address"
      />
      <br />
      <label>Phone Number</label><input type="text" name="phone" id="phone" />
      <br />
      <label>Drop Off Location</label
      ><input type="text" name="drop-off_address" id="destadd" />
      <br />
      <label>Expected Period of delivery</label
      ><input type="datetime" name="deliverytime" id="deliverytime" />
      <br />
      <label>Your Bill</label><input type="text" name="price" id="price" />
      <br />
      <input type="submit" name="submit" id="submit" value="Send Request" />
    </form>

    <script>
      var frmvalidator = new Validator(“contactform”); 
      frmvalidator.addValidation(“name”,”req”,”Please provide your name”); 
      frmvalidator.addValidation(“email”,”req”,”Please provide your email”); 
      frmvalidator.addValidation(“email”,”email”, “Please enter a valid email address”); 
      </script>

 
    </script>
  </body>
</html>
