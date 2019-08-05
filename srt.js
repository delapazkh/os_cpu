$(document).ready(function() {
  var srtprocesses = [{}];
  var ctr = 1;
  // var srt_at = Timer();
  $("#addsrt").click(function() {
    var srt_bst = document.getElementById("srtbst").value;
    var srt_at = document.getElementById("srtat").value;

    srtprocesses.push({ pname: "P" + ctr, arr_t: srt_at, burst: srt_bst });
    document.getElementById("srtdispI").innerHTML +=
      "<tr><th>" +
      "P" +
      ctr +
      "</th><td>" +
      srtprocesses[ctr].burst +
      "</td><td>" +
      srt_at +
      "</td><td>" +
      00 +
      "</td><td>" +
      00 +
      "</td></tr>";

    // console.log(srtprocesses);
    // console.log(ctr);
    ctr++;
    //at++;
    document.getElementById("srtbst").value = "";
    document.getElementById("srtat").value = "";
  });

  function Timer() {
    var i = 1;
    var timer = setInterval(function() {
      $("#counter").text(i);
      //console.log(i);
      i++;
      if (i > 5) {
        clearInterval(timer);
        return i;
      }
    }, 1000);
  }

  $("#srt_gen").click(function() {
    var i;
    srtprocesses.sort(sortByProperty("burst"));
    srtprocesses.pop();
    for (i = 0; i < srtprocesses.length; i++) {
      var newCl = generateClass();
      document.getElementById("srtprog").innerHTML +=
        "<div class='" +
        newCl +
        "' role='progressbar' style='width: " +
        srtprocesses[i].burst +
        0 +
        "%' aria-valuenow='15' aria-valuemin='0' aria-valuemax='100'>" +
        srtprocesses[i].pname +
        "</div>";
    }

    document.getElementById("srtprog").innerHTML +=
      "<div class='" +
      newCl +
      "' role='progressbar' style='width: " +
      srtprocesses[at].burst +
      0 +
      "%' aria-valuenow='15' aria-valuemin='0' aria-valuemax='100'>" +
      srtprocesses[at].pname +
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

  function getTimeLeft() {
    var tl = bt - at;
  }
});
