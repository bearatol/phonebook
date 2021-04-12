$(function () {
  $("button.mod", document).click(function () {
    let tr = $(this).parents("tr");
    let name = tr.find(".name").text();
    let phone = tr.find(".phone").text();
    let user_id = tr.data("user");
    let phone_id = tr.data("phone");
    let modal = $("#modal-mod", document);

    modal.find("[name='USER_ID']").val(user_id);
    modal.find(".name").val(name);
    modal.find("[name='PHONE_ID']").val(phone_id);
    modal.find(".phone").val(phone);

    modal.modal("show");
  });

  $(".phone-mask", document).mask('+7-(000)-000-00-00');
});
