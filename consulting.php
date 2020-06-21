<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
  <!--<![endif]-->
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Ashton Jones Dev</title>
    <meta
      name="description"
      content="Hi, I'm Ash 👋🏼
    I'm building an app to make connecting with people a swift, personal, and human experience 👥 

    👨‍💻 Google Certified Android Engineer |
    ✍ Writer |
    🧘‍♂️ Stoic && Meditator"
    />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="styles/style-2.css" />
    <script src="main.js"></script>

    <script
      src="https://kit.fontawesome.com/26daac7465.js"
      crossorigin="anonymous"
    ></script>

    <link
      href="https://fonts.googleapis.com/css?family=Roboto:100,300&display=swap"
      rel="stylesheet"
    />
  </head>
  <body class="consulting">
    <div id="navbar">
      <a id="link2" href="https://ashtonjones.dev/">about</a> /
      <a id="link2" href="thoughts.html">thoughts</a> /
      <a id="link2" href="projects.html">projects</a> /
      <a id="link1" href="consulting.html">consulting</a>
    </div>

    <div id="container">
      <div id="left">
        <div id="profileImgContainer">
          <img
            id="profileImg"
            src="images/profileImg.jpg"
            alt="Profile Image"
          />
        </div>

        <div id="info">
          <p class="p1">Hi, I'm Ash!</p>
          <p>Let's Connect!</p>
        </div>

        <div id="links">
          <a href="mailto:ashtonjonesdev@gmail.com"
            ><i class="fas fa-envelope"></i
          ></a>
          <a href="https://www.linkedin.com/in/tjgrapes/" target="_blank"
            ><i class="fab fa-linkedin-in"></i
          ></a>
          <a href="https://medium.com/@TJgrapes" target="_blank"
            ><i class="fab fa-medium-m"></i
          ></a>
          <a href="https://github.com/ashtonjonesdev" target="_blank"
            ><i class="fab fa-github"></i
          ></a>
          <a
            href="https://play.google.com/store/apps/dev?id=8786079395794167171"
            target="_blank"
            ><i class="fab fa-google-play"></i
          ></a>
          <a href="https://dev.to/tjgrapes" target="_blank"
            ><i class="fab fa-dev"></i
          ></a>
          <a href="https://twitter.com/TJgrapes" target="_blank"
            ><i class="fab fa-twitter"></i
          ></a>
        </div>

        <div id="badge">
          <img
            src="images/associate-android-developer-badge-large.png"
            alt="Google Certified Android Developer"
          />
        </div>

        <div class="logos">
          <div id="android">
            <img src="images/android.png" alt="Android Logo" />
          </div>

          <div id="java">
            <img src="images/java.png" alt="Java Logo" />
          </div>

          <div id="flutter">
            <img src="images/flutter.png" alt="Flutter Logo" />
          </div>

          <div id="dart">
            <img src="images/dart.png" alt="Dart Logo" />
          </div>
        </div>
      </div>

      <div id="right">
        <div id="section1">
          <div class="container">
            <form action="webform.php" method="POST" enctype="text">
              <div class="name form-group">
                <label class="formInput" for="name">Name</label>
                <input
                  class="formInput"
                  type="text"
                  id="name"
                  name="name"
                  placeholder="Your name.."
                  style="height: 2em; width: 100%;"
                  required
                />
              </div>

              <div class="email form-group">
                <label class="formInput" for="email">E-mail</label>
                <input
                  class="formInput"
                  type="text"
                  id="email"
                  name="email"
                  placeholder="youremail@email.com"
                  style="height: 2em; width: 100%;"
                  required
                />
              </div>

              <div class="subject form-group">
                <label class="formInput" for="subject">Subject</label>
                <input
                  class="formInput"
                  type="text"
                  id="subject"
                  name="subject"
                  placeholder="Help me create the best app in the world."
                  style="height: 2em; width: 100%;"
                  required
                />
              </div>

              <div class="message form-group">
                <label class="formInput" for="message">Message</label>
                <textarea
                  class="formInput"
                  id="message"
                  name="message"
                  placeholder="Write something.."
                  style="height: 200px; width: 100%;"
                  required
                ></textarea>
              </div>

              <button type="submit">send message</button>
            </form>
          </div>
        </div>
      </div>
    </div>

    <script src="" async defer></script>
  </body>
</html>
