///
/// PORTRAIT ALBUMS
///
const apartmanDvoristePortrait = 'https://photos.app.goo.gl/6kDWDpqSAY6werKH6';
const apartmanMarijaPortrait = 'https://photos.app.goo.gl/j5ZDHULGkKQFvEtEA';
const apartmanJosipPortrait = 'https://photos.app.goo.gl/wNmeGtvuWEkNiwr6A';

///
/// LANDSCAPE ALBUMS
///
const apartmanDvoristeLandscape = 'https://photos.app.goo.gl/1i464C6NPaSrtooA7';
const apartmanMarijaLandscape = 'https://photos.app.goo.gl/BtUPxF2SHJ3B1NFd9';
const apartmanJosipLandscape = 'https://photos.app.goo.gl/A7GCtecZhnMsJoCc7';

/// Pixels which are mobile
const mobileThresholdPixels = 768


// Function to detect if the viewport width corresponds to a mobile device
function isMobileViewport() {
    return window.innerWidth <= mobileThresholdPixels;
}

// Get link elements
const dvoristeLinkElement = document.getElementById("linkSlike");
const marijaLinkElement = document.getElementById("linkSlikeMarija");
const josipLinkElement = document.getElementById("linkSlikeJosip");

// Check if the viewport width corresponds to a mobile device
if (isMobileViewport()) {
    // Set the link's destination for portrait gallery
    dvoristeLinkElement.href = apartmanDvoristePortrait;
    marijaLinkElement.href = apartmanMarijaPortrait;
    josipLinkElement.href = apartmanJosipPortrait;
} else {
    // Set the link's destination for landscape gallery
    dvoristeLinkElement.href = apartmanDvoristeLandscape;
    marijaLinkElement.href = apartmanMarijaLandscape;
    josipLinkElement.href = apartmanJosipLandscape;
}
