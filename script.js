window.onscroll = function(){ displayTotopButton(),displayAbout(), displayCallToAction(), displayDealOfTheDay()}
function displayMenu(){
    let myMenu = document.getElementById('navigation');
    if(myMenu.style.display === "block"){
        myMenu.style.display = "none";
        
    }
    else{
        myMenu.style.display = "block";
        
    }
}

function displayHelp(){
    setTimeout(function(){
      let help = document.getElementById('help');
      help.style.display = 'block';
    }, 15000);
}

//display about on scroll
function displayAbout(){ 
    if(document.body.scrollTop > 50 || document.documentElement.scrollTop > 50){
        document.querySelector('#whoWeAre').style.display = 'block';
    }
    else{
        document.querySelector('#whoWeAre').style.display = 'none';
    }
}

//display call to action on scroll
function displayCallToAction(){
    if(document.body.scrollTop > 1000 || document.documentElement.scrollTop > 1000){
        document.querySelector('#callToAction').style.display = "block";
    }
    else{
        document.querySelector('#callToAction').style.display = "none";
    }
}

//display to top button after few seconds
function displayTotopButton(){
    if(document.body.scrollTop > 70 || document.documentElement.scrollTop > 70){
        document.querySelector('.toTop').style.display = 'block';
    }
    else{
        document.querySelector('.toTop').style.display = 'none';
    }
}

//display deal of the day on scroll
function displayDealOfTheDay(){
    if(document.body.scrollTop > 1800 || document.documentElement.scrollTop > 1800){
        document.querySelector('.the_deal').style.display = "block";
    }
    else{
        document.querySelector('.the_deal').style.display = "none";
    }
}

/* display complaint form */
function displayComplainBox(){
    let complainForm = document.getElementById('complainBox');
    if(complainForm.style.display === "block"){
        complainForm.style.display = "none";
    }else{
        complainForm.style.display = "block";
        
    }
}

setTimeout(function showReportButton(){
    let reportButton = document.getElementById('orderNow');
    reportButton.style.display = "block";
}, 10000);
/* close member form */
$(document).ready(function(){
    $("#closeForm").click(function(){
        $("#memberForm").hide();
    })
});
/* show member form */
$(document).ready(function(){
    $(".join").click(function(){
        $("#memberForm").show();
    })
});
/* show donation */
$(document).ready(function(){
    $("#donate").click(function(){
        $("#donation").show();
        $("#complainBox").hide();

    })
});
/* close donation */
$(document).ready(function(){
    $("#close_donate").click(function(){
        $("#donation").hide();
        $("#complainBox").show();

    })
});

/* close complain box */
$(document).ready(function(){
    $("#closeComplain").click(function(){
        $("#complainBox").hide();

    })
});

/* close success message */
$(document).ready(function(){
    $("#closeMessage").click(function(){
        $(".success").hide();

    })
});