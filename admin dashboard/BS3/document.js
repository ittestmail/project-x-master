$(document).ready(function () {
  // On page load: datatable
  var table_companies = $("#table_companies").dataTable({
    ajax: "data.php?job=get_companies",
    columns: [
      { data: "company" },
      { data: "firstname" },
      { data: "lastname" },
      { data: "username" },
      { data: "password" },
      { data: "email" },
      { data: "functie" },
      { data: "created_at" },
      { data: "functions", sClass: "functions" }
    ],
    aoColumnDefs: [{ bSortable: false, aTargets: [-1] }],
    lengthMenu: [
      [10, 25, 50, 100, -1],
      [10, 25, 50, 100, "All"]
    ],

    oLanguage: {
      oPaginate: {
        sFirst: " ",
        sPrevious: " ",
        sNext: " ",
        sLast: " "
      },
      sLengthMenu: "Records per page: _MENU_",
      sInfo: "Total of _TOTAL_ records (showing _START_ to _END_)",
      sInfoFiltered: "(filtered from _MAX_ total records)"
    }
  });

  // On page load: form validation
  jQuery.validator.setDefaults({
    success: "valid",
    rules: {
      fiscal_year: {
        required: true,
        min: 2000,
        max: 2025
      }
    },
    errorPlacement: function (error, element) {
      error.insertBefore(element);
    },
    highlight: function (element) {
      $(element)
        .parent(".field_container")
        .removeClass("valid")
        .addClass("error");
    },
    unhighlight: function (element) {
      $(element)
        .parent(".field_container")
        .addClass("valid")
        .removeClass("error");
    }
  });
  var form_company = $("#form_company");
  form_company.validate();

  // Show message
  function show_message(message_text, message_type) {
    $("#message")
      .html("<p>" + message_text + "</p>")
      .attr("class", message_type);
    $("#message_container").show();
    if (typeof timeout_message !== "undefined") {
      window.clearTimeout(timeout_message);
    }
    timeout_message = setTimeout(function () {
      hide_message();
    }, 8000);
  }
  // Hide message
  function hide_message() {
    $("#message")
      .html("")
      .attr("class", "");
    $("#message_container").hide();
  }

  // Show loading message
  function show_loading_message() {
    $("#loading_container").show();
  }
  // Hide loading message
  function hide_loading_message() {
    $("#loading_container").hide();
  }

  // Show lightbox
  function show_lightbox() {
    $(".lightbox_bg").show();
    $(".lightbox_container").show();
  }
  // Hide lightbox
  function hide_lightbox() {
    $(".lightbox_bg").hide();
    $(".lightbox_container").hide();
  }
  // Lightbox background
  $(document).on("click", ".lightbox_bg", function () {
    hide_lightbox();
  });
  // Lightbox close button
  $(document).on("click", ".lightbox_close", function () {
    hide_lightbox();
  });
  // Escape keyboard key
  $(document).keyup(function (e) {
    if (e.keyCode == 27) {
      hide_lightbox();
    }
  });

  // Hide iPad keyboard
  function hide_ipad_keyboard() {
    document.activeElement.blur();
    $("input").blur();
  }

  // Delete company
  $(document).on("click", ".function_delete a", function (e) {
    e.preventDefault();
    var company_name = $(this).data("name");
    if (confirm("Are you sure you want to delete '" + company_name + "'?")) {
      show_loading_message();
      var id = $(this).data("id");
      var request = $.ajax({
        url: "data.php?job=delete_company&id=" + id,
        cache: false,
        dataType: "json",
        contentType: "application/json; charset=utf-8",
        type: "get"
      });
      request.done(function (output) {
        if (output.result == "success") {
          // Reload datable
          table_companies.api().ajax.reload(function () {
            hide_loading_message();
            show_message(
              "Company '" + company_name + "' deleted successfully.",
              "success"
            );
          }, true);
        } else {
          hide_loading_message();
          show_message("Delete request failed", "error");
        }
      });
      request.fail(function (jqXHR, textStatus) {
        hide_loading_message();
        show_message("Delete request failed: " + textStatus, "error");
      });
    }
  });
});
