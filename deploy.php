<?php
namespace Deployer;

require 'recipe/common.php';

task('github', function() {
  writeln('Deploy to GitHub pages');
  runLocally("git subtree push --prefix build_github origin gh-pages");
})->desc('Deploy the site to GitHub pages.');
