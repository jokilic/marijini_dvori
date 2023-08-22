///
/// PORTRAIT ALBUMS
///
const apartmanDvoristePortrait = 'https://photos.app.goo.gl/6kDWDpqSAY6werKH6';
const apartmanPlazaPortrait = 'https://photos.app.goo.gl/XXsEkXW95BpmtyiH7';
const apartmanMarijaPortrait = 'https://photos.app.goo.gl/j5ZDHULGkKQFvEtEA';
const apartmanJosipPortrait = 'https://photos.app.goo.gl/wNmeGtvuWEkNiwr6A';

///
/// LANDSCAPE ALBUMS
///
const apartmanDvoristeLandscape = 'https://photos.app.goo.gl/1i464C6NPaSrtooA7';
const apartmanPlazaLandscape = 'https://photos.app.goo.gl/ygyTCdYyot5ULm5o6';
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
const buttonPlaza = document.getElementById("buttonPlaza");

const iconMarija = document.getElementById("iconMarija");
const photosMarija = document.getElementById("photosMarija");
const textButtonMarija = document.getElementById("textButtonMarija");

const iconJosip = document.getElementById("iconJosip");
const photosJosip = document.getElementById("photosJosip");
const textButtonJosip = document.getElementById("textButtonJosip");

const iconDvoriste = document.getElementById("iconDvoriste");
const photosDvoriste = document.getElementById("photosDvoriste");
const textButtonDvoriste = document.getElementById("textButtonDvoriste");

const iconPlaza = document.getElementById("iconPlaza");
const photosPlaza = document.getElementById("photosPlaza");
const textButtonPlaza = document.getElementById("textButtonPlaza");

// Check if the viewport width corresponds to a mobile device
if (isMobileViewport()) {
    // Set the link's destination for portrait gallery
    buttonPlaza.href = apartmanPlazaPortrait;
    iconPlaza.href = apartmanPlazaPortrait;
    photosPlaza.href = apartmanPlazaPortrait;
    textButtonPlaza.href = apartmanPlazaPortrait;

    buttonDvoriste.href = apartmanDvoristePortrait;
    iconDvoriste.href = apartmanDvoristePortrait;
    photosDvoriste.href = apartmanDvoristePortrait;
    textButtonDvoriste.href = apartmanDvoristePortrait;

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
    buttonPlaza.href = apartmanPlazaLandscape;
    iconPlaza.href = apartmanPlazaLandscape;
    photosPlaza.href = apartmanPlazaLandscape;
    textButtonPlaza.href = apartmanPlazaLandscape;

    buttonDvoriste.href = apartmanDvoristeLandscape;
    iconDvoriste.href = apartmanDvoristeLandscape;
    photosDvoriste.href = apartmanDvoristeLandscape;
    textButtonDvoriste.href = apartmanDvoristeLandscape;

    buttonMarija.href = apartmanMarijaLandscape;
    iconMarija.href = apartmanMarijaLandscape;
    photosMarija.href = apartmanMarijaLandscape;
    textButtonMarija.href = apartmanMarijaLandscape;

    buttonJosip.href = apartmanJosipLandscape;
    iconJosip.href = apartmanJosipLandscape;
    photosJosip.href = apartmanJosipLandscape;
    textButtonJosip.href = apartmanJosipLandscape;
}
