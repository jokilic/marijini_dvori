// Include Lightbox 
import PhotoSwipeLightbox from '/photoswipe/photoswipe-lightbox.esm.js';

const lightbox = new PhotoSwipeLightbox({
    // may select multiple "galleries"
    gallery: '#slider',

    // Elements within gallery (slides)
    children: 'li',

    // setup PhotoSwipe Core dynamic import
    pswpModule: () => import('/photoswipe/photoswipe.esm.js')
});
lightbox.init();