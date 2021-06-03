<!DOCTYPE HTML>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Starter Template｜Flat UI</title>
    <link href="http://www.laraweb.sakura.ne.jp/article/dist/css/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet"><!-- Loading Bootstrap -->
    <link href="http://www.laraweb.sakura.ne.jp/article/dist/css/flat-ui.min.css" rel="stylesheet"><!-- Loading Flat UI -->
    <link href="http://www.laraweb.sakura.ne.jp/article/css/starter-template.css" rel="stylesheet">
    <!--Bootstrap theme(Starter)-->

    <link rel="shortcut icon" href="http://www.laraweb.sakura.ne.jp/article/dist/img/favicon.ico">

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="http://www.laraweb.sakura.ne.jp/article/flat_ui/starter">Flat UI DEMO</a>
            </div>
            <div id="navbar" class="collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class='active'><a href="http://www.laraweb.sakura.ne.jp/article/flat_ui/starter">Home</a></li>
                    <li><a href="http://www.laraweb.sakura.ne.jp/article/flat_ui/components">Components</a></li>
                    <li><a href="http://www.laraweb.sakura.ne.jp/article/flat_ui/typo">Typography</a></li>
                    <li><a href="http://www.laraweb.sakura.ne.jp/article/flat_ui/forms">forms</a></li>
                </ul>
            </div>
            <!--/.nav-collapse -->
        </div>
    </nav>

    <div class="container">

        <div class="demo-row">
            <div class="demo-title">
                <h3>What is Flat UI?</h3>
            </div>

            <div class="demo-content demo-content-article">
                <p>
                    <a href="http://designmodo.com/flat" target="_blank">Flat UI</a>
                    is a beautiful theme for <a href="http://getbootstrap.com" target="_blank">Bootstrap</a>.
                    We have redesigned many of its components to look flat in every pixel.
                </p>
                <p>
                    For the most part, it is very simple to use, however, to be able to make some form elements and others look exactly how we want, we ended up using some JS plugins, which means it takes a little bit more effort to integrate them into your project.
                </p>
            </div>
        </div><!-- /.demo-row -->

        <div class="demo-row">
            <div class="demo-title">
                <h3>How to Use It?</h3>
            </div>

            <div class="demo-content demo-content-article">
                <p>
                    Since Flat UI is built on top of Bootstrap as a theme, you can use it in your <a href="http://getbootstrap.com/" target="_blank">Bootstrap 3</a> project.
                    We did not modify any line of Bootstrap, so you will be safe using Flat UI in your ongoing project
                    (unless you hacked it yourself!) :)
                </p>
                <p>
                    We provide you with the CSS and the <a href="http://lesscss.org/" target="_blank">Less</a> sources.
                </p>
                <ol>
                    <li>
                        Using CSS is as easy as dropping <code>flat-ui.css</code> into your project folder and
                        including it in your template/html page:
                        <code>&lt;link href="dist/css/flat-ui.css" rel="stylesheet"&gt;</code>
                    </li>
                    <li>
                        Use Less if you want to modify/extend Flat UI in your project. It is built just like Bootstrap, so
                        you won't find a big difference.
                    </li>
                </ol>
                <p>
                    The easiest way to start is to use our start-up template (from <code>/dist</code> folder) where all the files are already included
                    and ready to use (The JS plugins are included, but not initialized. You will have to initialize them as needed).
                </p>
            </div>
        </div><!-- /.demo-row -->

        <div class="demo-row">
            <div class="demo-title">
                <h3>File Structure</h3>
            </div>

            <div class="demo-content demo-content-article">
                <p>
                    Flat UI Free have the following structure:
                </p>
                <pre class="prettyprint">
flat-ui/
├── dist/
|   ├── css/
|   |   ├── vendors/
│   |   ├── flat-ui.css
│   |   └── flat-ui.min.css
|   ├── js/
|   |   ├── vendors/
│   |   ├── flat-ui.js
│   |   └── flat-ui.min.js
|   ├── fonts/
|   |   ├── lato/
|   |   └── glyphicons/
|   |        ├── flat-ui-icons-regular.eot
|   |        ├── flat-ui-icons-regular.svg
|   |        ├── flat-ui-icons-regular.ttf
|   |        ├── flat-ui-icons-regular.woff
|   |        └── selection.json
|   ├── img/
|   └── index.html
├── docs/
|   ├── examples/
|   ├── components.html
|   ├── getting-started.html
|   └── template.html
├── fonts/
├── img/
├── js/
└── less/
    ├── mixins/
    ├── modules/
    ├── flat-ui.less
    ├── mixins.less
    └── variables.less
</pre>
                <p>
                    Let's go through this list:
                </p>

                <p>
                    <strong>dist/</strong> &mdash; the compiled Flat UI boilerplate template. If you like everything and you don't want
                    to change the look of our components, it is better to use version. This is the easiest
                    way to start using Flat UI.
                </p>

                <p>
                    <strong></strong> &mdash; component examples and documentation.
                </p>

                <p>
                    <strong>fonts/</strong> &mdash; local version of Lato and icon font. When integrating this into your project, make sure you
                    copy all the font files correctly. You might want to change/add some glyphs. If so, open
                    <a href="http://icomoon.io/app">IcoMoon</a> and import <code>selection.json</code>(at <code>fonts/glyphicons/</code>)
                    there to make all glyphs editable.
                </p>

                <p>
                    <img src="/assets/img/getting-started/icomoon_import.jpg" alt="" />
                </p>

                <p>
                    <strong>js/</strong> &mdash; we have tried hard to make all our components look truly "flat." In order to do
                    so we have used some JS plugins. Most of them are well known, while some of them are not. The most JS-ified
                    components are the form components (checkboxes, radios, switches, selects…),?since it is not currently possible
                    to style them identically in all browsers. Look at <code>docs/assets/js/application.js</code> for integration
                    examples.
                </p>

                <p>
                    <strong>less/</strong> &mdash; is where all our stylesheets are located (not preprocessed).
                </p>

                <ul>
                    <li>
                        <code>modules/</code> is where the components themselves are.
                    </li>
                    <li>
                        <code>mixins/</code> useful utilities.
                    </li>
                    <li>
                        <code>flat-ui.less</code> links everything into one single bundle.
                    </li>
                    <li>
                        <code>mixins.less</code> helps automate things.
                    </li>
                    <li>
                        <code>variables.less</code> is where all the default variables are.
                    </li>
                </ul>

            </div>
        </div><!-- /.demo-row -->

        <div class="demo-row">
            <div class="demo-title">
                <h3>Dependencies</h3>
            </div>

            <div class="demo-content demo-content-article">
                <p>
                    External dependencies are managed quickly and easily with <a href="http://bower.io">Bower</a>. Simply:
                </p>
                <ol>
                    <li>
                        Add a dependency to <code>bower.json</code>.
                    </li>
                    <li>
                        Run <code>bower install</code>.
                    </li>
                    <li>
                        Add references within your HTML, and you are all set.
                    </li>
                </ol>
                <p>
                    <em>Note:</em> If required, run <code>npm install -g bower</code> first to install bower.
                </p>
                <p>
                    Development is quick and easy thanks to <a href="http://gruntjs.com/">Grunt</a>. Simply:
                </p>
                <ul>
                    <li>
                        Run <code>grunt</code> to build the project with your updates included, or
                    </li>
                    <li>
                        Run <code>grunt server</code> to build the project, watch for changes, and provide a local server with source maps and live reload as you hack away.
                    </li>
                </ul>
                <p>
                    <em>Note:</em> If required, run <code>npm install</code> first to install grunt with grunt packages.
                </p>
            </div>
        </div><!-- /.demo-row -->

    </div><!-- /.container -->

    <footer class="footer">
        <div class="container">
            <p class="text-muted">Flat UI DEMO using laravel</p>
        </div>
    </footer>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <script src="http://www.laraweb.sakura.ne.jp/article/dist/js/vendor/jquery.min.js"></script>
    <script src="http://www.laraweb.sakura.ne.jp/article/dist/js/vendor/video.js"></script>
    <script src="http://www.laraweb.sakura.ne.jp/article/dist/js/flat-ui.min.js"></script>

    <script src="http://www.laraweb.sakura.ne.jp/article/assets/js/prettify.js"></script>
    <script src="http://www.laraweb.sakura.ne.jp/article/assets/js/application.js"></script>

    <script>
        videojs.options.flash.swf = "http://www.laraweb.sakura.ne.jp/article/dist/js/vendors/video-js.swf"
    </script>
</body>

</html>
