$(document).ready(function() {
  $("#makePost").click(function() {
    $("#makePostDiv").toggle(500);
  });
});

$(document).ready(function() {
  $("#register").click(function() {
    $("#registerDiv").toggle(500);
  });
});

//Validering och funktioner för registrering
$(document).ready(function() {
  $("#submitRegister").click(function() {
    if (valideraRegister()) {
      $.get(
        "registerDB.php",
        {
          userName: $("#userNameRegister").val(),
          email: $("#emailRegister").val(),
          password: $("#passwordRegister").val()
        },
        function(data) {
          alert(data);
        }
      );
    } else {
    }
  });
});

function valideraRegister() {
  var userName = $("#userNameRegister").val();
  userName = userName.trim();
  var email = $("#emailRegister").val();
  email = email.trim();
  var password = $("#passwordRegister").val();
  password = password.trim();

  if (userName == "" || email == "" || password == "") {
    alert("Vänligen fyll i alla fält");
    return false;
  } else {
    for (let index = 0; index < email.length; index++) {
      if (email.charAt(index) == "@") {
        for (let index2 = index; index2 < email.length; index2++) {
          if (email.charAt(index2) == ".") {
            return true;
          }
        }
      }
    }
    alert("vänligen ange en giltig email");
    return false;
  }
}

//Validering och funktioner för log in
$(document).ready(function() {
  $("#submitLogin").click(function() {
    if (valideraLogin()) {
      $.get(
        "logginDB.php",
        { password: $("#passwordLogin").val(), email: $("#emailLogin").val() },
        function(data) {
          alert(data);
        }
      );
    } else {
    }
  });
});

function valideraLogin() {
  var email = $("#emailLogin").val();
  email = email.trim();
  var password = $("#passwordLogin").val();
  password = password.trim();

  if (email == "" || password == "") {
    alert("Vänligen fyll i alla fält");
    return false;
  } else {
    return true;
  }
}

//validering och funktioner för make post
$(document).ready(function() {
  $("#submitPost").click(function() {
    if (valideraPost()) {
      $.get(
        "makePostDB.php",
        { header: $("#headerPost").val(), text: $("#textPost").val() },
        function(data) {
          alert(data);
        }
      );
    } else {
    }
  });
});

function valideraPost() {
  var header = $("#headerPost").val();
  header = header.trim();
  var text = $("#textPost").val();
  text = text.trim();

  if (header == "" || text == "") {
    alert("Vänligen fyll i alla fält");
    return false;
  } else {
    return true;
  }
}