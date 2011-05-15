
    

  

<!DOCTYPE html>
<html>
  <head>
    <meta charset='utf-8'>
    <meta http-equiv="X-UA-Compatible" content="chrome=1">
        <title>services/pas.class.php at master from cloudfusion/cloudfusion - GitHub</title>
    <link rel="search" type="application/opensearchdescription+xml" href="/opensearch.xml" title="GitHub" />
    <link rel="fluid-icon" href="https://github.com/fluidicon.png" title="GitHub" />

    <link href="https://d3nwyuy0nl342s.cloudfront.net/23b11c78e6d682b6584ea8c9f1357d6a2f2e5250/stylesheets/bundle_github.css" media="screen" rel="stylesheet" type="text/css" />
    

    <script type="text/javascript">
      if (typeof console == "undefined" || typeof console.log == "undefined")
        console = { log: function() {} }
    </script>
    <script type="text/javascript" charset="utf-8">
      var GitHub = {
        assetHost: 'https://d3nwyuy0nl342s.cloudfront.net'
      }
      var github_user = null
      
    </script>
    <script src="https://d3nwyuy0nl342s.cloudfront.net/23b11c78e6d682b6584ea8c9f1357d6a2f2e5250/javascripts/jquery/jquery-1.4.2.min.js" type="text/javascript"></script>
    <script src="https://d3nwyuy0nl342s.cloudfront.net/23b11c78e6d682b6584ea8c9f1357d6a2f2e5250/javascripts/bundle_common.js" type="text/javascript"></script>
<script src="https://d3nwyuy0nl342s.cloudfront.net/23b11c78e6d682b6584ea8c9f1357d6a2f2e5250/javascripts/bundle_github.js" type="text/javascript"></script>


    
    <script type="text/javascript" charset="utf-8">
      GitHub.spy({
        repo: "cloudfusion/cloudfusion"
      })
    </script>

    
  <link rel='canonical' href='/cloudfusion/cloudfusion/blob/a5b03442cafe954dcc50b0d1cf9ee260c2a4b9c0/services/pas.class.php'>

  <link href="https://github.com/cloudfusion/cloudfusion/commits/master.atom" rel="alternate" title="Recent Commits to cloudfusion:master" type="application/atom+xml" />

        <meta name="description" content="cloudfusion - Community-driven add-ons and extensions for the AWS SDK for PHP." />
    <script type="text/javascript">
      GitHub.nameWithOwner = GitHub.nameWithOwner || "cloudfusion/cloudfusion";
      GitHub.currentRef = 'master';
      GitHub.commitSHA = "a5b03442cafe954dcc50b0d1cf9ee260c2a4b9c0";
      GitHub.currentPath = 'services/pas.class.php';
      GitHub.masterBranch = "master";

      
    </script>
  

        <script type="text/javascript">
      var _gaq = _gaq || [];
      _gaq.push(['_setAccount', 'UA-3769691-2']);
      _gaq.push(['_setDomainName', 'none']);
      _gaq.push(['_trackPageview']);
      _gaq.push(['_trackPageLoadTime']);
      (function() {
        var ga = document.createElement('script');
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        ga.setAttribute('async', 'true');
        document.documentElement.firstChild.appendChild(ga);
      })();
    </script>

    
  </head>

  

  <body class="logged_out page-blob  env-production">
    

    

    

    

    

    

    <div class="subnavd" id="main">
      <div id="header" class="true">
        
          <a class="logo boring" href="https://github.com">
            <img alt="github" class="default" src="https://d3nwyuy0nl342s.cloudfront.net/images/modules/header/logov3.png" />
            <!--[if (gt IE 8)|!(IE)]><!-->
            <img alt="github" class="hover" src="https://d3nwyuy0nl342s.cloudfront.net/images/modules/header/logov3-hover.png" />
            <!--<![endif]-->
          </a>
        
        
        <div class="topsearch">
  
    <ul class="nav logged_out">
      <li class="pricing"><a href="/plans">Pricing and Signup</a></li>
      <li class="explore"><a href="/explore">Explore GitHub</a></li>
      <li class="features"><a href="/features">Features</a></li>
      <li class="blog"><a href="/blog">Blog</a></li>
      <li class="login"><a href="/login?return_to=%2Fcloudfusion%2Fcloudfusion%2Fblob%2Fmaster%2Fservices%2Fpas.class.php">Login</a></li>
    </ul>
  
</div>

      </div>

      
      
        
    <div class="site">
      <div class="pagehead repohead vis-public    instapaper_ignore readability-menu">

      

      <div class="title-actions-bar">
        <h1>
          <a href="/cloudfusion">cloudfusion</a> / <strong><a href="/cloudfusion/cloudfusion">cloudfusion</a></strong>
          
          
        </h1>

        
    <ul class="actions">
      

      
        <li class="for-owner" style="display:none"><a href="/cloudfusion/cloudfusion/admin" class="minibutton btn-admin "><span><span class="icon"></span>Admin</span></a></li>
        <li>
          <a href="/cloudfusion/cloudfusion/toggle_watch" class="minibutton btn-watch " id="watch_button" onclick="var f = document.createElement('form'); f.style.display = 'none'; this.parentNode.appendChild(f); f.method = 'POST'; f.action = this.href;var s = document.createElement('input'); s.setAttribute('type', 'hidden'); s.setAttribute('name', 'authenticity_token'); s.setAttribute('value', '05a14880fc623399529725b5c5429ee00a44de6e'); f.appendChild(s);f.submit();return false;" style="display:none"><span><span class="icon"></span>Watch</span></a>
          <a href="/cloudfusion/cloudfusion/toggle_watch" class="minibutton btn-watch " id="unwatch_button" onclick="var f = document.createElement('form'); f.style.display = 'none'; this.parentNode.appendChild(f); f.method = 'POST'; f.action = this.href;var s = document.createElement('input'); s.setAttribute('type', 'hidden'); s.setAttribute('name', 'authenticity_token'); s.setAttribute('value', '05a14880fc623399529725b5c5429ee00a44de6e'); f.appendChild(s);f.submit();return false;" style="display:none"><span><span class="icon"></span>Unwatch</span></a>
        </li>
        
          
            <li class="for-notforked" style="display:none"><a href="/cloudfusion/cloudfusion/fork" class="minibutton btn-fork " id="fork_button" onclick="var f = document.createElement('form'); f.style.display = 'none'; this.parentNode.appendChild(f); f.method = 'POST'; f.action = this.href;var s = document.createElement('input'); s.setAttribute('type', 'hidden'); s.setAttribute('name', 'authenticity_token'); s.setAttribute('value', '05a14880fc623399529725b5c5429ee00a44de6e'); f.appendChild(s);f.submit();return false;"><span><span class="icon"></span>Fork</span></a></li>
            <li class="for-hasfork" style="display:none"><a href="#" class="minibutton btn-fork " id="your_fork_button"><span><span class="icon"></span>Your Fork</span></a></li>
          

          
          
        
      
      
      <li class="repostats">
        <ul class="repo-stats">
          <li class="watchers"><a href="/cloudfusion/cloudfusion/watchers" title="Watchers" class="tooltipped downwards">59</a></li>
          <li class="forks"><a href="/cloudfusion/cloudfusion/network" title="Forks" class="tooltipped downwards">18</a></li>
        </ul>
      </li>
    </ul>

      </div>

        
  <ul class="tabs">
    <li><a href="/cloudfusion/cloudfusion" class="selected" highlight="repo_source">Source</a></li>
    <li><a href="/cloudfusion/cloudfusion/commits/master" highlight="repo_commits">Commits</a></li>
    <li><a href="/cloudfusion/cloudfusion/network" highlight="repo_network">Network</a></li>
    <li><a href="/cloudfusion/cloudfusion/pulls" highlight="repo_pulls">Pull Requests (0)</a></li>

    

    
      
      <li><a href="/cloudfusion/cloudfusion/issues" highlight="issues">Issues (1)</a></li>
    

            
    <li><a href="/cloudfusion/cloudfusion/graphs" highlight="repo_graphs">Graphs</a></li>

    <li class="contextswitch nochoices">
      <span class="toggle leftwards" >
        <em>Branch:</em>
        <code>master</code>
      </span>
    </li>
  </ul>

  <div style="display:none" id="pl-description"><p><em class="placeholder">click here to add a description</em></p></div>
  <div style="display:none" id="pl-homepage"><p><em class="placeholder">click here to add a homepage</em></p></div>

  <div class="subnav-bar">
  
  <ul>
    <li>
      
      <a href="/cloudfusion/cloudfusion/branches" class="dropdown">Switch Branches (1)</a>
      <ul>
        
          
            <li><strong>master &#x2713;</strong></li>
            
      </ul>
    </li>
    <li>
      <a href="#" class="dropdown ">Switch Tags (5)</a>
              <ul>
                      
              <li><a href="/cloudfusion/cloudfusion/blob/3.2/services/pas.class.php">3.2</a></li>
            
                      
              <li><a href="/cloudfusion/cloudfusion/blob/3.1/services/pas.class.php">3.1</a></li>
            
                      
              <li><a href="/cloudfusion/cloudfusion/blob/3.0.1/services/pas.class.php">3.0.1</a></li>
            
                      
              <li><a href="/cloudfusion/cloudfusion/blob/3.0.0/services/pas.class.php">3.0.0</a></li>
            
                      
              <li><a href="/cloudfusion/cloudfusion/blob/2.5.0/services/pas.class.php">2.5.0</a></li>
            
                  </ul>
      
    </li>
    <li>
    
    <a href="/cloudfusion/cloudfusion/branches" class="manage">Branch List</a>
    
    </li>
  </ul>
</div>

  
  
  
  
  
  



        
    <div id="repo_details" class="metabox clearfix">
      <div id="repo_details_loader" class="metabox-loader" style="display:none">Sending Request&hellip;</div>

        <a href="/cloudfusion/cloudfusion/downloads" class="download-source" id="download_button" title="Download source, tagged packages and binaries."><span class="icon"></span>Downloads</a>

      <div id="repository_desc_wrapper">
      <div id="repository_description" rel="repository_description_edit">
        
          <p>Community-driven add-ons and extensions for the AWS SDK for PHP.
            <span id="read_more" style="display:none">&mdash; <a href="#readme">Read more</a></span>
          </p>
        
      </div>

      <div id="repository_description_edit" style="display:none;" class="inline-edit">
        <form action="/cloudfusion/cloudfusion/admin/update" method="post"><div style="margin:0;padding:0"><input name="authenticity_token" type="hidden" value="05a14880fc623399529725b5c5429ee00a44de6e" /></div>
          <input type="hidden" name="field" value="repository_description">
          <input type="text" class="textfield" name="value" value="Community-driven add-ons and extensions for the AWS SDK for PHP.">
          <div class="form-actions">
            <button class="minibutton"><span>Save</span></button> &nbsp; <a href="#" class="cancel">Cancel</a>
          </div>
        </form>
      </div>

      
      <div class="repository-homepage" id="repository_homepage" rel="repository_homepage_edit">
        <p><a href="http://getcloudfusion.com" rel="nofollow">http://getcloudfusion.com</a></p>
      </div>

      <div id="repository_homepage_edit" style="display:none;" class="inline-edit">
        <form action="/cloudfusion/cloudfusion/admin/update" method="post"><div style="margin:0;padding:0"><input name="authenticity_token" type="hidden" value="05a14880fc623399529725b5c5429ee00a44de6e" /></div>
          <input type="hidden" name="field" value="repository_homepage">
          <input type="text" class="textfield" name="value" value="http://getcloudfusion.com">
          <div class="form-actions">
            <button class="minibutton"><span>Save</span></button> &nbsp; <a href="#" class="cancel">Cancel</a>
          </div>
        </form>
      </div>
      </div>
      <div class="rule "></div>
            <div id="url_box" class="url-box">
        <ul class="clone-urls">
          
            
            <li id="http_clone_url"><a href="https://github.com/cloudfusion/cloudfusion.git" data-permissions="Read-Only">HTTP</a></li>
            <li id="public_clone_url"><a href="git://github.com/cloudfusion/cloudfusion.git" data-permissions="Read-Only">Git Read-Only</a></li>
          
          
        </ul>
        <input type="text" spellcheck="false" id="url_field" class="url-field" />
              <span style="display:none" id="url_box_clippy"></span>
      <span id="clippy_tooltip_url_box_clippy" class="clippy-tooltip tooltipped" title="copy to clipboard">
      <object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000"
              width="14"
              height="14"
              class="clippy"
              id="clippy" >
      <param name="movie" value="https://d3nwyuy0nl342s.cloudfront.net/flash/clippy.swf?v5"/>
      <param name="allowScriptAccess" value="always" />
      <param name="quality" value="high" />
      <param name="scale" value="noscale" />
      <param NAME="FlashVars" value="id=url_box_clippy&amp;copied=&amp;copyto=">
      <param name="bgcolor" value="#FFFFFF">
      <param name="wmode" value="opaque">
      <embed src="https://d3nwyuy0nl342s.cloudfront.net/flash/clippy.swf?v5"
             width="14"
             height="14"
             name="clippy"
             quality="high"
             allowScriptAccess="always"
             type="application/x-shockwave-flash"
             pluginspage="http://www.macromedia.com/go/getflashplayer"
             FlashVars="id=url_box_clippy&amp;copied=&amp;copyto="
             bgcolor="#FFFFFF"
             wmode="opaque"
      />
      </object>
      </span>

        <p id="url_description">This URL has <strong>Read+Write</strong> access</p>
      </div>
    </div>

    <div class="frame frame-center tree-finder" style="display:none">
      <div class="breadcrumb">
        <b><a href="/cloudfusion/cloudfusion">cloudfusion</a></b> /
        <input class="tree-finder-input" type="text" name="query" autocomplete="off" spellcheck="false">
      </div>

      
        <div class="octotip">
          <p>
            <a href="/cloudfusion/cloudfusion/dismiss-tree-finder-help" class="dismiss js-dismiss-tree-list-help" title="Hide this notice forever">Dismiss</a>
            <strong>Octotip:</strong> You've activated the <em>file finder</em> by pressing <span class="kbd">t</span>
            Start typing to filter the file list. Use <span class="kbd badmono">↑</span> and <span class="kbd badmono">↓</span> to navigate,
            <span class="kbd">enter</span> to view files.
          </p>
        </div>
      

      <table class="tree-browser" cellpadding="0" cellspacing="0">
        <tr class="js-header"><th>&nbsp;</th><th>name</th></tr>
        <tr class="js-no-results no-results" style="display: none">
          <th colspan="2">No matching files</th>
        </tr>
        <tbody class="js-results-list">
        </tbody>
      </table>
    </div>

    <div id="jump-to-line" style="display:none">
      <h2>Jump to Line</h2>
      <form>
        <input class="textfield" type="text">
        <div class="full-button">
          <button type="submit" class="classy">
            <span>Go</span>
          </button>
        </div>
      </form>
    </div>


        

      </div><!-- /.pagehead -->

      

  







<script type="text/javascript">
  GitHub.downloadRepo = '/cloudfusion/cloudfusion/archives/master'
  GitHub.revType = "master"

  GitHub.repoName = "cloudfusion"
  GitHub.controllerName = "blob"
  GitHub.actionName     = "show"
  GitHub.currentAction  = "blob#show"

  
    GitHub.loggedIn = false
  

  
</script>






<div class="flash-messages"></div>


  <div id="commit">
    <div class="group">
        
  <div class="envelope commit">
    <div class="human">
      
        <div class="message"><pre><a href="/cloudfusion/cloudfusion/commit/a5b03442cafe954dcc50b0d1cf9ee260c2a4b9c0">Updated the README.</a> </pre></div>
      

      <div class="actor">
        <div class="gravatar">
          
          <img src="https://secure.gravatar.com/avatar/066da34008adb924c115df7a39779d8d?s=140&d=https://d3nwyuy0nl342s.cloudfront.net%2Fimages%2Fgravatars%2Fgravatar-140.png" alt="" width="30" height="30"  />
        </div>
        <div class="name"><a href="/skyzyx">skyzyx</a> <span>(author)</span></div>
        <div class="date">
          <abbr class="relatize" title="2011-02-27 18:56:33">Sun Feb 27 18:56:33 -0800 2011</abbr>
        </div>
      </div>

      

    </div>
    <div class="machine">
      <span>c</span>ommit&nbsp;&nbsp;<a href="/cloudfusion/cloudfusion/commit/a5b03442cafe954dcc50b0d1cf9ee260c2a4b9c0" hotkey="c">a5b03442cafe954dcc50</a><br />
      <span>t</span>ree&nbsp;&nbsp;&nbsp;&nbsp;<a href="/cloudfusion/cloudfusion/tree/a5b03442cafe954dcc50b0d1cf9ee260c2a4b9c0" hotkey="t">1168e8ab8f225e953474</a><br />
      
        <span>p</span>arent&nbsp;
        
        <a href="/cloudfusion/cloudfusion/tree/1fe403207432b76463f360f65274348dd3902173" hotkey="p">1fe403207432b76463f3</a>
      

    </div>
  </div>

    </div>
  </div>



  <div id="slider">

  

    <div class="breadcrumb" data-path="services/pas.class.php/">
      <b><a href="/cloudfusion/cloudfusion/tree/a5b03442cafe954dcc50b0d1cf9ee260c2a4b9c0">cloudfusion</a></b> / <a href="/cloudfusion/cloudfusion/tree/a5b03442cafe954dcc50b0d1cf9ee260c2a4b9c0/services">services</a> / pas.class.php       <span style="display:none" id="clippy_4432">services/pas.class.php</span>
      
      <object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000"
              width="110"
              height="14"
              class="clippy"
              id="clippy" >
      <param name="movie" value="https://d3nwyuy0nl342s.cloudfront.net/flash/clippy.swf?v5"/>
      <param name="allowScriptAccess" value="always" />
      <param name="quality" value="high" />
      <param name="scale" value="noscale" />
      <param NAME="FlashVars" value="id=clippy_4432&amp;copied=copied!&amp;copyto=copy to clipboard">
      <param name="bgcolor" value="#FFFFFF">
      <param name="wmode" value="opaque">
      <embed src="https://d3nwyuy0nl342s.cloudfront.net/flash/clippy.swf?v5"
             width="110"
             height="14"
             name="clippy"
             quality="high"
             allowScriptAccess="always"
             type="application/x-shockwave-flash"
             pluginspage="http://www.macromedia.com/go/getflashplayer"
             FlashVars="id=clippy_4432&amp;copied=copied!&amp;copyto=copy to clipboard"
             bgcolor="#FFFFFF"
             wmode="opaque"
      />
      </object>
      

    </div>

    <div class="frames">
      <div class="frame frame-center" data-path="services/pas.class.php/" data-canonical-url="/cloudfusion/cloudfusion/blob/a5b03442cafe954dcc50b0d1cf9ee260c2a4b9c0/services/pas.class.php">
        
          <ul class="big-actions">
            
            <li><a class="file-edit-link minibutton" href="/cloudfusion/cloudfusion/file-edit/__current_ref__/services/pas.class.php"><span>Edit this file</span></a></li>
          </ul>
        

        <div id="files">
          <div class="file">
            <div class="meta">
              <div class="info">
                <span class="icon"><img alt="Txt" height="16" src="https://d3nwyuy0nl342s.cloudfront.net/images/icons/txt.png" width="16" /></span>
                <span class="mode" title="File Mode">100644</span>
                
                  <span>1031 lines (917 sloc)</span>
                
                <span>81.896 kb</span>
              </div>
              <ul class="actions">
                <li><a href="/cloudfusion/cloudfusion/raw/master/services/pas.class.php" id="raw-url">raw</a></li>
                
                  <li><a href="/cloudfusion/cloudfusion/blame/master/services/pas.class.php">blame</a></li>
                
                <li><a href="/cloudfusion/cloudfusion/commits/master/services/pas.class.php">history</a></li>
              </ul>
            </div>
            
  <div class="data type-php">
    
      <table cellpadding="0" cellspacing="0">
        <tr>
          <td>
            <pre class="line_numbers"><span id="L1" rel="#L1">1</span>
<span id="L2" rel="#L2">2</span>
<span id="L3" rel="#L3">3</span>
<span id="L4" rel="#L4">4</span>
<span id="L5" rel="#L5">5</span>
<span id="L6" rel="#L6">6</span>
<span id="L7" rel="#L7">7</span>
<span id="L8" rel="#L8">8</span>
<span id="L9" rel="#L9">9</span>
<span id="L10" rel="#L10">10</span>
<span id="L11" rel="#L11">11</span>
<span id="L12" rel="#L12">12</span>
<span id="L13" rel="#L13">13</span>
<span id="L14" rel="#L14">14</span>
<span id="L15" rel="#L15">15</span>
<span id="L16" rel="#L16">16</span>
<span id="L17" rel="#L17">17</span>
<span id="L18" rel="#L18">18</span>
<span id="L19" rel="#L19">19</span>
<span id="L20" rel="#L20">20</span>
<span id="L21" rel="#L21">21</span>
<span id="L22" rel="#L22">22</span>
<span id="L23" rel="#L23">23</span>
<span id="L24" rel="#L24">24</span>
<span id="L25" rel="#L25">25</span>
<span id="L26" rel="#L26">26</span>
<span id="L27" rel="#L27">27</span>
<span id="L28" rel="#L28">28</span>
<span id="L29" rel="#L29">29</span>
<span id="L30" rel="#L30">30</span>
<span id="L31" rel="#L31">31</span>
<span id="L32" rel="#L32">32</span>
<span id="L33" rel="#L33">33</span>
<span id="L34" rel="#L34">34</span>
<span id="L35" rel="#L35">35</span>
<span id="L36" rel="#L36">36</span>
<span id="L37" rel="#L37">37</span>
<span id="L38" rel="#L38">38</span>
<span id="L39" rel="#L39">39</span>
<span id="L40" rel="#L40">40</span>
<span id="L41" rel="#L41">41</span>
<span id="L42" rel="#L42">42</span>
<span id="L43" rel="#L43">43</span>
<span id="L44" rel="#L44">44</span>
<span id="L45" rel="#L45">45</span>
<span id="L46" rel="#L46">46</span>
<span id="L47" rel="#L47">47</span>
<span id="L48" rel="#L48">48</span>
<span id="L49" rel="#L49">49</span>
<span id="L50" rel="#L50">50</span>
<span id="L51" rel="#L51">51</span>
<span id="L52" rel="#L52">52</span>
<span id="L53" rel="#L53">53</span>
<span id="L54" rel="#L54">54</span>
<span id="L55" rel="#L55">55</span>
<span id="L56" rel="#L56">56</span>
<span id="L57" rel="#L57">57</span>
<span id="L58" rel="#L58">58</span>
<span id="L59" rel="#L59">59</span>
<span id="L60" rel="#L60">60</span>
<span id="L61" rel="#L61">61</span>
<span id="L62" rel="#L62">62</span>
<span id="L63" rel="#L63">63</span>
<span id="L64" rel="#L64">64</span>
<span id="L65" rel="#L65">65</span>
<span id="L66" rel="#L66">66</span>
<span id="L67" rel="#L67">67</span>
<span id="L68" rel="#L68">68</span>
<span id="L69" rel="#L69">69</span>
<span id="L70" rel="#L70">70</span>
<span id="L71" rel="#L71">71</span>
<span id="L72" rel="#L72">72</span>
<span id="L73" rel="#L73">73</span>
<span id="L74" rel="#L74">74</span>
<span id="L75" rel="#L75">75</span>
<span id="L76" rel="#L76">76</span>
<span id="L77" rel="#L77">77</span>
<span id="L78" rel="#L78">78</span>
<span id="L79" rel="#L79">79</span>
<span id="L80" rel="#L80">80</span>
<span id="L81" rel="#L81">81</span>
<span id="L82" rel="#L82">82</span>
<span id="L83" rel="#L83">83</span>
<span id="L84" rel="#L84">84</span>
<span id="L85" rel="#L85">85</span>
<span id="L86" rel="#L86">86</span>
<span id="L87" rel="#L87">87</span>
<span id="L88" rel="#L88">88</span>
<span id="L89" rel="#L89">89</span>
<span id="L90" rel="#L90">90</span>
<span id="L91" rel="#L91">91</span>
<span id="L92" rel="#L92">92</span>
<span id="L93" rel="#L93">93</span>
<span id="L94" rel="#L94">94</span>
<span id="L95" rel="#L95">95</span>
<span id="L96" rel="#L96">96</span>
<span id="L97" rel="#L97">97</span>
<span id="L98" rel="#L98">98</span>
<span id="L99" rel="#L99">99</span>
<span id="L100" rel="#L100">100</span>
<span id="L101" rel="#L101">101</span>
<span id="L102" rel="#L102">102</span>
<span id="L103" rel="#L103">103</span>
<span id="L104" rel="#L104">104</span>
<span id="L105" rel="#L105">105</span>
<span id="L106" rel="#L106">106</span>
<span id="L107" rel="#L107">107</span>
<span id="L108" rel="#L108">108</span>
<span id="L109" rel="#L109">109</span>
<span id="L110" rel="#L110">110</span>
<span id="L111" rel="#L111">111</span>
<span id="L112" rel="#L112">112</span>
<span id="L113" rel="#L113">113</span>
<span id="L114" rel="#L114">114</span>
<span id="L115" rel="#L115">115</span>
<span id="L116" rel="#L116">116</span>
<span id="L117" rel="#L117">117</span>
<span id="L118" rel="#L118">118</span>
<span id="L119" rel="#L119">119</span>
<span id="L120" rel="#L120">120</span>
<span id="L121" rel="#L121">121</span>
<span id="L122" rel="#L122">122</span>
<span id="L123" rel="#L123">123</span>
<span id="L124" rel="#L124">124</span>
<span id="L125" rel="#L125">125</span>
<span id="L126" rel="#L126">126</span>
<span id="L127" rel="#L127">127</span>
<span id="L128" rel="#L128">128</span>
<span id="L129" rel="#L129">129</span>
<span id="L130" rel="#L130">130</span>
<span id="L131" rel="#L131">131</span>
<span id="L132" rel="#L132">132</span>
<span id="L133" rel="#L133">133</span>
<span id="L134" rel="#L134">134</span>
<span id="L135" rel="#L135">135</span>
<span id="L136" rel="#L136">136</span>
<span id="L137" rel="#L137">137</span>
<span id="L138" rel="#L138">138</span>
<span id="L139" rel="#L139">139</span>
<span id="L140" rel="#L140">140</span>
<span id="L141" rel="#L141">141</span>
<span id="L142" rel="#L142">142</span>
<span id="L143" rel="#L143">143</span>
<span id="L144" rel="#L144">144</span>
<span id="L145" rel="#L145">145</span>
<span id="L146" rel="#L146">146</span>
<span id="L147" rel="#L147">147</span>
<span id="L148" rel="#L148">148</span>
<span id="L149" rel="#L149">149</span>
<span id="L150" rel="#L150">150</span>
<span id="L151" rel="#L151">151</span>
<span id="L152" rel="#L152">152</span>
<span id="L153" rel="#L153">153</span>
<span id="L154" rel="#L154">154</span>
<span id="L155" rel="#L155">155</span>
<span id="L156" rel="#L156">156</span>
<span id="L157" rel="#L157">157</span>
<span id="L158" rel="#L158">158</span>
<span id="L159" rel="#L159">159</span>
<span id="L160" rel="#L160">160</span>
<span id="L161" rel="#L161">161</span>
<span id="L162" rel="#L162">162</span>
<span id="L163" rel="#L163">163</span>
<span id="L164" rel="#L164">164</span>
<span id="L165" rel="#L165">165</span>
<span id="L166" rel="#L166">166</span>
<span id="L167" rel="#L167">167</span>
<span id="L168" rel="#L168">168</span>
<span id="L169" rel="#L169">169</span>
<span id="L170" rel="#L170">170</span>
<span id="L171" rel="#L171">171</span>
<span id="L172" rel="#L172">172</span>
<span id="L173" rel="#L173">173</span>
<span id="L174" rel="#L174">174</span>
<span id="L175" rel="#L175">175</span>
<span id="L176" rel="#L176">176</span>
<span id="L177" rel="#L177">177</span>
<span id="L178" rel="#L178">178</span>
<span id="L179" rel="#L179">179</span>
<span id="L180" rel="#L180">180</span>
<span id="L181" rel="#L181">181</span>
<span id="L182" rel="#L182">182</span>
<span id="L183" rel="#L183">183</span>
<span id="L184" rel="#L184">184</span>
<span id="L185" rel="#L185">185</span>
<span id="L186" rel="#L186">186</span>
<span id="L187" rel="#L187">187</span>
<span id="L188" rel="#L188">188</span>
<span id="L189" rel="#L189">189</span>
<span id="L190" rel="#L190">190</span>
<span id="L191" rel="#L191">191</span>
<span id="L192" rel="#L192">192</span>
<span id="L193" rel="#L193">193</span>
<span id="L194" rel="#L194">194</span>
<span id="L195" rel="#L195">195</span>
<span id="L196" rel="#L196">196</span>
<span id="L197" rel="#L197">197</span>
<span id="L198" rel="#L198">198</span>
<span id="L199" rel="#L199">199</span>
<span id="L200" rel="#L200">200</span>
<span id="L201" rel="#L201">201</span>
<span id="L202" rel="#L202">202</span>
<span id="L203" rel="#L203">203</span>
<span id="L204" rel="#L204">204</span>
<span id="L205" rel="#L205">205</span>
<span id="L206" rel="#L206">206</span>
<span id="L207" rel="#L207">207</span>
<span id="L208" rel="#L208">208</span>
<span id="L209" rel="#L209">209</span>
<span id="L210" rel="#L210">210</span>
<span id="L211" rel="#L211">211</span>
<span id="L212" rel="#L212">212</span>
<span id="L213" rel="#L213">213</span>
<span id="L214" rel="#L214">214</span>
<span id="L215" rel="#L215">215</span>
<span id="L216" rel="#L216">216</span>
<span id="L217" rel="#L217">217</span>
<span id="L218" rel="#L218">218</span>
<span id="L219" rel="#L219">219</span>
<span id="L220" rel="#L220">220</span>
<span id="L221" rel="#L221">221</span>
<span id="L222" rel="#L222">222</span>
<span id="L223" rel="#L223">223</span>
<span id="L224" rel="#L224">224</span>
<span id="L225" rel="#L225">225</span>
<span id="L226" rel="#L226">226</span>
<span id="L227" rel="#L227">227</span>
<span id="L228" rel="#L228">228</span>
<span id="L229" rel="#L229">229</span>
<span id="L230" rel="#L230">230</span>
<span id="L231" rel="#L231">231</span>
<span id="L232" rel="#L232">232</span>
<span id="L233" rel="#L233">233</span>
<span id="L234" rel="#L234">234</span>
<span id="L235" rel="#L235">235</span>
<span id="L236" rel="#L236">236</span>
<span id="L237" rel="#L237">237</span>
<span id="L238" rel="#L238">238</span>
<span id="L239" rel="#L239">239</span>
<span id="L240" rel="#L240">240</span>
<span id="L241" rel="#L241">241</span>
<span id="L242" rel="#L242">242</span>
<span id="L243" rel="#L243">243</span>
<span id="L244" rel="#L244">244</span>
<span id="L245" rel="#L245">245</span>
<span id="L246" rel="#L246">246</span>
<span id="L247" rel="#L247">247</span>
<span id="L248" rel="#L248">248</span>
<span id="L249" rel="#L249">249</span>
<span id="L250" rel="#L250">250</span>
<span id="L251" rel="#L251">251</span>
<span id="L252" rel="#L252">252</span>
<span id="L253" rel="#L253">253</span>
<span id="L254" rel="#L254">254</span>
<span id="L255" rel="#L255">255</span>
<span id="L256" rel="#L256">256</span>
<span id="L257" rel="#L257">257</span>
<span id="L258" rel="#L258">258</span>
<span id="L259" rel="#L259">259</span>
<span id="L260" rel="#L260">260</span>
<span id="L261" rel="#L261">261</span>
<span id="L262" rel="#L262">262</span>
<span id="L263" rel="#L263">263</span>
<span id="L264" rel="#L264">264</span>
<span id="L265" rel="#L265">265</span>
<span id="L266" rel="#L266">266</span>
<span id="L267" rel="#L267">267</span>
<span id="L268" rel="#L268">268</span>
<span id="L269" rel="#L269">269</span>
<span id="L270" rel="#L270">270</span>
<span id="L271" rel="#L271">271</span>
<span id="L272" rel="#L272">272</span>
<span id="L273" rel="#L273">273</span>
<span id="L274" rel="#L274">274</span>
<span id="L275" rel="#L275">275</span>
<span id="L276" rel="#L276">276</span>
<span id="L277" rel="#L277">277</span>
<span id="L278" rel="#L278">278</span>
<span id="L279" rel="#L279">279</span>
<span id="L280" rel="#L280">280</span>
<span id="L281" rel="#L281">281</span>
<span id="L282" rel="#L282">282</span>
<span id="L283" rel="#L283">283</span>
<span id="L284" rel="#L284">284</span>
<span id="L285" rel="#L285">285</span>
<span id="L286" rel="#L286">286</span>
<span id="L287" rel="#L287">287</span>
<span id="L288" rel="#L288">288</span>
<span id="L289" rel="#L289">289</span>
<span id="L290" rel="#L290">290</span>
<span id="L291" rel="#L291">291</span>
<span id="L292" rel="#L292">292</span>
<span id="L293" rel="#L293">293</span>
<span id="L294" rel="#L294">294</span>
<span id="L295" rel="#L295">295</span>
<span id="L296" rel="#L296">296</span>
<span id="L297" rel="#L297">297</span>
<span id="L298" rel="#L298">298</span>
<span id="L299" rel="#L299">299</span>
<span id="L300" rel="#L300">300</span>
<span id="L301" rel="#L301">301</span>
<span id="L302" rel="#L302">302</span>
<span id="L303" rel="#L303">303</span>
<span id="L304" rel="#L304">304</span>
<span id="L305" rel="#L305">305</span>
<span id="L306" rel="#L306">306</span>
<span id="L307" rel="#L307">307</span>
<span id="L308" rel="#L308">308</span>
<span id="L309" rel="#L309">309</span>
<span id="L310" rel="#L310">310</span>
<span id="L311" rel="#L311">311</span>
<span id="L312" rel="#L312">312</span>
<span id="L313" rel="#L313">313</span>
<span id="L314" rel="#L314">314</span>
<span id="L315" rel="#L315">315</span>
<span id="L316" rel="#L316">316</span>
<span id="L317" rel="#L317">317</span>
<span id="L318" rel="#L318">318</span>
<span id="L319" rel="#L319">319</span>
<span id="L320" rel="#L320">320</span>
<span id="L321" rel="#L321">321</span>
<span id="L322" rel="#L322">322</span>
<span id="L323" rel="#L323">323</span>
<span id="L324" rel="#L324">324</span>
<span id="L325" rel="#L325">325</span>
<span id="L326" rel="#L326">326</span>
<span id="L327" rel="#L327">327</span>
<span id="L328" rel="#L328">328</span>
<span id="L329" rel="#L329">329</span>
<span id="L330" rel="#L330">330</span>
<span id="L331" rel="#L331">331</span>
<span id="L332" rel="#L332">332</span>
<span id="L333" rel="#L333">333</span>
<span id="L334" rel="#L334">334</span>
<span id="L335" rel="#L335">335</span>
<span id="L336" rel="#L336">336</span>
<span id="L337" rel="#L337">337</span>
<span id="L338" rel="#L338">338</span>
<span id="L339" rel="#L339">339</span>
<span id="L340" rel="#L340">340</span>
<span id="L341" rel="#L341">341</span>
<span id="L342" rel="#L342">342</span>
<span id="L343" rel="#L343">343</span>
<span id="L344" rel="#L344">344</span>
<span id="L345" rel="#L345">345</span>
<span id="L346" rel="#L346">346</span>
<span id="L347" rel="#L347">347</span>
<span id="L348" rel="#L348">348</span>
<span id="L349" rel="#L349">349</span>
<span id="L350" rel="#L350">350</span>
<span id="L351" rel="#L351">351</span>
<span id="L352" rel="#L352">352</span>
<span id="L353" rel="#L353">353</span>
<span id="L354" rel="#L354">354</span>
<span id="L355" rel="#L355">355</span>
<span id="L356" rel="#L356">356</span>
<span id="L357" rel="#L357">357</span>
<span id="L358" rel="#L358">358</span>
<span id="L359" rel="#L359">359</span>
<span id="L360" rel="#L360">360</span>
<span id="L361" rel="#L361">361</span>
<span id="L362" rel="#L362">362</span>
<span id="L363" rel="#L363">363</span>
<span id="L364" rel="#L364">364</span>
<span id="L365" rel="#L365">365</span>
<span id="L366" rel="#L366">366</span>
<span id="L367" rel="#L367">367</span>
<span id="L368" rel="#L368">368</span>
<span id="L369" rel="#L369">369</span>
<span id="L370" rel="#L370">370</span>
<span id="L371" rel="#L371">371</span>
<span id="L372" rel="#L372">372</span>
<span id="L373" rel="#L373">373</span>
<span id="L374" rel="#L374">374</span>
<span id="L375" rel="#L375">375</span>
<span id="L376" rel="#L376">376</span>
<span id="L377" rel="#L377">377</span>
<span id="L378" rel="#L378">378</span>
<span id="L379" rel="#L379">379</span>
<span id="L380" rel="#L380">380</span>
<span id="L381" rel="#L381">381</span>
<span id="L382" rel="#L382">382</span>
<span id="L383" rel="#L383">383</span>
<span id="L384" rel="#L384">384</span>
<span id="L385" rel="#L385">385</span>
<span id="L386" rel="#L386">386</span>
<span id="L387" rel="#L387">387</span>
<span id="L388" rel="#L388">388</span>
<span id="L389" rel="#L389">389</span>
<span id="L390" rel="#L390">390</span>
<span id="L391" rel="#L391">391</span>
<span id="L392" rel="#L392">392</span>
<span id="L393" rel="#L393">393</span>
<span id="L394" rel="#L394">394</span>
<span id="L395" rel="#L395">395</span>
<span id="L396" rel="#L396">396</span>
<span id="L397" rel="#L397">397</span>
<span id="L398" rel="#L398">398</span>
<span id="L399" rel="#L399">399</span>
<span id="L400" rel="#L400">400</span>
<span id="L401" rel="#L401">401</span>
<span id="L402" rel="#L402">402</span>
<span id="L403" rel="#L403">403</span>
<span id="L404" rel="#L404">404</span>
<span id="L405" rel="#L405">405</span>
<span id="L406" rel="#L406">406</span>
<span id="L407" rel="#L407">407</span>
<span id="L408" rel="#L408">408</span>
<span id="L409" rel="#L409">409</span>
<span id="L410" rel="#L410">410</span>
<span id="L411" rel="#L411">411</span>
<span id="L412" rel="#L412">412</span>
<span id="L413" rel="#L413">413</span>
<span id="L414" rel="#L414">414</span>
<span id="L415" rel="#L415">415</span>
<span id="L416" rel="#L416">416</span>
<span id="L417" rel="#L417">417</span>
<span id="L418" rel="#L418">418</span>
<span id="L419" rel="#L419">419</span>
<span id="L420" rel="#L420">420</span>
<span id="L421" rel="#L421">421</span>
<span id="L422" rel="#L422">422</span>
<span id="L423" rel="#L423">423</span>
<span id="L424" rel="#L424">424</span>
<span id="L425" rel="#L425">425</span>
<span id="L426" rel="#L426">426</span>
<span id="L427" rel="#L427">427</span>
<span id="L428" rel="#L428">428</span>
<span id="L429" rel="#L429">429</span>
<span id="L430" rel="#L430">430</span>
<span id="L431" rel="#L431">431</span>
<span id="L432" rel="#L432">432</span>
<span id="L433" rel="#L433">433</span>
<span id="L434" rel="#L434">434</span>
<span id="L435" rel="#L435">435</span>
<span id="L436" rel="#L436">436</span>
<span id="L437" rel="#L437">437</span>
<span id="L438" rel="#L438">438</span>
<span id="L439" rel="#L439">439</span>
<span id="L440" rel="#L440">440</span>
<span id="L441" rel="#L441">441</span>
<span id="L442" rel="#L442">442</span>
<span id="L443" rel="#L443">443</span>
<span id="L444" rel="#L444">444</span>
<span id="L445" rel="#L445">445</span>
<span id="L446" rel="#L446">446</span>
<span id="L447" rel="#L447">447</span>
<span id="L448" rel="#L448">448</span>
<span id="L449" rel="#L449">449</span>
<span id="L450" rel="#L450">450</span>
<span id="L451" rel="#L451">451</span>
<span id="L452" rel="#L452">452</span>
<span id="L453" rel="#L453">453</span>
<span id="L454" rel="#L454">454</span>
<span id="L455" rel="#L455">455</span>
<span id="L456" rel="#L456">456</span>
<span id="L457" rel="#L457">457</span>
<span id="L458" rel="#L458">458</span>
<span id="L459" rel="#L459">459</span>
<span id="L460" rel="#L460">460</span>
<span id="L461" rel="#L461">461</span>
<span id="L462" rel="#L462">462</span>
<span id="L463" rel="#L463">463</span>
<span id="L464" rel="#L464">464</span>
<span id="L465" rel="#L465">465</span>
<span id="L466" rel="#L466">466</span>
<span id="L467" rel="#L467">467</span>
<span id="L468" rel="#L468">468</span>
<span id="L469" rel="#L469">469</span>
<span id="L470" rel="#L470">470</span>
<span id="L471" rel="#L471">471</span>
<span id="L472" rel="#L472">472</span>
<span id="L473" rel="#L473">473</span>
<span id="L474" rel="#L474">474</span>
<span id="L475" rel="#L475">475</span>
<span id="L476" rel="#L476">476</span>
<span id="L477" rel="#L477">477</span>
<span id="L478" rel="#L478">478</span>
<span id="L479" rel="#L479">479</span>
<span id="L480" rel="#L480">480</span>
<span id="L481" rel="#L481">481</span>
<span id="L482" rel="#L482">482</span>
<span id="L483" rel="#L483">483</span>
<span id="L484" rel="#L484">484</span>
<span id="L485" rel="#L485">485</span>
<span id="L486" rel="#L486">486</span>
<span id="L487" rel="#L487">487</span>
<span id="L488" rel="#L488">488</span>
<span id="L489" rel="#L489">489</span>
<span id="L490" rel="#L490">490</span>
<span id="L491" rel="#L491">491</span>
<span id="L492" rel="#L492">492</span>
<span id="L493" rel="#L493">493</span>
<span id="L494" rel="#L494">494</span>
<span id="L495" rel="#L495">495</span>
<span id="L496" rel="#L496">496</span>
<span id="L497" rel="#L497">497</span>
<span id="L498" rel="#L498">498</span>
<span id="L499" rel="#L499">499</span>
<span id="L500" rel="#L500">500</span>
<span id="L501" rel="#L501">501</span>
<span id="L502" rel="#L502">502</span>
<span id="L503" rel="#L503">503</span>
<span id="L504" rel="#L504">504</span>
<span id="L505" rel="#L505">505</span>
<span id="L506" rel="#L506">506</span>
<span id="L507" rel="#L507">507</span>
<span id="L508" rel="#L508">508</span>
<span id="L509" rel="#L509">509</span>
<span id="L510" rel="#L510">510</span>
<span id="L511" rel="#L511">511</span>
<span id="L512" rel="#L512">512</span>
<span id="L513" rel="#L513">513</span>
<span id="L514" rel="#L514">514</span>
<span id="L515" rel="#L515">515</span>
<span id="L516" rel="#L516">516</span>
<span id="L517" rel="#L517">517</span>
<span id="L518" rel="#L518">518</span>
<span id="L519" rel="#L519">519</span>
<span id="L520" rel="#L520">520</span>
<span id="L521" rel="#L521">521</span>
<span id="L522" rel="#L522">522</span>
<span id="L523" rel="#L523">523</span>
<span id="L524" rel="#L524">524</span>
<span id="L525" rel="#L525">525</span>
<span id="L526" rel="#L526">526</span>
<span id="L527" rel="#L527">527</span>
<span id="L528" rel="#L528">528</span>
<span id="L529" rel="#L529">529</span>
<span id="L530" rel="#L530">530</span>
<span id="L531" rel="#L531">531</span>
<span id="L532" rel="#L532">532</span>
<span id="L533" rel="#L533">533</span>
<span id="L534" rel="#L534">534</span>
<span id="L535" rel="#L535">535</span>
<span id="L536" rel="#L536">536</span>
<span id="L537" rel="#L537">537</span>
<span id="L538" rel="#L538">538</span>
<span id="L539" rel="#L539">539</span>
<span id="L540" rel="#L540">540</span>
<span id="L541" rel="#L541">541</span>
<span id="L542" rel="#L542">542</span>
<span id="L543" rel="#L543">543</span>
<span id="L544" rel="#L544">544</span>
<span id="L545" rel="#L545">545</span>
<span id="L546" rel="#L546">546</span>
<span id="L547" rel="#L547">547</span>
<span id="L548" rel="#L548">548</span>
<span id="L549" rel="#L549">549</span>
<span id="L550" rel="#L550">550</span>
<span id="L551" rel="#L551">551</span>
<span id="L552" rel="#L552">552</span>
<span id="L553" rel="#L553">553</span>
<span id="L554" rel="#L554">554</span>
<span id="L555" rel="#L555">555</span>
<span id="L556" rel="#L556">556</span>
<span id="L557" rel="#L557">557</span>
<span id="L558" rel="#L558">558</span>
<span id="L559" rel="#L559">559</span>
<span id="L560" rel="#L560">560</span>
<span id="L561" rel="#L561">561</span>
<span id="L562" rel="#L562">562</span>
<span id="L563" rel="#L563">563</span>
<span id="L564" rel="#L564">564</span>
<span id="L565" rel="#L565">565</span>
<span id="L566" rel="#L566">566</span>
<span id="L567" rel="#L567">567</span>
<span id="L568" rel="#L568">568</span>
<span id="L569" rel="#L569">569</span>
<span id="L570" rel="#L570">570</span>
<span id="L571" rel="#L571">571</span>
<span id="L572" rel="#L572">572</span>
<span id="L573" rel="#L573">573</span>
<span id="L574" rel="#L574">574</span>
<span id="L575" rel="#L575">575</span>
<span id="L576" rel="#L576">576</span>
<span id="L577" rel="#L577">577</span>
<span id="L578" rel="#L578">578</span>
<span id="L579" rel="#L579">579</span>
<span id="L580" rel="#L580">580</span>
<span id="L581" rel="#L581">581</span>
<span id="L582" rel="#L582">582</span>
<span id="L583" rel="#L583">583</span>
<span id="L584" rel="#L584">584</span>
<span id="L585" rel="#L585">585</span>
<span id="L586" rel="#L586">586</span>
<span id="L587" rel="#L587">587</span>
<span id="L588" rel="#L588">588</span>
<span id="L589" rel="#L589">589</span>
<span id="L590" rel="#L590">590</span>
<span id="L591" rel="#L591">591</span>
<span id="L592" rel="#L592">592</span>
<span id="L593" rel="#L593">593</span>
<span id="L594" rel="#L594">594</span>
<span id="L595" rel="#L595">595</span>
<span id="L596" rel="#L596">596</span>
<span id="L597" rel="#L597">597</span>
<span id="L598" rel="#L598">598</span>
<span id="L599" rel="#L599">599</span>
<span id="L600" rel="#L600">600</span>
<span id="L601" rel="#L601">601</span>
<span id="L602" rel="#L602">602</span>
<span id="L603" rel="#L603">603</span>
<span id="L604" rel="#L604">604</span>
<span id="L605" rel="#L605">605</span>
<span id="L606" rel="#L606">606</span>
<span id="L607" rel="#L607">607</span>
<span id="L608" rel="#L608">608</span>
<span id="L609" rel="#L609">609</span>
<span id="L610" rel="#L610">610</span>
<span id="L611" rel="#L611">611</span>
<span id="L612" rel="#L612">612</span>
<span id="L613" rel="#L613">613</span>
<span id="L614" rel="#L614">614</span>
<span id="L615" rel="#L615">615</span>
<span id="L616" rel="#L616">616</span>
<span id="L617" rel="#L617">617</span>
<span id="L618" rel="#L618">618</span>
<span id="L619" rel="#L619">619</span>
<span id="L620" rel="#L620">620</span>
<span id="L621" rel="#L621">621</span>
<span id="L622" rel="#L622">622</span>
<span id="L623" rel="#L623">623</span>
<span id="L624" rel="#L624">624</span>
<span id="L625" rel="#L625">625</span>
<span id="L626" rel="#L626">626</span>
<span id="L627" rel="#L627">627</span>
<span id="L628" rel="#L628">628</span>
<span id="L629" rel="#L629">629</span>
<span id="L630" rel="#L630">630</span>
<span id="L631" rel="#L631">631</span>
<span id="L632" rel="#L632">632</span>
<span id="L633" rel="#L633">633</span>
<span id="L634" rel="#L634">634</span>
<span id="L635" rel="#L635">635</span>
<span id="L636" rel="#L636">636</span>
<span id="L637" rel="#L637">637</span>
<span id="L638" rel="#L638">638</span>
<span id="L639" rel="#L639">639</span>
<span id="L640" rel="#L640">640</span>
<span id="L641" rel="#L641">641</span>
<span id="L642" rel="#L642">642</span>
<span id="L643" rel="#L643">643</span>
<span id="L644" rel="#L644">644</span>
<span id="L645" rel="#L645">645</span>
<span id="L646" rel="#L646">646</span>
<span id="L647" rel="#L647">647</span>
<span id="L648" rel="#L648">648</span>
<span id="L649" rel="#L649">649</span>
<span id="L650" rel="#L650">650</span>
<span id="L651" rel="#L651">651</span>
<span id="L652" rel="#L652">652</span>
<span id="L653" rel="#L653">653</span>
<span id="L654" rel="#L654">654</span>
<span id="L655" rel="#L655">655</span>
<span id="L656" rel="#L656">656</span>
<span id="L657" rel="#L657">657</span>
<span id="L658" rel="#L658">658</span>
<span id="L659" rel="#L659">659</span>
<span id="L660" rel="#L660">660</span>
<span id="L661" rel="#L661">661</span>
<span id="L662" rel="#L662">662</span>
<span id="L663" rel="#L663">663</span>
<span id="L664" rel="#L664">664</span>
<span id="L665" rel="#L665">665</span>
<span id="L666" rel="#L666">666</span>
<span id="L667" rel="#L667">667</span>
<span id="L668" rel="#L668">668</span>
<span id="L669" rel="#L669">669</span>
<span id="L670" rel="#L670">670</span>
<span id="L671" rel="#L671">671</span>
<span id="L672" rel="#L672">672</span>
<span id="L673" rel="#L673">673</span>
<span id="L674" rel="#L674">674</span>
<span id="L675" rel="#L675">675</span>
<span id="L676" rel="#L676">676</span>
<span id="L677" rel="#L677">677</span>
<span id="L678" rel="#L678">678</span>
<span id="L679" rel="#L679">679</span>
<span id="L680" rel="#L680">680</span>
<span id="L681" rel="#L681">681</span>
<span id="L682" rel="#L682">682</span>
<span id="L683" rel="#L683">683</span>
<span id="L684" rel="#L684">684</span>
<span id="L685" rel="#L685">685</span>
<span id="L686" rel="#L686">686</span>
<span id="L687" rel="#L687">687</span>
<span id="L688" rel="#L688">688</span>
<span id="L689" rel="#L689">689</span>
<span id="L690" rel="#L690">690</span>
<span id="L691" rel="#L691">691</span>
<span id="L692" rel="#L692">692</span>
<span id="L693" rel="#L693">693</span>
<span id="L694" rel="#L694">694</span>
<span id="L695" rel="#L695">695</span>
<span id="L696" rel="#L696">696</span>
<span id="L697" rel="#L697">697</span>
<span id="L698" rel="#L698">698</span>
<span id="L699" rel="#L699">699</span>
<span id="L700" rel="#L700">700</span>
<span id="L701" rel="#L701">701</span>
<span id="L702" rel="#L702">702</span>
<span id="L703" rel="#L703">703</span>
<span id="L704" rel="#L704">704</span>
<span id="L705" rel="#L705">705</span>
<span id="L706" rel="#L706">706</span>
<span id="L707" rel="#L707">707</span>
<span id="L708" rel="#L708">708</span>
<span id="L709" rel="#L709">709</span>
<span id="L710" rel="#L710">710</span>
<span id="L711" rel="#L711">711</span>
<span id="L712" rel="#L712">712</span>
<span id="L713" rel="#L713">713</span>
<span id="L714" rel="#L714">714</span>
<span id="L715" rel="#L715">715</span>
<span id="L716" rel="#L716">716</span>
<span id="L717" rel="#L717">717</span>
<span id="L718" rel="#L718">718</span>
<span id="L719" rel="#L719">719</span>
<span id="L720" rel="#L720">720</span>
<span id="L721" rel="#L721">721</span>
<span id="L722" rel="#L722">722</span>
<span id="L723" rel="#L723">723</span>
<span id="L724" rel="#L724">724</span>
<span id="L725" rel="#L725">725</span>
<span id="L726" rel="#L726">726</span>
<span id="L727" rel="#L727">727</span>
<span id="L728" rel="#L728">728</span>
<span id="L729" rel="#L729">729</span>
<span id="L730" rel="#L730">730</span>
<span id="L731" rel="#L731">731</span>
<span id="L732" rel="#L732">732</span>
<span id="L733" rel="#L733">733</span>
<span id="L734" rel="#L734">734</span>
<span id="L735" rel="#L735">735</span>
<span id="L736" rel="#L736">736</span>
<span id="L737" rel="#L737">737</span>
<span id="L738" rel="#L738">738</span>
<span id="L739" rel="#L739">739</span>
<span id="L740" rel="#L740">740</span>
<span id="L741" rel="#L741">741</span>
<span id="L742" rel="#L742">742</span>
<span id="L743" rel="#L743">743</span>
<span id="L744" rel="#L744">744</span>
<span id="L745" rel="#L745">745</span>
<span id="L746" rel="#L746">746</span>
<span id="L747" rel="#L747">747</span>
<span id="L748" rel="#L748">748</span>
<span id="L749" rel="#L749">749</span>
<span id="L750" rel="#L750">750</span>
<span id="L751" rel="#L751">751</span>
<span id="L752" rel="#L752">752</span>
<span id="L753" rel="#L753">753</span>
<span id="L754" rel="#L754">754</span>
<span id="L755" rel="#L755">755</span>
<span id="L756" rel="#L756">756</span>
<span id="L757" rel="#L757">757</span>
<span id="L758" rel="#L758">758</span>
<span id="L759" rel="#L759">759</span>
<span id="L760" rel="#L760">760</span>
<span id="L761" rel="#L761">761</span>
<span id="L762" rel="#L762">762</span>
<span id="L763" rel="#L763">763</span>
<span id="L764" rel="#L764">764</span>
<span id="L765" rel="#L765">765</span>
<span id="L766" rel="#L766">766</span>
<span id="L767" rel="#L767">767</span>
<span id="L768" rel="#L768">768</span>
<span id="L769" rel="#L769">769</span>
<span id="L770" rel="#L770">770</span>
<span id="L771" rel="#L771">771</span>
<span id="L772" rel="#L772">772</span>
<span id="L773" rel="#L773">773</span>
<span id="L774" rel="#L774">774</span>
<span id="L775" rel="#L775">775</span>
<span id="L776" rel="#L776">776</span>
<span id="L777" rel="#L777">777</span>
<span id="L778" rel="#L778">778</span>
<span id="L779" rel="#L779">779</span>
<span id="L780" rel="#L780">780</span>
<span id="L781" rel="#L781">781</span>
<span id="L782" rel="#L782">782</span>
<span id="L783" rel="#L783">783</span>
<span id="L784" rel="#L784">784</span>
<span id="L785" rel="#L785">785</span>
<span id="L786" rel="#L786">786</span>
<span id="L787" rel="#L787">787</span>
<span id="L788" rel="#L788">788</span>
<span id="L789" rel="#L789">789</span>
<span id="L790" rel="#L790">790</span>
<span id="L791" rel="#L791">791</span>
<span id="L792" rel="#L792">792</span>
<span id="L793" rel="#L793">793</span>
<span id="L794" rel="#L794">794</span>
<span id="L795" rel="#L795">795</span>
<span id="L796" rel="#L796">796</span>
<span id="L797" rel="#L797">797</span>
<span id="L798" rel="#L798">798</span>
<span id="L799" rel="#L799">799</span>
<span id="L800" rel="#L800">800</span>
<span id="L801" rel="#L801">801</span>
<span id="L802" rel="#L802">802</span>
<span id="L803" rel="#L803">803</span>
<span id="L804" rel="#L804">804</span>
<span id="L805" rel="#L805">805</span>
<span id="L806" rel="#L806">806</span>
<span id="L807" rel="#L807">807</span>
<span id="L808" rel="#L808">808</span>
<span id="L809" rel="#L809">809</span>
<span id="L810" rel="#L810">810</span>
<span id="L811" rel="#L811">811</span>
<span id="L812" rel="#L812">812</span>
<span id="L813" rel="#L813">813</span>
<span id="L814" rel="#L814">814</span>
<span id="L815" rel="#L815">815</span>
<span id="L816" rel="#L816">816</span>
<span id="L817" rel="#L817">817</span>
<span id="L818" rel="#L818">818</span>
<span id="L819" rel="#L819">819</span>
<span id="L820" rel="#L820">820</span>
<span id="L821" rel="#L821">821</span>
<span id="L822" rel="#L822">822</span>
<span id="L823" rel="#L823">823</span>
<span id="L824" rel="#L824">824</span>
<span id="L825" rel="#L825">825</span>
<span id="L826" rel="#L826">826</span>
<span id="L827" rel="#L827">827</span>
<span id="L828" rel="#L828">828</span>
<span id="L829" rel="#L829">829</span>
<span id="L830" rel="#L830">830</span>
<span id="L831" rel="#L831">831</span>
<span id="L832" rel="#L832">832</span>
<span id="L833" rel="#L833">833</span>
<span id="L834" rel="#L834">834</span>
<span id="L835" rel="#L835">835</span>
<span id="L836" rel="#L836">836</span>
<span id="L837" rel="#L837">837</span>
<span id="L838" rel="#L838">838</span>
<span id="L839" rel="#L839">839</span>
<span id="L840" rel="#L840">840</span>
<span id="L841" rel="#L841">841</span>
<span id="L842" rel="#L842">842</span>
<span id="L843" rel="#L843">843</span>
<span id="L844" rel="#L844">844</span>
<span id="L845" rel="#L845">845</span>
<span id="L846" rel="#L846">846</span>
<span id="L847" rel="#L847">847</span>
<span id="L848" rel="#L848">848</span>
<span id="L849" rel="#L849">849</span>
<span id="L850" rel="#L850">850</span>
<span id="L851" rel="#L851">851</span>
<span id="L852" rel="#L852">852</span>
<span id="L853" rel="#L853">853</span>
<span id="L854" rel="#L854">854</span>
<span id="L855" rel="#L855">855</span>
<span id="L856" rel="#L856">856</span>
<span id="L857" rel="#L857">857</span>
<span id="L858" rel="#L858">858</span>
<span id="L859" rel="#L859">859</span>
<span id="L860" rel="#L860">860</span>
<span id="L861" rel="#L861">861</span>
<span id="L862" rel="#L862">862</span>
<span id="L863" rel="#L863">863</span>
<span id="L864" rel="#L864">864</span>
<span id="L865" rel="#L865">865</span>
<span id="L866" rel="#L866">866</span>
<span id="L867" rel="#L867">867</span>
<span id="L868" rel="#L868">868</span>
<span id="L869" rel="#L869">869</span>
<span id="L870" rel="#L870">870</span>
<span id="L871" rel="#L871">871</span>
<span id="L872" rel="#L872">872</span>
<span id="L873" rel="#L873">873</span>
<span id="L874" rel="#L874">874</span>
<span id="L875" rel="#L875">875</span>
<span id="L876" rel="#L876">876</span>
<span id="L877" rel="#L877">877</span>
<span id="L878" rel="#L878">878</span>
<span id="L879" rel="#L879">879</span>
<span id="L880" rel="#L880">880</span>
<span id="L881" rel="#L881">881</span>
<span id="L882" rel="#L882">882</span>
<span id="L883" rel="#L883">883</span>
<span id="L884" rel="#L884">884</span>
<span id="L885" rel="#L885">885</span>
<span id="L886" rel="#L886">886</span>
<span id="L887" rel="#L887">887</span>
<span id="L888" rel="#L888">888</span>
<span id="L889" rel="#L889">889</span>
<span id="L890" rel="#L890">890</span>
<span id="L891" rel="#L891">891</span>
<span id="L892" rel="#L892">892</span>
<span id="L893" rel="#L893">893</span>
<span id="L894" rel="#L894">894</span>
<span id="L895" rel="#L895">895</span>
<span id="L896" rel="#L896">896</span>
<span id="L897" rel="#L897">897</span>
<span id="L898" rel="#L898">898</span>
<span id="L899" rel="#L899">899</span>
<span id="L900" rel="#L900">900</span>
<span id="L901" rel="#L901">901</span>
<span id="L902" rel="#L902">902</span>
<span id="L903" rel="#L903">903</span>
<span id="L904" rel="#L904">904</span>
<span id="L905" rel="#L905">905</span>
<span id="L906" rel="#L906">906</span>
<span id="L907" rel="#L907">907</span>
<span id="L908" rel="#L908">908</span>
<span id="L909" rel="#L909">909</span>
<span id="L910" rel="#L910">910</span>
<span id="L911" rel="#L911">911</span>
<span id="L912" rel="#L912">912</span>
<span id="L913" rel="#L913">913</span>
<span id="L914" rel="#L914">914</span>
<span id="L915" rel="#L915">915</span>
<span id="L916" rel="#L916">916</span>
<span id="L917" rel="#L917">917</span>
<span id="L918" rel="#L918">918</span>
<span id="L919" rel="#L919">919</span>
<span id="L920" rel="#L920">920</span>
<span id="L921" rel="#L921">921</span>
<span id="L922" rel="#L922">922</span>
<span id="L923" rel="#L923">923</span>
<span id="L924" rel="#L924">924</span>
<span id="L925" rel="#L925">925</span>
<span id="L926" rel="#L926">926</span>
<span id="L927" rel="#L927">927</span>
<span id="L928" rel="#L928">928</span>
<span id="L929" rel="#L929">929</span>
<span id="L930" rel="#L930">930</span>
<span id="L931" rel="#L931">931</span>
<span id="L932" rel="#L932">932</span>
<span id="L933" rel="#L933">933</span>
<span id="L934" rel="#L934">934</span>
<span id="L935" rel="#L935">935</span>
<span id="L936" rel="#L936">936</span>
<span id="L937" rel="#L937">937</span>
<span id="L938" rel="#L938">938</span>
<span id="L939" rel="#L939">939</span>
<span id="L940" rel="#L940">940</span>
<span id="L941" rel="#L941">941</span>
<span id="L942" rel="#L942">942</span>
<span id="L943" rel="#L943">943</span>
<span id="L944" rel="#L944">944</span>
<span id="L945" rel="#L945">945</span>
<span id="L946" rel="#L946">946</span>
<span id="L947" rel="#L947">947</span>
<span id="L948" rel="#L948">948</span>
<span id="L949" rel="#L949">949</span>
<span id="L950" rel="#L950">950</span>
<span id="L951" rel="#L951">951</span>
<span id="L952" rel="#L952">952</span>
<span id="L953" rel="#L953">953</span>
<span id="L954" rel="#L954">954</span>
<span id="L955" rel="#L955">955</span>
<span id="L956" rel="#L956">956</span>
<span id="L957" rel="#L957">957</span>
<span id="L958" rel="#L958">958</span>
<span id="L959" rel="#L959">959</span>
<span id="L960" rel="#L960">960</span>
<span id="L961" rel="#L961">961</span>
<span id="L962" rel="#L962">962</span>
<span id="L963" rel="#L963">963</span>
<span id="L964" rel="#L964">964</span>
<span id="L965" rel="#L965">965</span>
<span id="L966" rel="#L966">966</span>
<span id="L967" rel="#L967">967</span>
<span id="L968" rel="#L968">968</span>
<span id="L969" rel="#L969">969</span>
<span id="L970" rel="#L970">970</span>
<span id="L971" rel="#L971">971</span>
<span id="L972" rel="#L972">972</span>
<span id="L973" rel="#L973">973</span>
<span id="L974" rel="#L974">974</span>
<span id="L975" rel="#L975">975</span>
<span id="L976" rel="#L976">976</span>
<span id="L977" rel="#L977">977</span>
<span id="L978" rel="#L978">978</span>
<span id="L979" rel="#L979">979</span>
<span id="L980" rel="#L980">980</span>
<span id="L981" rel="#L981">981</span>
<span id="L982" rel="#L982">982</span>
<span id="L983" rel="#L983">983</span>
<span id="L984" rel="#L984">984</span>
<span id="L985" rel="#L985">985</span>
<span id="L986" rel="#L986">986</span>
<span id="L987" rel="#L987">987</span>
<span id="L988" rel="#L988">988</span>
<span id="L989" rel="#L989">989</span>
<span id="L990" rel="#L990">990</span>
<span id="L991" rel="#L991">991</span>
<span id="L992" rel="#L992">992</span>
<span id="L993" rel="#L993">993</span>
<span id="L994" rel="#L994">994</span>
<span id="L995" rel="#L995">995</span>
<span id="L996" rel="#L996">996</span>
<span id="L997" rel="#L997">997</span>
<span id="L998" rel="#L998">998</span>
<span id="L999" rel="#L999">999</span>
<span id="L1000" rel="#L1000">1000</span>
<span id="L1001" rel="#L1001">1001</span>
<span id="L1002" rel="#L1002">1002</span>
<span id="L1003" rel="#L1003">1003</span>
<span id="L1004" rel="#L1004">1004</span>
<span id="L1005" rel="#L1005">1005</span>
<span id="L1006" rel="#L1006">1006</span>
<span id="L1007" rel="#L1007">1007</span>
<span id="L1008" rel="#L1008">1008</span>
<span id="L1009" rel="#L1009">1009</span>
<span id="L1010" rel="#L1010">1010</span>
<span id="L1011" rel="#L1011">1011</span>
<span id="L1012" rel="#L1012">1012</span>
<span id="L1013" rel="#L1013">1013</span>
<span id="L1014" rel="#L1014">1014</span>
<span id="L1015" rel="#L1015">1015</span>
<span id="L1016" rel="#L1016">1016</span>
<span id="L1017" rel="#L1017">1017</span>
<span id="L1018" rel="#L1018">1018</span>
<span id="L1019" rel="#L1019">1019</span>
<span id="L1020" rel="#L1020">1020</span>
<span id="L1021" rel="#L1021">1021</span>
<span id="L1022" rel="#L1022">1022</span>
<span id="L1023" rel="#L1023">1023</span>
<span id="L1024" rel="#L1024">1024</span>
<span id="L1025" rel="#L1025">1025</span>
<span id="L1026" rel="#L1026">1026</span>
<span id="L1027" rel="#L1027">1027</span>
<span id="L1028" rel="#L1028">1028</span>
<span id="L1029" rel="#L1029">1029</span>
<span id="L1030" rel="#L1030">1030</span>
<span id="L1031" rel="#L1031">1031</span>
</pre>
          </td>
          <td width="100%">
            
              
                <div class="highlight"><pre><div class='line' id='LC1'><span class="cp">&lt;?php</span></div><div class='line' id='LC2'><span class="sd">/**</span></div><div class='line' id='LC3'><span class="sd"> * File: Amazon PAS</span></div><div class='line' id='LC4'><span class="sd"> * 	Product Advertising Service (http://aws.amazon.com/associates)</span></div><div class='line' id='LC5'><span class="sd"> *</span></div><div class='line' id='LC6'><span class="sd"> * Version:</span></div><div class='line' id='LC7'><span class="sd"> * 	2010.11.26</span></div><div class='line' id='LC8'><span class="sd"> *</span></div><div class='line' id='LC9'><span class="sd"> * See Also:</span></div><div class='line' id='LC10'><span class="sd"> * 	[Amazon PAS](http://aws.amazon.com/associates)</span></div><div class='line' id='LC11'><span class="sd"> */</span></div><div class='line' id='LC12'><br/></div><div class='line' id='LC13'><br/></div><div class='line' id='LC14'><span class="cm">/*%******************************************************************************************%*/</span></div><div class='line' id='LC15'><span class="c1">// EXCEPTIONS</span></div><div class='line' id='LC16'><br/></div><div class='line' id='LC17'><span class="sd">/**</span></div><div class='line' id='LC18'><span class="sd"> * Exception: PAS_Exception</span></div><div class='line' id='LC19'><span class="sd"> * 	Default PAS Exception.</span></div><div class='line' id='LC20'><span class="sd"> */</span></div><div class='line' id='LC21'><span class="k">class</span> <span class="nc">PAS_Exception</span> <span class="k">extends</span> <span class="nx">Exception</span> <span class="p">{}</span></div><div class='line' id='LC22'><br/></div><div class='line' id='LC23'><br/></div><div class='line' id='LC24'><span class="cm">/*%******************************************************************************************%*/</span></div><div class='line' id='LC25'><span class="c1">// MAIN CLASS</span></div><div class='line' id='LC26'><br/></div><div class='line' id='LC27'><span class="sd">/**</span></div><div class='line' id='LC28'><span class="sd"> * Class: AmazonPAS</span></div><div class='line' id='LC29'><span class="sd"> * 	Container for all Amazon PAS-related methods. Inherits additional methods from CFRuntime.</span></div><div class='line' id='LC30'><span class="sd"> */</span></div><div class='line' id='LC31'><span class="k">class</span> <span class="nc">AmazonPAS</span> <span class="k">extends</span> <span class="nx">CFRuntime</span></div><div class='line' id='LC32'><span class="p">{</span></div><div class='line' id='LC33'>	<span class="sd">/**</span></div><div class='line' id='LC34'><span class="sd">	 * Property: locale</span></div><div class='line' id='LC35'><span class="sd">	 * The Amazon locale to use by default.</span></div><div class='line' id='LC36'><span class="sd">	 */</span></div><div class='line' id='LC37'>	<span class="k">var</span> <span class="nv">$locale</span><span class="p">;</span></div><div class='line' id='LC38'><br/></div><div class='line' id='LC39'><br/></div><div class='line' id='LC40'>	<span class="cm">/*%******************************************************************************************%*/</span></div><div class='line' id='LC41'>	<span class="c1">// CONSTANTS</span></div><div class='line' id='LC42'><br/></div><div class='line' id='LC43'>	<span class="sd">/**</span></div><div class='line' id='LC44'><span class="sd">	 * Constant: LOCALE_US</span></div><div class='line' id='LC45'><span class="sd">	 * 	Locale code for the United States</span></div><div class='line' id='LC46'><span class="sd">	 */</span></div><div class='line' id='LC47'>	<span class="k">const</span> <span class="no">LOCALE_US</span> <span class="o">=</span> <span class="s1">&#39;us&#39;</span><span class="p">;</span></div><div class='line' id='LC48'><br/></div><div class='line' id='LC49'>	<span class="sd">/**</span></div><div class='line' id='LC50'><span class="sd">	 * Constant: LOCALE_UK</span></div><div class='line' id='LC51'><span class="sd">	 * 	Locale code for the United Kingdom</span></div><div class='line' id='LC52'><span class="sd">	 */</span></div><div class='line' id='LC53'>	<span class="k">const</span> <span class="no">LOCALE_UK</span> <span class="o">=</span> <span class="s1">&#39;uk&#39;</span><span class="p">;</span></div><div class='line' id='LC54'><br/></div><div class='line' id='LC55'>	<span class="sd">/**</span></div><div class='line' id='LC56'><span class="sd">	 * Constant: LOCALE_CANADA</span></div><div class='line' id='LC57'><span class="sd">	 * 	Locale code for Canada</span></div><div class='line' id='LC58'><span class="sd">	 */</span></div><div class='line' id='LC59'>	<span class="k">const</span> <span class="no">LOCALE_CANADA</span> <span class="o">=</span> <span class="s1">&#39;ca&#39;</span><span class="p">;</span></div><div class='line' id='LC60'><br/></div><div class='line' id='LC61'>	<span class="sd">/**</span></div><div class='line' id='LC62'><span class="sd">	 * Constant: LOCALE_FRANCE</span></div><div class='line' id='LC63'><span class="sd">	 * 	Locale code for France</span></div><div class='line' id='LC64'><span class="sd">	 */</span></div><div class='line' id='LC65'>	<span class="k">const</span> <span class="no">LOCALE_FRANCE</span> <span class="o">=</span> <span class="s1">&#39;fr&#39;</span><span class="p">;</span></div><div class='line' id='LC66'><br/></div><div class='line' id='LC67'>	<span class="sd">/**</span></div><div class='line' id='LC68'><span class="sd">	 * Constant: LOCALE_GERMANY</span></div><div class='line' id='LC69'><span class="sd">	 * 	Locale code for Germany</span></div><div class='line' id='LC70'><span class="sd">	 */</span></div><div class='line' id='LC71'>	<span class="k">const</span> <span class="no">LOCALE_GERMANY</span> <span class="o">=</span> <span class="s1">&#39;de&#39;</span><span class="p">;</span></div><div class='line' id='LC72'><br/></div><div class='line' id='LC73'>	<span class="sd">/**</span></div><div class='line' id='LC74'><span class="sd">	 * Constant: LOCALE_JAPAN</span></div><div class='line' id='LC75'><span class="sd">	 * 	Locale code for Japan</span></div><div class='line' id='LC76'><span class="sd">	 */</span></div><div class='line' id='LC77'>	<span class="k">const</span> <span class="no">LOCALE_JAPAN</span> <span class="o">=</span> <span class="s1">&#39;jp&#39;</span><span class="p">;</span></div><div class='line' id='LC78'><br/></div><div class='line' id='LC79'><br/></div><div class='line' id='LC80'>	<span class="cm">/*%******************************************************************************************%*/</span></div><div class='line' id='LC81'>	<span class="c1">// CONSTRUCTOR</span></div><div class='line' id='LC82'><br/></div><div class='line' id='LC83'>	<span class="sd">/**</span></div><div class='line' id='LC84'><span class="sd">	 * Method: __construct()</span></div><div class='line' id='LC85'><span class="sd">	 * 	The constructor</span></div><div class='line' id='LC86'><span class="sd">	 *</span></div><div class='line' id='LC87'><span class="sd">	 * Access:</span></div><div class='line' id='LC88'><span class="sd">	 * 	public</span></div><div class='line' id='LC89'><span class="sd">	 *</span></div><div class='line' id='LC90'><span class="sd">	 * Parameters:</span></div><div class='line' id='LC91'><span class="sd">	 * 	$key - _string_ (Optional) Your Amazon API Key. If blank, it will look for the &lt;AWS_KEY&gt; constant.</span></div><div class='line' id='LC92'><span class="sd">	 * 	$secret_key - _string_ (Optional) Your Amazon API Secret Key. If blank, it will look for the &lt;AWS_SECRET_KEY&gt; constant.</span></div><div class='line' id='LC93'><span class="sd">	 * 	$assoc_id - _string_ (Optional) Your Amazon Associates ID. If blank, it will look for the &lt;AWS_ASSOC_ID&gt; constant.</span></div><div class='line' id='LC94'><span class="sd">	 *</span></div><div class='line' id='LC95'><span class="sd">	 * Returns:</span></div><div class='line' id='LC96'><span class="sd">	 * 	_boolean_ false if no valid values are set, otherwise true.</span></div><div class='line' id='LC97'><span class="sd">	 */</span></div><div class='line' id='LC98'>	<span class="k">public</span> <span class="k">function</span> <span class="nf">__construct</span><span class="p">(</span><span class="nv">$key</span> <span class="o">=</span> <span class="k">null</span><span class="p">,</span> <span class="nv">$secret_key</span> <span class="o">=</span> <span class="k">null</span><span class="p">,</span> <span class="nv">$assoc_id</span> <span class="o">=</span> <span class="k">null</span><span class="p">)</span></div><div class='line' id='LC99'>	<span class="p">{</span></div><div class='line' id='LC100'>		<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">api_version</span> <span class="o">=</span> <span class="s1">&#39;2010-06-01&#39;</span><span class="p">;</span></div><div class='line' id='LC101'><br/></div><div class='line' id='LC102'>		<span class="k">if</span> <span class="p">(</span><span class="o">!</span><span class="nv">$key</span> <span class="o">&amp;&amp;</span> <span class="o">!</span><span class="nb">defined</span><span class="p">(</span><span class="s1">&#39;AWS_KEY&#39;</span><span class="p">))</span></div><div class='line' id='LC103'>		<span class="p">{</span></div><div class='line' id='LC104'>			<span class="k">throw</span> <span class="k">new</span> <span class="nx">PAS_Exception</span><span class="p">(</span><span class="s1">&#39;No account key was passed into the constructor, nor was it set in the AWS_KEY constant.&#39;</span><span class="p">);</span></div><div class='line' id='LC105'>		<span class="p">}</span></div><div class='line' id='LC106'><br/></div><div class='line' id='LC107'>		<span class="k">if</span> <span class="p">(</span><span class="o">!</span><span class="nv">$secret_key</span> <span class="o">&amp;&amp;</span> <span class="o">!</span><span class="nb">defined</span><span class="p">(</span><span class="s1">&#39;AWS_SECRET_KEY&#39;</span><span class="p">))</span></div><div class='line' id='LC108'>		<span class="p">{</span></div><div class='line' id='LC109'>			<span class="k">throw</span> <span class="k">new</span> <span class="nx">PAS_Exception</span><span class="p">(</span><span class="s1">&#39;No account secret was passed into the constructor, nor was it set in the AWS_SECRET_KEY constant.&#39;</span><span class="p">);</span></div><div class='line' id='LC110'>		<span class="p">}</span></div><div class='line' id='LC111'><br/></div><div class='line' id='LC112'>		<span class="k">if</span> <span class="p">(</span><span class="o">!</span><span class="nv">$assoc_id</span> <span class="o">&amp;&amp;</span> <span class="o">!</span><span class="nb">defined</span><span class="p">(</span><span class="s1">&#39;AWS_ASSOC_ID&#39;</span><span class="p">))</span></div><div class='line' id='LC113'>		<span class="p">{</span></div><div class='line' id='LC114'>			<span class="k">throw</span> <span class="k">new</span> <span class="nx">PAS_Exception</span><span class="p">(</span><span class="s1">&#39;No Amazon Associates ID was passed into the constructor, nor was it set in the AWS_ASSOC_ID constant.&#39;</span><span class="p">);</span></div><div class='line' id='LC115'>		<span class="p">}</span></div><div class='line' id='LC116'><br/></div><div class='line' id='LC117'>		<span class="k">return</span> <span class="k">parent</span><span class="o">::</span><span class="na">__construct</span><span class="p">(</span><span class="nv">$key</span><span class="p">,</span> <span class="nv">$secret_key</span><span class="p">,</span> <span class="k">null</span><span class="p">,</span> <span class="nv">$assoc_id</span><span class="p">);</span></div><div class='line' id='LC118'>	<span class="p">}</span></div><div class='line' id='LC119'><br/></div><div class='line' id='LC120'><br/></div><div class='line' id='LC121'>	<span class="cm">/*%******************************************************************************************%*/</span></div><div class='line' id='LC122'>	<span class="c1">// SET CUSTOM SETTINGS</span></div><div class='line' id='LC123'><br/></div><div class='line' id='LC124'>	<span class="sd">/**</span></div><div class='line' id='LC125'><span class="sd">	 * Method: set_locale()</span></div><div class='line' id='LC126'><span class="sd">	 * 	Override the default locale to use for PAS requests.</span></div><div class='line' id='LC127'><span class="sd">	 *</span></div><div class='line' id='LC128'><span class="sd">	 * Access:</span></div><div class='line' id='LC129'><span class="sd">	 * 	public</span></div><div class='line' id='LC130'><span class="sd">	 *</span></div><div class='line' id='LC131'><span class="sd">	 * Parameters:</span></div><div class='line' id='LC132'><span class="sd">	 * 	$locale - _string_ (Optional) The locale to use. Allows &lt;LOCALE_US&gt;, &lt;LOCALE_UK&gt;, &lt;LOCALE_CANADA&gt;, &lt;LOCALE_FRANCE&gt;, &lt;LOCALE_GERMANY&gt;, &lt;LOCALE_JAPAN&gt;</span></div><div class='line' id='LC133'><span class="sd">	 *</span></div><div class='line' id='LC134'><span class="sd">	 * Returns:</span></div><div class='line' id='LC135'><span class="sd">	 * 	`$this`</span></div><div class='line' id='LC136'><span class="sd">	 */</span></div><div class='line' id='LC137'>	<span class="k">public</span> <span class="k">function</span> <span class="nf">set_locale</span><span class="p">(</span><span class="nv">$locale</span> <span class="o">=</span> <span class="k">null</span><span class="p">)</span></div><div class='line' id='LC138'>	<span class="p">{</span></div><div class='line' id='LC139'>		<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">locale</span> <span class="o">=</span> <span class="nv">$locale</span><span class="p">;</span></div><div class='line' id='LC140'>		<span class="k">return</span> <span class="nv">$this</span><span class="p">;</span></div><div class='line' id='LC141'>	<span class="p">}</span></div><div class='line' id='LC142'><br/></div><div class='line' id='LC143'><br/></div><div class='line' id='LC144'>	<span class="cm">/*%******************************************************************************************%*/</span></div><div class='line' id='LC145'>	<span class="c1">// CORE FUNCTIONALITY</span></div><div class='line' id='LC146'><br/></div><div class='line' id='LC147'>	<span class="sd">/**</span></div><div class='line' id='LC148'><span class="sd">	 * Method: authenticate()</span></div><div class='line' id='LC149'><span class="sd">	 * 	Construct a URL to request from Amazon, request it, and return a formatted response.</span></div><div class='line' id='LC150'><span class="sd">	 *</span></div><div class='line' id='LC151'><span class="sd">	 * Access:</span></div><div class='line' id='LC152'><span class="sd">	 * 	public</span></div><div class='line' id='LC153'><span class="sd">	 *</span></div><div class='line' id='LC154'><span class="sd">	 * Parameters:</span></div><div class='line' id='LC155'><span class="sd">	 * 	$action - _string_ (Required) Indicates the action to perform.</span></div><div class='line' id='LC156'><span class="sd">	 * 	$opt - _array_ (Optional) Associative array of parameters. See the individual methods for allowed keys.</span></div><div class='line' id='LC157'><span class="sd">	 * 	$locale - _string_ (Optional) Which Amazon-supported locale do we use? Defaults to United States.</span></div><div class='line' id='LC158'><span class="sd">	 *</span></div><div class='line' id='LC159'><span class="sd">	 * Returns:</span></div><div class='line' id='LC160'><span class="sd">	 * 	&lt;CFResponse&gt; object</span></div><div class='line' id='LC161'><span class="sd">	 */</span></div><div class='line' id='LC162'>	<span class="k">public</span> <span class="k">function</span> <span class="nf">authenticate</span><span class="p">(</span><span class="nv">$action</span><span class="p">,</span> <span class="nv">$opt</span> <span class="o">=</span> <span class="k">null</span><span class="p">)</span></div><div class='line' id='LC163'>	<span class="p">{</span></div><div class='line' id='LC164'>		<span class="k">return</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">pas_authenticate</span><span class="p">(</span><span class="nv">$action</span><span class="p">,</span> <span class="nv">$opt</span><span class="p">);</span></div><div class='line' id='LC165'>	<span class="p">}</span></div><div class='line' id='LC166'><br/></div><div class='line' id='LC167'>	<span class="k">public</span> <span class="k">function</span> <span class="nf">pas_authenticate</span><span class="p">(</span><span class="nv">$action</span><span class="p">,</span> <span class="nv">$opt</span> <span class="o">=</span> <span class="k">null</span><span class="p">)</span></div><div class='line' id='LC168'>	<span class="p">{</span></div><div class='line' id='LC169'>		<span class="c1">// Was this set with set_locale()?</span></div><div class='line' id='LC170'>		<span class="k">if</span> <span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">locale</span> <span class="o">!==</span> <span class="k">null</span><span class="p">)</span></div><div class='line' id='LC171'>		<span class="p">{</span></div><div class='line' id='LC172'>			<span class="nv">$locale</span> <span class="o">=</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">locale</span><span class="p">;</span></div><div class='line' id='LC173'>		<span class="p">}</span></div><div class='line' id='LC174'><br/></div><div class='line' id='LC175'>		<span class="c1">// Fall back to the one set in the config file.</span></div><div class='line' id='LC176'>		<span class="k">else</span></div><div class='line' id='LC177'>		<span class="p">{</span></div><div class='line' id='LC178'>			<span class="nv">$locale</span> <span class="o">=</span> <span class="p">(</span><span class="nb">defined</span><span class="p">(</span><span class="s1">&#39;AWS_DEFAULT_LOCALE&#39;</span><span class="p">))</span> <span class="o">?</span> <span class="nx">AWS_DEFAULT_LOCALE</span> <span class="o">:</span> <span class="k">null</span><span class="p">;</span></div><div class='line' id='LC179'>		<span class="p">}</span></div><div class='line' id='LC180'><br/></div><div class='line' id='LC181'>		<span class="c1">// Determine the hostname</span></div><div class='line' id='LC182'>		<span class="k">switch</span> <span class="p">(</span><span class="nv">$locale</span><span class="p">)</span></div><div class='line' id='LC183'>		<span class="p">{</span></div><div class='line' id='LC184'>			<span class="c1">// United Kingdom</span></div><div class='line' id='LC185'>			<span class="k">case</span> <span class="nx">self</span><span class="o">::</span><span class="na">LOCALE_UK</span><span class="o">:</span></div><div class='line' id='LC186'>				<span class="nv">$hostname</span> <span class="o">=</span> <span class="s1">&#39;ecs.amazonaws.co.uk&#39;</span><span class="p">;</span></div><div class='line' id='LC187'>				<span class="k">break</span><span class="p">;</span></div><div class='line' id='LC188'><br/></div><div class='line' id='LC189'>			<span class="c1">// Canada</span></div><div class='line' id='LC190'>			<span class="k">case</span> <span class="nx">self</span><span class="o">::</span><span class="na">LOCALE_CANADA</span><span class="o">:</span></div><div class='line' id='LC191'>				<span class="nv">$hostname</span> <span class="o">=</span> <span class="s1">&#39;ecs.amazonaws.ca&#39;</span><span class="p">;</span></div><div class='line' id='LC192'>				<span class="k">break</span><span class="p">;</span></div><div class='line' id='LC193'><br/></div><div class='line' id='LC194'>			<span class="c1">// France</span></div><div class='line' id='LC195'>			<span class="k">case</span> <span class="nx">self</span><span class="o">::</span><span class="na">LOCALE_FRANCE</span><span class="o">:</span></div><div class='line' id='LC196'>				<span class="nv">$hostname</span> <span class="o">=</span> <span class="s1">&#39;ecs.amazonaws.fr&#39;</span><span class="p">;</span></div><div class='line' id='LC197'>				<span class="k">break</span><span class="p">;</span></div><div class='line' id='LC198'><br/></div><div class='line' id='LC199'>			<span class="c1">// Germany</span></div><div class='line' id='LC200'>			<span class="k">case</span> <span class="nx">self</span><span class="o">::</span><span class="na">LOCALE_GERMANY</span><span class="o">:</span></div><div class='line' id='LC201'>				<span class="nv">$hostname</span> <span class="o">=</span> <span class="s1">&#39;ecs.amazonaws.de&#39;</span><span class="p">;</span></div><div class='line' id='LC202'>				<span class="k">break</span><span class="p">;</span></div><div class='line' id='LC203'><br/></div><div class='line' id='LC204'>			<span class="c1">// Japan</span></div><div class='line' id='LC205'>			<span class="k">case</span> <span class="nx">self</span><span class="o">::</span><span class="na">LOCALE_JAPAN</span><span class="o">:</span></div><div class='line' id='LC206'>				<span class="nv">$hostname</span> <span class="o">=</span> <span class="s1">&#39;ecs.amazonaws.jp&#39;</span><span class="p">;</span></div><div class='line' id='LC207'>				<span class="k">break</span><span class="p">;</span></div><div class='line' id='LC208'><br/></div><div class='line' id='LC209'>			<span class="c1">// Default to United States</span></div><div class='line' id='LC210'>			<span class="k">default</span><span class="o">:</span></div><div class='line' id='LC211'>				<span class="nv">$hostname</span> <span class="o">=</span> <span class="s1">&#39;ecs.amazonaws.com&#39;</span><span class="p">;</span></div><div class='line' id='LC212'>				<span class="k">break</span><span class="p">;</span></div><div class='line' id='LC213'>		<span class="p">}</span></div><div class='line' id='LC214'><br/></div><div class='line' id='LC215'>		<span class="c1">// Use alternate hostname, if one exists.</span></div><div class='line' id='LC216'>		<span class="k">if</span> <span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">hostname</span><span class="p">)</span></div><div class='line' id='LC217'>		<span class="p">{</span></div><div class='line' id='LC218'>			<span class="nv">$hostname</span> <span class="o">=</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">hostname</span><span class="p">;</span></div><div class='line' id='LC219'>		<span class="p">}</span></div><div class='line' id='LC220'><br/></div><div class='line' id='LC221'>		<span class="nv">$method_arguments</span> <span class="o">=</span> <span class="nb">func_get_args</span><span class="p">();</span></div><div class='line' id='LC222'><br/></div><div class='line' id='LC223'>		<span class="c1">// Use the caching flow to determine if we need to do a round-trip to the server.</span></div><div class='line' id='LC224'>		<span class="k">if</span> <span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">use_cache_flow</span><span class="p">)</span></div><div class='line' id='LC225'>		<span class="p">{</span></div><div class='line' id='LC226'>			<span class="c1">// Generate an identifier specific to this particular set of arguments.</span></div><div class='line' id='LC227'>			<span class="nv">$cache_id</span> <span class="o">=</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">key</span> <span class="o">.</span> <span class="s1">&#39;_&#39;</span> <span class="o">.</span> <span class="nb">get_class</span><span class="p">(</span><span class="nv">$this</span><span class="p">)</span> <span class="o">.</span> <span class="s1">&#39;_&#39;</span> <span class="o">.</span> <span class="nv">$action</span> <span class="o">.</span> <span class="s1">&#39;_&#39;</span> <span class="o">.</span> <span class="nb">sha1</span><span class="p">(</span><span class="nb">serialize</span><span class="p">(</span><span class="nv">$method_arguments</span><span class="p">));</span></div><div class='line' id='LC228'><br/></div><div class='line' id='LC229'>			<span class="c1">// Instantiate the appropriate caching object.</span></div><div class='line' id='LC230'>			<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">cache_object</span> <span class="o">=</span> <span class="k">new</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">cache_class</span><span class="p">(</span><span class="nv">$cache_id</span><span class="p">,</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">cache_location</span><span class="p">,</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">cache_expires</span><span class="p">,</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">cache_compress</span><span class="p">);</span></div><div class='line' id='LC231'><br/></div><div class='line' id='LC232'>			<span class="k">if</span> <span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">delete_cache</span><span class="p">)</span></div><div class='line' id='LC233'>			<span class="p">{</span></div><div class='line' id='LC234'>				<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">use_cache_flow</span> <span class="o">=</span> <span class="k">false</span><span class="p">;</span></div><div class='line' id='LC235'>				<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">delete_cache</span> <span class="o">=</span> <span class="k">false</span><span class="p">;</span></div><div class='line' id='LC236'>				<span class="k">return</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">cache_object</span><span class="o">-&gt;</span><span class="na">delete</span><span class="p">();</span></div><div class='line' id='LC237'>			<span class="p">}</span></div><div class='line' id='LC238'><br/></div><div class='line' id='LC239'>			<span class="c1">// Invoke the cache callback function to determine whether to pull data from the cache or make a fresh request.</span></div><div class='line' id='LC240'>			<span class="nv">$data</span> <span class="o">=</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">cache_object</span><span class="o">-&gt;</span><span class="na">response_manager</span><span class="p">(</span><span class="k">array</span><span class="p">(</span><span class="nv">$this</span><span class="p">,</span> <span class="s1">&#39;cache_callback&#39;</span><span class="p">),</span> <span class="nv">$method_arguments</span><span class="p">);</span></div><div class='line' id='LC241'><br/></div><div class='line' id='LC242'>			<span class="c1">// Parse the XML body</span></div><div class='line' id='LC243'>			<span class="nv">$data</span> <span class="o">=</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">parse_callback</span><span class="p">(</span><span class="nv">$data</span><span class="p">);</span></div><div class='line' id='LC244'><br/></div><div class='line' id='LC245'>			<span class="c1">// End!</span></div><div class='line' id='LC246'>			<span class="k">return</span> <span class="nv">$data</span><span class="p">;</span></div><div class='line' id='LC247'>		<span class="p">}</span></div><div class='line' id='LC248'><br/></div><div class='line' id='LC249'>		<span class="nv">$return_curl_handle</span> <span class="o">=</span> <span class="k">false</span><span class="p">;</span></div><div class='line' id='LC250'><br/></div><div class='line' id='LC251'>		<span class="c1">// Manage the key-value pairs that are used in the query.</span></div><div class='line' id='LC252'>		<span class="nv">$query</span><span class="p">[</span><span class="s1">&#39;AWSAccessKeyId&#39;</span><span class="p">]</span> <span class="o">=</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">key</span><span class="p">;</span></div><div class='line' id='LC253'>		<span class="nv">$query</span><span class="p">[</span><span class="s1">&#39;Operation&#39;</span><span class="p">]</span> <span class="o">=</span> <span class="nv">$action</span><span class="p">;</span></div><div class='line' id='LC254'>		<span class="nv">$query</span><span class="p">[</span><span class="s1">&#39;Service&#39;</span><span class="p">]</span> <span class="o">=</span> <span class="s1">&#39;AWSECommerceService&#39;</span><span class="p">;</span></div><div class='line' id='LC255'>		<span class="nv">$query</span><span class="p">[</span><span class="s1">&#39;SignatureMethod&#39;</span><span class="p">]</span> <span class="o">=</span> <span class="s1">&#39;HmacSHA256&#39;</span><span class="p">;</span></div><div class='line' id='LC256'>		<span class="nv">$query</span><span class="p">[</span><span class="s1">&#39;SignatureVersion&#39;</span><span class="p">]</span> <span class="o">=</span> <span class="m">2</span><span class="p">;</span></div><div class='line' id='LC257'>		<span class="nv">$query</span><span class="p">[</span><span class="s1">&#39;Timestamp&#39;</span><span class="p">]</span> <span class="o">=</span> <span class="nb">gmdate</span><span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">util</span><span class="o">-&gt;</span><span class="na">konst</span><span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">util</span><span class="p">,</span> <span class="s1">&#39;DATE_FORMAT_ISO8601&#39;</span><span class="p">),</span> <span class="nb">time</span><span class="p">()</span> <span class="o">+</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">adjust_offset</span><span class="p">);</span></div><div class='line' id='LC258'>		<span class="nv">$query</span><span class="p">[</span><span class="s1">&#39;Version&#39;</span><span class="p">]</span> <span class="o">=</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">api_version</span><span class="p">;</span></div><div class='line' id='LC259'><br/></div><div class='line' id='LC260'>		<span class="c1">// Merge in any options that were passed in</span></div><div class='line' id='LC261'>		<span class="k">if</span> <span class="p">(</span><span class="nb">is_array</span><span class="p">(</span><span class="nv">$opt</span><span class="p">))</span></div><div class='line' id='LC262'>		<span class="p">{</span></div><div class='line' id='LC263'>			<span class="nv">$query</span> <span class="o">=</span> <span class="nb">array_merge</span><span class="p">(</span><span class="nv">$query</span><span class="p">,</span> <span class="nv">$opt</span><span class="p">);</span></div><div class='line' id='LC264'>		<span class="p">}</span></div><div class='line' id='LC265'><br/></div><div class='line' id='LC266'>		<span class="nv">$return_curl_handle</span> <span class="o">=</span> <span class="nb">isset</span><span class="p">(</span><span class="nv">$query</span><span class="p">[</span><span class="s1">&#39;returnCurlHandle&#39;</span><span class="p">])</span> <span class="o">?</span> <span class="nv">$query</span><span class="p">[</span><span class="s1">&#39;returnCurlHandle&#39;</span><span class="p">]</span> <span class="o">:</span> <span class="k">false</span><span class="p">;</span></div><div class='line' id='LC267'>		<span class="nb">unset</span><span class="p">(</span><span class="nv">$query</span><span class="p">[</span><span class="s1">&#39;returnCurlHandle&#39;</span><span class="p">]);</span></div><div class='line' id='LC268'><br/></div><div class='line' id='LC269'>		<span class="c1">// Do a case-sensitive, natural order sort on the array keys.</span></div><div class='line' id='LC270'>		<span class="nb">uksort</span><span class="p">(</span><span class="nv">$query</span><span class="p">,</span> <span class="s1">&#39;strcmp&#39;</span><span class="p">);</span></div><div class='line' id='LC271'><br/></div><div class='line' id='LC272'>		<span class="c1">// Create the string that needs to be hashed.</span></div><div class='line' id='LC273'>		<span class="nv">$canonical_query_string</span> <span class="o">=</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">util</span><span class="o">-&gt;</span><span class="na">to_signable_string</span><span class="p">(</span><span class="nv">$query</span><span class="p">);</span></div><div class='line' id='LC274'><br/></div><div class='line' id='LC275'>		<span class="c1">// Set the proper verb.</span></div><div class='line' id='LC276'>		<span class="nv">$verb</span> <span class="o">=</span> <span class="s1">&#39;GET&#39;</span><span class="p">;</span></div><div class='line' id='LC277'><br/></div><div class='line' id='LC278'>		<span class="c1">// Set the proper path</span></div><div class='line' id='LC279'>		<span class="nv">$path</span> <span class="o">=</span> <span class="s1">&#39;/onca/xml&#39;</span><span class="p">;</span></div><div class='line' id='LC280'><br/></div><div class='line' id='LC281'>		<span class="c1">// Prepare the string to sign</span></div><div class='line' id='LC282'>		<span class="nv">$stringToSign</span> <span class="o">=</span> <span class="s2">&quot;</span><span class="si">$verb</span><span class="se">\n</span><span class="si">$hostname</span><span class="se">\n</span><span class="si">$path</span><span class="se">\n</span><span class="si">$canonical_query_string</span><span class="s2">&quot;</span><span class="p">;</span></div><div class='line' id='LC283'><br/></div><div class='line' id='LC284'>		<span class="c1">// Hash the AWS secret key and generate a signature for the request.</span></div><div class='line' id='LC285'>		<span class="nv">$query</span><span class="p">[</span><span class="s1">&#39;Signature&#39;</span><span class="p">]</span> <span class="o">=</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">util</span><span class="o">-&gt;</span><span class="na">hex_to_base64</span><span class="p">(</span><span class="nx">hash_hmac</span><span class="p">(</span><span class="s1">&#39;sha256&#39;</span><span class="p">,</span> <span class="nv">$stringToSign</span><span class="p">,</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">secret_key</span><span class="p">));</span></div><div class='line' id='LC286'><br/></div><div class='line' id='LC287'>		<span class="c1">// Generate the querystring from $query</span></div><div class='line' id='LC288'>		<span class="nv">$querystring</span> <span class="o">=</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">util</span><span class="o">-&gt;</span><span class="na">to_query_string</span><span class="p">(</span><span class="nv">$query</span><span class="p">);</span></div><div class='line' id='LC289'><br/></div><div class='line' id='LC290'>		<span class="c1">// Gather information to pass along to other classes.</span></div><div class='line' id='LC291'>		<span class="nv">$helpers</span> <span class="o">=</span> <span class="k">array</span><span class="p">(</span></div><div class='line' id='LC292'>			<span class="s1">&#39;utilities&#39;</span> <span class="o">=&gt;</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">utilities_class</span><span class="p">,</span></div><div class='line' id='LC293'>			<span class="s1">&#39;request&#39;</span> <span class="o">=&gt;</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">request_class</span><span class="p">,</span></div><div class='line' id='LC294'>			<span class="s1">&#39;response&#39;</span> <span class="o">=&gt;</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">response_class</span><span class="p">,</span></div><div class='line' id='LC295'>		<span class="p">);</span></div><div class='line' id='LC296'><br/></div><div class='line' id='LC297'>		<span class="c1">// Compose the request.</span></div><div class='line' id='LC298'>		<span class="nv">$request_url</span> <span class="o">=</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">use_ssl</span> <span class="o">?</span> <span class="s1">&#39;https://&#39;</span> <span class="o">:</span> <span class="s1">&#39;http://&#39;</span><span class="p">;</span></div><div class='line' id='LC299'>		<span class="nv">$request_url</span> <span class="o">.=</span> <span class="nv">$hostname</span><span class="p">;</span></div><div class='line' id='LC300'>		<span class="nv">$request_url</span> <span class="o">.=</span> <span class="nv">$path</span><span class="p">;</span></div><div class='line' id='LC301'>		<span class="nv">$request_url</span> <span class="o">.=</span> <span class="s1">&#39;?&#39;</span> <span class="o">.</span> <span class="nv">$querystring</span><span class="p">;</span></div><div class='line' id='LC302'>		<span class="nv">$request</span> <span class="o">=</span> <span class="k">new</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">request_class</span><span class="p">(</span><span class="nv">$request_url</span><span class="p">,</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">proxy</span><span class="p">,</span> <span class="nv">$helpers</span><span class="p">);</span></div><div class='line' id='LC303'>		<span class="nv">$request</span><span class="o">-&gt;</span><span class="na">set_useragent</span><span class="p">(</span><span class="nx">self</span><span class="o">::</span><span class="na">USERAGENT</span><span class="p">);</span></div><div class='line' id='LC304'><br/></div><div class='line' id='LC305'>		<span class="c1">// If we have a &quot;true&quot; value for returnCurlHandle, do that instead of completing the request.</span></div><div class='line' id='LC306'>		<span class="k">if</span> <span class="p">(</span><span class="nv">$return_curl_handle</span><span class="p">)</span></div><div class='line' id='LC307'>		<span class="p">{</span></div><div class='line' id='LC308'>			<span class="k">return</span> <span class="nv">$request</span><span class="o">-&gt;</span><span class="na">prep_request</span><span class="p">();</span></div><div class='line' id='LC309'>		<span class="p">}</span></div><div class='line' id='LC310'><br/></div><div class='line' id='LC311'>		<span class="c1">// Send!</span></div><div class='line' id='LC312'>		<span class="nv">$request</span><span class="o">-&gt;</span><span class="na">send_request</span><span class="p">();</span></div><div class='line' id='LC313'><br/></div><div class='line' id='LC314'>		<span class="c1">// Prepare the response.</span></div><div class='line' id='LC315'>		<span class="nv">$headers</span> <span class="o">=</span> <span class="nv">$request</span><span class="o">-&gt;</span><span class="na">get_response_header</span><span class="p">();</span></div><div class='line' id='LC316'>		<span class="nv">$headers</span><span class="p">[</span><span class="s1">&#39;x-aws-requesturl&#39;</span><span class="p">]</span> <span class="o">=</span> <span class="nv">$request_url</span><span class="p">;</span></div><div class='line' id='LC317'>		<span class="nv">$headers</span><span class="p">[</span><span class="s1">&#39;x-aws-stringtosign&#39;</span><span class="p">]</span> <span class="o">=</span> <span class="nv">$stringToSign</span><span class="p">;</span></div><div class='line' id='LC318'><br/></div><div class='line' id='LC319'>		<span class="k">return</span> <span class="k">new</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">response_class</span><span class="p">(</span><span class="nv">$headers</span><span class="p">,</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">parse_callback</span><span class="p">(</span><span class="nv">$request</span><span class="o">-&gt;</span><span class="na">get_response_body</span><span class="p">()),</span> <span class="nv">$request</span><span class="o">-&gt;</span><span class="na">get_response_code</span><span class="p">());</span></div><div class='line' id='LC320'>	<span class="p">}</span></div><div class='line' id='LC321'><br/></div><div class='line' id='LC322'><br/></div><div class='line' id='LC323'>	<span class="cm">/*%******************************************************************************************%*/</span></div><div class='line' id='LC324'>	<span class="c1">// BROWSE NODE LOOKUP</span></div><div class='line' id='LC325'><br/></div><div class='line' id='LC326'>	<span class="sd">/**</span></div><div class='line' id='LC327'><span class="sd">	 * Method: browse_node_lookup()</span></div><div class='line' id='LC328'><span class="sd">	 * 	Given a browse node ID, &lt;browse_node_lookup()&gt; returns the specified browse node&#39;s name, children, and ancestors. The names and browse node IDs of the children and ancestor browse nodes are also returned. &lt;browse_node_lookup()&gt; enables you to traverse the browse node hierarchy to find a browse node.</span></div><div class='line' id='LC329'><span class="sd">	 *</span></div><div class='line' id='LC330'><span class="sd">	 * 	If you added your Associates ID to the config.inc.php file, or you passed it into the AmazonPAS() constructor, it will be passed along in this request automatically.</span></div><div class='line' id='LC331'><span class="sd">	 *</span></div><div class='line' id='LC332'><span class="sd">	 * Access:</span></div><div class='line' id='LC333'><span class="sd">	 * 	public</span></div><div class='line' id='LC334'><span class="sd">	 *</span></div><div class='line' id='LC335'><span class="sd">	 * Parameters:</span></div><div class='line' id='LC336'><span class="sd">	 * 	$browse_node_id - _integer_ (Required) A positive integer assigned by Amazon that uniquely identifies a product category.</span></div><div class='line' id='LC337'><span class="sd">	 * 	$opt - _array_ (Optional) Associative array of parameters which can have the following keys:</span></div><div class='line' id='LC338'><span class="sd">	 *</span></div><div class='line' id='LC339'><span class="sd">	 * Keys for the $opt parameter:</span></div><div class='line' id='LC340'><span class="sd">	 * 	THIS IS AN INCOMPLETE LIST. For the latest information, check the AWS documentation page (noted below), or run the &lt;help()&gt; method (noted in the examples below).</span></div><div class='line' id='LC341'><span class="sd">	 *</span></div><div class='line' id='LC342'><span class="sd">	 * 	ContentType - _string_ (Optional) Specifies the format of the content in the response. Generally, ContentType should only be changed for REST requests when the Style parameter is set to an XSLT stylesheet. For example, to transform your Amazon Associates Web Service response into HTML, set ContentType to text/html. Allows &#39;text/xml&#39; and &#39;text/html&#39;. Defaults to &#39;text/xml&#39;.</span></div><div class='line' id='LC343'><span class="sd">	 * 	MerchantId - _string_ (Optional) An alphanumeric token distributed by Amazon that uniquely identifies a merchant. Allows &#39;All&#39;, &#39;Amazon&#39;, &#39;FeaturedBuyBoxMerchant&#39;, or a specific Merchant ID. Defaults to &#39;Amazon&#39;.</span></div><div class='line' id='LC344'><span class="sd">	 * 	ResponseGroup - _string_ (Optional) Specifies the types of values to return. You can specify multiple response groups in one request by separating them with commas. Allows &#39;BrowseNodeInfo&#39; (default), &#39;NewReleases&#39;, &#39;TopSellers&#39;.</span></div><div class='line' id='LC345'><span class="sd">	 * 	returnCurlHandle - _boolean_ (Optional) A private toggle that will return the CURL handle for the request rather than actually completing the request. This is useful for MultiCURL requests.</span></div><div class='line' id='LC346'><span class="sd">	 * 	Style - _string_ (Optional) Controls the format of the data returned in Amazon Associates Web Service responses. Set this parameter to &quot;XML,&quot; the default, to generate a pure XML response. Set this parameter to the URL of an XSLT stylesheet to have Amazon Associates Web Service transform the XML response. See ContentType.</span></div><div class='line' id='LC347'><span class="sd">	 * 	Validate - _boolean_ (Optional) Prevents an operation from executing. Set the Validate parameter to True to test your request without actually executing it. When present, Validate must equal True; the default value is False. If a request is not actually executed (Validate=True), only a subset of the errors for a request may be returned because some errors (for example, no_exact_matches) are only generated during the execution of a request. Defaults to FALSE.</span></div><div class='line' id='LC348'><span class="sd">	 * 	XMLEscaping - _string_ (Optional) Specifies whether responses are XML-encoded in a single pass or a double pass. By default, XMLEscaping is Single, and Amazon Associates Web Service responses are encoded only once in XML. For example, if the response data includes an ampersand character (&amp;), the character is returned in its regular XML encoding (&amp;). If XMLEscaping is Double, the same ampersand character is XML-encoded twice (&amp;amp;). The Double value for XMLEscaping is useful in some clients, such as PHP, that do not decode text within XML elements. Defaults to &#39;Single&#39;.</span></div><div class='line' id='LC349'><span class="sd">	 *</span></div><div class='line' id='LC350'><span class="sd">	 * Returns:</span></div><div class='line' id='LC351'><span class="sd">	 * 	&lt;CFResponse&gt; object</span></div><div class='line' id='LC352'><span class="sd">	 *</span></div><div class='line' id='LC353'><span class="sd">	 * See Also:</span></div><div class='line' id='LC354'><span class="sd">	 * 	[BrowseNodeLookup Operation](http://docs.amazonwebservices.com/AWSECommerceService/latest/DG/BrowseNodeLookup.html)</span></div><div class='line' id='LC355'><span class="sd">	 */</span></div><div class='line' id='LC356'>	<span class="k">public</span> <span class="k">function</span> <span class="nf">browse_node_lookup</span><span class="p">(</span><span class="nv">$browse_node_id</span><span class="p">,</span> <span class="nv">$opt</span> <span class="o">=</span> <span class="k">null</span><span class="p">)</span></div><div class='line' id='LC357'>	<span class="p">{</span></div><div class='line' id='LC358'>		<span class="k">if</span> <span class="p">(</span><span class="o">!</span><span class="nv">$opt</span><span class="p">)</span> <span class="nv">$opt</span> <span class="o">=</span> <span class="k">array</span><span class="p">();</span></div><div class='line' id='LC359'>		<span class="nv">$opt</span><span class="p">[</span><span class="s1">&#39;BrowseNodeId&#39;</span><span class="p">]</span> <span class="o">=</span> <span class="nv">$browse_node_id</span><span class="p">;</span></div><div class='line' id='LC360'><br/></div><div class='line' id='LC361'>		<span class="k">if</span> <span class="p">(</span><span class="nb">isset</span><span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">assoc_id</span><span class="p">))</span></div><div class='line' id='LC362'>		<span class="p">{</span></div><div class='line' id='LC363'>			<span class="nv">$opt</span><span class="p">[</span><span class="s1">&#39;AssociateTag&#39;</span><span class="p">]</span> <span class="o">=</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">assoc_id</span><span class="p">;</span></div><div class='line' id='LC364'>		<span class="p">}</span></div><div class='line' id='LC365'><br/></div><div class='line' id='LC366'>		<span class="k">return</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">pas_authenticate</span><span class="p">(</span><span class="s1">&#39;BrowseNodeLookup&#39;</span><span class="p">,</span> <span class="nv">$opt</span><span class="p">);</span></div><div class='line' id='LC367'>	<span class="p">}</span></div><div class='line' id='LC368'><br/></div><div class='line' id='LC369'><br/></div><div class='line' id='LC370'>	<span class="cm">/*%******************************************************************************************%*/</span></div><div class='line' id='LC371'>	<span class="c1">// CART METHODS</span></div><div class='line' id='LC372'><br/></div><div class='line' id='LC373'>	<span class="sd">/**</span></div><div class='line' id='LC374'><span class="sd">	 * Method: cart_add()</span></div><div class='line' id='LC375'><span class="sd">	 * 	Enables you to add items to an existing remote shopping cart. &lt;cart_add()&gt; can only be used to place a new item in a shopping cart. It cannot be used to increase the quantity of an item already in the cart. If you would like to increase the quantity of an item that is already in the cart, you must use the &lt;cart_modify()&gt; operation.</span></div><div class='line' id='LC376'><span class="sd">	 *</span></div><div class='line' id='LC377'><span class="sd">	 * 	You add an item to a cart by specifying the item&#39;s OfferListingId, or ASIN and ListItemId. Once in a cart, an item can only be identified by its CartItemId. That is, an item in a cart cannot be accessed by its ASIN or OfferListingId. CartItemId is returned by &lt;cart_create()&gt;, &lt;cart_get()&gt;, and &lt;cart_add()&gt;.</span></div><div class='line' id='LC378'><span class="sd">	 *</span></div><div class='line' id='LC379'><span class="sd">	 * 	To add items to a cart, you must specify the cart using the CartId and HMAC values, which are returned by the &lt;cart_create()&gt; operation.</span></div><div class='line' id='LC380'><span class="sd">	 *</span></div><div class='line' id='LC381'><span class="sd">	 * 	If you added your Associates ID to the config.inc.php file, or you passed it into the AmazonPAS() constructor, it will be passed along in this request automatically.</span></div><div class='line' id='LC382'><span class="sd">	 *</span></div><div class='line' id='LC383'><span class="sd">	 * Access:</span></div><div class='line' id='LC384'><span class="sd">	 * 	public</span></div><div class='line' id='LC385'><span class="sd">	 *</span></div><div class='line' id='LC386'><span class="sd">	 * Parameters:</span></div><div class='line' id='LC387'><span class="sd">	 * 	$cart_id - _string_ (Required) Alphanumeric token returned by &lt;cart_create()&gt; that identifies a cart.</span></div><div class='line' id='LC388'><span class="sd">	 * 	$hmac - _string_ (Required) Encrypted alphanumeric token returned by &lt;cart_create()&gt; that authorizes access to a cart.</span></div><div class='line' id='LC389'><span class="sd">	 * 	$offer_listing_id - _string_|_array_ (Required) Either a string containing the Offer ID to add, or an associative array where the Offer ID is the key and the quantity is the value. An offer listing ID is an alphanumeric token that uniquely identifies an item. Use the OfferListingId instead of an item&#39;s ASIN to add the item to the cart.</span></div><div class='line' id='LC390'><span class="sd">	 * 	$opt - _array_ (Optional) Associative array of parameters which can have the following keys:</span></div><div class='line' id='LC391'><span class="sd">	 *</span></div><div class='line' id='LC392'><span class="sd">	 * Keys for the $opt parameter:</span></div><div class='line' id='LC393'><span class="sd">	 * 	THIS IS AN INCOMPLETE LIST. For the latest information, check the AWS documentation page (noted below), or run the &lt;help()&gt; method (noted in the examples below).</span></div><div class='line' id='LC394'><span class="sd">	 *</span></div><div class='line' id='LC395'><span class="sd">	 * 	ContentType - _string_ (Optional) Specifies the format of the content in the response. Generally, ContentType should only be changed for REST requests when the Style parameter is set to an XSLT stylesheet. For example, to transform your Amazon Associates Web Service response into HTML, set ContentType to text/html. Allows &#39;text/xml&#39; and &#39;text/html&#39;. Defaults to &#39;text/xml&#39;.</span></div><div class='line' id='LC396'><span class="sd">	 * 	MergeCart - _boolean_ (Optional) A boolean value that when True specifies that the items in a customer&#39;s remote shopping cart are added to the customer&#39;s Amazon retail shopping cart. This occurs when the customer elects to purchase the items in their remote shopping cart. When the value is False the remote shopping cart contents are not added to the retail shopping cart. Instead, the customer is sent directly to the Order Pipeline when they elect to purchase the items in their cart. This parameter is valid only in the US locale. In all other locales, the parameter is invalid but the request behaves as though the value were set to True.</span></div><div class='line' id='LC397'><span class="sd">	 * 	MerchantId - _string_ (Optional) An alphanumeric token distributed by Amazon that uniquely identifies a merchant. Allows &#39;All&#39;, &#39;Amazon&#39;, &#39;FeaturedBuyBoxMerchant&#39;, or a specific Merchant ID. Defaults to &#39;Amazon&#39;.</span></div><div class='line' id='LC398'><span class="sd">	 * 	ResponseGroup - _string_ (Optional) Specifies the types of values to return. You can specify multiple response groups in one request by separating them with commas.</span></div><div class='line' id='LC399'><span class="sd">	 * 	returnCurlHandle - _boolean_ (Optional) A private toggle that will return the CURL handle for the request rather than actually completing the request. This is useful for MultiCURL requests.</span></div><div class='line' id='LC400'><span class="sd">	 * 	Style - _string_ (Optional) Controls the format of the data returned in Amazon Associates Web Service responses. Set this parameter to &quot;XML,&quot; the default, to generate a pure XML response. Set this parameter to the URL of an XSLT stylesheet to have Amazon Associates Web Service transform the XML response. See ContentType.</span></div><div class='line' id='LC401'><span class="sd">	 * 	Validate - _boolean_ (Optional) Prevents an operation from executing. Set the Validate parameter to True to test your request without actually executing it. When present, Validate must equal True; the default value is False. If a request is not actually executed (Validate=True), only a subset of the errors for a request may be returned because some errors (for example, no_exact_matches) are only generated during the execution of a request. Defaults to FALSE.</span></div><div class='line' id='LC402'><span class="sd">	 * 	XMLEscaping - _string_ (Optional) Specifies whether responses are XML-encoded in a single pass or a double pass. By default, XMLEscaping is Single, and Amazon Associates Web Service responses are encoded only once in XML. For example, if the response data includes an ampersand character (&amp;), the character is returned in its regular XML encoding (&amp;). If XMLEscaping is Double, the same ampersand character is XML-encoded twice (&amp;amp;). The Double value for XMLEscaping is useful in some clients, such as PHP, that do not decode text within XML elements. Defaults to &#39;Single&#39;.</span></div><div class='line' id='LC403'><span class="sd"> 	 *</span></div><div class='line' id='LC404'><span class="sd">	 * Returns:</span></div><div class='line' id='LC405'><span class="sd">	 * 	&lt;CFResponse&gt; object</span></div><div class='line' id='LC406'><span class="sd">	 *</span></div><div class='line' id='LC407'><span class="sd">	 * See Also:</span></div><div class='line' id='LC408'><span class="sd">	 * 	[CartAdd Operation](http://docs.amazonwebservices.com/AWSECommerceService/latest/DG/CartAdd.html)</span></div><div class='line' id='LC409'><span class="sd">	 */</span></div><div class='line' id='LC410'>	<span class="k">public</span> <span class="k">function</span> <span class="nf">cart_add</span><span class="p">(</span><span class="nv">$cart_id</span><span class="p">,</span> <span class="nv">$hmac</span><span class="p">,</span> <span class="nv">$offer_listing_id</span><span class="p">,</span> <span class="nv">$opt</span> <span class="o">=</span> <span class="k">null</span><span class="p">)</span></div><div class='line' id='LC411'>	<span class="p">{</span></div><div class='line' id='LC412'>		<span class="k">if</span> <span class="p">(</span><span class="o">!</span><span class="nv">$opt</span><span class="p">)</span> <span class="nv">$opt</span> <span class="o">=</span> <span class="k">array</span><span class="p">();</span></div><div class='line' id='LC413'>		<span class="nv">$opt</span><span class="p">[</span><span class="s1">&#39;CartId&#39;</span><span class="p">]</span> <span class="o">=</span> <span class="nv">$cart_id</span><span class="p">;</span></div><div class='line' id='LC414'>		<span class="nv">$opt</span><span class="p">[</span><span class="s1">&#39;HMAC&#39;</span><span class="p">]</span> <span class="o">=</span> <span class="nv">$hmac</span><span class="p">;</span></div><div class='line' id='LC415'><br/></div><div class='line' id='LC416'>		<span class="k">if</span> <span class="p">(</span><span class="nb">is_array</span><span class="p">(</span><span class="nv">$offer_listing_id</span><span class="p">))</span></div><div class='line' id='LC417'>		<span class="p">{</span></div><div class='line' id='LC418'>			<span class="nv">$count</span> <span class="o">=</span> <span class="m">1</span><span class="p">;</span></div><div class='line' id='LC419'>			<span class="k">foreach</span> <span class="p">(</span><span class="nv">$offer_listing_id</span> <span class="k">as</span> <span class="nv">$offer</span> <span class="o">=&gt;</span> <span class="nv">$quantity</span><span class="p">)</span></div><div class='line' id='LC420'>			<span class="p">{</span></div><div class='line' id='LC421'>				<span class="nv">$opt</span><span class="p">[</span><span class="s1">&#39;Item.&#39;</span> <span class="o">.</span> <span class="nv">$count</span> <span class="o">.</span> <span class="s1">&#39;.OfferListingId&#39;</span><span class="p">]</span> <span class="o">=</span> <span class="nv">$offer</span><span class="p">;</span></div><div class='line' id='LC422'>				<span class="nv">$opt</span><span class="p">[</span><span class="s1">&#39;Item.&#39;</span> <span class="o">.</span> <span class="nv">$count</span> <span class="o">.</span> <span class="s1">&#39;.Quantity&#39;</span><span class="p">]</span> <span class="o">=</span> <span class="nv">$quantity</span><span class="p">;</span></div><div class='line' id='LC423'><br/></div><div class='line' id='LC424'>				<span class="nv">$count</span><span class="o">++</span><span class="p">;</span></div><div class='line' id='LC425'>			<span class="p">}</span></div><div class='line' id='LC426'>		<span class="p">}</span></div><div class='line' id='LC427'>		<span class="k">else</span></div><div class='line' id='LC428'>		<span class="p">{</span></div><div class='line' id='LC429'>			<span class="nv">$opt</span><span class="p">[</span><span class="s1">&#39;Item.1.OfferListingId&#39;</span><span class="p">]</span> <span class="o">=</span> <span class="nv">$offer_listing_id</span><span class="p">;</span></div><div class='line' id='LC430'>			<span class="nv">$opt</span><span class="p">[</span><span class="s1">&#39;Item.1.Quantity&#39;</span><span class="p">]</span> <span class="o">=</span> <span class="m">1</span><span class="p">;</span></div><div class='line' id='LC431'>		<span class="p">}</span></div><div class='line' id='LC432'><br/></div><div class='line' id='LC433'>		<span class="k">if</span> <span class="p">(</span><span class="nb">isset</span><span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">assoc_id</span><span class="p">))</span></div><div class='line' id='LC434'>		<span class="p">{</span></div><div class='line' id='LC435'>			<span class="nv">$opt</span><span class="p">[</span><span class="s1">&#39;AssociateTag&#39;</span><span class="p">]</span> <span class="o">=</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">assoc_id</span><span class="p">;</span></div><div class='line' id='LC436'>		<span class="p">}</span></div><div class='line' id='LC437'><br/></div><div class='line' id='LC438'>		<span class="k">return</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">pas_authenticate</span><span class="p">(</span><span class="s1">&#39;CartAdd&#39;</span><span class="p">,</span> <span class="nv">$opt</span><span class="p">);</span></div><div class='line' id='LC439'>	<span class="p">}</span></div><div class='line' id='LC440'><br/></div><div class='line' id='LC441'>	<span class="sd">/**</span></div><div class='line' id='LC442'><span class="sd">	 * Method: cart_clear()</span></div><div class='line' id='LC443'><span class="sd">	 * 	Enables you to remove all of the items in a remote shopping cart, including SavedForLater items. To remove only some of the items in a cart or to reduce the quantity of one or more items, use &lt;cart_modify()&gt;.</span></div><div class='line' id='LC444'><span class="sd">	 *</span></div><div class='line' id='LC445'><span class="sd">	 * 	To delete all of the items from a remote shopping cart, you must specify the cart using the CartId and HMAC values, which are returned by the &lt;cart_create()&gt; operation. A value similar to the HMAC, URLEncodedHMAC, is also returned. This value is the URL encoded version of the HMAC. This encoding is necessary because some characters, such as + and /, cannot be included in a URL. Rather than encoding the HMAC yourself, use the URLEncodedHMAC value for the HMAC parameter.</span></div><div class='line' id='LC446'><span class="sd">	 *</span></div><div class='line' id='LC447'><span class="sd">	 * 	&lt;cart_clear()&gt; does not work after the customer has used the PurchaseURL to either purchase the items or merge them with the items in their Amazon cart. Carts exist even though they have been emptied. The lifespan of a cart is 7 days since the last time it was acted upon. For example, if a cart created 6 days ago is modified, the cart lifespan is reset to 7 days.</span></div><div class='line' id='LC448'><span class="sd">	 *</span></div><div class='line' id='LC449'><span class="sd">	 * 	If you added your Associates ID to the config.inc.php file, or you passed it into the AmazonPAS() constructor, it will be passed along in this request automatically.</span></div><div class='line' id='LC450'><span class="sd">	 *</span></div><div class='line' id='LC451'><span class="sd">	 * Access:</span></div><div class='line' id='LC452'><span class="sd">	 * 	public</span></div><div class='line' id='LC453'><span class="sd">	 *</span></div><div class='line' id='LC454'><span class="sd">	 * Parameters:</span></div><div class='line' id='LC455'><span class="sd">	 * 	$cart_id - _string_ (Required) Alphanumeric token returned by &lt;cart_create()&gt; that identifies a cart.</span></div><div class='line' id='LC456'><span class="sd">	 * 	$hmac - _string_ (Required) Encrypted alphanumeric token returned by &lt;cart_create()&gt; that authorizes access to a cart.</span></div><div class='line' id='LC457'><span class="sd">	 * 	$opt - _array_ (Optional) Associative array of parameters which can have the following keys:</span></div><div class='line' id='LC458'><span class="sd">	 *</span></div><div class='line' id='LC459'><span class="sd">	 * Keys for the $opt parameter:</span></div><div class='line' id='LC460'><span class="sd">	 * 	THIS IS AN INCOMPLETE LIST. For the latest information, check the AWS documentation page (noted below), or run the &lt;help()&gt; method (noted in the examples below).</span></div><div class='line' id='LC461'><span class="sd">	 *</span></div><div class='line' id='LC462'><span class="sd">	 * 	ContentType - _string_ (Optional) Specifies the format of the content in the response. Generally, ContentType should only be changed for REST requests when the Style parameter is set to an XSLT stylesheet. For example, to transform your Amazon Associates Web Service response into HTML, set ContentType to text/html. Allows &#39;text/xml&#39; and &#39;text/html&#39;. Defaults to &#39;text/xml&#39;.</span></div><div class='line' id='LC463'><span class="sd">	 * 	MergeCart - _boolean_ (Optional) A boolean value that when True specifies that the items in a customer&#39;s remote shopping cart are added to the customer&#39;s Amazon retail shopping cart. This occurs when the customer elects to purchase the items in their remote shopping cart. When the value is False the remote shopping cart contents are not added to the retail shopping cart. Instead, the customer is sent directly to the Order Pipeline when they elect to purchase the items in their cart. This parameter is valid only in the US locale. In all other locales, the parameter is invalid but the request behaves as though the value were set to True.</span></div><div class='line' id='LC464'><span class="sd">	 * 	MerchantId - _string_ (Optional) An alphanumeric token distributed by Amazon that uniquely identifies a merchant. Allows &#39;All&#39;, &#39;Amazon&#39;, &#39;FeaturedBuyBoxMerchant&#39;, or a specific Merchant ID. Defaults to &#39;Amazon&#39;.</span></div><div class='line' id='LC465'><span class="sd">	 * 	ResponseGroup - _string_ (Optional) Specifies the types of values to return. You can specify multiple response groups in one request by separating them with commas.</span></div><div class='line' id='LC466'><span class="sd">	 * 	returnCurlHandle - _boolean_ (Optional) A private toggle that will return the CURL handle for the request rather than actually completing the request. This is useful for MultiCURL requests.</span></div><div class='line' id='LC467'><span class="sd">	 * 	Style - _string_ (Optional) Controls the format of the data returned in Amazon Associates Web Service responses. Set this parameter to &quot;XML,&quot; the default, to generate a pure XML response. Set this parameter to the URL of an XSLT stylesheet to have Amazon Associates Web Service transform the XML response. See ContentType.</span></div><div class='line' id='LC468'><span class="sd">	 * 	Validate - _boolean_ (Optional) Prevents an operation from executing. Set the Validate parameter to True to test your request without actually executing it. When present, Validate must equal True; the default value is False. If a request is not actually executed (Validate=True), only a subset of the errors for a request may be returned because some errors (for example, no_exact_matches) are only generated during the execution of a request. Defaults to FALSE.</span></div><div class='line' id='LC469'><span class="sd">	 * 	XMLEscaping - _string_ (Optional) Specifies whether responses are XML-encoded in a single pass or a double pass. By default, XMLEscaping is Single, and Amazon Associates Web Service responses are encoded only once in XML. For example, if the response data includes an ampersand character (&amp;), the character is returned in its regular XML encoding (&amp;). If XMLEscaping is Double, the same ampersand character is XML-encoded twice (&amp;amp;). The Double value for XMLEscaping is useful in some clients, such as PHP, that do not decode text within XML elements. Defaults to &#39;Single&#39;.</span></div><div class='line' id='LC470'><span class="sd">	 *</span></div><div class='line' id='LC471'><span class="sd">	 * Returns:</span></div><div class='line' id='LC472'><span class="sd">	 * 	&lt;CFResponse&gt; object</span></div><div class='line' id='LC473'><span class="sd">	 *</span></div><div class='line' id='LC474'><span class="sd">	 * See Also:</span></div><div class='line' id='LC475'><span class="sd">	 * 	[CartClear](http://docs.amazonwebservices.com/AWSECommerceService/latest/DG/CartClear.html)</span></div><div class='line' id='LC476'><span class="sd">	 */</span></div><div class='line' id='LC477'>	<span class="k">public</span> <span class="k">function</span> <span class="nf">cart_clear</span><span class="p">(</span><span class="nv">$cart_id</span><span class="p">,</span> <span class="nv">$hmac</span><span class="p">,</span> <span class="nv">$opt</span> <span class="o">=</span> <span class="k">null</span><span class="p">)</span></div><div class='line' id='LC478'>	<span class="p">{</span></div><div class='line' id='LC479'>		<span class="k">if</span> <span class="p">(</span><span class="o">!</span><span class="nv">$opt</span><span class="p">)</span> <span class="nv">$opt</span> <span class="o">=</span> <span class="k">array</span><span class="p">();</span></div><div class='line' id='LC480'>		<span class="nv">$opt</span><span class="p">[</span><span class="s1">&#39;CartId&#39;</span><span class="p">]</span> <span class="o">=</span> <span class="nv">$cart_id</span><span class="p">;</span></div><div class='line' id='LC481'>		<span class="nv">$opt</span><span class="p">[</span><span class="s1">&#39;HMAC&#39;</span><span class="p">]</span> <span class="o">=</span> <span class="nv">$hmac</span><span class="p">;</span></div><div class='line' id='LC482'><br/></div><div class='line' id='LC483'>		<span class="k">if</span> <span class="p">(</span><span class="nb">isset</span><span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">assoc_id</span><span class="p">))</span></div><div class='line' id='LC484'>		<span class="p">{</span></div><div class='line' id='LC485'>			<span class="nv">$opt</span><span class="p">[</span><span class="s1">&#39;AssociateTag&#39;</span><span class="p">]</span> <span class="o">=</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">assoc_id</span><span class="p">;</span></div><div class='line' id='LC486'>		<span class="p">}</span></div><div class='line' id='LC487'><br/></div><div class='line' id='LC488'>		<span class="k">return</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">pas_authenticate</span><span class="p">(</span><span class="s1">&#39;CartClear&#39;</span><span class="p">,</span> <span class="nv">$opt</span><span class="p">);</span></div><div class='line' id='LC489'>	<span class="p">}</span></div><div class='line' id='LC490'><br/></div><div class='line' id='LC491'>	<span class="sd">/**</span></div><div class='line' id='LC492'><span class="sd">	 * Method: cart_create()</span></div><div class='line' id='LC493'><span class="sd">	 * 	Enables you to create a remote shopping cart. A shopping cart is the metaphor used by most e-commerce solutions. It is a temporary data storage structure that resides on Amazon servers. The structure contains the items a customer wants to buy. In Amazon Associates Web Service, the shopping cart is considered remote because it is hosted by Amazon servers. In this way, the cart is remote to the vendor&#39;s web site where the customer views and selects the items they want to purchase.</span></div><div class='line' id='LC494'><span class="sd">	 *</span></div><div class='line' id='LC495'><span class="sd">	 * 	Once you add an item to a cart by specifying the item&#39;s ListItemId and ASIN, or OfferListing ID, the item is assigned a CartItemId and accessible only by that value. That is, in subsequent requests, an item in a cart cannot be accessed by its ListItemId and ASIN, or OfferListingId.</span></div><div class='line' id='LC496'><span class="sd">	 *</span></div><div class='line' id='LC497'><span class="sd">	 * 	Because the contents of a cart can change for different reasons, such as item availability, you should not keep a copy of a cart locally. Instead, use the other cart operations to modify the cart contents. For example, to retrieve contents of the cart, which are represented by CartItemIds, use &lt;cart_get()&gt;.</span></div><div class='line' id='LC498'><span class="sd">	 *</span></div><div class='line' id='LC499'><span class="sd">	 * 	Available products are added as cart items. Unavailable items, for example, items out of stock, discontinued, or future releases, are added as SaveForLaterItems. No error is generated. The Amazon database changes regularly. You may find a product with an offer listing ID but by the time the item is added to the cart the product is no longer available. The checkout page in the Order Pipeline clearly lists items that are available and those that are SaveForLaterItems.</span></div><div class='line' id='LC500'><span class="sd">	 *</span></div><div class='line' id='LC501'><span class="sd">	 * 	It is impossible to create an empty shopping cart. You have to add at least one item to a shopping cart using a single &lt;cart_create()&gt; request. You can add specific quantities (up to 999) of each item. &lt;cart_create()&gt; can be used only once in the life cycle of a cart. To modify the contents of the cart, use one of the other cart operations.</span></div><div class='line' id='LC502'><span class="sd">	 *</span></div><div class='line' id='LC503'><span class="sd">	 * 	Carts cannot be deleted. They expire automatically after being unused for 7 days. The lifespan of a cart restarts, however, every time a cart is modified. In this way, a cart can last for more than 7 days. If, for example, on day 6, the customer modifies a cart, the 7 day countdown starts over.</span></div><div class='line' id='LC504'><span class="sd">	 *</span></div><div class='line' id='LC505'><span class="sd">	 * 	If you added your Associates ID to the config.inc.php file, or you passed it into the AmazonPAS() constructor, it will be passed along in this request automatically.</span></div><div class='line' id='LC506'><span class="sd">	 *</span></div><div class='line' id='LC507'><span class="sd">	 * Access:</span></div><div class='line' id='LC508'><span class="sd">	 * 	public</span></div><div class='line' id='LC509'><span class="sd">	 *</span></div><div class='line' id='LC510'><span class="sd">	 * Parameters:</span></div><div class='line' id='LC511'><span class="sd">	 * 	$offer_listing_id - _string|array_ (Required) Either a string containing the Offer ID to add, or an associative array where the Offer ID is the key and the quantity is the value. An offer listing ID is an alphanumeric token that uniquely identifies an item. Use the OfferListingId instead of an item&#39;s ASIN to add the item to the cart.</span></div><div class='line' id='LC512'><span class="sd">	 * 	$opt - _array_ (Optional) Associative array of parameters which can have the following keys:</span></div><div class='line' id='LC513'><span class="sd">	 *</span></div><div class='line' id='LC514'><span class="sd">	 * Keys for the $opt parameter:</span></div><div class='line' id='LC515'><span class="sd">	 * 	THIS IS AN INCOMPLETE LIST. For the latest information, check the AWS documentation page (noted below), or run the &lt;help()&gt; method (noted in the examples below).</span></div><div class='line' id='LC516'><span class="sd">	 *</span></div><div class='line' id='LC517'><span class="sd">	 * 	ContentType - _string_ (Optional) Specifies the format of the content in the response. Generally, ContentType should only be changed for REST requests when the Style parameter is set to an XSLT stylesheet. For example, to transform your Amazon Associates Web Service response into HTML, set ContentType to text/html. Allows &#39;text/xml&#39; and &#39;text/html&#39;. Defaults to &#39;text/xml&#39;.</span></div><div class='line' id='LC518'><span class="sd">	 * 	MergeCart - _boolean_ (Optional) A boolean value that when True specifies that the items in a customer&#39;s remote shopping cart are added to the customer&#39;s Amazon retail shopping cart. This occurs when the customer elects to purchase the items in their remote shopping cart. When the value is False the remote shopping cart contents are not added to the retail shopping cart. Instead, the customer is sent directly to the Order Pipeline when they elect to purchase the items in their cart. This parameter is valid only in the US locale. In all other locales, the parameter is invalid but the request behaves as though the value were set to True.</span></div><div class='line' id='LC519'><span class="sd">	 * 	MerchantId - _string_ (Optional) An alphanumeric token distributed by Amazon that uniquely identifies a merchant. Allows &#39;All&#39;, &#39;Amazon&#39;, &#39;FeaturedBuyBoxMerchant&#39;, or a specific Merchant ID. Defaults to &#39;Amazon&#39;.</span></div><div class='line' id='LC520'><span class="sd">	 * 	ResponseGroup - _string_ (Optional) Specifies the types of values to return. You can specify multiple response groups in one request by separating them with commas.</span></div><div class='line' id='LC521'><span class="sd">	 * 	returnCurlHandle - _boolean_ (Optional) A private toggle that will return the CURL handle for the request rather than actually completing the request. This is useful for MultiCURL requests.</span></div><div class='line' id='LC522'><span class="sd">	 * 	Style - _string_ (Optional) Controls the format of the data returned in Amazon Associates Web Service responses. Set this parameter to &quot;XML,&quot; the default, to generate a pure XML response. Set this parameter to the URL of an XSLT stylesheet to have Amazon Associates Web Service transform the XML response. See ContentType.</span></div><div class='line' id='LC523'><span class="sd">	 * 	Validate - _boolean_ (Optional) Prevents an operation from executing. Set the Validate parameter to True to test your request without actually executing it. When present, Validate must equal True; the default value is False. If a request is not actually executed (Validate=True), only a subset of the errors for a request may be returned because some errors (for example, no_exact_matches) are only generated during the execution of a request. Defaults to FALSE.</span></div><div class='line' id='LC524'><span class="sd">	 * 	XMLEscaping - _string_ (Optional) Specifies whether responses are XML-encoded in a single pass or a double pass. By default, XMLEscaping is Single, and Amazon Associates Web Service responses are encoded only once in XML. For example, if the response data includes an ampersand character (&amp;), the character is returned in its regular XML encoding (&amp;). If XMLEscaping is Double, the same ampersand character is XML-encoded twice (&amp;amp;). The Double value for XMLEscaping is useful in some clients, such as PHP, that do not decode text within XML elements. Defaults to &#39;Single&#39;.</span></div><div class='line' id='LC525'><span class="sd">	 *</span></div><div class='line' id='LC526'><span class="sd">	 * Returns:</span></div><div class='line' id='LC527'><span class="sd">	 * 	&lt;CFResponse&gt; object</span></div><div class='line' id='LC528'><span class="sd">	 *</span></div><div class='line' id='LC529'><span class="sd">	 * See Also:</span></div><div class='line' id='LC530'><span class="sd">	 * 	[CartCreate](http://docs.amazonwebservices.com/AWSECommerceService/latest/DG/CartCreate.html)</span></div><div class='line' id='LC531'><span class="sd">	 */</span></div><div class='line' id='LC532'>	<span class="k">public</span> <span class="k">function</span> <span class="nf">cart_create</span><span class="p">(</span><span class="nv">$offer_listing_id</span><span class="p">,</span> <span class="nv">$opt</span> <span class="o">=</span> <span class="k">null</span><span class="p">)</span></div><div class='line' id='LC533'>	<span class="p">{</span></div><div class='line' id='LC534'>		<span class="k">if</span> <span class="p">(</span><span class="o">!</span><span class="nv">$opt</span><span class="p">)</span> <span class="nv">$opt</span> <span class="o">=</span> <span class="k">array</span><span class="p">();</span></div><div class='line' id='LC535'><br/></div><div class='line' id='LC536'>		<span class="k">if</span> <span class="p">(</span><span class="nb">is_array</span><span class="p">(</span><span class="nv">$offer_listing_id</span><span class="p">))</span></div><div class='line' id='LC537'>		<span class="p">{</span></div><div class='line' id='LC538'>			<span class="nv">$count</span> <span class="o">=</span> <span class="m">1</span><span class="p">;</span></div><div class='line' id='LC539'>			<span class="k">foreach</span> <span class="p">(</span><span class="nv">$offer_listing_id</span> <span class="k">as</span> <span class="nv">$offer</span> <span class="o">=&gt;</span> <span class="nv">$quantity</span><span class="p">)</span></div><div class='line' id='LC540'>			<span class="p">{</span></div><div class='line' id='LC541'>				<span class="nv">$opt</span><span class="p">[</span><span class="s1">&#39;Item.&#39;</span> <span class="o">.</span> <span class="nv">$count</span> <span class="o">.</span> <span class="s1">&#39;.OfferListingId&#39;</span><span class="p">]</span> <span class="o">=</span> <span class="nv">$offer</span><span class="p">;</span></div><div class='line' id='LC542'>				<span class="nv">$opt</span><span class="p">[</span><span class="s1">&#39;Item.&#39;</span> <span class="o">.</span> <span class="nv">$count</span> <span class="o">.</span> <span class="s1">&#39;.Quantity&#39;</span><span class="p">]</span> <span class="o">=</span> <span class="nv">$quantity</span><span class="p">;</span></div><div class='line' id='LC543'><br/></div><div class='line' id='LC544'>				<span class="nv">$count</span><span class="o">++</span><span class="p">;</span></div><div class='line' id='LC545'>			<span class="p">}</span></div><div class='line' id='LC546'>		<span class="p">}</span></div><div class='line' id='LC547'>		<span class="k">else</span></div><div class='line' id='LC548'>		<span class="p">{</span></div><div class='line' id='LC549'>			<span class="nv">$opt</span><span class="p">[</span><span class="s1">&#39;Item.1.OfferListingId&#39;</span><span class="p">]</span> <span class="o">=</span> <span class="nv">$offer_listing_id</span><span class="p">;</span></div><div class='line' id='LC550'>			<span class="nv">$opt</span><span class="p">[</span><span class="s1">&#39;Item.1.Quantity&#39;</span><span class="p">]</span> <span class="o">=</span> <span class="m">1</span><span class="p">;</span></div><div class='line' id='LC551'>		<span class="p">}</span></div><div class='line' id='LC552'><br/></div><div class='line' id='LC553'>		<span class="k">if</span> <span class="p">(</span><span class="nb">isset</span><span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">assoc_id</span><span class="p">))</span></div><div class='line' id='LC554'>		<span class="p">{</span></div><div class='line' id='LC555'>			<span class="nv">$opt</span><span class="p">[</span><span class="s1">&#39;AssociateTag&#39;</span><span class="p">]</span> <span class="o">=</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">assoc_id</span><span class="p">;</span></div><div class='line' id='LC556'>		<span class="p">}</span></div><div class='line' id='LC557'><br/></div><div class='line' id='LC558'>		<span class="k">return</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">pas_authenticate</span><span class="p">(</span><span class="s1">&#39;CartCreate&#39;</span><span class="p">,</span> <span class="nv">$opt</span><span class="p">);</span></div><div class='line' id='LC559'>	<span class="p">}</span></div><div class='line' id='LC560'><br/></div><div class='line' id='LC561'>	<span class="sd">/**</span></div><div class='line' id='LC562'><span class="sd">	 * Method: cart_get()</span></div><div class='line' id='LC563'><span class="sd">	 * 	Enables you to retrieve the IDs, quantities, and prices of all of the items, including SavedForLater items in a remote shopping cart.</span></div><div class='line' id='LC564'><span class="sd">	 *</span></div><div class='line' id='LC565'><span class="sd">	 * 	Because the contents of a cart can change for different reasons, such as availability, you should not keep a copy of a cart locally. Instead, use &lt;cart_get()&gt; to retrieve the items in a remote shopping cart. To retrieve the items in a cart, you must specify the cart using the CartId and HMAC values, which are returned in the &lt;cart_create()&gt; operation. A value similar to HMAC, URLEncodedHMAC, is also returned.</span></div><div class='line' id='LC566'><span class="sd">	 *</span></div><div class='line' id='LC567'><span class="sd">	 * 	This value is the URL encoded version of the HMAC. This encoding is necessary because some characters, such as + and /, cannot be included in a URL. Rather than encoding the HMAC yourself, use the URLEncodedHMAC value for the HMAC parameter.</span></div><div class='line' id='LC568'><span class="sd">	 *</span></div><div class='line' id='LC569'><span class="sd">	 * 	&lt;cart_get()&gt; does not work after the customer has used the PurchaseURL to either purchase the items or merge them with the items in their Amazon cart.</span></div><div class='line' id='LC570'><span class="sd">	 *</span></div><div class='line' id='LC571'><span class="sd">	 * Access:</span></div><div class='line' id='LC572'><span class="sd">	 * 	public</span></div><div class='line' id='LC573'><span class="sd">	 *</span></div><div class='line' id='LC574'><span class="sd">	 * Parameters:</span></div><div class='line' id='LC575'><span class="sd">	 * 	$cart_id - _string_ (Required) Alphanumeric token returned by &lt;cart_create()&gt; that identifies a cart.</span></div><div class='line' id='LC576'><span class="sd">	 * 	$hmac - _string_ (Required) Encrypted alphanumeric token returned by &lt;cart_create()&gt; that authorizes access to a cart.</span></div><div class='line' id='LC577'><span class="sd">	 * 	$opt - _array_ (Optional) Associative array of parameters which can have the following keys:</span></div><div class='line' id='LC578'><span class="sd">	 *</span></div><div class='line' id='LC579'><span class="sd">	 * Keys for the $opt parameter:</span></div><div class='line' id='LC580'><span class="sd">	 * 	THIS IS AN INCOMPLETE LIST. For the latest information, check the AWS documentation page (noted below), or run the &lt;help()&gt; method (noted in the examples below).</span></div><div class='line' id='LC581'><span class="sd">	 *</span></div><div class='line' id='LC582'><span class="sd">	 * 	CartItemId - _string_ (Optional) Alphanumeric token that uniquely identifies an item in a cart. Once an item, specified by an ASIN or OfferListingId, has been added to a cart, you must use the CartItemId to refer to it. The other identifiers will not work.</span></div><div class='line' id='LC583'><span class="sd">	 * 	ContentType - _string_ (Optional) Specifies the format of the content in the response. Generally, ContentType should only be changed for REST requests when the Style parameter is set to an XSLT stylesheet. For example, to transform your Amazon Associates Web Service response into HTML, set ContentType to text/html. Allows &#39;text/xml&#39; and &#39;text/html&#39;. Defaults to &#39;text/xml&#39;.</span></div><div class='line' id='LC584'><span class="sd">	 * 	MergeCart - _boolean_ (Optional) A boolean value that when True specifies that the items in a customer&#39;s remote shopping cart are added to the customer&#39;s Amazon retail shopping cart. This occurs when the customer elects to purchase the items in their remote shopping cart. When the value is False the remote shopping cart contents are not added to the retail shopping cart. Instead, the customer is sent directly to the Order Pipeline when they elect to purchase the items in their cart. This parameter is valid only in the US locale. In all other locales, the parameter is invalid but the request behaves as though the value were set to True.</span></div><div class='line' id='LC585'><span class="sd">	 * 	MerchantId - _string_ (Optional) An alphanumeric token distributed by Amazon that uniquely identifies a merchant. Allows &#39;All&#39;, &#39;Amazon&#39;, &#39;FeaturedBuyBoxMerchant&#39;, or a specific Merchant ID. Defaults to &#39;Amazon&#39;.</span></div><div class='line' id='LC586'><span class="sd">	 * 	ResponseGroup - _string_ (Optional) Specifies the types of values to return. You can specify multiple response groups in one request by separating them with commas.</span></div><div class='line' id='LC587'><span class="sd">	 * 	returnCurlHandle - _boolean_ (Optional) A private toggle that will return the CURL handle for the request rather than actually completing the request. This is useful for MultiCURL requests.</span></div><div class='line' id='LC588'><span class="sd">	 * 	Style - _string_ (Optional) Controls the format of the data returned in Amazon Associates Web Service responses. Set this parameter to &quot;XML,&quot; the default, to generate a pure XML response. Set this parameter to the URL of an XSLT stylesheet to have Amazon Associates Web Service transform the XML response. See ContentType.</span></div><div class='line' id='LC589'><span class="sd">	 * 	Validate - _boolean_ (Optional) Prevents an operation from executing. Set the Validate parameter to True to test your request without actually executing it. When present, Validate must equal True; the default value is False. If a request is not actually executed (Validate=True), only a subset of the errors for a request may be returned because some errors (for example, no_exact_matches) are only generated during the execution of a request. Defaults to FALSE.</span></div><div class='line' id='LC590'><span class="sd">	 * 	XMLEscaping - _string_ (Optional) Specifies whether responses are XML-encoded in a single pass or a double pass. By default, XMLEscaping is Single, and Amazon Associates Web Service responses are encoded only once in XML. For example, if the response data includes an ampersand character (&amp;), the character is returned in its regular XML encoding (&amp;). If XMLEscaping is Double, the same ampersand character is XML-encoded twice (&amp;amp;). The Double value for XMLEscaping is useful in some clients, such as PHP, that do not decode text within XML elements. Defaults to &#39;Single&#39;.</span></div><div class='line' id='LC591'><span class="sd">	 *</span></div><div class='line' id='LC592'><span class="sd">	 * Returns:</span></div><div class='line' id='LC593'><span class="sd">	 * 	&lt;CFResponse&gt; object</span></div><div class='line' id='LC594'><span class="sd">	 *</span></div><div class='line' id='LC595'><span class="sd">	 * See Also:</span></div><div class='line' id='LC596'><span class="sd">	 * 	[CartGet Operation](http://docs.amazonwebservices.com/AWSECommerceService/latest/DG/CartGet.html)</span></div><div class='line' id='LC597'><span class="sd">	 */</span></div><div class='line' id='LC598'>	<span class="k">public</span> <span class="k">function</span> <span class="nf">cart_get</span><span class="p">(</span><span class="nv">$cart_id</span><span class="p">,</span> <span class="nv">$hmac</span><span class="p">,</span> <span class="nv">$opt</span> <span class="o">=</span> <span class="k">null</span><span class="p">)</span></div><div class='line' id='LC599'>	<span class="p">{</span></div><div class='line' id='LC600'>		<span class="k">if</span> <span class="p">(</span><span class="o">!</span><span class="nv">$opt</span><span class="p">)</span> <span class="nv">$opt</span> <span class="o">=</span> <span class="k">array</span><span class="p">();</span></div><div class='line' id='LC601'>		<span class="nv">$opt</span><span class="p">[</span><span class="s1">&#39;CartId&#39;</span><span class="p">]</span> <span class="o">=</span> <span class="nv">$cart_id</span><span class="p">;</span></div><div class='line' id='LC602'>		<span class="nv">$opt</span><span class="p">[</span><span class="s1">&#39;HMAC&#39;</span><span class="p">]</span> <span class="o">=</span> <span class="nv">$hmac</span><span class="p">;</span></div><div class='line' id='LC603'><br/></div><div class='line' id='LC604'>		<span class="k">if</span> <span class="p">(</span><span class="nb">isset</span><span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">assoc_id</span><span class="p">))</span></div><div class='line' id='LC605'>		<span class="p">{</span></div><div class='line' id='LC606'>			<span class="nv">$opt</span><span class="p">[</span><span class="s1">&#39;AssociateTag&#39;</span><span class="p">]</span> <span class="o">=</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">assoc_id</span><span class="p">;</span></div><div class='line' id='LC607'>		<span class="p">}</span></div><div class='line' id='LC608'><br/></div><div class='line' id='LC609'>		<span class="k">return</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">pas_authenticate</span><span class="p">(</span><span class="s1">&#39;CartGet&#39;</span><span class="p">,</span> <span class="nv">$opt</span><span class="p">);</span></div><div class='line' id='LC610'>	<span class="p">}</span></div><div class='line' id='LC611'><br/></div><div class='line' id='LC612'>	<span class="sd">/**</span></div><div class='line' id='LC613'><span class="sd">	 * Method: cart_modify()</span></div><div class='line' id='LC614'><span class="sd">	 * 	Enables you to change the quantity of items that are already in a remote shopping cart, move items from the active area of a cart to the SaveForLater area or the reverse, and change the MergeCart setting.</span></div><div class='line' id='LC615'><span class="sd">	 *</span></div><div class='line' id='LC616'><span class="sd">	 * 	To modify the number of items in a cart, you must specify the cart using the CartId and HMAC values that are returned in the &lt;cart_create()&gt; operation. A value similar to HMAC, URLEncodedHMAC, is also returned. This value is the URL encoded version of the HMAC. This encoding is necessary because some characters, such as + and /, cannot be included in a URL. Rather than encoding the HMAC yourself, use the URLEncodedHMAC value for the HMAC parameter.</span></div><div class='line' id='LC617'><span class="sd">	 *</span></div><div class='line' id='LC618'><span class="sd">	 * 	You can use &lt;cart_modify()&gt; to modify the number of items in a remote shopping cart by setting the value of the Quantity parameter appropriately. You can eliminate an item from a cart by setting the value of the Quantity parameter to zero. Or, you can double the number of a particular item in the cart by doubling its Quantity. You cannot, however, use &lt;cart_modify()&gt; to add new items to a cart.</span></div><div class='line' id='LC619'><span class="sd">	 *</span></div><div class='line' id='LC620'><span class="sd">	 * Access:</span></div><div class='line' id='LC621'><span class="sd">	 * 	public</span></div><div class='line' id='LC622'><span class="sd">	 *</span></div><div class='line' id='LC623'><span class="sd">	 * Parameters:</span></div><div class='line' id='LC624'><span class="sd">	 * 	$cart_id - _string_ (Required) Alphanumeric token returned by &lt;cart_create()&gt; that identifies a cart.</span></div><div class='line' id='LC625'><span class="sd">	 * 	$hmac - _string_ (Required) Encrypted alphanumeric token returned by &lt;cart_create()&gt; that authorizes access to a cart.</span></div><div class='line' id='LC626'><span class="sd">	 * 	$cart_item_id - _array_ (Required) Associative array that specifies an item to be modified in the cart where N is a positive integer between 1 and 10, inclusive. Up to ten items can be modified at a time. CartItemId is neither an ASIN nor an OfferListingId. It is, instead, an alphanumeric token returned by &lt;cart_create()&gt; and &lt;cart_add()&gt;. This parameter is used in conjunction with Item.N.Quantity to modify the number of items in a cart. Also, instead of adjusting the quantity, you can set &#39;SaveForLater&#39; or &#39;MoveToCart&#39; as actions instead.</span></div><div class='line' id='LC627'><span class="sd">	 * 	$opt - _array_ (Optional) Associative array of parameters which can have the following keys:</span></div><div class='line' id='LC628'><span class="sd">	 *</span></div><div class='line' id='LC629'><span class="sd">	 * Keys for the $opt parameter:</span></div><div class='line' id='LC630'><span class="sd">	 * 	THIS IS AN INCOMPLETE LIST. For the latest information, check the AWS documentation page (noted below), or run the &lt;help()&gt; method (noted in the examples below).</span></div><div class='line' id='LC631'><span class="sd">	 *</span></div><div class='line' id='LC632'><span class="sd">	 * 	Action - _string_ (Optional) Change cart items to move items to the Saved-For-Later area, or change Saved-For- Later (SaveForLater) items to the active cart area (MoveToCart).</span></div><div class='line' id='LC633'><span class="sd">	 * 	ContentType - _string_ (Optional) Specifies the format of the content in the response. Generally, ContentType should only be changed for REST requests when the Style parameter is set to an XSLT stylesheet. For example, to transform your Amazon Associates Web Service response into HTML, set ContentType to text/html. Allows &#39;text/xml&#39; and &#39;text/html&#39;. Defaults to &#39;text/xml&#39;.</span></div><div class='line' id='LC634'><span class="sd">	 * 	ListItemId - _string_ (Optional) The ListItemId parameter is returned by the ListItems response group. The parameter identifies an item on a list, such as a wishlist. To add this item to a cart, you must include in the &lt;cart_create()&gt; request the item&#39;s ASIN and ListItemId. The ListItemId includes the name and address of the list owner, which the ASIN alone does not.</span></div><div class='line' id='LC635'><span class="sd">	 * 	MergeCart - _boolean_ (Optional) A boolean value that when True specifies that the items in a customer&#39;s remote shopping cart are added to the customer&#39;s Amazon retail shopping cart. This occurs when the customer elects to purchase the items in their remote shopping cart. When the value is False the remote shopping cart contents are not added to the retail shopping cart. Instead, the customer is sent directly to the Order Pipeline when they elect to purchase the items in their cart. This parameter is valid only in the US locale. In all other locales, the parameter is invalid but the request behaves as though the value were set to True.</span></div><div class='line' id='LC636'><span class="sd">	 * 	MerchantId - _string_ (Optional) An alphanumeric token distributed by Amazon that uniquely identifies a merchant. Allows &#39;All&#39;, &#39;Amazon&#39;, &#39;FeaturedBuyBoxMerchant&#39;, or a specific Merchant ID. Defaults to &#39;Amazon&#39;.</span></div><div class='line' id='LC637'><span class="sd">	 * 	ResponseGroup - _string_ (Optional) Specifies the types of values to return. You can specify multiple response groups in one request by separating them with commas.</span></div><div class='line' id='LC638'><span class="sd">	 * 	returnCurlHandle - _boolean_ (Optional) A private toggle that will return the CURL handle for the request rather than actually completing the request. This is useful for MultiCURL requests.</span></div><div class='line' id='LC639'><span class="sd">	 * 	Style - _string_ (Optional) Controls the format of the data returned in Amazon Associates Web Service responses. Set this parameter to &quot;XML,&quot; the default, to generate a pure XML response. Set this parameter to the URL of an XSLT stylesheet to have Amazon Associates Web Service transform the XML response. See ContentType.</span></div><div class='line' id='LC640'><span class="sd">	 * 	Validate - _boolean_ (Optional) Prevents an operation from executing. Set the Validate parameter to True to test your request without actually executing it. When present, Validate must equal True; the default value is False. If a request is not actually executed (Validate=True), only a subset of the errors for a request may be returned because some errors (for example, no_exact_matches) are only generated during the execution of a request. Defaults to FALSE.</span></div><div class='line' id='LC641'><span class="sd">	 * 	XMLEscaping - _string_ (Optional) Specifies whether responses are XML-encoded in a single pass or a double pass. By default, XMLEscaping is Single, and Amazon Associates Web Service responses are encoded only once in XML. For example, if the response data includes an ampersand character (&amp;), the character is returned in its regular XML encoding (&amp;). If XMLEscaping is Double, the same ampersand character is XML-encoded twice (&amp;amp;). The Double value for XMLEscaping is useful in some clients, such as PHP, that do not decode text within XML elements. Defaults to &#39;Single&#39;.</span></div><div class='line' id='LC642'><span class="sd">	 *</span></div><div class='line' id='LC643'><span class="sd">	 * Returns:</span></div><div class='line' id='LC644'><span class="sd">	 * 	&lt;CFResponse&gt; object</span></div><div class='line' id='LC645'><span class="sd">	 *</span></div><div class='line' id='LC646'><span class="sd">	 * See Also:</span></div><div class='line' id='LC647'><span class="sd">	 * 	[CartModify Operation](http://docs.amazonwebservices.com/AWSECommerceService/latest/DG/CartModify.html)</span></div><div class='line' id='LC648'><span class="sd">	 */</span></div><div class='line' id='LC649'>	<span class="k">public</span> <span class="k">function</span> <span class="nf">cart_modify</span><span class="p">(</span><span class="nv">$cart_id</span><span class="p">,</span> <span class="nv">$hmac</span><span class="p">,</span> <span class="nv">$cart_item_id</span><span class="p">,</span> <span class="nv">$opt</span> <span class="o">=</span> <span class="k">null</span><span class="p">)</span></div><div class='line' id='LC650'>	<span class="p">{</span></div><div class='line' id='LC651'>		<span class="k">if</span> <span class="p">(</span><span class="o">!</span><span class="nv">$opt</span><span class="p">)</span> <span class="nv">$opt</span> <span class="o">=</span> <span class="k">array</span><span class="p">();</span></div><div class='line' id='LC652'>		<span class="nv">$opt</span><span class="p">[</span><span class="s1">&#39;CartId&#39;</span><span class="p">]</span> <span class="o">=</span> <span class="nv">$cart_id</span><span class="p">;</span></div><div class='line' id='LC653'>		<span class="nv">$opt</span><span class="p">[</span><span class="s1">&#39;HMAC&#39;</span><span class="p">]</span> <span class="o">=</span> <span class="nv">$hmac</span><span class="p">;</span></div><div class='line' id='LC654'><br/></div><div class='line' id='LC655'>		<span class="k">if</span> <span class="p">(</span><span class="nb">is_array</span><span class="p">(</span><span class="nv">$cart_item_id</span><span class="p">))</span></div><div class='line' id='LC656'>		<span class="p">{</span></div><div class='line' id='LC657'>			<span class="nv">$count</span> <span class="o">=</span> <span class="m">1</span><span class="p">;</span></div><div class='line' id='LC658'>			<span class="k">foreach</span> <span class="p">(</span><span class="nv">$cart_item_id</span> <span class="k">as</span> <span class="nv">$offer</span> <span class="o">=&gt;</span> <span class="nv">$quantity</span><span class="p">)</span></div><div class='line' id='LC659'>			<span class="p">{</span></div><div class='line' id='LC660'>				<span class="nv">$action</span> <span class="o">=</span> <span class="nb">is_numeric</span><span class="p">(</span><span class="nv">$quantity</span><span class="p">)</span> <span class="o">?</span> <span class="s1">&#39;Quantity&#39;</span> <span class="o">:</span> <span class="s1">&#39;Action&#39;</span><span class="p">;</span></div><div class='line' id='LC661'><br/></div><div class='line' id='LC662'>				<span class="nv">$opt</span><span class="p">[</span><span class="s1">&#39;Item.&#39;</span> <span class="o">.</span> <span class="nv">$count</span> <span class="o">.</span> <span class="s1">&#39;.CartItemId&#39;</span><span class="p">]</span> 	<span class="o">=</span> <span class="nv">$offer</span><span class="p">;</span></div><div class='line' id='LC663'>				<span class="nv">$opt</span><span class="p">[</span><span class="s1">&#39;Item.&#39;</span> <span class="o">.</span> <span class="nv">$count</span> <span class="o">.</span> <span class="s1">&#39;.&#39;</span> <span class="o">.</span> <span class="nv">$action</span><span class="p">]</span> 		<span class="o">=</span> <span class="nv">$quantity</span><span class="p">;</span></div><div class='line' id='LC664'><br/></div><div class='line' id='LC665'>				<span class="nv">$count</span><span class="o">++</span><span class="p">;</span></div><div class='line' id='LC666'>			<span class="p">}</span></div><div class='line' id='LC667'>		<span class="p">}</span></div><div class='line' id='LC668'>		<span class="k">else</span></div><div class='line' id='LC669'>		<span class="p">{</span></div><div class='line' id='LC670'>			<span class="k">throw</span> <span class="k">new</span> <span class="nx">PAS_Exception</span><span class="p">(</span><span class="s1">&#39;$cart_item_id MUST be an array. See the &#39;</span> <span class="o">.</span> <span class="nx">self</span><span class="o">::</span><span class="na">NAME</span> <span class="o">.</span> <span class="s1">&#39; documentation for more details.&#39;</span><span class="p">);</span></div><div class='line' id='LC671'>		<span class="p">}</span></div><div class='line' id='LC672'><br/></div><div class='line' id='LC673'>		<span class="k">if</span> <span class="p">(</span><span class="nb">isset</span><span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">assoc_id</span><span class="p">))</span></div><div class='line' id='LC674'>		<span class="p">{</span></div><div class='line' id='LC675'>			<span class="nv">$opt</span><span class="p">[</span><span class="s1">&#39;AssociateTag&#39;</span><span class="p">]</span> <span class="o">=</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">assoc_id</span><span class="p">;</span></div><div class='line' id='LC676'>		<span class="p">}</span></div><div class='line' id='LC677'><br/></div><div class='line' id='LC678'>		<span class="k">return</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">pas_authenticate</span><span class="p">(</span><span class="s1">&#39;CartModify&#39;</span><span class="p">,</span> <span class="nv">$opt</span><span class="p">);</span></div><div class='line' id='LC679'>	<span class="p">}</span></div><div class='line' id='LC680'><br/></div><div class='line' id='LC681'><br/></div><div class='line' id='LC682'>	<span class="cm">/*%******************************************************************************************%*/</span></div><div class='line' id='LC683'>	<span class="c1">// ITEM METHODS</span></div><div class='line' id='LC684'><br/></div><div class='line' id='LC685'>	<span class="sd">/**</span></div><div class='line' id='LC686'><span class="sd">	 * Method: item_lookup()</span></div><div class='line' id='LC687'><span class="sd">	 * 	Given an Item identifier, the ItemLookup operation returns some or all of the item attributes, depending on the response group specified in the request. By default, &lt;item_lookup()&gt; returns an item’s ASIN, DetailPageURL, Manufacturer, ProductGroup, and Title of the item.</span></div><div class='line' id='LC688'><span class="sd">	 *</span></div><div class='line' id='LC689'><span class="sd">	 * 	If you added your Associates ID to the config.inc.php file, or you passed it into the AmazonPAS() constructor, it will be passed along in this request automatically.</span></div><div class='line' id='LC690'><span class="sd">	 *</span></div><div class='line' id='LC691'><span class="sd">	 * Access:</span></div><div class='line' id='LC692'><span class="sd">	 * 	public</span></div><div class='line' id='LC693'><span class="sd">	 *</span></div><div class='line' id='LC694'><span class="sd">	 * Parameters:</span></div><div class='line' id='LC695'><span class="sd">	 * 	$item_id - _string_ (Required) A positive integer that unique identifies an item. The meaning of the number is specified by IdType. That is, if IdType is ASIN, the ItemId value is an ASIN. If ItemId is an ASIN, a search index cannot be specified in the request.</span></div><div class='line' id='LC696'><span class="sd">	 * 	$opt - _array_ (Optional) Associative array of parameters which can have the following keys:</span></div><div class='line' id='LC697'><span class="sd">	 *</span></div><div class='line' id='LC698'><span class="sd">	 * Keys for the $opt parameter:</span></div><div class='line' id='LC699'><span class="sd">	 * 	THIS IS AN INCOMPLETE LIST. For the latest information, check the AWS documentation page (noted below), or run the &lt;help()&gt; method (noted in the examples below).</span></div><div class='line' id='LC700'><span class="sd">	 *</span></div><div class='line' id='LC701'><span class="sd">	 * 	Condition - _string_ (Optional) Specifies an item&#39;s condition. If Condition is set to &quot;All,&quot; a separate set of responses is returned for each valid value of Condition. The default value is &quot;New&quot; (not &quot;All&quot;). So, if your request does not return results, consider setting the value to &quot;All.&quot; When the value is &quot;New,&quot; the ItemSearch Availability parameter cannot be set to &quot;Available.&quot; Amazon only sells items that are &quot;New.&quot; Allows &#39;New&#39;, &#39;Used&#39;, &#39;Collectible&#39;, &#39;Refurbished&#39;, and &#39;All&#39;. Defaults to &#39;New&#39;.</span></div><div class='line' id='LC702'><span class="sd">	 * 	ContentType - _string_ (Optional) Specifies the format of the content in the response. Generally, ContentType should only be changed for REST requests when the Style parameter is set to an XSLT stylesheet. For example, to transform your Amazon Associates Web Service response into HTML, set ContentType to text/html. Allows &#39;text/xml&#39; and &#39;text/html&#39;. Defaults to &#39;text/xml&#39;.</span></div><div class='line' id='LC703'><span class="sd">	 * 	IdType - _string_ (Optional) Type of item identifier used to look up an item. All IdTypes except ASINx require a SearchIndex to be specified. SKU requires a MerchantId to be specified also. Allows &#39;ASIN&#39;, &#39;SKU&#39;, &#39;UPC&#39;, &#39;EAN&#39;, &#39;ISBN&#39; (US only, when search index is Books), and &#39;JAN&#39;. UPC is not valid in the Canadian locale. Defaults to &#39;ASIN&#39;.</span></div><div class='line' id='LC704'><span class="sd">	 * 	MerchantId - _string_ (Optional) An alphanumeric token distributed by Amazon that uniquely identifies a merchant. Allows &#39;All&#39;, &#39;Amazon&#39;, &#39;FeaturedBuyBoxMerchant&#39;, or a specific Merchant ID. Defaults to &#39;Amazon&#39;.</span></div><div class='line' id='LC705'><span class="sd">	 * 	OfferPage - _string_ (Optional) Page of offers returned. There are 10 offers per page. To examine offers 11 trough 20, for example, set OfferPage to 2. Allows 1 through 100.</span></div><div class='line' id='LC706'><span class="sd">	 * 	RelatedItemsPage - _integer_ (Optional) This optional parameter is only valid when the RelatedItems response group is used. Each ItemLookup request can return, at most, ten related items. The RelatedItemsPage value specifies the set of ten related items to return. A value of 2, for example, returns the second set of ten related items.</span></div><div class='line' id='LC707'><span class="sd">	 * 	RelationshipType - _string_ (Optional) This parameter is required when the RelatedItems response group is used. The type of related item returned is specified by the RelationshipType parameter. Sample values include Episode, Season, and Tracks. For a complete list of types, go to the documentation for &quot;Relationship Types&quot;. Required when &#39;RelatedItems&#39; response group is used.</span></div><div class='line' id='LC708'><span class="sd">	 * 	ResponseGroup - _string_ (Optional) Specifies the types of values to return. You can specify multiple response groups in one request by separating them with commas. Check the documentation for all allowed values.</span></div><div class='line' id='LC709'><span class="sd">	 * 	returnCurlHandle - _boolean_ (Optional) A private toggle that will return the CURL handle for the request rather than actually completing the request. This is useful for MultiCURL requests.</span></div><div class='line' id='LC710'><span class="sd">	 * 	ReviewPage - _integer_ (Optional) Page of reviews returned. There are 5 reviews per page. To examine reviews 6 through 10, for example, set ReviewPage to 2. Allows 1 through 20.</span></div><div class='line' id='LC711'><span class="sd">	 * 	ReviewSort - _string_ (Optional) Specifies the order in which Reviews are sorted in the return. Allows &#39;-HelpfulVotes&#39;, &#39;HelpfulVotes&#39;, &#39;-OverallRating&#39;, &#39;OverallRating&#39;, &#39;SubmissionDate&#39; and &#39;-SubmissionDate&#39;. Defaults to &#39;-SubmissionDate&#39;.</span></div><div class='line' id='LC712'><span class="sd">	 * 	SearchIndex - _string_ (Optional) The product category to search. Constraint: If ItemIds an ASIN, a search index cannot be specified in the request. Required for for non-ASIN ItemIds. Allows any valid search index. See the &quot;Search Indices&quot; documentation page for more details.</span></div><div class='line' id='LC713'><span class="sd">	 * 	Style - _string_ (Optional) Controls the format of the data returned in Amazon Associates Web Service responses. Set this parameter to &quot;XML,&quot; the default, to generate a pure XML response. Set this parameter to the URL of an XSLT stylesheet to have Amazon Associates Web Service transform the XML response. See ContentType.</span></div><div class='line' id='LC714'><span class="sd">	 * 	TagPage - _integer_ (Optional) Specifies the page of results to return. There are ten results on a page. Allows 1 through 400.</span></div><div class='line' id='LC715'><span class="sd">	 * 	TagsPerPage - _integer_ (Optional) The number of tags to return that are associated with a specified item.</span></div><div class='line' id='LC716'><span class="sd">	 * 	TagSort - _string_ (Optional) Specifies the sorting order for the results. Allows &#39;FirstUsed&#39;, &#39;-FirstUsed&#39;, &#39;LastUsed&#39;, &#39;-LastUsed&#39;, &#39;Name&#39;, &#39;-Name&#39;, &#39;Usages&#39;, and &#39;-Usages&#39;. Defaults to &#39;-Usages&#39;.</span></div><div class='line' id='LC717'><span class="sd">	 * 	Validate - _boolean_ (Optional) Prevents an operation from executing. Set the Validate parameter to True to test your request without actually executing it. When present, Validate must equal True; the default value is False. If a request is not actually executed (Validate=True), only a subset of the errors for a request may be returned because some errors (for example, no_exact_matches) are only generated during the execution of a request. Defaults to FALSE.</span></div><div class='line' id='LC718'><span class="sd">	 * 	VariationPage - _string_ (Optional) Page number of variations returned by ItemLookup. By default, ItemLookup returns all variations. Use VariationPage to return a subsection of the response. There are 10 variations per page. To examine offers 11 trough 20, for example, set VariationPage to 2. Allows 1 through 150.</span></div><div class='line' id='LC719'><span class="sd">	 * 	XMLEscaping - _string_ (Optional) Specifies whether responses are XML-encoded in a single pass or a double pass. By default, XMLEscaping is Single, and Amazon Associates Web Service responses are encoded only once in XML. For example, if the response data includes an ampersand character (&amp;), the character is returned in its regular XML encoding (&amp;). If XMLEscaping is Double, the same ampersand character is XML-encoded twice (&amp;amp;). The Double value for XMLEscaping is useful in some clients, such as PHP, that do not decode text within XML elements. Defaults to &#39;Single&#39;.</span></div><div class='line' id='LC720'><span class="sd">	 *</span></div><div class='line' id='LC721'><span class="sd">	 * Returns:</span></div><div class='line' id='LC722'><span class="sd">	 * 	&lt;CFResponse&gt; object</span></div><div class='line' id='LC723'><span class="sd">	 *</span></div><div class='line' id='LC724'><span class="sd">	 * See Also:</span></div><div class='line' id='LC725'><span class="sd">	 * 	[ItemLookup Operation](http://docs.amazonwebservices.com/AWSECommerceService/latest/DG/ItemLookup.html)</span></div><div class='line' id='LC726'><span class="sd">	 */</span></div><div class='line' id='LC727'>	<span class="k">public</span> <span class="k">function</span> <span class="nf">item_lookup</span><span class="p">(</span><span class="nv">$item_id</span><span class="p">,</span> <span class="nv">$opt</span> <span class="o">=</span> <span class="k">null</span><span class="p">)</span></div><div class='line' id='LC728'>	<span class="p">{</span></div><div class='line' id='LC729'>		<span class="k">if</span> <span class="p">(</span><span class="o">!</span><span class="nv">$opt</span><span class="p">)</span> <span class="nv">$opt</span> <span class="o">=</span> <span class="k">array</span><span class="p">();</span></div><div class='line' id='LC730'>		<span class="nv">$opt</span><span class="p">[</span><span class="s1">&#39;ItemId&#39;</span><span class="p">]</span> <span class="o">=</span> <span class="nv">$item_id</span><span class="p">;</span></div><div class='line' id='LC731'><br/></div><div class='line' id='LC732'>		<span class="k">if</span> <span class="p">(</span><span class="nb">isset</span><span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">assoc_id</span><span class="p">))</span></div><div class='line' id='LC733'>		<span class="p">{</span></div><div class='line' id='LC734'>			<span class="nv">$opt</span><span class="p">[</span><span class="s1">&#39;AssociateTag&#39;</span><span class="p">]</span> <span class="o">=</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">assoc_id</span><span class="p">;</span></div><div class='line' id='LC735'>		<span class="p">}</span></div><div class='line' id='LC736'><br/></div><div class='line' id='LC737'>		<span class="k">return</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">pas_authenticate</span><span class="p">(</span><span class="s1">&#39;ItemLookup&#39;</span><span class="p">,</span> <span class="nv">$opt</span><span class="p">);</span></div><div class='line' id='LC738'>	<span class="p">}</span></div><div class='line' id='LC739'><br/></div><div class='line' id='LC740'>	<span class="sd">/**</span></div><div class='line' id='LC741'><span class="sd">	 * Method: item_search()</span></div><div class='line' id='LC742'><span class="sd">	 * 	The &lt;item_search()&gt; operation returns items that satisfy the search criteria, including one or more search indices. &lt;item_search()&gt; is the operation that is used most often in requests. In general, when trying to find an item for sale, you use this operation.</span></div><div class='line' id='LC743'><span class="sd">	 *</span></div><div class='line' id='LC744'><span class="sd">	 * 	If you added your Associates ID to the config.inc.php file, or you passed it into the AmazonPAS() constructor, it will be passed along in this request automatically.</span></div><div class='line' id='LC745'><span class="sd">	 *</span></div><div class='line' id='LC746'><span class="sd">	 * Access:</span></div><div class='line' id='LC747'><span class="sd">	 * 	public</span></div><div class='line' id='LC748'><span class="sd">	 *</span></div><div class='line' id='LC749'><span class="sd">	 * Parameters:</span></div><div class='line' id='LC750'><span class="sd">	 * 	$keywords - _string_ (Required) A word or phrase associated with an item. The word or phrase can be in various product fields, including product title, author, artist, description, manufacturer, and so forth. When, for example, the search index equals &quot;MusicTracks&quot;, the Keywords parameter enables you to search by song title.</span></div><div class='line' id='LC751'><span class="sd">	 * 	$opt - _array_ (Optional) Associative array of parameters which can have the following keys:</span></div><div class='line' id='LC752'><span class="sd">	 *</span></div><div class='line' id='LC753'><span class="sd">	 * Keys for the $opt parameter:</span></div><div class='line' id='LC754'><span class="sd">	 * 	THIS IS AN INCOMPLETE LIST. For the latest information, check the AWS documentation page (noted below), or run the &lt;help()&gt; method (noted in the examples below).</span></div><div class='line' id='LC755'><span class="sd">	 *</span></div><div class='line' id='LC756'><span class="sd">	 * 	Actor - _string_ (Optional) Name of an actor associated with the item. You can enter all or part of the name.</span></div><div class='line' id='LC757'><span class="sd">	 * 	Artist - _string_ (Optional) 	Name of an artist associated with the item. You can enter all or part of the name.</span></div><div class='line' id='LC758'><span class="sd">	 * 	AudienceRating - _string_ (Optional) Movie ratings based on MPAA ratings or age, depending upon the locale. You may specify one or more values in a comma-separated list.</span></div><div class='line' id='LC759'><span class="sd">	 * 	Author - _string_ (Optional) Name of an author associated with the item. You can enter all or part of the name.</span></div><div class='line' id='LC760'><span class="sd">	 * 	Availability - _string_ (Optional) Enables ItemSearch to return only those items that are available. This parameter must be used in combination with a merchant ID and Condition. When Availability is set to &quot;Available,&quot; the Condition parameter cannot be set to &quot;New&quot;.</span></div><div class='line' id='LC761'><span class="sd">	 * 	Brand - _string_ (Optional) Name of a brand associated with the item. You can enter all or part of the name.</span></div><div class='line' id='LC762'><span class="sd">	 * 	BrowseNode - _integer_ (Optional) Browse nodes are positive integers that identify product categories.</span></div><div class='line' id='LC763'><span class="sd">	 * 	City - _string_ (Optional) Name of a city associated with the item. You can enter all or part of the name. This parameter only works in the US locale.</span></div><div class='line' id='LC764'><span class="sd">	 * 	Composer - _string_ (Optional) Name of an composer associated with the item. You can enter all or part of the name.</span></div><div class='line' id='LC765'><span class="sd">	 * 	Condition - _string_ (Optional) Use the Condition parameter to filter the offers returned in the product list by condition type. By default, Condition equals &quot;New&quot;. If you do not get results, consider changing the value to &quot;All. When the Availability parameter is set to &quot;Available,&quot; the Condition parameter cannot be set to &quot;New&quot;. ItemSearch returns up to ten search results at a time. Allows &#39;New&#39;, &#39;Used&#39;, &#39;Collectible&#39;, &#39;Refurbished&#39;, &#39;All&#39;.</span></div><div class='line' id='LC766'><span class="sd">	 * 	Conductor - _string_ (Optional) Name of a conductor associated with the item. You can enter all or part of the name.</span></div><div class='line' id='LC767'><span class="sd">	 * 	ContentType - _string_ (Optional) Specifies the format of the content in the response. Generally, ContentType should only be changed for REST requests when the Style parameter is set to an XSLT stylesheet. For example, to transform your Amazon Associates Web Service response into HTML, set ContentType to text/html. Allows &#39;text/xml&#39; and &#39;text/html&#39;. Defaults to &#39;text/xml&#39;.</span></div><div class='line' id='LC768'><span class="sd">	 * 	Director - _string_ (Optional) Name of a director associated with the item. You can enter all or part of the name.</span></div><div class='line' id='LC769'><span class="sd">	 * 	ItemPage - _integer_ (Optional) Retrieves a specific page of items from all of the items in a response. Up to ten items are returned on a page unless Condition equals &quot;All.&quot; In that case, returns up to three results per Condition, for example, three new, three used, three refurbished, and three collectible items. Or, for example, if there are no collectible or refurbished items being offered, returns three new and three used items. The total number of pages of items found is returned in the TotalPages response tag. Allows 1 through 400.</span></div><div class='line' id='LC770'><span class="sd">	 * 	Keywords - _string_ (Optional) A word or phrase associated with an item. The word or phrase can be in various product fields, including product title, author, artist, description, manufacturer, and so forth. When, for example, the search index equals &quot;MusicTracks,&quot; the Keywords parameter enables you to search by song title.</span></div><div class='line' id='LC771'><span class="sd">	 * 	Manufacturer - _string_ (Optional) Name of a manufacturer associated with the item. You can enter all or part of the name.</span></div><div class='line' id='LC772'><span class="sd">	 * 	MaximumPrice - _string_ (Optional) Specifies the maximum price of the items in the response. Prices are in terms of the lowest currency denomination, for example, pennies.</span></div><div class='line' id='LC773'><span class="sd">	 * 	MerchantId - _string_ (Optional) An alphanumeric token distributed by Amazon that uniquely identifies a merchant. Allows &#39;All&#39;, &#39;Amazon&#39;, &#39;FeaturedBuyBoxMerchant&#39;, or a specific Merchant ID. Defaults to &#39;Amazon&#39;.</span></div><div class='line' id='LC774'><span class="sd">	 * 	MinimumPrice - _string_ (Optional) Specifies the minimum price of the items in the response. Prices are in terms of the lowest currency denomination, for example, pennies.</span></div><div class='line' id='LC775'><span class="sd">	 * 	Neighborhood - _string_ (Optional) Name of a neighborhood You can enter all or part of the name. The neighborhoods are located in one of the valid values for City.</span></div><div class='line' id='LC776'><span class="sd">	 * 	Orchestra - _string_ (Optional) Name of an orchestra associated with the item. You can enter all or part of the name.</span></div><div class='line' id='LC777'><span class="sd">	 * 	PostalCode - _string_ (Optional) Postal code of the merchant. In the US, the postal code is the postal code. This parameter enables you to search for items sold in a specified region of a country.</span></div><div class='line' id='LC778'><span class="sd">	 * 	Power - _string_ (Optional) Performs a book search using a complex query string. Only works when the search index is set equal to &quot;Books&quot;.</span></div><div class='line' id='LC779'><span class="sd">	 * 	Publisher - _string_ (Optional) Name of a publisher associated with the item. You can enter all or part of the name.</span></div><div class='line' id='LC780'><span class="sd">	 * 	RelatedItemsPage - _integer_ (Optional) This optional parameter is only valid when the RelatedItems response group is used. Each ItemLookup request can return, at most, ten related items. The RelatedItemsPage value specifies the set of ten related items to return. A value of 2, for example, returns the second set of ten related items.</span></div><div class='line' id='LC781'><span class="sd">	 * 	RelationshipType - _string_ (Optional; Required when RelatedItems response group is used) This parameter is required when the RelatedItems response group is used. The type of related item returned is specified by the RelationshipType parameter. Sample values include Episode, Season, and Tracks. A complete list of values follows this table.</span></div><div class='line' id='LC782'><span class="sd">	 * 	ResponseGroup - _string_ (Optional) Specifies the types of values to return. You can specify multiple response groups in one request by separating them with commas.</span></div><div class='line' id='LC783'><span class="sd">	 * 	returnCurlHandle - _boolean_ (Optional) A private toggle that will return the CURL handle for the request rather than actually completing the request. This is useful for MultiCURL requests.</span></div><div class='line' id='LC784'><span class="sd">	 * 	ReviewSort - _string_ (Optional) Sorts reviews based on the value of the parameter. &#39;-HelpfulVotes&#39;, &#39;HelpfulVotes&#39;, &#39;-OverallRating&#39;, &#39;OverallRating&#39;, &#39;Rank&#39;, &#39;-Rank&#39;, &#39;-SubmissionDate&#39;, &#39;SubmissionDate&#39;.</span></div><div class='line' id='LC785'><span class="sd">	 * 	SearchIndex - _string_ (Optional) The product category to search. Many ItemSearch parameters are valid with only specific values of SearchIndex.</span></div><div class='line' id='LC786'><span class="sd">	 * 	Sort - _string_ (Optional) Means by which the items in the response are ordered.</span></div><div class='line' id='LC787'><span class="sd">	 * 	Style - _string_ (Optional) Controls the format of the data returned in Amazon Associates Web Service responses. Set this parameter to &quot;XML,&quot; the default, to generate a pure XML response. Set this parameter to the URL of an XSLT stylesheet to have Amazon Associates Web Service transform the XML response. See ContentType.</span></div><div class='line' id='LC788'><span class="sd">	 * 	TagPage - _integer_ (Optional) Specifies the page of results to return. There are ten results on a page. The maximum page number is 400.</span></div><div class='line' id='LC789'><span class="sd">	 * 	TagsPerPage - _integer_ (Optional) The number of tags to return that are associated with a specified item.</span></div><div class='line' id='LC790'><span class="sd">	 * 	TagSort - _string_ (Optional) Specifies the sorting order for the results. Allows &#39;FirstUsed&#39;, &#39;-FirstUsed&#39;, &#39;LastUsed&#39;, &#39;-LastUsed&#39;, &#39;Name&#39;, &#39;-Name&#39;, &#39;Usages&#39;, and &#39;-Usages&#39;. To sort items in descending order, prefix the values with a negative sign (-).</span></div><div class='line' id='LC791'><span class="sd">	 * 	TextStream - _string_ (Optional) A search based on two or more words. Picks out of the block of text up to ten keywords and returns up to ten items that match those keywords. For example, if five keywords are found, two items for each keyword are returned. Only one page of results is returned so ItemPage does not work with TextStream.</span></div><div class='line' id='LC792'><span class="sd">	 * 	Title - _string_ (Optional) The title associated with the item. You can enter all or part of the title. Title searches are a subset of Keyword searches. If a Title search yields insufficient results, consider using a Keywords search.</span></div><div class='line' id='LC793'><span class="sd">	 * 	Validate - _boolean_ (Optional) Prevents an operation from executing. Set the Validate parameter to True to test your request without actually executing it. When present, Validate must equal True; the default value is False. If a request is not actually executed (Validate=True), only a subset of the errors for a request may be returned because some errors (for example, no_exact_matches) are only generated during the execution of a request. Defaults to FALSE.</span></div><div class='line' id='LC794'><span class="sd">	 * 	VariationPage - _integer_ (Optional) Retrieves a specific page of variations returned by ItemSearch. By default, ItemSearch returns all variations. Use VariationPage to return a subsection of the response. There are 10 variations per page. To examine offers 11 trough 20, for example, set VariationPage to 2. The total number of pages is returned in the TotalPages element.</span></div><div class='line' id='LC795'><span class="sd">	 * 	XMLEscaping - _string_ (Optional) Specifies whether responses are XML-encoded in a single pass or a double pass. By default, XMLEscaping is Single, and Amazon Associates Web Service responses are encoded only once in XML. For example, if the response data includes an ampersand character (&amp;), the character is returned in its regular XML encoding (&amp;). If XMLEscaping is Double, the same ampersand character is XML-encoded twice (&amp;amp;). The Double value for XMLEscaping is useful in some clients, such as PHP, that do not decode text within XML elements. Defaults to &#39;Single&#39;.</span></div><div class='line' id='LC796'><span class="sd">	 *</span></div><div class='line' id='LC797'><span class="sd">	 * Returns:</span></div><div class='line' id='LC798'><span class="sd">	 * 	&lt;CFResponse&gt; object</span></div><div class='line' id='LC799'><span class="sd">	 *</span></div><div class='line' id='LC800'><span class="sd">	 * See Also:</span></div><div class='line' id='LC801'><span class="sd">	 * 	[ItemSearch Operation](http://docs.amazonwebservices.com/AWSECommerceService/latest/DG/ItemSearch.html)</span></div><div class='line' id='LC802'><span class="sd">	 */</span></div><div class='line' id='LC803'>	<span class="k">public</span> <span class="k">function</span> <span class="nf">item_search</span><span class="p">(</span><span class="nv">$keywords</span><span class="p">,</span> <span class="nv">$opt</span> <span class="o">=</span> <span class="k">null</span><span class="p">)</span></div><div class='line' id='LC804'>	<span class="p">{</span></div><div class='line' id='LC805'>		<span class="k">if</span> <span class="p">(</span><span class="o">!</span><span class="nv">$opt</span><span class="p">)</span> <span class="nv">$opt</span> <span class="o">=</span> <span class="k">array</span><span class="p">();</span></div><div class='line' id='LC806'>		<span class="nv">$opt</span><span class="p">[</span><span class="s1">&#39;Keywords&#39;</span><span class="p">]</span> <span class="o">=</span> <span class="nv">$keywords</span><span class="p">;</span></div><div class='line' id='LC807'><br/></div><div class='line' id='LC808'>		<span class="k">if</span> <span class="p">(</span><span class="nb">isset</span><span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">assoc_id</span><span class="p">))</span></div><div class='line' id='LC809'>		<span class="p">{</span></div><div class='line' id='LC810'>			<span class="nv">$opt</span><span class="p">[</span><span class="s1">&#39;AssociateTag&#39;</span><span class="p">]</span> <span class="o">=</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">assoc_id</span><span class="p">;</span></div><div class='line' id='LC811'>		<span class="p">}</span></div><div class='line' id='LC812'><br/></div><div class='line' id='LC813'>		<span class="k">if</span> <span class="p">(</span><span class="o">!</span><span class="nb">isset</span><span class="p">(</span><span class="nv">$opt</span><span class="p">[</span><span class="s1">&#39;SearchIndex&#39;</span><span class="p">])</span> <span class="o">||</span> <span class="k">empty</span><span class="p">(</span><span class="nv">$opt</span><span class="p">[</span><span class="s1">&#39;SearchIndex&#39;</span><span class="p">]))</span></div><div class='line' id='LC814'>		<span class="p">{</span></div><div class='line' id='LC815'>			<span class="nv">$opt</span><span class="p">[</span><span class="s1">&#39;SearchIndex&#39;</span><span class="p">]</span> <span class="o">=</span> <span class="s1">&#39;All&#39;</span><span class="p">;</span></div><div class='line' id='LC816'>		<span class="p">}</span></div><div class='line' id='LC817'><br/></div><div class='line' id='LC818'>		<span class="k">return</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">pas_authenticate</span><span class="p">(</span><span class="s1">&#39;ItemSearch&#39;</span><span class="p">,</span> <span class="nv">$opt</span><span class="p">);</span></div><div class='line' id='LC819'>	<span class="p">}</span></div><div class='line' id='LC820'><br/></div><div class='line' id='LC821'><br/></div><div class='line' id='LC822'>	<span class="cm">/*%******************************************************************************************%*/</span></div><div class='line' id='LC823'>	<span class="c1">// SELLER METHODS</span></div><div class='line' id='LC824'><br/></div><div class='line' id='LC825'>	<span class="sd">/**</span></div><div class='line' id='LC826'><span class="sd">	 * Method: seller_listing_lookup()</span></div><div class='line' id='LC827'><span class="sd">	 * 	Enables you to return information about a seller&#39;s listings, including product descriptions, availability, condition, and quantity available. The response also includes the seller&#39;s nickname. Each request requires a seller ID.</span></div><div class='line' id='LC828'><span class="sd">	 *</span></div><div class='line' id='LC829'><span class="sd">	 * 	You can also find a seller&#39;s items using ItemLookup. There are, however, some reasons why it is better to use &lt;seller_listing_lookup()&gt;: (a) &lt;seller_listing_lookup()&gt; enables you to search by seller ID. (b) &lt;seller_listing_lookup()&gt; returns much more information than &lt;item_lookup()&gt;.</span></div><div class='line' id='LC830'><span class="sd">	 *</span></div><div class='line' id='LC831'><span class="sd">	 * 	This operation only works with sellers who have less than 100,000 items for sale. Sellers that have more items for sale should use, instead of Amazon Associates Web Service, other APIs, including the Amazon Inventory Management System, and the Merchant@ API.</span></div><div class='line' id='LC832'><span class="sd">	 *</span></div><div class='line' id='LC833'><span class="sd">	 * 	If you added your Associates ID to the config.inc.php file, or you passed it into the AmazonPAS() constructor, it will be passed along in this request automatically.</span></div><div class='line' id='LC834'><span class="sd">	 *</span></div><div class='line' id='LC835'><span class="sd">	 * Access:</span></div><div class='line' id='LC836'><span class="sd">	 * 	public</span></div><div class='line' id='LC837'><span class="sd">	 *</span></div><div class='line' id='LC838'><span class="sd">	 * Parameters:</span></div><div class='line' id='LC839'><span class="sd">	 * 	$item_id - _string_ (Optional) Number that uniquely identifies an item. The valid value depends on the value for IdType. Allows an Exchange ID, a Listing ID, an ASIN, or a SKU.</span></div><div class='line' id='LC840'><span class="sd">	 * 	$id_type - _string_ (Optional) Use the IdType parameter to specify the value type of the Id parameter value. If you are looking up an Amazon Marketplace item, use Exchange, ASIN, or SKU as the value for IdType. Discontinued, out of stock, or unavailable products will not be returned if IdType is Listing, SKU, or ASIN. Those products will be returned, however, if IdType is Exchange. Allows &#39;Exchange&#39;, &#39;Listing&#39;, &#39;ASIN&#39;, &#39;SKU&#39;.</span></div><div class='line' id='LC841'><span class="sd">	 * 	$seller_id - _string_ (Optional) Alphanumeric token that uniquely identifies a seller. This parameter limits the results to a single seller ID.</span></div><div class='line' id='LC842'><span class="sd">	 * 	$opt - _array_ (Optional) Associative array of parameters which can have the following keys:</span></div><div class='line' id='LC843'><span class="sd">	 *</span></div><div class='line' id='LC844'><span class="sd">	 * Keys for the $opt parameter:</span></div><div class='line' id='LC845'><span class="sd">	 * 	THIS IS AN INCOMPLETE LIST. For the latest information, check the AWS documentation page (noted below), or run the &lt;help()&gt; method (noted in the examples below).</span></div><div class='line' id='LC846'><span class="sd">	 *</span></div><div class='line' id='LC847'><span class="sd">	 * 	ContentType - _string_ (Optional) Specifies the format of the content in the response. Generally, ContentType should only be changed for REST requests when the Style parameter is set to an XSLT stylesheet. For example, to transform your Amazon Associates Web Service response into HTML, set ContentType to text/html. Allows &#39;text/xml&#39; and &#39;text/html&#39;. Defaults to &#39;text/xml&#39;.</span></div><div class='line' id='LC848'><span class="sd">	 * 	MerchantId - _string_ (Optional) An alphanumeric token distributed by Amazon that uniquely identifies a merchant. Allows &#39;All&#39;, &#39;Amazon&#39;, &#39;FeaturedBuyBoxMerchant&#39;, or a specific Merchant ID. Defaults to &#39;Amazon&#39;.</span></div><div class='line' id='LC849'><span class="sd">	 *  ResponseGroup - _string_ (Optional) Specifies the types of values to return. You can specify multiple response groups in one request by separating them with commas.</span></div><div class='line' id='LC850'><span class="sd">	 * 	returnCurlHandle - _boolean_ (Optional) A private toggle that will return the CURL handle for the request rather than actually completing the request. This is useful for MultiCURL requests.</span></div><div class='line' id='LC851'><span class="sd">	 * 	Style - _string_ (Optional) Controls the format of the data returned in Amazon Associates Web Service responses. Set this parameter to &quot;XML,&quot; the default, to generate a pure XML response. Set this parameter to the URL of an XSLT stylesheet to have Amazon Associates Web Service transform the XML response. See ContentType.</span></div><div class='line' id='LC852'><span class="sd">	 * 	Validate - _boolean_ (Optional) Prevents an operation from executing. Set the Validate parameter to True to test your request without actually executing it. When present, Validate must equal True; the default value is False. If a request is not actually executed (Validate=True), only a subset of the errors for a request may be returned because some errors (for example, no_exact_matches) are only generated during the execution of a request. Defaults to FALSE.</span></div><div class='line' id='LC853'><span class="sd">	 * 	XMLEscaping - _string_ (Optional) Specifies whether responses are XML-encoded in a single pass or a double pass. By default, XMLEscaping is Single, and Amazon Associates Web Service responses are encoded only once in XML. For example, if the response data includes an ampersand character (&amp;), the character is returned in its regular XML encoding (&amp;). If XMLEscaping is Double, the same ampersand character is XML-encoded twice (&amp;amp;). The Double value for XMLEscaping is useful in some clients, such as PHP, that do not decode text within XML elements. Defaults to &#39;Single&#39;.</span></div><div class='line' id='LC854'><span class="sd">	 *</span></div><div class='line' id='LC855'><span class="sd">	 * Returns:</span></div><div class='line' id='LC856'><span class="sd">	 * 	&lt;CFResponse&gt; object</span></div><div class='line' id='LC857'><span class="sd">	 *</span></div><div class='line' id='LC858'><span class="sd">	 * See Also:</span></div><div class='line' id='LC859'><span class="sd">	 * 	[SellerListingLookup Operation](http://docs.amazonwebservices.com/AWSECommerceService/latest/DG/SellerListingLookup.html)</span></div><div class='line' id='LC860'><span class="sd">	 */</span></div><div class='line' id='LC861'>	<span class="k">public</span> <span class="k">function</span> <span class="nf">seller_listing_lookup</span><span class="p">(</span><span class="nv">$item_id</span><span class="p">,</span> <span class="nv">$id_type</span><span class="p">,</span> <span class="nv">$seller_id</span><span class="p">,</span> <span class="nv">$opt</span> <span class="o">=</span> <span class="k">null</span><span class="p">)</span></div><div class='line' id='LC862'>	<span class="p">{</span></div><div class='line' id='LC863'>		<span class="k">if</span> <span class="p">(</span><span class="o">!</span><span class="nv">$opt</span><span class="p">)</span> <span class="nv">$opt</span> <span class="o">=</span> <span class="k">array</span><span class="p">();</span></div><div class='line' id='LC864'>		<span class="nv">$opt</span><span class="p">[</span><span class="s1">&#39;Id&#39;</span><span class="p">]</span> <span class="o">=</span> <span class="nv">$item_id</span><span class="p">;</span></div><div class='line' id='LC865'>		<span class="nv">$opt</span><span class="p">[</span><span class="s1">&#39;IdType&#39;</span><span class="p">]</span> <span class="o">=</span> <span class="nv">$id_type</span><span class="p">;</span></div><div class='line' id='LC866'>		<span class="nv">$opt</span><span class="p">[</span><span class="s1">&#39;SellerId&#39;</span><span class="p">]</span> <span class="o">=</span> <span class="nv">$seller_id</span><span class="p">;</span></div><div class='line' id='LC867'><br/></div><div class='line' id='LC868'>		<span class="k">if</span> <span class="p">(</span><span class="nb">isset</span><span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">assoc_id</span><span class="p">))</span></div><div class='line' id='LC869'>		<span class="p">{</span></div><div class='line' id='LC870'>			<span class="nv">$opt</span><span class="p">[</span><span class="s1">&#39;AssociateTag&#39;</span><span class="p">]</span> <span class="o">=</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">assoc_id</span><span class="p">;</span></div><div class='line' id='LC871'>		<span class="p">}</span></div><div class='line' id='LC872'><br/></div><div class='line' id='LC873'>		<span class="k">return</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">pas_authenticate</span><span class="p">(</span><span class="s1">&#39;SellerListingLookup&#39;</span><span class="p">,</span> <span class="nv">$opt</span><span class="p">);</span></div><div class='line' id='LC874'>	<span class="p">}</span></div><div class='line' id='LC875'><br/></div><div class='line' id='LC876'>	<span class="sd">/**</span></div><div class='line' id='LC877'><span class="sd">	 * Method: seller_listing_search()</span></div><div class='line' id='LC878'><span class="sd">	 * 	Enables you to search for items offered by specific sellers. You cannot use &lt;seller_listing_search()&gt; to look up items sold by merchants. To look up an item sold by a merchant, use &lt;item_lookup()&gt; or &lt;item_search()&gt; along with the MerchantId parameter.</span></div><div class='line' id='LC879'><span class="sd">	 *</span></div><div class='line' id='LC880'><span class="sd">	 * 	&lt;seller_listing_search()&gt; returns the listing ID or exchange ID of an item. Typically, you use those values with &lt;seller_listing_lookup()&gt; to find out more about those items.</span></div><div class='line' id='LC881'><span class="sd">	 *</span></div><div class='line' id='LC882'><span class="sd">	 * 	Each request returns up to ten items. By default, the first ten items are returned. You can use the ListingPage parameter to retrieve additional pages of (up to) ten listings. To use Amazon Associates Web Service, sellers must have less than 100,000 items for sale. Sellers that have more items for sale should use, instead of Amazon Associates Web Service, other seller APIs, including the Amazon Inventory Management System, and the Merchant@ API.</span></div><div class='line' id='LC883'><span class="sd">	 *</span></div><div class='line' id='LC884'><span class="sd">	 * 	&lt;seller_listing_search()&gt; requires a seller ID, which means that you cannot use this operation to search across all sellers. Amazon Associates Web Service does not have a seller-specific operation that does this. To search across all sellers, use &lt;item_lookup()&gt; or &lt;item_search()&gt;.</span></div><div class='line' id='LC885'><span class="sd">	 *</span></div><div class='line' id='LC886'><span class="sd">	 * 	If you added your Associates ID to the config.inc.php file, or you passed it into the AmazonPAS() constructor, it will be passed along in this request automatically.</span></div><div class='line' id='LC887'><span class="sd">	 *</span></div><div class='line' id='LC888'><span class="sd">	 * Access:</span></div><div class='line' id='LC889'><span class="sd">	 * 	public</span></div><div class='line' id='LC890'><span class="sd">	 *</span></div><div class='line' id='LC891'><span class="sd">	 * Parameters:</span></div><div class='line' id='LC892'><span class="sd">	 * 	$seller_id - _string_ (Required) An alphanumeric token that uniquely identifies a seller. These tokens are created by Amazon and distributed to sellers.</span></div><div class='line' id='LC893'><span class="sd">	 * 	$opt - _array_ (Optional) Associative array of parameters which can have the following keys:</span></div><div class='line' id='LC894'><span class="sd">	 *</span></div><div class='line' id='LC895'><span class="sd">	 * Keys for the $opt parameter:</span></div><div class='line' id='LC896'><span class="sd">	 * 	THIS IS AN INCOMPLETE LIST. For the latest information, check the AWS documentation page (noted below), or run the &lt;help()&gt; method (noted in the examples below).</span></div><div class='line' id='LC897'><span class="sd">	 *</span></div><div class='line' id='LC898'><span class="sd">	 * 	ContentType - _string_ (Optional) Specifies the format of the content in the response. Generally, ContentType should only be changed for REST requests when the Style parameter is set to an XSLT stylesheet. For example, to transform your Amazon Associates Web Service response into HTML, set ContentType to text/html. Allows &#39;text/xml&#39; and &#39;text/html&#39;. Defaults to &#39;text/xml&#39;.</span></div><div class='line' id='LC899'><span class="sd">	 * 	ListingPage - _integer_ (Optional) Page of the response to return. Up to ten lists are returned per page. For customers that have more than ten lists, more than one page of results are returned. By default, the first page is returned. To return another page, specify the page number. Allows 1 through 500.</span></div><div class='line' id='LC900'><span class="sd">	 * 	MerchantId - _string_ (Optional) An alphanumeric token distributed by Amazon that uniquely identifies a merchant. Allows &#39;All&#39;, &#39;Amazon&#39;, &#39;FeaturedBuyBoxMerchant&#39;, or a specific Merchant ID. Defaults to &#39;Amazon&#39;.</span></div><div class='line' id='LC901'><span class="sd">	 * 	OfferStatus - _string_ (Optional) Specifies whether the product is available (Open), or not (Closed.) Closed products are those that are discontinued, out of stock, or unavailable. Defaults to &#39;Open&#39;.</span></div><div class='line' id='LC902'><span class="sd">	 * 	ResponseGroup - _string_ (Optional) Specifies the types of values to return. You can specify multiple response groups in one request by separating them with commas.</span></div><div class='line' id='LC903'><span class="sd">	 * 	returnCurlHandle - _boolean_ (Optional) A private toggle that will return the CURL handle for the request rather than actually completing the request. This is useful for MultiCURL requests.</span></div><div class='line' id='LC904'><span class="sd">	 * 	Sort - _string_ (Optional) Use the Sort parameter to specify how your seller listing search results will be ordered. The -bfp (featured listings - default), applies only to the US, UK, and DE locales. Allows &#39;-startdate&#39;, &#39;startdate&#39;, &#39;+startdate&#39;, &#39;-enddate&#39;, &#39;enddate&#39;, &#39;-sku&#39;, &#39;sku&#39;, &#39;-quantity&#39;, &#39;quantity&#39;, &#39;-price&#39;, &#39;price |+price&#39;, &#39;-title&#39;, &#39;title&#39;.</span></div><div class='line' id='LC905'><span class="sd">	 * 	Style - _string_ (Optional) Controls the format of the data returned in Amazon Associates Web Service responses. Set this parameter to &quot;XML,&quot; the default, to generate a pure XML response. Set this parameter to the URL of an XSLT stylesheet to have Amazon Associates Web Service transform the XML response. See ContentType.</span></div><div class='line' id='LC906'><span class="sd">	 * 	Title - _string_ (Optional) Searches for products based on the product&#39;s name. Keywords and Title are mutually exclusive; you can have only one of the two in a request.</span></div><div class='line' id='LC907'><span class="sd">	 * 	Validate - _boolean_ (Optional) Prevents an operation from executing. Set the Validate parameter to True to test your request without actually executing it. When present, Validate must equal True; the default value is False. If a request is not actually executed (Validate=True), only a subset of the errors for a request may be returned because some errors (for example, no_exact_matches) are only generated during the execution of a request. Defaults to FALSE.</span></div><div class='line' id='LC908'><span class="sd">	 * 	XMLEscaping - _string_ (Optional) Specifies whether responses are XML-encoded in a single pass or a double pass. By default, XMLEscaping is Single, and Amazon Associates Web Service responses are encoded only once in XML. For example, if the response data includes an ampersand character (&amp;), the character is returned in its regular XML encoding (&amp;). If XMLEscaping is Double, the same ampersand character is XML-encoded twice (&amp;amp;). The Double value for XMLEscaping is useful in some clients, such as PHP, that do not decode text within XML elements. Defaults to &#39;Single&#39;.</span></div><div class='line' id='LC909'><span class="sd">	 *</span></div><div class='line' id='LC910'><span class="sd">	 * Returns:</span></div><div class='line' id='LC911'><span class="sd">	 * 	&lt;CFResponse&gt; object</span></div><div class='line' id='LC912'><span class="sd">	 *</span></div><div class='line' id='LC913'><span class="sd">	 * See Also:</span></div><div class='line' id='LC914'><span class="sd">	 * 	[SellerListingSearch Operation](http://docs.amazonwebservices.com/AWSECommerceService/latest/DG/SellerListingSearch.html)</span></div><div class='line' id='LC915'><span class="sd">	 */</span></div><div class='line' id='LC916'>	<span class="k">public</span> <span class="k">function</span> <span class="nf">seller_listing_search</span><span class="p">(</span><span class="nv">$seller_id</span><span class="p">,</span> <span class="nv">$opt</span> <span class="o">=</span> <span class="k">null</span><span class="p">)</span></div><div class='line' id='LC917'>	<span class="p">{</span></div><div class='line' id='LC918'>		<span class="k">if</span> <span class="p">(</span><span class="o">!</span><span class="nv">$opt</span><span class="p">)</span> <span class="nv">$opt</span> <span class="o">=</span> <span class="k">array</span><span class="p">();</span></div><div class='line' id='LC919'>		<span class="nv">$opt</span><span class="p">[</span><span class="s1">&#39;SellerId&#39;</span><span class="p">]</span> <span class="o">=</span> <span class="nv">$seller_id</span><span class="p">;</span></div><div class='line' id='LC920'><br/></div><div class='line' id='LC921'>		<span class="k">if</span> <span class="p">(</span><span class="nb">isset</span><span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">assoc_id</span><span class="p">))</span></div><div class='line' id='LC922'>		<span class="p">{</span></div><div class='line' id='LC923'>			<span class="nv">$opt</span><span class="p">[</span><span class="s1">&#39;AssociateTag&#39;</span><span class="p">]</span> <span class="o">=</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">assoc_id</span><span class="p">;</span></div><div class='line' id='LC924'>		<span class="p">}</span></div><div class='line' id='LC925'><br/></div><div class='line' id='LC926'>		<span class="k">return</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">pas_authenticate</span><span class="p">(</span><span class="s1">&#39;SellerListingSearch&#39;</span><span class="p">,</span> <span class="nv">$opt</span><span class="p">);</span></div><div class='line' id='LC927'>	<span class="p">}</span></div><div class='line' id='LC928'><br/></div><div class='line' id='LC929'>	<span class="sd">/**</span></div><div class='line' id='LC930'><span class="sd">	 * Method: seller_lookup()</span></div><div class='line' id='LC931'><span class="sd">	 * 	Returns detailed information about sellers and, in the US locale, merchants. To lookup a seller, you must use their seller ID. The information returned includes the seller&#39;s name, average rating by customers, and the first five customer feedback entries. &lt;seller_lookup()&gt; will not, however, return the seller&#39;s e-mail or business addresses.</span></div><div class='line' id='LC932'><span class="sd">	 *</span></div><div class='line' id='LC933'><span class="sd">	 * 	A seller must enter their information. Sometimes, sellers do not. In that case, &lt;seller_lookup()&gt; cannot return some seller-specific information.</span></div><div class='line' id='LC934'><span class="sd">	 *</span></div><div class='line' id='LC935'><span class="sd">	 * 	To look up more than one seller in a single request, insert a comma-delimited list of up to five seller IDs in the SellerId parameter of the REST request. Customers can rate sellers. 5 is the best rating; 0 is the worst. The rating reflects the customer&#39;s experience with the seller. The &lt;seller_lookup()&gt; operation, by default, returns review comments by individual customers.</span></div><div class='line' id='LC936'><span class="sd">	 *</span></div><div class='line' id='LC937'><span class="sd">	 * 	If you added your Associates ID to the config.inc.php file, or you passed it into the AmazonPAS() constructor, it will be passed along in this request automatically.</span></div><div class='line' id='LC938'><span class="sd">	 *</span></div><div class='line' id='LC939'><span class="sd">	 * Access:</span></div><div class='line' id='LC940'><span class="sd">	 * 	public</span></div><div class='line' id='LC941'><span class="sd">	 *</span></div><div class='line' id='LC942'><span class="sd">	 * Parameters:</span></div><div class='line' id='LC943'><span class="sd">	 * 	$seller_id - _string_ (Required) An alphanumeric token that uniquely identifies a seller. These tokens are created by Amazon and distributed to sellers.</span></div><div class='line' id='LC944'><span class="sd">	 * 	$opt - _array_ (Optional) Associative array of parameters which can have the following keys:</span></div><div class='line' id='LC945'><span class="sd">	 *</span></div><div class='line' id='LC946'><span class="sd">	 * Keys for the $opt parameter:</span></div><div class='line' id='LC947'><span class="sd">	 * 	THIS IS AN INCOMPLETE LIST. For the latest information, check the AWS documentation page (noted below), or run the &lt;help()&gt; method (noted in the examples below).</span></div><div class='line' id='LC948'><span class="sd">	 *</span></div><div class='line' id='LC949'><span class="sd">	 * 	ContentType - _string_ (Optional) Specifies the format of the content in the response. Generally, ContentType should only be changed for REST requests when the Style parameter is set to an XSLT stylesheet. For example, to transform your Amazon Associates Web Service response into HTML, set ContentType to text/html. Allows &#39;text/xml&#39; and &#39;text/html&#39;. Defaults to &#39;text/xml&#39;.</span></div><div class='line' id='LC950'><span class="sd">	 * 	FeedbackPage - _string_ (Optional) Specifies the page of reviews to return. Up to five reviews are returned per page. The first page is returned by default. To access additional pages, use this parameter to specify the desired page. The maximum number of pages that can be returned is 10 (50 feedback items). Allows 1 through 10.</span></div><div class='line' id='LC951'><span class="sd">	 * 	MerchantId - _string_ (Optional) An alphanumeric token distributed by Amazon that uniquely identifies a merchant. Allows &#39;All&#39;, &#39;Amazon&#39;, &#39;FeaturedBuyBoxMerchant&#39;, or a specific Merchant ID. Defaults to &#39;Amazon&#39;.</span></div><div class='line' id='LC952'><span class="sd">	 * 	ResponseGroup - _string_ (Optional) Specifies the types of values to return. You can specify multiple response groups in one request by separating them with commas.</span></div><div class='line' id='LC953'><span class="sd">	 * 	returnCurlHandle - _boolean_ (Optional) A private toggle that will return the CURL handle for the request rather than actually completing the request. This is useful for MultiCURL requests.</span></div><div class='line' id='LC954'><span class="sd">	 * 	Style - _string_ (Optional) Controls the format of the data returned in Amazon Associates Web Service responses. Set this parameter to &quot;XML,&quot; the default, to generate a pure XML response. Set this parameter to the URL of an XSLT stylesheet to have Amazon Associates Web Service transform the XML response. See ContentType.</span></div><div class='line' id='LC955'><span class="sd">	 * 	Validate - _boolean_ (Optional) Prevents an operation from executing. Set the Validate parameter to True to test your request without actually executing it. When present, Validate must equal True; the default value is False. If a request is not actually executed (Validate=True), only a subset of the errors for a request may be returned because some errors (for example, no_exact_matches) are only generated during the execution of a request. Defaults to FALSE.</span></div><div class='line' id='LC956'><span class="sd">	 * 	XMLEscaping - _string_ (Optional) Specifies whether responses are XML-encoded in a single pass or a double pass. By default, XMLEscaping is Single, and Amazon Associates Web Service responses are encoded only once in XML. For example, if the response data includes an ampersand character (&amp;), the character is returned in its regular XML encoding (&amp;). If XMLEscaping is Double, the same ampersand character is XML-encoded twice (&amp;amp;). The Double value for XMLEscaping is useful in some clients, such as PHP, that do not decode text within XML elements. Defaults to &#39;Single&#39;.</span></div><div class='line' id='LC957'><span class="sd">	 *</span></div><div class='line' id='LC958'><span class="sd">	 * Returns:</span></div><div class='line' id='LC959'><span class="sd">	 * 	&lt;CFResponse&gt; object</span></div><div class='line' id='LC960'><span class="sd">	 *</span></div><div class='line' id='LC961'><span class="sd">	 * See Also:</span></div><div class='line' id='LC962'><span class="sd">	 * 	[SellerLookup Operation](http://docs.amazonwebservices.com/AWSECommerceService/latest/DG/SellerLookup.html)</span></div><div class='line' id='LC963'><span class="sd">	 */</span></div><div class='line' id='LC964'>	<span class="k">public</span> <span class="k">function</span> <span class="nf">seller_lookup</span><span class="p">(</span><span class="nv">$seller_id</span><span class="p">,</span> <span class="nv">$opt</span> <span class="o">=</span> <span class="k">null</span><span class="p">)</span></div><div class='line' id='LC965'>	<span class="p">{</span></div><div class='line' id='LC966'>		<span class="k">if</span> <span class="p">(</span><span class="o">!</span><span class="nv">$opt</span><span class="p">)</span> <span class="nv">$opt</span> <span class="o">=</span> <span class="k">array</span><span class="p">();</span></div><div class='line' id='LC967'>		<span class="nv">$opt</span><span class="p">[</span><span class="s1">&#39;SellerId&#39;</span><span class="p">]</span> <span class="o">=</span> <span class="nv">$seller_id</span><span class="p">;</span></div><div class='line' id='LC968'><br/></div><div class='line' id='LC969'>		<span class="k">if</span> <span class="p">(</span><span class="nb">isset</span><span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">assoc_id</span><span class="p">))</span></div><div class='line' id='LC970'>		<span class="p">{</span></div><div class='line' id='LC971'>			<span class="nv">$opt</span><span class="p">[</span><span class="s1">&#39;AssociateTag&#39;</span><span class="p">]</span> <span class="o">=</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">assoc_id</span><span class="p">;</span></div><div class='line' id='LC972'>		<span class="p">}</span></div><div class='line' id='LC973'><br/></div><div class='line' id='LC974'>		<span class="k">return</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">pas_authenticate</span><span class="p">(</span><span class="s1">&#39;SellerLookup&#39;</span><span class="p">,</span> <span class="nv">$opt</span><span class="p">);</span></div><div class='line' id='LC975'>	<span class="p">}</span></div><div class='line' id='LC976'><br/></div><div class='line' id='LC977'><br/></div><div class='line' id='LC978'>	<span class="cm">/*%******************************************************************************************%*/</span></div><div class='line' id='LC979'>	<span class="c1">// OTHER LOOKUP METHODS</span></div><div class='line' id='LC980'><br/></div><div class='line' id='LC981'>	<span class="sd">/**</span></div><div class='line' id='LC982'><span class="sd">	 * Method: similarity_lookup()</span></div><div class='line' id='LC983'><span class="sd">	 * 	Returns up to ten products per page that are similar to one or more items specified in the request. This operation is typically used to pique a customer&#39;s interest in buying something similar to what they&#39;ve already ordered.</span></div><div class='line' id='LC984'><span class="sd">	 *</span></div><div class='line' id='LC985'><span class="sd">	 * 	If you specify more than one item, &lt;similarity_lookup()&gt; returns the intersection of similar items each item would return separately. Alternatively, you can use the SimilarityType parameter to return the union of items that are similar to any of the specified items. A maximum of ten similar items are returned; the operation does not return additional pages of similar items. If there are more than ten similar items, running the same request can result in different answers because the ten that are included in the response are picked randomly. The results are picked randomly only when you specify multiple items and the results include more than ten similar items.</span></div><div class='line' id='LC986'><span class="sd">	 *</span></div><div class='line' id='LC987'><span class="sd">	 * 	When you specify multiple items, it is possible for there to be no intersection of similar items. In this case, the operation returns an error.</span></div><div class='line' id='LC988'><span class="sd">	 *</span></div><div class='line' id='LC989'><span class="sd">	 * 	Similarity is a measurement of similar items purchased, that is, customers who bought X also bought Y and Z. It is not a measure, for example, of items viewed, that is, customers who viewed X also viewed Y and Z.</span></div><div class='line' id='LC990'><span class="sd">	 *</span></div><div class='line' id='LC991'><span class="sd">	 * 	If you added your Associates ID to the config.inc.php file, or you passed it into the AmazonPAS() constructor, it will be passed along in this request automatically.</span></div><div class='line' id='LC992'><span class="sd">	 *</span></div><div class='line' id='LC993'><span class="sd">	 * Access:</span></div><div class='line' id='LC994'><span class="sd">	 * 	public</span></div><div class='line' id='LC995'><span class="sd">	 *</span></div><div class='line' id='LC996'><span class="sd">	 * Parameters:</span></div><div class='line' id='LC997'><span class="sd">	 * 	$item_id - _string_ (Required) Specifies the item you want to look up. An ItemId is an alphanumeric identifier assigned to an item. You can specify up to ten ItemIds separated by commas.</span></div><div class='line' id='LC998'><span class="sd">	 * 	$opt - _array_ (Optional) Associative array of parameters which can have the following keys:</span></div><div class='line' id='LC999'><span class="sd">	 *</span></div><div class='line' id='LC1000'><span class="sd">	 * Keys for the $opt parameter:</span></div><div class='line' id='LC1001'><span class="sd">	 * 	THIS IS AN INCOMPLETE LIST. For the latest information, check the AWS documentation page (noted below), or run the &lt;help()&gt; method (noted in the examples below).</span></div><div class='line' id='LC1002'><span class="sd">	 *</span></div><div class='line' id='LC1003'><span class="sd">	 * 	Condition - _string_ (Optional) Specifies an item&#39;s condition. If Condition is set to &quot;All&quot;, a separate set of responses is returned for each valid value of Condition. Allows &#39;All&#39;, &#39;Collectible&#39;, &#39;Refurbished&#39;, or &#39;Used&#39;.</span></div><div class='line' id='LC1004'><span class="sd">	 * 	ContentType - _string_ (Optional) Specifies the format of the content in the response. Generally, ContentType should only be changed for REST requests when the Style parameter is set to an XSLT stylesheet. For example, to transform your Amazon Associates Web Service response into HTML, set ContentType to text/html. Allows &#39;text/xml&#39; and &#39;text/html&#39;. Defaults to &#39;text/xml&#39;.</span></div><div class='line' id='LC1005'><span class="sd">	 * 	MerchantId - _string_ (Optional) Specifies the merchant who is offering the item. MerchantId is an alphanumeric identifier assigned by Amazon to merchants. Make sure to use a Merchant ID and not a Seller ID. Seller IDs are not supported.</span></div><div class='line' id='LC1006'><span class="sd">	 * 	ResponseGroup - _string_ (Optional) Specifies the types of values to return. You can specify multiple response groups in one request by separating them with commas.</span></div><div class='line' id='LC1007'><span class="sd">	 * 	returnCurlHandle - _boolean_ (Optional) A private toggle that will return the CURL handle for the request rather than actually completing the request. This is useful for MultiCURL requests.</span></div><div class='line' id='LC1008'><span class="sd">	 * 	SimilarityType - _string_ (Optional) &quot;Intersection&quot; returns the intersection of items that are similar to all of the ASINs specified. &quot;Random&quot; returns the union of items that are similar to all of the ASINs specified. Only ten items are returned. So, if there are more than ten similar items found, a random selection from the group is returned. For this reason, running the same request multiple times can yield different results.</span></div><div class='line' id='LC1009'><span class="sd">	 * 	Style - _string_ (Optional) Controls the format of the data returned in Amazon Associates Web Service responses. Set this parameter to &quot;XML,&quot; the default, to generate a pure XML response. Set this parameter to the URL of an XSLT stylesheet to have Amazon Associates Web Service transform the XML response. See ContentType.</span></div><div class='line' id='LC1010'><span class="sd">	 * 	Validate - _boolean_ (Optional) Prevents an operation from executing. Set the Validate parameter to True to test your request without actually executing it. When present, Validate must equal True; the default value is False. If a request is not actually executed (Validate=True), only a subset of the errors for a request may be returned because some errors (for example, no_exact_matches) are only generated during the execution of a request. Defaults to FALSE.</span></div><div class='line' id='LC1011'><span class="sd">	 * 	XMLEscaping - _string_ (Optional) Specifies whether responses are XML-encoded in a single pass or a double pass. By default, XMLEscaping is Single, and Amazon Associates Web Service responses are encoded only once in XML. For example, if the response data includes an ampersand character (&amp;), the character is returned in its regular XML encoding (&amp;). If XMLEscaping is Double, the same ampersand character is XML-encoded twice (&amp;amp;). The Double value for XMLEscaping is useful in some clients, such as PHP, that do not decode text within XML elements. Defaults to &#39;Single&#39;.</span></div><div class='line' id='LC1012'><span class="sd">	 *</span></div><div class='line' id='LC1013'><span class="sd">	 * Returns:</span></div><div class='line' id='LC1014'><span class="sd">	 * 	&lt;CFResponse&gt; object</span></div><div class='line' id='LC1015'><span class="sd">	 *</span></div><div class='line' id='LC1016'><span class="sd">	 * See Also:</span></div><div class='line' id='LC1017'><span class="sd">	 * 	[SimilarityLookup Operation](http://docs.amazonwebservices.com/AWSECommerceService/latest/DG/SimilarityLookup.html)</span></div><div class='line' id='LC1018'><span class="sd">	 */</span></div><div class='line' id='LC1019'>	<span class="k">function</span> <span class="nf">similarity_lookup</span><span class="p">(</span><span class="nv">$item_id</span><span class="p">,</span> <span class="nv">$opt</span> <span class="o">=</span> <span class="k">null</span><span class="p">)</span></div><div class='line' id='LC1020'>	<span class="p">{</span></div><div class='line' id='LC1021'>		<span class="k">if</span> <span class="p">(</span><span class="o">!</span><span class="nv">$opt</span><span class="p">)</span> <span class="nv">$opt</span> <span class="o">=</span> <span class="k">array</span><span class="p">();</span></div><div class='line' id='LC1022'>		<span class="nv">$opt</span><span class="p">[</span><span class="s1">&#39;ItemId&#39;</span><span class="p">]</span> <span class="o">=</span> <span class="nv">$item_id</span><span class="p">;</span></div><div class='line' id='LC1023'><br/></div><div class='line' id='LC1024'>		<span class="k">if</span> <span class="p">(</span><span class="nb">isset</span><span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">assoc_id</span><span class="p">))</span></div><div class='line' id='LC1025'>		<span class="p">{</span></div><div class='line' id='LC1026'>			<span class="nv">$opt</span><span class="p">[</span><span class="s1">&#39;AssociateTag&#39;</span><span class="p">]</span> <span class="o">=</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">assoc_id</span><span class="p">;</span></div><div class='line' id='LC1027'>		<span class="p">}</span></div><div class='line' id='LC1028'><br/></div><div class='line' id='LC1029'>		<span class="k">return</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">pas_authenticate</span><span class="p">(</span><span class="s1">&#39;SimilarityLookup&#39;</span><span class="p">,</span> <span class="nv">$opt</span><span class="p">);</span></div><div class='line' id='LC1030'>	<span class="p">}</span></div><div class='line' id='LC1031'><span class="p">}</span></div></pre></div>
              
            
          </td>
        </tr>
      </table>
    
  </div>


          </div>
        </div>
      </div>
    </div>
  

  </div>


<div class="frame frame-loading" style="display:none;">
  <img src="https://d3nwyuy0nl342s.cloudfront.net/images/modules/ajax/big_spinner_336699.gif" height="32" width="32">
</div>

    </div>
  
      
    </div>

    <div id="footer" class="clearfix">
      <div class="site">
        <div class="sponsor">
          <a href="http://www.rackspace.com" class="logo">
            <img alt="Dedicated Server" height="36" src="https://d3nwyuy0nl342s.cloudfront.net/images/modules/footer/rackspace_logo.png?v2" width="38" />
          </a>
          Powered by the <a href="http://www.rackspace.com ">Dedicated
          Servers</a> and<br/> <a href="http://www.rackspacecloud.com">Cloud
          Computing</a> of Rackspace Hosting<span>&reg;</span>
        </div>

        <ul class="links">
          <li class="blog"><a href="https://github.com/blog">Blog</a></li>
          <li><a href="https://github.com/contact">Support</a></li>
          <li><a href="https://github.com/training">Training</a></li>
          <li><a href="http://jobs.github.com">Job Board</a></li>
          <li><a href="http://shop.github.com">Shop</a></li>
          <li><a href="https://github.com/contact">Contact</a></li>
          <li><a href="http://developer.github.com">API</a></li>
          <li><a href="http://status.github.com">Status</a></li>
        </ul>
        <ul class="sosueme">
          <li class="main">&copy; 2011 <span id="_rrt" title="0.05221s from fe4.rs.github.com">GitHub</span> Inc. All rights reserved.</li>
          <li><a href="/site/terms">Terms of Service</a></li>
          <li><a href="/site/privacy">Privacy</a></li>
          <li><a href="https://github.com/security">Security</a></li>
        </ul>
      </div>
    </div><!-- /#footer -->

    <script>window._auth_token = "05a14880fc623399529725b5c5429ee00a44de6e"</script>
    

<div id="keyboard_shortcuts_pane" class="instapaper_ignore readability-extra" style="display:none">
  <h2>Keyboard Shortcuts <small><a href="#" class="js-see-all-keyboard-shortcuts">(see all)</a></small></h2>

  <div class="columns threecols">
    <div class="column first">
      <h3>Site wide shortcuts</h3>
      <dl class="keyboard-mappings">
        <dt>s</dt>
        <dd>Focus site search</dd>
      </dl>
      <dl class="keyboard-mappings">
        <dt>?</dt>
        <dd>Bring up this help dialog</dd>
      </dl>
    </div><!-- /.column.first -->

    <div class="column middle" style='display:none'>
      <h3>Commit list</h3>
      <dl class="keyboard-mappings">
        <dt>j</dt>
        <dd>Move selected down</dd>
      </dl>
      <dl class="keyboard-mappings">
        <dt>k</dt>
        <dd>Move selected up</dd>
      </dl>
      <dl class="keyboard-mappings">
        <dt>t</dt>
        <dd>Open tree</dd>
      </dl>
      <dl class="keyboard-mappings">
        <dt>p</dt>
        <dd>Open parent</dd>
      </dl>
      <dl class="keyboard-mappings">
        <dt>c <em>or</em> o <em>or</em> enter</dt>
        <dd>Open commit</dd>
      </dl>
      <dl class="keyboard-mappings">
        <dt>y</dt>
        <dd>Expand URL to its canonical form</dd>
      </dl>
    </div><!-- /.column.first -->

    <div class="column last" style='display:none'>
      <h3>Pull request list</h3>
      <dl class="keyboard-mappings">
        <dt>j</dt>
        <dd>Move selected down</dd>
      </dl>
      <dl class="keyboard-mappings">
        <dt>k</dt>
        <dd>Move selected up</dd>
      </dl>
      <dl class="keyboard-mappings">
        <dt>o <em>or</em> enter</dt>
        <dd>Open issue</dd>
      </dl>
    </div><!-- /.columns.last -->

  </div><!-- /.columns.equacols -->

  <div style='display:none'>
    <div class="rule"></div>

    <h3>Issues</h3>

    <div class="columns threecols">
      <div class="column first">
        <dl class="keyboard-mappings">
          <dt>j</dt>
          <dd>Move selected down</dd>
        </dl>
        <dl class="keyboard-mappings">
          <dt>k</dt>
          <dd>Move selected up</dd>
        </dl>
        <dl class="keyboard-mappings">
          <dt>x</dt>
          <dd>Toggle select target</dd>
        </dl>
        <dl class="keyboard-mappings">
          <dt>o <em>or</em> enter</dt>
          <dd>Open issue</dd>
        </dl>
      </div><!-- /.column.first -->
      <div class="column middle">
        <dl class="keyboard-mappings">
          <dt>I</dt>
          <dd>Mark selected as read</dd>
        </dl>
        <dl class="keyboard-mappings">
          <dt>U</dt>
          <dd>Mark selected as unread</dd>
        </dl>
        <dl class="keyboard-mappings">
          <dt>e</dt>
          <dd>Close selected</dd>
        </dl>
        <dl class="keyboard-mappings">
          <dt>y</dt>
          <dd>Remove selected from view</dd>
        </dl>
      </div><!-- /.column.middle -->
      <div class="column last">
        <dl class="keyboard-mappings">
          <dt>c</dt>
          <dd>Create issue</dd>
        </dl>
        <dl class="keyboard-mappings">
          <dt>l</dt>
          <dd>Create label</dd>
        </dl>
        <dl class="keyboard-mappings">
          <dt>i</dt>
          <dd>Back to inbox</dd>
        </dl>
        <dl class="keyboard-mappings">
          <dt>u</dt>
          <dd>Back to issues</dd>
        </dl>
        <dl class="keyboard-mappings">
          <dt>/</dt>
          <dd>Focus issues search</dd>
        </dl>
      </div>
    </div>
  </div>

  <div style='display:none'>
    <div class="rule"></div>

    <h3>Network Graph</h3>
    <div class="columns equacols">
      <div class="column first">
        <dl class="keyboard-mappings">
          <dt><span class="badmono">←</span> <em>or</em> h</dt>
          <dd>Scroll left</dd>
        </dl>
        <dl class="keyboard-mappings">
          <dt><span class="badmono">→</span> <em>or</em> l</dt>
          <dd>Scroll right</dd>
        </dl>
        <dl class="keyboard-mappings">
          <dt><span class="badmono">↑</span> <em>or</em> k</dt>
          <dd>Scroll up</dd>
        </dl>
        <dl class="keyboard-mappings">
          <dt><span class="badmono">↓</span> <em>or</em> j</dt>
          <dd>Scroll down</dd>
        </dl>
        <dl class="keyboard-mappings">
          <dt>t</dt>
          <dd>Toggle visibility of head labels</dd>
        </dl>
      </div><!-- /.column.first -->
      <div class="column last">
        <dl class="keyboard-mappings">
          <dt>shift <span class="badmono">←</span> <em>or</em> shift h</dt>
          <dd>Scroll all the way left</dd>
        </dl>
        <dl class="keyboard-mappings">
          <dt>shift <span class="badmono">→</span> <em>or</em> shift l</dt>
          <dd>Scroll all the way right</dd>
        </dl>
        <dl class="keyboard-mappings">
          <dt>shift <span class="badmono">↑</span> <em>or</em> shift k</dt>
          <dd>Scroll all the way up</dd>
        </dl>
        <dl class="keyboard-mappings">
          <dt>shift <span class="badmono">↓</span> <em>or</em> shift j</dt>
          <dd>Scroll all the way down</dd>
        </dl>
      </div><!-- /.column.last -->
    </div>
  </div>

  <div >
    <div class="rule"></div>
    <div class="columns threecols">
      <div class="column first" >
        <h3>Source Code Browsing</h3>
        <dl class="keyboard-mappings">
          <dt>t</dt>
          <dd>Activates the file finder</dd>
        </dl>
        <dl class="keyboard-mappings">
          <dt>l</dt>
          <dd>Jump to line</dd>
        </dl>
        <dl class="keyboard-mappings">
          <dt>y</dt>
          <dd>Expand URL to its canonical form</dd>
        </dl>
      </div>
    </div>
  </div>
</div>

    

    <!--[if IE 8]>
    <script type="text/javascript" charset="utf-8">
      $(document.body).addClass("ie8")
    </script>
    <![endif]-->

    <!--[if IE 7]>
    <script type="text/javascript" charset="utf-8">
      $(document.body).addClass("ie7")
    </script>
    <![endif]-->

    
    <script type='text/javascript'></script>
    
  </body>
</html>

