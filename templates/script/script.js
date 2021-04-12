$(function () {
  $("button.mod", document).click(function () {
    var tr = $(this).parents("tr");
    var name = tr.find(".name").text();
    var phone = tr.find(".phone").text();
    var user_id = tr.data("user");
    var phone_id = tr.data("phone");
    var modal = $("#modal-mod", document);

    modal.find("[name='USER_ID']").val(user_id);
    modal.find(".name").val(name);
    modal.find("[name='PHONE_ID']").val(phone_id);
    modal.find(".phone").val(phone);

    modal.modal("show");
  });
});
