<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="keywords" content="remote machines, Git, GitHub" />
    <meta name="description" content="Lecture introducing remote machines and version control using Git." />
    <title>BCB 546X -- 17 Jan 2017</title>
    <style>
      @import url(https://fonts.googleapis.com/css?family=Droid+Serif);
      @import url(https://fonts.googleapis.com/css?family=Yanone+Kaffeesatz);
      @import url(https://fonts.googleapis.com/css?family=Ubuntu+Mono:400,700,400italic);
      body {
        font-family: 'Droid Serif';
      }
      h1, h2, h3 {
        font-family: 'Yanone Kaffeesatz';
        font-weight: 400;
        margin-bottom: 0;
      }
      .remark-slide-content h1 { font-size: 3em; }
      .remark-slide-content h2 { font-size: 2em; }
      .remark-slide-content h3 { font-size: 1.6em; }
      .footnote {
        position: absolute;
        bottom: 3em;
      }
      li p { line-height: 1.25em; }
      .red { color: #fa0000; }
      .large { font-size: 2em; }
      a, a > code {
        color: rgb(249, 38, 114);
        text-decoration: none;
      }
      code {
        background: #e7e8e2;
        border-radius: 5px;
      }
      .remark-code, .remark-inline-code { font-family: 'Ubuntu Mono'; }
      .remark-code-line-highlighted     { background-color: #373832; }
      .pull-left {
        float: left;
        width: 47%;
      }
      .pull-right {
        float: right;
        width: 47%;
      }
      .pull-right ~ p {
        clear: both;
      }
      #slideshow .slide .content code {
        font-size: 0.8em;
      }
      #slideshow .slide .content pre code {
        font-size: 0.9em;
        padding: 15px;
      }
      .inverse {
        background: #272822;
        color: #777872;
        text-shadow: 0 0 20px #333;
      }
      .inverse h1, .inverse h2 {
        color: #f3f3f3;
        line-height: 0.8em;
      }
      /* Two-column layout */
      .left-column {
        color: #777;
        width: 20%;
        height: 92%;
        float: left;
      }
        .left-column h2:last-of-type, .left-column h3:last-child {
          color: #000;
        }
      .right-column {
        width: 75%;
        float: right;
        padding-top: 1em;
      }
    </style>
  </head>
  <body>
    <textarea id="source">

---

        <div><p><?php include('https://github.com/ISUgenomics/bioinformatics-workbook/blob/Andrew6/Appendix/github/github.md'); ?></p></div>


---


    </textarea>
 <script src="https://remarkjs.com/downloads/remark-latest.min.js" type="text/javascript">
 </script>
 <script>
   var hljs = remark.highlighter.engine;
 </script>
 <script src="terminal.language.js"></script>
 <script>
   var slideshow = remark.create({
       highlightStyle: 'monokai',
       highlightLanguage: 'tex',
       highlightLines: true
     }) ;
 </script>
 <script>
   var _gaq = _gaq || [];
   _gaq.push(['_setAccount', 'UA-44561333-1']);
   _gaq.push(['_trackPageview']);
   (function() {
     var ga = document.createElement('script');
     ga.src = 'https://ssl.google-analytics.com/ga.js';
     var s = document.scripts[0];
     s.parentNode.insertBefore(ga, s);
   }());
 </script>
</body>
</html>
