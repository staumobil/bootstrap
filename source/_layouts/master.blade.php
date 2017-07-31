<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <title>StauMobil Bootstrap</title>

    <link rel="stylesheet" href="{{ $page->asset_prefix }}/stylesheets/main.css">
</head>

<body>
  <header class="navbar navbar-default navbar-fixed-top navbar-inverse navbar-transparent" id="header" role="navigation">
<div class="container">
  <div class="navbar-header">
    <button class="navbar-toggle collapsed" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <a href="{{ $page->asset_prefix }}/" class="navbar-brand"><img alt="StauMobil Logo" src="{{ $page->asset_prefix }}/images/logo.png"></a>
  </div>
  <nav id="navbar" class="collapse navbar-collapse">
    <ul class="nav navbar-nav navbar-right">
      <li{{ (isset($page['slug']) && $page['slug'] == "docs") ? ' class="active"' : '' }}>
        <a href="{{ $page->asset_prefix }}/docs"><i class="fa fa-file-text-o"></i> Docs</a>
      </li>
      <li>
        <a href="https://github.com/staumobil/bootstrap"><i class="fa fa-github"></i> GitHub</a>
      </li>
    </ul>
  </nav>

</div>
</header>

  <section class="hero hero-big bg-traffic" id="hero">
    <div class="overlay overlay-primary">
      <div class="container">
          <div class="row">
            <div class="col-md-12">
              <h1>Bootstrap</h1>
              <p class="lead">StauMobil's front-end design package.</p>
          </div>
      </div>
    @yield('hero')
  </div>
  </section>
  <section class="pt-50" id="main">
    <div class="container">
      <div class="row">
    @yield('main')
  </div>
  </div>
  </section>

  <footer class="footer" id="footer">
        <div class="container">
          <hr/>
          <div class="copyright">
                  &copy; 2012-{{ date('Y') }} apptimists
        </div>
    </footer>

    <script type="text/javascript" src="{{ $page->asset_prefix }}/javascripts/main.js"></script>
</body>

</html>
