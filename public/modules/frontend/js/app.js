function splideFull(itemParam, setting = {}) {
  if ($(itemParam).length) {
    var defaultSetting = {
      perPage: 1,
      autoplay: true,
      interval: 5000,
      type: "slide",
      pagination: true,
      arrows: true,
      video: {
        mute: false,
        autoplay: true,
        playerOptions: {
          youtube: {
            autoplay: 1,
            controls: 0,
            disablekb: 1,
            playsinline: 1,
            rel: 0,
          },
          htmlVideo: {
            loop: true,
            autoplay: true,
            controls: false,
            muted: true,
          },
        },
      },
    }
    var splide = new Splide(
      itemParam,
      Object.assign(
        Object.assign(defaultSetting, {
          type: reCount() > 1 ? "loop" : "fade",
          pagination: reCount() > 1 ? "true" : "false",
          arrows: reCount() > 1 ? "true" : "false",
        }),
        setting
      )
    ).mount(window.splide.Extensions)
  }
  function reCount() {
    return $(itemParam + " .splide__slide").length
  }
  if (reCount() <= 1) {
    $(itemParam + " .splide__pagination").remove()
  }
}

function multipleSplide(itemParam, setting) {
  if ($(itemParam).length) {
    var arrowsBoo = setting.arrows == undefined
    var paginationBoo = setting.pagination == undefined

    var defaultSetting = {
      type: "slide",
      arrows: true,
      pagination: true,
      autoplay: true,
    }
    Object.assign(setting, {
      type: reCount() > setting.perPage ? "loop" : "slide",
      pagination: paginationBoo ? reCount() > setting.perPage : true,
      arrows: arrowsBoo ? reCount() > setting.perPage : true,
    })
    var obj = Object.keys(setting.breakpoints)
    var splide = new Splide(
      itemParam,
      Object.assign(
        defaultSetting,
        Object.assign(
          setting,
          Object.keys(obj).forEach((key) => {
            Object.assign(setting.breakpoints[obj[key]], {
              type:
                reCount() > setting.breakpoints[obj[key]]["perPage"]
                  ? "loop"
                  : "slide",
              arrows: arrowsBoo
                ? reCount() > setting.breakpoints[obj[key]]["perPage"]
                : true,
              pagination: paginationBoo
                ? reCount() > setting.breakpoints[obj[key]]["perPage"]
                : true,
            })
          })
        )
      )
    ).mount()
  }
  function reCount() {
    return $(itemParam + " .splide__slide").length
  }
  if (reCount() <= 1) {
    $(itemParam + " .splide__pagination").remove()
  }
}
  // Get the button
let mybutton = document.getElementById("back-to-top");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}
/*---------- */
/*
 * Bootstrap Cookie Alert by Wruczek
 * https://github.com/Wruczek/Bootstrap-Cookie-Alert
 * Released under MIT license
 */
(function () {
  "use strict";

  var cookieAlert = document.querySelector(".cookiealert");
  var acceptCookies = document.querySelector(".acceptcookies");

  if (!cookieAlert) {
     return;
  }

  cookieAlert.offsetHeight; // Force browser to trigger reflow (https://stackoverflow.com/a/39451131)

  // Show the alert if we cant find the "acceptCookies" cookie
  if (!getCookie("acceptCookies")) {
      cookieAlert.classList.add("show");
  }

  // When clicking on the agree button, create a 1 year
  // cookie to remember user's choice and close the banner
  acceptCookies.addEventListener("click", function () {
      setCookie("acceptCookies", true, 365);
      cookieAlert.classList.remove("show");

      // dispatch the accept event
      window.dispatchEvent(new Event("cookieAlertAccept"))
  });

  // Cookie functions from w3schools
  function setCookie(cname, cvalue, exdays) {
      var d = new Date();
      d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
      var expires = "expires=" + d.toUTCString();
      document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
  }

  function getCookie(cname) {
      var name = cname + "=";
      var decodedCookie = decodeURIComponent(document.cookie);
      var ca = decodedCookie.split(';');
      for (var i = 0; i < ca.length; i++) {
          var c = ca[i];
          while (c.charAt(0) === ' ') {
              c = c.substring(1);
          }
          if (c.indexOf(name) === 0) {
              return c.substring(name.length, c.length);
          }
      }
      return "";
  }
})();