$(document).ready(function () {
  $('#mytable').on('click', '.open_modal', function (e) {
    var m = $(this).attr("id");
    $.ajax({
      url: "?r=user/update",
      type: "GET",
      data: {
        kd_user: m,
      },
      success: function (ajaxData) {
        $("#ModalEdit").html(ajaxData);
        $("#ModalEdit").modal('show', {
          backdrop: 'true'
        });
      }
    });
  });

  $("#form-save").on('submit', function (e) {
    e.preventDefault();
    $.ajax({
        method: $(this).attr("method"), // untuk mendapatkan attribut method pada form
        url: $(this).attr("action"), // untuk mendapatkan attribut action pada form
        data: {
          modal_username: $('#modal-username').val(),
          modal_password: $('#modal-password').val(),
          modal_nama: $('#modal-nama').val(),
          modal_level: $('#modal-level').val(),

        },
        success: function (response) {
          //console.log(response);
          $("#modal-data").empty();
          $("#modal-data").html(response.data);
          $("#tambahData").modal('hide');
          $('#modal-username').val('');
          $('#modal-password').val('');
          $('#modal-nama').val('');
          $('#modal-level').val('').change();
          $('#mytable').DataTable();
        },
        error: function (e) {
          // Error function here
        },
        beforeSend: function (b) {
          // Before function here
        }
      })
      .done(function (d) {
        // When ajax finished

      });
  });

  $('body').on('submit', '#form-update', function (e) {
    e.preventDefault();
    $.ajax({
        method: $(this).attr("method"), // untuk mendapatkan attribut method pada form
        url: $(this).attr("action"), // untuk mendapatkan attribut action pada form
        data: {
          modal_kduser: $('#edit-id').val(),
          modal_username: $('#edit-username').val(),
          modal_password: $('#edit-password').val(),
          modal_nama: $('#edit-nama').val(),
          modal_level: $('#edit-level').val(),
        },
        success: function (response) {
          // console.log(response);
          $("#modal-data").empty();
          $("#modal-data").html(response.data);
          $("#ModalEdit").modal('hide');
        },
        error: function (e) {
          // Error function here
        },
        beforeSend: function (b) {
          // Before function here
        }
      })
      .done(function (d) {
        // When ajax finished
      });
  });

  $('body').on('click', '.delete_modal', function (e) {
    let kd_user = $(this).data('id');
    $('#modal_delete').modal('show', {
      backdrop: 'static'
    });
    $("#delete_link").on("click", function () {
      e.preventDefault();
      $.ajax({
          method: 'POST', // untuk mendapatkan attribut method pada form
          url: '?r=user/hapus', // untuk mendapatkan attribut action pada form
          data: {
            kd_user: kd_user
          },
          success: function (response) {
            //console.log(response);
            $("#modal-data").empty();
            $("#modal-data").html(response.data);
            $("#modal_delete").modal('hide');
          },
          error: function (e) {
            // Error function here
          },
          beforeSend: function (b) {
            // Before function here
          }
        })
        .done(function (d) {
          // When ajax finished

        });
    });
  });
});