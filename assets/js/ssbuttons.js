var title = document.title;
var url   = document.location.href;
var links = document.querySelectorAll('.SocialSharingButtons a');

for(var i = 0; i < links.length; i++) {
    links[i].href = links[i].href.replace(/___title___/g, encodeURI(title));
    links[i].href = links[i].href.replace(/___url___/g  , encodeURI(url));
}
