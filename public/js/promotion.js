
let deFiPromotion = document.getElementById("deFiPromotion");
let projectPromotion = document.getElementById("ProjectPromotion");
let priorityListing = document.getElementById("priorityListing");
let promotion = document.getElementById("promotion");
let banner = document.getElementById("banner");
let social = document.getElementById("social");
let email = document.getElementById("email");
let pressReleases = document.getElementById("pressReleases");

let  arr = [projectPromotion, deFiPromotion, priorityListing, promotion, banner, social, email, pressReleases];

let cProjectPromotion = document.getElementById("clickProjectPromotion");
let cDeFiPromotion = document.getElementById("clickDeFiPromotion");
let cPriorityListing = document.getElementById("clickPriorityListing");
let cPromotion = document.getElementById("clickPromotion");
let cBanners = document.getElementById("clickBanners");
let cSocial = document.getElementById("clickSocial");
let cEmailPromotion = document.getElementById("clickEmailPromotion");
let cPressReleases = document.getElementById("clickPressReleases");
let arr1 = [cProjectPromotion, cDeFiPromotion, cPriorityListing, cPromotion, cBanners, cSocial, cEmailPromotion, cPressReleases];


projectPromotion.style.display = 'none';
priorityListing.style.display = "none";
promotion.style.display = "none";
banner.style.display = "none";
social.style.display = "none";
email.style.display = "none";
pressReleases.style.display = "none";

cDeFiPromotion.style.color = "rgba(5,195,189,0.48)";
cDeFiPromotion.style.borderBottom = "1px solid";

function clickPromo(a){
    for (let i = 0; i < arr1.length; i++){
        if (a === arr1[i]){
            arr1[i].style.color = "rgba(5,195,189,0.48)";
            arr1[i].style.borderBottom = "1px solid";
            arr[i].style.display = "block";
        }
        else {
            arr1[i].style.color = "#3D6096";
            arr1[i].style.borderBottom = "0";
            arr[i].style.display = "none";
        }
    }
    cWithDeFiPromotion.style.opacity = "0.5";
    cWithDeFiLightPromotion.style.opacity = "1";
    withDeFiLightPromotion.style.display = "block";
    withDeFiPromotion.style.display = "none";
    cWithLight.style.opacity = "0.5";
    cWithBoost.style.opacity = "0.5";
    cWithFull.style.opacity = "0.5";
    cWithFast.style.opacity = "1";
    wFast.style.display = "block";
    wLight.style.display = "none";
    wFull.style.display = "none";
    wBoost.style.display = "none";
    cWPromotion14.style.opacity = "0.5";
    cWPromotion7.style.opacity = "0.5";
    cWPromotion30.style.opacity = "1";
    wPromotion7.style.display = "none";
    wPromotion14.style.display = "none";
    wPromotion30.style.display = "block";
    cWEmailSingle.style.opacity = "1";
    cWEmailMedium.style.opacity = "0.5";
    cWEmailFull.style.opacity = "0.5";
    cWEmailExtra.style.opacity = "0.5";
    wEmailSingle.style.display = "block";
    wEmailMedium.style.display = "none";
    wEmailFull.style.display = "none";
    wEmailExtra.style.display = "none";
    cWTopBanner14.style.opacity = "0.5";
    cWTopBanner30.style.opacity = "1";
    wTopBanner30.style.display = "block";
    wTopBanner14.style.display = "none";
    cWStickyBanner14.style.opacity = "0.5";
    cWStickyBanner30.style.opacity = "1";
    wStickyBanner30.style.display = "block";
    wStickyBanner14.style.display = "none";
    cWSideBanner14.style.opacity = "0.5";
    cWSideBanner30.style.opacity = "1";
    wSideBanner30.style.display = "block";
    wSideBanner14.style.display = "none";
}




let cWithDeFiLightPromotion = document.getElementById("cWithDeFiLightPromotion");
let cWithDeFiPromotion = document.getElementById("cWithDeFiPromotion");
let withDeFiLightPromotion = document.getElementById("withDeFiLightPromotion");
let withDeFiPromotion = document.getElementById("withDeFiPromotion");
withDeFiPromotion.style.display = "none";
function clickWDeFiPromotion(a) {
    if (a === cWithDeFiLightPromotion){
        cWithDeFiPromotion.style.opacity = "0.5";
        cWithDeFiLightPromotion.style.opacity = "1";
        withDeFiLightPromotion.style.display = "block";
        withDeFiPromotion.style.display = "none";
    } else if (a === cWithDeFiPromotion){
        cWithDeFiPromotion.style.opacity = "1";
        cWithDeFiLightPromotion.style.opacity = "0.5";
        withDeFiLightPromotion.style.display = "none";
        withDeFiPromotion.style.display = "block";
    }
}

let cWithFast = document.getElementById("cWithFast");
let cWithLight = document.getElementById("cWithLight");
let cWithFull = document.getElementById("cWithFull");
let cWithBoost = document.getElementById("cWithBoost");
let wFast = document.getElementById("wFast");
let wLight = document.getElementById("wLight");
let wFull = document.getElementById("wFull");
let wBoost = document.getElementById("wBoost");

function clickWProjectPromotion(a) {
    if (a === cWithFast){
        cWithLight.style.opacity = "0.5";
        cWithBoost.style.opacity = "0.5";
        cWithFull.style.opacity = "0.5";
        cWithFast.style.opacity = "1";
        wFast.style.display = "block";
        wLight.style.display = "none";
        wFull.style.display = "none";
        wBoost.style.display = "none";
    } else if (a === cWithLight){
        cWithLight.style.opacity = "1";
        cWithBoost.style.opacity = "0.5";
        cWithFull.style.opacity = "0.5";
        cWithFast.style.opacity = "0.5";
        wFast.style.display = "none";
        wLight.style.display = "block";
        wFull.style.display = "none";
        wBoost.style.display = "none";
    } else if (a === cWithFull){
        cWithLight.style.opacity = "0.5";
        cWithBoost.style.opacity = "0.5";
        cWithFull.style.opacity = "1";
        cWithFast.style.opacity = "0.5";
        wFast.style.display = "none";
        wLight.style.display = "none";
        wFull.style.display = "block";
        wBoost.style.display = "none";
    }else if (a === cWithBoost){
        cWithLight.style.opacity = "0.5";
        cWithBoost.style.opacity = "1";
        cWithFull.style.opacity = "0.5";
        cWithFast.style.opacity = "0.5";
        wFast.style.display = "none";
        wLight.style.display = "none";
        wFull.style.display = "none";
        wBoost.style.display = "block";
    }
}



let  cWPromotion30 = document.getElementById("cWPromotion30");
let  cWPromotion14 = document.getElementById("cWPromotion14");
let  cWPromotion7 = document.getElementById("cWPromotion7");
let wPromotion30 = document.getElementById("wPromotion30");
let wPromotion14 = document.getElementById("wPromotion14");
let wPromotion7 = document.getElementById("wPromotion7");

function clickWPromotion(a) {
    if (a === cWPromotion30){
        cWPromotion14.style.opacity = "0.5";
        cWPromotion7.style.opacity = "0.5";
        cWPromotion30.style.opacity = "1";
        wPromotion7.style.display = "none";
        wPromotion14.style.display = "none";
        wPromotion30.style.display = "block";
    }else if (a === cWPromotion14){
        cWPromotion14.style.opacity = "1";
        cWPromotion7.style.opacity = "0.5";
        cWPromotion30.style.opacity = "0.5";
        wPromotion7.style.display = "none";
        wPromotion14.style.display = "block";
        wPromotion30.style.display = "none";
    }
    else if (a === cWPromotion7){
        cWPromotion7.style.opacity = "1";
        cWPromotion14.style.opacity = "0.5";
        cWPromotion30.style.opacity = "0.5";
        wPromotion14.style.display = "none";
        wPromotion7.style.display = "block";
        wPromotion30.style.display = "none";
    }
}


let cWEmailSingle = document.getElementById("cWEmailSingle");
let cWEmailMedium = document.getElementById("cWEmailMedium");
let cWEmailFull = document.getElementById("cWEmailFull");
let cWEmailExtra = document.getElementById("cWEmailExtra");
let wEmailSingle = document.getElementById("wEmailSingle");
let wEmailFull = document.getElementById("wEmailFull");
let wEmailMedium = document.getElementById("wEmailMedium");
let wEmailExtra = document.getElementById("wEmailExtra");
function clickWEmail(a) {
    if (a === cWEmailSingle){
        cWEmailSingle.style.opacity = "1";
        cWEmailMedium.style.opacity = "0.5";
        cWEmailFull.style.opacity = "0.5";
        cWEmailExtra.style.opacity = "0.5";
        wEmailSingle.style.display = "block";
        wEmailMedium.style.display = "none";
        wEmailFull.style.display = "none";
        wEmailExtra.style.display = "none";
    }else if (a === cWEmailMedium){
        cWEmailSingle.style.opacity = "0.5";
        cWEmailMedium.style.opacity = "1";
        cWEmailFull.style.opacity = "0.5";
        cWEmailExtra.style.opacity = "0.5";
        wEmailSingle.style.display = "none";
        wEmailMedium.style.display = "block";
        wEmailFull.style.display = "none";
        wEmailExtra.style.display = "none";
    }else if (a === cWEmailFull){
        cWEmailSingle.style.opacity = "0.5";
        cWEmailFull.style.opacity = "1";
        cWEmailMedium.style.opacity = "0.5";
        cWEmailExtra.style.opacity = "0.5";
        wEmailSingle.style.display = "none";
        wEmailMedium.style.display = "none";
        wEmailFull.style.display = "block";
        wEmailExtra.style.display = "none";
    }else if (a === cWEmailExtra){
        cWEmailSingle.style.opacity = "0.5";
        cWEmailExtra.style.opacity = "1";
        cWEmailMedium.style.opacity = "0.5";
        cWEmailFull.style.opacity = "0.5";
        wEmailSingle.style.display = "none";
        wEmailMedium.style.display = "none";
        wEmailFull.style.display = "none";
        wEmailExtra.style.display = "block";
    }
}


let cWTopBanner30 = document.getElementById("cWTopBanner30");
let cWTopBanner14 = document.getElementById("cWTopBanner14");
let wTopBanner30 = document.getElementById("wTopBanner30");
let wTopBanner14 = document.getElementById("wTopBanner14");
function clickWTopBanner(a) {
    if (a === cWTopBanner30){
        cWTopBanner14.style.opacity = "0.5";
        cWTopBanner30.style.opacity = "1";
        wTopBanner30.style.display = "block";
        wTopBanner14.style.display = "none";
    }else if (a === cWTopBanner14){
        cWTopBanner30.style.opacity = "0.5";
        cWTopBanner14.style.opacity = "1";
        wTopBanner14.style.display = "block";
        wTopBanner30.style.display = "none";
    }
}

let cWStickyBanner30 = document.getElementById("cWStickyBanner30");
let cWStickyBanner14 = document.getElementById("cWStickyBanner14");
let wStickyBanner30 = document.getElementById("wStickyBanner30");
let wStickyBanner14 = document.getElementById("wStickyBanner14");
function clickWStickyBanner(a) {
    if (a === cWStickyBanner30){
        cWStickyBanner14.style.opacity = "0.5";
        cWStickyBanner30.style.opacity = "1";
        wStickyBanner30.style.display = "block";
        wStickyBanner14.style.display = "none";
    }else if (a === cWStickyBanner14){
        cWStickyBanner30.style.opacity = "0.5";
        cWStickyBanner14.style.opacity = "1";
        wStickyBanner14.style.display = "block";
        wStickyBanner30.style.display = "none";
    }
}


let cWSideBanner30 = document.getElementById("cWSideBanner30");
let cWSideBanner14 = document.getElementById("cWSideBanner14");
let wSideBanner30 = document.getElementById("wSideBanner30");
let wSideBanner14 = document.getElementById("wSideBanner14");

function clickWSideBanner(a) {
    if (a === cWSideBanner30){
        cWSideBanner14.style.opacity = "0.5";
        cWSideBanner30.style.opacity = "1";
        wSideBanner30.style.display = "block";
        wSideBanner14.style.display = "none";
    }else if (a === cWSideBanner14){
        cWSideBanner30.style.opacity = "0.5";
        cWSideBanner14.style.opacity = "1";
        wSideBanner14.style.display = "block";
        wSideBanner30.style.display = "none";
    }
}