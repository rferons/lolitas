<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>Welcome to OpenShift</title>

<style>

/*!
 * Bootstrap v3.0.0
 *
 * Copyright 2013 Twitter, Inc
 * Licensed under the Apache License v2.0
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Designed and built with all the love in the world @twitter by @mdo and @fat.
 */

  .logo {
    background-size: cover;
    height: 58px;
    width: 180px;
    margin-top: 6px;
  }
.logo a {
  display: block;
  width: 100%;
  height: 100%;
}
*, *:before, *:after {
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}
aside,
footer,
header,
hgroup,
section{
  display: block;
}
body {
  color: #404040;
  font-family: "Helvetica Neue",Helvetica,"Liberation Sans",Arial,sans-serif;
  font-size: 14px;
  line-height: 1.4;
}

html {
  font-family: sans-serif;
  -ms-text-size-adjust: 100%;
  -webkit-text-size-adjust: 100%;
}
ul {
    margin-top: 0;
}
.container {
  margin-right: auto;
  margin-left: auto;
  padding-left: 15px;
  padding-right: 15px;
}
.container:before,
.container:after {
  content: " ";
  /* 1 */

  display: table;
  /* 2 */

}
.container:after {
  clear: both;
}
.row {
  margin-left: -15px;
  margin-right: -15px;
}
.row:before,
.row:after {
  content: " ";
  /* 1 */

  display: table;
  /* 2 */

}
.row:after {
  clear: both;
}
.col-sm-6, .col-md-6, .col-xs-12 {
  position: relative;
  min-height: 1px;
  padding-left: 15px;
  padding-right: 15px;
}
.col-xs-12 {
  width: 100%;
}

@media (min-width: 768px) {
  .container {
    width: 750px;
  }
  .col-sm-6 {
    float: left;
  }
  .col-sm-6 {
    width: 50%;
  }
}

@media (min-width: 992px) {
  .container {
    width: 970px;
  }
  .col-md-6 {
    float: left;
  }
  .col-md-6 {
    width: 50%;
  }
}
@media (min-width: 1200px) {
  .container {
    width: 1170px;
  }
}

a {
  color: #069;
  text-decoration: none;
}
a:hover {
  color: #EA0011;
  text-decoration: underline;
}
hgroup {
  margin-top: 50px;
}
footer {
    margin: 50px 0 25px;
}
h1, h2, h3 {
  color: #000;
  line-height: 1.38em;
  margin: 1.5em 0 .3em;
}
h1 {
  font-size: 25px;
  font-weight: 300;
  border-bottom: 1px solid #fff;
  margin-bottom: .5em;
}
h1:after {
  content: "";
  display: block;
  width: 100%;
  height: 1px;
  background-color: #ddd;
}
h2 {
  font-size: 19px;
  font-weight: 400;
}
h3 {
  font-size: 15px;
  font-weight: 400;
  margin: 0 0 .3em;
}
p {
  margin: 0 0 2em;
}
p + h2 {
  margin-top: 2em;
}
html {
  background: #f5f5f5;
  height: 100%;
}
code {
  background-color: white;
  border: 1px solid #ccc;
  padding: 1px 5px;
  color: #888;
}
pre {
  display: block;
  padding: 13.333px 20px;
  margin: 0 0 20px;
  font-size: 13px;
line-height: 1.4;
  background-color: #fff;
  border-left: 2px solid rgba(120,120,120,0.35);
  white-space: pre;
  white-space: pre-wrap;
  word-break: normal;
  word-wrap: break-word;
  overflow: auto;
  font-family: Menlo,Monaco,"Liberation Mono",Consolas,monospace !important;
}

</style>

</head>
<body>

<section class='container'>
	 <hgroup>
            <h1>Welcome to your PHP application on OpenShift</h1>
          </hgroup>
	<a href='test.php'>Ryan's test page</a>

        <div class="row">
          <section class='col-xs-12 col-sm-6 col-md-6'>
            <section>
              <h2>Deploying code changes</h2>
                <p>OpenShift uses the <a href="http://git-scm.com/">Git version control system</a> for your source code, and grants you access to it via the Secure Shell (SSH) protocol. In order to upload and download code to your application you need to give us your <a href="https://www.openshift.com/developers/remote-access">public SSH key</a>. You can upload it within the web console or install the <a href="https://www.openshift.com/developers/rhc-client-tools-install">RHC command line tool</a> and run <code>rhc setup</code> to generate and upload your key automatically.</p>

                <h3>Working in your local Git repository</h3>
                <p>If you created your application from the command line and uploaded your SSH key, rhc will automatically download a copy of that source code repository (Git calls this 'cloning') to your local system.</p>

                <p>If you created the application from the web console, you'll need to manually clone the repository to your local system. Copy the application's source code Git URL and then run:</p>

<pre>$ git clone &lt;git_url&gt; &lt;directory_to_create&gt;

# Within your project directory
# Commit your changes and push to OpenShift

$ git commit -a -m 'Some commit message'
$ git push</pre>


                  <ul>
                    <li><a href="https://www.openshift.com/developers/deploying-and-building-applications">Learn more about deploying and building your application</a></li>
                    <li><a href="http://openshift.github.io/documentation/oo_cartridge_guide.html#php">Read more details about Repository Layout, Action Hooks and Markers</a></li>
                  </ul>
            </section>

          </section>
          <section class="col-xs-12 col-sm-6 col-md-6">

                <h2>Managing your application</h2>

                <h3>Web Console</h3>
                <p>You can use the OpenShift web console to enable additional capabilities via cartridges, add collaborator access authorizations, designate custom domain aliases, and manage domain memberships.</p>

                <h3>Command Line Tools</h3>
                <p>Installing the <a href="https://www.openshift.com/developers/rhc-client-tools-install">OpenShift RHC client tools</a> allows you complete control of your cloud environment. Read more on how to manage your application from the command line in our <a href="https://www.openshift.com/user-guide">User Guide</a>.
                </p>

                <h2>Development Resources</h2>
                  <ul>
                    <li><a href="https://www.openshift.com/developers">Developer Center</a></li>
                    <li><a href="https://www.openshift.com/user-guide">User Guide</a></li>
                    <li><a href="https://www.openshift.com/support">OpenShift Support</a></li>
                    <li><a href="http://stackoverflow.com/questions/tagged/openshift">Stack Overflow questions for OpenShift</a></li>
                    <li><a href="http://webchat.freenode.net/?randomnick=1&channels=openshift&uio=d4">IRC channel at #openshift on freenode.net</a></li>
                    <li><a href="http://git-scm.com/documentation">Git documentation</a></li>
                  </ul>


          </section>
        </div>


        <footer>
          <div class="logo"><a href="https://www.openshift.com/"></a></div>
        </footer>
</section>

</body>
</html>
