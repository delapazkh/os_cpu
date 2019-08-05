$(document).ready(function() {
  var processes = [{}];
  var ctr = 1;
  var at = 0;
  var compT;
  var awt;

  $("#addp").click(function() {
    var bt = document.getElementById("bt").value;
    processes.push({ pname: "P" + ctr, burst: bt });
    var bsT = processes[at].burst;
    document.getElementById("dispI").innerHTML +=
      "<tr><th>" +
      "P" +
      ctr +
      "</th><td>" +
      processes[ctr].burst +
      "</td><td>" +
      at +
      "</td><td>" +
      getCmpTime(processes[ctr].burst, processes[ctr - 1].burst, ctr) +
      "</td><td>" +
      getTAT(
        getCmpTime(processes[ctr].burst, processes[ctr - 1].burst, ctr),
        at
      ) +
      "</td></tr>";

    ctr++;
    at++;
    document.getElementById("bt").value = "";

    var newCl = generateClass();

    document.getElementById("prog").innerHTML +=
      "<div class='" +
      newCl +
      "' role='progressbar' style='width: " +
      processes[at].burst +
      0 +
      "%' aria-valuenow='15' aria-valuemin='0' aria-valuemax='100'>" +
      processes[at].pname +
      "</div>";

    document.getElementById("awt").innerHTML = getawt(awt, bsT, ctr).toFixed(2);
  });

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
});
