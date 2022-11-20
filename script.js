"use strict";

document.querySelector("[_js_procesare-cerere]").addEventListener("submit", (e) => {
    e.preventDefault();
    e.submitter.setAttribute("disabled", "");

    let responseContainer = e.target.lastElementChild;

    if (responseContainer.innerText !== "") {
        responseContainer.removeChild(responseContainer.firstChild);
    }

    fetch(window.location.origin + "/ajax/?target=" + e.target.dataset.target, {
        body: "target=" + e.target.dataset.target + "&message=" + e.target.querySelector("[name=message]").value,
        headers: {
            "content-type": "application/x-www-form-urlencoded"
        },
        method: "post",
        type: "json"
    }).
    then(r => {
        return r.json();
    }).
    then(r => {
        e.submitter.removeAttribute("disabled");

        let responseText;

        if (r.response.status === "success") {
            responseText = "Cererea a fost trimisă și procesată cu succes. Mesajul procesat: " + r.response.message + ".";
        } else {
            responseText = "A apărut o eroare la procesarea cererii.";
        }

        responseContainer.appendChild(document.createTextNode(responseText));
    });
});
