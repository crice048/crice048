<!doctype html>
<html lang="en">
    <head>
        <?php include "head.php" ?>
        <title>Commitment to Change</title>
    </head>

    <body class="bg-light" id="work">
        <div class="container">
            <?php include "navbar-ctc.php" ?>

            <div class="row mx-1" id="intro-zone">
                <?php include "intro.php" ?>
            </div>

            <div class="row" id="commitment-zone">
                <div class="col-10 offset-md-1 my-5">
                    <h3>Make your commitment today!</h3>

                    <form>
                        <!-- Commitment topic -->
                        <div class="form-group row mx-1 mb-4">
                            <?php include "commit-topic.php" ?>
                        </div>

                        <!--Commitment zone-->
                        <div class="form-group row mx-1 mb-4">
                            <?php include "commit-box.php" ?>
                        </div>

                        <!--How they will change zone-->
                        <div class="form-group row mx-1 mb-4">
                            <?php include "commit-how.php" ?>
                        </div>
                        
                        <!--Commitment level zone (level and timeline) -->
                        <div class="form-group row mx-1 mb-4">
                            <?php include "commit-level.php" ?>
                            <?php include "timeline.php" ?>
                        </div>
                        


                        <!--Action zone-->
                        <div class="row my-3">
                            <?php include "actions.php" ?>
                        </div>
                    </form>
                </div>
            </div>

            <div id="faqOverlay" class="overlayFAQ row">
                <!-- button to close-->
                <a href="javascript:void(0)" class="closebtn" onclick="closeFAQ()">&times;</a>

                <!-- FAQ content -->
                <div class="overlay-content col-8 offset-md-2 ">
                    <div class="row">
                        <h4>What is a commitment to change?</h4>
                        <p>A commitment to change is a method used by the Alberta Physician Learning Program (PLP) to assist with physician practice improvement.  </p>
                    </div>
                    <div class="row">
                        <h4>Who is this for?</h4>
                        <p>Healthcare professionals mostly. But feel free to use it for other uses too. None of the information you enter is saved.</p>
                    </div>
                    <div class="row">
                        <h4>Why is there the option to share my commitment to change on twitter?</h4>
                        <p>There is a need to develop a positive culture around continuing professional development (CPD) and physician practice improvement. I am hoping that we can create a non-judgemental zone that will give healthcare workers the confidence and support they need to make CPD a positive experience.</p>
                    </div>
                    <div class="row">
                        <h4>Why does this page exist?</h4>
                        <p>PLP asks healthcare professionals to write down actionable goals that they can work towards on their personal CPD journey. This web page came as a result of a school assignment to develop a website with specific technical requirements. As the KT specialist at the PLP Calgary office, I saw an opportunity to create a third-party service that would allow physicians to independently make a commitment to change.</p>
                    </div>
                </div>
            </div>

            <div id="twitOverlay" class="overlayTwitter row">
                <!-- button to close-->
                <a href="javascript:void(0)" class="closebtn" onclick="closeTwitter()">&times;</a>

                <!-- FAQ content -->
                <div class="overlay-content col-8 offset-md-2 ">
                    <div class="row">
                        <div class="col-md-8 offset-md-1 col-12">
                            <h4 class="mb-3">See what the #CommitToCPD community is up to:</h4>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-md-8 offset-md-1 col-12 offset-0" id="twittertainer">
                            <a class="twitter-timeline" href="https://twitter.com/DesigningRice?ref_src=twsrc%5Etfw" data-width="max-width" data-height="60vh" data-chrome="nofooter noborders">Tweets by DesigningRice</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </body>
</html>