function load_ad_content(clickedID) {
    var myDiv = document.getElementById(clickedID);
    var adContent = document.getElementsByClassName("adContent");
    var adTitle = document.getElementsByClassName("adTitle");
    switch (clickedID) {
        case "pushNotificationTitle":
            for (let index = 0; index < adContent.length; index++) {
                adContent[index].classList.remove("active");
                adTitle[index].classList.remove("active");
            }
            document.getElementById("pushNotificationTitle").classList.add("active");
            document.getElementById("pushNotificationContent").classList.add("active");
            break;
        case "nativeTitle":
            for (let index = 0; index < adContent.length; index++) {
                adTitle[index].classList.remove("active");
                adContent[index].classList.remove("active");
            }
            document.getElementById("nativeTitle").classList.add("active");
            document.getElementById("nativeContent").classList.add("active");
            break;
        case "interstitialTitle":
            for (let index = 0; index < adContent.length; index++) {
                adTitle[index].classList.remove("active");
                adContent[index].classList.remove("active");
            }
            document.getElementById("interstitialTitle").classList.add("active");
            document.getElementById("interstitialContent").classList.add("active");
            break;
        case "bannerTitle":
            for (let index = 0; index < adContent.length; index++) {
                adTitle[index].classList.remove("active");
                adContent[index].classList.remove("active");
            }
            document.getElementById("bannerTitle").classList.add("active");
            document.getElementById("bannerContent").classList.add("active");
            break;
        case "popUnderTitle":
            for (let index = 0; index < adContent.length; index++) {
                adTitle[index].classList.remove("active");
                adContent[index].classList.remove("active");
            }
            document.getElementById("popUnderTitle").classList.add("active");
            document.getElementById("popUnderContent").classList.add("active");
            break;
         case "lockerTitle":
            for (let index = 0; index < adContent.length; index++) {
                adTitle[index].classList.remove("active");
                adContent[index].classList.remove("active");
            }
            document.getElementById("lockerTitle").classList.add("active");
            document.getElementById("lockerContent").classList.add("active");
            break;
    }
}
