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
const buttonMarija = document.getElementById("buttonMarija");
const buttonJosip = document.getElementById("buttonJosip");
const buttonDvoriste = document.getElementById("buttonDvoriste");

const iconMarija = document.getElementById("iconMarija");
const photosMarija = document.getElementById("photosMarija");
const textButtonMarija = document.getElementById("textButtonMarija");

const iconJosip = document.getElementById("iconJosip");
const photosJosip = document.getElementById("photosJosip");
const textButtonJosip = document.getElementById("textButtonJosip");

const photosDvoriste = document.getElementById("photosDvoriste");

// Check if the viewport width corresponds to a mobile device
if (isMobileViewport()) {
    // Set the link's destination for portrait gallery
    buttonDvoriste.href = apartmanDvoristePortrait;
    photosDvoriste.href = apartmanDvoristePortrait;

    buttonMarija.href = apartmanMarijaPortrait;
    iconMarija.href = apartmanMarijaPortrait;
    photosMarija.href = apartmanMarijaPortrait;
    textButtonMarija.href = apartmanMarijaPortrait;

    buttonJosip.href = apartmanJosipPortrait;
    iconJosip.href = apartmanJosipPortrait;
    photosJosip.href = apartmanJosipPortrait;
    textButtonJosip.href = apartmanJosipPortrait;
} else {
    // Set the link's destination for landscape gallery
    buttonDvoriste.href = apartmanDvoristeLandscape;
    photosDvoriste.href = apartmanDvoristeLandscape;

    buttonMarija.href = apartmanMarijaLandscape;
    iconMarija.href = apartmanMarijaLandscape;
    photosMarija.href = apartmanMarijaLandscape;
    textButtonMarija.href = apartmanMarijaLandscape;

    buttonJosip.href = apartmanJosipLandscape;
    iconJosip.href = apartmanJosipLandscape;
    photosJosip.href = apartmanJosipLandscape;
    textButtonJosip.href = apartmanJosipLandscape;
}
