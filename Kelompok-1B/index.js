  function disabledall() {
    var inputs = document.querySelectorAll("input, textarea, select");
    inputs.forEach(function (input) {
        input.disabled = true;
    });
  }


  function disabledlainnya() {
    var checkbox = document.querySelector(".lainnya input[type=checkbox]");
    var text = document.querySelector(".lainnya input[type=text]");
    if (checkbox.checked) {
      text.disabled = false;
    } else {
      text.disabled = true;
    }
  }

  function navbaranimate() {
    const toggleBtn = document.querySelector('.toggle_btn')
        const toggleBtnIcon = document.querySelector('.toggle_btn i')
        const dropDownMenu = document.querySelector('.dropdown_menu')

        toggleBtn.onclick = function () {
            dropDownMenu.classList.toggle('open')
            const isOpen = dropDownMenu.classList.contains('open')

            toggleBtnIcon.classList = isOpen
            ? 'fa-solid fa-xmark'
            : 'fa-solid fa-bars'
        }
  }

  
function lihatHasilButton() {
  var ahref = document.querySelectorAll("form a");
  var button = document.querySelector("form #kirim");

  ahref.forEach(function (a) {
    if(a.href.includes("surveyweb1.html")) {
      a.href = "lihat-hasil.html";
      console.log(a.href);
    }
    else if(a.href.includes("surveyweb2.html")) {
      a.href = "lihat-hasil-2.html";
    }
  });
  
  if(button != null) {
    button.style.opacity = 0;
    button.disabled = true;
    button.addEventListener("mouseover", function() {
      button.style.cursor = "default";
    });
  }
}

function hideFormByIndex(indexHide) {
  var forms = document.querySelectorAll('.form');

  // Menyembunyikan elemen dengan index yang diberikan
  for (var i = 0; i < forms.length; i++) {
      if (i !== indexHide) {
          forms[i].style.display = 'none'; // Mengubah 'block' menjadi 'none'
      }
  }
  if (indexHide >= 0 && indexHide < forms.length) {
      forms[indexHide].style.display = 'block';
  }
}

function redirectToPage(pageUrl) {
  window.location.href = pageUrl;
}

  
