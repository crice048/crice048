var commitText;
var howText;
var level;
var times;
var timeVal;


$(document).ready(function() {
    $('[data-toggle="tooltip"]').tooltip();
})
$(document).on("click","#generate", getvalue);
$(document).on("click","#tweeter", tweetCPD);


///////////////////////////////
///Sliding views and frames ///
///////////////////////////////
function openFAQ() {
    document.getElementById("faqOverlay").style.height = "100%";
  }
function closeFAQ() {
    document.getElementById("faqOverlay").style.height = "0%";
}   

function openTwitter() {
    document.getElementById("twitOverlay").style.height = "100%";
  }
function closeTwitter() {
    document.getElementById("twitOverlay").style.height = "0%";
}   

///////////////////////////////////////////////////////////////////////////
///Pull values from the form fields and prepare the individualized .ics ///
///////////////////////////////////////////////////////////////////////////
function getvalue(){
  commitText = $('#commitmentTextArea').val();
  howText = $('#howTextArea').val();
  level = $('#commit-level input:radio:checked').val();
  times = $('#timelineSelect option:selected').html();
  timeVal = $('#timelineSelect option:selected').val();
  
  var x = 0;

  if (timeVal == 1){
      x = 1;
  } else if (timeVal == 2) {
      x = 3;
  } else if (timeVal == 3) {
    x = 6;
  }

  var commitDate = new Date();
  var changeDateStart = moment(commitDate); 
  var changeDateEnd = moment(commitDate)
  changeDateStart.add(x, 'months').hours(12).minutes(0).seconds(0);
  changeDateEnd.add(x, 'months').hours(12).minutes(15).seconds(0);

  var msgText = times + " ago, I was "  + level + " the following change: " + commitText + " " + howText + ". How am I doing?";

  // alert(msgText);
 
  var cal = ics();
  cal.addEvent('My Commitment to Change:',  msgText, 'Your practice', changeDateStart, changeDateEnd);
  
  cal.download("test", ".ics");
}



function tweetCPD(){
  commitText = $('#commitmentTextArea').val();
  howText = $('#howTextArea').val();
  times = $('#timelineSelect option:selected').html();

  var tweetText = "In " + times + " I will " + commitText + " by " + howText + ". This is my commitment to change";

  var tweetUrl = 'https://twitter.com/intent/tweet?text=' +
  encodeURIComponent(tweetText) +
  '&hashtags=' +
  'CommitToCPD';
  
  window.open(tweetUrl); 
}
