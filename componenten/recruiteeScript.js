
//adds hidden span with offer tags to .rt-list__offer-item
//timeout is to make sure widget.js has build all the divs with class .rt-list__offer-item
setTimeout(() => {
  const elements = document.querySelectorAll(".rt-list__offer-item");
  // loop al .rt-list__offer-item divs and us data-offer-id to get the offer tags
  elements.forEach(function (element) {
    var dataID = element.getAttribute("data-offer-id");

    // start toevoeging ID's
    var eventElementID = "rt-list__offer-item-" + dataID;
    var buttonApplyID = "apply-button-job-" + dataID;
    var buttonSubmitID = "submit-button-job-" + dataID;
    var buttonBackID = "back-button-job-" + dataID;
    //toevoegen id aan rt-list__offer-item is nodig voor vervolg actie
    element.setAttribute("id", eventElementID);
    //toevoeging id aan button apply
    document
      .getElementById(eventElementID)
      .addEventListener("click", function (event) {
        console.log("A clicked happend on" + eventElementID);
        setTimeout(() => {
          console.log("A clicked happend 500ms ago on " + eventElementID);

          var popupDiv = document.getElementById(
            "recruitee-careers-details-container"
          );
          //If it isn't "undefined" and it isn't "null", then it exists.
          if (typeof popupDiv != "undefined" && popupDiv != null) {
            //alert('Element exists');
            var buttonApplySpan = document.querySelector(".rt__button--action");
            buttonApplySpan.setAttribute("id", buttonApplyID);

            //toevoeging id aan button submit
            document
              .getElementById(buttonApplyID)
              .addEventListener("click", function (event) {
                console.log("A clicked happend on" + buttonApplyID);

                setTimeout(() => {
                  console.log("Set ID " + buttonSubmitID);

                  var popupDiv = document.getElementById(
                    "recruitee-careers-details-container"
                  );
                  //If it isn't "undefined" and it isn't "null", then it exists.
                  if (typeof popupDiv != "undefined" && popupDiv != null) {
                    //alert('Element exists');
                    var buttonSubmitSpan = document.querySelector(
                      ".rt__button--action"
                    );
                    buttonSubmitSpan.setAttribute("id", buttonSubmitID);
                    var buttonBackSpan = document.querySelector(
                      ".rt-details__footer-item--left"
                    );
                    buttonBackSpan.setAttribute("id", buttonBackID);
                    console.log("An attribute is set " + buttonBackID);
                    //toevoeging id aan button apply als geklikt op back button
                    document
                      .getElementById(buttonBackID)
                      .addEventListener("click", function (event) {
                        console.log("A clicked happend on" + buttonBackID);

                        setTimeout(() => {
                          console.log("Set ID " + buttonSubmitID);

                          var popupDiv = document.getElementById(
                            "recruitee-careers-details-container"
                          );
                          //If it isn't "undefined" and it isn't "null", then it exists.
                          if (
                            typeof popupDiv != "undefined" &&
                            popupDiv != null
                          ) {
                            //alert('Element exists');
                            var buttonApplySpan = document.querySelector(
                              ".rt__button--action"
                            );
                            buttonApplySpan.setAttribute("id", buttonApplyID);
                          }
                          //set button aplly to listen again to click event

                          document
                            .getElementById(buttonApplyID)
                            .addEventListener("click", eventClickApply);
                        }, 500);
                      });
                  }
                }, 500);
              });
          }
        }, 500);
      });

    function eventClickApply() {
      console.log("Another clicked happend on " + buttonApplyID);

      setTimeout(() => {
        console.log("Set ID " + buttonSubmitID);

        var popupDiv = document.getElementById(
          "recruitee-careers-details-container"
        );
        //If it isn't "undefined" and it isn't "null", then it exists.
        if (typeof popupDiv != "undefined" && popupDiv != null) {
          //alert('Element exists');
          var buttonSubmitSpan = document.querySelector(".rt__button--action");
          buttonSubmitSpan.setAttribute("id", buttonSubmitID);
          var buttonBackSpan = document.querySelector(
            ".rt-details__footer-item--left"
          );
          buttonBackSpan.setAttribute("id", buttonBackID);
          console.log("An attribute is set " + buttonBackID);
          //toevoeging id aan button apply als geklikt op back button
          document
            .getElementById(buttonBackID)
            .addEventListener("click", function (event) {
              console.log("A clicked happend on " + buttonBackID);

              setTimeout(() => {
                console.log("Set ID " + buttonSubmitID);

                var popupDiv = document.getElementById(
                  "recruitee-careers-details-container"
                );
                //If it isn't "undefined" and it isn't "null", then it exists.
                if (typeof popupDiv != "undefined" && popupDiv != null) {
                  //alert('Element exists');
                  var buttonApplySpan = document.querySelector(
                    ".rt__button--action"
                  );
                  buttonApplySpan.setAttribute("id", buttonApplyID);
                }
              }, 500);
            });
        }
      }, 500);
    }

    // end toevoeging ID's

    $.ajax({
      url: "https://api.recruitee.com/c/1674/offers/" + dataID,
      type: "GET",
      dataType: "json",
      contentType: "application/json",
      beforeSend: function (xhr) {
        xhr.setRequestHeader(
          "Authorization",
          "Bearer RmM4V2Q4UUtIajhKejZKWGdHV3dLQT09"
        );
      },

      success: function (data) {
        $.each(data, function (index, item) {
          if (item.offer_tags === "") {
            element.innerHTML +=
              '<span class="skill" style="display:none!important;">null</span>';
          } else {
            element.innerHTML +=
              '<span class="skill" style="display:none!important;">' +
              item.offer_tags +
              "</span>";
          }
        });
      },
    });
  });
}, 2000);



