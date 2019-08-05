$(document).ready(function() {
  var sjfprocesses = [{}];
  var ctr = 1;
  var at = 0;
  var jctr = 0;
  $("#addsjf").click(function() {
    var sjfb = document.getElementById("sjfbt").value;
    sjfprocesses.push({ pname: "P" + ctr, burst: sjfb });
    document.getElementById("sjfdispI").innerHTML +=
      "<tr><th>" +
      "P" +
      ctr +
      "</th><td>" +
      sjfprocesses[ctr].burst +
      "</td><td>" +
      at +
      "</td><td>" +
      getCmpTime(sjfprocesses[ctr].burst, sjfprocesses[ctr - 1].burst, ctr) +
      "</td><td>" +
      getTAT(
        getCmpTime(sjfprocesses[ctr].burst, sjfprocesses[ctr - 1].burst, ctr),
        at
      ) +
      "</td></tr>";

    console.log(sjfprocesses);
    ctr++;
    at++;
    document.getElementById("sjfbt").value = "";
  });

  function getawt(awt, bsT, ctr) {
    awt = at + bsT / ctr;

    return awt;
  }

  function getCmpTime(bsT, bsT2, ctr) {
    var ct;
    if (ctr == 1) {
      ct = bsT;
    } else {
      ct = parseFloat(bsT) + parseFloat(bsT2);
    }

    return ct;
  }

  function getTAT(ct, at) {
    return (tat = ct - at);
  }

  function generateClass() {
    var cls = [
      "progress-bar",
      "progress-bar bg-success",
      "progress-bar bg-info",
      "progress-bar bg-warning",
      "progress-bar bg-danger"
    ];
    return cls[Math.floor(Math.random() * cls.length)];
  }

  $("#sjf_gen").click(function() {
    var i;
    sjfprocesses.sort(sortByProperty("burst"));
    sjfprocesses.pop();
    for (i = 0; i < sjfprocesses.length; i++) {
      var newCl = generateClass();
      document.getElementById("sjfprog").innerHTML +=
        "<div class='" +
        newCl +
        "' role='progressbar' style='width: " +
        sjfprocesses[i].burst +
        0 +
        "%' aria-valuenow='15' aria-valuemin='0' aria-valuemax='100'>" +
        sjfprocesses[i].pname +
        "</div>";
    }

    document.getElementById("sjfprog").innerHTML +=
      "<div class='" +
      newCl +
      "' role='progressbar' style='width: " +
      sjfprocesses[at].burst +
      0 +
      "%' aria-valuenow='15' aria-valuemin='0' aria-valuemax='100'>" +
      sjfprocesses[at].pname +
      "</div>";

    // document.getElementById("sjfawt").innerHTML = getawt(awt, bsT, ctr).toFixed(
    //   2
    // );
  });

  var sortByProperty = function(property) {
    return function(x, y) {
      return x[property] === y[property]
        ? 0
        : x[property] > y[property]
        ? 1
        : -1;
    };
  };
});
