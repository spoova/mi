



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="http://localhost/spoova/res/main/images/icons/favicon.png">
    <title>Tutorial - Database Status</title>
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
        <section class="pxv-10 tutorial database bc-white">
            <div class="font-em-1d2">

                
 <div class="font-menu pvs-4"> <a href="http://localhost/spoova/tutorial">Tutorial</a> <span class="bi-chevron-right"></span> <a href="http://localhost/spoova/tutorial/database">Database</a> <span class="bi-chevron-right"></span> <a href="http://localhost/spoova/tutorial/database/status">Status</a>  </div>


                <div class="start font-em-d8">

                    <div class="font-em-1d5 c-orange">Database : Status</div> <br>

                    <div class="pxs-6">
                        Statuses are saved when queries are executed which can be accessed using the <code>DBStatus</code> class. 
                        The <code>DBStatus</code> class is the highest level of call as on the <code>DBHandler</code> class. It 
                        has the power to modify the messages returned by the <code>DBHandler</code> class. 
                        Methods which can be called include :
                        
                        <div class="font-em-d9">
                            <br> <code>DBStatus::query()</code>
                            <br> <code>DBStatus::err()</code>
                            <br> <code>DBStatus::baseErr()</code>
                        </div>

                    </div> <br>

                    <ul class="list-free pxl-12">
                        <li>
                            <div class="c-olive">Query</div>

                            <div class="font-em-d85">
                                The query method returns the last executed query 
                            </div>

                            <br>

                            <div class="box-full font-em-d85 bc-white-dd shadow">
<div class="pxv-10 bc-silver">Example 1 </div>
                        <pre class="pre-code">
  $db = ($dbc = new DB())->openDB();
  
  if( $db ) {
  
      $db->query('select * from users')->read();
  
      <span class="comment">// outputs : select * from users</span>
      echo DBStatus::query() ;
  
  }
                        </pre>
                            </div> <br><br>

                            <div class="font-em-d85">
                                In Example 1 above, when a connection is successful and a query is executed, 
                                then the last executed query is displayed.
                            </div> <br> 
                        </li>

                        <li>
                            <div class="c-olive">Err (Fetch last error)</div>
                            <div class="font-em-d85">
                                When an error occurs, the last error is saved and can be obtained using the <code>err()</code> method.
                            </div> <br>
                            <div class="box-full font-em-d85 bc-white-dd shadow">
<div class="pxv-10 bc-silver">Example 2 </div>
                        <pre class="pre-code">
  $db = ($dbc = new DB)->openDB();
  
  if( $db ) {
  
      $db->query('select *name from users')->read();
  
      
      if(DBStatus::err()) {
  
          echo DBStatus::err(); <span class="comment">// displays error</span>
  
      }
  
  }
                        </pre>
                            </div> <br><br>

                            <div class="font-em-d85">
                                In the Example 2 above, we checked if an error exists in 
                                storage and then displayed the error. Athough, this approach is discouraged,
                                it might be useful when working in window classes.
                            </div>
                            <br>

                        </li>

                        <li>
                            <div class="c-olive">Err (Modify error)</div>
                            <div class="font-em-d85 mvt-8">
                                The <code>err()</code> method can also modify an existing error. It takes a string as parameter.
                                The value supplied replaces the last stored error if an error exists. However, if a second parameter of <code>true</code> 
                                is defined, then the defined custom error will forcefully overwrite the default response message even if the response is empty.
                            </div> <br>
                            
                            <div class="font-em-d85">using Example 2 above,</div>  <br>
                            
                            <div class="box-full font-em-d85 bc-white-dd shadow">
<div class="pxv-10 bc-silver">Example 3</div> <br>
                        <pre class="pre-code">
  if( DBStatus::err('some custom error') ) {
  
      print DBStatus::err(); <span class="comment">//some custom error</span>
  
  }
                        </pre>
                            </div> <br><br>

                            <div class="font-em-d85">
                                In Example 3, if an error occurs from an sql executed query, the <code>DBStatus::err()</code> 
                                will replace the error with 'some custom error'. However if no error previously exists, then 
                                the custom error will not be set.
                            </div>
                            <br>
                            
                            <div class="box-full font-em-d85 bc-white-dd shadow">
<div class="pxv-10 bc-silver">Example 4</div>
                        <pre class="pre-code">
  DBStatus::err('some custom error', true);
                        </pre>
                            </div> <br><br>

                            <div class="font-em-d85">
                                In Example 4, setting an argument of true on the <code>DBStatus</code> custom message will force the 
                                <code>DBStatus</code> to set a custom error even if no error exists previously
                            </div>
                            <br>


                        </li>

                        <li>
                            <div class="c-olive">baseErr (Default error)</div>
                            <div class="mvt-10 font-em-d85">
                                Since the <code>err()</code> method is capable of modifying the error message returned by the <code>DBStatus</code> 
                                class, if an existing error is modified, we can still retrieve the real or default error returned from an sql query by 
                                calling the <code>DBStatus::baseErr()</code> method which takes no argument. An example is shown below: <br>               
                                <br>
                            
                                <div class="box-full bc-white-dd shadow">
<div class="pxv-10 bc-silver">Example 5</div> <br>
                        <pre class="pre-code">
  if( DBStatus::err('some custom error') ) {
  
      print DBStatus::baseErr(); <span class="comment">//default error</span>
      print DBStatus::err(); <span class="comment">//some custom error</span>
  
  }
                        </pre>
                                </div> 
                                
                            </div>
                        </li>
                    
                    </ul>
                </div>
            </div>
        </section>

        

    </div>


         <div class="blurry page-overlay ov-d5 hide"></div>
    </section>

</body>
</html>