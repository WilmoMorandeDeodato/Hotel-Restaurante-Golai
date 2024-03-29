<!DOCTYPE html>
<html>
<head>
  <title>Suggestion page</title>
  <script src='https://www.google.com/recaptcha/api.js'></script>
  <script>
    function onSubmit() {
      document.getElementById("demo-form").submit();
    }
  </script>
  <style>
    body {
      font-family: Helvetica, sans-serif;
    }
    .status-message {
      background-color: #5ff;
      margin-bottom: 10px;
      text-align: center;
    }
    textarea {
      margin: 10px 0;
      resize: none;
    }
  </style>
</head>
<body>
  <h3>Give us feedback on our webpage!</h3>
  <div class="status-message">%s</div>
  <form id="demo-form" action="/feedback" method="POST">
    Your comment <br><textarea name="feedback" cols="50" rows="5"></textarea><br>
    <!-- Replace this with your site key -->
    <button class="g-recaptcha"
            data-sitekey="6LfbZ6sUAAAAAIvWf3d7CjJIpl4z_lUusRZW8KD8"
            data-callback="onSubmit">Submit</button>
  </form>
</body>
</html>