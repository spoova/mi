
@template('template.t-tut')

    @lay('build.co.navbars:left-nav')

    <div class="box-full pxl-2 bc-white-dd pull-right">
        <section class="pxv-10 tutorial database bc-white">
            <div class="font-em-1d2">

                @lay('build.co.links:tutor_pointer')

                <div class="start font-em-d87">

                    <div class="font-em-1d5 c-orange">Third Party Libraries</div>
                    
                    <div class="db-connection font-em-d87 mvt-10">
                        Spoova includes third-party libraries which are subdivided into three. <br>

                        <ul class="mvt-10">
                            <li>Php Libraries</li>
                            <li>Css Libraries</li>
                            <li>Javascript Libraries</li>
                        </ul>

                        <div class="php-libraries bc-white-dd pxv-10 shadow-2-strong rad-4">
                            <div class="fb-6 c-olive mvb-6"><span class="bi-circle-fill c-silver-d"></span> Php Libraries</div>
                            
                            <div class="mvs-10">
                                The following are lists of libraries that should be added to the framework's project pack if the Mailer class is needed: <br> 
                            </div>

                            <ul>
                                <li>PhpMailer <br>
                                    This class is used to send mails. Spoova has an in-built support for this library through 
                                    the <code>Mailer</code> class.
                                </li>
                                <li>Css Emogrifier<br>
                                    This tool converts external and embeded css to inline css.
                                </li>
                            </ul>

                            The Css Emogrifier may not naturally work, because the <code>__construct()</code> method is set to private. Developers have to set this 
                            method to public before it can be successfully used.
                        </div> <br>

                        <div class="css-libraries bc-white-dd pxv-10 shadow-2-strong rad-4">
                            <div class="fb-6 c-olive mvb-6"><span class="bi-circle-fill c-silver-d"></span> Css Libraries</div>
                            Although spoova has its own internal css files, yet it uses some of the features of mdb5 bootstrap css library for its project application. 
                            Other libraries may be added locally into the <code>res/css</code> directory. The local path or cdn links of the libraries can be 
                            included globally within the <code>res/res.php</code> file.
                        </div> <br>

                        <div class="css-libraries bc-white-dd pxv-10 shadow-2-strong rad-4">
                            <div class="fb-6 c-olive mvb-6"><span class="bi-circle-fill c-silver-d"></span> Javascript Libraries</div>
                            Jquery is a widely used javascript library. This library is integerated with spoova and it form a core part of the framework's architecture as there are major files, functions
                            and plugins that are built upon it and without the Jquery file, they will not be available for execution. 
                        </div> <br>

                        <div class="updating-libraries bc-white-dd pxv-10 shadow-2-strong rad-4">
                            <div class="fb-6 c-sea-blue-d mvb-6"><span class="ico-thick-update c-sea-blue-d"></span> Updating Libraries</div>

                            <p> 
                                Static file libraries such as <code>bootstrap</code> and javascript files can be found at the <code>res/main/css/</code> 
                                and <code>res/main/js/</code> directories respectively. The global static resources folder is the <code>res/main</code> directory. 
                                If any of the default libraries needs to be upgraded, that library should be 
                                replaced with newly downloaded files and the correct path must match the path set in the <code>res/res.php</code> file. If new 
                                path name is different, the old file path in <code>res/res.php</code> file should also be updated correctly. 
                                However, as an alternative to using local library file path, cdn link of such libraries may be used instead which can be added or updated in the
                                <code>res/res.php</code> file. 
                            </p>
                        </div> <br>

                    </div>

                </div>
            </div>
        </section>
    </div>
@template;