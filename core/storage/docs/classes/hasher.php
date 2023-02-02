

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="http://localhost/spoova/res/main/images/icons/favicon.png">
    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=.9, maximum-scale=1.0, user-scalable=1" />
<meta name="description" content="website_description" />
<link rel="icon" href="http://localhost/spoova/res/main/images/icons/favicon.png" />
    <link  rel="stylesheet" type="text/css" href="http://localhost/spoova/res/main/css/res.css" x-debug="res-css"><script src='http://localhost/spoova/res/main/js/jquery-3.6.0.js'></script><script src='http://localhost/spoova/res/main/css/bootstrap/js/bootstrap.min.js'></script><link  rel="stylesheet" type="text/css" href="http://localhost/spoova/res/main/css/mdb5/css/mdb.min.css"><script src='http://localhost/spoova/res/main/js/config.js'></script><script src='http://localhost/spoova/res/main/js/core.js'></script><script src='http://localhost/spoova/res/main/js/onLoaded.js'></script><script src='http://localhost/spoova/res/main/js/custom.js'></script><script src='http://localhost/spoova/res/main/js/device.js'></script><script src='http://localhost/spoova/res/main/js/loadImages.js'></script><script src='http://localhost/spoova/res/main/js/formValidator.js'></script><script src='http://localhost/spoova/res/main/js/jquery.mousewheel.js'></script><script src='http://localhost/spoova/res/main/js/anime.js'></script><script src='http://localhost/spoova/res/main/js/init.js'></script> 
    <style rel="build.css.tutorial"> 

     body{
          color: rgb(111, 110, 110);
          background-color : rgba(var(--white-dd));
     }

     .tutorial{
          min-height:100vh;
     }

     .pre-area{
          font: menu;
          font-size: .85em;
          display: inline-block;
          width:100%;
      }

     .pre-area:not([class*="bc-"]){
          background-color : rgba(var(--white-dd));
      }
  
     .pre-area.fix {
         font-size: 1em;
    }
     
     pre.pre-code {
          overflow: auto hidden;
          font-size: .95em; 
          margin-bottom:0;
          padding-top:1em;
     } 
     
     pre.pre-code:not([class*="c-"]) {
          color: #4f58a0;
     } 
     
     pre .comment {
          color: #909090;
     }
  
     .lacier.active {
          background-color: #3ecb32;
          color: white;
          box-shadow: 0 0 2px 3px #32bc27 inset;
     }
  
     .lacier.active .c-lime-dd{
          color: white;
     }  

     ul > li > a{
          color:inherit;
     }   

     ul > li > a:hover{
          color:inherit;
     }  

     [class*="foot-note"] {
         color: rgb(32, 130, 130);
     }

     :where(.d85){
          font-size: .85em;
     }
     :where(.d87){
          font-size: .87em;
     }
     :where([class*="foot-note"]){
          font-size: .87em;
     }
     :where([class*="foot-note"] .head){
          font-weight: 600;
     }

     [class*="rule-dashed"] {
          border-bottom: dashed .1em;
     }   
     
     [class*="hyperlink"] {
          border-bottom: dashed .1em;
     }

     .olist {
          font-family: calibri;
          color:#9d6216;
     }

     .control{
          right: 10px;
          top: 10px;
          opacity: 1;
          display: inline-block;
          transition: opacity .8s ease-in-out;
          z-index: 10;
      }

      .control .controller.fade-out{
          transition: transform .2s ease-in-out, opacity .3s ease-in-out ;
          transform: rotate(360deg);
      }

      .control .controller:not(.bi-x).fade-out{
          opacity: 0;
      }
      
      .blurry{
          z-index: 0;
      }

      @media (min-width: 1001px){

          .control{
               display: none;
          }

          .nav-left{
               left: 0;
          }

          .tutorial{
               width: calc(100% - 300px);
               float:right;
          }
          .blurry{
               display: none !important;
           }
     }


 </style><style rel="build.css.headers"> 
.--theme-dark > * {
   --white-dd: 11, 10, 28;
   --white:  21, 15, 39;
   --off-white: 22, 23, 62;
   --black-ll: 179, 179, 179; 
   --silver: 23, 28, 56;       
   --silver-d: 21, 25, 49;       
   --silver-dd: 23, 28, 56;       
}

.--theme-dark .--theme-esc{
   --white-dd: 240, 240, 240;
   --white:  255, 255, 255;
   --black-ll: 79, 79, 79;
}

.--theme-dark .bc-white-d.--theme-esc{
    --white-d: 21, 24, 51;
    --white-dd: 23, 28, 56;
    --silver-d: var(--white-dd);
    color: rgb(203, 198, 198);
}

.--theme-dark .bc-white-d.--theme-esc .flex-full > *{
    --white: 255, 255, 255;
    --white-d: 250, 250, 250;
    --white-dd: 240, 240, 240;
    --black-ll: 79, 79, 79;
    --silver: 230, 230, 230;
    --silver-d: 220, 220, 220;
    --silver-dd: 200, 200, 200;
}

body.--theme-dark{
    background-color : rgba(21, 15, 39);
}
 </style><style rel="build.css.navbars"> 

     .nav-left{
          min-height: 100vh;
          width: 300px;
          background-color: rgba(var(--white-dd));
          /* box-shadow: 0px 1px 1px 1px rgba(var(--white-dd)); */
          display: inline-block;
          left: -300px;
          transition: left .2s ease-in-out;
          z-index: 1;
     }

     .nav-left.in{
          left: 0;
     }

     .nav-left ul > li:hover{
          color: var(--orange-dd);
          cursor:pointer;
     }

     .nav-left ul a{
         color: rgb(114, 110, 105);
         list-style: none; 
     }

     .nav-left ul li {
         list-style: none;
     }

     .nav-left ul li:hover .ico:before {
         content: "◈";
         display: inline-block;
         padding: 4px;
         color: #bebebe;
     }

     .nav-left ul li a.active {
          color: orange;
     }

     .tutorial{
          width: 100%;
          transition: width .2s ease-in-out;
     }

     @media (min-width: 1001px){

          .nav-left{
               left: 0 !important;
          }

          .tutorial{
               width: calc(100% - 300px);
               float:right;
          }
     }
 </style>
    
    
    <script src='http://localhost/spoova/res/main/js/switcher.js'></script>
    
</head>
<body>

    <script>
        $(document).ready(function(){
            $('.control').click(function(){
                $btn = $(this).find('.controller')
                $isActive = $btn.hasClass('active');

                $btn.toggleClass('fade-out')
                $('.nav-left').toggleClass('in');
                $('.blurry').fadeToggle(function(){
                    if(!$isActive) { 
                        $btn.removeClass('bi-list').addClass('active bi-x') 
                    }else{
                        $btn.removeClass('active bi-x').addClass('bi-list') 
                    }
                });
            }) 
            $('.blurry').click(function(){
                $btn = $('.controller')
                $btn.toggleClass('fade-out')
                $('.nav-left').toggleClass('in');
                $('.blurry').fadeToggle(function(){
                    $btn.removeClass('active bi-x').addClass('bi-list')
                });
            });

            function runHash() {
                setTimeout(() => {
                    let hash = hashRunner(':get')
                    $('.lacier').removeClass('active');
                    $('#'+hash+' .lacier').addClass('active')  
                });                 
            }
            runHash();
            setTimeout(() => {

                $(window).bind('hashchange', function() {
                   runHash()
                })

            });

        })
    </script>
    
    <script> 
window.onload = function() {
    

    let switchBox = new Switcher;

    $('.theme-btn').click(function() {

        $('body').toggleClass('--theme-dark');

        if($('body').hasClass('--theme-dark')){                
            switchBox.set('spoovaTheme', '--theme-dark')
        }else{
            switchBox.set('spoovaTheme', '')    
        }

    })

    switchBox.bind('spoovaTheme', function(value){
        $('body').addClass(value)
    })


 
}
</script>

    <section class="">
        <div class="control font-em-2 fixed c-orange box">
            <div class="flex px-40 mid rad-r shadow anc-btn-link bc-white">
                <span class="bi-list controller flex"></span>
            </div>
        </div>
         

<!-- @lay('build.co.coords:header') -->

 

     

     <nav class="nav-left fixed">

          <div class="flex pxv-10">
               <div class="flex-icon theme-btn box bd bd-silver rad-r anc-btn-link flow-hide bc-silver ripple relative" style="transition: none">
                    <div class="px-40 b-cover ico-spin" data-src="http://localhost/spoova/res/main/images/icons/favicon.png" style="transition: none"></div>
                    <div class="font-em-1d5 px-40 flex mid overlay fb-9 calibri" style="top:-2px; left:.4px; z-index: 1; color:#202dd5;">
                         s 
                    </div>
               </div>
               <a href="<?= DomUrl('') ?>" class="flex">
                    <div class="flex midv mxl-8 fb-9 font-menu font-em-1d2" style="color: #202dd5">POOVA</div>
               </a>
          </div> <br>

          <ul class="list-square">
               <li> <a href="<?= DomUrl('docs/installation') ?>" class="<?= inPath('active') ?>"><span class="ico ico-spin"></span>Installation</a> </li>
               <li> <a href="<?= DomUrl('docs/live-server') ?>" class="<?= inPath('active') ?>"><span class="ico ico-spin"></span>Live Server</a></li>
               <li> <a href="<?= DomUrl('docs/database') ?>" class="<?= inPath('active') ?>"><span class="ico ico-spin"></span>Database</a> </li>
               <li> <a href="<?= DomUrl('docs/resource') ?>" class="<?= inPath('active') ?>"><span class="ico ico-spin"></span>Resource class</a> </li>
               <li> <a href="<?= DomUrl('docs/routings') ?>" class="<?= inPath('active') ?>"><span class="ico ico-spin"></span>Routing System</a> </li>
               <li> <a href="<?= DomUrl('docs/sessions') ?>" class="<?= inPath('active') ?>"><span class="ico ico-spin"></span>Handling Sessions</a> </li>
               <li> <a href="<?= DomUrl('docs/forms') ?>" class="<?= inPath('active') ?>"><span class="ico ico-spin"></span>Handling Forms</a> </li>
               <li> <a href="<?= DomUrl('docs/useraccounts') ?>" class="<?= inPath('active') ?>"><span class="ico ico-spin"></span>Handling Users</a> </li>
               <li> <a href="<?= DomUrl('docs/database/data-model') ?>" class="<?= inPath('active') ?>"><span class="ico ico-spin"></span>Handling DBModels</a> </li>
               <li> <a href="<?= DomUrl('docs/database/migrations') ?>" class="<?= inPath('active') ?>"><span class="ico ico-spin"></span>Handling Migrations</a> </li>
               <li> <a href="<?= DomUrl('docs/classes') ?>" class="<?= inPath('active') ?>"><span class="ico ico-spin"></span>Helper Classes</a> </li>
               <li> <a href="<?= DomUrl('docs/functions') ?>" class="<?= inPath('active') ?>"><span class="ico ico-spin"></span>Helper Functions</a> </li>
               <li> <a href="<?= DomUrl('docs/directives') ?>" class="<?= inPath('active') ?>"><span class="ico ico-spin"></span>Helper Directives</a> </li>
               <li> <a href="<?= DomUrl('docs/setters') ?>" class="<?= inPath('active') ?>"><span class="ico ico-spin"></span>Global Setters</a> </li>
               <li> <a href="<?= DomUrl('docs/mails') ?>" class="<?= inPath('active') ?>"><span class="ico ico-spin"></span>Handling Mails</a> </li>
               <li> <a href="<?= DomUrl('docs/cli') ?>" class="<?= inPath('active') ?>"><span class="ico ico-spin"></span>Cli Commands</a> </li>         
               <li> <a href="<?= DomUrl('docs/plugins') ?>" class="<?= inPath('active') ?>"><span class="ico ico-spin"></span>Composer and Plugins</a></li>
               <li> <a href="<?= DomUrl('docs/wmv') ?>" class="<?= inPath('active') ?>" ><span class="ico ico-spin"></span>The <span class="fb-6 pointer" title="Windows Models View">WMV</span> PATTERN</a></li>
               <li> <a href="<?= DomUrl('docs/libraries') ?>" class="<?= inPath('active') ?>"><span class="ico ico-spin"></span>Third-Party Libraries</a> </li>
               <li> <a href="<?= DomUrl('docs/other-features') ?>" class="<?= inPath('active') ?>"><span class="ico ico-spin"></span>Other Features</a> </li>
          </ul>
      
     </nav>



    <div class="box-full pxl-2 bc-white-dd pull-right">
    
        <section class="pxv-20 tutorial bc-white">
            <div class="font-em-1d2">

                
 <div class="font-menu pvs-4"> <a href="http://localhost/spoova/docs">Docs</a> <span class="bi-chevron-right"></span> <a href="http://localhost/spoova/docs/classes">Classes</a> <span class="bi-chevron-right"></span> <a href="http://localhost/spoova/docs/classes/hasher">Hasher</a>  </div>


                <div class="start font-em-d8">

                    <div class="font-em-1d5 c-orange">FileUploader</div> <br>  
                    
                    <div class="helper-classes">
                        <div class="fb-6">Introduction</div> <br>
                        <div class="">

                            <div class="">
                                The <code>Hasher</code> class is a tool that is used to generate 
                                hashes. It generates salts in multiple ways that makes it difficult to
                                bypass. The methods available on <code>Hasher</code> are:
                            </div> <br>

                            <ol>
                                <li> <a href="#sethash"> setHash </a> </li>
                                <li> <a href="#randomhash"> randomHash </a> </li>
                                <li> <a href="#hashfunc"> hashFunc </a> </li>
                                <li> <a href="#hashify"> hashify </a> </li>
                                <li> <a href="#randomize"> randomize </a> </li>
                            </ol>
                            
                        </div> 
                    </div>  


                    <div id="initialize" class="">
                        <div class="">
                            <div class="font-menu fb-6 bc-white-dd flex-full rad-4 pxv-8 lacier">
                                <div class="flex-full midv"> 
                                    <span class=" mxr-8 c-lime-dd">
                                    </span> Initializing class
                                </div>
                            </div> <br>

                            <div class="">
                                The hasher tool can be easily initialized as shown below.
                                <br><br>
                            
                                <div class="pre-area shadow">
                                    <div class="box-full">
                                        <div class="pxv-6 bc-off-white"><code>Sample: Initializing Hasher</code></div>
                                        <pre class="pre-code">
    $hasher  = new Hasher;
                                        </pre>
                                    </div>
                                </div>

                            </div>
                        </div> <br><br>
                    </div>

                    <div id="keywords" class="">
                        <div class="">
                            <div class="font-menu fb-6 bc-white-dd flex-full rad-4 pxv-8 lacier">
                                <div class="flex-full midv"> 
                                    <span class=" mxr-8 c-lime-dd">
                                    </span> keywords
                                </div>
                            </div> <br>
                            <div class="">
                                The following keywords should be noted:
                                <br><br>
                            
                                <div class="pre-area shadow">
                                    <div class="box-full">
                                        <div class="pxv-6 bc-off-white"><code>keywords</code></div>
                                        <pre class="pre-code">
    <span class="comment">
    data    : array or string data expected to be hashed

    secret  : password string for hashing

    length  : length of hash to be returned

    algo    : any hash algorithm or custom function.

    keys    : specific string of characters from which an hash string should be generated

    hashFunc: any acceptable function for hashing. The may be hashing algorithms or custom functions
    </span>
                                        </pre>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div> <br>       

                    <div id="sethash" class="">
                        <div class="">
                            <div class="font-menu fb-6 bc-white-dd flex-full rad-4 pxv-8 lacier">
                                <div class="flex-full midv"> 
                                    <span class=" mxr-8 c-lime-dd">
                                        <span class="numb-box">1.</span>
                                    </span> sethash
                                </div>
                            </div> <br>

                            <div class="">
                                The <code>sethash</code> method is used to set a data meant for hashing along with 
                                an optional secret password.
                                <br><br>
                                
                                <div class="pre-area shadow">
                                    <div class="box-full">
                                        <div class="pxv-6 bc-off-white"><code>Syntax: sethash</code></div>
                                        <pre class="pre-code">
    $hasher->sethash(data, secret);
                                        </pre>
                                    </div>
                                </div>
                            </div>

                        </div> <br>
                        We shall be looking at a series of examples below.
                            <br><br>
                            
                        <div class="pre-area shadow">
                            <div class="box-full">
                                <div class="pxv-6 bc-off-white"><code>Example: setting files</code></div>
                                <pre class="pre-code">

    $hasher->sethash(['user' => 'foo']); <span class="comment">// set a data to be hashed</span>

    $hasher->sethash(['user' => 'foo'], 'HS384'); <span class="comment">// set data to be hased with a secret password</span>

    $hasher->sethash('sometext'); <span class="comment">// set a string text to be hashed</span>

                                </pre>
                            </div>
                        </div>

                    
                    </div> <br>

                    <div id="randomhash" class="">
                        <div class="">
                            <div class="font-menu fb-6 bc-white-dd flex-full rad-4 pxv-8 lacier">
                                <div class="flex-full midv"> 
                                    <span class=" mxr-8 c-lime-dd">
                                        <span class="numb-box">2.</span>
                                    </span> randomHash
                                </div>
                            </div> <br>
                            <div class="">
                                The <code>randomHash()</code> method is used to generate a random hash string
                                <br><br>

                                <div class="pre-area shadow">
                                    <div class="box-full">
                                        <div class="pxv-6 bc-off-white"><code>Syntax: randomhash</code></div>
                                        <pre class="pre-code">
    $hasher->randomHash(length, keys, algo); 

    <span class="comment">
        where:
        
                length - optional length of hash to be returned
                keys   - an optional set of charaters from which hash should be picked 
                algo   - an optional custom function to hash generated keys.
                                        </span>
                                        </pre>
                                    </div>
                                </div> 

                                <div class="pre-area shadow">
                                    <div class="box-full">
                                        <div class="pxv-6 bc-off-white"><code>Examples: randomHash</code></div>
                                        <pre class="pre-code">
    $hasher->randomHash(50);  <span class="comment no-select">generate 50 character string</span>

    $hasher->randomHash(50, 'abc');  <span class="comment no-select">generate 50 character string from abc</span>

    $hasher->randomHash('', 'abc', 'sha1');  <span class="comment no-select">hash 'abc' with sha1 + time</span>

    <span class="comment no-select">
        Note: When using hash algorithms, length of character returned depends on the hash algorithm itself. 
            Hence using lengths does not have any effect.
    </span>
                                        </pre>
                                    </div>
                                </div>
                            </div>
                        </div> <br>
                    </div>

                    <div id="hashFunc" class="">
                        <div class="">
                            <div class="font-menu fb-6 bc-white-dd flex-full rad-4 pxv-8 lacier">
                                <div class="flex-full midv"> 
                                    <span class=" mxr-8 c-lime-dd">
                                        <span class="numb-box">3.</span>
                                    </span> hashFunc
                                </div>
                            </div> <br>
                            <div class="">
                                The <code>hashFunc()</code> method sets the algorithms for hashing.
                                <br><br>
                        
                                <div class="pre-area shadow">
                                    <div class="box-full">
                                        <div class="pxv-6 bc-off-white"><code>Syntax: hashFunc</code></div>
                                        <pre class="pre-code">
    $hasher->hashFunc(algo); <span class="comment">// supplies data  to be hashed.</span>
                                        </pre>
                                    </div>
                                </div>

                                <div class="pre-area shadow">
                                    <div class="box-full">
                                        <div class="pxv-6 bc-off-white"><code>Example: hashFunc</code></div>
                                        <pre class="pre-code">
    $hasher->setHash(['foo','bar'],'1234');

    $hasher->hashFunc(['sha1']); <span class="comment">//use one algo for hashing</span>

    $hasher->hashFunc(['sha1', 'md5']); <span class="comment">//use two algos for hashing</span>
                                        </pre>
                                    </div>
                                </div>
                            </div>
                        </div> <br>
                        <div class="font-menu">
                        In the above sample, the array data will be hashed depending on the number of algorithms 
                        supplied. 
                        </div>
                    </div> <br>

                    <div id="hashify" class="">
                        <div class="">
                            <div class="font-menu fb-6 bc-white-dd flex-full rad-4 pxv-8 lacier">
                                <div class="flex-full midv"> 
                                    <span class=" mxr-8 c-lime-dd">
                                        <span class="numb-box">4.</span>
                                    </span> hashify
                                </div>
                            </div> <br>

                            <div class="">
                                This method executes the hash code. It works in different formats which are revealed below
                                <br><br>
                    
                                <div class="pre-area shadow">
                                    <div class="box-full">
                                        <div class="pxv-6 bc-off-white"><code>Syntax: hashify</code></div>
                                        <pre class="pre-code">
    $hasher->hasify(param1, param2); 
        <span class="comment no-select">
            where:
            
            @param [int|bool|array] param1 (case 1)
                param1 == (int = 0) => reset hash and return first hash  
                param1 == (int > 0) => number of times for hashing
                param1 == (array | string) => list of hashing algorithms
        
            @param [int] param2 (case 2)
                param2 == (int > 0) => number of times for hashing
                param2 == (int = 0) => reset hash and return first hash 
    
            Note: The hashify function takes one or two arguments.

                One argument execute case 1 
                Two arguments execute case 2
        </span>
                                        </pre>
                                    </div>
                                </div>

                                <div class="pre-area shadow">
                                    <div class="box-full">
                                        <div class="pxv-6 bc-off-white"><code>Example 1: hashify</code></div>
                                        <pre class="pre-code">
    $hasher->setHash('mydata', 'password');
    $hasher->hashFunc(['sha1','md5']);  <span class="comment">// set function(s) to use for hashtype</span>
    
    $hash1 = $hasher->hashify();  <span class="comment">//first hash</span>

    $hash2 = $hasher->hashify();  <span class="comment">//second hash</span>

    $hash3 = $hasher->hashify();  <span class="comment">//third hash</span>

    $hash4 = $hasher->hashify(0); <span class="comment">//reset hash</span>

    $hash5 = $hasher->hashify();  <span class="comment">//second hash</span>
    <span class="comment no-select"> 
    Note: In the example above, every hash is rehashed at each call until the 
    counter is set back to 0. <span class="fb-9">$hash4</span> will return the same data as <span class="fb-9">$hash1</span> because 
    the counter was reset and <span class="fb-9">$hash5</span> will return the same data as <span class="fb-9">$hash2</span>
    </span>
                                        </pre>
                                    </div>
                                </div>
                                <div class="pre-area shadow">
                                    <div class="box-full">
                                        <div class="pxv-6 bc-off-white"><code>Example 2: hashify</code></div>
                                        <pre class="pre-code">
    $hasher->setHash('mydata', 'password');

    $hasher->hashFunc(['sha1','md5']);  <span class="comment">//set function(s) to use for hashtype</span>
    
    $hash3 = $hasher->hashify(3); <span class="comment">//return exactly 3 hash executions</span>

    <span class="comment"> 
    In the example above the hash returned will be equivalent to 3 exactly three 
    hashes made just as example 1 above.
                                        </span>
                                        </pre>
                                    </div>
                                </div>
                                <div class="pre-area shadow">
                                    <div class="box-full">
                                        <div class="pxv-6 bc-off-white"><code>Example 3: hashify</code></div>
                                        <pre class="pre-code">
    $hasher->setHash('mydata', 'password');

    <span class="comment">//set hash functions within hashify</span>
    $hashArr = $hasher->hashify(['sha1','md5']);
    $hashStr = $hasher->hashify('sha1');

    <span class="comment"> 
    The examples above shows that hash funcs can be supplied within the hashify method itself. 
    When text strings or arrays are supplied as one argument, hashify processes such arguments 
    as hash functions.
    </span>
                                        </pre>
                                    </div>
                                </div>
                                
                                <div class="pre-area shadow">
                                    <div class="box-full">
                                        <div class="pxv-6 bc-off-white"><code>Example 4: hashify</code></div>
                                        <pre class="pre-code">
    $hasher->setHash('mydata', 'password');
    `
    <span class="comment">//set hash functions and number of times of rehash within hashify</span>
    $hashArr = $hasher->hashify(['sha1','md5'], 4); 
    $hashStr = $hasher->hashify('sha1', 4);

    <span class="comment"> 
    When two arguments are supplied, the first argument resolves as hash function while the second argument resolves as 
    number of times for rehashing. When hash functions are declared within the <code>hashify</code> method, it overides 
    the default set.
    </span>
                                        </pre>
                                    </div>
                                </div>
                            </div>
                        </div> <br>
                    </div>

                    <div id="randomize" class="">
                        <div class="">
                            <div class="font-menu fb-6 bc-white-dd flex-full rad-4 pxv-8 lacier">
                                <div class="flex-full midv"> 
                                    <span class=" mxr-8 c-lime-dd">
                                        <span class="numb-box">5.</span>
                                    </span> randomize
                                </div>
                            </div> <br>
                            <div class="">
                                This method is used to randomize an hash function. When used, it provides a one-way 
                                hash code that cannot be recovered. The <code>randomize</code> method makes sure that 
                                the data returned by a hash is never the same at different times.
                                <br><br>
                    
                                <div class="pre-area shadow">
                                    <div class="box-full">
                                        <div class="pxv-6 bc-off-white"><code>Syntax: sign</code></div>
                                        <pre class="pre-code">
    $hasher->randomize(bool|string); 
    <span class="comment">
        where:

            bool:true  => allow randomize (default)
            bool:false => disallow randomize
            string     => string text used to randomize
    </span>
                                        </pre>
                                    </div>
                                </div>

                                <div class="pre-area shadow">
                                    <div class="box-full">
                                        <div class="pxv-6 bc-off-white"><code>Example 1: randomize</code></div>
                                        <pre class="pre-code">

    $hasher->setHash(['somearray']);
        
    $hasher->randomize(); <span class="comment">//uses time</span>

    $hasher->hashify(); <span class="comment">//generates a new hash using current time</span>

                                        </pre>
                                    </div>
                                </div>
                                
                                <div class="pre-area shadow">
                                    <div class="box-full">
                                        <div class="pxv-6 bc-off-white"><code>Example 2: randomize</code></div>
                                        <pre class="pre-code">
    $hasher->setHash(['somearray']);
        
    $hasher->randomize('sometext'); <span class="comment">//uses sometext + time</span>

    $hash = $hasher->hashify('sha1'); <span class="comment">//generates a new hash every time with 'sometext' using sha1 algo</span>

    var_dump( $hash ) <span class="comment">//output hash</span>
                                        </pre>
                                    </div>
                                </div>

                            </div>
                        </div> <br>
                    </div>
                    
                
 <div class="font-menu pvs-4"> <a href="http://localhost/spoova/docs">Docs</a> <span class="bi-chevron-right"></span> <a href="http://localhost/spoova/docs/classes">Classes</a> <span class="bi-chevron-right"></span> <a href="http://localhost/spoova/docs/classes/hasher">Hasher</a>  </div>


                </div>
    
    


         <div class="blurry page-overlay ov-d5 hide"></div>
    </section>

</body>
</html>