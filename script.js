$(document).on("click","#generate", about);
$(document).ready(function() {
    $('[data-toggle="tooltip"]').tooltip();
})

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

