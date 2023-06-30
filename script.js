function showMore() {
    var moreText = document.getElementById("more-text");
    var btnText = document.getElementById("more-btn");
  
    if (moreText.style.display === "none") {
      moreText.style.display = "inline";
      btnText.innerHTML = "Leer menos";
    } else {
      moreText.style.display = "none";
      btnText.innerHTML = "Leer más";
    }
  }
  