<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>

    <!-- Disable tap highlight on IE -->
    <meta name="msapplication-tap-highlight" content="no">

    <!-- Web Application Manifest -->
    <link rel="manifest" href="manifest.json">

    <!-- Add to homescreen for Chrome on Android -->
    

    <!-- Add to homescreen for Safari on iOS -->
    

    <!-- Tile icon for Win8 (144x144 + tile color) -->
    

    

    <link rel="apple-touch-icon" sizes="57x57" href="images/touch/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="images/touch/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="images/touch/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="images/touch/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="images/touch/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="images/touch/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="images/touch/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="images/touch/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="images/touch/apple-icon-180x180.png">

    <link rel="icon" type="image/png" sizes="192x192"  href="images/android/android-icon-192x192.png">

    <link rel="icon" type="image/png" sizes="32x32" href="images/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="images/favicons/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicons/favicon-16x16.png">

    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">

    <!-- Color the status bar on mobile devices -->
    
    <meta name="theme-color" content="#ffffff">

    

    <script>
      window.setTimeout(function () {
        var $elLink = document.createElement('link');
        $elLink.rel = 'stylesheet';
        $elLink.href = 'https://fonts.googleapis.com/css?family=Signika';
        var godefer = document.getElementsByTagName('link')[0];
        godefer.parentNode.insertBefore( $elLink, godefer );
      }, 0);
    </script>

    <noscript><link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Signika"></noscript>

    
    
    
  <link rel="stylesheet" href="/styles/donate-p.css">


    <!-- SEO: If your mobile URL is different from the desktop URL, add a canonical link to the desktop page https://developers.google.com/webmasters/smartphone-sites/feature-phones -->
    <!--
      <link rel="canonical" href="http://www.example.com/">
      -->

  </head>

  <body id="page" class="sgnm" style="display:none;">

    
  
  
  <header class="sgnm-header-bg sgnm-header-contact">
  <div  class="sgnm-overlay" >
    <div class="sgnm-header-container">
      
      <a href="/">
        <img src="/images/logo.png" alt="Sri Guru Nanak Mission" class="sgnm-primary-logo">
      </a>
      

      <button type="button" id="btnPrimaryNavigation" class="sgnm-primary-header-navbar-toggle">
        <span class="sgnm-sr-only">Toggle navigation</span>
        <span class="sgnm-primary-header-navbar-toggle_icon_comp"></span>
        <span class="sgnm-primary-header-navbar-toggle_icon_comp"></span>
        <span class="sgnm-primary-header-navbar-toggle_icon_comp"></span>
      </button>

      <nav id="primaryNavigation" class="sgnm-primary-navigation">
        <ul class="sgnm-primary-navigation-list-container">
          <li><a href="/" class = "" >Home</a></li>
<li><a href="/about.html" class = "">About</a></li>

<li><a href="/events.html" class = "">Events</a></li>
<li><a href="/sewa.html" class = "">Sewa</a></li>
<li><a href="/donate.html" class = " selected ">Donate</a></li>
<li><a href="/contact.html" class = "">Contact</a></li>
        </ul>
      </nav>
    </div>
  </div>
</header>


    
  
<main> 
  
  <section class="sgnm-contact sgnm-container">
    <h1 class="sgnm-center">Make a Donation</h1>
    <hr>

    <p class="sgnm-center">Join hands and donate for Sri Guru Nanak Mission's various ongoing projects.</p>

    <div class="contact-us-address-container">
      
      <div class="contact-us-address-wrapper">
        <h2>India</h2>

        <p>Donors from India can make a donation using their Credit/Debit Cards</p>

        <section class="form-container sgnm-cb">
          <form action='/donate/pgRedirect.php' class='form' method="post">

            <p class='field half required'>
              <label class='label required' for='amount'>Amount (Rs.)</label>
              <input class='text-input' id='amount' name="entry.1347492945" type='number'>
            </p>
            <p class='field half required'>
              <label class='label required' for='email'>Email</label>
              <input class='text-input' id='email' name='entry.1876795347' required type='email'>
            </p>

            <span></span>

            <p class='field required half'>
              <label class='label required' for='first_name'>First Name</label>
              <input class='text-input' id='first_name' name='entry.916994642' required type='text'>
            </p>
            
            <p class='field half'>
              <label class='label required' for='last_name'>Last Name</label>
              <input class='text-input' id='last_name' name='entry.1914255949' type='text'>
            </p>

            <span></span>

            <p class='field half'>
              <label class='label required' for='gender'>Gender</label>
              <input class='text-input' id='gender' name='entry.1686007649' type='text'>
            </p>
            <p class='field required half'>
              <label class='label required' for='phone'>Phone</label>
              <input class='text-input' id='phone' name='entry.1281390623' required type='text'>
            </p>

            <span></span>
            
            <p class='field required half'>
              <label class='label required' for='address'>Address</label>
              <input class='text-input' id='address' name='entry.635759600' required type='text'>
            </p>
            <p class='field required half'>
              <label class='label required' for='country'>Country</label>
              <input class='text-input' id='country' name='entry.600878522' required type='text' value="India">
            </p>

            <p class='field'>
              <label class='label' for='message'>Message, if any</label>
              <textarea class='textarea' cols='50' id='message' name='entry.1581515560' rows='4'></textarea>
            </p>
            <p class='field'>
              <input class='button' type='submit' value='Send message' />
            </p>

            <input id="g_ORDER_ID"
            name="entry.47661656" autocomplete="off" type="hidden">
            
            <input id="g_CUST_ID"
						name="entry.645694622" autocomplete="off" type="hidden">

            <input id="ORDER_ID" tabindex="1" maxlength="20" size="20"
						name="ORDER_ID" autocomplete="off" type="hidden"
            value="<?php echo  "ORDS" . rand(10000,99999999)?>">

            <input type="hidden" id="CUST_ID" tabindex="2" maxlength="12" size="12" name="CUST_ID" autocomplete="off" value="<?php echo  "CUST" . rand(10000,99999999)?>"></td>

            <input type="hidden" id="INDUSTRY_TYPE_ID" tabindex="4" maxlength="12" size="12" name="INDUSTRY_TYPE_ID" autocomplete="off" value="Retail">

            <input type="hidden" id="CHANNEL_ID" tabindex="4" maxlength="12"
            size="12" name="CHANNEL_ID" autocomplete="off" value="WEB">
            
            <input type="hidden" title="TXN_AMOUNT" tabindex="10"
						type="text" name="TXN_AMOUNT" id="TXN_AMOUNT">
            
          </form>
        </section>

        <section>
            <div>Bank Name: HDFC Bank</div>
            <div>Name: Shree Guru Nanak Yog Mission</div>
            <div>Account No: 50100044595518</div>
            <div>Bank Address: Choti Baradari, Jalandhar, India</div>
            <div>IFSC Code: HDFC0001383</div>
        </section>
        
        <br>

        <section>
            <div>Bank Name: ICICI Bank</div>
            <div>Name: Shree Guru Nanak Yog Mission</div>
            <div>Account No: 008201250879</div>
            <div>Bank Address: GT road branch, Jalandhar, India</div>
            <div>IFSC Code: ICIC0000082</div>
        </section>

        <br>

        <div>In case you face any difficulty, kindly call:
        <br>
        0091-988-811-8120, 0091-981-527-7334</div>
      </div>

      
      <div class="contact-us-address-wrapper">
        <h2>Canada</h2>
        <div>Bank Name: TD Canada Trust</div>
        <div>Name: Shree Guru Nanak Yog Mission</div>
        <div>Account No: 02345216413</div>
        <div>Transit No: 02340 </div>
        <div>Inst No: 004 </div>

        <br>

        <div>In case you face any difficulty, kindly call:
        <br>
        001-604-783-5911, 001-778-708-6910</div>
      </div>

      
      <div class="contact-us-address-wrapper">
        <h2>United Kingdom</h2>
        <div>Bank Name: HSBC Bank</div>
        <div>Account No: 01736655</div>
        <div>Sort Code: 40-11-13</div>
        <div>Bank Address: Harbone branch</div>

        <br>

        <div>In case you face any difficulty, kindly call:
        <br>
        0044-796-700-5629, 0044-781-367-4720</div>
      </div>
    </div>

  </section>
</main>


    
    <footer class="sgnm-footer">
  <nav class="footer-navigation">
    <ul class="footer-navigation-list-container">
      <li><a href="/" class = "" >Home</a></li>
<li><a href="/about.html" class = "">About</a></li>

<li><a href="/events.html" class = "">Events</a></li>
<li><a href="/sewa.html" class = "">Sewa</a></li>
<li><a href="/donate.html" class = "">Donate</a></li>
<li><a href="/contact.html" class = "">Contact</a></li>
    </ul>
  </nav>
  <div class="sgnm-footer__terms-and-conditions">
    <a target="_blank" href="/terms-and-conditions.pdf">Terms & Conditions</a>
    &nbsp; | &nbsp;
    <a target="_blank" href="/privacy-policy.pdf">Privacy Policy</a>
  </div>
  <div class="copyright">
    <p>Copyright © 2018</p>
  </div>
</footer>

    

    <!-- build:js scripts/main.min.js -->
    <script src="scripts/main.js" async></script>
    <!-- endbuild -->

     

<script>
  "use strict";
  "object" != typeof window.CP && (window.CP = {}), window.CP.PenTimer = {
      programNoLongerBeingMonitored: !1,
      timeOfFirstCallToShouldStopLoop: 0,
      _loopExits: {},
      _loopTimers: {},
      START_MONITORING_AFTER: 2e3,
      STOP_ALL_MONITORING_TIMEOUT: 5e3,
      MAX_TIME_IN_LOOP_WO_EXIT: 2200,
      exitedLoop: function(o) {
          this._loopExits[o] = !0
      },
      shouldStopLoop: function(o) {
          if (this.programKilledSoStopMonitoring) return !0;
          if (this.programNoLongerBeingMonitored) return !1;
          if (this._loopExits[o]) return !1;
          var t = this._getTime();
          if (0 === this.timeOfFirstCallToShouldStopLoop) return this.timeOfFirstCallToShouldStopLoop = t, !1;
          var i = t - this.timeOfFirstCallToShouldStopLoop;
          if (i < this.START_MONITORING_AFTER) return !1;
          if (i > this.STOP_ALL_MONITORING_TIMEOUT) return this.programNoLongerBeingMonitored = !0, !1;
          try {
              this._checkOnInfiniteLoop(o, t)
          } catch (o) {
              return this._sendErrorMessageToEditor(), this.programKilledSoStopMonitoring = !0, !0
          }
          return !1
      },
      _sendErrorMessageToEditor: function() {
          try {
              if (this._shouldPostMessage()) {
                  var o = {
                      action: "infinite-loop",
                      line: this._findAroundLineNumber()
                  };
                  parent.postMessage(JSON.stringify(o), "*")
              } else this._throwAnErrorToStopPen()
          } catch (o) {
              this._throwAnErrorToStopPen()
          }
      },
      _shouldPostMessage: function() {
          return document.location.href.match(/boomerang/)
      },
      _throwAnErrorToStopPen: function() {
          throw "error found..."
      },
      _findAroundLineNumber: function() {
          var o = new Error,
              t = 0;
          if (o.stack) {
              var i = o.stack.match(/boomerang\S+:(\d+):\d+/);
              i && (t = i[1])
          }
          return t
      },
      _checkOnInfiniteLoop: function(o, t) {
          if (!this._loopTimers[o]) return this._loopTimers[o] = t, !1;
          var i = t - this._loopTimers[o];
          if (i > this.MAX_TIME_IN_LOOP_WO_EXIT) throw "Infinite Loop found on loop: " + o
      },
      _getTime: function() {
          return +new Date
      }
  }, window.CP.shouldStopExecution = function(o) {
      var t = window.CP.PenTimer.shouldStopLoop(o);
      return t === !0 && console.warn("[CodePen]: An infinite loop (or a loop taking too long) was detected, so we stopped its execution. Sorry!"), t
  }, window.CP.exitedLoop = function(o) {
      window.CP.PenTimer.exitedLoop(o)
  };

  // 
  // 
  // 
  // 
  // 
  // 
  // 
  // 
  // 
  // 

  (function() {
      var floatingLabel;

      floatingLabel = class floatingLabel {
          constructor(form, options = {}) {
              var event, i, input, j, label, len, len1, ref, ref1;
              if (!form) {
                  return;
              }
              options.focusClass || (options.focusClass = "focus");
              options.activeClass || (options.activeClass = "active");
              options.errorClass || (options.errorClass = "error");
              form.classList.add('has-floated-label');
              ref = form.querySelectorAll('label');
              for (i = 0, len = ref.length; i < len; i++) {
                  if (window.CP.shouldStopExecution(2)) {
                      break;
                  }
                  label = ref[i];
                  if (!(input = document.querySelector(`#${label.getAttribute('for')}`))) {
                      return;
                  }
                  ref1 = ['keyup', 'input', 'change'];
                  for (j = 0, len1 = ref1.length; j < len1; j++) {
                      if (window.CP.shouldStopExecution(1)) {
                          break;
                      }
                      event = ref1[j];
                      input.addEventListener(event, function() {
                          this.parentNode.classList.remove(options.errorClass);
                          return this.parentNode.classList.toggle(options.activeClass, !!this.value);
                      });
                  }
                  window.CP.exitedLoop(1);

                  input.addEventListener('focus', function() {
                      return this.parentNode.classList.add(options.focusClass);
                  });
                  input.addEventListener('blur', function() {
                      return this.parentNode.classList.remove(options.focusClass);
                  });
                  input.parentNode.classList.toggle(options.activeClass, !!input.value);
              }
              window.CP.exitedLoop(2);

          }

      };

      // initialize
      window.floatingLabel = new floatingLabel(document.querySelector('.form'));

  }).call(this);
</script>

<script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ="
    crossorigin="anonymous"></script>

<script>
 $( 'form' ).on( 'submit', function (ev) {
   ev.preventDefault();

   var _url = 'https://docs.google.com/forms/d/e/1FAIpQLSfaCvfx4rOLV4rGjF2ECRpKIj-tdrGVuJrCNCAVnAfHsdsvdA/formResponse';
   
   $( '#g_ORDER_ID' ).val( $( '#ORDER_ID' ).val() );
   $( '#g_CUST_ID' ).val( $( '#CUST_ID' ).val() );
   $( '#TXN_AMOUNT' ).val( $( '#amount' ).val() );

   $.ajax({
    type: "POST",
    url: _url,
    data: $('form').serialize(),
    success: function (ev) {
      $( 'form' ).off().submit();
    },
    error: function (ev) {
      $( 'form' ).off().submit();
    }
  });

 })
</script>



    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-108265007-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-108265007-1');
    </script>


  </body>

</html>