window.addEventListener("DOMContentLoaded", function () {
  const consent = localStorage.getItem("cookieConsent");

  if (!consent) {
    document.getElementById("cookieConsent").style.display = "flex";
  }

  document.getElementById("acceptCookies").addEventListener("click", function () {
    localStorage.setItem("cookieConsent", "accepted");
    document.getElementById("cookieConsent").style.display = "none";
  });
});
