<!doctype html>
<html lang="en">
    <head>
        <?php include "head.php" ?>
        <title>Commitment to Change</title>
    </head>

    <body class="bg-light" id="work">
        <div class="container">
            <?php include "navbar-ctc.php" ?>

            <div class="row" id="intro-zone">
                <div class="col-10 offset-1 my-3">
                    <h2 class="mb-3">Why should I make a commitment to change?</h2>
                    <p>Writing down a goal can increase your commitment to that goal and the likelihood of achieving it.</p>
                    <p>When you are done entering in your information, click the button to auto-generate an individualized .ics file. This will create an appointment in whatever calendar app you prefer for three months from now and remind you of the commitment you are making today.</p>
                </div>
            </div>
            
            <div class="row" id="commitment-zone">
                <div class="col-10 offset-1 my-3">
                <form>
                    <div class="form-group row">
                        <label class="col-md-4 col-12 font-weight-semibold" for="areaOfPracticeArea">Where do you practice?</label>
                        <div class="col-md-8 col-12">
                            <input type="email" class="form-control" id="areaOfPracticeArea" placeholder="Ex. Primary Care, Emergency Department">
                        </div>
                    </div>

                    <!--Commitment zone-->
                    <div class="form-group">
                        <label for="commitmentTextArea" class="font-weight-semibold">What <a href="#" data-toggle="tooltip" data-placement="top" title="Be specific about what you want to change.">concrete</a>, <a href="#" data-toggle="tooltip" data-placement="top" title="How will you mark your progress?">measurable</a> change will you make?</label>
                        <textarea class="form-control" id="commitmentTextArea" rows="3"></textarea>
                    </div>
                    
                    <!--Commitment level zone-->
                    <div class="form-group row">
                        <div class="col-md-4 col-12 font-weight-semibold">
                            How commited are you to making this change?
                        </div>
                        
                        <div class="col-md-8 col-12">
                            <?php include "commit-level.php" ?>
                        </div>
                    </div>



                    <div class="row my-2">
                        <div class="col-md-4 col-12">
                            <button type="submit" class="btn btn-primary my-1" id="generate">Generate your individualized calendar reminder</button>
                        </div>
                    </div>
                    

                    <div id="faqOverlay" class="overlayFAQ row">
                        <!-- button to close-->
                        <a href="javascript:void(0)" class="closebtn" onclick="closeFAQ()">&times;</a>

                        <!-- FAQ content -->
                        <div class="overlay-content col-8 offset-2 ">
                            <div class="row">
                                <h4>Who is this for?</h4>
                                <p>This document was created for healthcare professionals to keep track of their own personal goals for change. It is part of a larger effort by the Alberta Physician Learning Program to engage physicians in reflection and physician practice improvement.</p>
                            </div>
                            <div class="row mt-3">
                                <h4>Is any information I enter into the form saved?</h4>
                                <p>Yes, but no identifiable information is being collected. By entering your information into this project you are agreeing to share the information with the creator of this website. This project was created for an assignment, thus with specific technical requirements. For that reason, the information you enter into the fields is saved into a database.</p>
                            </div>
                            <div class="row mt-3">
                                <h4>What if I submit my commitment to change, then decide I don't want it saved somewhere?</h4>
                                <p>If you are uncomfortable with the idea of your commitment being recorded but you have already submitted the information, please email me at chris@designingrice.com and I will remove your entry from the list.</p>
                            </div>
                        </div>
                    </div>

                    <div id="twitOverlay" class="overlayTwitter row">
                        <!-- button to close-->
                        <a href="javascript:void(0)" class="closebtn" onclick="closeTwitter()">&times;</a>

                        <!-- FAQ content -->
                        <div class="overlay-content col-8 offset-2 ">
                            <div class="row">

                            </div>
                            
                            <div class="row">
                                <div class="col-md-8 offset-md-1 col-12 offset-0" id="twittertainer">
                                    <a class="twitter-timeline" href="https://twitter.com/DesigningRice?ref_src=twsrc%5Etfw" data-width="max-width" data-height="60vh" data-chrome="nofooter noborders">Tweets by DesigningRice</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                                </div>
                            </div>
                        </div>
                    </div>


                </form>
                </div>
            </div>


        </div>

    </body>
</html>