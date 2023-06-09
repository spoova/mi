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
    color: rgb(125, 125, 125);
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
<body class="--theme-dark">

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
               <li> <a href="<?= DomUrl('docs/wmv') ?>" class="<?= inPath('active') ?>" ><span class="ico ico-spin"></span><span class="fb-6 pointer" title="Windows Models View">WMV</span> PATTERN</a></li>
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
               <li> <a href="<?= DomUrl('docs/template') ?>" class="<?= inPath('active') ?>"><span class="ico ico-spin"></span>Template Engine</a> </li>
               <li> <a href="<?= DomUrl('docs/setters') ?>" class="<?= inPath('active') ?>"><span class="ico ico-spin"></span>Global Setters</a> </li>
               <li> <a href="<?= DomUrl('docs/mails') ?>" class="<?= inPath('active') ?>"><span class="ico ico-spin"></span>Handling Mails</a> </li>
               <li> <a href="<?= DomUrl('docs/cli') ?>" class="<?= inPath('active') ?>"><span class="ico ico-spin"></span>Cli Commands</a> </li>         
               <li> <a href="<?= DomUrl('docs/plugins') ?>" class="<?= inPath('active') ?>"><span class="ico ico-spin"></span>Composer and Plugins</a></li>
               <li> <a href="<?= DomUrl('docs/libraries') ?>" class="<?= inPath('active') ?>"><span class="ico ico-spin"></span>Third-Party Libraries</a> </li>
               <li> <a href="<?= DomUrl('docs/other-features') ?>" class="<?= inPath('active') ?>"><span class="ico ico-spin"></span>Other Features</a> </li>
          </ul>
      
     </nav>



        <div class="box-full pxl-2 bc-white-dd pull-right">
        
            <section class="pxv-10 tutorial bc-white">
                <div class="font-em-1d2">

                    
 <div class="font-menu pvs-4"> <a href="http://localhost/spoova/docs">Docs</a> <span class="bi-chevron-right"></span> <a href="http://localhost/spoova/docs/classes">Classes</a> <span class="bi-chevron-right"></span> <a href="http://localhost/spoova/docs/classes/cli">Cli</a>  </div>


                    <div class="start font-em-d8">

                        <div class="font-em-1d5 c-orange">Cli Class</div> <br>  
                        
                        <div class="helper-classes">
                            <div class="fb-6">Introduction</div> <br>
                            <div class="">

                                <div class="">
                                    The <code>cli</code> class is a command line tool for displaying contents on the command line. This class does not in any way 
                                    run or process commands. It only makes it easier to perform tasks like clearing lines, coloring texts, setting up prompts or 
                                    running some simple animations. There are several methods that can be applied based on preference.
                                    These methods have been categorized under different subheadings.
                                </div> <br>

                                <div>
                                    <div>
                                        <div class="font-em-1d2 c-orange-dd"> Cli texts</div>
                                        <div class="">
                                            Most of the methods that fall under this category are designed to define a particular way or position in which 
                                            a text must be displayed. These method deals mostly with the position of console pointer by either shifting the position 
                                            or utilizing its current position. The following are method that are grouped under this category. <br><br>
                                            <ul>
                                                <li>textIndent</li>
                                                <li>textView</li>
                                                <li>textYield</li>
                                                <li>dots</li>
                                                <li>backspace</li>
                                                <li>cls</li>
                                                <li>clearLine</li>
                                                <li>clearUp</li>
                                                <li>upLine</li>
                                                <li>br</li>
                                                <li>break</li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div>
                                        <div class="font-em-1d2 c-orange-dd"> Cli colors</div>
                                        <div class="">
                                            There are certain color related methods that are used to apply colors on console text. 
                                            These colors can be applied on the text itself or as a text background. The cli colors method 
                                            are designed to makes it easier to add colors to texts. The methods below fall under this category<br><br>
                                            <ul>
                                                <li>color</li>
                                                <li>danger</li>
                                                <li>warn</li>
                                                <li>alert</li>
                                                <li>valid</li>
                                                <li>bgColor</li>
                                                <li>bgDanger</li>
                                                <li>bgWarn</li>
                                                <li>bgAlert</li>
                                                <li>bgValid</li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div>
                                        <div class="font-em-1d2 c-orange-dd"> Cli notifications</div>
                                        <div class="">
                                            Notifications are mostly needed in cases where we need the developer's terminal to notify and call the attention of a console user 
                                            to a particular response. These method prefixes messages with special key words that makes it easier to understand the purpose or reason 
                                            why a message is displayed. <br><br>
                                            <ul>
                                                <li>error</li>
                                                <li>warning</li>
                                                <li>caution</li>
                                                <li>notice</li>
                                                <li>success</li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div>
                                        <div class="font-em-1d2 c-orange-dd"> Cli loading animations</div>
                                        <div class="">
                                            The cli loading animation system are used in certain situations to reflect that a process is ongoing. While they mostly do not provide information 
                                            about the current process execution state, they are pretty useful when it comes to helping console user understand that some actions are currently 
                                            taking effect. Animation methods include: <br><br>
                                            <ul> 
                                                <li>textYield()</li>
                                                <li>animeTest()</li>
                                                <li>play()</li>
                                                <li>pause()</li>
                                                <li>animeType()</li>
                                                <li>animate()</li>
                                                <li>loadTime()</li>
                                                <li>endAnime()</li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div>
                                        <div class="font-em-1d2 c-orange-dd"> Cli prompts</div>
                                        <div class="">
                                            <div class="pvt-6 pvb-10">
                                                The console or terminal's prompts are used to obtain inputs from a console user. These methods not only make it possible to obtain inputs 
                                                but it also makes it easier to set up a response validation system. There are only two major methods for fetching user inputs while each of these 
                                                two methods has its own child methods responsible for authenticating responses. 
                                            </div>
                                            <ul>
                                                <li>prompt()</li>
                                                <li>promptIsMax()</li>
                                                <li>promptInvalid()</li>
                                                <li>q()</li>
                                                <li>qFailed()</li>
                                                <li>qValid()</li>
                                                <li>qmax()</li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div>
                                        <div class="font-em-1d2 c-orange-dd"> Cli storage</div>
                                        <div class="">
                                            <div class="pvt-6 pvb-10">
                                                The Cli class has a storage class in which items such as functions or texts are stored in a way they can be called later. Usually, 
                                                functions and string are stored with an identifier name to be used later. This makes it easier to keep recurring values accross the cli system.
                                                The methods that fall under this category are:
                                            </div>
                                            <ul>
                                                <li>save()</li>
                                                <li>fn()</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                
                            </div> 
                        </div>  

                        <div id="textIndent" class="">
                            <div class="">
                                <div class="font-menu fb-6 bc-white-dd flex-full rad-4 pxv-8 lacier">
                                    <div class="flex-full midv"> 
                                        <span class=" mxr-8 c-lime-dd">
                                            <span class="numb-box">1.</span>
                                        </span> Cli::textIndent()
                                    </div>
                                </div> <br>

                                <div class="">
                                    This method is used to only apply indents on supplied text value. Once the indent is applied, the resulting text will 
                                    be returned as a string.
                                    <br><br>
                                
                                    <div class="pre-area">
                                        <div class="box-full">
                                            <div class="pxv-6 bc-off-white"><code>Syntax: textIndent</code></div>
                                            <pre class="pre-code">
    Cli::textIndent($text, $spaces);
    <span class="comment">
        where: 
        
          $text   : text to be indented
          $spaces : number of indents to be applied
    </span>
                                            </pre>
                                        </div>
                                        </div>
                                </div>
                            </div> <br><br>
                        </div>

                        <div id="textView" class="">
                            <div class="">
                                <div class="font-menu fb-6 bc-white-dd flex-full rad-4 pxv-8 lacier">
                                    <div class="flex-full midv"> 
                                        <span class=" mxr-8 c-lime-dd">
                                            <span class="numb-box">2.</span>
                                        </span> Cli::textView()
                                    </div>
                                </div> <br>

                                <div class="">
                                    This method is used to display text contents on the command line. It is capable of applying features like spaces, indents, 
                                    breaks and delays on text to be display.
                                    <br><br>
                                
                                    <div class="pre-area">
                                        <div class="box-full">
                                            <div class="pxv-6 bc-off-white"><code>Syntax: textView</code></div>
                                            <pre class="pre-code">
    Cli::textView($text, $spacing, $break, $pause);
    <span class="comment">
        where: 
        
          $text    : text to be displayed
          $spacing : An optional string format that applies spaces before and after the supplied text using a pipe divider
          $break   : An optional string format that applies breaks before and after the supplied text using a pipe divider
          $pause   : An optional string format that applies delays before and after a string is displayed.
    </span>
                                            </pre>
                                        </div>
                                    </div> <br>
                                
                                    <div class="pre-area">
                                        <div class="box-full">
                                            <div class="pxv-6 bc-off-white"><code>Example 1: textView</code></div>
                                            <pre class="pre-code">
    Cli::textView("Hello text", 2, 3, 1);
    <span class="comment no-select">
    In the code above, the text "Hello text" will be printed on the cli using specific features:

        1. The <code class="c-orange-d">2</code> defines that 2 spaces should be applied before the text is printed
        
        2. The <code class="c-orange-d">3</code> defines that 3 line breaks should be added before text is printed

        3. The <code class="c-orange-d">1</code> defines a 1 second delay before text is printed.
    </span>
                                            </pre>
                                        </div>
                                    </div> <br>
                                
                                    <div class="pre-area">
                                        <div class="box-full">
                                            <div class="pxv-6 bc-off-white"><code>Example 2: textView</code></div>
                                            <pre class="pre-code">
    Cli::textView("Hello text", "2|2", "3|2", '2|1');
    <span class="comment no-select"> 
    The code above reveals that pipes are used to specify the position before and after when an event should be applied.

        1. The <code class="c-orange-d">"2|2"</code> defines that 2 spaces before and 2 spaces after should be applied on the text
        
        2. The <code class="c-orange-d">"3|2"</code> defines that 3 line breaks before and 2 breaks after should be applied on the text

        3. The <code class="c-orange-d">"2|1"</code> defines that 2 seconds delay before and 1 delay after should be applied on the text.
    </span>
                                            </pre>
                                        </div>
                                    </div> <br>


                                </div>
                            </div> <br><br>
                        </div>

                        <div id="List" class="">
                            <div class="">
                                <div class="font-menu fb-6 bc-white-dd flex-full rad-4 pxv-8 lacier">
                                    <div class="flex-full midv"> 
                                        <span class=" mxr-8 c-lime-dd">
                                            <span class="numb-box">3.</span>
                                        </span> Cli::List()
                                    </div>
                                </div> <br>
                                <div class="">
                                    The <code>List</code> method is used to display an array of strings with numbers. The numbering starts from 
                                    zero upward. However, associative arrays will use ther specific array keys
                                    <br><br>
                                    
                                    <div class="pre-area">
                                        <div class="box-full">
                                            <div class="pxv-6 bc-off-white"><code>Syntax: list</code></div>
                                            <pre class="pre-code">
    Cli::list($array, $spacing, $break, $interval);
    <span>
        where:

          $array      : array of strings to be displayed 
          $spacing    : An optional spacing format that applies spacing on each text to be displayed 
          $break      : An optional line breaking format that applies spacing on each text to be displayed 
          $interval   : An optional delay format that applies delay in seconds on each text to be displayed 

    </span>
                                            </pre>
                                        </div>
                                    </div> <br>
                                    
                                    <div class="pre-area">
                                        <div class="box-full">
                                            <div class="pxv-6 bc-off-white"><code>Example 1: List</code></div>
                                            <pre class="pre-code">
    Cli::List(['Foo','Bar', 'Baz'], 0, "|1");
    <span>
     <span class="comment no-select">The response will be as below:</span> 

     1. Foo
     2. Bar
     3. Baz
    </span>
                                            </pre>
                                        </div>
                                    </div> <br>
                                    
                                    <div class="pre-area">
                                        <div class="box-full">
                                            <div class="pxv-6 bc-off-white"><code>Example 2: List</code></div>
                                            <pre class="pre-code">
    Cli::List(['a'=>'Foo','b'=>'Bar', 'c' => 'Baz'], 0, "|1");
    <span>
     <span class="comment no-select">The response will be as below:</span> 

     a. Foo
     b. Bar
     c. Baz
    </span>
                                            </pre>
                                        </div>
                                    </div> <br>


                                </div>
                            </div> <br>

                        <div id="textYield" class="">
                            <div class="">
                                <div class="font-menu fb-6 bc-white-dd flex-full rad-4 pxv-8 lacier">
                                    <div class="flex-full midv"> 
                                        <span class=" mxr-8 c-lime-dd">
                                            <span class="numb-box">4.</span>
                                        </span> Cli::textYield()
                                    </div>
                                </div> <br>
                                <div class="">
                                    This function is used to yield a particular text. Yielding here means that text will first be printed while 
                                    a loading animation will run after.
                                    <br><br>
                                    
                                    <div class="pre-area">
                                        <div class="box-full">
                                            <div class="pxv-6 bc-off-white"><code>Syntax: textYield</code></div>
                                            <pre class="pre-code">
    Cli::textYield($text, $yield, $pause);
    <span>
        where:

          $text     : test to be displayed 
          $yield    : Integer number of times the animation must run
          $pause    : An optional delay that is added after the loading animation is completed.
    </span>
                                            </pre>
                                        </div>
                                    </div>

                                </div>
                            </div> <br>
                        
                        </div> <br>

                        <div id="backspace" class="">
                            <div class="">
                                <div class="font-menu fb-6 bc-white-dd flex-full rad-4 pxv-8 lacier">
                                    <div class="flex-full midv"> 
                                        <span class=" mxr-8 c-lime-dd">
                                            <span class="numb-box">5.</span>
                                        </span> Cli::backspace()
                                    </div>
                                </div> <br>
                                <div class="">
                                The <code>backspace()</code> method is used to delete the text characters starting from the right towards the 
                                left side. 
                                <br><br>

                            <div class="pre-area">
                                <div class="box-full">
                                    <div class="pxv-6 bc-off-white"><code>Syntax: backspace</code></div>
                                    <pre class="pre-code">
    Cli::backspace($times); 
    <span class="comment no-select">
        where: $times is the number of times a backspace must be applied. The default value is "1".
    </span>
                                    </pre>
                                </div>
                            </div>  
                            
                                </div>
                            </div> <br>
                        </div>

                        <div id="cls" class="">
                            <div class="">
                                <div class="font-menu fb-6 bc-white-dd flex-full rad-4 pxv-8 lacier">
                                    <div class="flex-full midv"> 
                                        <span class="mxr-8 c-lime-dd">
                                            <span class="numb-box">6.</span>
                                        </span> Cli::cls()
                                    </div>
                                </div> <br>
                                <div class="">
                                The <code>cls()</code> method is used to clear the terminal screen.
                                </div>
                            </div> 
                        </div><br>

                        <div id="clearUp" class="">
                            <div class="">
                                <div class="font-menu fb-6 bc-white-dd flex-full rad-4 pxv-8 lacier">
                                    <div class="flex-full midv"> 
                                        <span class="mxr-8 c-lime-dd">
                                            <span class="numb-box">7.</span>
                                        </span> Cli::clearUp()
                                    </div>
                                </div> <br>
                                <div class="">
                                The <code>clearUp()</code> method is used to delete a line before a text is printed. It shifts the positon of the cli pointer 
                                up by deleting all characters found along the way to its destination point.
                                <br><br>

                            <div class="pre-area">
                                <div class="box-full">
                                    <div class="pxv-6 bc-off-white"><code>Syntax: clearUp</code></div>
                                    <pre class="pre-code">
    Cli::clearUp($times); 
    <span class="comment no-select">
        where: $times is the number of times a the pointer must move up. The default value is "1".
    </span>
                                    </pre>
                                </div>
                            </div>  
                            
                                </div>
                            </div> <br>
                        </div>

                        <div id="clearLine" class="">
                            <div class="">
                                <div class="font-menu fb-6 bc-white-dd flex-full rad-4 pxv-8 lacier">
                                    <div class="flex-full midv"> 
                                        <span class=" mxr-8 c-lime-dd">
                                            <span class="numb-box">8.</span>
                                        </span> Cli::clearLine()
                                    </div>
                                </div> <br>
                                <div class="">
                                The <code>clearLine()</code> method is used to delete the entire character on a line. This method takes 
                                no arguments.
                                <br><br>

                            <div class="pre-area">
                                <div class="box-full">
                                    <div class="pxv-6 bc-off-white"><code>Syntax: backspace</code></div>
                                    <pre class="pre-code">
    Cli::backspace($times); 
    <span class="comment no-select">
        where: $times is the number of times a backspace must be applied. The default value is "1".
    </span>
                                    </pre>
                                </div>
                            </div>  
                            
                                </div>
                            </div> <br>
                        </div>

                        <div id="upLine" class="">
                            <div class="">
                                <div class="font-menu fb-6 bc-white-dd flex-full rad-4 pxv-8 lacier">
                                    <div class="flex-full midv"> 
                                        <span class=" mxr-8 c-lime-dd">
                                            <span class="numb-box">9.</span>
                                        </span> Cli::upLine()
                                    </div>
                                </div> <br>
                                <div class="">
                                The <code>upLine()</code> method is used to shift the position of the command line pointer upwards without 
                                deleting any character.
                                <br><br>

                            <div class="pre-area">
                                <div class="box-full">
                                    <div class="pxv-6 bc-off-white"><code>Syntax: upLine</code></div>
                                    <pre class="pre-code">
    Cli::upLine($times); 
    <span class="comment no-select">
        where: $times is the number of times a cursor must be shifted upwards.
    </span>
                                    </pre>
                                </div>
                            </div>  
                            
                                </div>
                            </div> <br>
                        </div>

                        <div id="br" class="">
                            <div class="">
                                <div class="font-menu fb-6 bc-white-dd flex-full rad-4 pxv-8 lacier">
                                    <div class="flex-full midv"> 
                                        <span class=" mxr-8 c-lime-dd">
                                            <span class="numb-box">10.</span>
                                        </span> Cli::br()
                                    </div>
                                </div> <br>
                                <div class="">
                                The <code>br()</code> method is used to apply text line breaks after a text has been printed.
                                <br><br>

                            <div class="pre-area">
                                <div class="box-full">
                                    <div class="pxv-6 bc-off-white"><code>Syntax: br</code></div>
                                    <pre class="pre-code">
    Cli::br($times); 
    <span class="comment no-select">
        where: $times is the number of times a line break must be applied. Default value is "1".
    </span>
                                    </pre>
                                </div>
                            </div>  
                            
                                </div>
                            </div> <br>
                        </div>

                        <div id="break" class="">
                            <div class="">
                                <div class="font-menu fb-6 bc-white-dd flex-full rad-4 pxv-8 lacier">
                                    <div class="flex-full midv"> 
                                        <span class=" mxr-8 c-lime-dd">
                                            <span class="numb-box">11.</span>
                                        </span> Cli::break()
                                    </div>
                                </div> <br>
                                <div class="">
                                The <code>break()</code> method is also used to apply text line breaks after a text has been printed. The difference between <code>Cli::br()</code> 
                                and <code>Cli::break()</code> is that the latter prints directly by default while the former returns line breaks. However, the <code>Cli::break()</code> 
                                can also be modified to return line breaks rather than printing them. This can be done by setting the second argument to false.
                                <br><br>

                            <div class="pre-area">
                                <div class="box-full">
                                    <div class="pxv-6 bc-off-white"><code>Syntax: break</code></div>
                                    <pre class="pre-code">
    Cli::break($times, $print); 
    <span class="comment no-select">
        where: 
        
          $times is the number of times a line break must be applied. Default value is "1".
          $print when set as false, line breaks will only be returned as a string
    </span>
                                    </pre>
                                </div>
                            </div>  
                            
                                </div>
                            </div> <br>
                        </div>

                        <div id="emo" class="">
                            <div class="">
                                <div class="font-menu fb-6 bc-white-dd flex-full rad-4 pxv-8 lacier">
                                    <div class="flex-full midv"> 
                                        <span class=" mxr-8 c-lime-dd">
                                            <span class="numb-box">12.</span>
                                        </span> Cli::emo()
                                    </div>
                                </div> <br>
                                <div class="">
                                The cli class supports a list of icons that can be applied an displayed on the cli. These icons can only be displayed on terminals which 
                                offer supports for icons. The list of available icons can be found <a href="">here</a> while the syntax is displayed below:
                                <br><br>

                            <div class="pre-area">
                                <div class="box-full">
                                    <div class="pxv-6 bc-off-white"><code>Syntax: emo</code></div>
                                    <pre class="pre-code">
    Cli::emo($iconName, $spacing); 
    <span class="comment no-select">
      where: 
    
        $iconName  : A valid or accepted icon name in the list of supported icons.
        $spacing   : An optional spacing format
    </span>
                                    </pre>
                                </div>
                            </div>  
                            
                                </div>
                            </div> 
                            <div class="foot-note mvs-10">
                                Although there are other methods like <code>emox</code> and <code>emos</code>. These methods are only applied internally in a technical way to enable a smoother 
                                animation structure.
                            </div>
                        </div>

                        <div id="color" class="">
                            <div class="">
                                <div class="font-menu fb-6 bc-white-dd flex-full rad-4 pxv-8 lacier">
                                    <div class="flex-full midv"> 
                                        <span class=" mxr-8 c-lime-dd">
                                            <span class="numb-box">13.</span>
                                        </span> Cli::color()
                                    </div>
                                </div> <br>
                                <div class="">
                                This method is used to apply colors on cli texts. There are four basic text colors support which are green, yellow, blue and red. Colors 
                                are added by wrapping texts within the specific color code. The technology is based on the fact that a color code cannot be applied within another 
                                color code. Hence, to apply diffent color codes on texts, each text must be wrapped separately within its own color. 
                                <br><br>

                            <div class="pre-area">
                                <div class="box-full">
                                    <div class="pxv-6 bc-off-white"><code>Syntax: color</code></div>
                                    <pre class="pre-code">
    Cli::color($text, $name, $spacing); 
    <span class="comment no-select">
      where: 
    
        $text    : The text on which color should be applied
        $name    : The name of color to be applied. Options are [red|blue|green|yellow|cyan|purple]
        $spcaing : An optional spacing format
    </span>
                                    </pre>
                                </div>
                            </div>  
                            
                                </div>
                            </div> 
                        </div> <br>

                        <div id="danger" class="">
                            <div class="">
                                <div class="font-menu fb-6 bc-white-dd flex-full rad-4 pxv-8 lacier">
                                    <div class="flex-full midv"> 
                                        <span class=" mxr-8 c-lime-dd">
                                            <span class="numb-box">14.</span>
                                        </span> Cli::danger()
                                    </div>
                                </div> <br>
                                <div class="">
                                This method is a short form of applying a red color code on texts.
                                <br><br>

                            <div class="pre-area">
                                <div class="box-full">
                                    <div class="pxv-6 bc-off-white"><code>Syntax: danger</code></div>
                                    <pre class="pre-code">
    Cli::danger($text, $spacing); 
    <span class="comment no-select">
      where: 
    
        $text    : The text on which color should be applied
        $spacing : An optional spacing format
    </span>
                                    </pre>
                                </div>
                            </div>  
                            
                                </div>
                            </div> 
                        </div> <br>

                        <div id="warn" class="">
                            <div class="">
                                <div class="font-menu fb-6 bc-white-dd flex-full rad-4 pxv-8 lacier">
                                    <div class="flex-full midv"> 
                                        <span class=" mxr-8 c-lime-dd">
                                            <span class="numb-box">15.</span>
                                        </span> Cli::warn()
                                    </div>
                                </div> <br>
                                <div class="">
                                This method is a short form of applying a yellow color code on texts.
                                <br><br>

                            <div class="pre-area">
                                <div class="box-full">
                                    <div class="pxv-6 bc-off-white"><code>Syntax: warn</code></div>
                                    <pre class="pre-code">
    Cli::warn($text, $spacing); 
    <span class="comment no-select">
      where: 
    
        $text    : The text on which color should be applied
        $spacing : An optional spacing format
    </span>
                                    </pre>
                                </div>
                            </div>  
                            
                                </div>
                            </div> 
                        </div> <br>

                        <div id="alert" class="">
                            <div class="">
                                <div class="font-menu fb-6 bc-white-dd flex-full rad-4 pxv-8 lacier">
                                    <div class="flex-full midv"> 
                                        <span class=" mxr-8 c-lime-dd">
                                            <span class="numb-box">16.</span>
                                        </span> Cli::alert()
                                    </div>
                                </div> <br>
                                <div class="">
                                This method is a short form of applying a blue color code on texts.
                                <br><br>

                            <div class="pre-area">
                                <div class="box-full">
                                    <div class="pxv-6 bc-off-white"><code>Syntax: alert</code></div>
                                    <pre class="pre-code">
    Cli::alert($text, $spacing); 
    <span class="comment no-select">
      where: 
    
        $text    : The text on which color should be applied
        $spacing : An optional spacing format
    </span>
                                    </pre>
                                </div>
                            </div>  
                            
                                </div>
                            </div> 
                        </div> <br>

                        <div id="valid" class="">
                            <div class="">
                                <div class="font-menu fb-6 bc-white-dd flex-full rad-4 pxv-8 lacier">
                                    <div class="flex-full midv"> 
                                        <span class=" mxr-8 c-lime-dd">
                                            <span class="numb-box">17.</span>
                                        </span> Cli::valid()
                                    </div>
                                </div> <br>
                                <div class="">
                                This method is a short form of applying a green color code on texts.
                                <br><br>

                            <div class="pre-area">
                                <div class="box-full">
                                    <div class="pxv-6 bc-off-white"><code>Syntax: valid</code></div>
                                    <pre class="pre-code">
    Cli::valid($text, $spacing); 
    <span class="comment no-select">
      where: 
    
        $text    : The text on which color should be applied
        $spacing : An optional spacing format
    </span>
                                    </pre>
                                </div>
                            </div>  
                            
                                </div>
                            </div> 
                        </div> <br>

                        <div id="bgColor" class="">
                            <div class="">
                                <div class="font-menu fb-6 bc-white-dd flex-full rad-4 pxv-8 lacier">
                                    <div class="flex-full midv"> 
                                        <span class=" mxr-8 c-lime-dd">
                                            <span class="numb-box">18.</span>
                                        </span> Cli::bgColor()
                                    </div>
                                </div> <br>
                                <div class="">
                                This method is a used to apply background colors on texts. It is however important to lay emphasis on the fact that both the <code>bgColor()</code>
                                and the <code>color()</code> methods cannot be applied within each other but can only be applied separately on different texts.
                                <br><br>

                            <div class="pre-area">
                                <div class="box-full">
                                    <div class="pxv-6 bc-off-white"><code>Syntax: bgColor</code></div>
                                    <pre class="pre-code">
    Cli::bgColor($text, $name, $spacing); 
    <span class="comment no-select">
      where: 
    
        $text    : The text on which color should be applied
        $name    : The background color name to be applied. Options: [white|black|red|green|blue|cyan|purple|yellow] 
        $spacing : An optional spacing format
    </span>
                                    </pre>
                                </div>
                            </div>  
                            
                                </div>
                            </div> 
                        </div> <br>

                        <div id="bgDanger" class="">
                            <div class="">
                                <div class="font-menu fb-6 bc-white-dd flex-full rad-4 pxv-8 lacier">
                                    <div class="flex-full midv"> 
                                        <span class=" mxr-8 c-lime-dd">
                                            <span class="numb-box">19.</span>
                                        </span> Cli::bgDanger()
                                    </div>
                                </div> <br>
                                <div class="">
                                This method is a short form of applying a red background color code on texts.
                                <br><br>

                            <div class="pre-area">
                                <div class="box-full">
                                    <div class="pxv-6 bc-off-white"><code>Syntax: bgDanger</code></div>
                                    <pre class="pre-code">
    Cli::bgDanger($text, $spacing); 
    <span class="comment no-select">
      where: 
    
        $text    : The text on which background color should be applied
        $spacing : An optional spacing format
    </span>
                                    </pre>
                                </div>
                            </div>  
                            
                                </div>
                            </div> 
                        </div> <br>

                        <div id="bgWarn" class="">
                            <div class="">
                                <div class="font-menu fb-6 bc-white-dd flex-full rad-4 pxv-8 lacier">
                                    <div class="flex-full midv"> 
                                        <span class=" mxr-8 c-lime-dd">
                                            <span class="numb-box">20.</span>
                                        </span> Cli::bgWarn()
                                    </div>
                                </div> <br>
                                <div class="">
                                This method is a short form of applying a yellow background color code on texts.
                                <br><br>

                            <div class="pre-area">
                                <div class="box-full">
                                    <div class="pxv-6 bc-off-white"><code>Syntax: bgWarn</code></div>
                                    <pre class="pre-code">
    Cli::warn($text, $spacing); 
    <span class="comment no-select">
      where: 
    
        $text    : The text on which background color should be applied
        $spacing : An optional spacing format
    </span>
                                    </pre>
                                </div>
                            </div>  
                            
                                </div>
                            </div> 
                        </div> <br>

                        <div id="bgAlert" class="">
                            <div class="">
                                <div class="font-menu fb-6 bc-white-dd flex-full rad-4 pxv-8 lacier">
                                    <div class="flex-full midv"> 
                                        <span class=" mxr-8 c-lime-dd">
                                            <span class="numb-box">21.</span>
                                        </span> Cli::bgAlert()
                                    </div>
                                </div> <br>
                                <div class="">
                                This method is a short form of applying a blue color code on texts.
                                <br><br>

                            <div class="pre-area">
                                <div class="box-full">
                                    <div class="pxv-6 bc-off-white"><code>Syntax: bgAlert</code></div>
                                    <pre class="pre-code">
    Cli::bgAlert($text, $spacing); 
    <span class="comment no-select">
      where: 
    
        $text    : The text on which background color should be applied
        $spacing : An optional spacing format
    </span>
                                    </pre>
                                </div>
                            </div>  
                            
                                </div>
                            </div> 
                        </div> <br>

                        <div id="bgValid" class="">
                            <div class="">
                                <div class="font-menu fb-6 bc-white-dd flex-full rad-4 pxv-8 lacier">
                                    <div class="flex-full midv"> 
                                        <span class=" mxr-8 c-lime-dd">
                                            <span class="numb-box">22.</span>
                                        </span> Cli::bgValid()
                                    </div>
                                </div> <br>
                                <div class="">
                                This method is a short form of applying a green color code on texts.
                                <br><br>

                            <div class="pre-area">
                                <div class="box-full">
                                    <div class="pxv-6 bc-off-white"><code>Syntax: bgValid</code></div>
                                    <pre class="pre-code">
    Cli::bgValid($text, $spacing); 
    <span class="comment no-select">
      where: 
    
        $text    : The text on which background color should be applied
        $spacing : An optional spacing format
    </span>
                                    </pre>
                                </div>
                            </div>  
                            
                                </div>
                            </div> 
                        </div> <br>

                        <div id="error" class="">
                            <div class="">
                                <div class="font-menu fb-6 bc-white-dd flex-full rad-4 pxv-8 lacier">
                                    <div class="flex-full midv"> 
                                        <span class=" mxr-8 c-lime-dd">
                                            <span class="numb-box">23.</span>
                                        </span> Cli::error()
                                    </div>
                                </div> <br>
                                <div class="">
                                This method makes it easier to display error texts. It adds a prefix of "Error:" on any text supplied and returns the prefixed text.
                                <br><br>

                            <div class="pre-area">
                                <div class="box-full">
                                    <div class="pxv-6 bc-off-white"><code>Syntax: error</code></div>
                                    <pre class="pre-code">
    Cli::error($text, $indent); 
    <span class="comment no-select">
      where: 
    
        $text   : The error text to be prefixed
        $indent : Number of left space indents to be added
    </span>
                                    </pre>
                                </div>
                            </div>  
                            
                                </div>
                            </div> 
                        </div> <br>

                        <div id="warning" class="">
                            <div class="">
                                <div class="font-menu fb-6 bc-white-dd flex-full rad-4 pxv-8 lacier">
                                    <div class="flex-full midv"> 
                                        <span class=" mxr-8 c-lime-dd">
                                            <span class="numb-box">24.</span>
                                        </span> Cli::warning()
                                    </div>
                                </div> <br>
                                <div class="">
                                This method makes it easier to display warning texts. It adds a prefix of "Warning:" on any text supplied and returns the prefixed text.
                                <br><br>

                            <div class="pre-area">
                                <div class="box-full">
                                    <div class="pxv-6 bc-off-white"><code>Syntax: warning</code></div>
                                    <pre class="pre-code">
    Cli::warning($text, $indent); 
    <span class="comment no-select">
      where: 
    
        $text   : The error text to be prefixed
        $indent : Number of left space indents to be added
    </span>
                                    </pre>
                                </div>
                            </div>  
                            
                                </div>
                            </div> 
                        </div> <br>

                        <div id="caution" class="">
                            <div class="">
                                <div class="font-menu fb-6 bc-white-dd flex-full rad-4 pxv-8 lacier">
                                    <div class="flex-full midv"> 
                                        <span class=" mxr-8 c-lime-dd">
                                            <span class="numb-box">25.</span>
                                        </span> Cli::caution()
                                    </div>
                                </div> <br>
                                <div class="">
                                This method makes it easier to display caution texts. It adds a prefix of "CAUTION:" on any text supplied and returns the prefixed text.
                                <br><br>

                            <div class="pre-area">
                                <div class="box-full">
                                    <div class="pxv-6 bc-off-white"><code>Syntax: caution</code></div>
                                    <pre class="pre-code">
    Cli::warning($text, $indent); 
    <span class="comment no-select">
      where: 
    
        $text   : The error text to be prefixed
        $indent : Number of left space indents to be added
    </span>
                                    </pre>
                                </div>
                            </div>  
                            
                                </div>
                            </div> 
                        </div> <br>

                        <div id="notice" class="">
                            <div class="">
                                <div class="font-menu fb-6 bc-white-dd flex-full rad-4 pxv-8 lacier">
                                    <div class="flex-full midv"> 
                                        <span class=" mxr-8 c-lime-dd">
                                            <span class="numb-box">26.</span>
                                        </span> Cli::notice()
                                    </div>
                                </div> <br>
                                <div class="">
                                This method makes it easier to display notice texts. It adds a prefix of "NOTICE:" on any text supplied and returns the prefixed text.
                                <br><br>

                            <div class="pre-area">
                                <div class="box-full">
                                    <div class="pxv-6 bc-off-white"><code>Syntax: notice</code></div>
                                    <pre class="pre-code">
    Cli::warning($text, $indent); 
    <span class="comment no-select">
      where: 
    
        $text   : The error text to be prefixed
        $indent : Number of left space indents to be added
    </span>
                                    </pre>
                                </div>
                            </div>  
                            
                                </div>
                            </div> 
                        </div> <br>

                        <div id="success" class="">
                            <div class="">
                                <div class="font-menu fb-6 bc-white-dd flex-full rad-4 pxv-8 lacier">
                                    <div class="flex-full midv"> 
                                        <span class=" mxr-8 c-lime-dd">
                                            <span class="numb-box">27.</span>
                                        </span> Cli::success()
                                    </div>
                                </div> <br>
                                <div class="">
                                This method makes it easier to display notice texts. It adds a prefix of "Success:" on any text supplied and returns the prefixed text.
                                <br><br>

                            <div class="pre-area">
                                <div class="box-full">
                                    <div class="pxv-6 bc-off-white"><code>Syntax: success</code></div>
                                    <pre class="pre-code">
    Cli::warning($text, $indent); 
    <span class="comment no-select">
      where: 
    
        $text   : The error text to be prefixed
        $indent : Number of left space indents to be added
    </span>
                                    </pre>
                                </div>
                            </div>  
                            
                                </div>
                            </div> 
                        </div> <br>

                        <div id="btn" class="">
                            <div class="">
                                <div class="font-menu fb-6 bc-white-dd flex-full rad-4 pxv-8 lacier">
                                    <div class="flex-full midv"> 
                                        <span class=" mxr-8 c-lime-dd">
                                            <span class="numb-box">28.</span>
                                        </span> Cli::btn()
                                    </div>
                                </div> <br>
                                <div class="">
                                This method makes is an alias of <code>Cli::bgWarn()</code>
                                </div>
                            </div> 
                        </div> <br>

                        <div id="play" class="">
                            <div class="">
                                <div class="font-menu fb-6 bc-white-dd flex-full rad-4 pxv-8 lacier">
                                    <div class="flex-full midv"> 
                                        <span class=" mxr-8 c-lime-dd">
                                            <span class="numb-box">29.</span>
                                        </span> Cli::play()
                                    </div>
                                </div> <br>
                                <div class="">
                                This method is used to run animations
                                <br><br>

                            <div class="pre-area">
                                <div class="box-full">
                                    <div class="pxv-6 bc-off-white"><code>Syntax: play</code></div>
                                    <pre class="pre-code">
    Cli::warning($yield, $indent, $message, $break, $pause); 
    <span class="comment no-select">
      where: 
    
        $yield   : Number of times animation must run
        $indent  : Number of left space indents to be added before text is printed
        $message : Animation text to be printed
        $break   : Number of line breaks to be added after animation is done.
        $pause   : Delay in seconds to be added after animation is done.
    </span>
                                    </pre>
                                </div>
                            </div>  
                            
                                </div>
                            </div> 
                        </div> <br>

                        <div id="pause" class="">
                            <div class="">
                                <div class="font-menu fb-6 bc-white-dd flex-full rad-4 pxv-8 lacier">
                                    <div class="flex-full midv"> 
                                        <span class=" mxr-8 c-lime-dd">
                                            <span class="numb-box">30.</span>
                                        </span> Cli::pause() or Cli::wait()
                                    </div>
                                </div> <br>
                                <div class="">
                                These method are used to set delay before an operation is executed.
                                <br><br>

                            <div class="pre-area">
                                <div class="box-full">
                                    <div class="pxv-6 bc-off-white"><code>Syntax: pause</code></div>
                                    <pre class="pre-code">
    Cli::warning($seconds); 
    <span class="comment no-select">
      where: $seconds   : Delay in seconds
    </span>
                                    </pre>
                                </div>
                            </div>  
                            
                                </div>
                            </div> 
                        </div> <br>

                        <div id="animeTest" class="">
                            <div class="">
                                <div class="font-menu fb-6 bc-white-dd flex-full rad-4 pxv-8 lacier">
                                    <div class="flex-full midv"> 
                                        <span class=" mxr-8 c-lime-dd">
                                            <span class="numb-box">31.</span>
                                        </span> Cli::animeTest()
                                    </div>
                                </div> <br>
                                <div class="">
                                The <code>animeTest()</code> method is used to test the response of animations
                                <br><br>

                            <div class="pre-area">
                                <div class="box-full">
                                    <div class="pxv-6 bc-off-white"><code>Syntax: animeTest</code></div>
                                    <pre class="pre-code">
    Cli::warning($seconds); 
    <span class="comment no-select">
      where: 
    
        $yield   : Number of times animation must run
        $indent  : Number of left space indents to be added before text is printed
        $message : Animation text to be printed
        $break   : Number of line breaks to be added after animation is done.
        $pause   : Delay in seconds to be added after animation is done.
    </span>
                                    </pre>
                                </div>
                            </div>  
                            
                                </div>
                            </div> 
                        </div> <br>

                        <div id="animate" class="">
                            <div class="">
                                <div class="font-menu fb-6 bc-white-dd flex-full rad-4 pxv-8 lacier">
                                    <div class="flex-full midv"> 
                                        <span class=" mxr-8 c-lime-dd">
                                            <span class="numb-box">32.</span>
                                        </span> Cli::animate()
                                    </div>
                                </div> <br>
                                <div class="">
                                The <code>animate()</code> method is used to view the different loading animations and their behaviour when used.
                                <br><br>

                            <div class="pre-area">
                                <div class="box-full">
                                    <div class="pxv-6 bc-off-white"><code>Syntax: animeTest</code></div>
                                    <pre class="pre-code">
    Cli::animate($yield, $delay); 
    <span class="comment no-select">
      where: 
    
        $yield   : Number of times animation must run.
        $delay   : Delay in seconds to be added after animation is done.
    </span>
                                    </pre>
                                </div>
                            </div>  
                            
                                </div>
                            </div> 
                        </div> <br>

                        <div id="endAnime" class="">
                            <div class="">
                                <div class="font-menu fb-6 bc-white-dd flex-full rad-4 pxv-8 lacier">
                                    <div class="flex-full midv"> 
                                        <span class=" mxr-8 c-lime-dd">
                                            <span class="numb-box">33.</span>
                                        </span> Cli::endAnime()
                                    </div>
                                </div> <br>
                                <div class="">
                                The <code>endAnime()</code> method is designed to print a text after animation is completed.
                                <br><br>

                            <div class="pre-area">
                                <div class="box-full">
                                    <div class="pxv-6 bc-off-white"><code>Syntax: endAnime</code></div>
                                    <pre class="pre-code">
    Cli::endAnime($pause, $break1, string $message, $break2, $indent); 
    <span class="comment no-select">
      where: 
    
        $pause   : Delay in seconds to before text is printed.
        $break1  : Line breaks before text is printed.
        $message : Message to be printed
        $break2  : Line breaks after text is printed.
        $indent  : Left margin on printed text.
    </span>
                                    </pre>
                                </div>
                            </div>  
                            
                                </div>
                            </div> 
                        </div> <br>

                        <div id="loadTime" class="">
                            <div class="">
                                <div class="font-menu fb-6 bc-white-dd flex-full rad-4 pxv-8 lacier">
                                    <div class="flex-full midv"> 
                                        <span class=" mxr-8 c-lime-dd">
                                            <span class="numb-box">34.</span>
                                        </span> Cli::loadTime()
                                    </div>
                                </div> <br>
                                <div class="">
                                This method is designed to increase or decrease the amount of time needed for an animation to successfully complete.
                                <br><br>

                            <div class="pre-area">
                                <div class="box-full">
                                    <div class="pxv-6 bc-off-white"><code>Syntax: loadTime</code></div>
                                    <pre class="pre-code">
    Cli::loadTime($time); 
    <span class="comment no-select">
      where: 
    
        $time  : Animation time in seconds
    </span>
                                    </pre>
                                </div>
                            </div>  
                            
                                </div>
                            </div> 
                        </div> <br>

                        <div id="dots" class="">
                            <div class="">
                                <div class="font-menu fb-6 bc-white-dd flex-full rad-4 pxv-8 lacier">
                                    <div class="flex-full midv"> 
                                        <span class=" mxr-8 c-lime-dd">
                                            <span class="numb-box">35.</span>
                                        </span> Cli::dots()
                                    </div>
                                </div> <br>
                                <div class="">
                                This method is used to repeat a defined character in the number of required number of chracter to to generated. The 
                                number of character generated depends on the maximum number of character expected to be generated in a given text. This 
                                ensures that a defined character fills up the spaces left if the defined maximum length of characters for a given text is not 
                                reached.
                                <br><br>

                            <div class="pre-area">
                                <div class="box-full">
                                    <div class="pxv-6 bc-off-white"><code>Syntax: dots</code></div>
                                    <pre class="pre-code">
    Cli::dots($max, $text, $char); 
    <span class="comment no-select">
      where: 
    
        $max  : The expected length of text characters that must be generated. 
        $text : A given text whose length of characters is measured
        $char : A character that fills up left over space. Default is dots "."
    </span>
                                    </pre>
                                </div>
                            </div>  
                            
                                </div>
                            </div> 
                        </div> <br>




                    
 <div class="font-menu pvs-4"> <a href="http://localhost/spoova/docs">Docs</a> <span class="bi-chevron-right"></span> <a href="http://localhost/spoova/docs/classes">Classes</a> <span class="bi-chevron-right"></span> <a href="http://localhost/spoova/docs/classes/cli">Cli</a>  </div>


                    </div>
                </div>
            </section>
        </div>

    


         <div class="blurry page-overlay ov-d5 hide"></div>
    </section>

</body>
</html>