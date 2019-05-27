$(document).ready(function() {
  $("#makePost").click(function() {
    $("html, body")
      .animate({ scrollTop: 0 }, "slow")
      .promise()
      .then(function() {
        $("#makePostDiv").toggle(500);
      });
  });
});

$(document).ready(function() {
  $("#register").click(function() {
    $("html, body")
      .animate({ scrollTop: 0 }, "slow")
      .promise()
      .then(function() {
        $("#registerDiv").toggle(500);
      });
  });
});

//Validering och funktioner för registrering
$(document).on("click", "#submitRegister", function() {
  var userName = $("#registerDiv")
    .find("#userNameRegister")
    .val();
  var email = $("#registerDiv")
    .find("#emailRegister")
    .val();
  var password = $("#registerDiv")
    .find("#passwordRegister")
    .val();

  if (valideraRegister(userName, email, password)) {
    $.post(
      "registerDB.php",
      {
        password: password,
        userName: userName,
        email: email
      },
      function(data) {
        $("#registerDiv").html("<h3 id='feedbackText'>" + data + "</h3>");
        $("#registerFeedbackDiv").toggle(50);
        setTimeout(hideRegister, 3500);
      }
    );
  } else {
  }
});

function hideRegister() {
  $("#registerDiv").toggle(500);
  setTimeout(function() {
    $("#registerDiv").load("include/views/_registerDiv.php");
  }, 500);
}

function valideraRegister(userName, email, password) {
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
      $.post(
        "logginDB.php",
        { password: $("#passwordLogin").val(), email: $("#emailLogin").val() },
        function(data) {
          location.reload();
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
$(document).on("click", "#submitPost", function() {
  var header = $("#makePostDiv")
    .find("#headerPost")
    .val();
  var text = $("#makePostDiv")
    .find("#textPost")
    .val();
  if (valideraPost(header, text)) {
    $.post("makePostDB.php", { header: header, text: text }, function(data) {
      $("#containerForPosts").load("postList.php");
      $("#makePostDiv").html("<h3 id='feedbackText'>" + data + "</h3>");
      setTimeout(hideMakePost, 3500);
    });
  } else {
  }
});

function hideMakePost() {
  $("#makePostDiv").toggle(500);
  setTimeout(function() {
    $("#makePostDiv").load("include/views/_postDiv.php");
  }, 500);
}

function valideraPost(header, text) {
  if (header == "" || text == "") {
    alert("Vänligen fyll i alla fält");
    return false;
  } else {
    return true;
  }
}
